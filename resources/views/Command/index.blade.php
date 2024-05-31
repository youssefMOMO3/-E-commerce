@extends('Admin.__product')

@section('content')

{{--<a href="{{route('Produits.create')}}" class="btn btn-primary"></a>--}}


<table class="table mt-2">
    <thead style="text-align: center">
      <tr>
        <th scope="col">Id</th>
        <th>Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Quantité</th>
        <th scope="col">Prix</th>
        <th scope="col">Statut Cmd</th>
        <th scope="col">Statut Pay</th>
        <th scope="col">Date Livr</th>
        <th scope="">Action</th>
        
      </tr>
    </thead>
    <tbody style="text-align: center">
     
        @foreach($data as $row)
        
      <tr style="text-align: center">
        <th scope="row">{{$row->id}}</th>
        <td>{{$row->username}}</td>
        <td>{{$row->phone}}</td>
        <td>{{$row->adriss}}</td>
        <td>{{$row->qte}}</td>
        <td>{{$row->price}}</td>
        <td> {{$row->statuscmd}}</td>
       
        
        <td>{{$row->statuspay}}</td>
        <td>@if($row->dateLiv ===null)
              -
          @else
              {{$row->dateLiv}}
        @endif
        </td>
      
        <td>
          <a href="{{route('Commond.edit',$row->id)}}" class="btn btn-primary">Modifier</a>
          <a href='{{route("Commond.delete",$row->id)}}' class="btn btn-danger">Supprimer</a>
         
          </td>
      </tr>
    @endforeach
    
   
        
   
@endsection
