@extends('templates.header')

@section('content')
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Pembayaran Rutin</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <button type="button" class="btn btn-primary btn-icon-text float-right"  data-toggle="modal" data-target="#exampleModal" style="margin-right: 5px" >
                            <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                            Tambah Data
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pembayaran Rutin</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form  method="POST" action="{{url('/pembayaran_rutin/tambah/')}}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleModal">{{ __('Jenis Pembayaran') }}</label>
                                                <input id="jenis" type="text" class="form-control @error('jenis') is-invalid @enderror" name="jenis" value="{{ old('jenis') }}" required autocomplete="jenis" autofocus>

                                                @error('jenis')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleModal">{{ __('Nominal') }}</label>
                                                <input id="nominal" type="number" class="form-control @error('nominal') is-invalid @enderror" name="nominal" value="{{ old('nominal') }}" required autocomplete="nominal" autofocus>

                                                @error('nominal')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleModal">{{ __('Tanggal Pembayaran Bulanan (1-31)') }}</label>
                                                <input id="periode" max="31" min="1" type="number" class="form-control @error('periode') is-invalid @enderror" name="periode" value="{{ old('periode') }}" required autocomplete="periode" autofocus>

                                                @error('periode')
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

                        <h6 class="card-title" style="margin-bottom: 30px">Data Pembayaran Rutin</h6>

                        {{--                        <h4 class="card-title">Pilih Kelas</h4>--}}
                        <div class="table-bordered" >
                            <table id="dataTableExample" class="table">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Pembayaran</th>
                                    <th>Nominal</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($jenis_pembayaran as $p):
                                    ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $p->nama_pembayaran ?></td>
                                    <td><?= $p->jumlah_bayar ?></td>
                                    <td><?= $p->periode_pembayaran ?></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="edit"></i>
                                            Edit Data
                                        </button>
                                        <button type="button" class="btn btn-danger btn-icon-text ">
                                            <i class="btn-icon-prepend" data-feather="trash-2"></i>
                                            Hapus Data
                                        </button>
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
