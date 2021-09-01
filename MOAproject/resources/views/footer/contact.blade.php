@extends('layouts.app')

@section('content')
<div class="d-flex flex-column justify-content-between align-items-center h-100">
  <a href="/home" id="logo" class="text-decoration-none">MOA</a>
  <div class="">
    <h2 class="fw-light">Contacta con nosotros</h2>
    <div class="border shadow bg-body rounded p-3">
      <form class="d-flex flex-column align-items-center" action="{{ route('contact.store')}}" method="post">
        @csrf
        <input class="form-control mt-3 w-75" type="text" name="name" placeholder="Nombre...">
        <input class="form-control mt-3 w-75" type="email" name="email" placeholder="Email...">
        <input class="form-control mt-3 w-75" type="text" name="subject" placeholder="Asunto...">
        <textarea class="form-control mt-3 w-75" name="text" rows="8" cols="80" placeholder="Mensaje..."></textarea>
        <input id="boton_moa" class="btn mt-3" type="submit" name="" value="Enviar">
      </form>
    </div>
  </div>

  @include('layouts.footer')
</div>

@endsection
