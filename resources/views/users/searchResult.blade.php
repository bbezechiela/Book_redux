@include('partials.__header', [
'title' => 'My List | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/homepage-style.css',
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
    <div id="content" class="pe-0 border content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
            <div class="w-100 d-flex mt-1 p-0">
                <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <a href="/explore" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png" alt="Logo"></a>
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
        <div class="search-result-text">
            <p><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Search result for '<span>educational</span>'</p>
        </div>
        <div class="col-4 d-flex justify-content-start align-items-center" style="margin-left: 4em;">
            <div id="content-cards" class="w-100 mx-2 d-flex justify-content-start px-4" style="height: 300px;">
                <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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