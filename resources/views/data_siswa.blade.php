@extends('templates.header')

@section('content')
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h4 class="mb-3 mb-md-0">Siswa</h4>
            </div>
            <div class="d-flex">
                <button type="button" class="btn ripple btn-primary btn-with-icon" data-toggle="modal"
                        data-target="#exampleModal" style="margin-right: 5px">
                    <i class="fe fe-plus-circle"></i>
                    Tambah Data
                </button>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">


                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{url('/data_siswa/tambah/')}}">
                                            @csrf


                                            <div class="form-group">
                                                <label>Kode Kelas</label>
                                                <p><select class="form-control" id="kode_kelas" name="id_kelas"
                                                           style="width: 100%">
                                                        <option>Pilih Kelas</option>
                                                        @foreach($kelas as $k)
                                                            <option
                                                                value="{{$k->id_kelas}}">{{$k->kode_kelas}}</option>
                                                        @endforeach</select></p>
                                            </div>

                                            <div class="form-group">
                                                <label>Tahun Ajaran</label>
                                                <input type="text" readonly id="tahun-ajaran" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Jurusan</label>
                                                <input type="text" readonly id="jurusan" class="form-control">
                                            </div>
                                            <input type="text" id="id_jurusan" name="id_jurusan" hidden>
                                            <input type="text" id="id_tahun_ajaran" name="id_tahun_ajaran" hidden>

{{--                                            <div class="form-group">--}}
{{--                                                <label>Jurusan</label>--}}
{{--                                                <p><select class="form-control select2" id="id_jurusan" name="id_jurusan" style="width: 100%">--}}
{{--                                                        @foreach($jurusan as $j)--}}
{{--                                                            <option value="{{$j->id_jurusan}}">{{$j->nama_jurusan}}</option>--}}
{{--                                                        @endforeach</select></p>--}}
{{--                                            </div>--}}


                                            <div class="form-group">
                                                <label>Orang Tua</label>
                                                <p><select class="form-control select2" id="id_orangtua"
                                                           name="id_orangtua" style="width:100%">
                                                        @foreach($orang_tua as $o)
                                                            <option
                                                                value="{{$o->id_orangtua}}">{{$o->orang_tua}}</option>
                                                        @endforeach</select></p>
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputKelas">{{ __('Nama Siswa') }}</label>
                                                <input id="nama_siswa" type="text"
                                                       class="form-control @error('nama_siswa') is-invalid @enderror"
                                                       name="nama_siswa" value="{{ old('nama_siswa') }}" required
                                                       autocomplete="nama_siswa" autofocus>

                                                @error('nama_siswa')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputKelas">{{ __('NISN') }}</label>
                                                <input id="nisn" type="number"
                                                       class="form-control @error('nisn') is-invalid @enderror"
                                                       name="nisn" value="{{ old('nisn') }}" required
                                                       autocomplete="nisn" autofocus>

                                                @error('nisn')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputKelas">{{ __('Tanggal Lahir') }}</label>
                                                <input id="tgl_lahir" type="date"
                                                       class="form-control @error('tgl_lahir') is-invalid @enderror"
                                                       name="tgl_lahir" value="{{ old('tgl_lahir') }}" required
                                                       autocomplete="tgl_lahir" autofocus>

                                                @error('tgl_lahir')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputKelas">{{ __('Tahun Masuk') }}</label>
                                                <input id="tahun_masuk" type="date"
                                                       class="form-control @error('tahun_masuk') is-invalid @enderror"
                                                       name="tahun_masuk" value="{{ old('tahun_masuk') }}" required
                                                       autocomplete="tahun_masuk" autofocus>

                                                @error('tahun_masuk')
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

                        <h6 class="card-title" style="margin-bottom: 30px">Data Siswa</h6>

                        {{--                        <h4 class="card-title">Pilih Kelas</h4>--}}
                        {{--                        <div class="form-group">--}}
                        {{--                            <label class="mt-1">Pilih Jurusan</label>--}}
                        {{--                            <select class="js-example-basic-single w-20">--}}
                        {{--                                @foreach($jurusan as $j)--}}
                        {{--                                    <option value="{{$j->id_jurusan}}">{{$j->nama_jurusan}}</option>--}}
                        {{--                                @endforeach--}}
                        {{--                            </select>--}}

                        {{--                        </div>--}}
                        {{--                        <div class="form-group">--}}
                        {{--                            <label class="mt-1 mr-3">Pilih Kelas</label>--}}
                        {{--                            <select class="js-example-basic-single w-20 ">--}}
                        {{--                                @foreach($kelas as $k)--}}
                        {{--                                    <option value="{{$k->id_kelas}}">{{$k->nama_kelas}}</option>--}}
                        {{--                                @endforeach--}}
                        {{--                            </select>--}}
                        {{--                            <a class="btn btn-primary" href="#" role="button">Lihat</a>--}}
                        {{--                        </div>--}}


                        <div class="table-responsive">
                            <table id="dataTableSiswa" class="table display nowrap">
                                <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NISN</th>
                                    <th>Alamat</th>
                                    <th>Orang Tua</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Nomor Hp</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Jurusan</th>
                                    <th>Kelas</th>
                                    <th>Kode Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($nama_siswa as $j):
                                //                                ($kelas as $k):
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $j->nama_siswa?></td>
                                    <td><?= $j->nisn?></td>
                                    <td><?= $j->alamat?></td>
                                    <td><?= $j->orang_tua?></td>
                                    <td><?= $j->tgl_lahir?></td>
                                    <td><?= $j->no_hp?></td>
                                    <td><?= $j->tahun_ajaran?></td>
                                    <td><?= $j->nama_jurusan?></td>
                                    <td><?= $j->nama_kelas?></td>
                                    <td><?= $j->kode_kelas?></td>

                                    <td class="d-flex justify-content-between">
                                        <a href="{{url('/data_siswa/edit/'. $j->id_siswa )}}"
                                           class="btn btn-success btn-icon-text  "><i class="fe fe-edit"></i> Edit</a>

                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                                           href="{{url('/data_siswa/hapus/'. $j->id_siswa) }}" type="button"
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
@endsection

