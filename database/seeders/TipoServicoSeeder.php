<?php

namespace Database\Seeders;

use App\Models\TipoServicio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoServicio::create([ 'tipo' => 'Nichos', 'descripcion' => 'Se ingresa en un nicho al difunto']);
        TipoServicio::create([ 'tipo' => 'Incineracion', 'descripcion' => 'Se crea incinera al difunto']);
        TipoServicio::create([ 'tipo' => 'Tierra', 'descripcion' => 'Se sepulta en la tierra al difunto']);
    }
}
