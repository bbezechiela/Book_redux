@include('partials.__header', [
'title' => 'User Wish List | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/preview-style.css',
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
                        <input class="form-control rounded-3" type="text" placeholder="Search">
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
        <div class="container text-center seller-details mx-4">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <img src="../assets/nestine.png" alt="seller image" class="circle-picture">
                        <div class="user-info">
                            <p>Nestine Nicole Navarro</p>
                            <p>2K followers . 400 following</p>
                            <p>Lives in Tacloban City</p>
                            <button class="message-button"><i class="fa fa-envelope"
                                    aria-hidden="true"></i>Message</button>
                            <button class="follow-button"><i class="fa fa-plus" aria-hidden="true"></i>Follow</button>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle ellipsis-button" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-h ellipsis-icon ml-auto" aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fa fa-exclamation-circle"
                                            aria-hidden="true" style="margin-right: 7px"></i>
                                        Report</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-ban" aria-hidden="true"
                                            style="margin-right: 7px"></i>Block</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="ratings">
                        <p>Ratings <span class="rate">100</span></p>
                        <p>Books Bought <span class="bought">20</span></p>
                        <p>Books Lent <span class="lent">120</span></p>
                    </div>
                </div>
                <div class="col">
                    <div class="ratings">
                        <p>Books Sold <span class="sold">203</span></p>
                        <p>Books Exchanged <span class="exchange">59</span></p>
                        <p>Books Rented <span class="rent">9</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-details">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="/userlistings">Listings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="/userreviews">User Reviews and Ratings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/userwishlist">Wish List</a>
                </li>
            </ul>
        </div>
        <div class="wishlist">
            <h4 style="margin-left: 2em;">Wish List</h4>
            <div class="wishlist mx-4 mt-2 ml-7">
                <h6>Nestine Wish List</h6>
                <div class="mx-3 pb-3 d-flex overflow-x-auto">
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Another WIshlist -->
            <div class="wishlist mx-4 mt-2 ml-7">
                <h6>Eubert Wish List</h6>
                <div class="mx-3 pb-3 d-flex overflow-x-auto">
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
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