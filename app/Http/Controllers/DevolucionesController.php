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
    public function index()
    {
        $sql='SELECT id_devolucion,fecha,fecha_dev,nombre,ap_paterno,ap_materno from devoluciones,prestamos,personas,socios WHERE prestamos.id_prestamo=devoluciones.id_prestamo AND personas.id_persona=socios.id_persona ';
        $Devoluciones=DB::select($sql);
        $datos=Devoluciones::paginate(10);
        return view('Devoluciones.index',$datos,compact('Devoluciones'));
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
        return view('Devoluciones.create',compact('peliculas','socios','personas'));
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
