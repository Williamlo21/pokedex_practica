<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'habilidad',
        'descripcion',

    ];

    public function pokemons(){
        return $this->belongsToMany(Pokemon::class, 'habilidads_pokemons');
    }
}
