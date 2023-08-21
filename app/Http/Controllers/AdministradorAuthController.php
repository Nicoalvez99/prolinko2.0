<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Models\User;

class AdministradorAuthController extends Controller
{
    public function __invoke()
    {
        //
    }
    public function index()
    {
        return view('super-admin.administrador', [
            "users" => User::get()
        ]);
    }
    
}
