@extends('Admin.__product')

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
          <a href="{{route('Produits.edit',$row->id)}}" class="btn btn-primary">Modifier</a>
          <a href='{{route("Produits.delete",$row->id)}}' class="btn btn-danger">supprimer</a>
          <a href="{{route('Produits.display',$row->id)}}" class="btn btn-success">Detail</a>

          </td>
      </tr>
    @endforeach
    
    </tbody>
  </table>
@endsection
