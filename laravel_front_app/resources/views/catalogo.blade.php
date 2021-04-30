@extends('layouts.layout')

@section('pageTitle', "GameFlake")

@section('header')

<h1 class='text-center titulo white-text'><i class="material-icons large white-text">arrow_back</i> Catálogo</h1>
<br>
<br>
@endsection

@section('mainContent')


<div class="container">
  <div class="row">
    @foreach($titulosquery as $titulo)
    <div class="col s4">
      <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src={{ $titulo['imgRuta'] }}>
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">{{ $titulo["nombre"] }}<i class="material-icons right">more_vert</i></span>
          <p><a href="#">This is a link</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
      
@endsection