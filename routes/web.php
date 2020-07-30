<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*Route::get('/MasPopulares', function () {
    return view('MasPopulares.index');
});*/
/*Route::get('/ListadoSocios', function () {
    return view('Socios.index');
});



});*/



Auth::routes();

Route::get('/', function () {
    return view('layouts.app');
});

Route::group(['middleware'=>['auth']],function (){

    Route::get('/home', 'HomeController@index')->name('home');


    Route::get('/template', function () {
        return view('Template.template');
    });


    Route::resource('/MasPopulares', 'MasPopularesController');
    Route::resource('/Socios', 'SociosController');
    Route::resource('/ListaEsperas', 'ListaEsperasController');
    Route::resource('/Devoluciones', 'DevolucionesController');
    Route::resource('/Renta', 'RentadePeliculasController');
    Route::resource('/RentadePeliculas', 'PrestamosController');
    Route::resource('/Generos','GenerosController');
    Route::resource('/Directores','DirectoresController');
    Route::resource('/Actores','ActoresController');

});
