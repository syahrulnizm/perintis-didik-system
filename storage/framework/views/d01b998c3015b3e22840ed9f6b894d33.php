<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('frame.index-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

    <?php echo $__env->make('frame.index-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <section class="py-4 py-md-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-md-6 text-center"><img class="img-fluid w-100" src="<?php echo e(asset('img/illustrations/admin-student-tutor.png')); ?>"></div>
                <div class="col-md-5 col-xl-4 text-center text-md-start">
                    <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1">Sign in</span><br></h2>

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                    <form method="post" action="<?php echo e(route('sign-in')); ?>">
                        <?php echo csrf_field(); ?>
                            <div class="mb-3"><select class="form-select">
                                    <optgroup label="Choose your role">
                                        <option value="Administrator" selected="">Administrator</option>
                                        <option value="Student">Student</option>
                                        <option value="Tutor">Tutor</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="mb-3"><input class="shadow form-control <?php $__errorArgs = ['userPass'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" id="userEmail" name="userEmail" placeholder="Email" value="<?php echo e(old('userEmail')); ?>"></div>
                            <div class="mb-3"><input class="shadow form-control <?php $__errorArgs = ['userPass'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" id="userPass" name="userPass" placeholder="Password"></div>
                            <div class="mb-5"><button class="btn btn-primary shadow" type="submit">Log in</button></div>

                <?php if(session('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>

                        <p>Dont have an account?&nbsp;<a href="<?php echo e(route('index')); ?>">Sign up</a>&nbsp;</p>
                        
                    </form>

                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('frame.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frame.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\perintis-didik-system\resources\views/sign-in.blade.php ENDPATH**/ ?>