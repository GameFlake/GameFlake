<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;

    public $table = "juego";

    public static function getJuegosByTitulo($id){
        $juegos = self::where('idTitulo', $id)
               ->get();
        return $juegos;

    }

}
