<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanTagihanController extends Controller
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
        return view('laporan');
    }
    public function laporan_pemasukan()
    {
        return view('laporan_pemasukan');
    }
    public function laporan_rekap()
    {
        return view('laporan_rekap');
    }
}
