@extends('Admin.__product')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

@section('content')

<a href="{{ route('Produits.create') }}" class="btn btn-primary">
  Ajouter <i class="fas fa-shopping-cart"></i>
</a>



<table class="table">
    <thead style="text-align: center">
      <tr>
        <th scope="col">Id</th>
        <th >avatar</th>
        <th scope="col">nom</th>
        <th scope="col">Categorie</th>
        <th scope="col">prix</th>
        <th scope="col">Qte</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody style="text-align: center">
        @foreach($data as $row)
      <tr>
        <th scope="row">{{$row->id}}</th>
        <td><img src='{{asset("images/product/$row->avatar")}}' class="img-thumbnail text-center" style="width: 70px; height:70px;"></td>
        <td>{{$row->name}}</td>
        <td>{{$row->marke}}</td>
        <td>{{$row->price}}/dh</td>
        <td>@if($row->Qte >0)
              {{$row->Qte}}
          @else
              0
        @endif</td>
        <td>
          <button type="button" class="btn btn-outline-success">
            <a href="{{ route('Produits.edit', $row->id) }}" style="color: inherit; text-decoration: none;">
              <i class="bi bi-pencil-square"></i>
            </a>
          </button>
          <button type="button" class="btn btn-outline-danger">
            <a href="{{ route('Produits.delete', $row->id) }}" style="color: inherit; text-decoration: none;">
              <i class="bi bi-trash"></i>
            </a>
          </button>
          <button type="button" class="btn btn-outline-primary">
            <a href="{{ route('Produits.display', $row->id) }}" style="color: inherit; text-decoration: none;">
              <i class="bi bi-eye"></i>
            </a>
          </button>
          
          </td>
      </tr>
    @endforeach
    
    </tbody>
  </table>
@endsection
