<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidades extends Model
{
    use HasFactory;

    protected $fillable = [
        'habilidad',
        'descripcion',

    ];

    public function pokemons(){
        return $this->hasMany(Pokemon::class, 'habilidades_pokemon');
    }
}
