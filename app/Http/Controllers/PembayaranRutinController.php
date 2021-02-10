<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PembayaranRutinController extends Controller
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
        $pembayaran = DB::table('jenis_pembayaran')->get();
        return view('pembayaran_rutin', ['jenis_pembayaran'=>$pembayaran]);
    }
    public function siswa_rutin()
    {
        return view('pembayaran_siswa_rutin');
    }
    public function tambah(Request $request)
    {
        $id = Auth::user()->id_akses;
        // insert data ke table pegawai
        DB::table('jenis_pembayaran')->insert([
            'jenis_pembayaran' => 'Rutin',
            'nama_pembayaran' => $request->jenis,
            'periode_pembayaran' => $request->periode,
            'jumlah_bayar' => $request->nominal,
            'id_sekolah' => $id
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pembayaran_rutin');

    }
}
