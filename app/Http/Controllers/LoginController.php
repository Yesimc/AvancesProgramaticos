<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function post(LoginRequest $request)
    {
        if (Auth::attempt(['usuario' => $request->usuario, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->back()->withInput()->withErrors(['errors' => 'Password incorrecto']);
        }
    }
}
