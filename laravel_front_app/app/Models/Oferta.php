<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    public $table = "oferta";
    protected $primaryKey = 'idOferta';
    use HasFactory;
}
