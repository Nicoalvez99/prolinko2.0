<x-guest-layout>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <section class="card1 pt-3">
            <div class="shadow login">
                <div class="col-12 pt-2 text-center">
                    <img src="{{ asset('images/Logo.PNG') }}" class="img-fluid logoProlinkoLogin" alt="prolinko">
                </div>
                <div class="col-12 text-center">
                    <img src="{{ asset('images/Prolinko.png') }}" class="img-fluid px-5" alt="prolinko">
                </div>
                <div class="text-center">
                    <h1 style="font-family: 'Poppins', sans-serif;; font-size: 30px;" class="px-5 text-center">¡Registrate!</h1>
                    <a href="{{ route('login') }}" style="color: blue;">¿Ya estas registrado?</a>
                </div>
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

                <div class="col-12 my-2 px-3">
                    <label for="txtDni">DNI</label>
                    <input type="number" name="dni" class="form-control" id="">
                </div>

                <div class="row">
                    <!-- Password -->
                    <div class="col-12 col-sm-6 my-2 px-3">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control" required autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="col-12 col-sm-6 my-2 px-3">
                        <label for="confirmar_contraseña">Confirmar contraseña</label>
                        <input type="password" name="password_confirmation" class="form-control" required autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>
                <div class="col-12 d-grid gap-2 col-6 mx-auto mt-3 mb-2 pb-4 px-3">
                    <button type="button" id="btnContinuar" class="btn btn-primary">Continuar</button>
                </div>
            </div>
        </section>
        <section class="card2 visually-hidden">
            <div class="shadow login">
                <div class="col-12 pt-2 text-center">
                    <img src="{{ asset('images/Logo.PNG') }}" class="img-fluid logoProlinkoLogin" alt="prolinko">
                </div>
                <div class="col-12 text-center">
                    <img src="{{ asset('images/Prolinko.png') }}" class="img-fluid px-5" alt="prolinko">
                </div>
                <div class="text-center">
                    <h1 style="font-family: 'Poppins', sans-serif;; font-size: 30px;" class="px-5 text-center">¡Registrate!</h1>
                    <a href="{{ route('login') }}" style="color: blue;">¿Ya estas registrado?</a>
                </div>
                <div class="col-12 mt-3 text-center">
                    <h5>Tipo de usuario</h5>
                </div>
                <div class="row px-5 my-5">
                    <div class="col-6 text-center optRegister">
                        <lord-icon src="https://cdn.lordicon.com/qgmwimwj.json" trigger="hover" style="width:100px;height:100px">
                        </lord-icon>
                        <p>Tienda</p>
                        <input type="checkbox" name="tipoDeUsuario" value="tienda" class="form-check-input" style="border: 1px solid black;" id="checkUno">
                        
                    </div>
                    <div class="col-6 text-center optRegister">
                        <lord-icon src="https://cdn.lordicon.com/tvogyfhn.json" trigger="hover" style="width:100px;height:100px">
                        </lord-icon>
                        <p>Contador</p>
                        <input type="checkbox" name="tipoDeUsuario" value="contador" class="form-check-input" style="border: 1px solid black;" id="checkDos">
                        
                    </div>
                </div>
                <div class="col-12 d-grid gap-2 col-6 mx-auto mt-3 mb-2 pb-4 px-3">
                    <button type="submit" class="btn btn-primary">Registrarme</button>
                </div>
            </div>
        </section>
    </form>
</x-guest-layout>