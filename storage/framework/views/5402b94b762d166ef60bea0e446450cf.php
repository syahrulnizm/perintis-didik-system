<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('frame.admin-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

    <?php echo $__env->make('frame.admin-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold"><span class="underline pb-2">Education Level</span><br></h2>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto"><button class="btn btn-primary" type="button" data-bs-target="#add-education-level" data-bs-toggle="modal"><i class="fas fa-plus" style="color: rgb(255,255,255);"></i>&nbsp;Add<span class="text-white-50 icon"></span></button></div>
            </div>
            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Education level list</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 text-nowrap">
                            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                        <option value="10" selected="">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>&nbsp;</label></div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                        </div>
                    </div>
                    <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                        <table class="table my-0" id="dataTable">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">Education Level Name</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $educationLevels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edulevel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo e($loop->iteration); ?></td>
                                    <td style="text-align: center;"><?php echo e($edulevel->eduName); ?></td>

                                    <td style="text-align: center;">
                                        <button class="btn btn-primary" type="button" style="margin-right: 10px;" data-bs-target="#edit-education-level" data-bs-toggle="modal" onclick="handleEditButtonClick('<?php echo e($edulevel->eduID); ?>', '<?php echo e($edulevel->eduName); ?>')">
                                        <i class="fas fa-edit" style="color: rgb(255,255,255);"></i>&nbsp;Edit<span class="text-white-50 icon"></span></button>
                                    </td>
                                    <td style="text-align: center;">
                                        <button class="btn btn-primary" type="button" style="background: var(--bs-red);border-style: none;" onclick="confirmDelete('<?php echo e($edulevel->eduID); ?>')">
                                        <i class="fas fa-trash-alt" style="color: rgb(255,255,255);"></i>&nbsp;Delete<span class="text-white-50 icon"></span></button>
                                    </td>

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 3 of 3</p>
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
    </section>

    <!-- Add Education Level Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="add-education-level">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Education Level</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(url('/admin/education-level')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" id="educationlevel-id"><strong>Education Level ID</strong></label>
                                <input class="form-control" type="text" id="educationlevel-id"></div>
                            </div>
                            <div class="col">
                                <div class="mb-3"><label class="form-label" id="educationlevel-name"><strong>Education Level Name</strong></label>
                                <input class="form-control" type="text" id="educationlevel-name"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 d-flex justify-content-end">
                                    <button class="btn btn-light me-2" type="reset" data-bs-dismiss="modal">Clear</button>
                                    <button class="btn btn-primary" type="submit">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------->

    <!-- Edit Education Level Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="edit-education-level">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Education Level</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit-edulevel-form" method="POST" action="">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" id="package-name-1" for="username"><strong>Education Level Name</strong></label>
                                <input class="form-control" type="text" id="eduName"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 d-flex justify-content-end">
                                    <button class="btn btn-light me-2" type="reset" data-bs-dismiss="modal">Clear</button>
                                    <button class="btn btn-primary" type="submit" onclick="document.getElementById('edit-edulevel-form').submit()">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------->

    <!-- Delete Data -->
    <form id="delete-form" method="POST" style="display: none;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
    </form>
    <!----------------->

    <?php echo $__env->make('frame.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frame.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\perintis-didik-system\resources\views/admin/education-level.blade.php ENDPATH**/ ?>