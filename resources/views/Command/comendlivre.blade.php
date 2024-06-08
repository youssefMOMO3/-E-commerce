@extends('Admin.__product')

@section('content')




<table class="table mt-2">
    <thead style="text-align: center">
      <tr>
        <th scope="col">Id</th>
         <th>Produit</th>
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
        @foreach($livre as $row)
       
      <tr>
        <th scope="row">{{$row->id}}</th>
        <td>{{$row->name}}</td>
        <td>{{$row->phone}}</td>
        <td>{{$row->adriss}}</td>
        {{-- <td>{{$row->product_title}}</td> --}}
        <td>{{$row->qte}}</td>
        <td>{{$row->price}}</td>
        <td class="text-primary">{{$row->statuscmd}}</td>
        <td>{{$row->statuspay}}</td>
        <td>@if($row->dateLiv ===null)
              dd/mm/yy
          @else
              {{$row->dateLiv}}
        @endif</td>
      
        <td>
          {{-- <a href="{{route('Commond.edit',$row->id)}}" class="btn btn-primary">Modifier</a> --}}
          <button type="button" class="btn btn-outline-danger">
            <a href="{{route("Commond.delete",$row->id)}}" style="color: inherit; text-decoration: none;">
              <i class="bi bi-trash"></i>
            </a>
          </button>
          {{-- <a href="{{route('Commond.display',$row->id)}}" class="btn btn-success">Detail</a> --}}

          </td>
      </tr>
      {{-- @endif --}}
    @endforeach
    
    </tbody>
  </table>
@endsection
