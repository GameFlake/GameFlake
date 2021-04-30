<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;


class OfertaQuery extends Model
{
    use HasFactory;

    public static function getOferta() {

        $response = Http::get(env('API_URL').'/ofertas');
        return ($response->json());
    }

}
