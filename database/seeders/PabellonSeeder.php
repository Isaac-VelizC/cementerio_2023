<?php

namespace Database\Seeders;

use App\Models\Pabellon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PabellonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pabellon::create([ 'codigo' => 'PAB-101',]);
        Pabellon::create([ 'codigo' => 'PAB-201',]);
        Pabellon::create([ 'codigo' => 'PAB-301',]);
    }
}
