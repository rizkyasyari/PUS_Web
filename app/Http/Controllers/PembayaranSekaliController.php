<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PembayaranSekaliController extends Controller
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
        $id = Auth::user()->id_akses;
        $pembayaran = DB::table('jenis_pembayaran') ->where('id_sekolah','=', $id)->get();
        return view('pembayaran_sekali', ['jenis_pembayaran'=>$pembayaran]);
    }
    public function siswa_sekali()
    {
        return view('pembayaran_siswa_sekali');
    }
    public function tagihan_sekali()
    {
        $id = Auth::user()->id_akses;
        $pembayaran = DB::table('jenis_pembayaran') ->where('id_sekolah','=', $id)->get();
        return view('tagihan_sekali', ['jenis_pembayaran'=>$pembayaran]);
    }
    public function tambah(Request $request)
    {
        $id = Auth::user()->id_akses;
        // insert data ke table pegawai
        DB::table('jenis_pembayaran')->insert([
            'jenis_pembayaran' => 'Sekali Bayar',
            'nama_pembayaran' => $request->jenis,
            'tanggal_bayar' => $request->periode,
            'jumlah_bayar' => $request->nominal,
            'id_sekolah' => $id
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pembayaran_sekali');

    }
    public function hapus($id){
        DB::table('jenis_pembayaran')->where('id_jenis_pembayaran',$id)->delete();
        return redirect('/pembayaran_sekali');
    }
}
