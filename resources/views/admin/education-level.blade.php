<!DOCTYPE html>
<html lang="en">

@include('frame.admin-head')

<body>

    @include('frame.admin-navbar')

    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold"><span class="underline pb-2">Education Level</span><br></h2>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <button class="btn btn-primary" type="button" data-bs-target="#add-edulevel" data-bs-toggle="modal">
                        <i class="fas fa-plus" style="color: rgb(255,255,255);"></i>&nbsp;Add
                        <span class="text-white-50 icon"></span>
                    </button>
                </div>
            </div>
            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Education level list</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                        <table class="table my-0" id="dataTable">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">Education Level ID</th>
                                    <th style="text-align: center;">Education Level Name</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($educationLevels as $edulevel)
                                <tr>
                                    <td style="text-align: center;">{{ $loop->iteration}}</td>
                                    <td style="text-align: center;">{{ $edulevel->eduID}}</td>
                                    <td style="text-align: center;">{{ $edulevel->eduName}}</td>
                                    <td style="text-align: center;">
                                        <button class="btn btn-primary" type="button" style="margin-right: 10px;"
                                                data-bs-target="#edit-edulevel" data-bs-toggle="modal"
                                                onclick="handleEditButtonClick('{{ $edulevel->eduID }}', '{{ $edulevel->eduName }}')">
                                            <i class="fas fa-edit" style="color: rgb(255,255,255);"></i>&nbsp;Edit
                                            <span class="text-white-50 icon"></span>
                                        </button>
                                    </button>
                                    </td>
                                    <td style="text-align: center;">
                                        <button class="btn btn-primary" type="button" style="background: var(--bs-red);border-style: none;"
                                                onclick="confirmDelete('{{ $edulevel->eduID }}')">
                                        <i class="fas fa-trash-alt" style="color: rgb(255,255,255);"></i>&nbsp;Delete
                                        <span class="text-white-50 icon"></span>
                                    </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Education Level Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="add-edulevel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Education Level</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/admin/education-level') }}" method="POST">
                        @csrf
                        <div class="col">
                            <div class="mb-3"><label class="form-label" id="educationlevel-id" for="educationlevelid"><strong>Education Level ID</strong></label><input class="form-control" type="text" id="educationlevel-id" value="" name="eduID"></div>
                        </div>
                        <div class="col">
                            <div class="mb-3"><label class="form-label" id="educationlevel-name" for="educationlevelname"><strong>Education Level Name</strong></label><input class="form-control" type="text" id="educationlevel-name" value="" name="eduName"></div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-light" type="reset" data-bs-dismiss="modal">Clear</button>
                            <button class="btn btn-primary" type="submit">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Education Level Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="edit-edulevel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Education Level</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit-edulevel-form" method="POST" action="">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" id="package-name-1" for="education-level-name">
                                        <strong>Education Level Name</strong>
                                    </label>
                                    <input class="form-control" type="text" id="eduName" name="eduName" value="">
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="button" onclick="document.getElementById('edit-edulevel-form').submit()">Update</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Form -->
<form id="delete-form" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>

    @include('frame.footer')

    @include('frame.script')


<script>
    // Function to handle the edit button click
    function handleEditButtonClick(eduID, eduName) {
        // Set the data in the modal form
        document.getElementById('eduName').value = eduName;
        document.getElementById('edit-edulevel-form').action = "/admin/education-level/" + eduID;
    }

    // Function to handle the delete button click and confirm delete
    function confirmDelete(eduID) {
        if (confirm("Are you sure you want to delete this education level?")) {
            // If user confirms, submit the form for delete action
            document.getElementById('delete-form').action = "/admin/education-level/" + eduID;
            document.getElementById('delete-form').submit();
        }
    }
</script>


</body>

</html>
