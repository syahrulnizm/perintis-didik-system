<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('frame.index-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

    <?php echo $__env->make('frame.index-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="py-4 py-md-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-md-6 text-center"><img class="img-fluid w-100" src="<?php echo e(asset('img/illustrations/student.png')); ?>"></div>
                <div class="col-md-5 col-xl-4 text-center text-md-start">
                    <h2 class="display-6 fw-bold mb-5">Sign in as<br><span class="underline pb-1"><strong>Student</strong></span></h2>
                    <form method="post" action="<?php echo e(route('student.signin')); ?>">
                    <?php echo csrf_field(); ?>
                        <div class="mb-3"><input class="shadow form-control" type="email" id="userEmail" name="userEmail" placeholder="Email"></div>

                        <?php $__errorArgs = ['userEmail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="mb-3"><input class="shadow form-control" type="password" id="password" name="password" placeholder="Password"></div>
                        
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        
                        <input type="hidden" id="userType" name="userType" value="Student">
                        <div class="mb-5"><button class="btn btn-primary shadow" type="submit">Log in</button></div>
                        <p>Dont have an account?&nbsp;<a href='student-sign-up'>Sign up</a>&nbsp;</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('frame.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frame.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</html><?php /**PATH C:\xampp\htdocs\perintis-didik-system\resources\views/student-sign-in.blade.php ENDPATH**/ ?>