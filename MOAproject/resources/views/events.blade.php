@extends('layouts.app')

@section('content')

  <div class="d-flex flex-column justify-content-between align-items-center h-100">
    @include('layouts.nav')
    <div id="contenido_home" class="container d-flex flex-column flex-grow-1">
      <div id="img_perfil" class="rounded-circle" style="background-image:url('{{auth()->user()->img_profile}}')">
      </div>
      <div class="contenedor_agenda p-3">
        <div class="bg-light d-flex flex-column align-items-center p-3" id="agenda">
          <table class="w-75 m-3">
            <tr>
              <th class="text-center">Día</th>
              <th class="text-center">Hora</th>
              <th class="text-center">Título</th>
              <th class="text-center">Tipo</th>
              <th class="text-center">Descripción</th>
              <th class="text-center"></th>
            </tr>
            @forelse($event as $eventItem)
              <tr>
                <td class="text-center">
                  {{ $eventItem->day_event }}
                </td>
                <td class="text-center">
                  {{ $eventItem->hour_event }}
                </td>
                <td class="text-center">
                  {{ $eventItem->title }}
                </td>
                <td class="text-center">
                  <button class="{{ $eventItem->type }}" >
                        {{ $eventItem->type }}
                  </button>
                </td>
                <td>
                  {{ $eventItem->description }}
                </td>
                <td class="d-flex align-items-center justify-content-around">
                  <a id="btn_edit" class="btn " href="{{ route('edit_event', $eventItem) }}">Editar</a></button>

                  <button class="btn_drop" onclick="conf()" type="button" name="button">Borrar</button>
                  <form id="drop_event" action="{{ route('drop_event', $eventItem) }}" method="POST" class="d-none">
                      @csrf @method('DELETE')
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="6" class="text-center pt-3 text-secondary">No hay eventos creados. <br> <a href="/crearEvento" id="boton_crear" class="btn bg-light p-3">¡Crealos aquí!</a></td>
              </tr>
            @endforelse
          </table>
        </div>
      </div>
    </div>
    @include('layouts.footer')

  </div>
  <script type="text/javascript">
    function conf(){
      let drop = confirm("¿Seguro que quieres eliminar este evento?");
      if (drop) {
        document.getElementById('drop_event').submit();
      }
    }
  </script>
@endsection
