<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    
    use HasFactory;

    public $table= "oferta";

    //Get de todas las ofertas  
    public static function getAllOfertas(){

        $ofertas = self::all();

        $result = [];

        foreach($ofertas as $oferta){

            $ofertaArray = [
                "idOferta" => $oferta->idOferta,
                "fechaInicio" =>$oferta->fechaInicio,
                "fechaTerminacion"=>$oferta->fechaTerminacion,
                "idJuegoRecipiente"=>$oferta->idJuegoRecipiente,
                "idJuegoOfertante" =>$oferta->idJuegoOfertante,
            ];

            $result[$oferta->idOferta] = $ofertaArray;

        }

        return $ofertas;
    }








}
