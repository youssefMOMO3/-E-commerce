<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Nestlé | Store</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style1.css')}}" rel="stylesheet">

    {{-- title icon --}}
    <link rel="icon" type="image/png" href="https://cdn2.iconfinder.com/data/icons/business-marketing-advertising/64/Marketing_mobile_shop-512.png"/>
</head>
<body>
<div class="container-fluid position-relative p-5" id="home">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" style="background: #0c9eec">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0">Nestlé Shop</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="#Accueil" class="nav-item nav-link active"></a>
                <a href="#À-propos" class="nav-item nav-link"></a>
                <a href="#Contactez-nous" class="nav-item nav-link"></a>
            </div>
            @if(Auth::check())
                <a href="{{route('logout')}}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"
                   class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Déconnecter</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @else
                <a href="{{route('login')}}" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Se connecter</a>
                <a href="{{route('register')}}" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">S'inscrire</a>
            @endif

            <a href="{{route('client.card')}}" class="btn btn-warning" style="margin-left: 8px; text-decoration: none">
                <i class="bi bi-cart-fill"></i>
                Panier
            </a>
            
        </div>
    </nav>
</div>
<!--search-->
<div class="navbar bg-body-tertiary" style="margin-top: 120px">
    <div class="container-fluid position-absolute p-5">
        <form class="d-flex"  action="{{route('client.rechercher')}}" method="get">
            @csrf
            <input class="form-control" type="search" name="search" placeholder="Search" style="width: 400px">
{{--            <button class="btn btn-outline-success" type="submit">Search</button>--}}
        </form>
        @if (session('status'))
            <div class="alert alert-warning" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
</div>

<!--Product-->

<div class="container-fluid  " style="margin-top: 100px ">

        @foreach($product as $p)
            <div class="row row-cols-1 row-cols-md-3 g-2 d-inline-flex flex-column justify-content-center">
                <div class="col">
                    <div class="card " style="width: 200px ;margin-left: 10px">
                        <img src="{{asset("images/product/$p->avatar")}}" class="card-img-top " alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$p->name}}</h5>
                            <a href="{{route('client.produits',$p->id)}}" class="btn btn-primary mt-2"
                                style="margin-left: 40px">Voir Plus</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        @if (session('status'))
            <div class="alert alert-warning" role="alert">
                {{ session('status') }}
            </div>
        @endif


</div>
<div class="container-fluid bg-dark text-body footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-5">
{{--            <div class="col-md-6 col-lg-3">--}}
{{--                <p class="section-title text-white h5 mb-4">Address<span></span></p>--}}
{{--                <p><i class="fa fa-map-marker-alt me-3"></i>123 bla, bla bla, Maroc</p>--}}
{{--                <p><i class="fa fa-phone-alt me-3"></i>+212 045 58989</p>--}}
{{--                <p><i class="fa fa-envelope me-3"></i>info@example.com</p>--}}
{{--                <div class="d-flex pt-2">--}}
{{--                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-lg-3">--}}
{{--                <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>--}}
{{--                <a class="btn btn-link" href="#Accueil">Accueil</a>--}}
{{--                <a class="btn btn-link" href="#À-propos">À-propos</a>--}}
{{--                <a class="btn btn-link" href="#Contactez-nous">Contactez-nous</a>--}}
{{--                <a class="btn btn-link" href="#">Support</a>--}}
{{--            </div>--}}
            {{--                    <div class="col-md-6 col-lg-3">--}}
            {{--                        <p class="section-title text-white h5 mb-4">Community<span></span></p>--}}
            {{--                        <a class="btn btn-link" href="">Career</a>--}}
            {{--                        <a class="btn btn-link" href="">Leadership</a>--}}
            {{--                        <a class="btn btn-link" href="">Strategy</a>--}}
            {{--                        <a class="btn btn-link" href="">History</a>--}}
            {{--                        <a class="btn btn-link" href="">Components</a>--}}
            {{--                    </div>--}}
            {{--                    <div class="col-md-6 col-lg-3">--}}
            {{--                        <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>--}}
            {{--                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>--}}
            {{--                        <div class="position-relative w-100 mt-3">--}}
            {{--                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">--}}
            {{--                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
        </div>
    </div>
    <div class="container px-lg-5">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">PhoneX</a>, Tous Droits Réservés.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="#">Accueil</a>
                        <a href="#">Biscuits</a>
                        <a href="#">Aider</a>
                        <a href="#">FQA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>