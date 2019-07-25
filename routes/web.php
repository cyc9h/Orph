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
    return view('welcome');
});

Route::get('/karya','KaryaController@index');
Route::post('/karya/create','KaryaController@create');
Route::get('/karya/{id}/edit','KaryaController@edit');
Route::post('/karya/{id}/update','KaryaController@update');
Route::get('/karya/{id}/delete','KaryaController@delete');

Route::get('/panti','PantiController@index');
Route::post('/panti/create','PantiController@create');
Route::get('/panti/{id}/edit','PantiController@edit');
Route::post('/panti/{id}/update','PantiController@update');
Route::get('/panti/{id}/delete','PantiController@delete');
Route::get('/panti/{id}/profile','PantiController@profile');

Route::get('/adminpanti','AdminpantiController@index');

Route::get('/kunjung','KunjungController@index');
Route::post('/kunjung/create','KunjungController@create');
