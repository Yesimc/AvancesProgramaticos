<?php

namespace App\Http\Controllers\Tema;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\TemaRequest\StoreTema;
use App\Http\Controllers\Controller;
use App\System\Repositories\TemaRepo;

class TemaController extends Controller
{
    private $temaRepo;

    public function __construct(TemaRepo $temaRepo)
    {
        $this->temaRepo = $temaRepo;
    }

    public function index($id)
    {
        return view('tema.create', compact('id'));
    }

    public function getTema()
    {
        return $this->temaRepo->getTemas();
    }

    public function postTema(StoreTema $request, $id)
    {
        return $this->temaRepo->postTema($id);
    }
}
