@extends('templates.header')

@section('content')
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h4 class="mb-3 mb-md-0">Pembayaran Rutin</h4>
            </div>

        </div>
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">


                        <h6 class="card-title" style="margin-bottom: 30px">Pembayaran Rutin Siswa</h6>

                        {{--                        <h4 class="card-title">Pilih Kelas</h4>--}}

                        <div class="table-bordered" >
                            <table id="dataTableExample" class="table">
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

                                        <td style="width: fit-content">
                                            <button type="button" class="btn btn-success btn-icon-text"  data-toggle="modal" data-target="#exampleModal" style="margin-right: 5px" >
                                                <i class="btn-icon-prepend" data-feather="credit-card"></i>
                                                Bayar
                                            </button>
                                        @if($t->status_bayar!='Belum')
                                                <a href="{{url('/data_kelas/lihat/'. $t->id_pembayaran )}}"  class="btn ripple btn-primary btn-icon-prepend "><i class="fe fe-eye"></i> Lihat</a>
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
                    <form  method="POST" action="{{url('/pembayaran_siswa_rutin/tambah/')}}">
                        @csrf
                        <div class="form-group">
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
{{--                        --}}
{{--                        <div class="form-group">--}}
{{--                            <label>Tahun Ajaran</label>--}}
{{--                            <p><select class="form-control select2" id="tahun_ajaran" name="tahun_ajaran" style="width: 100%">--}}
{{--                                    @foreach($tahun_ajaran as $j)--}}
{{--                                        <option value="{{$j->id_ta}}">{{$j->tahun_ajaran}}</option>--}}
{{--                                    @endforeach</select></p>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label for="exampleModal">{{ __('Nominal') }}</label>--}}
{{--                            <input id="nominal" type="number" min="1" class="form-control @error('nominal') is-invalid @enderror" name="nominal" value="{{ old('nominal') }}" required autocomplete="nominal" autofocus>--}}

{{--                            @error('nominal')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}


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

    </div>


    @endsection
