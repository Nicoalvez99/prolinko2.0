<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class SuperadminMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = auth()->user();

        if ($user && $user->tipoDeUsuario == 'Administrador') {
            return $next($request);
        }

        return abort(404, 'Página no encontrada');
    }
}

