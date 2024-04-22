<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
        'habilidades',
    ];

    public function habilidades(){
        return $this->HasMany(Habilidades::class, 'habilidades_pokemon');
    }

}
