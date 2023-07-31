<!DOCTYPE html>
<html lang="en">

@include('frame.tutor-head')

<body>

    @include('frame.tutor-navbar')

    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold"><span class="underline pb-2">Home</span><br></h2>
                    <p>Welcome, {{ Auth::user()->userName }}!</p>
                </div>
            </div>
        </div>
    </section>

    @include('frame.footer')

    @include('frame.script')

</body>

</html>