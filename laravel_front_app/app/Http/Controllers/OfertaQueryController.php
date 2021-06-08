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
    public function index(Request $request) {
        $ofertaquery = OfertaQuery::getOferta();
        $misofertasquery = MisOfertasQuery::getMisOfertas();
        return view("ofertas", ["ofertaquery" => $ofertaquery, 'misofertas' => $misofertasquery ]);
    }

    public function destroy($id) {
        $ofertaquery = OfertaQuery::destroy($id);
        
        if($ofertaquery != NULL){
            return redirect('ofertas')->with('eliminate', 'Oferta borrada con éxito');
        }   

        return redirect('ofertas');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OfertaDelete  $ofertaDelete
     * @return \Illuminate\Http\Response
     */

     //Actualizar el estatus de la oferta por medio del request
    public function update(Request $request)
    { 
        $ofertaquery= OfertaQuery::updateOferta($request);

        var_dump($ofertaquery);
        
        if($ofertaquery != NULL){
            return  redirect('ofertas')->with('update','Oferta editada con éxito');
        }
        
    }
}
