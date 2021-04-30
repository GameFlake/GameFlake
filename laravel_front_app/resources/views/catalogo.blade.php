@extends('layouts.layout')

@section('pageTitle', "GameFlake")

@section('header')

<h1 class='text-center titulo white-text'><i class="material-icons large white-text">arrow_back</i> Catálogo</h1>
<br>
<br>
@endsection

@section('mainContent')


<div class="container">

<table>

        <thead>
        @php
        $i = 0;
        @endphp

        @foreach($titulosquery as $titulo)
           {{ $titulo["nombre"] }}
           {{ $titulo["idTitulo"] }}
        @endforeach




        
          <tr>
              <th></th>
              <th>Item Price</th>
          </tr>
       
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
      <br>
      <br>
      <br>

</div>
      
@endsection