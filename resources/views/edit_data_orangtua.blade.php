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

                        <h6 class="card-title" style="margin-bottom: 30px">Edit Data Orang Tua</h6>

                        {{--                        <div class="form-group">--}}
                        {{--                            <label class="mt-1">Pilih Jurusan</label>--}}
                        {{--                            <select class="js-example-basic-single w-20">--}}
                        {{--                                @foreach($jurusan as $j)--}}
                        {{--                                <option value="{{$j->id_jurusan}}">{{$j->nama_jurusan}}</option>--}}
                        {{--                                @endforeach--}}
                        {{--                            </select>--}}
                        {{--                            <a class="btn btn-primary" href="#" role="button">Lihat</a>--}}
                        {{--                        </div>--}}



                        <div class="modal-body">
                            <form action="{{url('/data_orangtua/update')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $orang_tua->id_orangtua }}" >
                                <div class="form-group">
                                    <label for="exampleInputKelas">{{ __('Nama Orang Tua') }}</label>
                                    <input id="orang_tua" type="text"
                                           class="form-control @error('orang_tua') is-invalid @enderror"
                                           name="orang_tua" value="{{ $orang_tua->orang_tua }}" required
                                           autocomplete="orang_tua" autofocus>

                                    @error('orang_tua')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputKelas">{{ __('NIK') }}</label>
                                    <input id="nik" type="text"
                                           class="form-control @error('nik') is-invalid @enderror"
                                           name="nik" value="{{ $orang_tua->nik }}" required autocomplete="nik"
                                           autofocus>

                                    @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputKelas">{{ __('Alamat') }}</label>
                                    <input id="alamat" type="text"
                                           class="form-control @error('alamat') is-invalid @enderror"
                                           name="alamat" value="{{ $orang_tua->alamat }}" required
                                           autocomplete="alamat" autofocus>

                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputKelas">{{ __('Nomor Hape') }}</label>
                                    <input id="no_hp" type="text"
                                           class="form-control @error('no_hp') is-invalid @enderror"
                                           name="no_hp" value="{{ $orang_tua->no_hp }}" required
                                           autocomplete="no_hp" autofocus>

                                    @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input id="email" type="email"
                                           class="form-control"
                                           name="email"
                                           value="{{ $orang_tua->email }}"
                                           required autocomplete="off">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputEmail1">Password</label>--}}
{{--                                    <input  type="password"--}}
{{--                                            class="form-control"--}}
{{--                                            name="password"--}}
{{--                                            value="{{ $orang_tua->password }}"--}}
{{--                                            required autocomplete="off">--}}
{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


