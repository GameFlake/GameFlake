<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Titulo;

class TituloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return Titulo::getAllTitulos();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return Titulo::getTitulo($id);
    }
}
