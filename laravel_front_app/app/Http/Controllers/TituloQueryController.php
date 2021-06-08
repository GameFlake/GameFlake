<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TituloQuery;
use App\Models\JuegoQuery;

class TituloQueryController extends Controller
{
    public function index(){
        $titulosquery = TituloQuery::getTitulos();
        return view("catalogo", ["titulosquery" => $titulosquery]);
    }

    public function showTitulo($id){
        $tituloquery = TituloQuery::getTitulo($id);
        $juegoquery = JuegoQuery::getJuegosByTitulo($id);
        return view("titulo", ["tituloquery" => $tituloquery, "juegoquery" => $juegoquery]);
    }
}
