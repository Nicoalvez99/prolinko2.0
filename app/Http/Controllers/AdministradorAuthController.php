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
        $totalUsers = count(User::get());
        $totalUserPremium = count(User::where('premium', '=', 'Premium')->get());
        $totalUserSimple = count(User::where('premium', '=', 'Simple')->get());
        return view('super-admin.administrador', [
            "users" => User::get(),
            "totalUsers" => $totalUsers,
            "totalUserPremium" => $totalUserPremium,
            "totalUserSimple" => $totalUserSimple
        ]);
    }

    public function update(User $user, Request $request)
    {
        $user->update([
            "premium" => request('premium')
        ]);
        return redirect()->route('administrador')->with('status', 'Usuario editado correctamente');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('administrador')->with('status', 'Usuario eliminado correctamente');
    }
}
