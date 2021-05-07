@extends('templates.header')

@section('content')

    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h4 class="mb-3 mb-md-0">Kelola Penarikan</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                    {{--                        <button type="button" class="btn btn-primary btn-icon-text float-right" data-toggle="modal" data-target="#exampleModal" style="margin-right: 5px">--}}
                    {{--                            <i class="btn-icon-prepend" data-feather="plus-circle"></i>--}}
                    {{--                            Tambah Data--}}
                    {{--                        </button>--}}



                    <!-- Modal -->
                        {{--                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                        {{--                            <div class="modal-dialog" role="document">--}}
                        {{--                                <div class="modal-content">--}}
                        {{--                                    <div class="modal-header">--}}
                        {{--                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jurusan</h5>--}}
                        {{--                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                        {{--                                            <span aria-hidden="true">&times;</span>--}}
                        {{--                                        </button>--}}

                        {{--                                    </div>--}}


                        {{--                                    <div class="modal-body">--}}
                        {{--                                        <form  method="POST" action="{{url('/jurusan/tambah/')}}">--}}
                        {{--                                            @csrf--}}
                        {{--                                            <div class="form-group">--}}
                        {{--                                                <label for="exampleInputJurusan">{{ __('Jurusan') }}</label>--}}
                        {{--                                                <input id="jurusan" type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" value="{{ old('jurusan') }}" required autocomplete="jurusan" autofocus>--}}

                        {{--                                                @error('jurusan')--}}
                        {{--                                                <span class="invalid-feedback" role="alert">--}}
                        {{--                                        <strong>{{ $message }}</strong>--}}
                        {{--                                    </span>--}}
                        {{--                                                @enderror--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="modal-footer">--}}
                        {{--                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                        {{--                                                <button type="submit" class="btn btn-primary">--}}
                        {{--                                                    {{ __('Submit') }}--}}
                        {{--                                                </button>--}}
                        {{--                                            </div>--}}
                        {{--                                        </form>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}



                        <h6 class="card-title" style="margin-bottom: 30px">Data Penarikan</h6>

                        <div class="table-responsive">
                            <table id="" class="table display nowrap">
                                <thead>
                                <tr>
                                    <th style="width: 30px">No</th>
                                    <th>Nama Sekolah</th>
                                    <th>Jumlah Penarikan</th>
                                    <th style="width: 280px">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($penarikan as $value)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$value->nama_sekolah}}</td>
                                        <td>{{$value->penarikan_jumlah}}</td>
                                        <td>
                                            @if($value->penarikan_status == 'Tunggu')
                                                <span class="btn btn-sm btn-warning">Tunggu</span><br><br>
                                                <a href="{{url('ganti-status/'.$value->penarikan_id.'/Setuju')}}" class="btn btn-sm btn-success" title="Setujui" onclick="return confirm('Setujui?')"><i class="fa fa-xs fa-check-circle"></i></a>
                                                <a href="{{url('ganti-status/'.$value->penarikan_id.'/Tolak')}}" class="btn btn-sm btn-danger" title="Tolak" onclick="return confirm('Tolak?')"><i class="fa fa-xs fa-times-circle"></i></a>
                                            @elseif($value->penarikan_status == 'Setuju')
                                                <span class="btn btn-sm btn-success">Setuju</span>
                                            @elseif($value->penarikan_status == 'Tolak')
                                                <span class="btn btn-sm btn-danger">Ditolak</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


