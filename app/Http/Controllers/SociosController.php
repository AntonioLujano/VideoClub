<?php

namespace App\Http\Controllers;

use App\GenFav;
use App\DirFav;
use App\ActFav;
use App\Socios;
use App\Personas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            $socios = DB::select('select s.id_socio,s.name, s.ap_paterno, s.ap_materno, s.dir, s.telefono, s.correo FROM socios s order by s.id_socio desc');
            return view('Socios.index',['socios' => $socios]);
        }else{
            if ($request) {
                $query=trim($request->get('search'));
                $socios = Socios::where('name', 'LIKE', '%'.$query.'%')
                ->orderBy('name')
                ->paginate(10);
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
            $nombre = $request->input('name');
            $ap_paterno = $request->input('ap_paterno');
            $ap_materno = $request->input('ap_materno');
            $dir = $request->input('dir');
            $telefono = $request->input('telefono');
            $correo = $request->input('email');
            $contrasena = Hash::make($request->input('password'));
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

            DB::select('call Insertar_Socio(?,?,?,?,?,?,?,?,?)',[$nombre,$ap_paterno,$ap_materno,$dir,$telefono,$correo,$contrasena,$ine,$domicilio]);
            DB::select('call Insertar_Usuario(?,?,?)',[$nombre,$correo,$contrasena]);
           return redirect('Socios')->with('Mensaje','Socio ingresado con exito');
        //return view('auth.register');
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
        $socios = Socios::where('id_socio',$id_socio)->first();

        return view('Socios.editar',['socios' => $socios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Socios  $socios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_socio)
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
        DB::select('call Eliminar_Socio(?)',[$id_socio]);
        return redirect('Socios');
    }

    public function usuario()
    {
        return view('Socios/registrousuario');
    }
}
