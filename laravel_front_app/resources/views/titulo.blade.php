@extends('layouts.layout')

@section('pageTitle', 'GameFlake - {{ $titulo["nombre"] }}')

@section('header')

<div class="container">
@foreach($tituloquery as $titulo)
  <h1 class='text-center titulo'>{{ $titulo["nombre"] }}</h1>
  </div>

  @endsection

  @section('mainContent')

  <div class="container">
    <div class="row">
      <div class="col s12 m6">
        <div class="waves-effect waves-block waves-light">
          <img class="activator responsive-img" height="300" src={{ asset($titulo['imgRuta']) }}>
        </div>
      </div>
      <div class="col s12 m6">
        <h5>Calificación: 
          @for ($i = 1; $i <= 5; $i++)
            @if($i <= $titulo["calificacion"])
            <span>&#x2B50;</span>
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

<h5 class='text-center titulo'>Juegos disponibles para intercambio de este título</h5>
</div>
<br>

<div class = "container">

@if($juegoquery != NULL)

  <table  class="responsive-table mb-5" >
        
    <thead class="grey darken-4 ">
      <tr class="white-text  ">
          <th class="center-align">Logo</th>
          <th class="center-align">Plataforma</th>
          <th class="center-align">Condición</th>
          <th class="center-align">Acciones</th>
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
            <!-- Modal Trigger -->
            <button data-target="modal{{ $juego["idJuego"] }}" class="btn modal-trigger deep-purple accent-2">Ver más</button>

            <!-- Modal Structure -->
            <div id="modal{{ $juego["idJuego"] }}" class="modal">
              <div class="modal-content">
                <h4 class="black-text">{{ $juego["nombreTitulo"] }} de {{ $juego["nombreUsuario"] }}</h4>
                
                <p class="black-text left-align">Plataforma: {{ $juego["nombreConsola"] }}</p>
                <p class="black-text left-align">{{ $juego["nombreCondicion"] }}: {{ $juego["descripcionCondicion"] }}</p>
                <p class="black-text left-align">Comentarios del dueño: {{ $juego["comentarios"] }}</p>

                <p class="black-text left-align">Cambio por:</p>
                <select class="browser-default">
                  <option value="" disabled selected>Mis juegos...</option>
                  <option value="">The Legend of Zelda: Breath of the Wild</option>
                  <option value="">Crash Bandicoot: Insane Trilogy</option>
                  <option value="">Mario Kart 8</option>
                </select>
                
                
              </div>
              <div class="modal-footer">
                <a href="#" class="modal-close waves-effect waves-green btn-flat">Ofertar</a>
                <a href="#" class="modal-close waves-effect waves-red btn-flat">Cerrar</a>
              </div>
            </div>
          </td>
          
        </tr>
      @endforeach
      
    </tbody>           
  </table>

@else
  <div class="col s12 m7">
    <div class="card horizontal deep-purple lighten-4">
      <div class="card-stacked">
        <div class="card-content center-align">
          <h5>No hay juegos disponibles para este título por el momento.</h5>
        </div>
      </div>
    </div>
  </div>
@endif


</div>
<br>
      
@endsection