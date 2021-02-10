<?php $__env->startSection('content'); ?>
    <div class="page-content">
        
        
        
        
        
        

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <button type="button" class="btn btn-primary btn-icon-text float-right" style="margin-top: 20px">
                            <i class="btn-icon-prepend" data-feather="printer"></i>
                            Print
                        </button>
                        <h6 class="card-title" style="margin-bottom: 30px">Laporan Tagihan</h6>

                        
                        <div class="form-group">
                            <label>Pilih Kelas</label>
                            <select class="js-example-basic-single w-100">
                                <option value="TX">7.3</option>
                                <option value="NY">7.2</option>
                                <option value="FL">7.1</option>
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
                                    <th>SPP</th>
                                    <th>Orang Tua Asuh</th>
                                    <th>Buku</th>
                                    <th>Study Banding</th>
                                    <th>Total</th>
                                    <th>Keterangan</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Muhammad Rizky</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>

                                    <td><h4><span class="badge badge-success">Lunas</span></h4>

                                        
                                        
                                        
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>Muhammad Ihsan</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>

                                    <td>
                                        <h4><span class="badge badge-primary">Beasiswa</span></h4>
                                        
                                        
                                        
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>Zaki Zikri</td>
                                    <td>100.000</td>
                                    <td>1.500.000</td>
                                    <td>100.000</td>
                                    <td>300.000</td>
                                    <td>2.000.000</td>

                                    <td>
                                        -
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>Jumlah</td>
                                    <td>100.000</td>
                                    <td>1.500.000</td>
                                    <td>100.000</td>
                                    <td>300.000</td>
                                    <td>2.000.000</td>
                                    <td>-</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.2\htdocs\spus\resources\views/laporan.blade.php ENDPATH**/ ?>