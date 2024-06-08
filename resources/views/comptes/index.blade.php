@extends('Admin.__product')

@section('content')
<style>
  tr{
    text-align: center;
  }
</style>
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-12">
      @if(session("msg"))
      <div class="alert alert-danger  alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> {{session("msg")}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if(session("mss"))
      <div class="alert alert-info  alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> {{session("mss")}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if(session("success"))
      <div class="alert alert-success  alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> {{session("success")}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      
      <div class="bg-light rounded h-100 p-4">
          <h6 class="mb-4">Liste des compte</h6>
          <a href="{{route('comptes.create')}}" class="btn btn-primary"> Add Compte</a>

          <div class="table-responsive">
              <table class="table">
                  <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">Avatar</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Status</th>
                          <th scope="col">phone</th>
                          <th scope="col">role</th>
                          <th scope="col">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $x)
                        <tr>
                            <th scope="row">{{$x->id}}</th>
                            
                                @if($x->avatar)
                                  <td><img style="border-radius: 50%;width:28px ;" alt="user-profile" src="{{Storage::url('public/'.$x->avatar)}}"></td>
                                @else
                                  <td><img style="border-radius: 50%;width:28px ;" alt="user-profile" src="{{asset('img/OIP.png')}}"></a></td>
                                @endif
                            
                            
                            <td>{{$x->name}}</td>
                            <td>{{$x->email}}</td>
                            <td>{{$x->status}}</td>
                            <td>{{$x->phone}}</td>
                            <td>{{$x->role}}</td>
                            <td>
                              <button type="button" class="btn btn-outline-danger">
                                <a href="{{route('comptes.delete', $x->id)}}" style="color: inherit; text-decoration: none;">
                                  <i class="bi bi-trash"></i>
                                </a>
                              </button>
                              <button type="button" class="btn btn-outline-secondary">
                                <a href="{{route('comptes.update',$x->id)}}">
                                  <i class="bi bi-pencil-square"></i>
                                </a>
                              </button>
                              
                              

                            </td>
                        </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
