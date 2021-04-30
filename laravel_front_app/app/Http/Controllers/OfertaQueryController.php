<?php

namespace App\Http\Controllers;

use App\Models\OfertaQuery;
use Illuminate\Http\Request;

class OfertaQueryController extends Controller
{
    public function index(){
        $ofertaquery= OfertaQuery:: getOferta();
        return view("ofertas", ["ofertaquery" => $ofertaquery]);
    }
}
