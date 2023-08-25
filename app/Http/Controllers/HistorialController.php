<?php

namespace App\Http\Controllers;

use App\Models\Historial;
use App\Models\Productos;
use App\Models\Proveedores;
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
        $totalProductos = count(Productos::where('user_id', '=', $user->id)->get());
        $totalProveedores = count(Proveedores::where('user_id', '=', $user->id)->get());
        $totalHistorial = Historial::where('user_id', '=', $user->id)->sum('total');

        // Obtener ventas por día de la semana de la última semana
        $ventasPorDia = Historial::where('user_id', '=', $user->id)
            ->whereBetween('created_at', [now()->subWeek(), now()]) // Filtrar por la última semana
            ->selectRaw('DAYOFWEEK(created_at) as dia_semana, COUNT(*) as cantidad_ventas')
            ->groupBy('dia_semana')
            ->orderBy('dia_semana')
            ->get();

        // Crear un arreglo asociativo para almacenar las ventas por día de la semana
        $ventasPorDiasSemana = [];
        foreach ($ventasPorDia as $venta) {
            // Mapa de día de la semana a su nombre
            $nombresDias = [
                1 => 'domingo',
                2 => 'lunes',
                3 => 'martes',
                4 => 'miércoles',
                5 => 'jueves',
                6 => 'viernes',
                7 => 'sábado',
            ];

            // Obtener el nombre del día
            $nombreDia = $nombresDias[$venta->dia_semana];

            // Almacenar en el arreglo asociativo
            $ventasPorDiasSemana[$nombreDia] = $venta->cantidad_ventas;
        }

        return view('dashboard', [
            "historials" => Historial::where('user_id', '=', $user->id)
                ->orderByDesc('created_at')
                ->get(),
            "totalProductos" => $totalProductos,
            "totalProveedores" => $totalProveedores,
            "totalHistorial" => $totalHistorial,
            "ventasPorDiasSemana" => $ventasPorDiasSemana,
        ]);
    }
}
