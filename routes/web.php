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

Route::get('/', function () {
    return view('Template.template');
});
/*Route::get('/MasPopulares', function () {
    return view('MasPopulares.index');
});*/
/*Route::get('/ListadoSocios', function () {
    return view('Socios.index');
});



});*/

Route::resource('/MasPopulares', 'MasPopularesController');
Route::resource('/Socios', 'SociosController');
Route::resource('/ListaEsperas', 'ListaEsperasController');
Route::resource('/RentadePeliculas', 'PrestamosController');
Route::resource('/Generos','GenerosController');
