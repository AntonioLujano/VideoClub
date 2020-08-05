<?php

namespace App\Http\Controllers;

use App\Dirfav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DirfavController extends Controller
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
        // $directores = DB::select('select * from peliculas p,directores d where p.id_director=d.id_director and d.nombre_dire LIKE '."'%".$query."%'".' order by d.id_director asc');
        // $directores = DB::select('SELECT * FROM peliculas p, directores d, dirfav df WHERE p.id_director=d.id_director and df.id_director=d.id_director and not df.id_socio='.$id);
        $directores = DB::select('SELECT * FROM peliculas p, directores d WHERE p.id_director=d.id_director');
        $dirf = DB::select('SELECT * FROM  directores d, dirfav df WHERE df.id_director=d.id_director and df.id_socio='.$id);
        if (!$nofav == null) {
            DB::delete('DELETE FROM dirfav WHERE id_dirfav = '.$nofav.' and id_socio='.$id);
            return view('DirFav.index', ['directores'=> $directores,'dirf'=> $dirf]);
        }else
        if(!$fav==null)
        {
            DB::insert('INSERT INTO dirfav (id_dirfav, id_socio, id_director) VALUES  (?,?,?)',[0,$id,$fav]);
            return view('DirFav.index', ['directores'=> $directores,'dirf'=> $dirf]);
        }
        return view('DirFav.index', ['directores'=> $directores,'dirf'=> $dirf]);
    }
}
