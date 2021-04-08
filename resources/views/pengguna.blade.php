@extends('templates.header')

@section('content')

    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h4 class="mb-3 mb-md-0">Pengguna</h4>
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



                        <h6 class="card-title" style="margin-bottom: 30px">User sekolah yang tersedia</h6>

                        <div class="table-responsive">
                            <table id="" class="table display nowrap" style="height: 450px">
                                <thead>
                                <tr>
                                    <th style="width: 30px">No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>NPSN</th>
                                    <th>Alamat</th>
                                    <th>Nomer Telepon</th>
                                    <th>Tipe Sekolah</th>
                                    <th>Status</th>
                                    <th style="width: 280px">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($user as $u):
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $u->name?></td>
                                    <td><?= $u->email?></td>
                                    <td><?= $u->npsn?></td>
                                    <td><?= $u->alamat?></td>
                                    <td><?= $u->nomor_telepon?></td>
                                    <td><?= $u->tipe_sekolah?></td>
                                    <td><?= $u->akun?></td>

                                    <td style="width: fit-content">
                                        @if($u->akun=='Nonaktif')
                                        <a onclick="return confirm('Apakah anda yakin ingin mengaktifkan akun ini?')"
                                            href="{{url('/pengguna/aktif/'. $u->id) }}" type="button"
                                           class="btn btn-success btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="check-square"></i>
                                            Aktifkan
                                        </a>
                                        @else
                                            <a onclick="return confirm('Apakah anda yakin ingin menonaktifkan akun ini?')"
                                               href="{{url('/pengguna/nonaktif/'. $u->id) }}" type="button"
                                               class="btn btn-danger btn-icon-text">
                                                <i class="btn-icon-prepend" data-feather="x-square"></i>
                                                Nonaktifkan
                                            </a>
                                        @endif

{{--                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="{{url('/pengguna/hapus/'. $u->id) }}" type="button" class="btn btn-danger btn-icon-text">--}}
{{--                                            <i class="btn-icon-prepend" data-feather="trash-2"></i>--}}
{{--                                            Hapus Data--}}
{{--                                        </a>--}}
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


    <!-- Modal -->
    <div class="modal fade" id="ModalJurusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Jurusan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form  method="POST" action="{{ url('') }}/jurusan/update">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputJurusan">{{ __('Jurusan') }}</label>
                            <input id="n-jurusan"  type="text" class="form-control" name="nama" >
                            <input id="id-jurusan"  type="hidden" class="form-control" name="id">

                            @error('jurusan')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
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
@endsection


