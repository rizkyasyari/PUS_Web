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

                        <h6 class="card-title" style="margin-bottom: 30px">Edit Data Siswa</h6>

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
                                <input type="hidden" name="id" value="{{ $nama_siswa->id_siswa }}" >
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <p><select class="js-example-basic-single" id="id_jurusan" name="id_jurusan" style="width: 100%">
                                            @foreach($jurusan as $j)
                                                <option value="{{$j->id_jurusan}}">{{$j->nama_jurusan}}</option>
                                            @endforeach</select></p>
                                </div>

                                <div class="form-group">
                                    <label>Kelas</label>
                                    <p><select class="js-example-basic-single" id="id_kelas" name="id_kelas" style="width: 100%">
                                            @foreach($kelas as $k)
                                                <option value="{{$k->id_kelas}}">{{$k->nama_kelas}}</option>
                                            @endforeach</select></p>
                                </div>

                                <div class="form-group">
                                    <label>Orang Tua</label>
                                    <p><select class="js-example-basic-single" id="id_orangtua" name="id_orangtua" style="width:100%">
                                            @foreach($orang_tua as $o)
                                                <option value="{{$o->id_orangtua}}">{{$o->orang_tua}}</option>
                                            @endforeach</select></p>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputKelas">{{ __('Nama Siswa') }}</label>
                                    <input id="nama_siswa" type="text" class="form-control @error('nama_siswa') is-invalid @enderror" name="nama_siswa" value="{{$nama_siswa->nama_siswa}}" required autocomplete="nama_siswa" autofocus>

                                    @error('nama_siswa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputKelas">{{ __('NISN') }}</label>
                                    <input id="nisn" type="number" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{$nama_siswa->nisn}}" required autocomplete="nisn" autofocus>

                                    @error('nisn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>



                                <div class="form-group">
                                    <label for="exampleInputKelas">{{ __('Tanggal Lahir') }}</label>
                                    <input id="tgl_lahir" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{$nama_siswa->tgl_lahir}}" required autocomplete="tgl_lahir" autofocus>

                                    @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputKelas">{{ __('Tahun Masuk') }}</label>
                                    <input id="tahun_masuk" type="date" class="form-control @error('tahun_masuk') is-invalid @enderror" name="tahun_masuk" value="{{$nama_siswa->tahun_masuk}}" required autocomplete="tahun_masuk" autofocus>

                                    @error('tahun_masuk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


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


