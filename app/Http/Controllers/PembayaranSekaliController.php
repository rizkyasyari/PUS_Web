<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranSekaliController extends Controller
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
        return view('pembayaran_sekali');
    }
    public function siswa_sekali()
    {
        return view('pembayaran_siswa_sekali');
    }
}
