<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    
    use HasFactory;


    //Get de todas las ofertas consultadas 
    public static function getAllBooks(){

        $oferta = self::all();

        $result = [];

        foreach($oferta as $oferta){

            $ofertaArray = [
                "idOferta" => $oferta->idOferta,
                "fechaInicio" =>$oferta->fechaInicio,
                "fechaTerminacion"=>$oferta->fechaTerminacion,
                "idJuegoRecipiente"=>$oferta->idJuegoRecipiente,
                "idJuegoOfertante" =>$oferta->idJuegoOfertante,
            ];

            foreach($oferta->authors as $author){
                $bookArray["authors"][] = $author->getFullName();
            }

            $result[$oferta->idOfert] = $ofertaArray;

        }

        return $result;
    }








}
