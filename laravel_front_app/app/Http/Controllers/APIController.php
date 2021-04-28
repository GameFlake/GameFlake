<?php

namespace App\Http\Controllers;

use App\Models\Ofertas;
/*\Ofertas;*/
use Illuminate\Http\Request;

class APIController extends Controller
{
    /*
    public function create(){
        $response= HTTP:: get(env('API_URL'.'ofertas'));
        $ofertas= $response ->json();
        return view("ofertas" ["ofertas" =>  $ofertas]);
    }
    */
   
    private function readOfertas(){
        /*
        //Genera
        $filePath = storage_path("app/json/ofertas.json");
        //Cargar el archivo
        if($fileContents = file_get_contents($filePath)){
            //Transformarlo a una estructura de datos
            return json_decode($fileContents,true);
        }
        return [];
        */
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listOferta()
    {
        $textos = "hola";

        //return view("ofertas", ["textos" => $this->$textos]);
        return view("ofertas");
    
    }
}
