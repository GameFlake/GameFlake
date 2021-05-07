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
@if (count($titulosquery)!=0)  
  <div class="row">
    @foreach($titulosquery as $titulo)
    <div class="col s4">
      <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" height="160" src={{ $titulo['imgRuta'] }}>
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">{{ $titulo["nombre"] }}</span>
          <p><a href="#">Más detalles</a></p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  @else
       
       <div class="col s12 m7">
         <div class="card horizontal  blue lighten-2">
           <div class="card-stacked">
             <div class="card-content center-align">
               <h3>¡No hay títulos registrados en el catálogo!</h3>
             </div>
           </div>
         </div>
       </div>
       <br>
       <br>
       <br>
       <br>
        
             
        @endif 
</div>

      
@endsection