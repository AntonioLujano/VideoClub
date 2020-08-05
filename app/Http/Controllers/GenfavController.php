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
        $fav=trim($request->get('fav'));
        $generos=DB::select('select * from generos where des_gen LIKE '."'%".$query."%'".'order by id_genero');
        $genf=DB::select('select * from generos g,genfav gf,socios s WHERE g.id_genero=gf.id_genero and s.id_socio=gf.id_socio and s.id_socio='.$id);

        if (!$nofav == null) {
            DB::delete('DELETE FROM genfav WHERE id_genero = '.$nofav.' and id_socio='.$id);
            // return view('GenFav.index',['generos' => $generos,'genf' => $genf]);
            return view('GenFav.list',['generos' => $generos,'genf' => $genf]);
        }else
        if(!$fav==null)
        {
            DB::insert('INSERT INTO genfav(id_generofav, id_genero, id_socio) VALUES (?,?,?)',[0,$fav,$id]);
            // return view('GenFav.index',['generos' => $generos,'genf' => $genf]);
            return view('GenFav.list',['generos' => $generos,'genf' => $genf]);
        }
        //  return view('GenFav.index',['generos' => $generos,'genf' => $genf]);
        return view('GenFav.list',['generos' => $generos,'genf' => $genf]);
    }
}
