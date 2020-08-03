<?php

namespace App\Http\Controllers;

use App\Directores;
use App\Generos;
use App\Peliculas;
use App\Personas;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class MasPopularesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $id = Auth::id();
            if ($request) {
                $query=trim($request->get('search'));
                $peliculas = DB::select('select * FROM socios s,prestamos pre,peliprestada pp,copias c,peliculas p,directores d,generos g WHERE s.id_socio=pre.id_socio and pre.id_prestamo=pp.id_prestamo and pp.id_copia=c.id_copia AND p.id_pelicula=c.id_pelicula AND p.id_director=d.id_director AND p.id_genero=g.id_genero AND not s.id_socio='.$id.'  and P.titulo LIKE '."'%".$query."%'".' order by P.id_pelicula');
            }
            $prestadas = DB::select('select * FROM socios s,listaespera l,peliculas p,generos g,directores d WHERE s.id_socio=l.id_socio and l.id_pelicula=p.id_pelicula and p.id_genero=g.id_genero and p.id_director= d.id_director and  p.titulo like ' . "'%" . $query . "%'" . ' ORDER by l.estado asc');

            // $prestadas = DB::select('select * FROM socios s,prestamos pre,peliprestada pp,copias c,peliculas p,directores d,generos g WHERE s.id_socio=pre.id_socio and pre.id_prestamo=pp.id_prestamo and pp.id_copia=c.id_copia AND p.id_pelicula=c.id_pelicula AND p.id_director=d.id_director AND p.id_genero=g.id_genero AND s.id_socio=1 order by P.id_pelicula');
            $devueltas = DB::select('select * FROM socios s,prestamos pre,peliprestada pp,copias c,peliculas p,directores d,generos g WHERE s.id_socio=pre.id_socio and pre.id_prestamo=pp.id_prestamo and pp.id_copia=c.id_copia AND p.id_pelicula=c.id_pelicula AND p.id_director=d.id_director AND p.id_genero=g.id_genero AND s.id_socio='.$id.' order by P.id_pelicula');
            $espera = DB::select('select * FROM socios s,listaespera l,peliculas p,generos g,directores d WHERE s.id_socio=l.id_socio and l.id_pelicula=p.id_pelicula and p.id_genero=g.id_genero and p.id_director= d.id_director and  s.id_socio='.$id.' ORDER by estado desc');
            return view('MasPopulares.list',['peliculas' => $peliculas, 'search' => $query, 'prestadas' => $prestadas, 'devueltas' => $devueltas, 'espera' => $espera]);

    }
}
