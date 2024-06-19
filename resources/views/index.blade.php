<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nestlé | Welcome</title>
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
        /* Style pour les navigateurs basés sur WebKit (Chrome, Safari, Opera, etc.) */
::-webkit-scrollbar {
  width: 30px; /* Largeur de la barre de défilement */
}

::-webkit-scrollbar-track {
  background-color: #d9e9f7; /* Couleur de la piste, proche du bleu de fond */
}

::-webkit-scrollbar-thumb {
  background-color: #0c9eec; /* Couleur de la barre, reprise du bleu foncé du logo */
  border-radius: 30px; /* Arrondir les bords de la barre */
}

::-webkit-scrollbar-thumb:hover {
  background-color: #0c9eec; /* Couleur de la barre au survol, plus foncée */
}

/* Style pour Firefox */
* {
  scrollbar-width: thin; /* Largeur de la barre : thin, auto ou none */
  scrollbar-color: #0c9eec #d9e9f7; /* Couleurs de la barre et de la piste */
}
    </style>
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


       <!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0" id="home">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="m-0">Nestlé Shop</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="#Accueil" class="nav-item nav-link active"><i class="fa fa-home"></i> Accueil</a>
                <a href="{{route('client.index')}}" class="nav-item nav-link active"><i class="fa fa-store"></i> Boutique</a>
                <a href="#À-propos" class="nav-item nav-link"><i class="fa fa-info-circle"></i> À propos</a>
                <a href="#Contactez-nous" class="nav-item nav-link"><i class="fa fa-envelope"></i> Contact</a>
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

    <div class="container-xxl bg-primary hero-header" id="Accueil">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated slideInDown">Bienvenue sur votre plateforme exclusive Nestlé : des produits de qualité à des prix avantageux rien que pour vous !</h1>
                    @if(Auth::check())
                    <a href="{{url('/'.Auth::user()->role.'/dashbord')}}" class="btn btn-dark me-2 text-white" style="margin-left:230px; width: 150px; border-radius: 8px; text-decoration: none;">
                        <i class="fa fa-play"></i> Commencez
                    </a>
                @endif
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid rounded animated zoomIn" src="{{asset('img/Ness.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- About Start -->
        <div class="container-xxl py-6" id="À-propos">
            <div class="container">
                <div class="row g-5 flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">Votre Accès Privilégié à la Qualité Nestlé : Des Produits Incontournables à Prix Réduits !</h1>
                        <p class="mb-4">Chez Nestlé, nous croyons en la valorisation de nos employés. C'est pourquoi nous vous offrons un accès exclusif à notre plateforme en ligne, où vous pouvez acheter nos produits emblématiques tels que les biscuits, les chocolats, les cafés et bien plus encore, à des prix avantageux. Rejoignez-nous dès maintenant pour profiter de ces offres spéciales réservées à notre famille Nestlé.</p>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>Avantages de Premier Ordre</h5>
                                <p class="mb-0">En tant qu'employé de Nestlé, vous méritez le meilleur. Notre plateforme vous offre un accès privilégié à une sélection de produits de qualité à des prix réduits, pour vous permettre de profiter pleinement de la gamme Nestlé.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>Support 24/7</h5>
                                <p class="mb-0">Votre satisfaction est notre priorité. Notre équipe d'assistance est disponible 24 heures sur 24, 7 jours sur 7, pour répondre à vos questions et vous accompagner dans l'utilisation de notre plateforme.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid rounded wow zoomIn mt-5" data-wow-delay="0.5s" src="{{asset('img/a.png')}}">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Contact Start -->
        <div class="container-xxl py-6" id="Contactez-nous">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-3">Entrer En Contact</h1>
                        <p class="mb-4">Chez Nestlé, votre avis compte. Nous sommes là pour répondre à vos questions, écouter vos commentaires et vous aider de toutes les manières possibles. N'hésitez pas à nous contacter en utilisant les informations ci-dessous :</p>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Appelez-nous</p>
                                <h5 class="mb-0">+212 06 30 38 81 37</h5>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Envoyez-nous un e-mail</p>
                                <h5 class="mb-0">nestle@ma.nestle.com</h5>
                            </div>
                        </div>
                        <div class="d-flex mb-0">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Notre Bureau</p>
                                <h5 class="mb-0"> 6G76+57X, El Jadida , Maroc</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        @if(Session::has('status'))
                            <div class="alert alert-success" role="alert">
                                {{Session('status')}}
                            </div>
                        @endif
                        <form action="{{route('client.contact-nous')}}" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Votre Nom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Votre e-mail</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" name="sujet" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Sujet</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="description" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Envoyer Le message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-body footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Address<span></span></p>
                        <p><i class="fa fa-map-marker-alt me-3"></i>6G76+57X,El Jadida,Maroc</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+212 06 30 38 81 37</p>
                        <p><i class="fa fa-envelope me-3"></i>nestle@ma.nestle.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                        <a class="btn btn-link" href="#Accueil">Accueil</a>
                        <a class="btn btn-link" href="#À-propos">À-propos</a>
                        <a class="btn btn-link" href="#Contactez-nous">Contactez-nous</a>
                        {{-- <a class="btn btn-link" href="#">Support</a> --}}
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Nestlé </a>, Tous Droits Réservés.
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="#Accueil">Accueil</a>
                                <a href="#À-propos">À-propos</a>
                                <a href="#Contactez-nous">Contactez-nous</a>
                                <a href="#Contactez-nous">FQA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>