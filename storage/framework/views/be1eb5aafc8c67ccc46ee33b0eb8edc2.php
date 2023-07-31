<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('frame.admin-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

    <?php echo $__env->make('frame.admin-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold"><span class="underline pb-2">Subject</span><br></h2>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto"><button class="btn btn-primary" type="button" data-bs-target="#add-subject" data-bs-toggle="modal"><i class="fas fa-plus" style="color: rgb(255,255,255);"></i>&nbsp;Add<span class="text-white-50 icon"></span></button></div>
            </div>
            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Subject list</p>
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
                                    <th style="text-align: center;">ID</th>
                                    <th style="text-align: center;">Subject Name</th>
                                    <th style="text-align: center;">Time</th>
                                    <th style="text-align: center;">Day</th>
                                    <th style="text-align: center;">Duration</th>
                                    <th style="text-align: center;">Education Level</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center;">1</td>
                                    <td style="text-align: center;">MT1</td>
                                    <td style="text-align: center;">Mathematics</td>
                                    <td style="text-align: center;">08:00 am - 10:00 am</td>
                                    <td style="text-align: center;">Monday</td>
                                    <td style="text-align: center;">2 hours</td>
                                    <td style="text-align: center;">UPSR</td>
                                    <td style="text-align: center;">
                                        <button class="btn btn-primary" type="button" style="margin-right: 10px;" data-bs-target="#edit-subject" data-bs-toggle="modal">
                                        <i class="fas fa-edit" style="color: rgb(255,255,255);"></i>&nbsp;Edit<span class="text-white-50 icon"></span></button>
                                    </td>
                                    <td style="text-align: center;">
                                        <button class="btn btn-primary" type="button" style="background: var(--bs-red);border-style: none;">
                                        <i class="fas fa-trash-alt" style="color: rgb(255,255,255);"></i>&nbsp;Delete<span class="text-white-50 icon"></span></button>
                                    </td>
                                </tr>
                            </tfoot>
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
    <div class="modal fade" role="dialog" tabindex="-1" id="add-subject">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Subject</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" id="package-name" for="username"><strong>Subject Name</strong></label><input class="form-control" type="text" id="subject-name-1" value="" name="subject-name"></div>
                            </div>
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="email"><strong>Time</strong></label><input class="form-control" type="text" id="subject-time" value="" name="subject-time"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Day</strong></label><select class="form-select" id="day">
                                        <option value="Monday" selected="">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                    </select></div>
                            </div>
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Duration</strong></label><input class="form-control" type="number" id="duration" name="duration"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Education Level</strong></label><select class="form-select" id="education-level">
                                        <optgroup label="Choose your education level">
                                            <option value="SPM" selected="">SPM</option>
                                            <option value="PT3">PT3</option>
                                            <option value="UPSR">UPSR</option>
                                        </optgroup>
                                    </select></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="reset" data-bs-dismiss="modal">Clear</button><button class="btn btn-primary" type="button">Update</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="edit-subject">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Subject</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" id="subject-name"><strong>Subject Name</strong></label><input class="form-control" type="text" id="subject-name" value="Mathematics" name="subject-name"></div>
                            </div>
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="email"><strong>Time</strong></label><input class="form-control" type="text" id="subject-time-1" value="08:00 am - 10:00 am" name="subject-time"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Day</strong></label><select class="form-select" id="day-1">
                                        <option value="Monday" selected="">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                    </select></div>
                            </div>
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Duration</strong></label><input class="form-control" type="number" id="duration-1" name="duration" value="3"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="last_name"><strong>Education Level</strong></label><select class="form-select" id="education-level-1">
                                        <optgroup label="Choose your education level">
                                            <option value="SPM">SPM</option>
                                            <option value="PT3">PT3</option>
                                            <option value="UPSR" selected="">UPSR</option>
                                        </optgroup>
                                    </select></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="reset" data-bs-dismiss="modal">Clear</button><button class="btn btn-primary" type="button">Update</button></div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('frame.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frame.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\perintis-didik-system\resources\views/admin/subject.blade.php ENDPATH**/ ?>