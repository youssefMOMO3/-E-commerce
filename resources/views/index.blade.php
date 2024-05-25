<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nestlé Shop | welcome</title>
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
                        <a href="#Accueil" class="nav-item nav-link active">Accueil</a>
                        <a href="{{route('client.index')}}" class="nav-item nav-link active">Boutique</a>
                        <a href="#À-propos" class="nav-item nav-link">À propos</a>
                        <a href="#Contactez-nous" class="nav-item nav-link">Contactez-nous</a>
                    </div>
                    @if(Auth::check())
                        <a href="{{url("/".Auth::user()->role."/dashbord")}}" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Home</a>
                    @else
                        <a href="{{route('login')}}" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Se connecter</a>
                        <a href="{{route('register')}}" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">S'inscrire</a>
                    @endif
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header" id="Accueil">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">La première plateforme qui vend des téléphones de qualité câline</h1>
                            <button class="btn btn-dark me-2 " style="margin-left:230px;width: 150px;border-radius: 8px ">
                                <a href="{{route('client.index')}}" style="text-decoration: none" class="text-white">Commencez<i class="fa-solid fa-play" style="margin-left: 6px"></i></a>
                            </button>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid rounded animated zoomIn" src="{{asset('img/Ness.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Feature Start -->
{{--        <div class="container-xxl py-6">--}}
{{--            <div class="container">--}}
{{--                <div class="row g-4">--}}
{{--                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                        <div class="feature-item bg-light rounded text-center p-5">--}}
{{--                            <i class="fa fa-4x fa-edit text-primary mb-4"></i>--}}
{{--                            <h5 class="mb-3">Fully Customizable</h5>--}}
{{--                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                        <div class="feature-item bg-light rounded text-center p-5">--}}
{{--                            <i class="fa fa-4x fa-sync text-primary mb-4"></i>--}}
{{--                            <h5 class="mb-3">App Integration</h5>--}}
{{--                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">--}}
{{--                        <div class="feature-item bg-light rounded text-center p-5">--}}
{{--                            <i class="fa fa-4x fa-draw-polygon text-primary mb-4"></i>--}}
{{--                            <h5 class="mb-3">Drag And Drop</h5>--}}
{{--                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Feature End -->


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


        <!-- Overview Start -->
{{--        <div class="container-xxl bg-light my-6 py-5" id="overview">--}}
{{--            <div class="container">--}}
{{--                <div class="row g-5 py-5 align-items-center">--}}
{{--                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                        <img class="img-fluid rounded" src="{{asset('img/overview-1.jpg')}}">--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <h1 class="mb-0">01</h1>--}}
{{--                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>--}}
{{--                            <h5 class="mb-0">App Integration</h5>--}}
{{--                        </div>--}}
{{--                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>--}}
{{--                        <p><i class="fa fa-check-circle text-primary me-3"></i>Fully customizable</p>--}}
{{--                        <p><i class="fa fa-check-circle text-primary me-3"></i>User friendly interface</p>--}}
{{--                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>More effective & poerwfull</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row g-5 py-5 align-items-center flex-column-reverse flex-lg-row">--}}
{{--                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <h1 class="mb-0">02</h1>--}}
{{--                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>--}}
{{--                            <h5 class="mb-0">App Customization</h5>--}}
{{--                        </div>--}}
{{--                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>--}}
{{--                        <p><i class="fa fa-check-circle text-primary me-3"></i>Fully customizable</p>--}}
{{--                        <p><i class="fa fa-check-circle text-primary me-3"></i>User friendly interface</p>--}}
{{--                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>More effective & poerwfull</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                        <img class="img-fluid rounded" src="{{asset('img/overview-2.jpg')}}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row g-5 py-5 align-items-center">--}}
{{--                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                        <img class="img-fluid rounded" src="{{asset('img/overview-3.jpg')}}">--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">--}}
{{--                        <div class="d-flex align-items-center mb-4">--}}
{{--                            <h1 class="mb-0">03</h1>--}}
{{--                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>--}}
{{--                            <h5 class="mb-0">App Modification</h5>--}}
{{--                        </div>--}}
{{--                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>--}}
{{--                        <p><i class="fa fa-check-circle text-primary me-3"></i>Fully customizable</p>--}}
{{--                        <p><i class="fa fa-check-circle text-primary me-3"></i>User friendly interface</p>--}}
{{--                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>More effective & poerwfull</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Overview End -->


        <!-- Advanced Feature Start -->
{{--        <div class="container-xxl py-6" id="features">--}}
{{--            <div class="container">--}}
{{--                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">--}}
{{--                    <h1 class="mb-3">Advanced Features</h1>--}}
{{--                    <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>--}}
{{--                </div>--}}
{{--                <div class="row g-4">--}}
{{--                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                        <div class="advanced-feature-item text-center rounded py-5 px-4">--}}
{{--                            <i class="fa fa-edit fa-3x text-primary mb-4"></i>--}}
{{--                            <h5 class="mb-3">Fully Customizable</h5>--}}
{{--                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                        <div class="advanced-feature-item text-center rounded py-5 px-4">--}}
{{--                            <i class="fa fa-sync fa-3x text-primary mb-4"></i>--}}
{{--                            <h5 class="mb-3">App Integration</h5>--}}
{{--                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">--}}
{{--                        <div class="advanced-feature-item text-center rounded py-5 px-4">--}}
{{--                            <i class="fa fa-laptop fa-3x text-primary mb-4"></i>--}}
{{--                            <h5 class="mb-3">High Resolution</h5>--}}
{{--                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">--}}
{{--                        <div class="advanced-feature-item text-center rounded py-5 px-4">--}}
{{--                            <i class="fa fa-draw-polygon fa-3x text-primary mb-4"></i>--}}
{{--                            <h5 class="mb-3">Drag And Drop</h5>--}}
{{--                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Advanced Feature End -->


        <!-- Facts Start -->
{{--        <div class="container-xxl bg-primary my-6 py-6 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--            <div class="container">--}}
{{--                <div class="row g-4">--}}
{{--                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">--}}
{{--                        <i class="fa fa-cogs fa-3x text-white mb-3"></i>--}}
{{--                        <h1 class="mb-2" data-toggle="counter-up">7264</h1>--}}
{{--                        <p class="text-white mb-0">Active Install</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">--}}
{{--                        <i class="fa fa-users fa-3x text-white mb-3"></i>--}}
{{--                        <h1 class="mb-2" data-toggle="counter-up">6521</h1>--}}
{{--                        <p class="text-white mb-0">Satisfied Clients</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">--}}
{{--                        <i class="fa fa-certificate fa-3x text-white mb-3"></i>--}}
{{--                        <h1 class="mb-2" data-toggle="counter-up">729</h1>--}}
{{--                        <p class="text-white mb-0">Award Wins</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">--}}
{{--                        <i class="fa fa-quote-left fa-3x text-white mb-3"></i>--}}
{{--                        <h1 class="mb-2" data-toggle="counter-up">5917</h1>--}}
{{--                        <p class="text-white mb-0">Clients Reviews</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Facts End -->


        <!-- Process Start -->
{{--        <div class="container-xxl py-6">--}}
{{--            <div class="container">--}}
{{--                <div class="row g-5">--}}
{{--                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                        <img class="img-fluid rounded" src="{{asset('img/process.jpg')}}">--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">--}}
{{--                        <h1 class="mb-4">Three Simple Steps To Start Working With</h1>--}}
{{--                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>--}}
{{--                        <ul class="process mb-0">--}}
{{--                            <li>--}}
{{--                                <span><i class="fa fa-cog"></i></span>--}}
{{--                                <div>--}}
{{--                                    <h5>Install the Software</h5>--}}
{{--                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <span><i class="fa fa-address-card"></i></span>--}}
{{--                                <div>--}}
{{--                                    <h5>Setup Your Profile</h5>--}}
{{--                                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <span><i class="fa fa-check"></i></span>--}}
{{--                                <div>--}}
{{--                                    <h5>Enjoy The Features</h5>--}}
{{--                                    <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Process End -->


        <!-- Pricing Start -->
{{--        <div class="container-xxl py-6" id="pricing">--}}
{{--            <div class="container">--}}
{{--                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">--}}
{{--                    <h1 class="mb-3">Pricing Plan</h1>--}}
{{--                    <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>--}}
{{--                </div>--}}
{{--                <div class="row g-4">--}}
{{--                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                        <div class="price-item rounded overflow-hidden">--}}
{{--                            <div class="bg-dark p-4">--}}
{{--                                <h4 class="text-white mt-2">Standard</h4>--}}
{{--                                <div class="text-white">--}}
{{--                                    <span class="align-top fs-4 fw-bold">$</span>--}}
{{--                                    <h1 class="d-inline display-6 text-primary mb-0"> 29.99</h1>--}}
{{--                                    <span class="align-baseline">/ Month</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="p-4">--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-success pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-success pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-success pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>Cross-browser Support</span><i class="fa fa-times text-danger pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>Remove Author's Credit</span><i class="fa fa-times text-danger pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i class="fa fa-times text-danger pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>6 Months Free Support</span><i class="fa fa-times text-danger pt-1"></i></div>--}}
{{--                                <a href="" class="btn btn-dark rounded-pill py-2 px-4 mt-3">Get Started</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                        <div class="price-item rounded overflow-hidden">--}}
{{--                            <div class="bg-primary p-4">--}}
{{--                                <h4 class="text-white mt-2">Professional</h4>--}}
{{--                                <div class="text-white">--}}
{{--                                    <span class="align-top fs-4 fw-bold">$</span>--}}
{{--                                    <h1 class="d-inline display-6 text-dark mb-0"> 49.99</h1>--}}
{{--                                    <span class="align-baseline">/ Month</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="p-4">--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-success pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-success pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-success pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>Cross-browser Support</span><i class="fa fa-check text-success pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>Remove Author's Credit</span><i class="fa fa-check text-success pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i class="fa fa-times text-danger pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>6 Months Free Support</span><i class="fa fa-times text-danger pt-1"></i></div>--}}
{{--                                <a href="" class="btn btn-primary rounded-pill py-2 px-4 mt-3">Get Started</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">--}}
{{--                        <div class="price-item rounded overflow-hidden">--}}
{{--                            <div class="bg-dark p-4">--}}
{{--                                <h4 class="text-white mt-2">Ultimate</h4>--}}
{{--                                <div class="text-white">--}}
{{--                                    <span class="align-top fs-4 fw-bold">$</span>--}}
{{--                                    <h1 class="d-inline display-6 text-primary mb-0"> 79.99</h1>--}}
{{--                                    <span class="align-baseline">/ Month</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="p-4">--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-success pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-success pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-success pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>Cross-browser Support</span><i class="fa fa-check text-success pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>Remove Author's Credit</span><i class="fa fa-check text-success pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i class="fa fa-check text-success pt-1"></i></div>--}}
{{--                                <div class="d-flex justify-content-between mb-3"><span>6 Months Free Support</span><i class="fa fa-check text-success pt-1"></i></div>--}}
{{--                                <a href="" class="btn btn-dark rounded-pill py-2 px-4 mt-3">Get Started</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Pricing End -->


        <!-- Testimonial Start -->
{{--        <div class="container-xxl py-6" id="testimonial">--}}
{{--            <div class="container">--}}
{{--                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">--}}
{{--                    <h1 class="mb-3">What Our Clients Say</h1>--}}
{{--                    <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>--}}
{{--                </div>--}}
{{--                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                    <div class="testimonial-item bg-light rounded my-4">--}}
{{--                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>--}}
{{--                        <div class="d-flex align-items-center">--}}
{{--                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('img/testimonial-1.jpg')}}" style="width: 65px; height: 65px;">--}}
{{--                            <div class="ps-4">--}}
{{--                                <h5 class="mb-1">Client Name</h5>--}}
{{--                                <span>Profession</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="testimonial-item bg-light rounded my-4">--}}
{{--                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>--}}
{{--                        <div class="d-flex align-items-center">--}}
{{--                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('img/testimonial-2.jpg')}}" style="width: 65px; height: 65px;">--}}
{{--                            <div class="ps-4">--}}
{{--                                <h5 class="mb-1">Client Name</h5>--}}
{{--                                <span>Profession</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="testimonial-item bg-light rounded my-4">--}}
{{--                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>--}}
{{--                        <div class="d-flex align-items-center">--}}
{{--                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{asset('img/testimonial-3.jpg')}}" style="width: 65px; height: 65px;">--}}
{{--                            <div class="ps-4">--}}
{{--                                <h5 class="mb-1">Client Name</h5>--}}
{{--                                <span>Profession</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Testimonial End -->


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
                                <h5 class="mb-0">youssef.berrissoul@usmba.ac.ma</h5>
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
                        <p><i class="fa fa-envelope me-3"></i>youssef@ma.nestle.com</p>
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
{{--                    <div class="col-md-6 col-lg-3">--}}
{{--                        <p class="section-title text-white h5 mb-4">Community<span></span></p>--}}
{{--                        <a class="btn btn-link" href="">Career</a>--}}
{{--                        <a class="btn btn-link" href="">Leadership</a>--}}
{{--                        <a class="btn btn-link" href="">Strategy</a>--}}
{{--                        <a class="btn btn-link" href="">History</a>--}}
{{--                        <a class="btn btn-link" href="">Components</a>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6 col-lg-3">--}}
{{--                        <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>--}}
{{--                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>--}}
{{--                        <div class="position-relative w-100 mt-3">--}}
{{--                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">--}}
{{--                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
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