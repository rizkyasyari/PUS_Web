@extends('templates.header')

@section('content')
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h4 class="mb-3 mb-md-0">Tagihan</h4>
            </div>
            <button type="button" class="btn btn-primary btn-icon-text float-right"  data-toggle="modal" data-target="#exampleModal" style="margin-right: 5px" >
                <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                Tambah Data
            </button>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

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
                                        <form  method="POST" action="{{url('/tagihan_sekali/tambah/')}}">
                                            @csrf
                                            {{--                                            <input type="hidden" name="id" value="{{ $kelas->id_kelas }}" >--}}

                                            <div class="form-group">
                                                <label>Jenis Pembayaran</label>
                                                <p><select class="form-contrweol select2" id="pembayaran" name="pembayaran" style="width: 100%">
                                                        @foreach($jenis_pembayaran as $p)
                                                            <option value="{{$p->id_jenis_pembayaran}}">{{$p->nama_pembayaran}}</option>
                                                        @endforeach</select></p>
                                            </div>

                                            <div class="form-group">
                                                <label>Kode Kelas</label>
                                                <p><select class="form-control select2" id="nama_kelas" name="kode_kelas" style="width: 100%">
                                                        @foreach($kelas as $k)
                                                            <option value="{{$k->id_kelas}}">{{$k->kode_kelas}}</option>
                                                        @endforeach</select></p>
                                            </div>
                                            {{--                                            <div class="form-group">--}}
                                            {{--                                                <label>Tahun Ajaran</label>--}}
                                            {{--                                                <p><select class="form-control select2" id="tahun_ajaran" name="tahun_ajaran" style="width: 100%">--}}
                                            {{--                                                        @foreach($tahun_ajaran as $j)--}}
                                            {{--                                                            <option value="{{$j->id_ta}}">{{$j->tahun_ajaran}}</option>--}}
                                            {{--                                                        @endforeach</select></p>--}}
                                            {{--                                            </div>--}}

{{--                                            <div class="form-group">--}}
{{--                                                <label for="exampleModal">{{ __('Tanggal Tagihan') }}</label>--}}
{{--                                                <input id="tanggal_tagihan" type="date" class="form-control @error('tanggal_tagihan') is-invalid @enderror" name="tanggal_tagihan" value="{{ old('tanggal_tagihan') }}" required autocomplete="tanggal_tagihan" autofocus>--}}

{{--                                                @error('tanggal_tagihan')--}}
{{--                                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}

                                            <div class="form-group">
                                                <label for="exampleModal">{{ __('Waktu Pembayaran') }}</label>
                                                <input id="tanggal_pembayaran" type="date" class="form-control @error('tanggal_pembayaran') is-invalid @enderror" name="tanggal_pembayaran" value="{{ old('tanggal_pembayaran') }}" required autocomplete="tanggal_pembayaran" autofocus>

                                                @error('tanggal_pembayaran')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleModal">{{ __('Batas Pembayaran') }}</label>
                                                <input id="batas_pembayaran" type="date" class="form-control @error('batas_pembayaran') is-invalid @enderror" name="batas_pembayaran" value="{{ old('batas_pembayaran') }}" required autocomplete="batas_pembayaran" autofocus>

                                                @error('batas_pembayaran')
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

                        <h6 class="card-title" style="margin-bottom: 30px">Tagihan Sekali Bayar</h6>

                        {{--                        <h4 class="card-title">Pilih Kelas</h4>--}}
                        <div class="table-responsive" >
                            <table id="dataTableOrtu" class="table display nowrap" >

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kelas</th>
                                    <th>Orang Tua</th>
                                    <th>Siswa</th>
                                    <th>Jenis Pembayaran</th>
                                    <th>Jumlah Pembayaran</th>
                                    <th>Tanggal Tagihan</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Batas Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tagihan as $t)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$t->nama_kelas}}</td>
                                        <td>{{$t->orang_tua}}</td>
                                        <td>{{$t->nama_siswa}}</td>
                                        <td>{{$t->nama_pembayaran}}</td>
                                        <td>{{$t->jumlah_bayar}}</td>
                                        <td>{{$t->tanggal_tagihan}}</td>
                                        <td>{{$t->tanggal_pembayaran}}</td>
                                        <td>{{$t->batas_akhir_pembayaran}}</td>
                                        <td style="width: fit-content">
                                            {{--                                            <a href="{{url('/data_kelas/edit/'. $k->id_kelas )}}"  class="btn ripple btn-success btn-with-icon btn-sm "><i class="fe fe-edit"></i> EDIT</a>--}}

                                            <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="{{url('/tagihan_rutin/hapus/'. $t->id_tagihan) }}" type="button" class="btn btn-danger btn-icon-text">
                                                <i class="btn-icon-prepend" data-feather="trash-2"></i>
                                                Hapus Data
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
