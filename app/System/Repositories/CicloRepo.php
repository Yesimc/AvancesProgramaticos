<?php

namespace App\System\Repositories;
use App\System\Models\Ciclo;

class CicloRepo
{
    public function getCiclo()
    {
        $ciclo = Ciclo::where('status', 1)->first();
        return $ciclo->id;
    }
}