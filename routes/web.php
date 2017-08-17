<?php
use Illuminate\View\View;

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
    return view('welcome', ['nombre' => 'Miguel']);
//    return view('welcome', ['nombre' => null]);


/// otras formas de pasar variables al View
//  return view('welcome')->with('nombre', 'Miguel');
//  return view('welcome')->withnombre('Miguel');

});


Route::get('/posts', 'PostController@index');
Route::get('/posts/{id}', 'PostController@show');
//






/*

/// ejemplio de RUTA
Route::get('/hola/mundo', function () {
    return 'Hola!';
});
*/
/*
/// hola<nombre>  => 'Hola <nombre>'
Route::get('/hola/{nombre}', function ($nombre) {
    return "Hola ! {$nombre}";
});
*/

/// Lo mismo usando un controlador
//Route::get('/hola/{nombre}', 'HolaController@hola');
