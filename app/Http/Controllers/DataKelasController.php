<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataKelasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jurusan = DB::table('jurusan')->get();
        $nama_kelas = DB::table('kelas')
            ->join('jurusan','kelas.id_jurusan','=','jurusan.id_jurusan')
            ->get();
        return view('data_kelas',['kelas'=>$nama_kelas, 'jurusan'=>$jurusan]);
    }

    public function tambah(Request $request)
    {

        $id = Auth::user()->id_akses;
//        var_dump("ok");exit();
        // insert data ke table pegawai
        DB::table('kelas')->insert([
            'nama_kelas' => $request->kelas,
            'wali_kelas' => $request->wali_kelas,
            'jumlah_murid' => $request->jumlah_murid,
            'id_jurusan' => $request->id_jurusan,
            'id_sekolah' => $id
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/data_kelas');

    }
    public function edit($id)
    {
// mengambil data books berdasarkan id yang dipilih
        $kelas = DB::table('kelas')->where('id_kelas',$id)->first();
// passing data books yang didapat ke view edit.blade.php
        return view('/edit_data_kelas', ['kelas' => $kelas]);
    }


    public function update(Request $request)
    {
        $this -> validate($request, [
            'kelas' => 'required',
            'wali_kelas' => 'required',
            'jumlah_murid'=> 'required'
        ]);// update data books
//        // update data pegawai
//        $ok = array(
//            'nama_kelas' => $request->kelas,
//            'wali_kelas' => $request->wali_kelas,
//            'jumlah_murid' => $request->jumlah_murid
//        );

        DB::table('kelas')->where('id_kelas',$request->id)->update([
            'nama_kelas' => $request->kelas,
            'wali_kelas' => $request->wali_kelas,
            'jumlah_murid' => $request->jumlah_murid
        ]);
//        var_dump($ok);exit();
        // alihkan halaman ke halaman pegawai
        return redirect('/data_kelas');
    }
    public function hapus($id){
        DB::table('kelas')->where('id_kelas',$id)->delete();
        return redirect('/data_kelas');
    }

}
