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
        //listar por directores favoritos
        // SELECT * FROM peliculas p, directores d,generos g,dirfav df,socios s WHERE g.id_genero=p.id_genero and d.id_director=p.id_director and d.id_director=df.id_director AND df.id_socio=s.id_socio
        // listar por generos favoritos
        // SELECT * FROM peliculas p, directores d,generos g,genfav gf,socios s WHERE g.id_genero=p.id_genero and d.id_director=p.id_director and g.id_genero=gf.id_genero and gf.id_socio=s.id_socio

        $id = Auth::id();

        $query = trim($request->get('search'));
        $devolver=trim($request->get('devolver'));
        $noesperar=trim($request->get('noesperar'));
        $esperar=trim($request->get('espera'));
        $rentar=trim($request->get('espera'));
        // $peliculas = DB::select('select * FROM socios s,prestamos pre,peliprestada pp,copias c,peliculas p,directores d,generos g WHERE s.id_socio=pre.id_socio and pre.id_prestamo=pp.id_prestamo and pp.id_copia=c.id_copia AND p.id_pelicula=c.id_pelicula AND p.id_director=d.id_director AND p.id_genero=g.id_genero AND not s.id_socio=' . $id . '  and P.titulo LIKE ' . "'%" . $query . "%'" . ' order by P.id_pelicula');
        $peliculas = DB::select('SELECT * FROM peliculas p, directores d,generos g WHERE g.id_genero=p.id_genero and d.id_director=p.id_director and P.titulo LIKE ' . "'%" . $query . "%'" . ' order by P.id_pelicula');
        // $cantP = DB::select('select * FROM peliculas p, directores d,generos g WHERE g.id_genero=p.id_genero and d.id_director=p.id_director');
        if (!$devolver == null) {
            DB::delete('DELETE FROM peliprestada WHERE id_peliprestada = ?', [$devolver]);
        }
        if (!$noesperar == null) {
            DB::delete('DELETE FROM listaespera WHERE id_espera = ?', [$noesperar]);
        }
        if(!$esperar==null)
        {
            DB::select('CALL llamadadisponible(?)',[$esperar]);
        }
        if(!$rentar==null)
        {
            DB::select('CALL rentar(?,?)',[$id,$rentar]);
        }
        $prestadas = DB::select('select * FROM socios s,listaespera l,peliculas p,generos g,directores d WHERE s.id_socio=l.id_socio and l.id_pelicula=p.id_pelicula and p.id_genero=g.id_genero and p.id_director= d.id_director AND s.id_socio=' . $id . ' and  p.titulo like ' . "'%" . $query . "%'" . ' ORDER by l.estado asc');

        // $prestadas = DB::select('select * FROM socios s,prestamos pre,peliprestada pp,copias c,peliculas p,directores d,generos g WHERE s.id_socio=pre.id_socio and pre.id_prestamo=pp.id_prestamo and pp.id_copia=c.id_copia AND p.id_pelicula=c.id_pelicula AND p.id_director=d.id_director AND p.id_genero=g.id_genero AND s.id_socio=1 order by P.id_pelicula');
        $devueltas = DB::select('select * FROM socios s,prestamos pre,peliprestada pp,copias c,peliculas p,directores d,generos g WHERE s.id_socio=pre.id_socio and pre.id_prestamo=pp.id_prestamo and pp.id_copia=c.id_copia AND p.id_pelicula=c.id_pelicula AND p.id_director=d.id_director AND p.id_genero=g.id_genero AND s.id_socio=' . $id . ' order by P.id_pelicula');
        $espera = DB::select('select * FROM socios s,listaespera l,peliculas p,generos g,directores d WHERE s.id_socio=l.id_socio and l.id_pelicula=p.id_pelicula and p.id_genero=g.id_genero and p.id_director= d.id_director and  s.id_socio=' . $id . ' ORDER by estado desc');
        return view('MasPopulares.list', ['peliculas' => $peliculas, 'search' => $query, 'prestadas' => $prestadas, 'devueltas' => $devueltas, 'espera' => $espera]);
    }
}
