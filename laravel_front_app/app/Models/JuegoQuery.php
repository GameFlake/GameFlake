<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class JuegoQuery extends Model
{
    use HasFactory;

    public static function getJuegosByTitulo($id) {
        $token = session('token');
        $response = Http::withToken($token)
                        ->get(env('API_URL').'titulos/'.$id.'/juegos');
        return ($response->json());
    }
}
