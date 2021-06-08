<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OfertaDeleteController extends Controller
{


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oferta  $ofertaDelete
     * @return \Illuminate\Http\Response
     */

     //Elimina la oferta por el id 
    public function destroy($id)
    {

        $ofertaquery= Oferta::getOferta($id);
        
        if($ofertaquery != NULL){
            return  redirect('ofertas')->with('message','Oferta borrada con éxito');
        }
        
    }
}
