<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class loginSuperAdminController extends Controller
{
    public function login()
    {
        $credentials = $this->validate(request(), [
            'email' => 'email|required',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Estas credenciales no concuerdan con nuestros registros']);
    }
}