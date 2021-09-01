<?php setlocale(LC_TIME,"es_ES"); ?>
@extends('layouts.app')

@section('content')
<div class="d-flex flex-column justify-content-between align-items-center h-100">
  <div class="loader"></div>
  @include("layouts.nav")
  <div id="contenido_home" class="container d-flex flex-column flex-grow-1">
    <div id="img_perfil" class="rounded-circle" style="background-image:url('{{auth()->user()->img_profile}}')"></div>
    <div class="contenedor_agenda d-flex flex-column justify-content-between align-items-center p-3 flex-grow-1">
      <div class="bg-light d-flex flex-column align-items-center w-100 mb-3 p-3" id="agenda">
        <div class="d-flex align-items-center row w-75">
          <a class="icons col-3 text-center" href="/home?day={{ date('Y-m-d',strtotime($day.'- 1 days'))  }}" ><i class="bi bi-chevron-compact-left"></i></a>
          <h2 class='fw-light col-6 text-center'>{{strftime("%A , %e de %B", $day->timestamp)}}</h2>
          <a class="icons col-3 text-center" href="/home?day={{ date('Y-m-d',strtotime($day.'+ 1 days'))  }}"><i class="bi bi-chevron-compact-right"></i></a>
        </div>
        <table class="w-75 mt-3 ">
          <tr class="">
            <th class="col-6 text-center">Hora</th>
            <th class="col-6 text-center">Eventos</th>
          </tr>
          @forelse($events as $eventItem)

                <tr>
                  <td class="text-center">
                    <p class="text-secondary ">{{ $eventItem->hour_event }}</p>
                  </td>
                  <td class="text-center">
                    <button class="{{ $eventItem->type }}" type="button" name="button" data-toggle="popover" title="{{ $eventItem->title}}" data-content="{{$eventItem->hour_event.'<br>'.$eventItem->description}}">
                      {{ $eventItem->title }}
                    </button>
                  </td>
                </tr>

          @empty
          <tr class="mt-3">
            <td colspan="2" class="text-center text-secondary ">No hay eventos para este día.</td>
          </tr>

          @endforelse
        </table>

      </div>
      <div class="">
        <a href="/crearEvento" id="boton_crear" class="btn bg-light p-3">CREAR EVENTO</a>
      </div>
    </div>
  </div>
  @include("layouts.footer")
</div>
<script type="text/javascript">

$(window).on("load",function(){
  $(".loader").fadeOut("slow");
});

  $(document).ready(function(){
    $('[data-toggle="popover"]').popover({
      trigger: "hover",
      placement : 'right',
      html:true
    });
  });
</script>
@endsection
