<?php

namespace App\Http\Controllers;

use App\Directores;
use App\Generos;
use App\Peliculas;
use App\Socios;
use App\Peliprestada;
use App\Prestamos;
use App\Copias;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RentadePeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  \App\RentadePeliculas  $rentadePeliculas
     * @return \Illuminate\Http\Response
     */
    public function show(RentadePeliculas $rentadePeliculas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RentadePeliculas  $rentadePeliculas
     * @return \Illuminate\Http\Response
     */
    public function edit(RentadePeliculas $rentadePeliculas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RentadePeliculas  $rentadePeliculas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RentadePeliculas $rentadePeliculas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RentadePeliculas  $rentadePeliculas
     * @return \Illuminate\Http\Response
     */
    public function destroy(RentadePeliculas $rentadePeliculas)
    {
        //
    }
}
