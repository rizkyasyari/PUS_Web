<?php $__env->startSection('content'); ?>
    
    
    
    
    

    
    
    
    
    
    

    
    
    
    
    
    

    <div class="page-content">
        <div class="row" style="width: 100%" align="center">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3 mb-md-0">Saldo Anda</h4>
                        <h4><span class="badge badge-success" style="margin-top: 20px">Rp.100.000.0000</span></h4>
                        <button type="button" class="btn btn-primary btn-icon-text float-right" style="margin-top: 20px" data-toggle="modal" data-target="#exampleModal">
                            <i class="btn-icon-prepend" data-feather="credit-card"></i>
                            Tarik
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Transfer Bank</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                                <form class="forms-sample">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Nama Akun</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nama Akun">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputUsername1">Nomor Rekening</label>
                                                        <input type="number" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Nomor Rekening">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Bank</label>
                                                        <select class="js-example-basic-single w-auto" style="width: 450px">
                                                            <option value="NY">BCA</option>
                                                            <option value="FL">BRI</option>
                                                            <option value="FL">BNI</option>
                                                            <option value="FL">Mandiri</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Jumlah Nominal</label>
                                                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Nominal">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1"><?php echo e(__('Password')); ?></label>
                                                        <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                                                        <?php $__errorArgs = ['password'];
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
                                                </form>
                                            </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Collect Cashout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>

            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.2\htdocs\spus\resources\views/saldo.blade.php ENDPATH**/ ?>