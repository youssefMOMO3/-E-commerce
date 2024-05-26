<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Nestlé | Panier</title>
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
    <div class="container-fluid position-fixed p-5" id="home">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" style="background: #064c4c">
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
                   class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Déconnecter</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
        </nav>
    </div>

    <div class="container-fluid container-responsive">
        <div class="card" style="margin-left: 12px;margin-right: 10px">
            <div class="card-header">
                <a class="btn btn-danger" href="{{route('client.index')}}">Retour</a>
            </div>
            <table class="table table-responsive">
                <tr style="text-align: center">
                    <th>Produit</th>
                    <th>marke</th>
                    <th>Size</th>
                    <th>Couleur</th>
                    <th>qte</th>
                    <th>Prix total</th>
                    <th>Actions</th>
                </tr>
                <form method="post" action="{{route('client.confirme')}}">
                    @csrf
                @foreach($card as $c)
                    <tr style="text-align: center;padding: 10px;color: black;text-align: center">
{{--                        <input type="hidden" name="id[]" value="{{$c->id}}">--}}
                        <td><input  type="text" name="product_title[]" value="{{$c->product_title}}" style="border: none;text-align: center" >
                            </td>
                        <td><input type="text" name="marke[]" value="{{$c->marke}}" style="border: none;text-align: center" readonly></td>
                        <td><input type="text" name="size[]" value="{{$c->size}}" style="border: none;text-align: center" readonly></td>
                        <td><input type="text" name="color[]" value="{{$c->color}}" style="border: none;text-align: center ;width:50px" readonly></td>
                        <td><input type="text" name="qte[]" value="{{$c->qte}}" style="border: none;text-align: center" readonly> </td>
                        <td><input type="text" name="price[]" value="{{$c->qte * $c->price}}$" readonly style="border: none;text-align: center"></td>
                        <td>
                            <a href="{{route('client.delete',$c->id)}}" class="btn btn-danger">supprimer</a>
                            <a href="{{route('client.modifer',$c->id)}}" class="btn btn-primary">modifer</a>
                        </td>

                    </tr>
                @endforeach
            </table>
{{--            <div class="card-footer">--}}
{{--            </div>--}}
        </div>

            <button type="submit" style="margin-left: 620px;width: 250px" class="btn btn-success mt-4">confirmer</button>
            <a href="{{ route('client.monCmd') }}" class="btn btn-primary mt-4">Suivi De Commande</a>
        </form>
    </div>

</body>
</html>
