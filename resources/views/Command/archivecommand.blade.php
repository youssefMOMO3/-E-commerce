@extends('Admin.__product')

@section('content')




<table class="table mt-2">
    <thead style="text-align: center">
        <tr>
            <th scope="col">#</th>
            <th>name</th>
            <th scope="col">phone</th>
            <th scope="col">address</th>
            <th scope="col">qte</th>
            <th scope="col">price</th>
            <th scope="col">statuscmd</th>
            <th scope="col">statuspay</th>
            <th scope="col">dateLiv</th>
            <th scope="col">status</th>
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
