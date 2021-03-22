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
Route::get('login', 'WelcomeController@login');
Route::post('login/siswa/check', 'SiswaController@check');
Route::post('login/petugas/check', 'PetugasController@check');
