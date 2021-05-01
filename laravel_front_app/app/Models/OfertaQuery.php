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

}
