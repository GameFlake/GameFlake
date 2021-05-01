<?php

namespace App\Http\Controllers;

use App\Models\OfertaQuery;
use App\Models\MisOfertasQuery;
use Illuminate\Http\Request;

class OfertaQueryController extends Controller
{
    public function index(){
        $ofertaquery= OfertaQuery:: getOferta();
        $misofertasquery=MisOfertasQuery:: getMisOfertas();
        return view("ofertas", ["ofertaquery" => $ofertaquery, 'misofertas' => $misofertasquery ]);
    }
}
