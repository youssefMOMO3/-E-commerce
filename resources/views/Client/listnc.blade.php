@extends('Admin.__listnoirC')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="text-body">Liste Noire des Clients</h4>
            </div>
            <div class="card-body">
                <nav class="navbar" >
                    <div class="container-fluid mb-3" style="margin-top: 10px">
                        <a class="navbar-brand"></a>
                        <form class="d-flex" action="{{route('admin.listnoirse')}}" method="get">
                            <input style="width: 400px" class="form-control me-2" type="search" placeholder="Search"  name="search">
                            <button class="btn btn-outline-success" type="submit">
                                <i class="fas fa-search"></i>
                              </button>
                        </form>
                    </div>
                </nav>
                <table class="table">
                    <tr style="text-align: center">
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>E-mail</th>
                        <th>téléphone</th>
                        <th>Action</th>
                    </tr>
                    @foreach($client as $c)
                        <tr style="text-align: center">
                            <td>{{$c->name}}</td>
                            <td>{{$c->adriss}}</td>
                            <td>{{$c->email}}</td>
                            <td>{{$c->phone}}</td>
                            <td>
                                <a href="{{route('admin.listblanch', $c->id)}}" class="btn btn-success">Ajouter à la liste des Client </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <span style="margin-left: 500px">{{$client->links()}}</span>
@endsection