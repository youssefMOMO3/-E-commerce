<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>modification du produit</title>
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
<!--Header-->
<div class="container-fluid position-relative p-5" id="home">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" style="background: #064c4c">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0">PhoneX</h1>
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
               class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Déconnecter</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </div>
    </nav>
</div>

<div class="container-fluid container-responsive">
    @foreach($card as $d)
        <div class="card mb-3 d-inline-flex flex-column " style="max-width: 540px; margin-top: 50px ;margin-left: 400px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset("images/product/$d->avatar")}}" class="img-fluid rounded-center" alt="..." style="height:300px">
                </div>
                <div class="col-md-8" >
                    <div class="card-body">
                        <h3 class="card-title">{{$d->name}}</h3>
                        <h6 class="card-title text-body">{{$d->marke}}</h6>
                        <p class="card-text">{{$d->description}}</p>
                        <h5 class="card-text">{{$d->size}}</h5>
                        <p class="card-text text-start mt-4"><small class="text-body-secondary ">{{$d->price}} $</small></p>

                        <!--add to cart-->
                        <form action="{{route('client.updateitem',$d->id)}}" method="post">
                            @csrf
                            <div class="col-5 mt-4">
                                <input style="width:100px;" type="number" value="{{old('qte',$d->qte)}}" required class="form-control" min="1" name="qte">
                            </div>
                            <div class="row pt-3">
                                <div class="col-2"><button class="btn btn-primary" type="submit" style="margin-left: 140px;">Modifier</button></div>
                                <div class="col-2"><a class="btn btn-danger" href="{{route('client.card')}}">Annuler</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
</body>
</html>