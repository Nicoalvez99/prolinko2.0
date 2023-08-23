<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark slide">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <img src="{{ asset('images/Logo-blanco.PNG') }}" width="40" alt="">
        <span class="fs-4 mx-2">Administrador</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto slideIcon">
        <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
                <i class="bi bi-people"></i>
                Usuarios
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="bi bi-currency-dollar"></i>
                Precios
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="bi bi-gear"></i>
                Configuraciones
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Cerrar sesion</a></li>
            </form>
        </ul>
    </div>
</div>