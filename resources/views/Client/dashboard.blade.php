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
        
          @import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
        
        .container {
          display: flex;
          width: 1040px;
          justify-content: space-evenly;
          flex-wrap: wrap;
        }
        .card {
          margin: 10px;
          background-color: #fff;
          border-radius: 10px;
          box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
          overflow: hidden;
          width: 300px;
          transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        
        .card:hover {
          transform: translateY(-10px);
          box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        
        .card-header {
          width: 100%;
          height: 200px;
          display: flex;
          justify-content: center;
          align-items: center;
          overflow: hidden;
          background: white;
        }
        
        .card-header img {
          width: 100%;
          height: 100%;
          object-fit: contain;
        }
        
        .card-body {
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: flex-start;
          padding: 20px;
          min-height: 250px;
        }
        
        .tag {
          background: white;
          border-radius: 50px;
          font-size: 12px;
          margin: 0;
          color: #fff;
          padding: 2px 10px;
          text-transform: uppercase;
          cursor: pointer;
        }
        
        
            .tag-red {
          background-color: #e74c3c;
        }
        
        .tag-blue {
          background-color: #3498db;
        }
        
        .tag-green {
          background-color: #2ecc71;
        }
        
        .tag-orange {
          background-color: #e67e22;
        }
        
        .tag-yellow {
          background-color: #f1c40f;
        }
        
        .tag-teal {
          background-color: #47bcd4;
        }
        
        .tag-purple {
          background-color: #5e76bf;
        }
        
        .tag-pink {
          background-color: #cd5b9f;
        }
        
        .card-body h4 {
          font-size: 1.5rem;
        }
        
        .card-body p {
          font-size: 13px;
          margin: 0 0 40px;
        }
        
        .footer {
    padding: 20px 0;
    color: #fff;
}

.footer .footer-menu {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.footer .footer-menu a {
    margin: 0 10px;
    color: #fff;
    text-decoration: none;
}

.footer .footer-menu a:hover {
    text-decoration: underline;
}

            </style>
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
                   class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block"><i class="fa fa-sign-out-alt"></i> Déconnecter</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @else
                <a href="{{route('login')}}" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block"><i class="fa fa-sign-in-alt"></i></a>
                <a href="{{route('register')}}" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block"><i class="fa fa-user-plus"></i></a>
            @endif

            <a href="{{route('client.monCmd')}}" class="btn btn-warning" style="margin-left: 8px; text-decoration: none">
                <i class="fa fa-shopping-cart"></i>   
            </a>
        </div>
    </nav>
</div>
<!--search-->
<div class="navbar bg-body-tertiary" style="margin-top: 120px">
    <div class="container-fluid position-absolute p-5">
        <form class="search-form" action="{{route('client.rechercher')}}" method="get">
            @csrf
            <input class="search-input" type="search" name="search" placeholder="Rechercher...">
            <button class="search-button" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>        
        @if (session('status'))
            <div class="alert alert-warning" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
</div>

<!--Product-->
    <br>
    <br>
    <br>
   <!-- Mettez à jour votre code Blade comme suit -->
<div class="container py-5">
    <div class="container">
        @foreach($product as $p)
            <div class="card">
                <div class="card-header">
                    <img src="{{ asset('images/product/' . $p->avatar) }}" alt="{{ $p->name }}" />
                </div>
                <div class="card-body">
                    @php
                        $tagClass = '';
                        switch ($p->marke) {
                            case 'Dairy':
                                $tagClass = 'tag-red';
                                break;
                            case 'Coffee':
                                $tagClass = 'tag-blue';
                                break;
                            case 'CPW':
                                $tagClass = 'tag-green';
                                break;
                            case 'Nutrition':
                                $tagClass = 'tag-orange';
                                break;
                            case 'Confiserie':
                                $tagClass = 'tag-yellow';
                                break;
                            case 'Culinaire':
                                $tagClass = 'tag-pink';
                                break;
                            default:
                                $tagClass = 'tag-purple'; // Default color
                        }
                    @endphp
                    <span class="tag {{ $tagClass }}">{{ $p->marke }}</span>
                    <br>
                    <h4>{{ $p->name }}</h4>
                    <p>{{ $p->description }}</p>
                    <h5 class="text-primary">{{ $p->price }} DH</h5>
                    <a href="{{ route('client.produits', $p->id) }}" class="btn btn-primary mt-3">Voir Plus</a>
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


<div class="container-fluid bg-dark text-body footer wow fadeIn" data-wow-delay="0.1s" style="padding: 20px 0;">
    <div class="container px-lg-5">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#" style="color: #fff; text-decoration: none;">Nestlé</a>, Tous Droits Réservés.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu" style="display: flex; justify-content: center; gap: 20px;">
                        <a href="#" style="margin: 0 10px; color: #fff; text-decoration: none;">Accueil</a>
                        <a href="#" style="margin: 0 10px; color: #fff; text-decoration: none;">Biscuits</a>
                        <a href="#" style="margin: 0 10px; color: #fff; text-decoration: none;">Aider</a>
                        <a href="#" style="margin: 0 10px; color: #fff; text-decoration: none;">FAQ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>