<?php

namespace App\Http\Controllers;

use App\Genfav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GenfavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = Auth::id();
        $query=trim($request->get('search'));
        $nofav=trim($request->get('nofav'));
        // $fav=trim($request->get('fav'));
        $generos=DB::select('select * from generos where des_gen LIKE '."'%".$query."%'".'order by id_genero');
        $genf=DB::select('select * from genfav WHERE id_socio='.$id);
        return view('GenFav.index',['generos' => $generos,'genf' => $genf]);
        if (!$nofav == null) {
            DB::delete('DELETE FROM genfav WHERE id_genero = '.$nofav);
        }
        // }else if(!$fav==null)
        // {
        //    DB::insert('INSERT INTO genfav(id_generofav, id_genero, id_socio) VALUES (0,'.$fav.','.$id.')');
        // }
    }

    public function favorito(Request $request)
    {
        $id = Auth::id();
        $fav=trim($request->get('fav'));
        if(!$fav==null)
        {
           DB::insert('INSERT INTO genfav(id_generofav, id_genero, id_socio) VALUES (0,'.$fav.','.$id.')');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Genfav  $genfav
     * @return \Illuminate\Http\Response
     */
    public function show(Genfav $genfav)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Genfav  $genfav
     * @return \Illuminate\Http\Response
     */
    public function edit(Genfav $genfav)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Genfav  $genfav
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genfav $genfav)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Genfav  $genfav
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genfav $genfav)
    {
        //
    }
}
