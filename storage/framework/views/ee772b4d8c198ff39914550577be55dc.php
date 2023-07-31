<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('frame.student-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

    <?php echo $__env->make('frame.student-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold"><span class="underline pb-2">Profile</span><br></h2>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="<?php echo e(asset('img/avatar/user-default.jpg')); ?>" width="160" height="160">
                            <div class="mb-3"><input type="file"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row mb-3 d-none">
                        <div class="col">
                            <div class="card text-white bg-primary shadow">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="m-0">Peformance</p>
                                            <p class="m-0"><strong>65.2%</strong></p>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                    </div>
                                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white bg-success shadow">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="m-0">Peformance</p>
                                            <p class="m-0"><strong>65.2%</strong></p>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                    </div>
                                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold">Student and Guardian Details</p>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="username"><strong>Full Name</strong></label>
                                                    <p style="color: rgb(78,93,120);"><?php echo e(Auth::user()->userName); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="first_name"><strong>Phone Number</strong></label>
                                                    <p style="color: rgb(78,93,120);"><?php echo e(Auth::user()->userNumber); ?></p>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Email</strong></label>
                                                    <p style="color: rgb(78,93,120);"><?php echo e(Auth::user()->userNumber); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="first_name"><strong>Password</strong></label>
                                                    <p style="color: rgb(78,93,120);">Click "Edit" to change your password.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="username"><strong>Full Name</strong></label>
                                                    <p style="color: rgb(78,93,120);">Abdullah</p>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="email"><strong>Identity Card</strong></label>
                                                    <p style="color: rgb(78,93,120);">950102-10-3333</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="first_name"><strong>Phone Number</strong></label>
                                                    <p style="color: rgb(78,93,120);">012-3456-789</p>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Address</strong></label>
                                                    <p style="color: rgb(78,93,120);">Taman Permata, Lorong Permata 5<br>Jalan Shah<br>4000 Shah Alam<br>Selangor</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3"><a class="btn btn-primary btn-sm" role="button" href='profile-edit'>Edit</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold">Subscription Details</p>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="username"><strong>Package&nbsp;</strong></label>
                                                    <p style="color: rgb(78,93,120);">SPM Package B</p>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="email"><strong>Subject Taken</strong></label>
                                                    <ul>
                                                        <li>Bahasa Melayu Form 5</li>
                                                        <li>History Form 5</li>
                                                        <li>Mathematics Form 5</li>
                                                        <li>Additional Mathematics Form5&nbsp;</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3"><label class="form-label" for="first_name"><strong>Price</strong></label>
                                                    <p style="color: rgb(78,93,120);">RM100.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3"><a class="btn btn-primary btn-sm" role="button" href='subscription'>Edit</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('frame.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frame.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\perintis-didik-system\resources\views/student/profile.blade.php ENDPATH**/ ?>