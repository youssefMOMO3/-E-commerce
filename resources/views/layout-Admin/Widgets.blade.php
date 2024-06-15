
        <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4" >
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4" style="width: 1090px">
                        <div class="h-100 bg-light rounded p-4"  >
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Messages</h6>
                                <a href="{{route('admin.toutmessage')}}">Afficher tout</a>
                            </div>
                            @foreach($message as $m)
                                <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="{{asset('img/OIP.png')}}" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">{{$m->name}}</h6>
                                        <small>{{$m->created_at->format('d/m/Y h:i:s')}}</small>
                                    </div>
                                    <span>{{$m->suject}}</span>
                                </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-4">

                    </div>
                </div>
            </div>
        <!-- Widgets End -->


