<?php $__env->startSection('content'); ?>
    <div class="page-content">







        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <button type="button" class="btn btn-primary btn-icon-text float-right" style="margin-top: 20px">
                            <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                            Tambah Data
                        </button>
                        <h6 class="card-title" style="margin-bottom: 30px">Data Siswa</h6>


                        <div class="form-group">
                            <label>Pilih Kelas</label>
                            <select class="js-example-basic-single w-100">
                                <option value="TX">7.3</option>
                                <option value="NY">7.2</option>
                                <option value="FL">7.1</option>
                            </select>
                        </div>
                        <div class="table-bordered" >
                            <table id="dataTableExample" class="table">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NISN</th>
                                    <th>Kelas</th>
                                    <th>Alamat</th>
                                    <th>Orang Tua</th>
                                    <th>Nomor Hp</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Muhammad Rizky</td>
                                    <td>12345678</td>
                                    <td>7.3</td>
                                    <td>Jl.Gunung Bungsu</td>
                                    <td>Dasrul Fauzi</td>
                                    <td>082386914928</td>
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
                                <tr>
                                    <td>Muhammad Ihsan</td>
                                    <td>87654321</td>
                                    <td>7.3</td>
                                    <td>Jl.Ahmad Yani</td>
                                    <td>Rahmad</td>
                                    <td>0811100022222</td>
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
                                <tr>
                                    <td>Zaki Zikri</td>
                                    <td>11223344</td>
                                    <td>7.3</td>
                                    <td>Jl.Rasuna Said</td>
                                    <td>Rizal</td>
                                    <td>089595939398</td>
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
























































































































































                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('templates.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.2\htdocs\spus\resources\views/data_siswa.blade.php ENDPATH**/ ?>