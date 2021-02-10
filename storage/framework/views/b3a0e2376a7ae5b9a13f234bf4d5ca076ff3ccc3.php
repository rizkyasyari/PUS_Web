<?php $__env->startSection('content'); ?>




















<div class="page-content">
    <div class="row" style="width: 100%" align="center">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3 mb-md-0">Selamat Datang</h4>
                    <h3 class="card-title" style="margin-top: 10px">Selamat Bekerja Di Aplikasi Pembayaran Uang Sekolah</h3>
                    <p id="demo"></p>
                    <div id="typewriter"><h3><?php
                        /* This sets the $time variable to the current hour in the 24 hour clock format */
                        $time = date("H");
                        /* Set the $timezone variable to become the current timezone */
                        $timezone = date("Asia/Jakarta");
                        /* If the time is less than 1200 hours, show good morning */
                        if ($time < "12") {
                            echo "Good Morning";
                        } else
                            /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
                            if ($time >= "12" && $time < "17") {
                                echo "Good Afternoon";
                            } else
                                /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
                                if ($time >= "17" && $time < "19") {
                                    echo "Good Evening";
                                } else
                                    /* Finally, show good night if the time is greater than or equal to 1900 hours */
                                    if ($time >= "19") {
                                        echo "Good Night";
                                    }
                            ?></h3></div>
                    <h3><p id="time"></p></h3>
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

<?php echo $__env->make('templates.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.2\htdocs\spus\resources\views/home.blade.php ENDPATH**/ ?>