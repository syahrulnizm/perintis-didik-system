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
                    <h2 class="display-6 fw-bold mb-5">Sign in as<br><span class="underline pb-1"><strong>Student</strong></span></h2>
                    <form method="post">
                        <div class="mb-3"><input class="shadow form-control" type="email" id="email-student" name="email-student" placeholder="Email"></div>
                        <div class="mb-3"><input class="shadow form-control" type="password" id="password-student" name="password-student" placeholder="Password"></div>
                        <div class="mb-5"><button class="btn btn-primary shadow" type="submit">Log in</button></div>
                        <p>Dont have an account?&nbsp;<a href='student-sign-up'>Sign up</a>&nbsp;</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('frame.footer')

    @include('frame.script')

</html>