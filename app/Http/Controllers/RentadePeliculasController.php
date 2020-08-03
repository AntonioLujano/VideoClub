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
        $socios = DB::select('select * FROM socios order by name asc');
        $peliculas = DB::select('select Pel.id_pelicula,Pel.titulo, Dir.nombre_dire,Dir.ap_paterno, Dir.ap_materno ,Gen.des_gen from Peliculas Pel, Directores Dir, Generos Gen where Gen.id_genero=Pel.id_genero and Pel.id_director=Dir.id_director order by Pel.titulo asc');
        return view('RentaFisicas.index',['peliculas' => $peliculas,'socios' => $socios]);
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
