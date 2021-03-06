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

/*Route::get('/', function () {
    return view('layouts.app');
});*/
Route::get('/', function () {
    return view('/auth/login');
});

Route::group(['middleware'=>['auth']],function (){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/MasPopulares', 'MasPopularesController');
    Route::resource('/Socios', 'SociosController');
    Route::resource('/ListaEsperas', 'ListaEsperasController');
    Route::resource('/Devoluciones', 'DevolucionesController');
    Route::resource('/Renta', 'RentadePeliculasController');
    Route::resource('/cart','RentadePeliculasController');
    Route::resource('/Generos','GenerosController');
    Route::resource('/GenFav','GenfavController');
    Route::resource('/DirFav','DirfavController');
    Route::resource('/Directores','DirectoresController');
    Route::resource('/Actores','ActoresController');
    Route::resource('/Peliculas','PeliculasController');

    Route::get('add-to-cart/{id_pelicula}','MasPopularesController@addToCart');
    Route::get('delete-cart/{id_pelicula}','MasPopularesController@delete');
    
    Route::get('show',[
        'as' => 'cart-show',
        'uses' => 'MasPopularesController@show']);

    Route::get('order-detail',[
        'middleware' => 'auth',
        'as' => 'order-detail',
        'uses' => 'RentadePeliculasController@orderDetail'
    ]);
});

