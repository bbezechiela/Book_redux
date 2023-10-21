@include('partials.__header', [
'title' => 'Unread Notification | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/notification-style.css',
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
        </ul>
        <div class="notification-nav">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="/notification">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="/read">Read</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/unread">Unread</a>
                </li>
            </ul>
        </div>
        <div class="notification">
            <div class="notification-details">
                <img src="../assets/nestine.png" alt="Profile Image">
                <div class="notification-text">
                    <p class="notification-message">Nestine Smith posted new listing</p>
                    <p class="date-time">5 hours ago</p>
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
                    <p class="notification-message">Some items in your cart are already bougth by someone</p>
                    <p class="date-time">20 hours ago</p>
                </div>
            </div>
            <div class="notification-actions">
                <button class="unread-button">Delete</button>
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
                <button class="unread-button">Delete</button>
                <button class="details-button">View details</button>
            </div>
        </div>
    </div>
</div>
@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])