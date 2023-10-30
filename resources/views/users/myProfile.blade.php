@include('partials.__header', [
    'title' => 'My Profile | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/myProfile-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start" tabindex="-1"
        aria-labelledby="offcanvasExampleLabel">
        <x-sidebar />
    </div>
    <div id="sidebarProfile" class="sidebarProfile p-2 min-vh-100 shadow">
        <x-sidebarProfile/>
    </div>
    <div id="content" class="border content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <a href="/" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
                {{-- <ul class="nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/myprofile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/mypurchase">My Purchase</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/addresses">Addresses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/changepassword">Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/reviewsandratings">User Reviews and Ratings</a>
                    </li>
                </ul> --}}
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <input class="form-control rounded-3 search-field" type="text" placeholder="Search">
                    </div>
                    <a href="/messages"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a>
                    <a href="/notification"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a>
                    <a href="/myprofile"><button class="btn mx-1 p-0" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Profile">
                            <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="notification"
                                width="35" height="35" class="rounded-5" style="margin-right: 2em;">
                        </button></a>
                </div>
            </div>
        </ul>
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="form" action="/myprofileupdate" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row px-3 py-3 mx-3 border-bottom border-2">
                <div class="header">
                    <h4>My Profile</h4>
                    <p>Manage and protect your account</p>
                </div>
                <div class="col-3 d-flex align-items-center flex-column px-5 py-3">
                    <div class="profile-details">
                        <p>Change Profile Photo</p>
                    </div>
                    <img class="img mx-auto rounded-circle border" id="img-icon"
                        src="{{ asset('images/profile_photos/' . $user->profile_photo) }}" alt="upload_profile"
                        width="80" height="80">
                    <input type="file" class="d-none" accept="image/*" id="profileUpload" name="profile_photo"
                        required>
                    <label for="profileUpload" class="btn mx-auto mt-3 py-1 px-0 upload-btn">Upload</label>
                    <button type="submit" class="btn btn-primary save-button" onclick="document.getElementById('form').submit()">Save</button>
                </div>
                <div class="col mx-2 d-flex justify-content-center flex-column w-50">
                    <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2 form-control" id="firstName" name="first_name"
                            type="text" placeholder="First Name" style="margin-bottom: 12px; color: #003060;"
                            value="{{ $user->first_name }}" required>
                    </div>
                    <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2 form-control" id="email" name="email"
                            type="email" placeholder="Email" style="margin-bottom: 12px; color: #003060;"
                            value="{{ $user->email }}" required>
                    </div>
                    {{-- <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2 form-control" id="address" name="address"
                            type="text" placeholder="Address" style="margin-bottom: 8px; color: #003060;"
                            value="{{ $user->address }}" required>
                    </div> --}}
                    <div class="mx-1 d-flex justify-content-center form-group">
                        <select class="w-100 mt-4 fs-6 px-2 form-control form-select" name="gender" id="gender"
                            style="margin-bottom: 12px; color: #003060;" value="{{ $user->gender }}" required>
                            {{-- <option  disabled selected>Gender</option> --}}
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col mx-2 d-flex justify-content-center flex-column w-50">
                    <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2 form-control" id="lastName" name="last_name"
                            type="text" placeholder="Last Name" style="margin-bottom: 12px; color: #003060;"
                            value="{{ $user->last_name }}" required>
                    </div>
                    <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2 form-control" id="phoneNumber" name="phone_number"
                            type="text" placeholder="Phone Number" style="margin-bottom: 12px; color: #003060;"
                            value="{{ $user->phone_number }}" required>
                    </div>
                    <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2 form-control" id="birthday" name="birthday"
                            type="text" placeholder="Birthday" value="{{ $user->birthday }}"
                            onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}"
                            style="margin-bottom: 12px; color: #003060;" required>
                    </div>
                    {{-- <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2 form-control" id="age" name="age"
                            type="number" placeholder="Age" style="margin-bottom: 12px; color: #003060;"
                            value="{{ $user->age }}" required>
                    </div> --}}
                </div>

            </div>
        </form>

        <div class="container text-center seller-details">
            <div class="row align-items-center">
                <div class="col">
                    <div class="ratings">
                        <p>Ratings <span class="rate">100</span></p>
                        <p>Books Bought <span class="bought">20</span></p>
                    </div>
                </div>
                <div class="col">
                    <div class="ratings">
                        <p>Books Sold <span class="sold">203</span></p>
                        <p>Books Exchanged <span class="exchange">59</span></p>
                    </div>
                </div>
                <div class="col">
                    <div class="ratings">
                        <p>Books Lent <span class="sold">203</span></p>
                        <p>Books Rented <span class="rent">9</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
]);

<script>
    var uploaded_image = document.getElementById("profileUpload");

    uploaded_image.addEventListener("change", function() {
        var image = document.getElementById("img-icon");
        image.src = URL.createObjectURL(event.target.files[0]);
    });
</script>
