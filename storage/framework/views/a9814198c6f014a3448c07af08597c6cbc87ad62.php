<?php $__env->startSection('content'); ?>








































































<!DOCTYPE html>
<html>

<!-- Mirrored from www.nobleui.com/laravel/template/light/auth/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Mar 2020 13:36:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>NobleUI Laravel Admin Dashboard Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="_token" content="P8Y7YrIUH6LSkPBag5pjb6bCyyqhdrNqDsAQHdMW">

    <link rel="shortcut icon" href="favicon.ico">

    <!-- plugin css -->
    <link media="all" type="text/css" rel="stylesheet" href="fonts/feather-font/css/iconfont.css">
    <link media="all" type="text/css" rel="stylesheet" href="plugins/perfect-scrollbar/perfect-scrollbar.css">
    <!-- end plugin css -->


    <!-- common css -->
    <link media="all" type="text/css" rel="stylesheet" href="css/app.css">
    <!-- end common css -->

</head>
<body data-base-url="https://www.nobleui.com/laravel/template/light">

<script src="js/spinner.js"></script>

<div class="main-wrapper" id="app">
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">

            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-6 mx-auto">
                    <div class="card">


                        <div class="row">
                            <div class="col-md-4 pr-md-0">
                                <div class="auth-left-wrapper" style="background-image: url(images/carousel/img6.jpg)">

                                </div>
                            </div>
                            <div class="col-md-8 pl-md-0">
                                <div class="auth-form-wrapper px-4 py-5">
                                    <a href="#" class="noble-ui-logo d-block mb-2">Noble<span>UI</span></a>
                                    <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>

                                    <form method="POST" action="<?php echo e(route('login')); ?>">
                                        <?php echo csrf_field(); ?>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo e(__('E-Mail Address')); ?></label>
                                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

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
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label"  for="remember">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                    <?php echo e(__('Remember Me')); ?>

                                            </label>
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary">
                                                <?php echo e(__('Login')); ?>

                                            </button>

                                            <?php if(Route::has('password.request')): ?>
                                                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                                    <?php echo e(__('Forgot Your Password?')); ?>

                                                </a>
                                            <?php endif; ?>




                                        </div>
                                        <a href="register" class="d-block mt-3 text-muted">Not a user? Sign up</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- base js -->
<script src="js/app.js"></script>
<script src="plugins/feather-icons/feather.min.js"></script>
<!-- end base js -->

<!-- plugin js -->
<!-- end plugin js -->

<!-- common js -->
<script src="js/template.js"></script>
<!-- end common js -->

</body>

<!-- Mirrored from www.nobleui.com/laravel/template/light/auth/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Mar 2020 13:36:05 GMT -->
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.2\htdocs\spus\resources\views/auth/login.blade.php ENDPATH**/ ?>