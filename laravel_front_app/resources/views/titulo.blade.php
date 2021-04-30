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
    <div class="col s4">

    </div>
  </div>
</div>

@endforeach
      
@endsection