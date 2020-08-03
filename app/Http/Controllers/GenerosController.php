<?php

namespace App\Http\Controllers;

use App\Generos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generos=DB::select('select *from generos order by id_genero');
        return view('Generos.index',['generos' => $generos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Generos.registrar');

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
        
        $v = \validator($request->all(), [
            
            'des_gen' => 'required|unique:Generos'
            
             
         ]);
        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        $des_gen = $request->input('des_gen');
         $data = array("des_gen" => $des_gen);
         DB::table('generos')->insert($data);
         return redirect('/Generos');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function show(Generos $generos)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function edit($id_genero)
    {
        //
        $generos= Generos::findOrFail($id_genero);

        return view('Generos.edit',compact('generos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_genero)
    {
        //
        $datosGenero=request()->except(['_token','_method']);
        Generos::where('id_genero','=',$id_genero)->update($datosGenero);

        /**$generos= Generos::findOrFail($id_genero);

        return view('Generos.edit',compact('generos'));
        */
       

        return redirect('Generos')->with('Mensaje','Genero modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_genero)
    {
        //
        Generos::destroy($id_genero);
        return redirect('Generos');
        
    }
}
