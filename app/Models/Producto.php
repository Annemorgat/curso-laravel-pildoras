<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        "nombre_producto",
        "seccion",
        "pais_origen",
        "image_url"
    ];
}
