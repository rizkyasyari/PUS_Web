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
Route::get('/pembayaran_rutin/hapus/{id}', 'PembayaranRutinController@hapus');

Route::get('/pembayaran_sekali', 'PembayaranSekaliController@index')->name('pembayaran_sekali');
Route::post('/pembayaran_sekali/tambah', 'PembayaranSekaliController@tambah');
Route::get('/pembayaran_sekali/hapus/{id}', 'PembayaranSekaliController@hapus');

Route::get('/pembayaran_siswa_rutin', 'PembayaranRutinController@siswa_rutin')->name('pembayaran_siswa_rutin');
Route::post('/pembayaran_siswa_rutin/tambah', 'PembayaranRutinController@siswa_rutin_tambah');
Route::get('/pembayaran_siswa_sekali', 'PembayaranSekaliController@siswa_sekali')->name('pembayaran_siswa_sekali');

Route::get('/tagihan_rutin', 'PembayaranRutinController@tagihan_rutin')->name('tagihan_rutin');
Route::post('/tagihan_rutin/tambah', 'PembayaranRutinController@tambah_tagihan');
Route::get('/tagihan_rutin/hapus/{id}', 'PembayaranRutinController@hapus_tagihan');
Route::get('/tagihan_sekali', 'PembayaranSekaliController@tagihan_sekali')->name('tagihan_sekali');


Route::get('/pengguna', 'PenggunaController@index')->name('pengguna');
Route::get('/pengguna/hapus/{id}', 'PenggunaController@hapus');
Route::get('/pengguna/aktif/{id}', 'PenggunaController@aktif');
Route::get('/pengguna/nonaktif/{id}', 'PenggunaController@nonaktif');

Route::get('/tahun_ajaran', 'TahunAjaranController@index')->name('tahun_ajaran');
Route::post('/tahun_ajaran/tambah', 'TahunAjaranController@tambah');
Route::get('/tahun_ajaran/hapus/{id}', 'TahunAjaranController@hapus');

