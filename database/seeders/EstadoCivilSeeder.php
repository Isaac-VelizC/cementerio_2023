<?php

namespace Database\Seeders;

use App\Models\Estado_civil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estado_civil::create([ 'civil' =>'Soltero(a)' ]);
        Estado_civil::create([ 'civil' =>'Casado(a)' ]);
        Estado_civil::create([ 'civil' =>'Conviviente civil' ]);
        Estado_civil::create([ 'civil' =>'Separado(a)' ]);
        Estado_civil::create([ 'civil' =>'Divorciado(a)' ]);
        Estado_civil::create([ 'civil' =>'Viudo(a)' ]);
    }
}
