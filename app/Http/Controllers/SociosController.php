<?php

namespace App\Http\Controllers;

use App\Socios;
use App\Personas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SociosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$Personas = Personas::all();
        //$Socios = Socios::all();
        //return view('Socios.index',compact('Personas','Socios'));
        $socios = DB::select('select p.nombre, p.ap_paterno, p.ap_materno, p.dir, p.telefono FROM personas p,socios s WHERE p.id_persona=s.id_persona');

        return view('Socios.index', ['socios' => $socios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Socios.registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //try {
          //  DB::beginTransaction();
            $nombre = $request->input('nombre');
            $ap_paterno = $request->input('ap_paterno');
            $ap_materno = $request->input('ap_materno');
            $dir = $request->input('dir');
            $telefono = $request->input('telefono');

            //$data = array("nombre" => $nombre, "ap_paterno" => $ap_paterno, "ap_materno" => $ap_materno, "dir" => $dir, "telefono" => $telefono);

            //DB::table('Personas')->insert($data);

            //$persona = DB::select('select id_persona FROM personas WHERE nombre = :nombre and ap_paterno = :ap_paterno and ap_materno =:ap_materno and dir = :dir and telefono = :telefono',["nombre" => $nombre, "ap_paterno" => $ap_paterno, "ap_materno" => $ap_materno, "dir" => $dir, "telefono" => $telefono]);

            //$regSocio = array('id_socio'=>0,'id_persona'=>$persona);

            //DB::table('Socios')->insert($regSocio);
            //DB::insert('insert into Socios (id_socio,id_persona) values (?, ?)', [0,'id_persona'=>$persona]);
            //DB::insert('insert INTO personas(nombre,ap_paterno,ap_materno,dir,telefono) values (?,?,?,?,?)',["nombre"=>$nombre,"ap_paterno"=>$ap_paterno,"ap_materno"=>$ap_materno,"dir"=>$dir,"telefono"=>$telefono]);
           // DB::commit();
           DB::select('call insert_Socios(?,?,?,?,?)',[$nombre,$ap_paterno,$ap_materno,$dir,$telefono]);
            return redirect('/Socios');//->with('status', '1');
            //return redirect('/Socios');
        /*} catch (\Exception $e) {
            DB::rollBack();
            return redirect('/Socios')->with('status', $e->getMessage());
        }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Socios  $socios
     * @return \Illuminate\Http\Response
     */
    public function show(Socios $socios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Socios  $socios
     * @return \Illuminate\Http\Response
     */
    public function edit(Socios $socios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Socios  $socios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Socios $socios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Socios  $socios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Socios $socios)
    {
        //DB::table('Socios')->where('id_persona',$socios->id_persona)->delete();
        $deleted = DB::delete('delete from personas WHERE personas.id_persona = ?', $socios->id_persona);
        return redirect('/Socios');
    }
}
