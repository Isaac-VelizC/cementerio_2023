<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->unsignedBigInteger('difunto_id')->nullable();
            $table->foreign('difunto_id')->references('id')->on('difuntos')->onDelete('cascade');
            $table->unsignedBigInteger('familiar_id');
            $table->foreign('familiar_id')->references('id')->on('familiars')->onDelete('cascade');
            $table->unsignedBigInteger('nicho_id')->nullable();
            $table->foreign('nicho_id')->references('id')->on('nichos')->onDelete('cascade');
            $table->unsignedBigInteger('tiposer_id');
            $table->foreign('tiposer_id')->references('id')->on('tipo_servicios')->onDelete('cascade');
            $table->decimal('precio', 5, 2)->default(0.00);
            $table->string('descripcion', 100)->nullable();
            $table->boolean('estado_pago')->default(false);
            $table->dateTime('fecha_registro')->default(now()->toDateTimeString());
            $table->dateTime('fecha_limite')->nullable();
            $table->string('estado', 5)->default('A');
            $table->unsignedBigInteger('personal_id')->nullable();
            $table->foreign('personal_id')->references('id')->on('personals')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
