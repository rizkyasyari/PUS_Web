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
        $kelas = DB::table('kelas')->where('id_sekolah','=', $id)->get();
        $pembayaran = DB::table('jenis_pembayaran') ->where('jenis_pembayaran.id_sekolah','=', $id)
            ->join('tahun_ajaran','jenis_pembayaran.id_tahun_ajaran','=','tahun_ajaran.id_ta')
            ->get();
        $tahun_ajaran =  DB::table('tahun_ajaran')->where('id_sekolah','=', $id)->get();

        return view('pembayaran_sekali', ['jenis_pembayaran'=>$pembayaran,'kelas'=>$kelas,'tahun_ajaran'=>$tahun_ajaran]);
    }
    public function siswa_sekali()
    {
        $id = Auth::user()->id_akses;
//        $data['tagihan'] = DB::table('tagihan')
//            ->where('siswa.id_sekolah','=', $id)
//            ->join('siswa','siswa.id_siswa','=','tagihan.id_siswa')
//            ->join('jenis_pembayaran','jenis_pembayaran.id_jenis_pembayaran','=','tagihan.id_jenis_pembayaran')
//            ->join('kelas','kelas.id_kelas','=','siswa.id_kelas')
//            ->join('orang_tua','orang_tua.id_orangtua','=','siswa.id_orangtua')
//            ->get();
        $data['pembayaran'] = DB::table('pembayaran')
            ->join('tagihan','pembayaran.id_tagihan','=','tagihan.id_tagihan')
            ->where('siswa.id_sekolah','=', $id)
            ->join('siswa','siswa.id_siswa','=','tagihan.id_siswa')
            ->join('jenis_pembayaran','jenis_pembayaran.id_jenis_pembayaran','=','tagihan.id_jenis_pembayaran')
            ->where('jenis_pembayaran','=','Sekali Bayar')
            ->get();
        return view('pembayaran_siswa_sekali', $data);
    }
    public function siswa_sekali_tambah(Request $request)
    {
//        $id = Auth::user()->id_akses;
        // insert data ke table pegawai

        $timestamp = date("Y-m-d H:i:s");
        DB::table('pembayaran')->where('id_pembayaran',$request->id_pembayaran)->update([
            'order_id' => $request->kode,
            'status_bayar' => 'Sukses',
            'tanggal_pembayaran' => $timestamp,
            'tipe_pembayaran' => 'Manual',
            'keterangan' => $request->keterangan,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pembayaran_siswa_sekali');

    }
    public function tagihan_sekali()
    {
        $id = Auth::user()->id_akses;
        $data['pembayaran']= DB::table('jenis_pembayaran') ->where('id_sekolah','=', $id)->get();
        $data['jenis_pembayaran'] = DB::table('jenis_pembayaran') ->where('id_sekolah','=', $id)
            ->where('jenis_pembayaran','=','Sekali Bayar')->get();
        $data['kelas'] = DB::table('kelas')->where('id_sekolah','=', $id)->get();
        $data['tagihan'] = DB::table('tagihan')
            ->where('siswa.id_sekolah','=', $id)
            ->join('siswa','siswa.id_siswa','=','tagihan.id_siswa')
            ->join('jenis_pembayaran','jenis_pembayaran.id_jenis_pembayaran','=','tagihan.id_jenis_pembayaran')
            ->where('jenis_pembayaran','=','Sekali Bayar')
            ->join('kelas','kelas.id_kelas','=','siswa.id_kelas')
            ->join('orang_tua','orang_tua.id_orangtua','=','siswa.id_orangtua')
            ->get();
         return view('tagihan_sekali', $data);
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
    public function tambah_tagihan(Request $request)
    {
        $siswa= DB::table('siswa')->where('id_kelas',$request->kode_kelas)->get();
//        $bayar= DB::table('pembayaran')
//            ->join('tagihan','tagihan.id_tagihan','=','pembayaran.id_pembayaran')->get();

        foreach ($siswa as $s){
            $simpan = DB::table('tagihan')->insertGetId([
                'id_siswa' => $s->id_siswa,
//                'tanggal_tagihan' => $request->tanggal_tagihan,
                'tanggal_pembayaran' => $request->tanggal_pembayaran,
                'batas_akhir_pembayaran' => $request->batas_pembayaran,
                'id_jenis_pembayaran' => $request->pembayaran,
            ]);
            $pembayaran = DB::table('pembayaran')->insert([
                'id_tagihan' => $simpan
            ]);
        }
        // alihkan halaman ke halaman pegawai
        return redirect('/tagihan_sekali');

    }
    public function lihat($id)
    {
// mengambil data books berdasarkan id yang dipilih
        $data['pembayaran'] = DB::table('pembayaran')
            ->join('tagihan','pembayaran.id_tagihan','=','tagihan.id_tagihan')
            ->join('siswa','siswa.id_siswa','=','tagihan.id_siswa')
            ->join('orang_tua','orang_tua.id_orangtua','=','siswa.id_orangtua')
            ->join('sekolah','sekolah.id_sekolah','=','siswa.id_sekolah')
            ->join('jenis_pembayaran','jenis_pembayaran.id_jenis_pembayaran','=','tagihan.id_jenis_pembayaran')
            ->where('jenis_pembayaran','=','Sekali Bayar')
            ->where('id_pembayaran','=',$id)
            ->get();
// passing data books yang didapat ke view edit.blade.php
        return view('/lihat_pembayaran', $data);
    }
}
