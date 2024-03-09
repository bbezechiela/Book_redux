@include('partials.__header', [
    'title' => 'Profile | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/admin-profile-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0 body">
    <div id="adminsidebar" class="adminsidebar p-2 min-vh-100 shadow">
        <x-adminsidebar />
    </div>
    <div id="content" class="pe-0 content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4 top-nav">
            <div class="w-100 d-flex mt-1 p-1">
                <p class="text-admin">Admin</p>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    {{-- <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <input class="form-control rounded-3 search-field" type="text" placeholder="Search">
                    </div> --}}
                    {{-- <a href="/adminmessages"><button class="btn mx-1 mt-1 message-btn" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a> --}}
                    {{-- <a href="/adminnotification"><button class="btn mx-1 mt-1 notification-btn" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a> --}}
                    <a href="/adminprofile"><button class="btn mx-1 p-0" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Profile">                        
                            <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}?v={{ time() }}" alt="profile"
                                width="35" height="35" class="rounded-5" style="margin-right: 2em;">
                        </button></a>
                </div>
            </div>
        </ul>
        <div class="container">
            <form id="form" action="/updateprofile" method="POST" enctype="multipart/form-data" class="row gutters">
                @csrf
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile d-flex align-items-center flex-column">
                                    <input type="text" name="id" value="{{ $user->id }}" hidden>
                                    {{-- <img class="img mx-auto rounded-circle border" id="img-icon"
                                        src="../assets/user.png" alt="upload_profile" width="100" height="100"> --}}
                                    <img class="img mx-auto rounded-circle border" id="img-icon"
                                        src="{{ asset('images/profile_photos/' . $user->profile_photo) }}" alt="upload_profile" width="100" height="100">
                                    <input type="file" class="d-none" accept="image/*" id="profileUpload"
                                        name="profile_photo" required>
                                    <label for="profileUpload"
                                        class="btn mx-auto mt-3 py-1 px-0 upload-btn">Upload</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-dets">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="">Admin ID</label>
                                        <input type="text" class="form-control input-dets" id="first_name"
                                            name="first_name" value="{{ $user->first_name }}" placeholder="Admin ID">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="last_name">Full Name</label>
                                        <input type="text" class="form-control input-dets" id="last_name"
                                            name="last_name" value="{{ $user->last_name }}"
                                            placeholder="Enter full name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                        <input type="email" class="form-control input-dets" id="eMail"
                                            name="email" value="{{ $user->email }}" placeholder="Enter email ID">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control input-dets" id="phone"
                                            name="phone_number" value="{{ $user->phone_number }}"
                                            placeholder="Enter phone number">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="current-password">Current Password</label>
                                        <input type="password" class="form-control input-dets" id="current-password" name="curr_pass">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="new-password">New Password</label>
                                        <input type="password" class="form-control input-dets" id="new-password"
                                            name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 button-alignment">
                                    @if (session()->has('message'))
                                        <p id="pass_err" class="text-danger fw-bold">{{ session('message') }}</p>
                                    @endif
                                    <button type="button" id="submit_btn" class="btn btn-update">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="message" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="../assets/Book_Logo.png" class="rouxunded me-2" alt="...">
                <strong class="me-auto"></strong>
                <small>1 min ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            @if (session('success'))
                <div class="toast-body fw-bold text-success">
                    {{ session('success') }}
                </div>                
            @endif
        </div>
    </div>
</div>

@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])

<script>
    var uploaded_image = document.getElementById('profileUpload');
    var submit_btn = document.getElementById('submit_btn');

    uploaded_image.addEventListener("change", function() {
        var image = document.getElementById("img-icon");
        image.src = URL.createObjectURL(event.target.files[0]);
    });

    submit_btn.addEventListener('click', () => {
        var form = document.getElementById('form');
        // var profile = document.getElementById('profileUpload');
        // var curr_pass = document.getElementById('current-password');
        // var new_pass = document.getElementById('new-password');


        // if (curr_pass.value == "" && new_pass.value == "") {
        //     document.getElementById('pass_err').className = 'text-danger fw-bold';
        // } else {
        //     document.getElementById('pass_err').className = 'text-danger d-none fw-bold';
            form.submit();
        // }
    });

    const message = bootstrap.Toast.getOrCreateInstance(document.getElementById('message'));

    @if (session('success'))
        message.show()
    @endif
</script>
