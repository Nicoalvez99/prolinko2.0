<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\ProfileUpdateRequest;

class UserController extends Controller
{
    public function __invoke()
    {
        //
    }
    public function index()
    {
        $tipoDeTienda = Auth::user()->tipoDeTienda;
        return view('configuracion', [
            "tipoDeTienda" => $tipoDeTienda
        ]);
    }

    public function update(User $user, Request $request)
    {

        // Actualizar el perfil del usuario autenticado
        $user = Auth::user();
        $user->tipoDeTienda = $request->input('optCantidad');
        // Actualiza otras columnas según sea necesario

        $user->save();

        return redirect()->route('config.user')->with('status', 'Configuración aplicada correctamente');
    }
}
