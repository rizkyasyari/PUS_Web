<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthApiController extends Controller
{
    //
    public function login(Request $request){
        $user = DB::table('orang_tua')
            ->join('users','users.id_akses','=','orang_tua.id_orangtua')
            ->where('status','=','Orangtua')
            ->where('no_hp','=',$request->input('no_hp'))
            ->first();
        if ($user != null){
            if (Hash::check($request->input('password'),$user->password) == true) {
                $response = $user;
                $response->code = 200;
                $response->message = "Success";
            } else {
                $response['code'] = 400;
                $response['message'] = "Failed";
            }
        } else {
            $response['code'] = 400;
            $response['message'] = "Failed";
        }
        return json_encode($response);

    }
}
