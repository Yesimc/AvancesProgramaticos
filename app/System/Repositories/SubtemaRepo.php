<?php

namespace App\System\Repositories;


use Illuminate\Support\Facades\DB;

class SubtemaRepo
{
    public function getTemas()
    {
        $subtemas = DB::table('subtemas')->get();
        return $subtemas;
    }

    public function postTema()
    {

    }
}