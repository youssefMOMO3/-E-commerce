<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nestlé | Profile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('../../public/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

      {{-- title icon --}}
      <link rel="icon" type="image/png" href="{{asset('img/LogoN.png')}}"/>

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> -->
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
		
		<!-- Tagsinput CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
    

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

        @include("layout-Admin.sidebare")

        <!-- Content Start -->
            <div class="content">

                @include("layout-Admin.navebare")

                @include("layout-Admin.profileSection")
                
                
                @include("layout-Admin.Footer")

            </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- Start JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset("lib/chart/chart.min.js")}}"></script>
        <script src="{{asset("lib/easing/easing.min.js")}}"></script>
        <script src="{{asset("lib/waypoints/waypoints.min.js")}}"></script>
        <script src="{{asset("lib/owlcarousel/owl.carousel.min.js")}}"></script>
        <script src="{{asset("lib/tempusdominus/js/moment.min.js")}}"></script>
        <script src="{{asset("lib/tempusdominus/js/moment-timezone.min.js")}}"></script>
        <script src="{{asset("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js")}}"></script>
        </div>
        <!-- Template Javascript -->
        <script src="{{asset("js/main.js")}}"></script>
    {{-- END JavaScript Libraries --}}

</body>
</html>