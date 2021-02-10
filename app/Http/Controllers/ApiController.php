<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ApiController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
public function ambil_jurusan($id){
    $data = DB::table('jurusan')
        ->where('id_jurusan',$id)
        ->first();
    echo json_encode(array('hasil'=>$data));
}

public function ambil_users(){
        $data = DB::table('users')
            ->leftJoin('orang_tua','orang_tua.id_orangtua','=','users.id_akses')
            ->get();
        echo json_encode(array('hasil'=>$data));
    }

}
