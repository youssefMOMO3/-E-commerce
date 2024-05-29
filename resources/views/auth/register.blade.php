@extends("layouts.main")
@section("content")
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Début -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Chargement...</span>
            </div>
        </div>
        <!-- Spinner Fin -->

        <!-- Inscription Début -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="{{url("/")}}" class="">
                                    <h3 align="center" class="text-primary"><i class="fa fa-hashtag me-2"></i>Nestlé-Shop</h3>
                                </a>
                            </div>
                            <h3 align="center">S'inscrire</h3>
                            <hr>
                            @error('email')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Il y a un problème !!</strong> {{$message}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @enderror
                            @error('password')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Il y a un problème !!</strong> {{$message}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @enderror
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="floatingText" placeholder="jhondoe">
                                <label for="floatingText">Nom d'utilisateur</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
                                <label for="floatingInput">Adresse e-mail</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('adriss') is-invalid @enderror" id="floatingInput" name="adriss" value="{{ old('email') }}" required autocomplete="email" placeholder="Adresse">
                                <label for="floatingInput">Adresse</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="floatingInput" name="phone" value="{{ old('email') }}" required autocomplete="email" placeholder="Téléphone">
                                <label for="floatingInput">Téléphone</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="floatingInput" name="age" value="{{ old('email') }}" required autocomplete="email" placeholder="Âge">
                                <label for="floatingInput">Âge</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name="password" required class="form-control" id="floatingPassword" placeholder="Mot de passe" autocomplete="new-password">
                                <label for="floatingPassword">Mot de passe</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" id="floatingPassword" placeholder="Confirmez le mot de passe">
                                <label for="floatingPassword">Confirmez le mot de passe</label>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">S'inscrire</button>
                            <hr>
                            <p class="text-center mb-0">Vous avez déjà un compte ? <a href="{{route("login")}}">  <br>Se connecter</a></p>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
        <!-- Inscription Fin -->
    </div>
@endsection

