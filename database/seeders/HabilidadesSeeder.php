<?php

namespace Database\Seeders;

use App\Models\Habilidades;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HabilidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Habilidades::create(['habilidad' => 'NADAR', 'descripcion' => 'Permite al pokemon nadar']);
        Habilidades::create(['habilidad' => 'CORRER', 'descripcion' => 'Permite al pokemon correr']);
        Habilidades::create(['habilidad' => 'VOLAR', 'descripcion' => 'Permite al pokemon volar']);
    }
}
