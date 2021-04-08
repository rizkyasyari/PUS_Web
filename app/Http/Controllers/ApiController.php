<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ApiController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
public function ambil_jurusan($id){
    $data = DB::table('jurusan')
        ->where('id_jurusan',$id)
        ->first();
    echo json_encode(array('hasil'=>$data));
}
public function ambil_kelas_by_kode($kode){
//    $id = Auth::user()->id_akses;
    $data = DB::table('kelas')
        ->where('id_kelas',$kode)
//        ->where('kelas.id_sekolah','=', $id)
        ->leftJoin('jurusan','jurusan.id_jurusan','=','kelas.id_jurusan')
        ->leftJoin('tahun_ajaran','tahun_ajaran.id_ta','=','kelas.id_tahun_ajaran')
        ->first();
    echo json_encode(array('hasil'=>$data));
}

public function ambil_users(){
        $data = DB::table('users')
            ->leftJoin('orang_tua','orang_tua.id_orangtua','=','users.id_akses')
            ->get();
        echo json_encode(array('hasil'=>$data));
    }

//    public function ambil_pembayaran($id){
//        $data = DB::table('jenis_pembayaran')
//            ->where('id_jenis_pembayaran',$id)
//            ->first();
//        echo json_encode(array('hasil'=>$data));
//    }

}
