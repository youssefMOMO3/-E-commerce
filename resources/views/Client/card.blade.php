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
      {{-- title icon --}}
      <link rel="icon" type="image/png" href="{{asset('img/LogoN.png')}}"/>
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
        </div>
    </nav>

            {{-- <a href="{{route('client.index')}}" class="btn btn-warning" style="margin-left: 8px; text-decoration: none">
                Retour
            </a>         --}}
        </div>
    </nav>
</div>
<body>


    <div class="container-fluid container-responsive">
        <div class="card" style="margin-left: 12px;margin-right: 10px">
            <div class="card-header">
                <a href="{{ route('client.index')}}" class="btn btn-danger">
                    <i class="fas fa-arrow-left"></i> 
                </a>
            </div>
            <table class="table table-responsive">
                <tr style="text-align: center">
                    <th>Id Produit</th>
                    <th>Produit</th> 
                    <th>Categorie</th>
                    <th>Taille</th>
                    <th>Quantité</th>
                    <th>Prix total</th>
                    <th>Actions</th>                   
                </tr>
                <form method="post" action="{{route('client.confirme')}}">
                    @csrf
                    @foreach($card as $c)
                        <tr style="text-align: center;padding: 10px;color: black;text-align: center">
                            <td><input  type="text" name="id[]" value="{{$c->id}}" style="border: none;text-align: center" ></td>
                            <td><input  type="text" name="product_title[]" value="{{$c->product_title}}" style="border: none;text-align: center" ></td>
                            <td><input type="text" name="marke[]" value="{{$c->marke}}" style="border: none;text-align: center" readonly></td>
                            <td><input type="text" name="color[]" value="{{$c->color}}" style="border: none;text-align: center ;width:50px" readonly></td>
                            <td><input type="text" name="qte[]" value="{{$c->qte}}" style="border: none;text-align: center" readonly> </td>
                            <td><input type="text" name="price[]" value="{{$c->qte * $c->price}}DH" readonly style="border: none;text-align: center"></td>
     <td class="d-flex gap-2">
                                <a href="{{route('client.modifer',$c->id)}}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="{{route('client.delete',$c->id)}}"  class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>                 {{--            <div class="card-footer">--}}
                {{--            </div>--}}
                        </div>
                
                            <button type="submit" style="margin-left: 550px;width: 250px" class="btn btn-success mt-4">confirmer</button>
                        </form>
                    </div>
                
                </body>
                </html>