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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ficha', function () {
    return view('ficha');
});
Route::get('/documentacion', function () {
    return view('documentacion');
});
Route::get('/HC', function () {
    return view('HC');
});
Route::get('/OS', function () {
    return view('OS');
});
Route::get('/roles', function () {
    return view('roles');
});
Route::get('/asistencia', function () {
    return view('asistencia');
});

Route::resource('/obrasocial','ObraSocialController');
//Route::get('/index', 'Estatico/index')->name('index');

Route::get('/ejemplo','ObraSocialController@list');
