<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-4">
        <button type="button" class="btn btn-primary">
            <i class="bi bi-arrow-left-short"></i>
            <a href="{{route('admin.profile')}}" style='color:white'>Go back</a>
        </button>
        <div class="modal-header">
            <h5 class="modal-title">Informations de profil</h5>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{route('admin.profile.store')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="check" value="" class="check_avatar">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <i class="bi bi-x-circle remove-button"></i>

                            <div class="profile-img-wrap edit-img">
                                @if(Auth::user()->avatar)
                                    <img class="inline-block" src="{{Storage::url('public/'.Auth::user()->avatar)}}" alt="user-profile">
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
                            <!-- <div class="col-md-6">
													<div class="form-group">
														<label>First Name</label>
														<input type="text" class="form-control" value="{{Auth::user()->	name}}">
													</div>
												</div> -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Birth Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" name="bithdate" type="date" value="{{Auth::user()->bithdate}}">
                                        @error('bithdate')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="email" type="email" value="{{Auth::user()->email}}">
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
                            <input type="text" name="adriss" class="form-control" value="{{Auth::user()->adriss}}">
                            @error('address')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="city" class="form-control" value="{{Auth::user()->city}}">
                            @error('city')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" name="contry" class="form-control" value="{{Auth::user()->contry}}">
                            @error('country')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pin Code</label>
                            <input type="text" name="pinecode" class="form-control" value="{{Auth::user()->pinecode}}">
                            @error('pincode')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone" class="form-control" value="{{Auth::user()->phone}}">
                            @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" >

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Confirm Password </label>
                            <input type="password" class="form-control" name="password_confirmation" >
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>



                </div>
                <div class="submit-section">
                    <button class="btn btn-primary submit-btn">Save</button>
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