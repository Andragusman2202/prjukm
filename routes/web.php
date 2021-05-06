<?php

use App\Ukm;
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
    $ukm = Ukm::all();
    return view('welcome', compact('ukm'));
});


// Route::get('/', function () {
//     $ukm = Ukm::all();
//     return view('welcome', compact('ukm'));
// });

Auth::routes();

Route::get('/ukm', 'UkmController@index')->name('ukm');
Route::get('/ukm/create', 'UkmController@create' );
Route::post('/ukm', 'UkmController@store' );
Route::get('/ukm/{id_ukm}/edit','UkmController@edit' );
Route::patch('/ukm/{id_ukm}','UkmController@update' );
Route::delete('/ukm/{id_ukm}','UkmController@destroy' );

Route::get('/anggota', 'AnggotaController@index')->name('anggota');
Route::get('/anggota/create', 'AnggotaController@create' );
Route::post('/anggota', 'AnggotaController@store' );
Route::get('/anggota/{id_anggota}/edit','AnggotaController@edit' );
Route::patch('/anggota/{id_anggota}','AnggotaController@update' );
Route::delete('/anggota/{id_anggota}','AnggotaController@destroy' );

Route::get('/struktur', 'StrukturController@index')->name('struktur');
Route::get('/struktur/create', 'StrukturController@create' );
Route::post('/struktur', 'StrukturController@store' );
Route::get('/struktur/{id_struktur}/edit','StrukturController@edit' );
Route::patch('/struktur/{id_struktur}','StrukturController@update' );
Route::delete('/struktur/{id_struktur}','StrukturController@destroy' );


Route::get('/agenda', 'AgendaController@index')->name('agenda');
Route::get('/agenda/create', 'AgendaController@create' );
Route::post('/agenda', 'AgendaController@store' );
Route::get('/agenda/{id_agenda}/edit','agendaController@edit' );
Route::patch('/agenda/{id_agenda}','agendaController@update' );
Route::delete('/agenda/{id_agenda}','agendaController@destroy' );

Route::get('/galery', 'GaleryController@index')->name('galery');
Route::get('/galery/create', 'GaleryController@create' );
Route::post('/galery', 'GaleryController@store' );
Route::get('/galery/{id_galery}/edit','GaleryController@edit' );
Route::patch('/galery/{id_galery}','GaleryController@update' );
Route::delete('/galery/{id_galery}','GaleryController@destroy' );

Route::get('/prestasi', 'PrestasiController@index')->name('prestasi');
Route::get('/prestasi/create', 'PrestasiController@create' );
Route::post('/prestasi', 'PrestasiController@store' );
Route::get('/prestasi/{id_prestasi}/edit','PrestasiController@edit' );
Route::patch('/prestasi/{id_prestasi}','PrestasiController@update' );
Route::delete('/prestasi/{id_prestasi}','PrestasiController@destroy' );

Route::get('/home', 'HomeController@index')->name('home');

Route::get('cybertech','CybertechController@view')->name('cybertech');
Route::get('jawara','JawaraController@view')->name('jawara');

