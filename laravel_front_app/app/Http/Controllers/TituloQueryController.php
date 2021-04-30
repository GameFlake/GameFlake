<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TituloQuery;

class TituloQueryController extends Controller
{
    public function index(){
        $titulosquery = TituloQuery::getTitulos();
        //$titulos = json_encode($titulosquery, true);
        return view("catalogo", ["titulosquery" => $titulosquery]);
    }
}
