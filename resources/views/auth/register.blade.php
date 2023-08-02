<x-guest-layout>
    <section class="shadow">
        <img src="{{ asset('images/Prolinko.png') }}" class="img-fluid mx-auto pt-5 mb-2" width="370" alt="prolinko">
        <div class="text-center">
            <h1 style="font-family: 'Poppins', sans-serif;; font-size: 30px;" class="px-5 text-center">¡Registrate!</h1>
            <a href="{{ route('login') }}" style="color: blue;">¿Ya estas registrado?</a>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div class="col-12 my-2 px-3">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="name" :value="old('name')" required autofocus autocomplete="name">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="col-12 my-2 px-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" :value="old('email')" required autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="col-12 my-2 px-3">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="col-12 my-2 px-3">
                <label for="confirmar_contraseña">Confirmar contraseña</label>
                <input type="password" name="password_confirmation" class="form-control" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <div class="col-12 d-grid gap-2 col-6 mx-auto mt-3 mb-2 pb-4 px-3">
                <button type="submit" style="background-color: blue;" class="btn btn-primary">Registrarme</button>
            </div>
        </form>
    </section>
</x-guest-layout>