<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ListaEsperas;
use App\Peliculas;
use App\Socios;
use App\Personas;

class ListaEsperasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = trim($request->get('search'));
        $prestar=trim($request->get('llamar'));
        $listado = DB::select('SELECT * FROM socios s,listaespera l,peliculas p,generos g,directores d WHERE s.id_socio=l.id_socio and l.id_pelicula=p.id_pelicula and p.id_genero=g.id_genero and p.id_director= d.id_director and  p.titulo like ' . "'%" . $query . "%'" . ' ORDER by l.estado asc');
        if(!$prestar==null)
        {
            DB::select('CALL llamadadisponible(?)',[$prestar]);
            return view('ListaEsperas.index', ['peliculas' => $listado, 'search' => $query]);
        }
        return view('ListaEsperas.index', ['peliculas' => $listado, 'search' => $query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ListaEsperas.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MasPopulares  $masPopulares
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lista = ListaEsperas::findOrFail($id);
        return view('ListaEsperas.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MasPopulares  $masPopulares
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $masPopulares)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MasPopulares  $masPopulares
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $lista = DB::delete('DELETE FROM `listaespera` WHERE `listaespera`.`id_espera` = ?', $lista->id_persona);
        return redirect('ListaEsperas')->with('Registro eliminado con exito');;
    }
}
