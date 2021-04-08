@extends('templates.header')

@section('content')
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h4 class="mb-3 mb-md-0">Pembayaran Rutin</h4>
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

{{--                                            <div class="form-group">--}}
{{--                                                <label>Tahun Ajaran</label>--}}
{{--                                                <p><select class="form-control select2" id="tahun_ajaran" name="tahun_ajaran" style="width: 100%">--}}
{{--                                                        @foreach($kelas as $k)--}}
{{--                                                            <option value="{{$k->tahun_ajaran}}">{{$k->tahun_ajaran}}</option>--}}
{{--                                                        @endforeach</select></p>--}}
{{--                                            </div>--}}

                                            <div class="form-group">
                                                <label>Tahun Ajaran</label>
                                                <p><select class="form-control select2" id="tahun_ajaran" name="tahun_ajaran" style="width: 100%">
                                                        @foreach($tahun_ajaran as $j)
                                                            <option value="{{$j->id_ta}}">{{$j->tahun_ajaran}}</option>
                                                        @endforeach</select></p>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleModal">{{ __('Nominal') }}</label>
                                                <input id="nominal" type="number" min="1" class="form-control @error('nominal') is-invalid @enderror" name="nominal" value="{{ old('nominal') }}" required autocomplete="nominal" autofocus>

                                                @error('nominal')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>

{{--                                            <div class="form-group">--}}
{{--                                                <label for="exampleModal">{{ __('Bulan') }}</label>--}}
{{--                                                <select class="js-example-basic-single w-100" id="bulan" name="bulan" style="width: 100%">--}}
{{--                                                    <option data-select2-id="0">Pilih Bulan</option>--}}
{{--                                                    <option value="Juli" data-select2-id="1">Juli</option>--}}
{{--                                                    <option value="Agustus" data-select2-id="2">Agustus</option>--}}
{{--                                                    <option value="September" data-select2-id="3">Florida</option>--}}
{{--                                                    <option value="Oktober" data-select2-id="4">Oktober</option>--}}
{{--                                                    <option value="November" data-select2-id="5">November</option>--}}
{{--                                                    <option value="Desember" data-select2-id="6">Desember</option>--}}
{{--                                                    <option value="Januari" data-select2-id="7">Januari</option>--}}
{{--                                                    <option value="Februari" data-select2-id="8">Februari</option>--}}
{{--                                                    <option value="Maret" data-select2-id="9">Maret</option>--}}
{{--                                                    <option value="April" data-select2-id="10">April</option>--}}
{{--                                                    <option value="Mei" data-select2-id="11">Mei</option>--}}
{{--                                                    <option value="Juni" data-select2-id="12">Juni</option>--}}
{{--                                                </select>--}}
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

                        <h6 class="card-title" style="margin-bottom: 30px">Data Pembayaran Rutin</h6>

                        {{--                        <h4 class="card-title">Pilih Kelas</h4>--}}
                        <div class="table-bordered" >
                            <table id="dataTableExample" class="table">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Pembayaran</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Nominal</th>
{{--                                    <th>Bulan</th>--}}
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($jenis_pembayaran as $p):
                                    ?>
                                @if ($p->jenis_pembayaran=='Rutin')
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $p->nama_pembayaran ?></td>
                                    <td><?= $p->tahun_ajaran ?></td>
                                    <td><?= $p->jumlah_bayar ?></td>
{{--                                    <td><?= $p->tanggal_bayar ?></td>--}}
{{--                                    <td><?= $p->bulan ?></td>--}}
                                    <td style="width: fit-content">
                                        {{--                                            <a href="{{url('/data_kelas/edit/'. $k->id_kelas )}}"  class="btn ripple btn-success btn-with-icon btn-sm "><i class="fe fe-edit"></i> EDIT</a>--}}

                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="{{url('/pembayaran_rutin/hapus/'. $p->id_jenis_pembayaran) }}" type="button" class="btn btn-danger btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="trash-2"></i>
                                            Hapus Data
                                        </a>
                                    </td>
                                </tr>
                                @endif
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
