<?php $__env->startSection('content'); ?>
    <div class="page-content">
        
        
        
        
        
        

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <button type="button" class="btn btn-primary btn-icon-text float-right" style="margin-top: 20px">
                            <i class="btn-icon-prepend" data-feather="credit-card"></i>
                            Bayar Lansung
                        </button>
                        <h6 class="card-title" style="margin-bottom: 30px">Pembayaran Rutin Siswa</h6>

                        
                        <div class="form-group">
                            <label>Pilih Kelas</label>
                            <select class="js-example-basic-single w-100">
                                <option value="TX">7.3</option>
                                <option value="NY">7.2</option>
                                <option value="FL">7.1</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis Pembayaran</label>
                            <select class="js-example-basic-single w-100">
                                <option value="TX">SPP</option>
                                <option value="NY">Orang Tua Asuh</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bulan</label>
                            <select class="js-example-basic-single w-100">
                                <option value="TX">Januari</option>
                                <option value="NY">Februari</option>
                                <option value="FL">Maret</option>
                            </select>
                        </div>
                        <div class="table-bordered" >
                            <table id="dataTableExample" class="table">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Status Bayar</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Tipe Pembayaran</th>
                                    <th>ID Pembayaran</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Muhammad Rizky</td>
                                    <td><h4><span class="badge badge-success">Success</span></h4></td>
                                    <td>02/02/2020</td>
                                    <td>Bank Transfer</td>
                                    <td>1584943591550</td>
                                    <td>-</td>

                                    <td>
                                        <button type="button" class="btn btn-primary btn-icon-text ">
                                            <i class="btn-icon-prepend" data-feather="eye"></i>
                                            Lihat Detail
                                        </button>
                                        <button type="button" class="btn btn-success btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="edit"></i>
                                            Edit Data
                                        </button>




                                    </td>
                                </tr>
                                <tr>
                                    <td>Muhammad Ihsan</td>
                                    <td><h4><span class="badge badge-primary">Beasiswa</span></h4></td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Beasiswa Prestasi</td>

                                    <td>
                                        <button type="button" class="btn btn-primary btn-icon-text ">
                                            <i class="btn-icon-prepend" data-feather="eye"></i>
                                            Lihat Detail
                                        </button>
                                        <button type="button" class="btn btn-success btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="edit"></i>
                                            Edit Data
                                        </button>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Zaki Zikri</td>
                                    <td><h4><span class="badge badge-warning">Belum</span></h4></td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>

                                    <td>
                                        <button type="button" class="btn btn-primary btn-icon-text ">
                                            <i class="btn-icon-prepend" data-feather="eye"></i>
                                            Lihat Detail
                                        </button>
                                        <button type="button" class="btn btn-success btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="edit"></i>
                                            Edit Data
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

<?php echo $__env->make('templates.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.2\htdocs\spus\resources\views/pembayaran_siswa_rutin.blade.php ENDPATH**/ ?>