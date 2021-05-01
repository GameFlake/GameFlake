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
          </tr>
        </thead>

        <tbody class="indigo darken-4 white-text">
        @foreach ($ofertaquery as $oferta)
            <tr>
              <td class="center-align">{{ $oferta["nombre"] }}</td>
              <td class="center-align">{{ $oferta["TO"] }}</td>
              <td class="center-align">{{ $oferta["TR"] }}</td>
              <td class="center-align"><a href="#"><i class="material-icons medium red-text">close</i></a> </td>
            </tr>
        @endforeach

          
        </tbody>
      </table>


      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

</div>



      
@endsection