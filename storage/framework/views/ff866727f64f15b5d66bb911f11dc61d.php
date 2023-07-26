<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('frame.student-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

    <?php echo $__env->make('frame.student-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="display-6 fw-bold mb-4"><span class="underline">Subscription</span><br></h2>
                    <p class="text-muted">Simplify your education journey with Perintis Didik. Subscribe now for easy student registration and seamless management!</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <form><select class="form-select">
                            <optgroup label="Choose your education level">
                            <?php $__currentLoopData = $educationLevels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($edu->eduID); ?>" selected=""><?php echo e($edu->eduName); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </optgroup>
                        </select></form>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
            <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="card border-warning border-2 h-100">
                        <div class="card-body d-flex flex-column justify-content-between p-4"><span class="badge bg-warning position-absolute top-0 end-0 rounded-bottom-left text-uppercase text-primary">Most Popular</span>
                            <div>
                                <h6 class="fw-bold text-center text-muted"><?php echo e($pack->packageName); ?></h6>
                                <h4 class="display-5 fw-bold text-center mb-4">RM<?php echo e($pack->packagePrice); ?></h4>
                                <ul class="list-unstyled">
                                    <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-check fs-5 text-primary">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M5 12l5 5l10 -10"></path>
                                            </svg></span><span>Education Level : SPM</span></li>
                                    <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-check fs-5 text-primary">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M5 12l5 5l10 -10"></path>
                                            </svg></span><span>Subject Quantity: <?php echo e($pack->packageQuantity); ?></span></li>
                                </ul>
                            </div><a class="btn btn-warning" role="button" href="#">Select</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <div class="modal fade" role="dialog" tabindex="-1" id="subscription-subject">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Chooese your subject</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Package Available</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Subject Name</th>
                                            <th class="text-center">Day</th>
                                            <th class="text-center">Time</th>
                                            <th class="text-center"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">Bahasa Melayu</td>
                                            <td class="text-center">Monday</td>
                                            <td class="text-center">08:00 am - 10:00 am</td>
                                            <td class="text-center"><input type="checkbox" class="form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Mathematics</td>
                                            <td class="text-center">Tuesday</td>
                                            <td class="text-center">02:30 pm - 03:30 pm</td>
                                            <td class="text-center"><input type="checkbox" class="form-control-sm"></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 2 of 2</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Subscribe</button></div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('frame.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frame.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\perintis-didik-system-app\resources\views/student/subscription.blade.php ENDPATH**/ ?>