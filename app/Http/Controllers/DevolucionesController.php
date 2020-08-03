<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Devoluciones;
use App\Peliculas;
use App\Socios;
use App\Personas;
use App\Prestamos;

class DevolucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = trim($request->get('search'));
        $devorver=trim($request->get('devolver'));
        $listado = DB::select('SELECT * FROM socios s,prestamos pre,peliprestada pp,copias c,peliculas p WHERE s.id_socio=pre.id_socio and pre.id_prestamo=pp.id_prestamo and pp.id_copia=c.id_copia AND p.id_pelicula=c.id_pelicula and s.email like ' . "'%" . $query . "%'" . ' ORDER by pp.id_peliprestada asc');
         if(!$devorver==null)
         {
             DB::delete('DELETE FROM peliprestada WHERE id_peliprestada = ?', [$devorver]);
         }
        return view('Devoluciones.index', ['listado' => $listado, 'search' => $query]);
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
        return view('Devoluciones.create',['peliculas'=>$peliculas,'socios'=>$socios]);
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
    public function edit( $id)
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
    public function update(Request $request, devoluciones $devoluciones)
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
        $lista = DB::delete('delete from devoluciones WHERE devoluciones.id_devolucion = ?', [$id]);
        return redirect('Devoluciones')->with('Mensaje','Dato eliminado con exito');
    }
}
