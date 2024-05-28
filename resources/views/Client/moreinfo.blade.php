<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Nestlé | Detail Du Produits</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    {{-- <link href="{{asset('css/card.css')}}" rel="stylesheet"> --}}
    
    </style>
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
            <h1 class="m-0">Nestlé-Shop</h1>
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
                <a href="{{route('login')}}" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Login</a>
                <a href="{{route('register')}}" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Register</a>
            @endif

            <a href="{{route('client.card')}}" class="btn btn-warning" style="margin-left: 8px;text-decoration: none">
                <i class="bi bi-basket-fill"></i>
                Panier
            </a>
        </div>
    </nav>
</div>
<style>
    .detail-img-container {
        width: 100%;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .detail-img-container img {
        max-width: 100%;
        height: auto;
        object-fit: contain;
    }
    
    .details-body {
        padding: 1rem;
    }
    
    .detail-title {
        font-size: 2rem;
        margin-bottom: 1rem;
    }
    
    .detail-description {
        margin-bottom: 1.5rem;
    }
    
    h3 {
        margin-bottom: 1.5rem;
    }
    
    .btn {
        transition: transform 0.3s ease-in-out;
    }
    
    .btn:hover {
        transform: scale(1.05);
    }
    
    .alert {
        max-width: 300px;
        margin: 0 auto;
    }
</style>@foreach($data as $d)
<div class="container mb-5">
    <div class="row align-items-center bg-white shadow p-3 rounded">
        <div class="col-md-6">
            <div class="detail-img-container mb-3">
                <img src="{{ asset('images/product/' . $d->avatar) }}" class="img-fluid" alt="{{ $d->name }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="details-body text-center text-md-left">
                <h1 class="detail-title">{{ $d->name }}</h1>
                <br>
                <p class="detail-description">{{ $d->description }}</p>
                <h3 class="text-primary">{{ $d->price }} DH</h3>
                <form action="{{ route('client.addcart', $d->id) }}" method="post">
                    @csrf
                    <div class="d-flex justify-content-center gap-5 mb-3">
                        <input type="number" value="1" required class="form-control me-2" style="width: 70px;" min="1" name="qte">
                        <select class="form-select" name="color" required style="width: auto;">
                            <option value="" disabled selected>Choose the size</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                        </select>
                    </div>
                    @if(Session::has('status'))
                        <div class="alert alert-danger mt-2">
                            {{ Session('status') }}
                        </div>
                    @endif
                    <hr>
                    <button class="btn btn-primary me-2" type="submit">Commander</button>
                    <a class="btn btn-secondary" href="{{ route('client.index') }}">Annuler</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

</div>
    <div class="container-fluid bg-dark text-body footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Nestlé</a>, Tous Droits Réservés.

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