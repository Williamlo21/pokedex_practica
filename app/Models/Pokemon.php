<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Habilidad;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pokemon extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tipo',
        'altura',
        'peso',
    ];

    public function habilidades(){
        return $this->belongsToMany(Habilidad::class, 'habilidads_pokemons');
    }

}
