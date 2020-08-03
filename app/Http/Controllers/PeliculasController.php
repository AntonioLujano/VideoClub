<?php

namespace App\Http\Controllers;
use App\Directores;
use App\Generos;
use App\Peliculas;
use Illuminate\Http\Request;


class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request){
            $query = trim($request->get('search'));
            $Peliculas = Peliculas::where('titulo', 'LIKE', '%' . $query . '%')
            ->orderBy('titulo', 'asc')
            ->get();

            return view('Peliculas.index',['Peliculas' => $Peliculas, 'search' => $query]);
        }
        //$Peliculas=Peliculas:: orderby('id_pelicula')->get();
        //return view("Peliculas.index",compact("Peliculas"));
        //return view('Peliculas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('Peliculas.registrar');
        $Directores=Directores::all();
        $Generos=Generos::all();
        return view("Peliculas.create",compact("Directores", "Generos"));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*$Pelicula = new Peliculas;*/

        $v = \validator($request->all(), [

            'titulo' => 'required|unique:Peliculas',
            'id_director' => 'required',
            'id_genero'    => 'required',
            'cantidad' => 'required'


        ]);

        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        Peliculas::create($request->all());
        /*$Pelicula = Peliculas::all();*/
        return redirect("Peliculas");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function show(Peliculas $peliculas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function edit(Peliculas $Pelicula)
    {
        //
        $Directores=Directores::all();
        $Generos=Generos::all();
        return view("Peliculas.edit",compact('Pelicula','Directores','Generos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peliculas $Pelicula)
    {
        //
        $Pelicula->update($request->all());
        return redirect("Peliculas");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peliculas $Pelicula)
    {
        //
        $Pelicula->delete();
        return redirect("Peliculas");
    }

    public function bucador(Request $request)
    {
        //
        $titulo = Peliculas::where("titulo","like",$request->texto."%")->take(10)->get() ;
        return view("Peliculas.index",compact("Peliculas"));
    }
}
