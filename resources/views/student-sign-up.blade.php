<!DOCTYPE html>
<html lang="en">

@include('frame.index-head')

<body>

    @include('frame.index-navbar')

    <section class="py-4 py-md-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-md-6 text-center"><img class="img-fluid w-100" src="{{ asset('img/illustrations/student.png') }}"></div>
                <div class="col-md-5 col-xl-4 text-center text-md-start">
                    <h2 class="display-6 fw-bold mb-5">Sign up as<br><span class="underline pb-1"><strong>Student</strong></span>&nbsp;</h2>
                    <form action="{{ route('student.register') }}" method="POST">
                    @csrf

                        <div class="mb-3"><h3>Student Information</h3></div>
                        <hr>
                        <div class="mb-3"><input class="form-control" type="text" id="userName" name="userName" placeholder="Name"></div>
                        <div class="mb-3"><input class="form-control" type="tel" id="userNumber" name="userNumber" placeholder="Phone Number"></div>
                        <div class="mb-3"><input class="shadow-sm form-control" type="email" id="userEmail" name="userEmail" placeholder="Email"></div>
                        <div class="mb-3"><input class="shadow-sm form-control" type="password" id="userPass" name="userPass" placeholder="Password"></div>
                        
                        <div class="mb-3"><h3>Gurdian Information</h3></div>
                        <hr>
                        <div class="mb-3"><input class="form-control" type="text" id="guardianName" name="guardianName" placeholder="Name"></div>
                        <div class="mb-3"><input class="form-control" type="tel" id="guardianNumber" name="guardianNumber" placeholder="Phone Number"></div>
                        <div class="mb-3"><textarea class="form-control" id="studentAddress" name="studentAddress" placeholder="Address"></textarea></div>

                        <div class="mb-3">
                            <div class="form-check" style="font-size: 10px;"><input class="form-check-input" type="checkbox" id="formCheck"><label class="form-check-label" for="formCheck">By clicking Sign Up, you agree to our Terms, Privacy Policy and Cookies Policy. You may receive SMS notifications from us and can opt out at any time.</label></div>
                        </div>
                        <div class="mb-5"><button class="btn btn-primary shadow" type="submit">Sign up</button></div>
                        <p>Already have an account?&nbsp;<a href='student-sign-in'>Sign In</a>&nbsp;</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('frame.footer')

    @include('frame.script')

</body>

</html>