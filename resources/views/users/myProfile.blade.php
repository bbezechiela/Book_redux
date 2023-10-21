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
    <div id="sidebar" class="sidebar p-2 min-vh-100">
        <x-sidebar />
    </div>
    <div id="content" class="pe-0 border content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
            <div class="w-100 d-flex justify-content-between mt-1 p-0">
                <input class="border rounded-3 px-3 w-100" type="text" placeholder="Search">
                <a href="/" class="pb-2 px-2"><img class="img" src="../assets/Book_Logo.png" alt="Logo"></a>
            </div>
            <ul class="nav nav-underline">
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
            </ul>
        </ul>
        <div class="row px-3 py-3 mx-3 border-bottom border-2">
            <div class="header">
                <h4>My Profile</h4>
                <p>Manage and protect your account</p>
            </div>
            <div class="col-3 d-flex align-items-center flex-column px-5 py-3">
                <div class="profile-details">
                    <p>Change Profile Photo</p>
                </div>
                <img class="img mx-auto rounded-circle border" id="img-icon" src="../assets/accounts.png"
                    alt="upload_profile" width="80" height="80">
                <input type="file" class="d-none" accept="image/*" id="profileUpload" name="profile_photo" required>
                <label for="profileUpload" class="btn mx-auto mt-3 py-1 px-0 upload-btn">Upload</label>
                <button type="button" class="btn btn-primary save-button">Save</button>
            </div>
            <div class="col mx-2 d-flex justify-content-center flex-column w-50">
                <div class="mx-1 d-flex justify-content-center">
                    <input class="w-100 mt-3 fs-6 px-2 form-control" id="firstName" name="first_name" type="text"
                        placeholder="First Name" style="margin-bottom: 12px; color: #003060;" required>
                </div>
                <div class="mx-1 d-flex justify-content-center">
                    <input class="w-100 mt-3 fs-6 px-2 form-control" id="email" name="email" type="email"
                        placeholder="Email" style="margin-bottom: 12px; color: #003060;" required>
                </div>
                <div class="mx-1 d-flex justify-content-center">
                    <input class="w-100 mt-3 fs-6 px-2 form-control" id="address" name="address" type="text"
                        placeholder="Address" style="margin-bottom: 8px; color: #003060;" required>
                </div>
                <div class="mx-1 d-flex justify-content-center form-group">
                    <select class="w-100 mt-4 fs-6 px-2 form-control form-select" name="gender" id="gender"
                        style="margin-bottom: 12px; color: #003060;" required>
                        <option value="" disabled selected>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="col mx-2 d-flex justify-content-center flex-column w-50">
                <div class="mx-1 d-flex justify-content-center">
                    <input class="w-100 mt-3 fs-6 px-2 form-control" id="lastName" name="last_name" type="text"
                        placeholder="Last Name" style="margin-bottom: 12px; color: #003060;" required>
                </div>
                <div class="mx-1 d-flex justify-content-center">
                    <input class="w-100 mt-3 fs-6 px-2 form-control" id="phoneNumber" name="phone_number" type="text"
                        placeholder="Phone Number" style="margin-bottom: 12px; color: #003060;" required>
                </div>
                <div class="mx-1 d-flex justify-content-center">
                    <input class="w-100 mt-3 fs-6 px-2 form-control" id="birthday" name="birthday" type="text"
                        placeholder="Birthday" onfocus="(this.type='date')"
                        onblur="if(this.value==''){this.type='text'}" style="margin-bottom: 12px; color: #003060;"
                        required>
                </div>
                <div class="mx-1 d-flex justify-content-center">
                    <input class="w-100 mt-3 fs-6 px-2 form-control" id="age" name="age" type="number" placeholder="Age"
                        style="margin-bottom: 12px; color: #003060;" required>
                </div>
            </div>
        </div>

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
])