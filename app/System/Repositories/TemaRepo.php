<?php

namespace App\System\Repositories;
use App\System\Models\Tema;
use App\System\Repositories\CicloRepo;

class TemaRepo
{
    public function __construct(CicloRepo $cicloRepo)
    {
        $this->cicloRepo = $cicloRepo;
    }

    public function getTemaId()
    {

    }

    public function getTemas()
    {
        return $temas = Tema::all();
    }

    public function postTema($value)
    {
        $tema = new Tema();
        $tema->maestro_id   = $value;
        $tema->materia_id   = request()->get('materia_id');
        $tema->ciclo_id     = $this->cicloRepo->getCiclo();
        $tema->unidad       = request()->get('unidad');
        $tema->tema         = request()->get('tema');
        $tema->fecha        = request()->get('fecha');
        $tema->save();
        return $tema;
    }
}