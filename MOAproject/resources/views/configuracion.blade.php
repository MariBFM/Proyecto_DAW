@extends('layouts.app')

@section('content')
<div class="d-flex flex-column justify-content-between align-items-center h-100">
  @include("layouts.nav")
  <div id="contenido_home" class="container d-flex flex-column flex-grow-1">
    <div class="contenedor_agenda p-3">
      <div  class="crear_evento bg-light d-flex flex-column align-items-center p-3">
        <h2 class="fw-light">Editar perfil</h2>
        <div class="configurar_perfil">
          <div class="row">
            <div id="img_perfil" class="rounded-circle mb-2" style="background-image:url('{{auth()->user()->img_profile}}')">
            </div>
            <form  action="{{ route('image.upload.post') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="">
                  <input class="form-control" type="file" name="image" >
                </div>
                <div class="">
                  <button id="boton_moa" class="btn mt-2" type="submit" name="button">Guardar imagen</button>
                </div>

              </div>
            </form>
          </div>

          <form class="mt-3 d-flex flex-column" action="{{ route('update_user') }}" method="post">
            @csrf
            <div class="d-flex flex-column form-group m-2 tex-bolder fs-2 ">
              {{ auth()->user()->name }}
            </div>

            <div class="form-group row m-2">
              <label class="col-md-4 col-form-label text-md-right" for="">Nombre</label>
              <div class="col-md-6">
                <input class="form-control" type="text" name="name" value="" placeholder="{{auth()->user()->name}}">
              </div>
            </div>

            <div class="form-group row m-2">
              <label class="col-md-4 col-form-label text-md-right" for="">Apellidos</label>
              <div class="col-md-6">
                <input class="form-control" type="text" name="surname" value="" placeholder="{{auth()->user()->surname}}">
              </div>
            </div>

            <div class="form-group row m-2">
              <label class="col-md-4 col-form-label text-md-right" for="">Correo electrónico</label>
              <div class="col-md-6">
                <input class="form-control" type="email" name="email" value="" placeholder="{{auth()->user()->email}}">
              </div>
            </div>

            <div class="form-group row m-2">
              <div class="col-md-4">
                <label class=" col-form-label text-md-right" for="">Fecha de nacimiento</label>
                <span class="text-secondary">Fecha actual: {{auth()->user()->birth}}</span>
              </div>

              <div class="col-md-6">
                <input class="form-control" type="date" name="birth" value="">
              </div>
            </div>

            <div class="form-group row m-2">
              <label class="col-md-4 col-form-label text-md-right" for="">Cambiar contraseña</label>
              <div class="col-md-6">
                <input class="form-control" type="password" name="password" value="">
              </div>
            </div>


            <input id="boton_moa" class="btn align-self-center mt-2"type="submit" name="" value="Editar perfil">

          </form>
        </div>
      </div>
    </div>

  </div>
  @include("layouts.footer")
</div>
@endsection
