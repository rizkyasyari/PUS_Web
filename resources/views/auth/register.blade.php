{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

    <!DOCTYPE html>
<html>

<!-- Mirrored from www.nobleui.com/laravel/template/light/auth/register by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Mar 2020 13:36:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Register Aplikasi Pembayaran Uang Sekolah</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="_token" content="P8Y7YrIUH6LSkPBag5pjb6bCyyqhdrNqDsAQHdMW">

    <link rel="icon" type="image/x-icon" href="landingpages_assets/assets/img/navbar-logo.png" />

    <!-- plugin css -->
    <link media="all" type="text/css" rel="stylesheet" href="fonts/feather-font/css/iconfont.css">
    <link media="all" type="text/css" rel="stylesheet" href="plugins/perfect-scrollbar/perfect-scrollbar.css">
    <!-- end plugin css -->


    <!-- common css -->
    <link media="all" type="text/css" rel="stylesheet" href="css/app.css">
    <!-- end common css -->

</head>
<body data-base-url="https://www.nobleui.com/laravel/template/light">

<script src="js/spinner.js"></script>

<div class="main-wrapper" id="app">
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">

            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-6 mx-auto">
                    <div class="card">

                        <div class="row">
                            <div class="col-md-4 pr-md-0">
                                <div class="auth-left-wrapper" style="background-image: url(images/carousel/img6.jpg)">

                                </div>
                            </div>
                            <div class="col-md-8 pl-md-0">
                                <div class="auth-form-wrapper px-4 py-5">
                                    <a href="#" class="noble-ui-logo d-block mb-2">PUS<span>App</span></a>
                                    <h5 class="text-muted font-weight-normal mb-4">Buat akun sekolah.</h5>

                                    <form class="forms-sample"method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">{{ __('Nama Sekolah') }}</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('E-Mail Sekolah') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputNomorTelepon">{{ __('Nomor Telepon') }}</label>
                                            <input id="nomor_telepon" type="number" class="form-control @error('nomor_telepon') is-invalid @enderror" name="nomor_telepon" value="{{ old('nomor_telepon') }}" required autocomplete="nomor_telepon">

                                            @error('nomor_telepon')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputNPSN">{{ __('NPSN') }}</label>
                                            <input id="npsn" type="number" class="form-control @error('npsn') is-invalid @enderror" name="npsn" value="{{ old('npsn') }}" required autocomplete="npsn">

                                            @error('npsn')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputAlamat">{{ __('Alamat') }}</label>
                                            <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat">

                                            @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputTipeSekolah">{{ __('Tipe Sekolah') }}</label>
                                            <input id="tipe_sekolah" type="text" class="form-control @error('tipe_sekolah') is-invalid @enderror" name="tipe_sekolah" value="{{ old('tipe_sekolah') }}" required autocomplete="alamat">

                                            @error('tipe_sekolah')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">{{ __('Password') }}</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="password-confirm">{{ __('Konfirmasi Password') }}</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>

{{--                                        <div class="form-check form-check-flat form-check-primary">--}}
{{--                                            <label class="form-check-label">--}}
{{--                                                <input type="checkbox" class="form-check-input">--}}
{{--                                                Remember me--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
{{--                                            <button type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">--}}
{{--                                                <i class="btn-icon-prepend" data-feather="twitter"></i>--}}
{{--                                                Sign up with twitter--}}
{{--                                            </button>--}}
                                        </div>
                                        <a href="login" class="d-block mt-3 text-muted">Sudah mendaftar? Sign in</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- base js -->
<script src="js/app.js"></script>
<script src="plugins/feather-icons/feather.min.js"></script>
<!-- end base js -->

<!-- plugin js -->
<!-- end plugin js -->

<!-- common js -->
<script src="js/template.js"></script>
<!-- end common js -->

</body>

<!-- Mirrored from www.nobleui.com/laravel/template/light/auth/register by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Mar 2020 13:36:05 GMT -->
</html>
{{--@endsection--}}
