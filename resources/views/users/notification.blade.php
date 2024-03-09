@include('partials.__header', [
'title' => 'Notification | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/notification-style.css',
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
    <div id="content" class="border content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
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
                    <a href="/notification"><button class="btn mx-1 mt-1 selected-style" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px;"></i>
                        </button></a>
                    <a href="/myprofile"><button class="btn mx-1 p-0" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Profile">
                            <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="notification"
                                width="35" height="35" class="rounded-5" style="margin-right: 2em;">
                        </button></a>
                </div>
            </div>
        </ul>
        <div class="notification-nav">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/notification">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="/read">Read</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="/unread">Unread</a>
                </li>
            </ul>
        </div>
        <div class="notification">
            <div class="notification-details">
                <img src="../assets/nestine.png" alt="Profile Image">
                <div class="notification-text">
                    <p class="notification-message">Marie Tan Fernandez liked your listing</p>
                    <p class="date-time">2 hours ago</p>
                </div>
            </div>
            <div class="notification-actions">
                <button class="unread-button">Mark as unread</button>
                <button class="details-button">View details</button>
            </div>
        </div>
        <div class="notification">
            <div class="notification-details">
                <img src="../assets/nestine.png" alt="Profile Image">
                <div class="notification-text">
                    <p class="notification-message">Some items in your wishlist are now available</p>
                    <p class="date-time">10 hours ago</p>
                </div>
            </div>
            <div class="notification-actions">
                <button class="unread-button">Mark as read</button>
                <button class="details-button">View details</button>
            </div>
        </div>
        <div class="notification">
            <div class="notification-details">
                <img src="../assets/nestine.png" alt="Profile Image">
                <div class="notification-text">
                    <p class="notification-message">Order XSJAIOJANSZS is completed. Have you rated your purchase?</p>
                    <p class="date-time">8/20/2023 10:11</p>
                </div>
            </div>
            <div class="notification-actions">
                <button class="unread-button">Mark as unread</button>
                <button class="details-button">View details</button>
            </div>
        </div>
    </div>
</div>
@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])