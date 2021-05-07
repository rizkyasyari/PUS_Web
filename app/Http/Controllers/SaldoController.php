<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SaldoController extends Controller
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
        $data['users'] = DB::table('users') ->where('id_sekolah','=', $id)
            ->join('sekolah','sekolah.id_sekolah','=','users.id_akses')
            ->get();
        $data['riwayat'] = DB::table('pembayaran')
            ->join('tagihan','tagihan.id_tagihan','=','pembayaran.id_tagihan')
            ->join('siswa','siswa.id_siswa','=','tagihan.id_siswa')
            ->join('jenis_pembayaran','tagihan.id_jenis_pembayaran','=','jenis_pembayaran.id_jenis_pembayaran')
            ->where('siswa.id_sekolah','=',$id)
            ->where('status_bayar','=','Sukses')
            ->whereNotNull('order_id')
            ->get();
        $data['rekening'] = DB::table('sekolah')
            ->where('id_sekolah','=',$id)
            ->first();

        $data['penarikan'] = DB::table('penarikan')
            ->where('penarikan_sekolah_id','=',$id)
            ->get();
        $penarikan = DB::table('penarikan')
            ->where('penarikan_sekolah_id','=',$id)
            ->where('penarikan_status','=','Setuju')
            ->get();

        $saldo = 0;
        foreach ($data['riwayat'] as $key=>$value) {
            $saldo+= $value->jumlah_bayar;
        }

        foreach ($penarikan as $key=>$value) {
            $saldo-= $value->penarikan_jumlah;
        }
        DB::table('sekolah')
            ->where('id_sekolah','=',$id)
            ->update([
                'saldo_sekolah' => $saldo,
            ]);

        return view('saldo',$data);
    }

    public function editRekening(Request $request,$idSekolah){

        DB::table('sekolah')
            ->where('id_sekolah','=',$idSekolah)
            ->update([
                'nama_rekening' => $request->input('nama_akun'),
                'bank_rekening' => $request->input('nama_bank'),
                'nomor_rekening' => $request->input('nomor_rekening')
            ]);
        return redirect('saldo');
    }

    public function tarik(Request $request){
        $id = Auth::user()->id_akses;
        $jumlahPenarikan = $request->input('jumlah');
        $sekolah = DB::table('sekolah')
            ->where('id_sekolah','=',$id)
            ->first();
        if ($jumlahPenarikan <= $sekolah->saldo_sekolah) {
            DB::table('penarikan')
                ->insert([
                    'penarikan_sekolah_id' => $id,
                    'penarikan_jumlah' => $jumlahPenarikan,
                ]);
            return redirect('saldo');
        }
        return redirect('saldo');
    }

    public function semuaPenarikan(){
        $data['penarikan'] = DB::table('penarikan')
            ->join('sekolah','sekolah.id_sekolah','=','penarikan.penarikan_sekolah_id')
            ->get();
        return view('penarikan',$data);
    }

    public function gantiStatus($id,$status){
        DB::table('penarikan')
            ->where('penarikan_id','=',$id)
            ->update([
                'penarikan_status' => $status,
            ]);
        return redirect('penarikan');
    }
}
