<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class TituloQuery extends Model
{
    use HasFactory;

    public static function getTitulos() {

        $response = Http::get(env('API_URL').'/titulos');
        return ($response->json());

        //return ($response->json()['token']);

    }
}
