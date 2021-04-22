@extends('templates.header')

@section('content')
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h4 class="mb-3 mb-md-0">Pembayaran Sekali</h4>
            </div>
{{--            <div class="d-flex">--}}
{{--                <button type="button" class="btn ripple btn-primary btn-with-icon" data-toggle="modal" data-target="#exampleModal" style="margin-right: 5px">--}}
{{--                    <i class="fe fe-credit-card"></i>--}}
{{--                    Bayar Lansung--}}
{{--                </button>--}}
{{--            </div>--}}
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title" style="margin-bottom: 30px">Pembayaran Sekali Siswa</h6>

{{--                        --}}{{--                        <h4 class="card-title">Pilih Kelas</h4>--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Pilih Kelas</label>--}}
{{--                            <select class="js-example-basic-single w-100">--}}
{{--                                <option value="TX">7.3</option>--}}
{{--                                <option value="NY">7.2</option>--}}
{{--                                <option value="FL">7.1</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Jenis Pembayaran</label>--}}
{{--                            <select class="js-example-basic-single w-100">--}}
{{--                                <option value="TX">Buku</option>--}}
{{--                                <option value="TX">Baju</option>--}}
{{--                                <option value="TX">Study Banding</option>--}}
{{--                                <option value="TX">Perpisahan</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Bulan</label>--}}
{{--                            <select class="js-example-basic-single w-100">--}}
{{--                                <option value="TX">Januari</option>--}}
{{--                                <option value="NY">Februari</option>--}}
{{--                                <option value="FL">Maret</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
                        <div class="table-responsive" >
                            <table id="dataTableOrtu" class="table display nowrap" >
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Status Bayar</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Tipe Pembayaran</th>
                                    <th>Kode Pembayaran</th>
                                    <th>Jumlah Bayar</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($pembayaran as $t):
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td>{{$t->nama_siswa}}</td>
                                    <td>{{$t->status_bayar}}</td>
                                    @if($t->tanggal_pembayaran!=null)
                                        <td>{{$t->tanggal_pembayaran}}</td>
                                    @else
                                        <td>-</td>
                                    @endif
                                    @if($t->tipe_pembayaran!=null)
                                        <td>{{$t->tipe_pembayaran}}</td>
                                    @else
                                        <td>-</td>
                                    @endif

                                    @if($t->order_id!=null)
                                        <td>{{$t->order_id}}</td>
                                    @else
                                        <td>-</td>
                                    @endif
                                    @if($t->order_id!=null)
                                        <td>{{$t->jumlah_bayar}}</td>
                                    @else
                                        <td>-</td>
                                    @endif
                                    @if($t->keterangan!=null)
                                        <td>{{$t->keterangan}}</td>
                                    @else
                                        <td>-</td>
                                    @endif


                                    <td style="width: fit-content ">
                                        @if($t->status_bayar!='Sukses')
                                            <button type="button" value="{{$t->id_pembayaran}}" class="btn btn-success btn-icon-text bayar-tagihan"  data-toggle="modal" data-target="#exampleModal" style="margin-right: 5px" >
                                                <i class="btn-icon-prepend" data-feather="credit-card"></i>
                                                Bayar
                                            </button>
                                        @else

                                            <a href="{{url('/pembayaran_siswa_sekali/lihat/'. $t->id_pembayaran )}}"  class="btn ripple btn-primary btn-icon-prepend "><i class="fe fe-eye"></i> Lihat</a>
                                        @endif

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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pembayaran Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  method="POST" action="{{url('/pembayaran_siswa_sekali/tambah/')}}">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" id="id-pembayaran" name="id_pembayaran" required>
                            <label for="exampleModal">{{ __('Kode Pembayaran') }}</label>
                            <input id="kode" type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" value="{{ old('kode') }}" required autocomplete="kode" autofocus>

                            @error('kode')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleModal">{{ __('Keterangan') }}</label>
                            <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" required autocomplete="keterangan" autofocus>

                            @error('keterangan')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
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

@endsection
