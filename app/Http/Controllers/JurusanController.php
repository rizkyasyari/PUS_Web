<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class JurusanController extends Controller
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
    //get table jurusan dari db
    $jurusan = DB::table('jurusan')->where('id_sekolah','=', $id)->get();
return view('data_jurusan',['jurusan'=>$jurusan]);
}


public function tambah(Request $request)
    {
        $id = Auth::user()->id_akses;
//        var_dump("ok");exit();
        // insert data ke table pegawai
        DB::table('jurusan')->insert([
            'nama_jurusan' => $request->jurusan,
            'id_sekolah' => $id
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/data_jurusan');

    }

//    public function edit($id)
//    {
//        // mengambil data pegawai berdasarkan id yang dipilih
//        $jurusan = DB::table('jurusan')->where('id_jurusan',$id)->get();
//        // passing data pegawai yang didapat ke view edit.blade.php
//        return view('edit',['jurusan' => $jurusan]);
//
//    }
    public function update(Request $request)
    {

        // update data pegawai
        DB::table('jurusan')->where('id_jurusan',$request->id)->update([
            'nama_jurusan' => $request->nama,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/data_jurusan');
    }

public function hapus($id){
    DB::table('jurusan')->where('id_jurusan',$id)->delete();
    return redirect('/data_jurusan');
}

}
