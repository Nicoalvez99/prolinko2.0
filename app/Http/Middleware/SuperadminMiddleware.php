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
        if (Auth::check() && Auth::user()->isSuperAdmin()) {
            return $next($request);
        }

        return redirect('/'); // o redirecciona a donde desees para usuarios no superadmin
    }
}

