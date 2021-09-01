@extends('layouts.app')

@section('content')
  <div class="d-flex flex-column justify-content-between align-items-center h-100">
    <a href="/home" id="logo" class="text-decoration-none">MOA</a>
    <div id="contenido_home" class=" bg-white w-50 d-flex justify-content-center">
      <nav id="nav_help" class="nav flex-column m-2 w-25">
        <a class="link_help" href="#crear_cuenta">Crear una cuenta</a>
        <a class="link_help" href="#sesion">Sesión</a>
        <a class="link_help" href="#crear_eventos">Crear eventos</a>
        <a class="link_help" href="#editar_borrar">Gestionar eventos</a>
        <a class="link_help" href="#perfil">Editar perfil</a>
        <a class="link_help" href="#contacto">Contactar con nosotros</a>
      </nav>
      <div class="m-0 p-3 w-75 fw-light">
        <div id="crear_cuenta" class="mb-3">
          <h2 class="fw-normal">Crear una cuenta</h2>
          <p>Cuando entras a la página web por primera vez nos encontramos con el formulario de
            inicio de sesión, para registrarte necesitas ir al enlace de abajo.</p>
            <img class="img-fluid" src="/imagenes/cap1.png">
          <p>Llegamos a la página de registro. ¡Aquí es obligatorio rellenar todos los campos!
            Al acabar hacemos click en el botón y listo, ¡A disfrutar!
            Recuerda que si ya tienes una cuenta puedes volver con el siguiente enlace.</p>
            <img class="img-fluid m-2" src="/imagenes/cap2.png" alt="">

        </div>
        <div id="sesion" class="mb-3">
          <h2 class="fw-normal">Iniciar y cerrar sesión</h2>
          <p>Para iniciar sesión solo tienes que ir a la página principal, rellenar las credenciales
            y acceder con el botón de Iniciar sesión.</p>
          <p>Una vez detro para cerrar la sesión encontrarás en la barra de navegación el botón
            correspondiente. ¡Recuerda cerrar siempre la sesión si no te conectas desde tu dispositivo!</p>
            <img class="img-fluid m-2" src="/imagenes/cap8.png" alt="">
        </div>
        <div id="crear_eventos" class="mb-3">
          <h2 class="fw-normal">Crear eventos</h2>
          <p>Esta agenda virtual funciona a través de eventos, por lo tanto crearlos es muy fácil.
            Cuando inicias sesión la primera página en mostrarse es la agenda, y debajo de ella se
            encuentra un botón grande que te lleva a la creación de eventos.</p>
            <img class="img-fluid m-2" src="/imagenes/cap4.png" alt="">
          <p>Con este formulario podrás detallar el evento tanto como quieras. Al acabar de damos a botón y ¡hecho!</p>
            <img class="img-fluid m-2" src="/imagenes/cap3.png" alt="">
        </div>
        <div id="editar_borrar" class="mb-3">
          <h2 class="fw-normal">Editar y borrar eventos</h2>
          <p>Para editar o borrar un eventos nos vamos a la página eventos de la barra de navegación,
            allí nos encontraremos todos nuestros eventos creados, y con los botones podremos editar
            o borrar el que corresponda.</p>
            <img class="img-fluid m-2" src="/imagenes/cap5.png" alt="">
          <p>El botón de editar nos llevará a la página de edición, se nos muestra toda la información del
            evento para saber que cambios hacer. Para borrar un elemento aparecerá una alert para confirmar si
            estamos seguros.</p>
        </div>
        <div id="perfil" class="mb-3">
          <h2 class="fw-normal">Configurar perfil</h2>
          <p>En la página de configuración tenemos el siguiente formulario, en el podemos añadir una imágen para nuestro perfil
            o cambiar cualquier campo de nuestro perfil.</p>
            <img class="img-fluid m-2" src="/imagenes/cap7.png" alt="">
        </div>
        <div id="contacto" class="mb-3">
          <h2 class="fw-normal">Contactar con nosotros</h2>
          <p>Si tienes alguna duda siempre puedes acceder a la página de <a class="text-decoration-none"href="{{ route('contact.index' )}}">contactos</a> donde podras enviar un correo.
            !Lo leeremos lo antes posible!</p>
        </div>
        </div>
      </div>

    @include('layouts.footer')
  </div>
@endsection
