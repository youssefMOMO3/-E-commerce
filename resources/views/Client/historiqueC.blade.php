<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Nestlé | Historique Des commandes Livre</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
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
  <link rel="icon" type="image/png" href="{{asset('img/LogoN.png')}}"/>
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
               class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block"> <i class="fa fa-sign-out-alt"></i> Déconnecter</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </div>
    </nav>
</div>  
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>Tableau du Bord du commandes livre</h3>
            <br>
        </div>
        <div class="card-body">
            <a href="{{ route('client.showcmd')}}" class="btn btn-warning">Suivi de commande</a>
            <a href="" class=" btn btn-active">Historique des commandes</a>
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
                    <th>Nom</th>
                    <th>Categorie</th>
                    <th>Qantité</th>
                    <th>Prix Total</th>
                    <th>Status De Commande</th>
                    <th>status De Payement</th>
                    <th>la Date de livraison</th>
                    <th>la date de commande</th>
                </tr>
                @foreach($commande as $c)
                    <tr style="text-align: center">
                        <td>{{$c->id}}</td>
                        <td>{{$c->product_title}}</td>
                        <td>{{$c->marke}}</td>
                        <td>{{$c->qte}}</td>
                        <td>{{$c->price}}</td>
                        <td>{{$c->statuscmd}}</td>
                        <td>{{$c->statuspay}}</td>
                        <td>{{$c->dateLiv}}</td>
                        <td>{{ $c->created_at }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <span style="margin-left: 500px">{{$commande->links()}}</span>
    </div>
</div>
</body>
</html>