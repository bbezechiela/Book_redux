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
            </ul>
        </ul>
        <div class="change-password-container">
            <div class="header">
                <h4>Change Password</h4>
                <p>Manage and protect your account</p>
            </div>
            <div class="password-details">
                <label for="username" class="form-label">Username</label>
                <input class="form-control input-text" id="username" name="username" type="text" placeholder="Username" required>
                <label for="password" class="form-label">Current Password</label>
                <input class="form-control input-text" id="password" name="password" type="password"
                    placeholder="Enter your current password" required>
                <label for="password" class="form-label">New Password</label>
                <input class="form-control" id="password" name="password" type="password"
                    placeholder="Enter your new password" required>
                <span id="pass-tip"></span><br>
                <span class="text-secondary">
                    Tip: Use upper and lowercase, numbers, and symbols for strong passwords.
                </span> <br>
                <button type="button" class="btn btn-primary btn-save">Save</button>
            </div>
        </div>
    </div>
</div>

@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])