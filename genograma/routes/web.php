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


Route::post('/rutaSujeto','SujetoController@registrarSujeto' ); //metodo para guardar
Route::get('/rutaSujeto','SujetoController@listarSujetos' );
Route::get('/rutaSujeto/{post}','SujetoController@listarSujeto' );
Route::put('/rutaSujeto/{post}','SujetoController@actualizarRegistroSujeto' );
Route::delete('/rutaSujeto/{post}','SujetoController@eliminarRegistroSujeto' );
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
