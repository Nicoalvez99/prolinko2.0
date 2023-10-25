<?php

namespace App\Http\Controllers;

use App\Models\Contadors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ContadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $clientes = Contadors::where('id_random', '=', $user->clientes);
        //Hacer que esto funcione
        $prueba = $user->clientes;
        return view('contador', [
            "nombre" => $user->name,
            "email" => $user->email,
            "clientes" => $clientes,
            "prueba" => $prueba
        ]);
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
        Contadors::create([
            "clientes" => request('id_cliente')
        ]);
        return redirect()->route('contador')->with('status', 'Cliente agregado correctamente');
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
