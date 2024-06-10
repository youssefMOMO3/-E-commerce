<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Nestlé | Modification du produit</title>
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
    <link rel="icon" type="image/png" href="{{asset('img/LogoN.png')}}"/>
    <style>
        /* Container for the entire card */
        .card-container {
            max-width: 800px; /* Ensure a max-width for better design */
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        /* Container for the image */
        .detail-img-container {
            flex: 1 1 45%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-radius: 10px;
            background-color: #fff;
            padding: 10px;
        }

        /* Image styles */
        .detail-img-container img {
            max-width: 100%;
            height: auto;
            object-fit: contain;
        }

        /* Container for the details */
        .details-body {
            flex: 1 1 50%;
            padding: 20px;
        }

        /* Title styles */
        .detail-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Description styles */
        .detail-description {
            margin-bottom: 20px;
            color: #555;
        }

        /* Price styles */
        h3 {
            margin-bottom: 20px;
            color: #007bff;
        }

        /* Button styles */
        .btn {
            transition: transform 0.3s ease-in-out;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .alert {
            max-width: 300px;
            margin: 0 auto;
            padding: 10px;
            border-radius: 5px;
            color: #fff;
            background-color: #dc3545;
        }

        .form-control, .form-select {
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            margin-right: 10px;
        }

        .form-control:focus, .form-select:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: none;
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

<div class="container-fluid container-responsive">
    @foreach($card as $d)
        <div class="card-container">
            <div class="detail-img-container">
                <img src="{{asset("images/product/$d->avatar")}}" alt="{{ $d->name }}">
            </div>
            <div class="details-body">
                <h1 style="text-align: center;" class="detail-title">{{ $d->product_title }}</h1>
                <p style="text-align: center;">{{ $d->marke }}</p>
                <hr>
                <!--add to cart-->
                <form action="{{route('client.updateitem',$d->id)}}" method="post">
                    @csrf
                   
                    <div class="d-flex justify-content-start align-items-center mb-3">
                        <input type="number" value="{{old('qte',$d->qte)}}" required class="form-control" min="1" name="qte">
                        <select class="form-select" name="color" required>
                            <option value="" disabled selected>Choose the size</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                        </select>
                    </div>
                    @if(Session::has('status'))
                        <div class="alert mt-2">
                            {{ Session('status') }}
                        </div>
                    @endif
                    <h3>{{ $d->price }} dh</h3>
                       
                    <hr>
                    <div class="d-flex justify-content-center">
                        <a   href="{{ route('client.card') }}" class="btn btn-success" href="" style="margin-right: 10px;">
                            <i class="bi bi-pencil-square"></i> 
                        </a>
                    
                        <a class="btn btn-danger" href="{{route('client.index')}}">
                            <i class="bi bi-x-circle"></i> 
                        </a>
                    </div>
                    
                    
                </form>
            </div>
        </div>
    @endforeach
</div>
</body>
</html>
