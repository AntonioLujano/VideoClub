<?php

namespace App\Http\Controllers;

use App\Directores;
use App\Generos;
use App\Peliculas;
use App\Personas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasPopularesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
            if ($request) {
                $query=trim($request->get('search'));
                $peliculas = DB::select('select * FROM socios s,prestamos pre,peliprestada pp,copias c,peliculas p,directores d,generos g WHERE s.id_socio=pre.id_socio and pre.id_prestamo=pp.id_prestamo and pp.id_copia=c.id_copia AND p.id_pelicula=c.id_pelicula AND p.id_director=d.id_director AND p.id_genero=g.id_genero AND not s.id_socio=1  and P.titulo LIKE '."'%".$query."%'".' order by P.id_pelicula');
            }
            $prestadas = DB::select('select * FROM socios s,prestamos pre,peliprestada pp,copias c,peliculas p,directores d,generos g WHERE s.id_socio=pre.id_socio and pre.id_prestamo=pp.id_prestamo and pp.id_copia=c.id_copia AND p.id_pelicula=c.id_pelicula AND p.id_director=d.id_director AND p.id_genero=g.id_genero AND s.id_socio=1 order by P.id_pelicula');
            $devueltas = DB::select('select * FROM socios s,prestamos pre,peliprestada pp,copias c,peliculas p,directores d,generos g WHERE s.id_socio=pre.id_socio and pre.id_prestamo=pp.id_prestamo and pp.id_copia=c.id_copia AND p.id_pelicula=c.id_pelicula AND p.id_director=d.id_director AND p.id_genero=g.id_genero AND s.id_socio=1 order by P.id_pelicula');
            return view('MasPopulares.list',['peliculas' => $peliculas, 'search' => $query, 'prestadas' => $prestadas, 'devueltas' => $devueltas]);

    }

    public function add (Peliculas $Pelicula)
    {

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
     * @param  \App\Peliculas  $masPopulares
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peliculas  $masPopulares
     * @return \Illuminate\Http\Response
     */
    public function edit(Peliculas $masPopulares)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peliculas  $masPopulares
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peliculas $masPopulares)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peliculas  $masPopulares
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pelicula)
    {
        Peliculas::destroy($id_pelicula);
        return redirect('MasPopulares');
    }
}
