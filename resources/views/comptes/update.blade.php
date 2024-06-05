<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Nestlé | Update</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('../../public/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

   {{-- title icon --}}
   <link rel="icon" type="image/png" href="{{asset('img/LogoN.png')}}"/>

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> -->
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
		
		<!-- Tagsinput CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
    

</head>
<body>

    
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        <!-- Spinner End -->

        @include("layout-Admin.sidebare")

        <!-- Content Start -->
            <div class="content">

                @include("layout-Admin.navebare")

                <div class="container-fluid pt-4 px-4">
                    <div class="bg-light rounded-top p-4">
                        <button type="button" class="btn btn-primary">
                            <i class="bi bi-arrow-left-short"></i>
                            <a href="{{route('comptes.index')}}" style='color:white'>Go back</a>
                        </button>
                        <div class="modal-header">
                            <h5 class="modal-title">Update Accont</h5>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{route('comptes.storeup',$user->id)}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="check" value="" class="check_avatar">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <i class="bi bi-x-circle remove-button"></i>
                
                                            <div class="profile-img-wrap edit-img">
                                                
                                            @if($user->avatar)
                                                <img class="inline-block" src="{{Storage::url('public/'.$user->avatar)}}" alt="user-profile">
                                            @else
                                                <img class="inline-block"  alt="user-profile" src="{{asset('img/OIP.png')}}" alt="user-profile"></a>
                                            @endif
                        
                
                                                <div class="fileupload btn">
                                                    <span class="btn-text">edit</span>
                                                    <input class="upload" name="avatar" type="file" accept="image/png, image/gif, image/jpeg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" name="name" value="{{ $user->name ??old('name') }}">
                                                    @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Birth Date</label>
                                                    <div class="cal-icon">
                                                        <input class="form-control datetimepicker" name="bithdate" type="date" value="{{ $user->bithdate ?? old('bithdate')}}">
                                                        @error('bithdate')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" name="email" type="email" value="{{ $user->email ?? old('email')}}">
                                                    @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="adriss" class="form-control" value="{{ $user->adriss ?? old('adriss')}}">
                                            @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name="city" class="form-control" value="{{ $user->city ?? old('city')}}">
                                            @error('city')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" name="contry" class="form-control" value="{{ $user->contry ?? old('contry')}}">
                                            @error('country')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pin Code</label>
                                            <input type="text" name="pinecode" class="form-control" value="{{ $user->pinecode ?? old('pinecode')}}">
                                            @error('pincode')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" name="phone" class="form-control" value="{{$user->phone ?? old('phone')}}">
                                            @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password"  >
                
                                        </div>
                                    </div>
                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Confirm Password </label>
                                            <input type="password" class="form-control" name="password_confirmation"  >
                                            @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select name="role" class="form-select mb-3" aria-label="Default select example">
                                                <option @if($user->role == "client") selected @endif value="client">client</option>
                                                <option @if($user->role == "admin") selected @endif value="admin">admin</option>
                                            </select>
                                            
                                            @error('role')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-select mb-3" aria-label="Default select example">
                                                <option @if($user->status == "active") selected @endif value="active">Active</option>
                                                <option @if($user->status == "desactive") selected @endif value="desactive">desactive</option>
                                            </select>
                                            
                                            @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                
                
                
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Update</button>
                                </div>
                            </form>
                        </div>
                
                    </div>
                
                </div>
                
                <script>
                    var check = document.querySelector('.check_avatar');
                    check.value = "No change";
                    // Get the file input element
                    var fileInput = document.querySelector('.upload');
                
                    // Add an event listener to listen for file selection
                    fileInput.addEventListener('change', function(event) {
                        var file = event.target.files[0];
                
                        if (file) {
                            // Create a FileReader object
                            var reader = new FileReader();
                
                            // Set up the FileReader onload function
                            reader.onload = function(e) {
                                // Update the src attribute of the img element
                                var img = document.querySelector('.inline-block');
                                img.src = e.target.result;
                            };
                
                            // Read the file as a data URL
                            reader.readAsDataURL(file);
                        }
                    });
                
                    // Get the remove button element
                    var removeButton = document.querySelector('.remove-button');
                
                
                
                    // Add an event listener to the remove button
                    removeButton.addEventListener('click', function() {
                        var img = document.querySelector('.inline-block');
                
                        img.src = '{{asset("img/OIP.png")}}';
                        // Clear the file input value and reset the image source
                        // fileInput.value = 'No image';
                        check.value = "Somthing was happened";
                
                    });
                
                
                
                </script>
                
                
                @include("layout-Admin.Footer")

            </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- Start JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset("lib/chart/chart.min.js")}}"></script>
        <script src="{{asset("lib/easing/easing.min.js")}}"></script>
        <script src="{{asset("lib/waypoints/waypoints.min.js")}}"></script>
        <script src="{{asset("lib/owlcarousel/owl.carousel.min.js")}}"></script>
        <script src="{{asset("lib/tempusdominus/js/moment.min.js")}}"></script>
        <script src="{{asset("lib/tempusdominus/js/moment-timezone.min.js")}}"></script>
        <script src="{{asset("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js")}}"></script>
        </div>
        <!-- Template Javascript -->
        <script src="{{asset("js/main.js")}}"></script>
    {{-- END JavaScript Libraries --}}

</body>
</html>