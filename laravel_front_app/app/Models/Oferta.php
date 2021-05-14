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
        $response = Http::delete(env('API_URL').'/misofertas/'.$id);
        
        //$response->throw();
        //var_dump($id);
        if($response->status() == 200) {
            //var_dump("yes yes");
            return (true);
        }
        return "holi";
    }


}
