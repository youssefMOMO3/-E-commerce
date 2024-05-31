@extends('Admin.__product')

@section('content')




<table class="table mt-2">
    <thead style="text-align: center">
        <tr>
          <th scope="col">Id</th>
          <th>Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Address</th>
          <th scope="col">Quantité</th>
          <th scope="col">Prix</th>
          <th scope="col">Statut-commd</th>
          <th scope="col">Statut-pay</th>
          <th scope="col">Date-Livr</th>
          <th scope="col">Statut</th>
          <th scope="">Action</th>
            
          </tr>
    </thead>
    <tbody style="text-align: center">
        @foreach($data as $row)
     
      <tr>
        <th scope="row">{{$row->id}}</th>
        <td>{{$row->username}}</td>
        <td>{{$row->phone}}</td>
        <td>{{$row->adriss}}</td>
        {{-- <td>{{$row->product_title}}</td> --}}
        <td>{{$row->qte}}</td>
        <td>{{$row->price}}</td>
        <td class="text-primary">{{$row->statuscmd}}</td>
        <td>{{$row->statuspay}}</td>
        <td>{{$row->dateLiv ? null : "-"}}</td>
        <td class="text-danger">Deleted</td>
            <td>
              <a href="{{route('Commond.Forcedestroy',$row->id)}}" class="btn btn-danger" ><i class="bi bi-trash-fill"></i></a>
              <a href='{{route("Commond.rolleback",$row->id)}}' class="btn btn-primary"><i class="bi bi-arrow-counterclockwise"></i></a></td>

      </tr>
    @endforeach

    </tbody>
  </table>
@endsection
