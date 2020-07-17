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
    public function index(Request $request)
    {
        if (!$request) {
            $socios = DB::select('select s.id_socio,p.nombre, p.ap_paterno, p.ap_materno, p.dir, p.telefono,s.ine,s.domicilio FROM personas p,socios s WHERE p.id_persona=s.id_persona order by s.id_socio desc');
            return view('Socios.index',['socios' => $socios]);
        }else{
            if ($request) {
                $query=trim($request->get('search'));
                $socios = DB::select('select s.id_socio,p.nombre, p.ap_paterno, p.ap_materno, p.dir, p.telefono,s.ine,s.domicilio FROM personas p,socios s WHERE p.id_persona=s.id_persona and p.nombre LIKE '."'%".$query."%'".' order by s.id_socio desc');
                return view('Socios.index',['socios' => $socios, 'search' => $query]);
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
            if ($request ->hasFile('ine')){
                $file = $request->file('ine');
                $ine = time().$file->getClientOriginalName();
                $file ->move(public_path().'/PDF/INE',$ine);
            }
            if ($request ->hasFile('domicilio')){
                $file = $request->file('domicilio');
                $domicilio = time().$file->getClientOriginalName();
                $file ->move(public_path().'/PDF/Comprobantes',$domicilio);
            }

            DB::select('call insert_Socios2(?,?,?,?,?,?,?)',[$nombre,$ap_paterno,$ap_materno,$dir,$telefono,$ine,$domicilio]);
            return redirect('/Socios');
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
    public function edit($id_socio)
    {
        // $Socios= Socios::findOrFail($id_socio);
        $socios = DB::select('select s.id_socio,p.nombre, p.ap_paterno, p.ap_materno, p.dir, p.telefono FROM personas p,socios s WHERE p.id_persona=s.id_persona and s.id_socio= ?',$id_socio);

        return view('Socios.editar',['socios' => $socios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Socios  $socios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id_socio)
    {
        $datosSocios=request()->except(['_token','_method']);
        Socios::where('id_socio','=',$id_socio)->update($datosSocios);

        return redirect('Socios')->with('Mensaje','Socio modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Socios  $socios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_socio)
    {
        Socios::destroy($id_socio);
        return redirect('Socios');
    }
}
