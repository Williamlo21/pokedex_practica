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

        Schema::create('habilidads_pokemons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('habilidad_id')->constrained('habilidads');
            $table->foreignId('pokemon_id')->constrained('pokemon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
