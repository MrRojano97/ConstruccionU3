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

Route::resource('genoma', 'GenomaController');
Route::resource('rutaSujeto', 'SujetoController');
Route::resource('relacion', 'RelacionController');

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
