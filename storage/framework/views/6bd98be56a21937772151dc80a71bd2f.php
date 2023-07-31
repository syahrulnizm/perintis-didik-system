<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('frame.admin-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

    <?php echo $__env->make('frame.admin-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold"><span class="underline pb-2">List of Service</span><br></h2>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-8 col-xl-9 text-center mx-auto">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Education level</td>
                                    <td><a class="btn btn-primary" role="button" href='education-level'><i class="fas fa-info-circle" style="color: rgb(255,255,255);"></i>&nbsp;Details<span class="text-white-50 icon"></span></a></td>
                                </tr>
                                <tr>
                                    <td>Package</td>
                                    <td><a class="btn btn-primary" role="button" href='package'><i class="fas fa-info-circle" style="color: rgb(255,255,255);"></i>&nbsp;Details<span class="text-white-50 icon"></span></a></td>
                                </tr>
                                <tr>
                                    <td>Subject</td>
                                    <td><a class="btn btn-primary" role="button" href='subject'><i class="fas fa-info-circle" style="color: rgb(255,255,255);"></i>&nbsp;Details<span class="text-white-50 icon"></span></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('frame.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frame.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\perintis-didik-system\resources\views/admin/service.blade.php ENDPATH**/ ?>