<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;


class OfertaQuery extends Model
{
    use HasFactory;

    // Mandar a llamar a la api, la información que necesito (ofertas recibidas) por medio del URL
    // @return un json con esta información
    public static function getOferta() {
        $token = session('token');
        $response = Http::withToken($token)
                        ->get(env('API_URL').'ofertas');
        return ($response->json());
    }

    //Mandar a llamar a la api, la información que necesito por medio del URL
    // @return un json con esta información
    public static function getMisOfertas() {
        $token = session('token');
        $response = Http::withToken($token)
                        ->get(env('API_URL').'misofertas');
        return ($response->json());
    }

    // Mandar a llamar a la api, la información que necesito (ofertas relizadas) por medio del URL
    // @return un json con esta información
    public static function destroy($id) {
        $token = session('token');
        $response = Http::withToken($token)
                        ->delete(env('API_URL').'ofertas/'.$id);
        if($response->status() == 200) {
            return true;
        }
        return null;
    }
    
    // Mandar a llamar a la api, la información que necesito (cual es el estado de a oferta) por medio del URL
    // @return un json con esta información
    public static function updateOferta($idOferta, $estado) {
        $token = session('token');
        $response = Http::withToken($token)
                        ->put(env('API_URL').'ofertas/'.$idOferta.'/update', [
            'estado' => $estado,
        ]);
        if($response->status() == 200) {
            return true;
        }
        return null;
    }
}
