@include('partials.__header', [
    'title' => 'Manage Shipment | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/shipment-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0 body">
    <div id="couriersidebar" class="couriersidebar p-2 min-vh-100 shadow">
        <x-couriersidebar />
    </div>
    <div id="content" class="pe-0 content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4 top-nav">
            <div class="w-100 d-flex mt-1 p-1">
                <p class="text-admin">Courier</p>

            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    <a href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                        class="nav-link dropdown-toggle avatar" aria-expanded="false" title="profile">
                        <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="notification"
                            width="35" height="35" class="rounded-5" style="margin-right: 2em;">
                    </a>
                </div>
            </div>
        </ul>
        <div class="container">
            <div class="header" style="text-align: center; margin-bottom: 4em; color:#003060;">
                <h4>My Profile</h4>
                <p>Manage and protect your account</p>
            </div>
            <form class="row gutters" action="/updateCourier" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile d-flex align-items-center flex-column">
                                    <img class="img mx-auto rounded-circle border" id="img-icon"
                                        src="{{ asset('images/profile_photos/' . session('profile_pic')) }}"
                                        alt="upload_profile" width="100" height="100">
                                    <input type="file" class="d-none" accept="image/*" id="profileUpload"
                                        name="profile_photo">
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
                                        <label for="username">Courier Username</label>
                                        <input type="text" class="form-control input-dets" id="username"
                                            name="username" value="{{ $user->username }}"
                                            placeholder="Enter Courier Username" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullname">Full Name</label>
                                        <input type="text" class="form-control input-dets" id="fullname"
                                            name="owner_name" value="{{ $user->owner_name }}"
                                            placeholder="Enter Full Name" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control input-dets" id="email"
                                            name="email" value="{{ $user->email }}" placeholder="Enter Email Address"
                                            required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control input-dets" id="phone"
                                            name="phone_number" value="{{ $user->phone_number }}"
                                            placeholder="Enter phone number" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="curent-password">Current Password</label>
                                        <input type="password" class="form-control input-dets" id="curent-password"
                                            name="current_password" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="new-password">New Password</label>
                                        <input type="password" class="form-control input-dets" id="new-password"
                                            name="password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 button-alignment">
                                    <button type="submit" id="submit" class="btn btn-update">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="message" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="../assets/Book_Logo.png" class="rouxunded me-2" alt="...">
                    <strong class="me-auto"></strong>
                    <small>1 min ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body fw-bold text-success">
                    {{ session('message') }}
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])

<script>
    const message = bootstrap.Toast.getOrCreateInstance(document.getElementById('message'));

    @if (session('message'))
        message.show()
    @endif

    var uploaded_image = document.getElementById("profileUpload");
    uploaded_image.addEventListener("change", function() {
        var image = document.getElementById("img-icon");
        image.src = URL.createObjectURL(event.target.files[0]);
    });
</script>
