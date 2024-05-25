@extends('Admin.__message')
@section('content')

    <table class="table">
        <thead style="text-align: center">
        <tr>
            <th >Avatar</th>
            <th scope="col">nom</th>
            <th scope="col">Suject</th>
            <th scope="col">E-mail</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody style="text-align: center">
        @foreach($message as $row)
            <tr style="text-align: center">

                <td><img style="border-radius: 50%;width:28px ;" alt="user-profile" src="{{asset('img/OIP.png')}}"></td>
                <td>{{$row->name}}</td>
                <td><textarea class="form-control bg-white" readonly>
                        {{$row->suject}}
                    </textarea>
                </td>
                <td>{{$row->email}}</td>

                <td>
                    <textarea  class="form-control bg-white" readonly>{{$row->description}}</textarea>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection