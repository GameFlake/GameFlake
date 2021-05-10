<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MisOfertas extends Model
{
    use HasFactory;


    //Get de todas las ofertas que he hecho por los juegos que tengo 
    public static function getAllMisOfertas(){
        $oferta= DB::table('juego')
        ->select('oferta.idOferta as id', 'juego.idJuego as RecipienteID' , 'oferta.idJuegoOfertante as Ofertante', 'TR.nombre as TR', 'TO.nombre as TO', 'U.nombre as nombre', 'oferta.estado as estado' , 'U.apellido as Apellido')
        ->where('juego.idUsuario','=', '1')
        ->join('oferta', 'oferta.idJuegoOfertante', '=', 'juego.idJuego')
        ->join('titulo as TR', 'juego.idTitulo', '=', 'TR.idTitulo')
        ->join('juego as JO', 'oferta.idJuegoRecipiente', '=', 'JO.idJuego')
        ->join('titulo as TO', 'TO.idTitulo', '=', 'JO.idTitulo')
        ->join('usuario as U', 'JO.idUsuario', '=', 'U.idUsuario')
        ->get();
        return $oferta;
    }
}
