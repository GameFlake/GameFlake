@extends('layouts.layout')

@section('pageTitle', "GameFlake")

@section('header')

<div class="container">
@foreach($tituloquery as $titulo)
<h1 class='text-center titulo white-text'>{{ $titulo["nombre"] }}</h1>
</div>
<br>
<br>


@endsection

@section('mainContent')

<div class="container">
  <div class="row">
    <div class="col s12 m6">
      <div class="waves-effect waves-block waves-light">
        <img class="activator responsive-img" height="300" src=../{{ $titulo["imgRuta"] }}>
      </div>
    </div>
    <div class="col s12 m6">
      <h5>Calificación: 
        @for ($i = 1; $i <= 5; $i++)
          @if($i <= $titulo["calificacion"])
          <span class="fa fa-star checked"></span>
          @else
          <span class="fa fa-star"></span>
          @endif
        @endfor
      </h5>
      <div class="waves-effect waves-block waves-light">
        <p>{{ $titulo["descripcion"] }}</p>
      </div>
    </div>
  </div>
</div>

@endforeach
<br><br>
<div class="container">

<h5 class='text-center titulo white-text'>Juegos disponibles para intercambio de este título</h5>
</div>
<br>

<div class = "container">
<table  class="responsive-table mb-5" >
        
        <thead class="grey darken-4 ">
          <tr class="white-text  ">
              <th class="center-align">Logo</th>
              <th class="center-align">Plataforma</th>
              <th class="center-align">Condición</th>
              <th class="center-align">Estado</th>
          </tr>
        </thead>
        
        <tbody class="deep-purple darken-4 white-text">
        
        @foreach($juegoquery as $juego)
            <tr>
              <td class="center-align">
                @if($juego["idConsola"] == 1)
                  <img  height="40" src="../img/switch.png">
                @elseif($juego["idConsola"] == 2)
                  <img  height="40" src="../img/ps5.png">
                @elseif($juego["idConsola"] == 3)
                  <img  height="40" src="../img/wiiu.png">
                @elseif($juego["idConsola"] == 12)
                  <img  height="40" src="../img/one.png">
                @endif
              </td>
              <td class="center-align">{{ $juego["nombreConsola"] }}</td>
              <td class="center-align">{{ $juego["nombreCondicion"] }}</td>
              
              <td class="center-align">
                <span data-badge-caption="Disponible" data-position="top"
                  class="new badge tooltipped blue"
                >
                </span>
              </td>
              
            </tr>
            @endforeach
        
        </tbody>           
    </table>
</div>
<br>

      
@endsection