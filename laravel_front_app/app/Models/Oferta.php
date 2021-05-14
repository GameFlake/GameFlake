<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Oferta extends Model
{
    /*
    public $table = "oferta";
    protected $primaryKey = 'idOferta';
    */
    use HasFactory;

    public static function getOferta($id) {
        $response = Http::post(env('API_URL').'oferta/delete', [
            'id' => $id
        ]);

        if($response->status() == 200) {
            return (true);
        }
        return null;
    }


}
