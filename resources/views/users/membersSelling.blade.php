@include('partials.__header', [
'title' => 'Book Club | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/bookclub-style.css',
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
    <div id="sidebarClub" class="sidebarClub p-2 min-vh-100 shadow">
        <x-sidebarClub />
    </div>
    <div id="content" class="content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
                {{-- <ul class="nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/bookclub">My Wall</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/sellingclub">Book Selling Club</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/exchangeclub">Book Exchange Club</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/rentingclub">Book Renting Club</a>
                    </li>
                </ul> --}}
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    {{-- <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <input class="form-control rounded-3" type="text" placeholder="Search">
                    </div>
                    <a href="/messages"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
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
                                {{-- <li><a class="dropdown-item" href="/changepassword">Change Password</a></li> --}}
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </ul>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-1 card-cover">
                        <div class="card-header selling-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center card-dets">
                                    <div class="header-image"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6>Book Selling Club</h6>
                                <input class="form-control rounded-3 search-club" type="text" placeholder="Search"
                                    style="height: 2em">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <ul class="nav nav-underline">
                                    <li class="nav-item">
                                        <a class="nav-link custom-nav-link" href="/sellingclub">Discussion</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link custom-nav-link" href="/eventssellingclub">Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page"
                                            href="/memberssellingclub">Members</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-5 mb-1 card-post">
                        <div class="card-header member-header">
                            <p>Members .<span>100</span></p>
                        </div>
                        <div class="card-body card-members">
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 1" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">John Doe</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 2" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">Jane Smith</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 1" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">John Doe</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 2" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">Jane Smith</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 1" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">John Doe</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 2" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">Jane Smith</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-5 mb-1 card-post">
                        <div class="card-header member-header">
                            <p>Members with things in common .<span>100</span></p>
                        </div>
                        <div class="card-body card-members">
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 1" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">John Doe</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 2" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">Jane Smith</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 1" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">John Doe</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 2" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">Jane Smith</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 1" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">John Doe</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 2" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">Jane Smith</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-5 mb-3 card-post">
                        <div class="card-header member-header">
                            <p>Members near me .<span>100</span></p>
                        </div>
                        <div class="card-body card-members">
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 1" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">John Doe</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 2" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">Jane Smith</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 1" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">John Doe</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 2" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">Jane Smith</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 1" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">John Doe</p>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="../assets/nestine.png" alt="Participant 2" class="rounded-circle me-3"
                                    width="50" height="50">
                                <p class="mb-0">Jane Smith</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- For Sale Card -->
                <div id="for_sale" class="col-lg-4">
                    <div class="card mt-5 mb-3 custom-sticky-card card-sidebar">
                        <div class="card-header sticky-top">
                            <div class="d-flex justify-content-between">
                                <h5 id="for-sale-header" class="mb-0 daily_discovery_text">For Sale</h5>
                                {{-- <small>See All<i class="fa fa-arrow-right" aria-hidden="true"></i></small> --}}
                            </div>
                        </div>
                        @foreach ($post->shuffle() as $sale)
                        <div class="card-body" onclick="clickedPost({{ $sale->id }}, {{ $sale->user_id }})">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/books/' . $sale->book_photo) }}" alt="Book Image"
                                    class="rounded me-3" width="80" height="80">
                                <div>
                                    <h6 class="mb-0">{{ $sale->title }}</h6>
                                    <p class="mb-0">For {{ $sale->status }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
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