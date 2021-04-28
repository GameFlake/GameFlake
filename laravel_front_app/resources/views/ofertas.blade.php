@extends('layouts.layout')

@section('pageTitle', "GameFlake")

@section('header')

<h1 class='text-center titulo white-text'><i class="material-icons large white-text">arrow_back</i> Ofertas recibidas</h1>
<br>
<br>
@endsection

@section('mainContent')


<table>

        <thead>
          <tr>
              <th>Item Name</th>
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
        </tbody>
      </table>




@endsection