<?php

namespace App\Http\Controllers;

use App\Models\Contadors;
use App\Models\Notifications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ContadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Contadors $contador)
    {
        $user = Auth::user();
        $clientes = Contadors::where('id_contador', '=', $user->id)->get();
        $cantidadDeClientes = Contadors::where('id_contador', '=', $user->id)->count();

        if($cantidadDeClientes > 0) {
            $datosUsuarios = User::where('id_random', '=', $clientes[0]["clientes"])->get();
            return view('contador', [
                "nombre" => $user->name,
                "email" => $user->email,
                "clientes" => $clientes,
                "usuarios" => $datosUsuarios
            ]);
        } else {
            return view('contador');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*Contadors::create([
            "clientes" => request('id_cliente'),
            "id_contador" => Auth::user()->id
        ]);*/
        $user = Auth::user();
        Notifications::create([
            "id_contador" => $user->id,
            "nombre" => $user->name,
            "email" => $user->email,
            "id_cliente" => request('id_cliente')
        ]);
        return redirect()->route('contador')->with('status', 'Solicitud enviada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contadors $contador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contadors $contador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contadors $contador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contadors $contador)
    {
        //
    }
}
