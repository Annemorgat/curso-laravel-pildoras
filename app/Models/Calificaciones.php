<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Calificaciones extends Model
{
    //
    public function calificacion(): MorphTo
    {
        return $this->morphTo();
    }
}
