@extends('templates.header')

@section('content')

    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h4 class="mb-3 mb-md-0">INVOICE</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container-fluid d-flex justify-content-between">
                            <div class="col-lg-3 pl-0">
                                <a href="#" class="noble-ui-logo d-block mt-3">PUS<span>App</span></a>

                                <p class="mt-1 mb-1"><b>
{{--                                        Nama Sekolah:--}}
                                        @foreach($pembayaran as $p)
                                            {{$p->nama_sekolah}}
                                        @endforeach</b></p>
{{--                                Alamat:--}}
                                @foreach($pembayaran as $p)
                                        {{$p->alamat}}
                                    @endforeach
                                    <br>
{{--                                Email:--}}
                                @foreach($pembayaran as $p)
                                    {{$p->email}}
                                @endforeach
                                <br>
{{--                                Nomer Telepon:--}}
                                @foreach($pembayaran as $p)
                                    {{$p->nomor_telepon}}
                                @endforeach
                                <h5 class="mt-5 mb-2 text-muted">Invoice to :</h5>
                                <p> @foreach($pembayaran as $p)
                                        {{$p->orang_tua}}
                                    @endforeach<br>
                                    @foreach($pembayaran as $p)
                                        {{$p->no_hp}}
                                    @endforeach
                                </p>
                            </div>

                            <div class="col-lg-3 pr-0">
                                <h4 class="font-weight-medium text-uppercase text-right mt-4 mb-2">invoice</h4>
                                <h6 class="text-right mb-5 pb-4"># INV- @foreach($pembayaran as $p)
                                        {{$p->order_id}}
                                    @endforeach</h6>
                                <p class="text-right mb-1">Pembayaran</p>
                                <h4 class="text-right font-weight-normal">Rp.  @foreach($pembayaran as $p)
                                        {{$p->jumlah_bayar}}
                                    @endforeach</h4>
                                <h6 class="mb-0 mt-3 text-right font-weight-normal mb-2"><span class="text-muted">Tanggal Tagihan :</span>  @foreach($pembayaran as $p)
                                        {{$p->tanggal_tagihan}}
                                    @endforeach</h6>
                                <h6 class="text-right font-weight-normal"><span class="text-muted">Tanggal Bayar :</span>  @foreach($pembayaran as $p)
{{--<<<<<<< HEAD--}}
{{--                                        {{$p->tanggal_pembayaran}}--}}
{{--=======--}}
                                        {{date('d-m-Y', strtotime($p->tanggal_pembayaran))}}
{{-->>>>>>> jihad--}}
                                    @endforeach</h6>
                            </div>
                        </div>
                        <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                            <div class="table-responsive w-100">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Jenis Pembayaran</th>
                                        <th>Nama Siswa</th>
                                        <th class="text-right">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="text-right">
                                        <td class="text-left">1</td>
                                        <td class="text-left">
                                            @foreach($pembayaran as $p)
                                                {{$p->nama_pembayaran}}
                                            @endforeach</td>
                                        <td class="text-left">
                                            @foreach($pembayaran as $p)
                                                {{$p->nama_siswa}}
                                            @endforeach</td>

                                        <td>Rp.  @foreach($pembayaran as $p)
                                                {{$p->jumlah_bayar}}
                                            @endforeach</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container-fluid mt-5 w-100">
                            <div class="row">
                                <div class="col-md-6 ml-auto">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td>Metode Pembayaran</td>
                                                <td class="text-bold-800 text-right">@foreach($pembayaran as $p)
                                                        {{$p->tipe_pembayaran}}
                                                    @endforeach</td>
                                            </tr>
                                            <tr class="bg-light">
                                                <td class="text-bold-800">Pembayaran</td>
                                                <td class="text-bold-800 text-right">Rp.  @foreach($pembayaran as $p)
                                                        {{$p->jumlah_bayar}}
                                                    @endforeach</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid w-100">
                             <a href="#" class="btn btn-outline-primary float-right mt-4"><i data-feather="printer" class="mr-2 icon-md"></i>Print</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
