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
                {{-- <a href="/shipment"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        data-bs-title="Home">
                        <i class="fa fa-area-chart" aria-hidden="true"
                            style="font-size: 20px; margin-right: 20px;  color: #003060;">
                            Manage Order</i>
                    </button></a>
                <a href="/return"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        data-bs-title="Return">
                        <i class="fa fa-refresh" aria-hidden="true" style="font-size: 20px; color: #003060;"> Manage
                            Return</i>
                    </button></a>
                <a href="/completedShipping"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" data-bs-title="Completed">
                        <i class="fa fa-check-square-o" aria-hidden="true"
                            style="font-size: 20px; color: #003060; margin-right: 20px;"> Completed</i>
                    </button></a> --}}
                {{-- <a href="/couriermessage"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        data-bs-title="Messages">
                        <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060; margin-right: 20px;">  Messages</i>
                    </button></a> --}}
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    {{-- <a href="/couriermessage"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a> --}}
                    {{-- <a href="/couriernotification"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a> --}}
                    {{-- <ul class="nav py-profile justify-content-end">
                        <li class="nav-item dropdown"> --}}
                    <a href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                        class="nav-link dropdown-toggle avatar" aria-expanded="false" title="profile">
                        <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="notification"
                            width="35" height="35" class="rounded-5" style="margin-right: 2em;">
                    </a>
                    {{-- <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/courierprofile">Profile</a></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul> --}}
                </div>
            </div>
        </ul>
        <div class="container">
            <div class="header" style="text-align: center; margin-bottom: 4em; color:#003060;">
                <h4>My Profile</h4>
                <p>Manage and protect your account</p>
            </div>
            <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile d-flex align-items-center flex-column">
                                    <img class="img mx-auto rounded-circle border" id="img-icon"
                                        src="../assets/user.png" alt="upload_profile" width="100" height="100">
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
                                        <label for="fullName">Courier Username</label>
                                        <input type="text" class="form-control input-dets" id="username"
                                            placeholder="Enter Courier Username">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Full Name</label>
                                        <input type="text" class="form-control input-dets" id="fullname"
                                            placeholder="Enter Full Name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                        <input type="email" class="form-control input-dets" id="email"
                                            placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control input-dets" id="phone"
                                            placeholder="Enter phone number">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="curent-password">Current Password</label>
                                        <input type="password" class="form-control input-dets" id="curent-password">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="new-password">New Password</label>
                                        <input type="password" class="form-control input-dets" id="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 button-alignment">
                                    <button type="button" id="submit" name="submit"
                                        class="btn btn-update">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])