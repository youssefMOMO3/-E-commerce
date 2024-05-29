<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Reset Password</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    {{-- Title icon --}}
    <link rel="icon" type="image/png" href="{{asset('img/title.svg')}}"/>

</head>

<body>

<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Forget Password Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-5">

                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">

                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <a href="{{url("/")}}" class="">
                            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Nestlé Shop</h3>
                        </a>
                        <h3>Enter Your new Password</h3>
                    </div>


                    <form class="form w-100" id="kt_sign_in_form" method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-floating mb-3">

                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" value="{{ $email ?? old('email') }}" autocomplete="email" required autofocus placeholder="Enter Your Email">
                            <label for="floatingInput">Email address</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-floating mb-3">

                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingInput" autocomplete="new-password" required placeholder="Enter Your Password">
                            <label for="floatingInput">Password</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password_confirmation" class="form-control  @error('password') is-invalid @enderror" id="floatingInput" value="{{ old('email') }}" autocomplete="new-password" required autofocus placeholder="Confirme password">
                            <label for="floatingInput">Confirme Password</label>

                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">
                            {{ __('Reset Password') }}
                        </button>

                    </form>

                </div>

                <!-- JavaScript Libraries -->
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                <script src="{{asset('lib/chart/chart.min.js')}}"></script>
                <script src="{{asset('lib/easing/easing.min.js')}}"></script>
                <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
                <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
                <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
                <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
                <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

                <!-- Template Javascript -->
                <script src="{{asset('js/main.js')}}"></script>
            </div>
        </div>
    </div>
</div>
    </body>

</html>


    <!-- Forget Password Start -->
