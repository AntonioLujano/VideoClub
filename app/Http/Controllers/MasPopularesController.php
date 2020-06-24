<?php

namespace App\Http\Controllers;

use App\MasPopulares;
use Illuminate\Http\Request;

class MasPopularesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ejemplo de datos 
       
            $data['Titulos'] = [ "titulo 1","titulo 2","titulo 3","titulo 4","titulo 5"];
            /*$Directores =["Director 1","Director 2","Director 3","Director 4","Director 5"];
            $Generos =["Genero 1","Genero 2","Genero 3","Genero 4","Genero 5"];                
           */
       return view('MasPopulares.index',$data);
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
     * @param  \App\MasPopulares  $masPopulares
     * @return \Illuminate\Http\Response
     */
    public function show(MasPopulares $masPopulares)
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
