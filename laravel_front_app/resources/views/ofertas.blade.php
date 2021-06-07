@extends('layouts.layout')

@section('pageTitle', "GameFlake")


@section('header')
  <div class="container">
    <h1 class='text-center titulo white-text'><a href="#"><i class="material-icons large white-text">arrow_back</i></a> Ofertas recibidas</h1>
    <br>
    <br>
  </div>
@endsection

@section('mainContent')

@if(Session::has('update'))
    <script>
     Swal.fire(
              '¡Aceptado!',
              'La oferta fue aceptada.',
              'success'
            )
    </script>
    @endif


@if(Session::has('eliminate'))
    <script>
     Swal.fire(
              '¡Elimiado!',
              'La oferta fue eliminada.',
              'success'
            )
    </script>
    @endif



<div class="container">
  @if (count($ofertaquery)!=0)  
    <table  class="responsive-table" >
        
        <thead class="grey darken-4 ">
          <tr class="white-text  ">
              <th class="center-align">Nombre</th>
              <th class="center-align">Quiere cambiar </th>
              <th class="center-align">Por tu</th>
              <th class="center-align">Aceptar </th>
              <th class="center-align">Rechazar </th>
              <th class="center-align">Estado</th>
          </tr>
        </thead>

        
        <tbody class="indigo darken-4 white-text">
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
                  <button type="submit" value="delete" class="btn-flat indigo darken-4" id="btn-submit" onclick="return confirm('¿Estas seguro que quieres aceptar la oferta?') ;"><i class="material-icons medium green-text">check</i></button>
                </form>
                </td>
              @else
                <td class="center-align">
                <form>
                  <button type="submit" value="delete" class="btn-flat indigo darken-4" id="btn-submit" disabled><i class="material-icons medium gray-text">check</i></button>
                </form>
                </td>
              @endif


              <td class="center-align">
             
                <form action="{{ url('/ofertas/'.$oferta['id']) }}" method="post" >
                    @csrf
                    {{ method_field('DELETE')}}
                  <button type="submit" value="delete" class="btn-flat indigo darken-4" id="btn-submit" onclick="return confirm('¿Estas seguro que quieres borrar?') ;"><i class="material-icons medium red-text fa-9x">close</i></button>
                </form>
              </td>
              <td class="center-align"><a 
              @if ($oferta["estado"] === 'Pendiente')
              class="yellow darken-2 btn"
              @else
              class="green accent-4  btn"
              @endif
              >{{ $oferta["estado"] }}</a></td>
              
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
    <br>
    <br>
    <br>

    @if(Session::has('message'))
    <script>
     Swal.fire(
              '¡Elimiado!',
              'La oferta fue eliminada.',
              'success'
            )
    </script>
    @endif
   
    <hr>
    <br>
    <br>
    <h1 class='text-center titulo white-text'> Ofertas realizadas</h1>

    <br>
    <br>



    @if (count($misofertas)!=0)  
    <table  class="responsive-table" >
      <thead class="grey darken-4 ">
        <tr class="white-text  ">
            <th class="center-align">Quiero cambiar</th>
            <th class="center-align">Por</th>
            <th class="center-align">De</th>
            <th class="center-align">Eliminar</th>
            <th class="center-align">Estado</th>
        </tr>
      </thead>
      

      <tbody class="indigo darken-4 white-text">
      @foreach ($misofertas as $ofertas)
          <tr >
            <td class="center-align">{{ $ofertas["TR"] }}</td>
            <td class="center-align">{{ $ofertas["TO"] }}</td>
            <td class="center-align">{{ $ofertas["nombre"] }} {{ $ofertas["Apellido"] }}</td>
            <td class="center-align">
            <form action="{{ url('/misofertas/'.$ofertas['id']) }}" method="post" class="formulario-eliminar" id='formulario-eliminar'>
              @csrf
              {{ method_field('DELETE')}}
            <button type="submit" value="delete" class="btn-flat indigo darken-4" id="btn-submit" onclick="return confirm('¿ Estas seguro que quieres borrar?') ;"> <i class="material-icons  red-text">close</i> </button>
            </form>
            </td>               
            <td class="center-align"><a 
            @if ($ofertas["estado"] === 'Pendiente')
            class="yellow darken-2 btn"
            @else
            class="green accent-4  btn"
            @endif
            >{{ $ofertas["estado"] }}</a></td>
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

    


      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
</div>


      
@endsection

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
