@extends('templates.header')

@section('content')
    <div class="container-fluid" style="margin-top: 10px">
        <div class="row" style="width: 100%" align="center">
            <div class="col-12 grid-margin">
    <div class="page-content">
    <div class="profile-page tx-13">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="profile-header">
                    <div class="cover">
                        <div class="gray-shade"></div>
                        <figure>
                            <img src="{{url('landingpages_assets/assets/img/header-bg3.jpg')}}" class="img-fluid" alt="profile cover">
                        </figure>
                        <div class="cover-body d-flex justify-content-between align-items-center">
                            <div>
                                <img class="profile-pic" src="{{ url('img/users/admin.png')}}" style="width: 50%" alt="profile">
                                <span class="profile-name">{{Auth::user()->name}}</span>
                            </div>

                        </div>
                    </div>
                    <div class="header-links">
                        <ul class="links d-flex align-items-center mt-3 mt-md-0">
                            <li class="header-link-item d-flex align-items-center active">
{{--                                <i class="mr-1 icon-md" data-feather="columns"></i>--}}
{{--                                <a class="pt-1px d-none d-md-block" href="#">Timeline</a>--}}
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <h6 class="card-title mb-0">Profil</h6>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 font-weight-bold mb-0 text-uppercase">Nama Sekolah:</label>
                            <p class="text-muted">{{Auth::user()->name}}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 font-weight-bold mb-0 text-uppercase">Email:</label>
                            <p class="text-muted">{{Auth::user()->email}}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 font-weight-bold mb-0 text-uppercase">Joined:</label>
                            <p class="text-muted">
                                @foreach($users as $u)
                                    {{$u->created_at}}
                                @endforeach
                            </p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 font-weight-bold mb-0 text-uppercase">NPSN:</label>
                            <p class="text-muted">
                                @foreach($users as $u)
                                    {{$u->npsn}}
                                @endforeach
                            </p>
                        </div>

                        <div class="mt-3">
                            <label class="tx-11 font-weight-bold mb-0 text-uppercase">Alamat:</label>
                            <p class="text-muted">
                                @foreach($users as $u)
                                    {{$u->alamat}}
                                @endforeach
                            </p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 font-weight-bold mb-0 text-uppercase">Nomer Telepon:</label>
                            <p class="text-muted">
                                @foreach($users as $u)
                                    {{$u->nomor_telepon}}
                                @endforeach
                            </p>
                        </div>
{{--                        <div class="mt-3 d-flex social-links">--}}
{{--                            <a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon github">--}}
{{--                                <i data-feather="github" data-toggle="tooltip" title="github.com/nobleui"></i>--}}
{{--                            </a>--}}
{{--                            <a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon twitter">--}}
{{--                                <i data-feather="twitter" data-toggle="tooltip" title="twitter.com/nobleui"></i>--}}
{{--                            </a>--}}
{{--                            <a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon instagram">--}}
{{--                                <i data-feather="instagram" data-toggle="tooltip" title="instagram.com/nobleui"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-6 middle-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card rounded">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="card-title mb-0">Saldo</h6>
                                    <div class="d-none d-md-block">
                                        <button class="btn btn-success btn-icon-text btn-edit-profile "data-toggle="modal" data-target="#exampleModal">
                                            <i data-feather="edit" class="btn-icon-prepend"></i> Edit Rekening
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div>
                                    <label class="tx-11 font-weight-bold mb-0 text-uppercase">Nama Rekening:</label>
                                    <p class="text-muted">{{Auth::user()->nama_rekening}}</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <label class="tx-11 font-weight-bold mb-0 text-uppercase">Bank:</label>
                                    <p class="text-muted">{{Auth::user()->bank_rekening}}</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <label class="tx-11 font-weight-bold mb-0 text-uppercase">Nomor Rekening:</label>
                                    <p class="text-muted">{{Auth::user()->nomor_rekening}}</p>
                                </div>
                            </div>

                            <div class="card-body">
                                <h4 class="mb-3 mb-md-0">Saldo Anda</h4>
                                <h4><span class="badge badge-success" style="margin-top: 20px">Rp.100.000.000</span></h4>
                                <button type="button" class="btn btn-primary btn-icon-text float-right" style="margin-top: 20px" data-toggle="modal" data-target="#tarikModal">
                                    <i class="btn-icon-prepend" data-feather="credit-card"></i>
                                    Tarik
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="tarikModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tarik</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="forms-sample">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Jumlah Penariakan</label>
                                                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Penarikan">
                                                    </div>
                                                </form>
                                            </div>
                                            <p class="mb-3"h><code>*Proses penarikan akan membutuhkan tiga sampai tujuh hari kerja</code></p>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Bank</h5>
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
                                                        <label for="exampleInputUsername1">Nama Bank</label>
                                                        <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Nama Bank">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Jumlah Nominal</label>
                                                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Nominal">
                                                    </div>
{{--                                                    <div class="form-group">--}}
{{--                                                        <label for="exampleInputPassword1">{{ __('Password') }}</label>--}}
{{--                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}
{{--                                                        @error('password')--}}
{{--                                                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                                        @enderror--}}

{{--                                                    </div>--}}
                                                </form>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- middle wrapper end -->
            <!-- right wrapper start -->
            <div class="d-none d-xl-block col-xl-3 right-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card rounded">
                            <div class="card-body">
                                <h6 class="card-title">Riwayat Transaksi</h6>
                                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                    <div class="d-flex align-items-center hover-pointer">
                                        <img class="img-xs rounded-circle" src="{{url('landingpages_assets/assets/img/atm-machine.png')}}" alt="">
                                        <div class="ml-2">
                                            <p>Rp. 5.000.000</p>
                                            <p class="tx-11 text-muted">01 Januari 2021</p>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon"><span class="badge badge-success">Success</span></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- right wrapper end -->
        </div>
    </div>
    </div>
            </div>
        </div></div>

{{--    <div class="container-fluid" style="margin-top: 10px">--}}
{{--        <div class="row" style="width: 100%" align="center">--}}
{{--            <div class="col-12 grid-margin">--}}
{{--                <div class="card">--}}
{{--                    --}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">--}}
{{--            <div>--}}

{{--            </div>--}}
{{--            <div class="d-flex align-items-center flex-wrap text-nowrap">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
