<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\System\Repositories\SubtemaRepo;
use App\Http\Requests\SubtemaRequest\StoreSubtema;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SubtemaController extends Controller
{
    private $subtemaRepo;

    public function __construct(SubtemaRepo $subtemaRepo)
    {
        $this->subtemaRepo = $subtemaRepo;
    }

    public function getSubtema()
    {
        $subtema = $this->subtemaRepo->getTemas();
        return $subtema;
    }

    public function  postSubtema(StoreSubtema $request)
    {
        return 's';
    }

}
