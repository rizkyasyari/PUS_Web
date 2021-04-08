<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use function GuzzleHttp\_current_time;

class DataOrangtuaController extends Controller
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
        $orang_tua = DB::table('orang_tua')
            ->where('id_sekolah','=', $id)->get();
        return view('data_orangtua',['orang_tua'=>$orang_tua]);
    }
    public function tambah(Request $request)
    {
        $idSekolah = Auth::user()->id_akses;
        $orang_tua = DB::table('orang_tua')->insertGetId([
                'orang_tua' => $request->orang_tua,
                'id_sekolah' => Auth::user()->id_akses,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'nik' => $request->nik,
            ]
        );
        $user = DB::table('users')->insert([
                'name' => $request->orang_tua,
                'email' => $request->email,
                'status' => 'Orangtua',
                'password' => Hash::make($request->password),
                'id_akses' => $orang_tua,
                'akun' => 'Aktif',
            ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/data_orangtua');

    }
    public function edit($id)
    {
// mengambil data books berdasarkan id yang dipilih
        $orang_tua = DB::table('orang_tua')->where('id_orangtua',$id)->first();
// passing data books yang didapat ke view edit.blade.php
        return view('/edit_data_orangtua', ['orang_tua' => $orang_tua]);
    }

    public function update(Request $request)
    {
        $orang_tua = DB::table('orang_tua')->where('id_orangtua',$request->id)->update([
                'orang_tua' => $request->orang_tua,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'nik' => $request->nik,
            ]
        );
        $user = DB::table('users')->where('id_akses',$request->id)->update([
            'name' => $request->orang_tua,
            'email' => $request->email,
        ]);
//        var_dump($ok);exit();
        // alihkan halaman ke halaman pegawai
        return redirect('/data_orangtua');
    }

    public function hapus($id){
        DB::table('orang_tua')->where('id_orangtua',$id)->delete();
        DB::table('users')->where('id_akses',$id)->delete();
        return redirect('/data_orangtua');
    }
}
