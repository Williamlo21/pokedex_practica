<?php

namespace Database\Seeders;

use App\Models\Habilidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HabilidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Habilidad::create(['habilidad' => 'NADAR', 'descripcion' => 'Permite al pokemon nadar']);
        Habilidad::create(['habilidad' => 'CORRER', 'descripcion' => 'Permite al pokemon correr']);
        Habilidad::create(['habilidad' => 'VOLAR', 'descripcion' => 'Permite al pokemon volar']);
    }
}
