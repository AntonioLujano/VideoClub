<?php

namespace App\Http\Controllers;

use App\MasPopulares;
use App\Directores;
use App\Generos;
use App\Peliculas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasPopularesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = DB::select('select Pel.id_pelicula,Pel.titulo, Per.nombre,Per.ap_paterno, Per.ap_materno ,Gen.des_gen from Personas Per,Peliculas Pel, Directores Dir, Generos Gen
        where Per.id_persona=Dir.id_persona and Gen.id_genero=Pel.id_genero and Pel.id_director=Dir.id_director order by Pel.id_pelicula');
       return view('MasPopulares.index',['peliculas' => $peliculas]);
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
