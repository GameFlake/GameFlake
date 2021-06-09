<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class Oferta extends Model
{
    
    use HasFactory;

    public $table= "oferta";
    protected $primaryKey = 'idOferta';
    public $timestamps = false;

    // Get de todas las ofertas que me han hecho por mis juegos 
    public static function getRecibidas($idUsuario){
        $oferta = DB::table('juego')
        ->select('oferta.idOferta as id', 'juego.idJuego as RecipienteID' , 'oferta.idJuegoOfertante as Ofertante', 'TR.nombre as TR', 'TO.nombre as TO', 'U.nombre as nombre', 'oferta.estado as estado' , 'U.apellido as Apellido')
        ->where('juego.idUsuario','=', $idUsuario)
        ->join('oferta', 'oferta.idJuegoRecipiente', '=', 'juego.idJuego')
        ->join('titulo as TR', 'juego.idTitulo', '=', 'TR.idTitulo')
        ->join('juego as JO', 'oferta.idJuegoOfertante', '=', 'JO.idJuego')
        ->join('titulo as TO', 'TO.idTitulo', '=', 'JO.idTitulo')
        ->join('usuario as U', 'JO.idUsuario', '=', 'U.idUsuario')
        ->get();
        return $oferta;
    }

    // Get de todas las ofertas que he hecho por los juegos que tengo 
    public static function getRealizadas($idUsuario){
        $oferta = DB::table('juego')
        ->select('oferta.idOferta as id', 'juego.idJuego as RecipienteID' , 'oferta.idJuegoOfertante as Ofertante', 'TR.nombre as TR', 'TO.nombre as TO', 'U.nombre as nombre', 'oferta.estado as estado' , 'U.apellido as Apellido')
        ->where('juego.idUsuario','=', $idUsuario)
        ->join('oferta', 'oferta.idJuegoOfertante', '=', 'juego.idJuego')
        ->join('titulo as TR', 'juego.idTitulo', '=', 'TR.idTitulo')
        ->join('juego as JO', 'oferta.idJuegoRecipiente', '=', 'JO.idJuego')
        ->join('titulo as TO', 'TO.idTitulo', '=', 'JO.idTitulo')
        ->join('usuario as U', 'JO.idUsuario', '=', 'U.idUsuario')
        ->get();
        return $oferta;
    }
}


       
        
