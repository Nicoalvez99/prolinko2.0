<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Contadors;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'dni' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Función para crear un ID unico para cada usuario
        function generateRandomID($length = 15) {
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            $randomID = '';
        
            for ($i = 0; $i < $length; $i++) {
                $randomID .= $characters[rand(0, strlen($characters) - 1)];
            }
        
            return $randomID;
        }
        $randomID = generateRandomID();
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'dni' => $request->dni,
            'password' => Hash::make($request->password),
            'premium' => 'Simple',
            'tipoDeUsuario' => $request->tipoDeUsuario,
            'id_random' => $randomID
        ]);
        event(new Registered($user));
        Auth::login($user);
        if($request->tipoDeUsuario =='tienda'){
            return redirect(RouteServiceProvider::HOME);
        } else {
            return redirect(RouteServiceProvider::CONTADOR);
        }
        
    }
}
