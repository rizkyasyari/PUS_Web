<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PenggunaController extends Controller
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
        $user =  DB::table('users')
            ->join('sekolah','sekolah.id_sekolah','=','users.id_akses')
            ->where('status','=','Sekolah')
            ->get();
        return view('pengguna',['user'=>$user]);
    }
    public function hapus($id){
        DB::table('users')->where('id',$id)->delete();
        DB::table('sekolah')->where('id_sekolah',$id)->delete();
        return redirect('/pengguna');
    }
    public function aktif(Request $request)
    {

        // update data pegawai
        DB::table('users')->where('id',$request->id)->update([
            'akun' => 'Aktif',
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pengguna');
    }
    public function nonaktif(Request $request)
    {

        // update data pegawai
        DB::table('users')->where('id',$request->id)->update([
            'akun' => 'Nonaktif',
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pengguna');
    }
}
