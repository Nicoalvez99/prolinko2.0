<?php

namespace App\Http\Controllers;

use App\Models\Contador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('contador', [
            "nombre" => $user->name,
            "email" => $user->email
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contador $contador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contador $contador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contador $contador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contador $contador)
    {
        //
    }
}
