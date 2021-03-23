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

//Login
Route::get('login', 'WelcomeController@login');
Route::get('logout', 'WelcomeController@logout');
Route::post('login/siswa/check', 'SiswaController@check');
Route::post('login/petugas/check', 'PetugasController@check');

//Siswa
Route::get('siswa/dashboard', 'SiswaController@dashboard');

Route::get('create/siswa', 'PetugasController@createsiswa');
Route::put('create/siswa/store', 'PetugasController@storesiswa');

Route::get('create/siswaspp', 'PetugasController@createsiswaspp');
Route::get('create/siswaspp/spp/{id}', 'PetugasController@getsiswaspp');
Route::put('update/siswa/spp/{id}', 'PetugasController@updatesiswaspp');

//Petugas
Route::get('petugas/dashboard', 'PetugasController@dashboard');

Route::get('create/petugas', 'PetugasController@createpetugas');
Route::put('create/petugas/store', 'PetugasController@storepetugas');

//Kelas
Route::get('create/kelas', 'PetugasController@createkelas');
Route::put('create/kelas/store', 'PetugasController@storekelas');

//SPP
Route::get('create/spp', 'PetugasController@createspp');
Route::put('create/spp/store', 'PetugasController@storespp');

//Pembayaran
Route::get('create/entri', 'PetugasController@createentri');
Route::get('create/entri/siswa/{id}', 'PetugasController@getsiswaentrik');
Route::put('create/entri/store/{id}', 'PetugasController@storeentri');



