<?php
/**
 * Created by PhpStorm.
 * User: yesenia
 * Date: 09/11/2015
 * Time: 07:32 PM
 */

namespace App\System\Repositories;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MateriaRepo
{
    public function getMasterMateria()
    {
        $materias = DB::select("select materia, materias.id as materia_id from maestros
            join maestro_materia
                on maestro_materia.maestro_id = maestros.id
            join materias
                on maestro_materia.materia_id = materias.id
            where maestros.id = ?", [Auth::user()->id]);

        return $materias;
    }
}