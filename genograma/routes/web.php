<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('inicio');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/informeGenomaUnNodo/{post}','InformesController@informeGenomaUnNodo' );
Route::get('/informeGenomaDosNodo/{post}','InformesController@informeGenomaUnNodo' );

//Route::resource('genoma', 'GenomaController');

Route::post('genoma', 'GenomaController@store');
Route::get('genoma', 'GenomaController@index');
Route::get('genoma/{idGenoma}/{idSujeto}','GenomaController@show');
Route::put('genoma/{idGenoma}/{idSujeto}','GenomaController@update');
Route::delete('genoma/{idGenoma}/{idSujeto}','GenomaController@destroy');

Route::resource('sujeto', 'SujetoController');
//Route::resource('relacion', 'RelacionController');

Route::post('relacion', 'GenomaController@store');
Route::get('relacion', 'GenomaController@index');
Route::get('relacion/{idRelacion}/{idSujeto}','GenomaController@show');
Route::put('relacion/{idRelacion}/{idSujeto}','GenomaController@update');
Route::delete('relacion/{idRelacion}/{idSujeto}','GenomaController@destroy');


Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/inicio', function(){
    return view('inicio');
});
Route::get('/colaboradores', function(){
    return view('colaboradores');
});
Route::get('/informacion', function(){
    return view('informacion');
});
Route::get('/crearGenograma', function(){
    return view('crearGenograma');
});
Route::get('/verGenogramas', function(){
    return view('verGenogramas');
});
Route::get('/leandro', function(){
    return view('leandro');
});
