<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ciudad::create([ 'nombre' =>'Beni' ]);
        Ciudad::create([ 'nombre' =>'Chuquisaca' ]);
        Ciudad::create([ 'nombre' =>'Cochabamba' ]);
        Ciudad::create([ 'nombre' =>'La Paz' ]);
        Ciudad::create([ 'nombre' =>'Oruro' ]);
        Ciudad::create([ 'nombre' =>'Pando' ]);
        Ciudad::create([ 'nombre' =>'Potosi' ]);
        Ciudad::create([ 'nombre' =>'Santa Cruz' ]);
        Ciudad::create([ 'nombre' =>'Tarija' ]);
    }
}
