@extends('Admin.__listclient')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="text-body">Nestlé | List des Client</h4>
            </div>
            <div class="card-body">
                <nav class="navbar" >
                    <div class="container-fluid mb-3" style="margin-top: 10px">
                        <a class="navbar-brand"></a>
                        <form class="d-flex" action="{{route('admin.sClient')}}" method="get">
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
                            <button type="button" class="btn btn-outline-danger">
                                <a href="{{ route('admin.listnoir', $c->id) }}" style="color: inherit; text-decoration: none;">
                                  <i class="bi bi-x-circle"></i>
                                </a>
                              </button>
                              <button type="button" class="btn btn-outline-success">
                                <a href="{{ route('admin.clientDetails', ['id' => $c->id]) }}" style="color: inherit; text-decoration: none;">
                                  <i class="bi bi-info-circle"></i>
                                </a>
                              </button>
                              
                                                    
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <span style="margin-left: 500px">{{$client->links()}}</span>

@endsection


                            