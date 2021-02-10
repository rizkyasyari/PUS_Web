@extends('templates.header')

@section('content')


    <div class="page-content">
        {{--        <nav class="page-breadcrumb">--}}
        {{--            <ol class="breadcrumb">--}}
        {{--                <li class="breadcrumb-item"><a href="#">Tables</a></li>--}}
        {{--                <li class="breadcrumb-item active" aria-current="page">Data Table</li>--}}
        {{--            </ol>--}}
        {{--        </nav>--}}
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Jurusan</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <button type="button" class="btn btn-primary btn-icon-text float-right" data-toggle="modal" data-target="#exampleModal" style="margin-right: 5px">
                            <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                            Tambah Data
                        </button>



                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jurusan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>


                                    <div class="modal-body">
                                        <form  method="POST" action="{{url('/jurusan/tambah/')}}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputJurusan">{{ __('Jurusan') }}</label>
                                                <input id="jurusan" type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" value="{{ old('jurusan') }}" required autocomplete="jurusan" autofocus>

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



                        <h6 class="card-title" style="margin-bottom: 30px">Jurusan yang tersedia</h6>

                        <div class="table-responsive">
                            <table id="" class="table display nowrap" style="height: 450px">
                                <thead>
                                <tr>
                                    <th style="width: 30px">No</th>
                                    <th>Nama</th>
                                    <th style="width: 280px">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($jurusan as $j):
                                        ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $j->nama_jurusan?></td>
                                    <td style="width: fit-content">
                                        <button value="{{ $j->id_jurusan }}" href="hapus_jurusan" type="button" class="btn edit-jurusan btn-success btn-icon-text" data-toggle="modal" data-target="#ModalJurusan">
                                            <i class="btn-icon-prepend" data-feather="edit"></i>
                                            Edit Data
                                        </button>
                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="{{url('/jurusan/hapus/'. $j->id_jurusan) }}" type="button" class="btn btn-danger btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="trash-2"></i>
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


