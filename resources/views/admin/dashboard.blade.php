@include('partials.__header', [
'title' => 'Admin Dashboard | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/dashboard-style.css',
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
                    {{-- <a href="/adminmessages"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a> --}}
                    {{-- <a href="/adminnotification"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a> --}}
                    <a href="/adminprofile"><button class="btn mx-1 p-0" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Profile">
                            <img src="{{ session('image') }}?v={{ time() }}"
                                alt="profile" width="35" height="35" class="rounded-5" style="margin-right: 2em;">
                        </button></a>
                </div>
            </div>
        </ul>
        <main id="main" class="main">
            <div class="pagetitle">
                <h1>Dashboard</h1>
            </div>

            <section class="section dashboard">
                <div class="row">
                    <div class="row">
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card users-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" style="">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a id="new_user_today" class="dropdown-item btn">Today</a></li>
                                        <li><a id="new_user_this_month" class="dropdown-item btn">This Month</a></li>
                                        <li><a id="new_user_this_year" class="dropdown-item btn">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">New Users <span id="new_user_header">| This Month</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 id="new_user">{{ $CountCurrUser }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card listings-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"
                                            aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a id="new_listing_today" class="dropdown-item btn">Today</a></li>
                                        <li><a id="new_listing_this_month" class="dropdown-item btn">This Month</a></li>
                                        <li><a id="new_listing_this_year" class="dropdown-item btn">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">New Listings <span id="new_listing_header">| Today</span>
                                    </h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa fa-th-list" aria-hidden="true"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 id="new_listing">{{ $CountCurrListing }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card sellers-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" style="">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a id="reports_today" class="dropdown-item btn">Today</a></li>
                                        <li><a id="reports_this_month" class="dropdown-item btn">This Month</a></li>
                                        <li><a id="reports_this_year" class="dropdown-item btn">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Reports <span id="reports_header">| This
                                            Month</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 id="new_user">0</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-xxl-4 col-md-4">
                            <div class="card info-card reported-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"
                                            aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Reported User <span>| This Year</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa fa-ban" aria-hidden="true"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card post-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" style="">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Reported Post <span>| Today</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card reported-listing-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"
                                            aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Reported Listing <span>| This Month</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa fa-flag" aria-hidden="true"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>3,264</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="col-xxl-4 col-md-4">
                            <div class="card info-card refund-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"
                                            aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Refund Request <span>| This Month</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa fa-refresh" aria-hidden="true"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <div class="row">
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card review-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" style="">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Reported User Review <span>| This Year</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa fa-commenting" aria-hidden="true"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </section>
        </main>
    </div>
</div>

@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])

<script>
    var newUserToday = document.getElementById('new_user_today');
    var newUserThisMonth = document.getElementById('new_user_this_month');
    var newUserThisYear = document.getElementById('new_user_this_year');
    var newListingToday = document.getElementById('new_listing_today');
    var newListingThisMonth = document.getElementById('new_listing_this_month');
    var newListingThisYear = document.getElementById('new_listing_this_year');
    var newUserHeader = document.getElementById('new_user_header');
    var newListingHeader = document.getElementById('new_listing_header');
    newUserToday.addEventListener('click', () => {
        newUserHeader.textContent = '| Today';
        fetch('/newUserToday', {
                method: "GET"
            })
            .then(response => response.json())
            .then(result => {
                console.log(result);
                document.getElementById('new_user').textContent = result;
            })
            .catch(error => console.error(error));
    });
    newUserThisMonth.addEventListener('click', () => {
        newUserHeader.textContent = '| This Month';
        fetch('/newUserThisMonth', {
                method: "GET"
            })
            .then(response => response.json())
            .then(result => {
                console.log(result);
                document.getElementById('new_user').textContent = result;
            })
            .catch(error => console.error(error));
    });
    newUserThisYear.addEventListener('click', () => {
        newUserHeader.textContent = '| This Year';
        fetch('/newUserThisYear', {
                method: "GET"
            })
            .then(response => response.json())
            .then(result => {
                console.log(result);
                document.getElementById('new_user').textContent = result;
            })
            .catch(error => console.error(error));
    });
    newListingToday.addEventListener('click', () => {
        newListingHeader.textContent = '| Today';
        fetch('/newListingToday', {
                method: "GET"
            })
            .then(response => response.json())
            .then(result => {
                console.log(result);
                document.getElementById('new_listing').textContent = result;
            })
            .catch(error => console.error(error));
    });
    newListingThisMonth.addEventListener('click', () => {
        newListingHeader.textContent = '| This Month';
        fetch('/newListingThisMonth', {
                method: "GET"
            })
            .then(response => response.json())
            .then(result => {
                console.log(result);
                document.getElementById('new_listing').textContent = result;
            })
            .catch(error => console.error(error));
    });
    newListingThisYear.addEventListener('click', () => {
        newListingHeader.textContent = '| This Year';
        fetch('/newListingThisYear', {
                method: "GET"
            })
            .then(response => response.json())
            .then(result => {
                console.log(result);
                document.getElementById('new_listing').textContent = result;
            })
            .catch(error => console.error(error));
    });
</script>