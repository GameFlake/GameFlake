@extends('layouts.layout')

@section('pageTitle', "GameFlake")

@section('header')

<h1 class='text-center titulo white-text'><i class="material-icons large white-text">arrow_back</i> Ofertas recibidas</h1>
<br>
<br>
@endsection

@section('mainContent')

<div class="container">

<table  class="responsive-table striped bordered" >



@php
var_dump($ofertaquery);
@endphp
        <thead>
          <tr>
          <dl>
          
</dl>
              <th>Nombre</th>
              <th>Queire cambiar</th>
              <th>Por tu</th>
          </tr>
        </thead>

        <tbody>
        @foreach ($ofertaquery as $oferta)
            <tr>
              <td>{{ $oferta["UOFertante"] }}</td>
              <td>{{ $oferta["TO"] }}</td>
              <td>{{ $oferta["TR"] }}</td>
            </tr>
        @endforeach

          
        </tbody>
      </table>
      <br>
      <br>
      <br>




</div>



      
@endsection