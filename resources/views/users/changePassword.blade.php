@include('partials.__header', [
'title' => 'Change Password | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/change-password-style.css',
'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 shadow">
        <x-sidebar />
    </div>

    {{-- <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start" tabindex="-1"
        aria-labelledby="offcanvasExampleLabel">
        <x-sidebar />
    </div>
    <div id="sidebarProfile" class="sidebarProfile p-2 min-vh-100 shadow">
        <x-sidebarProfile />
    </div> --}}
    <div id="content" class="content">
        <ul class="nav bg-light sticky-top head-nav shadow py-4 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                {{-- <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button> --}}
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
                {{-- <ul class="nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/myprofile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/mypurchase">My Purchase</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/addresses">Addresses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/changepassword">Change Password</a>
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
                    {{-- <a href="/messages"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a>
                    <a href="/notification"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a> --}}
                    <ul class="nav py-profile justify-content-end">
                        <li class="nav-item dropdown">
                            <a href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                class="nav-link dropdown-toggle avatar" aria-expanded="false" title="profile">
                                <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}"
                                    alt="notification" width="35" height="35" class="rounded-5"
                                    style="margin-right: 2em;">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/myprofile">Profile</a></li>
                                <li><a class="dropdown-item" href="/mypurchase">My Purchase</a></li>
                                <li><a class="dropdown-item" href="/addresses">Addresses</a></li>
                                <li><a class="dropdown-item" href="/changepassword">Change Password</a></li>
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a></li>
                            </ul>
                        </li>
                    </ul>
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
        <div class="change-password-container">
            <div class="header">
                <h4>Change Password</h4>
                <p>Manage and protect your account</p>
            </div>
            <form id="form" action="/updatepassword" method="POST">
                @csrf
                <div class="password-details">
                    {{-- <p>{{ Hash::check($value, $hashedValue) }}</p> --}}
                    <label for="username" class="form-label">Username</label>
                    <input class="form-control input-text" id="username" type="text" placeholder="Username"
                        value="{{ $user->username }}" required>
                    <label for="password" class="form-label">Current Password</label>
                    <input class="form-control input-text" id="password" name="password" type="password"
                        placeholder="Enter your current password" required>
                    <label for="password" class="form-label">New Password</label>
                    <input class="form-control" id="new-password" name="new_password" type="password"
                        placeholder="Enter your new password" required>
                    <span id="pass-tip"></span><br>
                    <span class="text-secondary">
                        Tip: Use upper and lowercase, numbers, and symbols for strong passwords.
                    </span> <br>
                    <button id="save-btn" type="button" class="btn btn-save">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
]);
<script>
    var pass = document.getElementById("new-password");
    var form = document.getElementById('form');
    var save_btn = document.getElementById('save-btn');
    pass.addEventListener("input", function() {
        var tip = document.getElementById("pass-tip");
        var tip_color = ["#ff0000", "#ff8b00", "#fff300", "#00ff17", "#ff00e0"];
        var labels = ["Very Weak", "Weak", "Moderate", "Strong", "Very Strong"];
        var strength = 0;
        if (pass.value.match(/[a-z]+/)) {
            strength += 1;
        }
        if (pass.value.match(/[A-Z]+/)) {
            strength += 1;
        }
        if (pass.value.match(/[0-9]+/)) {
            strength += 1;
        }
        if (pass.value.match(/[!@#$%^&*]+/)) {
            strength += 1;
        }
        if (pass.value.length >= 8) {
            strength += 1;
        }
        tip.style.color = tip_color[strength - 1];
        tip.className += "ms-2 mb-3 fw-bold"
        tip.textContent = labels[strength - 1];
    });
    save_btn.addEventListener('click', () => {
        // form.action = "/updatepassword";
        form.submit();
    })
</script>