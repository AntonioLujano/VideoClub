<?php

namespace App\Http\Controllers;

use App\Directores;
use App\Generos;
use App\Peliculas;
use App\Personas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasPopularesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if (!$request) {
            $peliculas = DB::select('select Pel.id_pelicula,Pel.titulo, Dir.nombre_dire,Dir.ap_paterno, Dir.ap_materno ,Gen.des_gen from Peliculas Pel, Directores Dir, Generos Gen where Gen.id_genero=Pel.id_genero and Pel.id_director=Dir.id_director order by Pel.id_pelicula');
            return view('MasPopulares.index',['peliculas' => $peliculas]);
        }else{
            if ($request) {
                $query=trim($request->get('search'));
                $peliculas = DB::select('select Pel.id_pelicula,Pel.titulo, Dir.nombre_dire,Dir.ap_paterno, Dir.ap_materno ,Gen.des_gen from Peliculas Pel, Directores Dir, Generos Gen where Gen.id_genero=Pel.id_genero and Pel.id_director=Dir.id_director and Pel.titulo LIKE '."'%".$query."%'".' order by Pel.id_pelicula');
                return view('MasPopulares.list',['peliculas' => $peliculas, 'search' => $query]);
            }
        }
    }

    public function add (Peliculas $Pelicula)
    {

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Peliculas  $masPopulares
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peliculas  $masPopulares
     * @return \Illuminate\Http\Response
     */
    public function edit(Peliculas $masPopulares)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peliculas  $masPopulares
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peliculas $masPopulares)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peliculas  $masPopulares
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pelicula)
    {
        Peliculas::destroy($id_pelicula);
        return redirect('MasPopulares');
    }
}
