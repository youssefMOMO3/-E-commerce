
    <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{url('/')}}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">Nestlé Shop</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        @if(Auth::user()->avatar)
                            <img class="rounded-circle" src="{{Storage::url(Auth::user()->avatar)}}" alt="" style="width: 40px; height: 40px;">
                        @else
                            <img class="rounded-circle"  alt="user-profile" src="{{asset('img/OIP.png')}}" style="width: 40px; height: 40px;"></a>
                        @endif
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{Auth::user()->name}}</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{url('/'.Auth::user()->role.'/dashbord')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>tableau de bord</a>
                    <!-- Start Commande layout-->
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-bag-shopping me-2"></i>Les Commandes</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('Commond.index')}}" class="dropdown-item">Toute les commande</a>
                            <a href="{{route('Commond.livree')}}" class="dropdown-item">Commandes Livrées</a>
                            <a href="{{route('Commond.softDelet')}}" class="dropdown-item">Archive Des Commandes</a>
                        </div>
                    </div>
                    <!-- End Orders layout-->

                    <!-- Start Products layout-->
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-sharp fa-solid fa-box-open me-2"></i>Les Produit</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('Produits.index')}}" class="dropdown-item">Liste Des Produits</a>
                            <a href="{{route('Produits.softDelet')}}" class="dropdown-item">Produits Supprimés</a>
                        </div>
                    </div>
                    <!-- End Products layout-->

                    <!-- Start Clients layout-->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-sharp fa-solid fa-user-group me-2"></i>Clients</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('admin.list')}}" class="dropdown-item">Liste Des Client</a>
                            <a href="{{route('admin.listnoirC')}}" class="dropdown-item">Liste Noire Des Clients</a>
                        </div>
                    </div>
                    <!-- Start Clients layout-->
                    <!-- Start compte layout-->
                    <!-- Start Comptes layout-->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-users  me-2"></i>Les Comptes</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('comptes.index')}}" class="dropdown-item">Liste Des comptes</a>
                            <a href="{{route('comptes.listnoire')}}" class="dropdown-item">Liste Noire</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-comment me-2"></i>Les Messages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('admin.toutmessage')}}" class="dropdown-item">Liste Des Messages</a>
                        </div>
                    </div>
                    <!-- Start Comptes layout-->
                    <!-- End compte layout-->
                </div>
            </nav>
        </div>
    <!-- Sidebar End -->
