@extends('layouts.app')

@section('content')
<div class="d-flex flex-column justify-content-between align-items-center h-100">
  @include("layouts.nav")
  <div id="contenido_home" class="container d-flex flex-column flex-grow-1">
    <div id="img_perfil" class="rounded-circle" style="background-image:url('{{auth()->user()->img_profile}}')">
    </div>
    <div class=" contenedor_agenda p-3">
      <div class="crear_evento bg-light d-flex flex-column align-items-center p-3">
        <h2 class="fw-light">Editar evento</h2>

        <form class="" action="{{ route('update_event', $event) }}" method="POST">
          @csrf @method('PATCH')
          <div class="form-group row m-2">
            <label class="col-md-4 col-form-label text-md-right" for="title">Nombre del evento </label>
            <div class="col-md-6 ">
              <input class="form-control"type="text" name="title" value="{{ $event->title }}">
            </div>
          </div>

          <div class="form-group row m-2">
            <label for="day" class="col-md-4 col-form-label text-md-right">Día del evento</label>
            <div class="col-md-6">
              <p class="text-secondary">{{ $event->day_event}}</p>
              <input class="form control border" type="date" name="day" >
            </div>
            <!--<input type="date" name="fecha_fin" value="">-->
          </div>

          <div class="form-group row m-2">
            <label for="hour" class="col-md-4 col-form-label text-md-right">Hora del evento</label>
            <div class="col-md-6">
              <p class="text-secondary">{{ $event->hour_event}}</p>
              <input class="form-control" type="time" name="hour">
            </div>
          </div>

          <div class="form-group row m-2">
            <label class="col-md-4 col-form-label text-md-right" for="type">Selecciona tipo de evento</label>
            <div class="col-md-6">
              <p class="text-secondary">{{ $event->type }}</p>
              <select class="form-control" name="type">
                <option value="Nota">Nota</option>
                <option value="Aniversario">Aniversario</option>
                <option value="Reunion">Reunion</option>
                <option value="Examen">Examen</option>
              </select>
            </div>
          </div>

          <div class="form-group m-2">
            <label class="col-form-label text-md-right" for="description">Editar descripción</label>
            <div class="">
              <textarea class="form-control" name="description" rows="8" cols="80">{{ $event->description }}</textarea>
            </div>
          </div>

          <div class="d-flex justify-content-center m-2">
            <button  type="submit" id="boton_moa" class="btn">Editar evento</button>
          </div>


        </form>
      </div>
    </div>
  </div>
  @include("layouts.footer")
</div>
@endsection
