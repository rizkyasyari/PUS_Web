@extends('templates.header')

@section('content')
    {{--<div class="container">--}}
    {{--    <div class="row justify-content-center">--}}
    {{--        <div class="col-md-8">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">Dashboard</div>--}}

    {{--                <div class="card-body">--}}
    {{--                    @if (session('status'))--}}
    {{--                        <div class="alert alert-success" role="alert">--}}
    {{--                            {{ session('status') }}--}}
    {{--                        </div>--}}
    {{--                    @endif--}}

    {{--                    You are logged in!--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}

    <div class="page-content">
        <div class="row" style="width: 100%" align="center">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3 mb-md-0">Saldo Anda</h4>
                        <h4><span class="badge badge-success" style="margin-top: 20px">Rp.100.000.0000</span></h4></td>
                        <button type="button" class="btn btn-primary btn-icon-text float-right" style="margin-top: 20px" data-toggle="modal" data-target="#exampleModal">
                            <i class="btn-icon-prepend" data-feather="credit-card"></i>
                            Tarik
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Transfer Bank</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                                <form class="forms-sample">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Nama Akun</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nama Akun">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputUsername1">Nomor Rekening</label>
                                                        <input type="number" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Nomor Rekening">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Bank</label>
                                                        <select class="js-example-basic-single w-auto" style="width: 450px">
                                                            <option value="NY">BCA</option>
                                                            <option value="FL">BRI</option>
                                                            <option value="FL">BNI</option>
                                                            <option value="FL">Mandiri</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Jumlah Nominal</label>
                                                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Nominal">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">{{ __('Password') }}</label>
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror

                                                    </div>
                                                </form>
                                            </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Collect Cashout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>

            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                {{--                    <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex" id="dashboardDate">--}}
                {{--                        <span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>--}}
                {{--                        <input type="text" class="form-control">--}}
                {{--                    </div>--}}
                {{--                    <button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">--}}
                {{--                        <i class="btn-icon-prepend" data-feather="download"></i>--}}
                {{--                        Import--}}
                {{--                    </button>--}}
                {{--                    <button type="button" class="btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0">--}}
                {{--                        <i class="btn-icon-prepend" data-feather="printer"></i>--}}
                {{--                        Print--}}
                {{--                    </button>--}}
                {{--                    <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">--}}
                {{--                        <i class="btn-icon-prepend" data-feather="download-cloud"></i>--}}
                {{--                        Download Report--}}
                {{--                    </button>--}}
            </div>
        </div>
    </div>

@endsection
