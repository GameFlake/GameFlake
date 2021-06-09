<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oferta;

class OfertaController extends Controller
{
    /**
     * Manda llamar a la funcion para consultar todas las ofertas recibidas
     *
     * @return \Illuminate\Http\Response
     */
    public function getRecibidas(Request $request) {
        $idUsuario = $request->user()->idUsuario;
        return Oferta::getRecibidas($idUsuario);
    }

    /**
     * Manda llamar a la funcion para consultar todas las ofertas realizadas
     *
     * @return \Illuminate\Http\Response
     */
    public function getRealizadas(Request $request) {
        $idUsuario = $request->user()->idUsuario;
        return Oferta::getRealizadas($idUsuario);
    }

    /**
     * Funcion que recibe un request de la información del 
     * estado y lo manda al modelo para que lo actualice.
     * Si el nuevo estado indica que la oferta fue concluida
     * se borran los juegos involucrados en la oferta.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idOferta) {
        // Actualizar estado de la oferta
        $oferta = Oferta::find($idOferta);
        $oferta->estado = $request->estado;
        $oferta->fechaTerminacion = date("Y-m-d");
        $result = $oferta->save();

        // Borrar juegos de la oferta si se termino
        if($oferta->estado == "Terminada_") {
            $juegoRecipiente = Juego::find($oferta->idJuegoRecipiente);
            $juegoOfertante = Juego::find($oferta->idjuegoOfertante);
            $juegoRecipiente->delete();
            $juegoOfertante->delete();
        }
        
        return $result;
    }

    /**
     * Recibe un Id y lo que hace es mandar ese Id 
     * al modelo para que se elimine
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idOferta) {
        $ofertas = Oferta::find($idOferta);
        $success = $ofertas->delete();
        return $success;
    }
}
