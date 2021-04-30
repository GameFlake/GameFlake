<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TituloQuery;

class TituloQueryController extends Controller
{
    public function index(){
        $titulosquery = TituloQuery::getTitulos();
        return view("catalogo", ["titulosquery" => $titulosquery]);
    }

    public function showTitulo($id){
        $tituloquery = TituloQuery::getTitulo($id);
        return view("titulo", ["tituloquery" => $tituloquery]);
    }
}
