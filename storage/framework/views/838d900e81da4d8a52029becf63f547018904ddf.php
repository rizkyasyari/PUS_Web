<?php $__env->startSection('content'); ?>
    <div class="page-content">
        
        
        
        
        
        

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
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kelas</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form  method="POST" action="data_kelas/tambah">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label>Jurusan</label>
                                                <p><select class="js-example-basic-single" id="id_jurusan" name="id_jurusan" style="width: 100%">
                                                        <?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($j->id_jurusan); ?>"><?php echo e($j->nama_jurusan); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select></p>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputKelas"><?php echo e(__('Kelas')); ?></label>
                                                <input id="kelas" type="text" class="form-control <?php $__errorArgs = ['kelas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="kelas" value="<?php echo e(old('kelas')); ?>" required autocomplete="kelas" autofocus>

                                                <?php $__errorArgs = ['kelas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputKelas"><?php echo e(__('Wali Kelas')); ?></label>
                                                <input id="wali_kelas" type="text" class="form-control <?php $__errorArgs = ['wali_kelas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="wali_kelas" value="<?php echo e(old('wali_kelas')); ?>" required autocomplete="wali_kelas" autofocus>

                                                <?php $__errorArgs = ['wali_kelas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputKelas"><?php echo e(__('Jumlah Murid')); ?></label>
                                                <input id="jumlah_murid" type="number" class="form-control <?php $__errorArgs = ['jumlah_murid'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="jumlah_murid" value="<?php echo e(old('jumlah_murid')); ?>" required autocomplete="jumlah_murid" autofocus>

                                                <?php $__errorArgs = ['jumlah_murid'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">
                                                    <?php echo e(__('Submit')); ?>

                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6 class="card-title" style="margin-bottom: 30px">Data Kelas</h6>

                        <div class="form-group">
                            <label class="mt-1">Pilih Jurusan</label>
                            <select class="js-example-basic-single w-20">
                                <?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($j->id_jurusan); ?>"><?php echo e($j->nama_jurusan); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <a class="btn btn-primary" href="#" role="button">Lihat</a>
                        </div>



                        <div>
                            <div class="table-responsive">
                            <table id="dataTableKelas" class="table display nowrap" style="height: 500px">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jurusan</th>
                                    <th>Kelas</th>
                                    <th>Wali Kelas</th>
                                    <th>Jumlah Murid</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($kelas as $k):
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $k->nama_jurusan?></td>
                                    <td><?= $k->nama_kelas?></td>
                                    <td><?= $k->wali_kelas?></td>
                                    <td><?= $k->jumlah_murid?></td>
                                    <td style="width: fit-content">
                                        <button value="<?php echo e($k->id_kelas); ?>" type="button" class="btn edit-jurusan btn-success btn-icon-text" data-toggle="modal" data-target="#ModalKelas">
                                            <i class="btn-icon-prepend" data-feather="edit"></i>
                                            Edit Data
                                        </button>
                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="<?php echo e(url('/data_kelas/hapus/'. $k->id_kelas )); ?>" type="button" class="btn btn-danger btn-icon-text">
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
    </div>
    <div class="modal fade" id="ModalKelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form  method="POST" action="<?php echo e(url('')); ?>/data_kelas/update">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="exampleInputKelas"><?php echo e(__('Kelas')); ?></label>
                            <input id="n-kelas"  type="text" class="form-control" name="nama" >
                            <input id="id-kelas"  type="hidden" class="form-control" name="id">

                            <?php $__errorArgs = ['kelas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">
                                <?php echo e(__('Submit')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('templates.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.2\htdocs\spus\resources\views/data_kelas.blade.php ENDPATH**/ ?>