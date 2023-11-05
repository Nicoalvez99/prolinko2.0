<x-guest-layout>
    <div class="pt-5">
        <div class="shadow h-full login">
            <div class="col-12 pt-3 text-center">
                <img src="{{ asset('images/Logo.PNG') }}" class="img-fluid logoProlinkoLogin"  alt="">
            </div>
            <div class="col-12 text-center mb-2">
                <img src="{{ asset('images/Prolinko.png') }}" class="img-fluid logoNombreProlinkoLogin px-5"  alt="prolinko">
            </div>
            <div class="text-center">
                <h1 style="font-family: 'Poppins', sans-serif;; font-size: 30px;" class="px-5 text-center">Iniciar Sesion</h1>
                <span class="px-5 my-3">¿Aún no estas registrado? <a style="color: blue" href="{{ route('register') }}">¡Registrate!</a></span>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form action="{{ route('login') }}" method="post">
                @csrf

                <!-- Email Address -->
                <div class="col-12 px-5">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" :value="old('email')" required autofocus autocomplete="username">
                </div>
                <div class="col-12 px-5 my-3">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" class="form-control" :value="old('password')" required autocomplete="current-password">
                </div>
                <div class="row d-block px-5">
                    <div class="col-12 col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                <span>{{ __('Recuerdame') }}</span>
                            </label>
                        </div>

                    </div>

                    <div class="col-12 text-center">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" style="color: blue;">{{ __('¿Olvidaste tu contraseña?') }}</a>
                        @endif
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto my-2 pb-5">
                    <button class="btn btn-primary" type="submit">Iniciar Sesion</button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>