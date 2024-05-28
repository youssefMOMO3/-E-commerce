@extends('Admin.__product')

@section('content')

{{--<a href="{{route('Produits.create')}}" class="btn btn-primary"></a>--}}


<table class="table mt-2">
    <thead style="text-align: center">
      <tr>
        <th scope="col">Id</th>
        <th >name</th>
        <th scope="col">phone</th>
        <th scope="col">address</th>
        <th scope="col">qte</th>
        <th scope="col">price</th>
        <th scope="col">statuscmd</th>
        <th scope="col">statuspay</th>
        <th scope="col">dateLiv</th>
        <th scope="col">Action</th>
        
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
          <a href='{{route("Commond.delete",$row->id)}}' class="btn btn-danger">supprimer</a>
         
          </td>
      </tr>
    @endforeach
    
   
        
   
@endsection
