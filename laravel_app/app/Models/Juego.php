<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Juego extends Model
{
    use HasFactory;

    public $table = "juego";
    protected $primaryKey = 'idJuego';

    public static function getJuegosByTitulo($id) {
        $juegos = DB::table('juego')
                ->join('condicion', 'juego.idCondicion', '=', 'condicion.idCondicion')
                ->join('consola', 'juego.idConsola', '=', 'consola.idConsola')
                ->join('usuario', 'usuario.idUsuario', '=', 'juego.idUsuario')
                ->join('titulo', 'titulo.idTitulo', '=', 'juego.idTitulo')
                ->select('juego.*', 'condicion.nombre as nombreCondicion', 'consola.nombre as nombreConsola', 'condicion.descripcion as descripcionCondicion', 'usuario.nombre as nombreUsuario', 'titulo.nombre as nombreTitulo')
                ->where('juego.idTitulo', $id)
               ->get();

        return $juegos;
    }
}
