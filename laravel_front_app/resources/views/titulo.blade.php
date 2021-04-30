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
  </div>
</div>

@endforeach
      
@endsection