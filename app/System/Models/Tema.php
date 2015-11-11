<?php

namespace App\System\Models;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $fillable = ['materia_id', 'maestro_id', 'ciclo_id', 'tema', 'unidad', 'fecha'];
}
