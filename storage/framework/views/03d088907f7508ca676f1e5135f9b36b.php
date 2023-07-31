<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('frame.student-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

    <?php echo $__env->make('frame.student-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold"><span class="underline pb-2">Schedule</span><br></h2>
                </div>
            </div>
            <div class="card shadow">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-6 col-xxl-5 text-nowrap">
                            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                        <table class="table my-0" id="dataTable">
                            <thead>
                                <tr>
                                    <th class="text-center">Subject Name</th>
                                    <th class="text-center">Day</th>
                                    <th class="text-center">Time</th>
                                    <th class="text-center">Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">Mathematics</td>
                                    <td class="text-center">Monday</td>
                                    <td class="text-center">08:00 am - 10:00 am</td>
                                    <td class="text-center">2 hours</td>
                                </tr>
                                <tr>
                                    <td class="text-center">Bahasa Melayu</td>
                                    <td class="text-center">Tuesday</td>
                                    <td class="text-center">02:30 pm - 03:30 pm</td>
                                    <td class="text-center">1 hour</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr></tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('frame.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frame.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\perintis-didik-system\resources\views/student/schedule.blade.php ENDPATH**/ ?>