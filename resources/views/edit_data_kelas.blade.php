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

                        <h6 class="card-title" style="margin-bottom: 30px">Edit Data Kelas</h6>

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
                            <form action="{{url('/data_kelas/update')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $kelas->id_kelas }}" >
                                <div class="form-group">
                                    <label for="exampleInputKelas">{{ __('Kelas') }}</label>
                                    <input class="form-control @error('kelas') is-invalid @enderror" type="text" name="kelas" id="kelas" required value="{{ $kelas->nama_kelas }}"> @error('kelas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputKelas">{{ __('Wali Kelas') }}</label>
                                    <input id="wali_kelas" type="text" class="form-control @error('wali_kelas') is-invalid @enderror" name="wali_kelas" value="{{ $kelas->wali_kelas }}" required autocomplete="wali_kelas" autofocus>

                                    @error('wali_kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputKelas">{{ __('Jumlah Murid') }}</label>
                                    <input id="jumlah_murid" type="number" class="form-control @error('jumlah_murid') is-invalid @enderror" name="jumlah_murid" value="{{ $kelas->jumlah_murid }}" required autocomplete="jumlah_murid" autofocus>

                                    @error('jumlah_murid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group float-right">
                                        <button class="btn btn-primary ripple" type="submit" value="Simpan Data">{{ __('Submit') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


