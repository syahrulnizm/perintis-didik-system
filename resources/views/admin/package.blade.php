<!DOCTYPE html>
<html lang="en">

@include('frame.admin-head')

<body>

    @include('frame.admin-navbar')

    @php
    $packages = \App\Models\Package::all();
    @endphp

    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold"><span class="underline pb-2">Package</span><br></h2>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto"><button class="btn btn-primary" type="button" data-bs-target="#add-package" data-bs-toggle="modal"><i class="fas fa-plus" style="color: rgb(255,255,255);"></i>&nbsp;Add<span class="text-white-50 icon"></span></button></div>
            </div>
            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Package list</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                        <table class="table my-0" id="dataTable">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">Package Name</th>
                                    <th style="text-align: center;">Subject Quantity</th>
                                    <th style="text-align: center;">Price (RM)</th>
                                    <th style="text-align: center;">Education Level</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packages as $package)
                                <tr>
                                    <td style="text-align: center;">{{ $loop->iteration}}</td>
                                    <td style="text-align: center;">{{ $package->packageName}}</td>
                                    <td style="text-align: center;">{{ $package->packageQuantity}}</td>
                                    <td style="text-align: center;">{{ $package->packagePrice}}</td>
                                    <td style="text-align: center;">{{ optional($package->educationlevel)->eduName}}</td>
                                    <td style="text-align: center;">
                                        <button class="btn btn-primary" type="button" style="margin-right: 10px;" data-bs-target="#edit-package" data-bs-toggle="modal" data-id="{{ $package->packageID }}" data-name="{{ $package->packageName }}" data-quantity="{{ $package->packageQuantity }}" data-price="{{ $package->packagePrice }}" data-eduid="{{ optional($package->educationLevel)->eduID }}">
                                            <i class="fas fa-edit" style="color: rgb(255,255,255);"></i>&nbsp;Edit<span class="text-white-50 icon"></span>
                                        </button>
                                    </td>

                                    <td style="text-align: center;">
                                        <!-- Delete button -->
                                        <form action="{{ route('deletepackage', ['packageID' => $package->packageID]) }}" method="POST" id="delete-form-{{ $package->packageID }}">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-primary" type="button" style="background: var(--bs-red); border-style: none;" onclick="confirmDelete('{{ $package->packageID }}')">
                                                <i class="fas fa-trash-alt" style="color: rgb(255, 255, 255);"></i>&nbsp;Delete<span class="text-white-50 icon"></span>
                                            </button>
                                        </form>


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

    <!----------------ADD------------------->
    <div class="modal fade" role="dialog" tabindex="-1" id="add-package">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add package</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/package" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" id="package-id" for="packagename"><strong>Package ID</strong></label><input class="form-control" type="text" id="package-id" value="" name="packageID"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" id="package-name"><strong>Package Name</strong></label><input class="form-control" type="text" id="package-name" value="" name="packageName"></div>
                            </div>
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="email"><strong>Quantity</strong></label><input class="form-control" type="number" id="quantity" name="packageQuantity"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="first_name"><strong>Price (RM)</strong></label><input class="form-control" type="text" id="price" name="packagePrice"></div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="education_level"><strong>Education Level</strong></label>
                                    <select class="form-select" name="eduID" id="education_level">
                                        <optgroup label="Choose your education level">
                                            @foreach ($educationLevels as $id => $eduName)
                                            <option value="{{ $id }}">{{ $eduName }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer"><button class="btn btn-light" type="reset" data-bs-dismiss="modal">Clear</button>
                            <button class="btn btn-primary" type="submit">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!----------------Update------------------->
    <div class="modal fade" role="dialog" tabindex="-1" id="edit-package">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit package</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('updatepackage', ['packageID' => '__PACKAGE_ID__']) }}" method="POST">

                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="package-name-2"><strong>Package Name</strong></label>
                                    <input class="form-control" type="text" id="package-name-2" value="" name="packageName">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="quantity-1"><strong>Quantity</strong></label>
                                    <input class="form-control" type="number" id="quantity-1" name="packageQuantity" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="price-1"><strong>Price (RM)</strong></label>
                                    <input class="form-control" type="text" id="price-1" name="packagePrice" value="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="education_level"><strong>Education Level</strong></label>
                                    <select class="form-select" name="eduID" id="education_level">
                                        <optgroup label="Choose your education level">
                                            @foreach ($educationLevels as $id => $eduName)
                                            <option value="{{ $id }}">{{ $eduName }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-light" type="reset" data-bs-dismiss="modal">Clear</button>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






    <!----------------Delete Modal------------------->

    <!-- Delete Form -->
    <form id="delete-form" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>



    @include('frame.footer')

    @include('frame.script')

    <script>
        const editPackageModal = document.getElementById('edit-package');

        editPackageModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Button that triggered the modal
            const packageID = button.getAttribute('data-id');
            const packageName = button.getAttribute('data-name');
            const packageQuantity = button.getAttribute('data-quantity');
            const packagePrice = button.getAttribute('data-price');
            const eduID = button.getAttribute('data-eduid');

            // Populate the form fields with the package data
            editPackageModal.querySelector('#package-name-2').value = packageName;
            editPackageModal.querySelector('#quantity-1').value = packageQuantity;
            editPackageModal.querySelector('#price-1').value = packagePrice;
            editPackageModal.querySelector('#education_level').value = eduID;
            const formAction = editPackageModal.querySelector('form').action;
            // Update the form action to include the packageID in the URL
            editPackageModal.querySelector('form').action = formAction.replace('__PACKAGE_ID__', packageID);
        });
    </script>

    <script>
        function confirmDelete(packageID) {
            if (confirm('Are you sure you want to delete this package?')) {
                document.getElementById('delete-form-' + packageID).submit();
            }
        }
    </script>


</body>

</html>