@extends('layouts.layout')

@section('pageTitle', "GameFlake")

@section('header')

<div class="container">
<h1 class='text-center titulo white-text'>Catálogo</h1>
</div>
<br>
<br>

@endsection

@section('mainContent')

<div class="container">
  <div class="row">
    @foreach($titulosquery as $titulo)
    <div class="col s12 m4">
      <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" height="160" src={{ $titulo['imgRuta'] }}>
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">{{ $titulo["nombre"] }}</span>
          <p><a href="catalogo/{{ $titulo['idTitulo'] }}">Más detalles</a></p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
      
@endsection