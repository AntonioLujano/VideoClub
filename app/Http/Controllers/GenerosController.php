<?php

namespace App\Http\Controllers;

use App\Generos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generos=DB::select('select *from generos order by id_genero');
        return view('Generos.index',['generos' => $generos]);
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
     * @param  \App\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function show(Generos $generos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function edit(Generos $generos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generos $generos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Generos $generos)
    {
        //
    }
}
