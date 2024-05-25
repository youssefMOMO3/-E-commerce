
<!-- Page Header -->
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Profile</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/'.Auth::user()->role.'/dashbord')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ul>
        </div>
    </div>
</div>
<!-- /Page Header -->



<!-- Profile Start -->
<div class="container-fluid pt-4 px-4">
    <div class="card mb-0">
        <div class="card-body bg-light">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        <div class="profile-img-wrap" style="border-radius: 50%;">
                            <div class="profile-img ">
                                <a href="#">
                                    @if(Auth::user()->avatar)
                                        <img  alt="user-profile" src="{{Storage::url('public/'.Auth::user()->avatar)}}"></a>
                                @else
                                    <img  alt="user-profile" src="{{asset('img/OIP.png')}}"></a>
                                @endif
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 mb-0">{{Auth::user()->name}}</h3>
                                        <h6 class="text-muted">{{Auth::user()->role}}</h6>
                                        <!-- <small class="text-muted">{{Auth::user()->gender}}</small> -->
                                        <div class="staff-id">{{Auth::user()->contry}}</div>
                                        <div class="staff-id">{{Auth::user()->city}}</div>
                                        <div class="small doj text-muted">Date of Join : {{Auth::user()->created_at}}</div>
                                        <!-- <div class="staff-msg"><a class="btn btn-custom" href="chat.html">Send Message</a></div> -->

                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Phone:</div>
                                            <div class="text"><a href="">{{Auth::user()->phone}}</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Email:</div>
                                            <div class="text"><a href="">{{Auth::user()->email}}</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Birthday:</div>
                                            <div class="text">{{Auth::user()->bithdate}}</div>
                                        </li>
                                        <li>
                                            <div class="title">Address:</div>
                                            <div class="text">{{Auth::user()->adriss}}</div>
                                        </li>
                                        <li>
                                            <div class="title">Status:</div>
                                            <div class="text">{{Auth::user()->status}}</div>
                                        </li>
                                        <li>
                                            <div class="title">Pin Code :</div>
                                            <div class="text">{{Auth::user()->pinecode}}</div>
                                        </li>
                                        <!-- <li>
                                            <div class="title">Reports to:</div>
                                            <div class="text">
                                               <div class="avatar-box">
                                                  <div class="avatar avatar-xs">
                                                     <img src="assets/img/profiles/avatar-16.jpg" alt="">
                                                  </div>
                                               </div>
                                               <a href="profile.html">
                                                    Jeffery Lalor
                                                </a>
                                            </div>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pro-edit">
                            <a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="{{route('admin.profile.edite')}}">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile End -->



