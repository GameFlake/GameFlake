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
<div class="container">
    <table  class="responsive-table" >
    @if (count($ofertaquery)!=0)  
    <thead class="grey darken-4 ">
      <tr class="white-text  ">
          <th class="center-align">Nombre</th>
          <th class="center-align">Quiere cambiar </th>
          <th class="center-align">Por tu</th>
          <th class="center-align">Aceptar / Rechazar </th>
          <th class="center-align">Estado</th>
      </tr>
    </thead>


    <tbody class="indigo darken-4 white-text">
    @foreach ($ofertaquery as $oferta)

        <tr>
          <td class="center-align">{{ $oferta["nombre"] }} {{ $oferta["Apellido"] }}</td>
          <td class="center-align">{{ $oferta["TO"] }}</td>
          <td class="center-align">{{ $oferta["TR"] }}</td>
          <td class="center-align">
            <a href="#"><i class="material-icons medium green-text">check</i></a>
            <a href="#"><i class="material-icons medium red-text">close</i></a>  
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

    <hr>
    <br>
    <br>
    <h1 class='text-center titulo white-text'> Ofertas realizadas</h1>

    <br>
    <br>

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
    @if (count($misofertas)!=0)  

    <tbody class="indigo darken-4 white-text">
    @foreach ($misofertas as $ofertas)
        <tr >
          <td class="center-align">{{ $ofertas["TR"] }}</td>
          <td class="center-align">{{ $ofertas["TO"] }}</td>
          <td class="center-align">{{ $ofertas["nombre"] }} {{ $ofertas["Apellido"] }}</td>
          <!-- <td class="center-align">{{ $ofertas["id"]}}</td> 
          <button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar') ;">Eliminar</button>
          -->
          <td class="center-align">
          <form action="{{ url('/misofertas/'.$ofertas['id']) }}" method="post">
            @csrf
            {{ method_field('DELETE')}}
            <button type="submit" class="btn btn-link" onclick="return confirm('¿ Estas seguro que quieres borrar?') ;"><i class="material-icons medium red-text">close</i></button>
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




