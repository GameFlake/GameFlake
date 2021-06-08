<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Juego extends Model
{
    use HasFactory;

    public $table = "juego";

    public static function getJuegosByTitulo($id){
        $juegos = DB::table('juego')
                ->join('condicion', 'juego.idCondicion', '=', 'condicion.idCondicion')
                ->join('consola', 'juego.idConsola', '=', 'consola.idConsola')
                ->select('juego.*', 'condicion.nombre as nombreCondicion', 'consola.nombre as nombreConsola')
                ->where('idTitulo', $id)
               ->get();
        return $juegos;

    }

}
