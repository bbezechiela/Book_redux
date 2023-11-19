@include('partials.__header', [
'title' => 'Dashboard | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/likes-style.css',
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
                <a href="/" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
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

        <div class="container">
            <h4>Welcome <span>{{ session('first_name') . ' ' . session('last_name') }}</span>!</h4>
            <p>What do you want to do?</p>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-5 mt-4 p-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title dashboard-title">Buy a Book</h5>
                            <p class="card-text">Discover a world of knowledge and stories with our vast collection of books available for purchase. Find your next literary adventure today.</p>
                            <a href="/explore" class="btn">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-5 mt-4 p-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title dashboard-title">Exchange a Book</h5>
                            <p class="card-text">Share your love for reading by exchanging books with fellow book enthusiasts. Exchange your old favorites for new discoveries.</p>
                            <a href="/explore" class="btn">Exchange</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-5 mt-4 p-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title dashboard-title">Rent a Book</h5>
                            <p class="card-text">Enjoy the pleasure of reading without the commitment of ownership. Rent a book and dive into a captivating story for a limited time.</p>
                            <a href="/explore" class="btn">Rent</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-5 mt-4 p-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title dashboard-title">Sell a Book</h5>
                            <p class="card-text">Make room on your shelves and earn some extra cash by selling your gently loved books. Connect with readers who will appreciate your collection.</p>
                            <a href="/mylist" class="btn">Sell</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-5 mt-4 p-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title dashboard-title">Browse a Book</h5>
                            <p class="card-text">Explore our extensive library. Whether you're looking for classics or the latest bestsellers, there's something for everyone.</p>
                            <a href="/explore" class="btn">Browse</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-5 mt-4 p-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title dashboard-title">Visit Book Club</h5>
                            <p class="card-text">Join a community of like-minded readers at our Book Club. Engage in lively discussions nd connect with fellow book enthusiasts.</p>
                            <a href="/bookclub" class="btn">Visit</a>
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