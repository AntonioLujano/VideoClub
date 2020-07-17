<?php

namespace App\Http\Controllers;

use App\Directores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DirectoresController extends Controller
{

    public function index()
    {
        $directores = DB::select('select * from directores;');
        return view('Directores.index', ['directores'=> $directores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Directores.registrar');
    }


    public function store(Request $request)
    {
            $nombre_dire = $request->input('nombre_dire');
            $ap_paterno = $request->input('ap_paterno');
            $ap_materno = $request->input('ap_materno');

            $data = array("nombre_dire" => $nombre_dire, "ap_paterno" => $ap_paterno,
            "ap_materno" => $ap_materno);

            DB::table('Directores')->insert($data);


            return redirect('/Directores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Directores  $directores
     * @return \Illuminate\Http\Response
     */
    public function show(Directores $directores)
    {
        //
    }

    /**
     *
     * Show the form for editing the specified resource.
     *
     * @param  \App\Directores  $directores
     * @return \Illuminate\Http\Response
     */
    public function edit($id_director)
    {
        $directores= Directores::findOrFail($id_director);

        return view('Directores.edit',compact('directores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Directores  $directores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_director)
    {
        $datosDirector=request()->except(['_token','_method']);
        Directores::where('id_director','=',$id_director)->update($datosDirector);

        return redirect('Directores')->with('Mensaje','Director modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Directores  $directores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_director)
    {
        Directores::destroy($id_director);
        return redirect('Directores');
    }
}
