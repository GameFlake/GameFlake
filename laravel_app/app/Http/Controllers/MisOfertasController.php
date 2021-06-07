<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MisOfertas;
use App\Models\Oferta;
use App\Models\Ofertas;


class MisOfertasController extends Controller
{
    /**
     *Mandar llamar a la función que te hace la consulta en la Base de datos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MisOfertas::getAllMisOfertas();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ofertas = MisOfertas::find($id);
        
        $success = $ofertas->delete();

        return $success ;
    }
}
