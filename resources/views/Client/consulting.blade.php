<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Nestlé | Tableau de bord</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
      {{-- title icon --}}
      <link rel="icon" type="image/png" href="{{asset('img/LogoN.png')}}"/>

    <style>
        .search-form {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .search-input {
            width: 400px;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 25px;
            outline: none;
            transition: all 0.3s ease;
        }
        
        .search-input:focus {
            border-color: #66afe9;
            box-shadow: 0 0 8px rgba(102, 175, 233, 0.6);
        }
        
        .search-button {
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .search-button:hover {
            background-color: #218838;
        }
        
        .search-button i {
            font-size: 16px;
        }        
            </style>
    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"
               class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block"><i class="fa fa-sign-out-alt"></i> Déconnecter</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            

        </div>
    </nav>
</div>
<div class="container-fluid">
    <a href="{{ route('client.index')}}" class="btn btn-danger">
        <i class="fas fa-arrow-left"></i> 
    </a>
    
    <div class="card" style="margin-top: 15px">
        <div class="card-header">
            <h3 class="text-body mt-2" style="margin-left: 10px">Tableau du Bord</h3>
            <br>
            
        </div>
        <div class="card-body">
            <a href="" class="btn btn-active">Suivi de commande</a>
            <a href="{{route('client.historique')}}" class=" btn btn-warning">Historique des commandes</a>
            <nav class="navbar">
                <div class="container-fluid mb-3" style="margin-top: 10px">
                    <a class="navbar-brand"></a>
                    <form class="search-form" action="{{route('client.rechercher')}}" method="get">
                        @csrf
                        <input class="search-input" type="search" name="search" placeholder="Rechercher...">
                        <button class="search-button" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                    
                </div>
            </nav>
            <table class="table mt-5">
                <tr style="text-align: center">
                    <th>Id</th>
                    <th>Produit</th>
                    <th>Categorie</th>
                    <th>Qantité</th>
                    <th>Prix Total</th>
                    <th>Statut De Commande</th>
                    <th>Statut De Payement</th>
                    <th>Date De Livraison</th>
                </tr>
                @foreach($data as $c)
                    <tr style="text-align: center">
                        <td>{{$c->id}}</td>
                        <td>{{$c->product_title}}</td>
                        <td>{{$c->marke}}</td>
                        <td>{{$c->qte}}</td>
                        <td>{{$c->price}}DH</td>
                        <td>{{$c->statuscmd}}</td>
                        <td>{{$c->statuspay}}</td>
                        <td>@if($c->dateLiv===null)
                                --
                            @else
                                {{$c->dateLiv}}
                        @endif</td>

                    </tr>
                @endforeach
            </table>
        </div>
        <span style="margin-left: 500px">{{$data->links()}}</span>
    </div>
</div>
<div class="container-fluid bg-dark text-body footer wow fadeIn" data-wow-delay="0.1s" >
    <div class="container py-5 px-lg-5">
        <div class="row g-5">
    
        </div>
    </div>
    <div class="container px-lg-5">
        <div class="copyright">
            <div class="row" style="margin-bottom: 80px">
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
