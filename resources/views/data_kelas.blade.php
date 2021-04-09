@extends('templates.header')

@section('content')
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h4 class="mb-3 mb-md-0">Kelas</h4>
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
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kelas</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form  method="POST" action="data_kelas/tambah">
                                            @csrf
                                            <div class="form-group">
                                                <label>Jurusan</label>
                                                <p><select class="form-control select2" id="id_jurusan" name="id_jurusan" style="width: 100%">
                                                        @foreach($jurusan as $j)
                                                        <option value="{{$j->id_jurusan}}">{{$j->nama_jurusan}}</option>
                                                        @endforeach</select></p>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputKelas">{{ __('Kelas') }}</label>
                                                <input id="kelas" type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ old('kelas') }}" required autocomplete="kelas" autofocus>

                                                @error('kelas')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label>Tahun Ajaran</label>
                                                <p><select class="form-control select2" id="tahun_ajaran" name="tahun_ajaran" style="width: 100%">
                                                        @foreach($tahun_ajaran as $j)
                                                            <option value="{{$j->id_ta}}">{{$j->tahun_ajaran}}</option>
                                                        @endforeach</select></p>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputKelas">{{ __('Kode Kelas') }}</label>
                                                <input id="kode_kelas" type="text" class="form-control @error('kode_kelas') is-invalid @enderror" name="kode_kelas" value="{{ old('kode_kelas') }}" required autocomplete="kode_kelas" autofocus>

                                                @error('kode_kelas')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputKelas">{{ __('Wali Kelas') }}</label>
                                                <input id="wali_kelas" type="text" class="form-control @error('wali_kelas') is-invalid @enderror" name="wali_kelas" value="{{ old('wali_kelas') }}" required autocomplete="wali_kelas" autofocus>

                                                @error('wali_kelas')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputKelas">{{ __('Jumlah Murid') }}</label>
                                                <input id="jumlah_murid" type="number" class="form-control @error('jumlah_murid') is-invalid @enderror" name="jumlah_murid" value="{{ old('jumlah_murid') }}" required autocomplete="jumlah_murid" autofocus>

                                                @error('jumlah_murid')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>


{{--                                            <div class="form-group">--}}
{{--                                                <label for="exampleInputKelas">{{ __('Tahun Ajaran') }}</label>--}}
{{--                                                <input id="tahun_ajaran" type="text" class="form-control @error('tahun_ajaran') is-invalid @enderror" name="tahun_ajaran" value="{{ old('tahun_ajaran') }}" required autocomplete="tahun_ajaran" autofocus>--}}

{{--                                                @error('tahun_ajaran')--}}
{{--                                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Submit') }}
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6 class="card-title" style="margin-bottom: 30px">Data Kelas</h6>

{{--                        <div class="form-group">--}}
{{--                            <label class="mt-1">Pilih Jurusan</label>--}}
{{--                            <select class="js-example-basic-single w-20">--}}
{{--                                @foreach($jurusan as $j)--}}
{{--                                <option value="{{$j->id_jurusan}}">{{$j->nama_jurusan}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                            <a class="btn btn-primary" href="#" role="button">Lihat</a>--}}
{{--                        </div>--}}



                        <div>
                            <div class="table-responsive">
                            <table id="dataTableJurusan" class="table display nowrap">
                                <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Jurusan</th>
                                    <th>Kelas</th>
                                    <th>Kode Kelas</th>
                                    <th>Wali Kelas</th>
                                    <th>Jumlah Murid</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($kelas as $k):
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $k->nama_jurusan?></td>
                                    <td><?= $k->nama_kelas?></td>
                                    <td><?= $k->kode_kelas?></td>
                                    <td><?= $k->wali_kelas?></td>
                                    <td><?= $k->jumlah_murid?></td>
                                    <td><?= $k->tahun_ajaran?></td>
                                    <td class="d-flex justify-content-between">
{{--                                        <button value="{{ $k->id_kelas }}" type="button" class="btn edit-jurusan btn-success btn-icon-text" data-toggle="modal" data-target="#ModalKelas">--}}
{{--                                            <i class="btn-icon-prepend" data-feather="edit"></i>--}}
{{--                                            Edit Data--}}
{{--                                        </button>--}}

                                        <a href="{{url('/data_kelas/edit/'. $k->id_kelas )}}"  class="btn btn-success btn-icon-text " type="button"><i class="fe fe-edit"></i> Edit</a>

                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="{{url('/data_kelas/hapus/'. $k->id_kelas )}}" type="button" class="btn btn-danger btn-icon-text">
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


