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

<div class="container-fluid " style="margin-top: 10px">
    <!-- Page Header -->
    <div class="row" style="width: 100%" align="center">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 mb-md-0">Selamat Datang</h4>
                    <h3 class="card-title" style="margin-top: 10px">Selamat Bekerja Di Aplikasi Pembayaran Uang Sekolah</h3>
                    <p id="demo"></p>
                    <div id="typewriter"><h3><?php
                        /* This sets the $time variable to the current hour in the 24 hour clock format */
                        $time = date("H");
                        /* Set the $timezone variable to become the current timezone */
                        $timezone = date("Asia/Jakarta");
                        /* If the time is less than 1200 hours, show good morning */
                        if ($time < "12") {
                            echo "Good Morning";
                        } else
                            /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
                            if ($time >= "12" && $time < "17") {
                                echo "Good Afternoon";
                            } else
                                /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
                                if ($time >= "17" && $time < "19") {
                                    echo "Good Evening";
                                } else
                                    /* Finally, show good night if the time is greater than or equal to 1900 hours */
                                    if ($time >= "19") {
                                        echo "Good Night";
                                    }
                            ?></h3></div>
                    <h3><p id="time"></p></h3>
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
