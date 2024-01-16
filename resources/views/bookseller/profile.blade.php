@include('partials.__header', [
'title' => 'Seller Dashboard | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/sellerProfile-style.css',
'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0 body">
    <div id="sellersidebar" class="sellersidebar p-2 min-vh-100 shadow">
        <x-sellersidebar />
    </div>
    <div id="content" class="pe-0 content">
        <ul class="nav sticky-top head-nav shadow py-4 px-4 top-nav">
            <div class="w-100 d-flex mt-1 p-1">
                <a href="/sellerboard" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png" alt="Logo"></a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    {{-- <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <input class="form-control rounded-3 search-field" type="text" placeholder="Search">
                    </div> --}}
                    {{-- <a href="/sellermessage"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a> --}}
                    {{-- <a href="/sellernotification"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a> --}}
                    <a href="/profile"><button class="btn mx-1 p-0" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            data-bs-title="Profile">
                            <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="profile"
                                width="35" height="35" class="rounded-5" style="margin-right: 2em;">
                        </button></a>
                </div>
            </div>
        </ul>
        <div class="row px-3 py-3 mx-3">
            <div class="header">
                <h4>My Profile</h4>
                <p>Manage and protect your account</p>
            </div>
            <div class="col-3 d-flex align-items-center flex-column px-5 py-3">
                <div class="profile-details">
                    <p>Change Profile Photo</p>
                </div>
                <img class="img mx-auto rounded-circle border" id="img-icon" src="{{ asset('images/profile_photos/' . $user->profile_photo) }}"
                    alt="upload_profile" width="80" height="80">
                <input type="file" class="d-none" accept="image/*" id="profileUpload" name="profile_photo" required>
                <label for="profileUpload" class="btn mx-auto mt-3 py-1 px-0 upload-btn">Upload</label>
                <button type="submit" class="btn save-button">Save</button>
            </div>
            <div class="col mx-2 d-flex justify-content-center flex-column w-50">
                <div class="form-outline mt-4">
                    <input type="text" id="ownerName" name="owner_name" value="{{ $user->owner_name }}" class="form-control" required />
                    <label class="form-label" for="ownerName">Bookstore Owner Name</label>
                </div>
                <div class="form-outline mt-4">
                    <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required />
                    <label class="form-label" for="email">Email</label>
                </div>
                <div class="form-outline mt-4">
                    <input type="text" id="address" name="address" class="form-control" value="{{ $user->address }}" required />
                    <label class="form-label" for="address">Registered Business Address</label>
                </div>
                <div class="form-outline mt-4">
                    <input type="number" id="registration_number" name="registration_number" value="{{ $user->registration_number }}" class="form-control"
                        required />
                    <label class="form-label" for="registration_number">Registration Number</label>
                </div>
                <div class="form-outline mt-4">
                    <input type="text" id="username" name="username" class="form-control" required />
                    <label class="form-label" for="username">Current Password</label>
                </div>
                <div class="mx-1 mt-3 d-flex justify-content-start">
                    <span class="text-secondary" style="white-space: nowrap;">
                        Tip: Use upper and lowercase, numbers, and symbols for strong passwords.
                    </span>
                </div>
                {{-- <div class="mx-1 mt-3 d-flex justify-content-start">
                    <span class="text-secondary">
                        Tip: Use upper and lowercase, numbers, and symbols for strong passwords.
                    </span>
                </div> --}}
            </div>
            <div class="col mx-2 d-flex justify-content-center flex-column w-50">
                <div class="form-outline">
                    <input type="text" id="business_name" name="business_name" value="{{ $user->business_name }}" class="form-control" required />
                    <label class="form-label" for="business_name">Business Name</label>
                </div>
                <div class="form-outline mt-4">
                    <input type="text" id="phoneNumber" name="phone_number" value="{{ $user->phone_number }}" class="form-control" required />
                    <label class="form-label" for="phoneNumber">Contact Number</label>
                </div>
                <div class="form-outline mt-4">
                    <input type="text" id="date_registered" name="date_registered" class="form-control" value="{{ $user->date_registered }}"
                        onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required />
                    <label class="form-label" for="date_registered">Date Registered</label>
                </div>
                <div class="form-outline mt-4">
                    <input class="form-control" type="file" id="permit" name="permit" multiple />
                    <label for="permit" class="form-label">Business Permit</label>
                </div>
                <div class="form-outline mt-4">
                    <input type="password" id="password" name="password" class="form-control" required />
                    <label class="form-label" for="password">New Password</label>
                </div>
                <div class="mx-1 mt-3 d-flex justify-content-start">
                        <label type="checkbox" id="show-password"><span id="pass-tip"></span></label>
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
    document.addEventListener("DOMContentLoaded", function() {
        const formInputs = document.querySelectorAll(".form-control");
        formInputs.forEach(function(input) {
            input.addEventListener("focus", function() {
                const label = input.nextElementSibling;
                label.style.top = "-20px";
                label.style.fontSize = "12px";
                label.style.color = "#555";
            });
            input.addEventListener("blur", function() {
                if (input.value === "") {
                    const label = input.nextElementSibling;
                    label.style.top = ".4em";
                    label.style.fontSize = "";
                    label.style.color = "#003060";
                }
            });
        });
    });
</script>