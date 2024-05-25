@extends('Admin.__product')

@section('content')




<table class="table mt-2">
    <thead style="text-align: center">
      <tr>
        <th scope="col">#</th>
        <th >avatar</th>
        <th scope="col">nom</th>
        <th scope="col">prix</th>
        <th scope="col">Qte</th>
        <th scope="col">Status</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody style="text-align: center">
        @foreach($data as $row)
      <tr>
        <th scope="row">{{$row->id}}</th>
        <td><img src='{{asset("images/product/$row->avatar")}}' class="img-thumbnail text-center" style="width: 70px; height:70px;"></td>
        <td>{{$row->name}}</td>
        <td>{{$row->price}}</td>
        <td>{{$row->Qte}}</td>
        <td class="text-danger">Deleted</td>
        <td><a href="{{route('Produits.Forcedestroy',$row->id)}}" class="btn btn-danger" ><i class="bi bi-trash-fill"></i></a> <a href='{{route("Produits.rolleback",$row->id)}}' class="btn btn-primary"><i class="bi bi-arrow-counterclockwise"></i></a></td>
      </tr>
    @endforeach

    </tbody>
  </table>
@endsection
