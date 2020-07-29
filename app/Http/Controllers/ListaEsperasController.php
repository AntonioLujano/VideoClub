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
        if (!$request) {
             $ListaEsperas=DB::select('SELECT id_espera,titulo,fecha_registro,nombre,ap_paterno,ap_materno,estado FROM listaespera,peliculas,socios,personas WHERE personas.id_persona=socios.id_persona AND peliculas.id_pelicula=listaespera.id_pelicula AND socios.id_socio=listaespera.id_socio ORDER BY titulo ASC');
            return view('ListaEsperas.index',['ListaEsperas' => $ListaEsperas]);
        }else{
            if ($request) {
                $query=trim($request->get('search'));
                $ListaEsperas = DB::select('SELECT id_espera,titulo, fecha_registro,nombre,ap_paterno,ap_materno,estado FROM listaespera,peliculas,socios,personas WHERE personas.id_persona=socios.id_persona AND peliculas.id_pelicula=listaespera.id_pelicula AND socios.id_socio=listaespera.id_socio AND peliculas.titulo LIKE '."'%".$query."%'".' order by id_espera');
                return view('ListaEsperas.index',['ListaEsperas' => $ListaEsperas, 'search' => $query]);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peliculas=Peliculas::all();
        $socios=Socios::all();
        $Personas=Personas::all();
        return view('ListaEsperas.create',compact('ListaEsperas','peliculas'),compact('socios'));
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
    public function edit($id )
    {
        $lista=ListaEsperas::findOrFail($id);
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
    public function destroy( $id)
    {
        
        $lista=DB::delete('DELETE FROM `listaespera` WHERE `listaespera`.`id_espera` = ?', $lista->id_persona);
        return redirect('ListaEsperas')->with('Registro eliminado con exito');;
    }
}
