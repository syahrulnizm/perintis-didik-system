<!DOCTYPE html>
<html lang="en">

@include('frame.admin-head')

<body>

    @include('frame.admin-navbar')

    @php
    $packages = \App\Models\Subject::all();
    @endphp

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
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($subjects as $subject)
                                <tr>
                                <td style="text-align: center;">{{ $loop->iteration }}</td>
                                    <td style="text-align: center;">{{ $subject->subjectID }}</td>
                                    <td style="text-align: center;">{{ $subject->subjectName }}</td>
                                    <td style="text-align: center;">{{ $subject->time }}</td>
                                    <td style="text-align: center;">{{ $subject->day }}</td>
                                    <td style="text-align: center;">{{ $subject->duration }}</td>
                                    <td style="text-align: center;">{{ $subject-> educationLevel-> eduName }}</td>

                                    <td style="text-align: center;">
                                    <button class="btn btn-primary" type="button" style="margin-right: 10px;"
                                        data-bs-target="#edit-subject" data-bs-toggle="modal"
                                        data-subjectID="{{ $subject->subjectID }}"
                                        data-subjectName="{{ $subject->subjectName }}"
                                        data-time="{{ $subject->time }}"
                                        data-day="{{ $subject->day }}"
                                        data-duration="{{ $subject->duration }}"
                                        data-eduid="{{ optional($subject->educationLevel)->eduID }}">
                                        <i class="fas fa-edit" style="color: rgb(255,255,255);"></i>&nbsp;Edit<span class="text-white-50 icon"></span>
                                    </button>
                                    </td>

                                    <td style="text-align: center;">
                                    <!-- Delete button -->
                                    <form action="{{ route('deletesubject', ['subjectID' => $subject->subjectID]) }}" method="POST" id="delete-form-{{ $subject->subjectID }}">

                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-primary" type="button" style="background: var(--bs-red); border-style: none;" onclick="confirmDelete('{{ $subject->subjectID }}')">
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

    <!-- Rest of the Blade view content... -->

<!----------------ADD------------------->
<div class="modal fade" role="dialog" tabindex="-1" id="add-subject">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Subject</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('createsubject') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="subjectID"><strong>Subject ID</strong></label>
                                <input class="form-control" type="text" id="subjectID" name="subjectID">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="subjectName"><strong>Subject Name</strong></label>
                                <input class="form-control" type="text" id="subjectName" name="subjectName">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="time"><strong>Time</strong></label>
                                <input class="form-control" type="time" id="time" name="time">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label"><strong>Day</strong></label>
                                <select class="form-select" id="day" name="day">
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="duration"><strong>Duration</strong></label>
                                <input class="form-control" type="text" id="duration" name="duration">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="tutor_name"><strong>Tutor's Name</strong></label>
                                <select class="form-select" name="tutorID" id="tutor_name">
                                    <optgroup label="Choose tutor's name">
                                        @foreach ($educationLevels as $id => $tutorID)
                                            <option value="{{ $id }}">{{ $userID }}</option>
                                        @endforeach
                                    </optgroup>
                                </select
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="education_level"><strong>Education Level</strong></label>
                                <select class="form-select" name="eduID" id="education_level">
                                    <optgroup label="Choose your education level">
                                        @foreach ($educationLevels as $id => $eduName)
                                            <option value="{{ $id }}">{{ $eduName }}</option>
                                        @endforeach
                                    </optgroup>
                                </select
                            </div>
                        </div>
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


<!----------------Update------------------->
<div class="modal fade" role="dialog" tabindex="-1" id="edit-subject">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Subject</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="edit-subject-form" method="POST" action="{{ route('updatesubject', ['subjectID' => '__SUBJECT_ID__']) }}">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="subject-id"><strong>Subject ID</strong></label>
                                <input class="form-control" type="text" id="subject-id" value="" name="subjectID" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="subject-name"><strong>Subject Name</strong></label>
                                <input class="form-control" type="text" id="subject-name" value="" name="subjectName">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="time"><strong>Time</strong></label>
                                <input class="form-control" type="time" id="time" name="time">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label"><strong>Day</strong></label>
                                <select class="form-select" id="day" name="day">
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="duration"><strong>Duration</strong></label>
                                <input class="form-control" type="text" id="duration" name="duration">
                            </div>
                        </div>
                        </div>
                        <div class="row">
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
                        <!--<div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="education_level"><strong>Tutor's Name</strong></label>
                                <select class="form-select" name="eduID" id="education_level">
                                    <optgroup label="Choose your education level">
                                        @foreach ($educationLevels as $id => $eduName)
                                            <option value="{{ $id }}">{{ $eduName }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        </div>-->
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
        
        const editSubjectModal = document.getElementById('edit-subject');

editSubjectModal.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget; // Button that triggered the modal
    const subjectID = button.getAttribute('data-subjectID');
    const subjectName = button.getAttribute('data-subjectName');
    const time = button.getAttribute('data-time');
    const day = button.getAttribute('data-day');
    const duration = button.getAttribute('data-duration');
    const eduID = button.getAttribute('data-eduid');

    // Populate the form fields with the subject data
    const form = document.getElementById('edit-subject-form');
    form.action = form.action.replace('__SUBJECT_ID__', subjectID);
    form.querySelector('#subject-id').value = subjectID;
    form.querySelector('#subject-name').value = subjectName;
    form.querySelector('#time').value = time;
    form.querySelector('#day').value = day;
    form.querySelector('#day').value = day;
            form.querySelector('#duration').value = duration;
            form.querySelector('#education_level').value = eduID;
        });

</script>

<script>
    function confirmDelete(subjectID) {
    if (confirm('Are you sure you want to delete this subject?')) {
        document.getElementById('delete-form-' + subjectID).submit();
    }
}
</script>


</body>

</html>
