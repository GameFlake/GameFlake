<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OfertaDeleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\OfertaDelete  $ofertaDelete
     * @return \Illuminate\Http\Response
     */
    public function show(Oferta $ofertaDelete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OfertaDelete  $ofertaDelete
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Oferta::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OfertaDelete  $ofertaDelete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oferta $ofertaDelete)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oferta  $ofertaDelete
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $ofertaquery= Oferta::getOferta($id);

        var_dump($ofertaquery);
        
        if($ofertaquery != NULL){
            return  redirect('ofertas')->with('message','Oferta borrada con éxito');
        }
        
        /*
        Oferta::destroy($id);
        return redirect("ofertas");
        */
    }
}
