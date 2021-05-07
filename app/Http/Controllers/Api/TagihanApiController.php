<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagihanApiController extends Controller
{
    public function getTagihan(Request $request){
        $tagihan = DB::table('tagihan')
            ->join('pembayaran','pembayaran.id_tagihan','=','tagihan.id_tagihan')
            ->join('jenis_pembayaran','jenis_pembayaran.id_jenis_pembayaran','=','tagihan.id_jenis_pembayaran')
            ->where('id_siswa','=',$request->input('id_siswa'))
            ->where('status_bayar','=',$request->input('status_bayar'))
            ->where('jenis_pembayaran','=',$request->input('jenis_pembayaran'))
            ->get();
        if ($tagihan != null){
            $response = $tagihan;
        } else {
            $response = "invalid";
        }
        return json_encode($response);
    }

    public function updateTagihan(Request $request){
        $idTagihan = $request->input('id_tagihan');
        if ($idTagihan != null){
            DB::table('pembayaran')
                ->where('id_tagihan','=',$idTagihan)
                ->update([
                    'status_bayar' => $request->input('status_bayar'),
                    'tipe_pembayaran' => 'By System',
                    'tanggal_pembayaran' => $request->input('tanggal_bayar'),
                    'order_id' => $request->input('order_id')
                ]);
            $response['code'] = 200;
            $response['message'] = 'Success';
        } else {
            $response['code'] = 400;
            $response['message'] = "Failed";
        }
        return json_encode($response);
    }

    public function riwayat(Request $request){
        $tagihan = DB::table('tagihan')
            ->join('pembayaran','pembayaran.id_tagihan','=','tagihan.id_tagihan')
            ->join('jenis_pembayaran','jenis_pembayaran.id_jenis_pembayaran','=','tagihan.id_jenis_pembayaran')
            ->join('siswa','siswa.id_siswa','=','tagihan.id_siswa')
            ->where('id_orangtua','=',$request->input('id_orangtua'))
            ->where('status_bayar','!=','Belum')
            ->get();
        if ($tagihan != null){
            $response = $tagihan;
        } else {
            $response = "invalid";
        }
        return json_encode($response);
    }

    public function total(Request $request){
        $tagihan = DB::table('tagihan')
            ->join('pembayaran','pembayaran.id_tagihan','=','tagihan.id_tagihan')
            ->join('jenis_pembayaran','jenis_pembayaran.id_jenis_pembayaran','=','tagihan.id_jenis_pembayaran')
            ->join('siswa','siswa.id_siswa','=','tagihan.id_siswa')
            ->where('id_orangtua','=',$request->input('id_orangtua'))
            ->where('status_bayar','=','Belum')
            ->where('jenis_pembayaran','=',$request->input('jenis_pembayaran'))
            ->get();
        if ($tagihan != null){
            $totalTagihan = 0;
            foreach ($tagihan as $key=>$value) {
                $totalTagihan+=$value->jumlah_bayar;
            }
            $response['total_tagihan'] = $totalTagihan;
        } else {
            $response = "invalid";
        }
        return json_encode($response);
    }
}
