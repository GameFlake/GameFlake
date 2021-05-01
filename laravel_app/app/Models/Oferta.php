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

    //Get de todas las ofertas  
    public static function getAllOfertas(){
        $oferta= DB::table('juego')
        ->select('juego.idJuego as RecipienteID' , 'oferta.idJuegoOfertante as Ofertante', 'TR.nombre as TR', 'TO.nombre as TO', 'U.nombre as UOFertante')
        ->where('juego.idUsuario','=', '1')
        ->join('oferta', 'oferta.idJuegoRecipiente', '=', 'juego.idJuego')
        ->join('titulo as TR', 'juego.idTitulo', '=', 'TR.idTitulo')
        ->join('juego as JO', 'oferta.idJuegoOfertante', '=', 'JO.idJuego')
        ->join('titulo as TO', 'TO.idTitulo', '=', 'JO.idTitulo')
        ->join('usuario as U', 'JO.idUsuario', '=', 'U.idUsuario')
        ->get();
        return $oferta;

        /*
       
        return DB::table(DB::raw('juego J, oferta O, usuario U, titulo T, juego JN, usuario UN, titulo TN')) 
        ->select(DB::raw('T.nombre, U.nombre, TN.nombre'))
        ->where('UN.idUsuario', '=', 'JN.idUsuario')
        ->where('TN.idTitulo', '=', 'JN.idTitulo')
        ->where('UN.nombre', '=', 'Adolfo')
        ->where('JN.idJuego', '=', 'O.idJuegoRecipiente')
        ->where('O.idJuegoOfertante', '=', 'J.idJuego')
        ->where('J.idUsuario', '=', 'U.idUsuario')
        ->where('J.idTitulo', '=', 'T.idTitulo')
        -> whereIn('O.idJuegoRecipiente', 
            DB::table(DB::raw('juego J,usuario U, titulo T')) 
            ->select('J.idJuego')
            ->where('U.idUsuario', '=', 'J.idUsuario')
            ->where('T.idTitulo', '=', 'J.idTitulo')
            ->where('U.nombre', '=', 'Adolfo')
        )
        ->get();
        */
    }
}


        /*
$student = DB::table(DB::raw('students, teachers'))

        }




        $query = DB::table("oferta as b, juego J, oferta O, usuario U, titulo T, juego JN, usuario UN, titulo TN")
        ->select("b.isbn","b.title","a.first_name","a.last_name","a.second_last_name")
        ->orderBy("b.title","asc");

        $result = $query->get();

        $books = [];

        foreach($result as $book){
        if(!isset($books[$book->isbn])){

        $books[$book->isbn] = [
        isbn => $book->isbn,
        title => $book->title,
        authors => [
        trim(implode(" ", [$book->first_name,$book->last_name,$book->second_last_name]))
        ]
        ];

        }
        else{
        $books[$book->isbn]["authors"][] = trim(implode(" ", [$book->first_name,$book->last_name,$book->second_last_name]));
        }

        }

//dd($books);

return $books;

}
       

        /*
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
        */

        
