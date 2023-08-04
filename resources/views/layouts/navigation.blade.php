<nav class="navbar navbar-expand-lg bg-body-tertiary navBar">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('tienda') }}">Prolinko</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ulBot">
        <li class="nav-item">
          <a href="{{ route('tienda') }}" class="nav-link" aria-current="page"><i class="bi bi-shop-window"></i> Tienda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}"> <i class="bi bi-bar-chart"></i> Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('proveedores') }}"><i class="bi bi-person-lines-fill"></i> Proveedores</a>
        </li>
      </ul>
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
        </a>
        <ul class="dropdown-menu dropToggle">
          <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a></li>
          <form action="{{ route('logout') }}" method="post">
            @csrf 
            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Cerrar sesion</a></li>
          </form>
        </ul>
      </div>
    </div>
  </div>
</nav>