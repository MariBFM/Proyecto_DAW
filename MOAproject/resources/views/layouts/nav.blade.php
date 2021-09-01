<nav id="navegacion" class="w-100 d-flex justify-content-between align-items-center p-5">
  <a href="/home" id="littlelogo" class="navbar-brand ">MOA</a>
  <ul id="nav" class="nav nav-tabs justify-content-around w-75">
    <li class="nav-item ">
      <a href="/home" class="nav-link {{ request()->routeIs('home') ? 'active text-secondary' : '' }}">Agenda</a>
    </li>
    <li class="nav-item">
      <a href="/events" class="nav-link {{ request()->routeIs('events') ? 'active text-secondary' : '' }}" >Eventos</a>
    </li>
    <li class="nav-item">
      <a href="/perfil" class="nav-link {{ request()->routeIs('configuracion') ? 'active text-secondary' : '' }}">Configuración</a>
    </li>
  </ul>
  <button id="boton_moa" type="button" name="button" class="btn" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Cerrar sesión</button>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
  </form>
</nav>
