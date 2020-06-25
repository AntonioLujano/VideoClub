<?php

namespace App\Http\Controllers;

use App\ListaEsperas;
use Illuminate\Http\Request;

class ListaEsperasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
       return view('ListaEsperas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ListaEsperas.create');
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

    public function show( )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MasPopulares  $masPopulares
     * @return \Illuminate\Http\Response
     */
    public function edit(MasPopulares $masPopulares)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MasPopulares  $masPopulares
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasPopulares $masPopulares)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MasPopulares  $masPopulares
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasPopulares $masPopulares)
    {
        //
    }
}
