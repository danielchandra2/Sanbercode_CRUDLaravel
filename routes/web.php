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
    return view('master');
});

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::get('/pertanyaan/{id}', 'PertanyaanController@show');
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::put('/pertanyaan/{id}', 'PertanyaanController@update');
Route::delete('/pertanyaan/{id}','PertanyaanController@destroy');

Route::get('/jawaban', 'JawabanController@index');
Route::post('/jawaban', 'JawabanController@store');
//Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');
//Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@index');
Route::get('/jawaban/{id}', 'JawabanController@show');