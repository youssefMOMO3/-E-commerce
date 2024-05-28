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
    <style>
        body {
            background-color: #f9f6f2;
        }
        .card-img-top {
            border-radius: 50px;
            padding: 20px;
        }
        .card {
            border-radius: 30px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
        }
        .card-body {
            padding: 25px;
            margin-top: -15px;
        }
        .btn-primary {
            border-radius: 50px;
            width: 120px;
        }
        .btn-primary:hover {
            background-color: black;
            border: none;
        }
        h3, h5 {
            color: rgb(0, 91, 228);
        }
    </style>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

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

    <link href="{{asset('css/card.css')}}" rel="stylesheet">

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

            <a href="{{route('client.monCmd')}}" class="btn btn-warning" style="margin-left: 8px; text-decoration: none">
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
<style>
    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }
    
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    
    .card-img-container {
        width: 100%;
        height: 400px; /* Adjust the height as needed */
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .card-img-container img {
        width: 100%;
        height: auto;
        object-fit: contain; /* Ensure the image scales proportionally */
    }
    
    .card h2 {
        font-size: 1.5rem;
    }
    
    .card-body {
        padding: 1rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        flex-grow: 1;
    }
    
    .card-text {
        flex-grow: 1;
    }
    
    .card-body .price-and-button {
        margin-top: 1rem;
        text-align: center;
    }
    
    .card-body .price-and-button h5 {
        margin-bottom: 0.5rem;
    }
    
    .btn {
        transition: transform 0.3s ease-in-out;
    }
    
    .btn:hover {
        transform: scale(1.05);
    }
    </style>
    
    <div class="container py-5">
        {{-- <h1 class="text-center">Popular Dishes</h1> --}}
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
            @foreach($product as $p)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-img-container">
                            <img src="{{ asset('images/product/' . $p->avatar) }}" class="card-img-top" alt="{{ $p->name }}">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h2 class="card-title text-center">{{ $p->name }}</h2>
                            <p class="card-text">{{ $p->description }}</p>
                            <div class="price-and-button mt-auto">
                                <h5 class="text-primary">{{ $p->price }} DH</h5>
                                <a href="{{ route('client.produits', $p->id) }}" class="btn btn-primary mt-3">Voir Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    @if (session('status'))
        <div class="alert alert-warning" role="alert">
            {{ session('status') }}
        </div>
    @endif
    


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