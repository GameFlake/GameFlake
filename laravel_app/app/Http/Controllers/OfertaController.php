<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oferta;
use App\Models\Ofertas;

class OfertaController extends Controller
{
    /**
     * Mandar llamar a la función que te hace la consulta en la base de datos 
     *
     * @return \Illuminate\Http\Response
     */
    //Manda llamar a la funcion para consultar todas las ofertas recibidas
    public function index(Request $request) {
        $idUsuario = $request->user()->idUsuario;
        return Oferta::getAllOfertas($idUsuario);
    }

    /**
     * Funcion que recibe un request de la información del 
     * estado y lo manda al modelo para que lo actualice
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $oferta = Oferta::find($request->idOferta);
        $oferta->estado = $request->estado;
        $result = $oferta-> save();
        return $result;
    }

    /**
     * Recibe un Id y lo que hace es mandar ese Id 
     * al modelo para que se elimine
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ofertas = Oferta::find($id);
        $success = $ofertas->delete();
        return $success;
    }
}
