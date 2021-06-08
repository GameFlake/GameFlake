<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class TituloQuery extends Model
{
    use HasFactory;

    public static function getTitulos() {
        $token = session('token');
        $response = Http::withToken($token)
                        ->get(env('API_URL').'titulos');
        return ($response->json());
    }

    public static function getTitulo($id) {
        $token = session('token');
        $response = Http::withToken($token)
                        ->get(env('API_URL').'titulos/'.$id);
        return ($response->json());
    }
}
