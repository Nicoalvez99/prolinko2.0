<x-guest-layout>
    <div class="row mt-5">
        <div class="col-12 text-center">
            <img src="{{ asset('images/Prolinko1.PNG') }}" width="400" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-12 px-3 my-3">
            <p>¿Olvidaste tu contraseña? Ningún problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace para restablecer su contraseña que le permitirá elegir una nueva.</p>
        </div>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="col-12 px-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="" class="form-control" :value="old('email')" required autofocus>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="col-12 my-2 px-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</x-guest-layout>
