<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'alamat' => ['required', 'string', 'max:255'],
            'nomor_telepon' => ['required', 'string', 'max:255'],
            'npsn' => ['required', 'string', 'max:255'],
//            'id_akses' => ['required', 'string', 'max:255'],
            'tipe_sekolah' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $sekolah = DB::table('sekolah')->insertGetId([
            'nama_sekolah' => $data['name'],
            'email' => $data['email'],
            'nomor_telepon' => $data['nomor_telepon'],
            'alamat' => $data['alamat'],
            'npsn' => $data['npsn'],
            'tipe_sekolah' => $data['tipe_sekolah'],
        ]);
//        dd($sekolah);
//        die();
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'status' => 'Sekolah',
            'password' => Hash::make($data['password']),
            'id_akses' => $sekolah,

        ]);


//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'alamat' => $data['alamat'],
//            'nomor_telepon' => $data['nomor_telepon'],
//            'npsn' => $data['npsn'],
//            'tipe_sekolah' => $data['tipe_sekolah'],
//            'status' => "Sekolah",
//            'password' => Hash::make($data['password']),
//        ]);
    }
}
