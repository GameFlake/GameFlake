@extends('layouts.layout')

@section('pageTitle', "GameFlake - Ofertas")


@section('header')
  <div class="container">
    <h1 class='text-center titulo'>
      Ofertas recibidas
    </h1>
  </div>
@endsection

@section('mainContent')

  <div class="container">
    @if (count($ofertaquery) != 0)  
    <table class="responsive-table striped mb-5" >
        
        <thead class="grey darken-4">
          <tr class="white-text">
              <th class="center-align">Nombre</th>
              <th class="center-align">Quiere cambiar su</th>
              <th class="center-align">Por tu</th>
              <th class="center-align">Acciones</th>
              <th class="center-align">Estado</th>
          </tr>
        </thead>
        
        <tbody class="deep-purple darken-4 white-text">
        @foreach ($ofertaquery as $oferta)

            <tr>
              <td class="center-align">{{ $oferta["nombre"] }} {{ $oferta["Apellido"] }}</td>
              <td class="center-align">{{ $oferta["TO"] }}</td>
              <td class="center-align">{{ $oferta["TR"] }}</td>
              <td class="center-align">
                
                @if($oferta["estado"] === 'Pendiente')
                  <!-- Aceptar -->
                  <form action="{{ url('/ofertas/'.$oferta['id'].'/update') }}" method="post" style="display: inline">
                    @csrf
                    <input id="estado" name="estado" type="hidden" value ='Aprobado'>
                    <button type="submit" class="btn green accent-4 tooltipped" 
                            data-tooltip="Aceptar" data-position="top"
                            onclick="return confirm('¿Estas seguro que quieres aceptar la oferta?') ;">
                            <i class="material-icons medium white-text">check</i>
                    </button>
                  </form>
                
                  <!-- Rechazar -->
                  <form action="{{ url('/ofertas/'.$oferta['id'].'/update') }}" method="post" style="display: inline">
                    @csrf
                    <input id="estado" name="estado" type="hidden" value ='Rechazado'>
                    <button type="submit" class="btn red darken-1 tooltipped" 
                            data-tooltip="Rechazar" data-position="top"
                            onclick="return confirm('¿Estas seguro que quieres borrar la oferta?') ;">
                            <i class="material-icons medium white-text">close</i>
                    </button>
                  </form>
                @elseif($ofertas["estado"] == 'intercambiando')

                @endif
              </td>
              <td class="center-align">
                <span data-badge-caption="" data-position="top"
                @if ($oferta["estado"] === 'Pendiente')
                  data-tooltip="Esta oferta aún espera una respuesta"
                  class="new badge tooltipped yellow darken-2"
                @else
                  data-tooltip="Esta oferta fue aceptada"
                  class="new badge tooltipped green accent-4"
                @endif
                >{{ $oferta["estado"] }}
                </span>
              </td>
            </tr>
        @endforeach
        </tbody>           
    </table>
    @else
    <div class="col s12 m7">
    <div class="card horizontal deep-purple lighten-4 mb-5">
      <div class="card-stacked">
        <div class="card-content center-align">
          <h5>No hay ofertas disponibles por el momento</h5>
        </div>
      </div>
    </div>
    </div> 
    @endif
  
 
    <h1 class='text-center titulo'> Ofertas realizadas</h1>

    @if (count($misofertas) != 0)  
    <table  class="responsive-table mb-5" >
      <thead class="grey darken-4 ">
        <tr class="white-text  ">
            <th class="center-align">Quieres cambiar tu</th>
            <th class="center-align">Por</th>
            <th class="center-align">De</th>
            <th class="center-align">Eliminar</th>
            <th class="center-align">Estado</th>
        </tr>
      </thead>

      <tbody class="deep-purple darken-4 white-text">
      @foreach ($misofertas as $ofertas)
          <tr >
            <td class="center-align">{{ $ofertas["TR"] }}</td>
            <td class="center-align">{{ $ofertas["TO"] }}</td>
            <td class="center-align">{{ $ofertas["nombre"] }} {{ $ofertas["Apellido"] }}</td>
            <td class="center-align">
              <form action="{{ url('/ofertas/'.$ofertas['id']) }}" method="post" class="formulario-eliminar" id='formulario-eliminar'>
                @csrf
                {{ method_field('DELETE') }}
                <button type="submit" value="delete" class="btn red darken-1" id="btn-submit" onclick="return confirm('¿Estas seguro que quieres borrar?') ;"> 
                  <i class="material-icons white-text">close</i> 
                </button>
              </form>
            </td>               
            <td class="center-align">
              <span data-badge-caption="" data-position="top"
                @if ($ofertas["estado"] === 'Pendiente')
                  data-tooltip="Esta oferta aún espera una respuesta"
                  class="new badge tooltipped yellow darken-2"
                @else
                  data-tooltip="Esta oferta fue aceptada"
                  class="new badge tooltipped green accent-4"
                @endif
                >{{ $ofertas["estado"] }}
              </span>
            </td>
          </tr>
      @endforeach
      </tbody>
    </table>
    @else  
    <div class="col s12 m7">
      <div class="card horizontal deep-purple lighten-4 mb-5">
        <div class="card-stacked">
          <div class="card-content center-align">
            <h5>No hay ofertas disponibles por el momento</h5>
          </div>
        </div>
      </div>
    </div>
    @endif

    
  </div>

@endsection

@push('scripts')
  @if(Session::has('update'))
  <script>
    Swal.fire(
            '¡Aceptado!',
            'La oferta fue aceptada.',
            'success'
          );
  </script>
  @endif

  @if(Session::has('eliminate'))
    <script>
     Swal.fire(
              '¡Eliminado!',
              'La oferta fue eliminada.',
              'success'
            );
    </script>
  @endif
@endpush
