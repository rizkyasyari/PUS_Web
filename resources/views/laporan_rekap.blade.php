@extends('templates.header')

@section('content')
    <div class="page-content">
        {{--        <nav class="page-breadcrumb">--}}
        {{--            <ol class="breadcrumb">--}}
        {{--                <li class="breadcrumb-item"><a href="#">Tables</a></li>--}}
        {{--                <li class="breadcrumb-item active" aria-current="page">Data Table</li>--}}
        {{--            </ol>--}}
        {{--        </nav>--}}

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <button type="button" class="btn btn-primary btn-icon-text float-right" style="margin-top: 20px">
                            <i class="btn-icon-prepend" data-feather="printer"></i>
                            Print
                        </button>
                        <h6 class="card-title" style="margin-bottom: 30px">Laporan Pemasukkan</h6>

                        {{--                        <h4 class="card-title">Pilih Kelas</h4>--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Pilih Kelas</label>--}}
{{--                            <select class="js-example-basic-single w-100">--}}
{{--                                <option value="TX">7.3</option>--}}
{{--                                <option value="NY">7.2</option>--}}
{{--                                <option value="FL">7.1</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
                        {{--                        <div class="form-group">--}}
                        {{--                            <label>Jenis Pembayaran</label>--}}
                        {{--                            <select class="js-example-basic-single w-100">--}}
                        {{--                                <option value="TX">SPP</option>--}}
                        {{--                                <option value="NY">Orang Tua Asuh</option>--}}
                        {{--                            </select>--}}
                        {{--                        </div>--}}
                        <div class="form-group">
                            <label>Bulan</label>
                            <select class="js-example-basic-single w-100">
                                <option value="TX">Januari</option>
                                <option value="NY">Februari</option>
                                <option value="FL">Maret</option>
                            </select>
                        </div>
                        <div class="table-bordered" >
                            <table id="dataTableExample" class="table">
                                <thead>
                                <tr>
                                    <th>Kelas</th>
                                    <th>SPP</th>
                                    <th>Orang Tua Asuh</th>
                                    <th>Buku</th>
                                    <th>Study Banding</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>7.1</td>
                                    <td>100.000</td>
                                    <td>1.500.000</td>
                                    <td>100.000</td>
                                    <td>300.000</td>
                                    <td>2.000.000</td>
                                    </tr>
                                <tr>
                                    <td>7.2</td>
                                    <td>100.000</td>
                                    <td>1.500.000</td>
                                    <td>100.000</td>
                                    <td>300.000</td>
                                    <td>2.000.000</td>
                                </tr>
                                <tr>
                                    <td>7.3</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>Jumlah</td>
                                    <td>200.000</td>
                                    <td>3.000.000</td>
                                    <td>200.000</td>
                                    <td>600.000</td>
                                    <td>4.000.000</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
