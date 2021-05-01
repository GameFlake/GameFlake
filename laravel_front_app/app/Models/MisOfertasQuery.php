<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class MisOfertasQuery extends Model
{
    use HasFactory;

    public static function getMisOfertas() {

        $response = Http::get(env('API_URL').'/misofertas');
        return ($response->json());
    }

}
