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
        $pelicula = DB::select('select pp.id_peliprestada FROM socios s,prestamos pre,peliprestada pp,copias c,peliculas p WHERE s.id_socio=pre.id_socio and pre.id_prestamo=pp.id_prestamo and pp.id_copia=c.id_copia AND p.id_pelicula=c.id_pelicula AND s.id_socio=1');
        $peliculas = DB::select('select Pel.id_pelicula,Pel.titulo, Dir.nombre_dire,Dir.ap_paterno, Dir.ap_materno ,Gen.des_gen from Peliculas Pel, Directores Dir, Generos Gen where Gen.id_genero=Pel.id_genero and Pel.id_director=Dir.id_director order by Pel.id_pelicula');
        return view('RentaFisicas.index',['peliculas' => $peliculas]);
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
