@extends('Admin.__product')

@section('content')

<div class="container" >
    <div class="row">
    <div class="col-md-5">
    <div class="project-info-box mt-0">
    <h5>DÉTAILS DU PRODUIT</h5>
    <p class="mb-0" style="overflow:auto;height: auto">{{$data->description}}</p>
    </div>
    <div class="project-info-box">
    <p><b>Nom:</b> {{$data->name}}</p>
    <p><b>Date:</b> {{$data->created_at}}</p>
    <p><b>Size:</b> {{$data->size}}</p>
    <p><b>Quantité:</b> {{$data->Qte}}</p>
    <p class="mb-0"><b>Price:</b>{{$data->price}} $</p>
    </div>
    <div class="project-info-box mt-0 mb-0">
    <p class="mb-0">
    <span class="fw-bold mr-10 va-middle hide-mobile">Partager:</span>
    <a href="#x" class="btn btn-xs btn-facebook btn-circle btn-icon mr-5 mb-0"><i class="fab fa-facebook-f"></i></a>
    <a href="#x" class="btn btn-xs btn-twitter btn-circle btn-icon mr-5 mb-0"><i class="fab fa-twitter"></i></a>
    <a href="#x" class="btn btn-xs btn-pinterest btn-circle btn-icon mr-5 mb-0"><i class="fab fa-pinterest"></i></a>
    <a href="#x" class="btn btn-xs btn-linkedin btn-circle btn-icon mr-5 mb-0"><i class="fab fa-linkedin-in"></i></a>
    </p>
    </div>
    </div>

    <div class="col-md-7">
    <img src='{{asset("images/product/$data->avatar")}}' alt="project-image" class="rounded">
    <div class="project-info-box">
    <p><b>Categorie :</b> {{$data->marke}}</p>
    <p><b>Identifiant :</b> {{$data->id}}</p>
    </div>
    </div>
    </div>
    </div>
@endsection
