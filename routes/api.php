<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('jurusan/{id}','ApiController@ambil_jurusan');
Route::get('kelas/{id}','ApiController@ambil_kelas');
Route::get('get_kelas/{kode}','ApiController@ambil_kelas_by_kode');
//Route::get('get_pembayaran/{id}','ApiController@ambil_pembayaran');

Route::get('users','ApiController@ambil_users');


Route::post('login','Api\AuthApiController@login');
Route::post('get-anak','Api\OrangtuaApiController@getAnak');
Route::post('get-tagihan','Api\TagihanApiController@getTagihan');
Route::post('update-tagihan','Api\TagihanApiController@updateTagihan');
Route::post('riwayat-tagihan','Api\TagihanApiController@riwayat');
