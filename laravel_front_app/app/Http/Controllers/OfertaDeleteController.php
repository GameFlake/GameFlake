<?php

namespace App\Http\Controllers;

use App\Models\OfertaDelete;
use Illuminate\Http\Request;

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
    public function show(OfertaDelete $ofertaDelete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OfertaDelete  $ofertaDelete
     * @return \Illuminate\Http\Response
     */
    public function edit(OfertaDelete $ofertaDelete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OfertaDelete  $ofertaDelete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfertaDelete $ofertaDelete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OfertaDelete  $ofertaDelete
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OfertaDelete::destroy($id);
        return redirect("ofertas");
    }
}
