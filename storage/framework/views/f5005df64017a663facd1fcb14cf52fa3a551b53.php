<?php $__env->startSection('content'); ?>
    <div class="page-content">







        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-danger btn-icon-text float-right">
                            <i class="btn-icon-prepend" data-feather="trash-2"></i>
                            Hapus Data
                        </button>
                        <button type="button" class="btn btn-success btn-icon-text float-right" style="margin-right: 5px">
                            <i class="btn-icon-prepend" data-feather="edit"></i>
                            Edit Data
                        </button>
                        <button type="button" class="btn btn-primary btn-icon-text float-right" style="margin-right: 5px">
                            <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                            Tambah Data
                        </button>
                        <h6 class="card-title" style="margin-bottom: 30px">Data Siswa</h6>


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
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Muhammad Rizky</td>
                                    <td>12345678</td>
                                    <td>7.5</td>
                                    <td>Jl.Gunung Bungsu</td>
                                    <td>Dasrul Fauzi</td>
                                    <td>082386914928</td>
                                </tr>
                                <tr>
                                    <td>Muhammad Ihsan</td>
                                    <td>87654321</td>
                                    <td>8.1</td>
                                    <td>Jl.Ahmad Yani</td>
                                    <td>Rahmad</td>
                                    <td>0811100022222</td>
                                </tr>
                                <tr>
                                    <td>Zaki Zikri</td>
                                    <td>11223344</td>
                                    <td>9.5</td>
                                    <td>Jl.Rasuna Said</td>
                                    <td>Rizal</td>
                                    <td>089595939398</td>
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