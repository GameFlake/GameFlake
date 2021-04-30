<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    use HasFactory;

    public $table = "titulo";


    public static function getAllTitulos(){

        $titulos = self::all();

        return $titulos;
    }

    public static function getTitulo($id){
        $titulo = self::where('idTitulo', $id)
               ->get();
        return $titulo;

    }
}
