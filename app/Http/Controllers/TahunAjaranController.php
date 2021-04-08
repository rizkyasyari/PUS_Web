<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TahunAjaranController extends Controller
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
        $tahun_ajaran = DB::table('tahun_ajaran')->where('id_sekolah','=', $id)->get();
        return view('tahun_ajaran',['tahun_ajaran'=>$tahun_ajaran]);
    }
    public function tambah(Request $request)
    {
        $id = Auth::user()->id_akses;

        $this -> validate($request, [
            'tahun_ajaran' => 'required',
        ]);// update data books
        DB::table('tahun_ajaran') -> where('id_ta', $request -> id) -> update([
            'tahun_ajaran' => $request->tahun_ajaran,
            'id_sekolah' => $id
        ]);

        // insert data ke table pegawai
//        DB::table('tahun_ajaran')->insert([
//            'tahun_ajaran' => $request->tahun_ajaran,
//            'id_sekolah' => $id
//        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/tahun_ajaran');

    }
    public function hapus($id){
        DB::table('tahun_ajaran')->where('id_ta',$id)->delete();
        return redirect('/tahun_ajaran');
    }


}
