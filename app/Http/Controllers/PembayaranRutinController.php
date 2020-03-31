<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranRutinController extends Controller
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
        return view('pembayaran_rutin');
    }
    public function siswa_rutin()
    {
        return view('pembayaran_siswa_rutin');
    }
}
