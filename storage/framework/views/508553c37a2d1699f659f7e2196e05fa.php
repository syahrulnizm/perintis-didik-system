<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('frame.index-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

    <?php echo $__env->make('frame.index-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div>
        <?php
            if(DB::connection()->getPdo()){
                echo "Successfully connected to DB and DB name is " . DB::connection()->getDatabaseName();
            }
        ?>
    </div>

    <section class="py-4 py-md-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-md-6 text-center"><img class="img-fluid w-100" src="<?php echo e(asset('img/illustrations/student.png')); ?>"></div>
                <div class="col-md-5 col-xl-4 text-center text-md-start">
                    <h2 class="display-6 fw-bold mb-5">Sign up as<br><span class="underline pb-1"><strong>Student</strong></span>&nbsp;</h2>
                    <form method="post" action="<?php echo e(route('student.register')); ?>">
                    <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <h3>Student Information</h3>
                        </div>
                        <hr>
                        <div class="mb-3"><input class="form-control" type="text" id="name-student" name="name-student" placeholder="Name"></div>
                        <div class="mb-3"><input class="form-control" type="text" id="identity-card-student" name="identity-card-student" placeholder="Identity Card"></div>
                        <div class="mb-3"><input class="form-control" type="tel" id="phoneNum-student" name="phoneNum-student" placeholder="Phone Number"></div>
                        <div class="mb-3"><input class="shadow-sm form-control" type="email" id="email-student" name="email-student" placeholder="Email"></div>
                        <div class="mb-3"><input class="shadow-sm form-control" type="password" id="password-student" name="password-student" placeholder="Password"></div>
                        <div class="mb-3">
                            <h3>Gurdian Information</h3>
                        </div>
                        <hr>
                        <div class="mb-3"><input class="form-control" type="text" id="name-parent" name="name-student" placeholder="Name"></div>
                        <div class="mb-3"><input class="form-control" type="text" id="identity-card-parent" name="identity-card-student" placeholder="Identity Card"></div>
                        <div class="mb-3"><input class="form-control" type="tel" id="phoneNum-parent" name="phoneNum-student" placeholder="Phone Number"></div>
                        <div class="mb-3"><textarea class="form-control" id="address" name="address" placeholder="Address"></textarea></div>
                        <div class="mb-3">
                            <div class="form-check" style="font-size: 10px;"><input class="form-check-input" type="checkbox" id="formCheck"><label class="form-check-label" for="formCheck">By clicking Sign Up, you agree to our Terms, Privacy Policy and Cookies Policy. You may receive SMS notifications from us and can opt out at any time.</label></div>
                        </div>
                        <div class="mb-5"><button class="btn btn-primary shadow" type="submit">Sign up</button></div>
                        <p>Already have an account?&nbsp;<a href='student-sign-in'>Sign In</a>&nbsp;</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('frame.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frame.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\perintis-didik-system-app\resources\views/student-sign-up.blade.php ENDPATH**/ ?>