<?php

namespace App\Http\Controllers;

use App\Actores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ActoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query=trim($request->get('search'));
        $actores = DB::select('select id_actor, nombre_act, ap_paterno, ap_materno FROM actores where nombre_act LIKE '."'%".$query."%'".'order by id_actor');
        return view('Actores.index', ['actores'=> $actores] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Actores.registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v = \validator($request->all(), [


            'nombre_act' => 'required',
            'ap_paterno'    =>'required',
            'ap_materno' => 'required'

            ]);

        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        $id_actor = $request->input ('id_actor');
            $nombre_act = $request->input('nombre_act');
            $ap_paterno = $request->input('ap_paterno');
            $ap_materno = $request->input('ap_materno');
            $nom_completo = $request->input('nom_completo');

            //$data = array("nombre_act" => $nombre_act, "ap_paterno" => $ap_paterno, "ap_materno" => $ap_materno, );

            //DB::table('Actores')->insert($data);
            DB::select('call insertactor(?,?,?,?,?)',[$id_actor,$nombre_act,$ap_paterno,$ap_materno,$nom_completo]);


            return redirect('/Actores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actores  $actores
     * @return \Illuminate\Http\Response
     */
    public function show(Actores $actores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actores  $actores
     * @return \Illuminate\Http\Response
     */
    public function edit($id_actor)
    {
        $actores= Actores::findOrFail($id_actor);

        return view('Actores.edit',compact('actores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actores  $actores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_actor)
    {
        //
        $datosActor=request()->except(['_token','_method']);
        Actores::where('id_actor','=',$id_actor)->update($datosActor);

        return redirect('Actores')->with('Mensaje','Actor modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actores  $actores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_actor)
    {
        Actores::destroy($id_actor);
        return redirect('Actores');

    }
}
