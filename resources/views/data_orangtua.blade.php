@extends('templates.header')

@section('content')
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h4 class="mb-3 mb-md-0">Orang Tua</h4>
            </div>
            <div class="d-flex">
                <button type="button" class="btn ripple btn-primary btn-with-icon" data-toggle="modal" data-target="#exampleModal" style="margin-right: 5px">
                    <i class="fe fe-plus-circle"></i>
                    Tambah Data
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Orang Tua</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="data_orangtua/tambah">
                                            @csrf

                                            <div class="form-group">
                                                <label for="exampleInputKelas">{{ __('Nama Orang Tua') }}</label>
                                                <input id="orang_tua" type="text"
                                                       class="form-control @error('orang_tua') is-invalid @enderror"
                                                       name="orang_tua" value="{{ old('orang_tua') }}" required
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
                                                       name="nik" value="{{ old('nik') }}" required autocomplete="nik"
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
                                                       name="alamat" value="{{ old('alamat') }}" required
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
                                                       name="no_hp" value="{{ old('no_hp') }}" required
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
                                                       name="email" required autocomplete="off">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input  type="password"
                                                       class="form-control"
                                                       name="password" required autocomplete="off">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Submit') }}
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6 class="card-title" style="margin-bottom: 30px">Data Orang Tua</h6>

                        {{--                        <div class="form-group">--}}
                        {{--                            <label class="mt-1">Pilih Jurusan</label>--}}
                        {{--                            <select class="js-example-basic-single w-20">--}}
                        {{--                                @foreach($jurusan as $j)--}}
                        {{--                                <option value="{{$j->id_jurusan}}">{{$j->nama_jurusan}}</option>--}}
                        {{--                                @endforeach--}}
                        {{--                            </select>--}}
                        {{--                            <a class="btn btn-primary" href="#" role="button">Lihat</a>--}}
                        {{--                        </div>--}}

<br>
                        <div class="table-responsive">
                            <table id="dataTableOrtu" class="table display nowrap" >
                                <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Orang Tua</th>
                                    <th>NIK</th>
                                    <th>Nomor HP</th>
                                    <th>E-Mail</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($orang_tua as $o):
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $o->orang_tua?></td>
                                    <td><?= $o->nik?></td>
                                    <td><?= $o->no_hp?></td>
                                    <td><?= $o->email?></td>
                                    <td><?= $o->alamat?></td>
                                    <td class="d-flex justify-content-between">
                                        <a href="{{url('/data_orangtua/edit/'. $o->id_orangtua )}}"  class="btn btn-success btn-icon-text "><i class="fe fe-edit"></i> Edit</a>

                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                                           href="{{url('/data_orangtua/hapus/'. $o->id_orangtua )}}" type="button"
                                           class="btn btn-danger btn-icon-text">
                                            <i class="fe fe-trash-2"></i>
                                            Hapus Data
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                endforeach;
                                ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    <div class="modal fade" id="ModalKelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
    {{--        <div class="modal-dialog" role="document">--}}
    {{--            <div class="modal-content">--}}
    {{--                <div class="modal-header">--}}
    {{--                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Kelas</h5>--}}
    {{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--                        <span aria-hidden="true">&times;</span>--}}
    {{--                    </button>--}}
    {{--                </div>--}}

    {{--                <div class="modal-body">--}}
    {{--                    <form  method="POST" action="{{ url('') }}/data_kelas/update">--}}
    {{--                        @csrf--}}
    {{--                        <div class="form-group">--}}
    {{--                            <label for="exampleInputKelas">{{ __('Kelas') }}</label>--}}
    {{--                            <input id="n-kelas"  type="text" class="form-control" name="nama" >--}}
    {{--                            <input id="id-kelas"  type="hidden" class="form-control" name="id">--}}

    {{--                            @error('kelas')--}}
    {{--                            <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                            @enderror--}}
    {{--                        </div>--}}
    {{--                        <div class="modal-footer">--}}
    {{--                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
    {{--                            <button type="submit" class="btn btn-primary">--}}
    {{--                                {{ __('Submit') }}--}}
    {{--                            </button>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection


