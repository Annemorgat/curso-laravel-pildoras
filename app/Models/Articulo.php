<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Cliente;
use App\Models\Calificaciones;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Articulo extends Model
{
    use SoftDeletes;

    // Vincula el modelo con la tabla de la BBDD, no es necesario si el nombre de la tabla es el mismo que el del modelo pero en plural.
    protected $table ="articulos";

    // Permite crear registros con los siguientes datos en masa.
    protected $fillable = [
        "nombre_articulo",
        "precio",
        "pais_origen",
        "observaciones",
        "seccion"
    ];

    // Variable para SoftDeletes
    protected $dates = ['deleted_at'];

    public function cliente():BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }

    public function calificaciones(): MorphMany
    {
        return $this->morphMany(Calificaciones::class, 'calificacion');
    }
}
