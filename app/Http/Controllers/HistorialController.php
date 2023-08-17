<?php

namespace App\Http\Controllers;
use App\Models\Historial;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HistorialController extends Controller
{
    public function __invoke()
    {
        //
    }
    public function index()
    {
        $user = Auth::user();
        return view('dashboard', [
            "historials" => Historial::where('user_id', '=', $user->id)->get()
        ]);
    }
}
