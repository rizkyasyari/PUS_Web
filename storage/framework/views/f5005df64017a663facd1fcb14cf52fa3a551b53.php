<?php $__env->startSection('content'); ?>
    <div class="page-content">







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
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form  method="POST" action="<?php echo e(url('/data_siswa/tambah/')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label>Jurusan</label>
                                                <p><select class="js-example-basic-single" id="id_jurusan" name="id_jurusan" style="width: 100%">
                                                        <?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($j->id_jurusan); ?>"><?php echo e($j->nama_jurusan); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select></p>
                                            </div>

                                            <div class="form-group">
                                                <label>Kelas</label>
                                                <p><select class="js-example-basic-single" id="id_kelas" name="id_kelas" style="width: 100%">
                                                        <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($k->id_kelas); ?>"><?php echo e($k->nama_kelas); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select></p>
                                            </div>

                                            <div class="form-group">
                                                <label>Orang Tua</label>
                                                <p><select class="js-example-basic-single" id="id_orangtua" name="id_orangtua" style="width:100%">
                                                        <?php $__currentLoopData = $orang_tua; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($o->id_orangtua); ?>"><?php echo e($o->orang_tua); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select></p>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputKelas"><?php echo e(__('Nama Siswa')); ?></label>
                                                <input id="nama_siswa" type="text" class="form-control <?php $__errorArgs = ['nama_siswa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama_siswa" value="<?php echo e(old('nama_siswa')); ?>" required autocomplete="nama_siswa" autofocus>

                                                <?php $__errorArgs = ['nama_siswa'];
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
                                                <label for="exampleInputKelas"><?php echo e(__('NISN')); ?></label>
                                                <input id="nisn" type="number" class="form-control <?php $__errorArgs = ['nisn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nisn" value="<?php echo e(old('nisn')); ?>" required autocomplete="nisn" autofocus>

                                                <?php $__errorArgs = ['nisn'];
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
                                                <label for="exampleInputKelas"><?php echo e(__('Tanggal Lahir')); ?></label>
                                                <input id="tgl_lahir" type="date" class="form-control <?php $__errorArgs = ['tgl_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="tgl_lahir" value="<?php echo e(old('tgl_lahir')); ?>" required autocomplete="tgl_lahir" autofocus>

                                                <?php $__errorArgs = ['tgl_lahir'];
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
                                                <label for="exampleInputKelas"><?php echo e(__('Tahun Masuk')); ?></label>
                                                <input id="tahun_masuk" type="date" class="form-control <?php $__errorArgs = ['tahun_masuk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="tahun_masuk" value="<?php echo e(old('tahun_masuk')); ?>" required autocomplete="tahun_masuk" autofocus>

                                                <?php $__errorArgs = ['tahun_masuk'];
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

                        <h6 class="card-title" style="margin-bottom: 30px">Data Siswa</h6>


                        <div class="form-group">
                            <label class="mt-1">Pilih Jurusan</label>
                            <select class="js-example-basic-single w-20">
                                <?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($j->id_jurusan); ?>"><?php echo e($j->nama_jurusan); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                        </div>
                        <div class="form-group">
                            <label class="mt-1 mr-3">Pilih Kelas</label>
                            <select class="js-example-basic-single w-20 ">
                                <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($k->id_kelas); ?>"><?php echo e($k->nama_kelas); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <a class="btn btn-primary" href="#" role="button">Lihat</a>
                        </div>


                        <div class="table-bordered" >
                            <table id="dataTableExample" class="table">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NISN</th>
                                    <th>Alamat</th>
                                    <th>Orang Tua</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Nomor Hp</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                foreach ($nama_siswa as $j):
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $j->nama_siswa?></td>
                                    <td><?= $j->nisn?></td>
                                    <td><?= $j->alamat?></td>
                                    <td><?= $j->orang_tua?></td>
                                    <td><?= $j->tgl_lahir?></td>
                                    <td><?= $j->no_hp?></td>
                                    <td><?= $j->nama_kelas?></td>
                                    <td style="width: fit-content">
                                        <button value="<?php echo e($j->id_siswa); ?>" type="button" class="btn edit-jurusan btn-success btn-icon-text" data-toggle="modal" data-target="#ModalJurusan">
                                            <i class="btn-icon-prepend" data-feather="edit"></i>
                                            Edit Data
                                        </button>
                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="<?php echo e(url('/data_siswa/hapus/'. $j->id_siswa)); ?>" type="button" class="btn btn-danger btn-icon-text">
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('templates.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.2\htdocs\spus\resources\views/data_siswa.blade.php ENDPATH**/ ?>