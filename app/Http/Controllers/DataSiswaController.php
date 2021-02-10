<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataSiswaController extends Controller
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
        $kelas = DB::table('kelas')->get();
        $nama_siswa = DB::table('siswa')
            ->join('kelas','siswa.id_kelas','=','kelas.id_kelas')
            ->join('orang_tua','siswa.id_orangtua','=','orang_tua.id_orangtua')
            ->get();
        $orang_tua = DB::table('orang_tua')->get();
        return view('data_siswa',['nama_siswa'=>$nama_siswa, 'jurusan'=>$jurusan, 'kelas'=>$kelas, 'orang_tua'=>$orang_tua]);
    }
    public function tambah(Request $request)
    {
        $id = Auth::user()->id_akses;
//        var_dump("ok");exit();
        // insert data ke table pegawai
        DB::table('siswa')->insert([
            'nama_siswa' => $request->nama_siswa,
            'nisn' => $request->nisn,
            'tgl_lahir' => $request->tgl_lahir,
            'tahun_masuk' => $request->tahun_masuk,
            'id_jurusan' => $request->id_jurusan,
            'id_kelas' => $request->id_kelas,
            'id_orangtua' => $request->id_orangtua,
            'id_sekolah' => $id
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/data_siswa');

    }

    public function edit($id)
    {
// mengambil data books berdasarkan id yang dipilih
        $jurusan = DB::table('jurusan')->get();
        $kelas = DB::table('kelas')->get();
        $siswa = DB::table('siswa')
            ->join('kelas','siswa.id_kelas','=','kelas.id_kelas')
            ->join('orang_tua','siswa.id_orangtua','=','orang_tua.id_orangtua')
            ->get();
        $orang_tua = DB::table('orang_tua')->get();
        $nama_siswa = DB::table('siswa') ->where('id_siswa',$id)->first();
// passing data books yang didapat ke view edit.blade.php
        return view('/edit_data_siswa', ['nama_siswa'=>$nama_siswa, 'jurusan'=>$jurusan, 'kelas'=>$kelas, 'orang_tua'=>$orang_tua, 'siswa'=>$siswa]);
    }

    public function update(Request $request)
    {
//        $ok = array(
//            'nama_kelas' => $request->kelas,
//            'wali_kelas' => $request->wali_kelas,
//            'jumlah_murid' => $request->jumlah_murid
//        );
        DB::table('siswa')->where('id_siswa',$request->id)->update([
            'nama_siswa' => $request->nama_siswa,
            'nisn' => $request->nisn,
            'tgl_lahir' => $request->tgl_lahir,
            'tahun_masuk' => $request->tahun_masuk,
            'id_jurusan' => $request->id_jurusan,
            'id_kelas' => $request->id_kelas,
            'id_orangtua' => $request->id_orangtua,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/data_siswa');
    }

    public function hapus($id){
        DB::table('siswa')->where('id_siswa',$id)->delete();
//        DB::table('orang_tua')->where('id_siswa',$id)->delete();
        return redirect('/data_siswa');
    }
}
