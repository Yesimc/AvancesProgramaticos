<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\System\Repositories\MateriaRepo;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct(MateriaRepo $materiaRepo)
    {
        $this->materiaRepo = $materiaRepo;
    }

    public function index()
    {
        $data = $this->materiaRepo->getMasterMateria();
        return view('dashboard.index', compact('data'));
    }
}
