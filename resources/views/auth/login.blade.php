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

        <!-- Connexion Début -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="{{url("/")}}" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Nestlé-Shop</h3>
                            </a>
                        </div>
                        <h3 align="center">Se connecter</h3>
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
                        <form class="form w-100" id="kt_sign_in_form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" value="{{ old('email') }}" required autofocus placeholder="name@example.com">
                                <label for="floatingInput">Adresse e-mail</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Mot de passe">
                                <label for="floatingPassword">Mot de passe</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        <b>{{ __('Se souvenir de moi') }}</b>
                                    </label>
                                </div>
                            </div>
                              <!--begin::Link-->
                              <a  href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">Mot de passe oublié ?</a>
                              <!--end::Link-->

                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4 mt-4">Se connecter</button>
                        </form>
                        <hr>
                        <p class="text-center mb-0">Vous n'avez pas de compte ? <a href="{{route("register")}}">S'inscrire</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Connexion Fin -->
    </div>

@endsection
