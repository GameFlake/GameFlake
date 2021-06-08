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
              '¡Elimiado!',
              'La oferta fue eliminada.',
              'success'
            );
    </script>
  @endif

  <div class="container">
    @if (count($ofertaquery)!=0)  
    <table  class="responsive-table mb-5" >
        
        <thead class="grey darken-4 ">
          <tr class="white-text  ">
              <th class="center-align">Nombre</th>
              <th class="center-align">Quiere cambiar su</th>
              <th class="center-align">Por tu</th>
              <th class="center-align">Aceptar </th>
              <th class="center-align">Rechazar </th>
              <th class="center-align">Estado</th>
          </tr>
        </thead>
        
        <tbody class="deep-purple darken-4 white-text">
        @foreach ($ofertaquery as $oferta)

            <tr>
              <td class="center-align">{{ $oferta["nombre"] }} {{ $oferta["Apellido"] }}</td>
              <td class="center-align">{{ $oferta["TO"] }}</td>
              <td class="center-align">{{ $oferta["TR"] }}</td>
              @if($oferta["estado"] === 'Pendiente')
                <td class="center-align">
                <form action="{{ url('/ofertas/update') }}" method="post" >
                @csrf
                  {{ method_field('POST') }}
                  <input id="idOferta" name="idOferta" type="hidden" value= "{{$oferta['id']}}" >
                  <input id="estado" name="estado" type="hidden" <?php  if ($oferta["estado"] === 'Pendiente'){ ?> value ='Aprobado'<?php } ?>  >
                  <button type="submit" value="delete" class="btn green accent-4" id="btn-submit" onclick="return confirm('¿Estas seguro que quieres aceptar la oferta?') ;"><i class="material-icons medium white-text">check</i></button>
                </form>
                </td>
              @else
                <td class="center-align">
                <form>
                  <button type="submit" value="delete" class="btn red darken-1" id="btn-submit" disabled><i class="material-icons medium white-text">check</i></button>
                </form>
                </td>
              @endif


              <td class="center-align">
             
                <form action="{{ url('/ofertas/'.$oferta['id']) }}" method="post" >
                    @csrf
                    {{ method_field('DELETE')}}
                  <button type="submit" value="delete" class="btn red darken-1" id="btn-submit" onclick="return confirm('¿Estas seguro que quieres borrar?') ;"><i class="material-icons medium white-text">close</i></button>
                </form>
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
    <div class="card horizontal  blue lighten-2">
      <div class="card-stacked">
        <div class="card-content center-align">
          <h3>No hay ofertas disponibles por el momento</h3>
        </div>
      </div>
    </div>
    </div> 
    @endif

    @if(Session::has('message'))
    <script>
     Swal.fire(
              '¡Elimiado!',
              'La oferta fue eliminada.',
              'success'
            );
    </script>
    @endif
   
 
    <h1 class='text-center titulo'> Ofertas realizadas</h1>

    @if (count($misofertas)!=0)  
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
              <form action="{{ url('/misofertas/'.$ofertas['id']) }}" method="post" class="formulario-eliminar" id='formulario-eliminar'>
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
      <div class="card horizontal  blue lighten-2">
        <div class="card-stacked">
          <div class="card-content center-align">
            <h3>No hay ofertas disponibles por el momento</h3>
          </div>
        </div>
      </div>
    </div>
    @endif

    
  </div>

@endsection
