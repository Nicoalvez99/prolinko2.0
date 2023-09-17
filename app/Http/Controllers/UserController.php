<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function __invoke()
    {
        //
    }
    public function update(User $user, Request $request){
        $validatedData = $request->validate([
            "tipoDeTienda" => 'required'
        ]);
    
        // Actualiza el valor de "tipoDeTienda" para el usuario actual
        $user->update([
            'tipoDeTienda' => $validatedData['tipoDeTienda']
        ]);        
        return redirect()->route('tienda');
    }
}
