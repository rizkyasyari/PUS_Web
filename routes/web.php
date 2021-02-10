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

Route::get('/data_siswa', 'DataSiswaController@index')->name('data_siswa');
Route::post('/data_siswa/tambah', 'DataSiswaController@tambah');
Route::get('/data_siswa/hapus/{id}', 'DataSiswaController@hapus');
Route::get('/data_siswa/edit/{id}', 'DataSiswaController@edit');
Route::post('/data_siswa/update','DataSiswaController@update');


Route::get('/data_kelas', 'DataKelasController@index')->name('data_kelas');
Route::post('/data_kelas/tambah', 'DataKelasController@tambah');
Route::get('/data_kelas/hapus/{id}', 'DataKelasController@hapus');
Route::get('/data_kelas/edit/{id}', 'DataKelasController@edit');
Route::post('/data_kelas/update','DataKelasController@update');

Route::get('/data_orangtua', 'DataOrangtuaController@index')->name('data_orangtua');
Route::post('/data_orangtua/tambah', 'DataOrangtuaController@tambah');
Route::get('/data_orangtua/hapus/{id}', 'DataOrangtuaController@hapus');
Route::get('/data_orangtua/edit/{id}', 'DataOrangtuaController@edit');
Route::post('/data_orangtua/update','DataOrangtuaController@update');


Route::get('/data_jurusan', 'JurusanController@index')->name('data_jurusan');
Route::get('/jurusan/hapus/{id}', 'JurusanController@hapus');
Route::post('/jurusan/tambah', 'JurusanController@tambah');
Route::post('/jurusan/update','JurusanController@update');


Route::get('/laporan', 'LaporanTagihanController@index')->name('laporan');
Route::get('/chat', 'ChatController@index')->name('chat');
Route::get('/saldo', 'SaldoController@index')->name('saldo');
Route::get('/laporan_pemasukan', 'LaporanTagihanController@laporan_pemasukan')->name('laporan_pemasukan');
Route::get('/laporan_rekap', 'LaporanTagihanController@laporan_rekap')->name('laporan_rekap');


Route::get('/pembayaran_rutin', 'PembayaranRutinController@index')->name('pembayaran_rutin');
Route::post('/pembayaran_rutin/tambah', 'PembayaranRutinController@tambah');

Route::get('/pembayaran_sekali', 'PembayaranSekaliController@index')->name('pembayaran_sekali');
Route::get('/pembayaran_siswa_rutin', 'PembayaranRutinController@siswa_rutin')->name('pembayaran_siswa_rutin');
Route::get('/pembayaran_siswa_sekali', 'PembayaranSekaliController@siswa_sekali')->name('pembayaran_siswa_sekali');

