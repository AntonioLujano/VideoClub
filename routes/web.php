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

<<<<<<< HEAD
Route::get('/RegistroSocios', function(){
	return view('Socios.registrar');
});
Route::get('/RentadePeliculas', function(){
	return view('RentadePeliculas.index');
});
=======
>>>>>>> 2a004aaaa645b3f6b9055e669188929b47228890


});*/

Route::resource('/MasPopulares', 'MasPopularesController');
Route::resource('/ListadoSocios', 'ListadoSociosController');
Route::resource('/ListaEsperas', 'ListaEsperasController');