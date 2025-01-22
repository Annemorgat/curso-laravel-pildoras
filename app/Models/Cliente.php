<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Articulo;
use App\Models\Perfil;
use App\Models\Calificaciones;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Cliente extends Model
{
    protected $fillable = [
        'nombre',
        'apellidos'
    ];

    /*public function articulo(): HasOne
    {
        return $this->hasOne(Articulo::class);
    }*/

    public function articulos():HasMany
    {
        return $this->hasMany(Articulo::class);
    }

    public function perfils(): BelongsToMany
    {
        return $this->belongsToMany(Perfil::class);
    }

    public function calificaciones(): MorphMany
    {
        return $this->morphMany(Calificaciones::class, 'calificacion');
    }
}
