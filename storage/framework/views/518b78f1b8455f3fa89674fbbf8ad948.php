<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('frame.index-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

    <?php echo $__env->make('frame.index-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="py-4 py-md-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-md-6 text-center"><img class="img-fluid w-100" src="<?php echo e(asset('img/illustrations/tutor.png')); ?>"></div>
                <div class="col-md-5 col-xl-4 text-center text-md-start">
                    <h2 class="display-6 fw-bold mb-5">Sign in as<br><span class="underline pb-1"><strong>Tutor</strong></span></h2>
                    <form method="post">
                        <div class="mb-3"><input class="shadow form-control" type="email" id="email-tutor" name="email-tutor" placeholder="Email"></div>
                        <div class="mb-3"><input class="shadow form-control" type="password" id="password-tutor" name="password-tutor" placeholder="Password"></div>
                        <div class="mb-5"><button class="btn btn-primary shadow" type="submit">Log in</button></div>
                        <p>Dont have an account?&nbsp;<a href='tutor-sign-up'>Sign up</a>&nbsp;</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('frame.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frame.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\perintis-didik-system-app\resources\views/tutor-sign-in.blade.php ENDPATH**/ ?>