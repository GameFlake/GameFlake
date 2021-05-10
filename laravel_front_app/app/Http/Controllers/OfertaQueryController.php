<?php

namespace App\Http\Controllers;

use App\Models\OfertaQuery;
use App\Models\MisOfertasQuery;
use Illuminate\Http\Request;

class OfertaQueryController extends Controller
{
    //Llamar la función del modelo que me regresa el json, para enviarselo a la vista
    //Llamo la funcion de ofertas recibidas y realizadas
    //@return la vista con las dos consultas necesarias
    public function index(){
        $ofertaquery= OfertaQuery:: getOferta();
        $misofertasquery=MisOfertasQuery:: getMisOfertas();
        return view("ofertas", ["ofertaquery" => $ofertaquery, 'misofertas' => $misofertasquery ]);
    }
    /*
    public function delete( Request $request){
        print_R($request->input());
    } 
    */
    public function destroy ($id){
        OfertaQuery::destroy($id);
        return redirect('ofertas');
    }
}
