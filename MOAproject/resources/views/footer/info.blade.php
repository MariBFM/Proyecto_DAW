@extends('layouts.app')

@section('content')
  <div class="d-flex flex-column justify-content-between align-items-center h-100">
    <a href="/home" id="logo" class="text-decoration-none">MOA</a>
    <div id="contenido_home" class="container d-flex flex-column flex-grow-1 w-50 p-3 align-items-center fw-light bg-white">
      <h2 class="fw-normal">¡Bienvenido a My organizative agenda!</h2>
      <p>Esta página ha sido creada como parte de MOA Project, mi trabajo final de grado.
        Mi nombre es Marignacia Flores Muñoz y soy estudiante de Desarollo de aplicaciones web,
        en el IES Son Ferrer.<br><br>
        My organizative agenda es una página donde poder planificar tu día a día con la ayuda de eventos.
        Puedes crearlos, editarlos o borrarlos, estos se podrán visualizar en tu página al iniciar sesión.
        Además podrás cambiar tu foto de perfil siempre que lo desees.
        Si quieres saber más no dudes en escribirnos a través de la página de contacto.
        </p>
    </div>
    @include('layouts.footer')
  </div>
@endsection
