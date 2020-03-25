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
            <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                <div>
                    <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
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
