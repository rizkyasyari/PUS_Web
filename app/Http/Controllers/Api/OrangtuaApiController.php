<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OrangtuaApiController extends Controller
{
    public function getAnak(Request $request){
        $siswa = DB::table('siswa')
            ->where('id_orangtua','=',$request->input('id_orangtua'))
            ->get();
        if ($siswa != null){
            $response = $siswa;
        } else {
            $response = "invalid";
        }
        return json_encode($response);
    }
}
