<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;


class OfertaQuery extends Model
{
    use HasFactory;

    //Mandar a llamar a la api, la información que necesito por medio del URL
    // @return un json con esta información
    public static function getOferta() {

        $response = Http::get(env('API_URL').'/ofertas');
        return ($response->json());
    }
    public static function getOfertabyid($id) {
        $response = Http::delete(env('API_URL').'/ofertas/'.$id);
        
        //$response->throw();
        //var_dump($id);
        if($response->status() == 200) {
            //var_dump("yes yes");
            return (true);
        }
        return null;
    }
    public static function updateOfertabyid($id, $estado) {
        $response = Http::patch(env('API_URL').'/ofertas/update/'.$id,[
            'estado' => $estado
        ]);
        if($response->status() == 200) {
            //var_dump("yes yes");
            return (true);
        }
        return null;
    }

}
