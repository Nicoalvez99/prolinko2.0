<x-guest-layout>
    <h1 style="font-family: 'Poppins', sans-serif;; font-size: 40px;" class="px-5 text-center">Iniciar Sesion</h1>
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
        <div class="row d-flex px-5">
            <div class="col-4">
                <label for="remember_me">
                    <input type="checkbox" name="remember" id="remember_me" class="form-control">
                    <span>{{ __('Recuerdame') }}</span>
                </label>
            </div>

           <div class="col-4 col-offset-4">
           @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" style="color: blue;">{{ __('¿Olvidaste tu contraseña?') }}</a>
            @endif
           </div>
        </div>
    </form>
</x-guest-layout>