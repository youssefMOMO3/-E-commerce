{{-- Olde Code  --}}
    {{-- @extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection --}}






@extends("layouts.main")
@section("content")
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            
                            <a href="{{url("/")}}" class="">
                                <h3  align="center" class="text-primary"><i class="fa fa-hashtag me-2"></i>Nestlé-Shop</h3>
                            </a>
                        </div>
                 
                        <h3 align="center">S'inscrire</h3>
                        <hr>
                        @error('email')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>There is a problem !!</strong> {{$message}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @enderror
                        @error('password')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>There is a problem !!</strong> {{$message}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @enderror
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="floatingText" placeholder="jhondoe">
                            <label for="floatingText">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" value="{{ old('email') }}" required autocomplete="email"   placeholder="E-mail" >
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('adriss') is-invalid @enderror" id="floatingInput" name="adriss" value="{{ old('email') }}" required autocomplete="email"   placeholder="E-mail" >
                            <label for="floatingInput">Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="floatingInput" name="phone" value="{{ old('email') }}" required autocomplete="email"   placeholder="E-mail" >
                            <label for="floatingInput">Phone</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="floatingInput" name="age" value="{{ old('email') }}" required autocomplete="email"   placeholder="E-mail" >
                            <label for="floatingInput">age</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="password" required class="form-control" id="floatingPassword" placeholder="Password" autocomplete="new-password">
                            <label for="floatingPassword">Password</label>

                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Comfirme Password</label>

                        </div>
                        
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        <hr>
                        <p class="text-center mb-0">Already have an Account? <a href="{{route("login")}}">Sign In</a></p>
                    </div>
                </form> 
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>
@endsection
