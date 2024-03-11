@include('partials.__header', [
'title' => 'Product | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/singleProduct-style.css',
'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easyzoom@2.5.3/css/easyzoom.css" />
<script src="https://cdn.jsdelivr.net/npm/easyzoom@2.5.3/src/easyzoom.js"></script>
</head>

<body>
    <div id="body-container" class="container-fluid px-0">
        <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start" tabindex="-1"
            aria-labelledby="offcanvasExampleLabel">
            <x-sidebar />
        </div>
        <div id="content" class="content">
            <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
                <div class="w-100 d-flex mt-2 p-0">
                    <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                        aria-controls="offcanvasExample">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5" src="/assets/Book_Logo.png"
                            alt="Logo"></a>
                </div>
                <div class="position-absolute end-0">
                    <div class="d-flex">
                        {{-- <div class="input-group mt-1" style="height: 2em">
                            <span class="input-group-text">
                                <i class="fa fa-search"></i>
                            </span>
                            <div class="position-relevant">
                                <input id="search_input" class="form-control rounded-3" type="text"
                                    placeholder="Search">
                                <div id="searches" class="position-absolute border bg-light w-100 p-2"
                                    style="cursor: pointer;">
                                </div>
                            </div>
                        </div> --}}
                        {{-- <a href="/messages"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" data-bs-title="Messages">
                                <i class="fa fa-envelope-o" aria-hidden="true"
                                    style="font-size: 20px; color: #003060;"></i>
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
                                    <li><a class="dropdown-item" href="/mypurchase">My Exchange Request</a></li>
                                    <li><a class="dropdown-item" href="/addresses">Addresses</a></li>
                                    <li><a class="dropdown-item" href="/changepassword">Change Password</a></li>
                                    <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </ul>
            @if ($book_id->status == 'Exchange')
            {{-- <div class="card mb-3 book-details mx-4">
                <div class="row g-0">
                    <div class="col-md-4 p-5 stretch-card">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active easyzoom easyzoom--overlay" data-bs-interval="10000">
                                    <img src="{{ asset('images/books/' . $book_id->book_photo) }}"
                                        class="img-fluid mx-auto rounded d-block mx-auto mainimage" alt="product"
                                        width="300px" height="564px">
                                </div>
                                <div class="carousel-item easyzoom easyzoom--overlay" data-bs-interval="2000">
                                    <img src="{{ asset('images/interior_photo/' . $book_id->interior_photo) }}"
                                        class="img-fluid mx-auto rounded d-block mx-auto mainimage" alt="product"
                                        width="300px" height="564px">
                                </div>
                                <div class="carousel-item easyzoom easyzoom--overlay">
                                    <img src="{{ asset('images/book_cover/' . $book_id->back_cover) }}"
                                        class="img-fluid mx-auto rounded d-block mx-auto mainimage" alt="product"
                                        width="300px" height="564px">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true" style="color: #003060"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div> --}}
            <div class="card mb-3 book-details mx-4">
                <div class="row g-0">
                    <div class="col-md-4 p-5 stretch-card">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-inner">
                                    <div class="carousel-item active easyzoom easyzoom--overlay" data-bs-interval="10000">
                                        <img src="{{ asset('images/books/' . $book_id->book_photo) }}"
                                            class="img-fluid mx-auto rounded d-block mx-auto mainimage" alt="product"
                                            width="300px" height="564px">
                                    </div>
                                    <div class="carousel-item easyzoom easyzoom--overlay" data-bs-interval="2000">
                                        <img src="{{ asset('images/interior_photo/' . $book_id->interior_photo) }}"
                                            class="img-fluid mx-auto rounded d-block mx-auto mainimage" alt="product"
                                            width="300px" height="564px">
                                    </div>
                                    <div class="carousel-item easyzoom easyzoom--overlay">
                                        <img src="{{ asset('images/book_cover/' . $book_id->back_cover) }}"
                                            class="img-fluid mx-auto rounded d-block mx-auto mainimage" alt="product"
                                            width="300px" height="564px">
                                    </div>
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"
                                    style="color: #003060"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">

                            <h3 class="card-title">{{ $book_id->title }} <a href="" data-bs-toggle="modal"
                                    data-bs-target="#report">Report</a></h3>
                            <h5 class="card-title"><span style="color: #E55B13; font-weight: bold;"></span>
                                <span> For {{ $book_id->status }}
                                    |</span> <span>{{ $book_id->genre }}</span>
                            </h5>

                            <p class="card-text">Author: <span>{{ $book_id->author }}</span></p>
                            <p class="card-text">Edition: <span>{{ $book_id->edition }}</span></p>
                            <div class="d-flex justify-content-start align-items-center mb-2">
                                <div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-center">
                                    <p class="m-0" style="color: #003060;">ISBN:
                                        <span> 3456658998 </span>
                                    </p>
                                </div>
                            </div>
                            <p class="card-text">Format: <span>Paperback</span>
                            </p>
                            <p class="card-text">Condition: <span>{{ $book_id->condition }}</span>
                            </p>
                            <p class="card-text">Exchange Preferences:
                                <span>{{ $book_id->exchange_preferences }}</span>
                            </p>
                            <p class="card-text">Description: <span>{{ $book_id->description }}</span></p>
                            <p class="card-text location-text"><i class="fa fa-map-marker"
                                    aria-hidden="true"></i>{{ $user_id->address }}Bagacay, Tacloban</p>
                            <a href="" data-bs-toggle="modal" class="btn cart-button" data-bs-target="#exchange_request"
                                style="margin-bottom: 1em;">Send Exchange Request
                                <i class="fa fa-exchange" aria-hidden="true"
                                    style="margin-left: 8px; margin-right: 4px;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <h3 style="color: #003060; margin-top: 1em; margin-left: 3em;">Interested Users</h3>
            <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/nestine.png" class="rounded-circle shadow-4-strong img-fluid"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/Eubert.png" class="rounded-circle shadow-4-strong img-fluid"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/osama.png" class="rounded-circle shadow-4-strong img-fluid"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/7.png" class="rounded-circle shadow-4-strong img-fluid"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/8.png" class="rounded-circle shadow-4-strong img-fluid"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/4.jpg" class="rounded-circle shadow-4-strong"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/5.jpg" class="rounded-circle shadow-4-strong"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/6.jpg" class="rounded-circle shadow-4-strong"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/3.jpg" class="rounded-circle shadow-4-strong img-fluid"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/broke-empty.png" class="rounded-circle shadow-4-strong img-fluid"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/b1.jpg" class="rounded-circle shadow-4-strong img-fluid"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/4.jpg" class="rounded-circle shadow-4-strong"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/5.jpg" class="rounded-circle shadow-4-strong"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/6.jpg" class="rounded-circle shadow-4-strong"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/bookstore.png" class="rounded-circle shadow-4-strong"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/users.png" class="rounded-circle shadow-4-strong"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/4.jpg" class="rounded-circle shadow-4-strong"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/5.jpg" class="rounded-circle shadow-4-strong"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/6.jpg" class="rounded-circle shadow-4-strong"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/bookstore.png" class="rounded-circle shadow-4-strong"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/users.png" class="rounded-circle shadow-4-strong"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/4.jpg" class="rounded-circle shadow-4-strong"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/5.jpg" class="rounded-circle shadow-4-strong"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <img src="/assets/6.jpg" class="rounded-circle shadow-4-strong"
                                        style="width: 80px; height: 80px;" alt="...">
                                    <p style="color:#003060;">Nestine</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon one" aria-hidden="true" style="background-color: #d1c7c7;
                    border-radius: 50%;"></span>
                    <span class="visually-hidden one">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon one" aria-hidden="true" style="background-color: #d1c7c7;
                    border-radius: 50%;"></span>
                    <span class="visually-hidden one">Next</span>
                </button>
            </div>
        </div>
        @elseif ($book_id->status == 'Rent')
        <div class="card mb-3 book-details mx-4">
            <div class="row g-0">
                <div class="col-md-4 p-5">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="{{ asset('images/books/' . $book_id->book_photo) }}"
                                    class="img-fluid mx-auto rounded d-block mx-auto" alt="product" width="300px"
                                    height="564px">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{ asset('images/interior_photo/' . $book_id->interior_photo) }}"
                                    class="img-fluid mx-auto rounded d-block mx-auto" alt="product" width="300px"
                                    height="564px">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/book_cover/' . $book_id->back_cover) }}"
                                    class="img-fluid mx-auto rounded d-block mx-auto" alt="product" width="300px"
                                    height="564px">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book_id->title }} <a href="" data-bs-toggle="modal"
                                data-bs-target="#report">Report</a></h5>
                        <h6 class="card-title"><span style="color: #E55B13; font-weight: bold;">₱{{ $book_id->price }}
                            </span>
                            <span>| For {{ $book_id->status }}
                                |</span> <span>{{ $book_id->genre }}</span>
                        </h6>
                        </p>
                        <p class="card-text">Security Deposit <span
                                style="font-weight: bold;">₱{{ $book_id->security_deposit }}</span>
                        </p>
                        <p class="card-text">Author: <span>{{ $book_id->author }}</span></p>
                        <p class="card-text">Edition: <span>{{ $book_id->edition }}</span>
                        </p>
                        <div class="d-flex justify-content-start align-items-center mb-2">
                            <div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-center">
                                <p class="m-0" style="color: #003060;">Quantity:
                                    <span>{{ $book_id->stock }}
                                        pieces available</span>
                                </p>
                            </div>
                        </div>
                        <p class="card-text">Language: <span>{{ $book_id->language }}</span>
                        </p>
                        <p class="card-text">Condition: <span>{{ $book_id->condition }}</span>
                        </p>
                        <p class="card-text">Rental Duration: <span>{{ $book_id->rental_duration }}</span></p>
                        <p class="card-text">Rental Terms & Condition:
                            <span>{{ $book_id->rental_terms_and_condition }}</span>
                        </p>
                        <p class="card-text">Product Description: <span>{{ $book_id->description }}</span></p>
                        <p class="card-text"><small class="text-body-secondary">{{ $user_id->address }}</small>
                        </p>

                        @if ($book_id->unit == 'Added to Cart' && $book_id->user_id == session('id'))
                        <p class="fs-3 fw-bold text-success">Item added to Cart</p>
                        @else
                        <a href="/addtocart/{{ $book_id->id }}" class="btn cart-button"><i class="fa fa-cart-plus"
                                aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="card mb-3 book-details mx-4">
            <div class="row g-0">
                <div class="col-md-4 p-5">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="{{ asset('images/books/' . $book_id->book_photo) }}"
                                    class="img-fluid mx-auto rounded d-block mx-auto" alt="product" width="300px"
                                    height="564px">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{ asset('images/interior_photo/' . $book_id->interior_photo) }}"
                                    class="img-fluid mx-auto rounded d-block mx-auto" alt="product" width="300px"
                                    height="564px">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/book_cover/' . $book_id->back_cover) }}"
                                    class="img-fluid mx-auto rounded d-block mx-auto" alt="product" width="300px"
                                    height="564px">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book_id->title }} <a href="" data-bs-toggle="modal"
                                data-bs-target="#report">Report</a></h5>
                        <h6 class="card-title"><span style="color: #E55B13; font-weight: bold;">₱{{ $book_id->price }}
                            </span>
                            <span>| For {{ $book_id->status }}
                                |</span> <span>{{ $book_id->genre }}</span>
                        </h6>

                        </p>
                        <p class="card-text">Author: <span>{{ $book_id->author }}</span></p>
                        <p class="card-text">Edition: <span>{{ $book_id->edition }}</span>
                        </p>
                        <div class="d-flex justify-content-start align-items-center mb-2">
                            <div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-center">
                                <p class="m-0" style="color: #003060;">Quantity:
                                    <span>{{ $book_id->stock }}
                                        pieces available</span>
                                </p>

                            </div>
                        </div>
                        <p class="card-text">Language: <span>{{ $book_id->language }}</span>
                        </p>
                        <p class="card-text">Condition: <span>{{ $book_id->condition }}</span>
                        </p>
                        <p class="card-text">Description: <span>{{ $book_id->description }}</span></p>
                        <p class="card-text"><small class="text-body-secondary">{{ $user_id->address }}</small>
                        </p>

                        @if ($book_id->unit == 'Added to Cart' && $book_id->user_id == session('id'))
                        <p class="fs-3 fw-bold text-success">Item added to Cart</p>
                        @else
                        <a href="/addtocart/{{ $book_id->id }}" class="btn cart-button"><i class="fa fa-cart-plus"
                                aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>

                        @endif

                    </div>
                </div>
            </div>
        </div>
        @endif
        <h3 style="color: #003060; margin-top: 1em; margin-left: 3em;">Book Sharer</h3>
        <div class="container text-center seller-details">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('images/profile_photos/' . $user_id->profile_photo) }}" alt="seller image"
                            class="circle-picture">
                        <div class="user-info">
                            @if ($user_id->type == 'Bookseller')
                            <p>{{ $user_id->business_name }}</p>
                            @else
                            <p>{{ $user_id->first_name . ' ' . $user_id->last_name }}</p>
                            @endif
                            {{-- <p>2K followers . 400 following</p> --}}
                            <button class="message-button" data-username="{{ $user_id->username }}"><i
                                    class="fa fa-envelope" aria-hidden="true"></i>Message</button>
                            <a href="/userlistings/{{ $user_id->id }}"><button class="view-profile-button"><i
                                        class="fa fa-eye" aria-hidden="true"></i>Profile</button></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="listings">
                        <h4 style="color: #E55B13;">20 </h4>
                        <p class="card-text">Listed Books for Exchange</p>
                    </div>
                </div>
                <div class="col">
                    <div class="listings">
                        <h4 style="color: #E55B13;">10 </h4>
                        <p class="card-text">Listed Books for Online Reading</p>
                    </div>
                </div>
                <div class="col">
                    <div class="reviews">
                        <h4 style="color: #E55B13;">18</h4>
                        <p class="card-text">User Ratings and Reviews</p>
                    </div>
                </div>
                {{-- <div class="col">
                    <div class="ratings">
                        @if ($user_id->type == 'Bookseller')
                        @else
                        <p>Preferred genres:<span class="exchange">{{ $user_id->interest }}</span></p>
                        @endif

                    </div>
                </div> --}}
                <div class="ratings" style="background-color:#F6F5F5; border-radius: 8px; padding: 10px 17px; margin: 10px 0px 0px;">
                    <p>Preferred genres:<span class="exchange">{{ $user_id->interest }}</span></p>
                </div>
            </div>
        </div>
        

        {{-- <div class="ratings-review">
                <div class="card-body rating-details">
                </div>
                <div class="container text-center review-rating-details">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="rating-info">
                                    <h4>4.9</h4>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="ratings">
                                <a href="#" class="btn active d-block rate-button" role="button"
                                    data-bs-toggle="button" aria-pressed="true"
                                    style="background-color: #003060; border-color: #003060; color: #fff;">All
                                    <span>(10)</span></a>
                                <a href="#" class="btn d-block rate-button" role="button"
                                    data-bs-toggle="button">3
                                    Star
                                    <span>(20)</span></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="ratings">
                                <a href="#" class="btn d-block rate-button" role="button"
                                    data-bs-toggle="button" aria-pressed="true">5 Star
                                    <span>(100)</span></a>
                                <a href="#" class="btn d-block rate-button" role="button"
                                    data-bs-toggle="button">2
                                    Star
                                    <span>(20)</span></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="ratings">
                                <a href="#" class="btn d-block rate-button" role="button"
                                    data-bs-toggle="button" aria-pressed="true">4 star
                                    <span>(10)</span></a>
                                <a href="#" class="btn d-block rate-button" role="button"
                                    data-bs-toggle="button">1
                                    Star
                                    <span>(59)</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        @foreach ($book_id->item as $items)
        @foreach ($items->ratedItem as $itemReviews)
        @if ($itemReviews->user_id != $items->book->user_id)
        <div class="container text-center customer-ratings">
            <div class="row align-items-center">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('images/profile_photos/' . $itemReviews->user->profile_photo) }}"
                        alt="seller image" class="customer-picture">
                    <div class="customer-ratings-info">
                        <p>{{ $itemReviews->user->first_name . ' ' . $itemReviews->user->last_name }}
                        </p>
                        @if ($itemReviews->rate_value == 1)
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @elseif ($itemReviews->rate_value == 2)
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @elseif ($itemReviews->rate_value == 3)
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @elseif ($itemReviews->rate_value == 4)
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @elseif ($itemReviews->rate_value == 5)
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        @endif
                        <p style="font-weight: bold;">{{ $items->book->status }}</p>
                        <p>{{ $itemReviews->created_at->format('F j, Y, g:i a') }}</p>
                        <p>Condition: <span>{{ $itemReviews->condition_accuracy }}</span></p>
                        <p>Accuracy of Description:
                            <span>{{ $itemReviews->description_accuracy }}</span>
                        </p>
                        <p>Interaction: <span>{{ $itemReviews->interaction }}</span></p>
                        <p>{{ $itemReviews->description }}</p>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    @if (isset($itemReviews->first_img))
                                    <img src="{{ asset('images/rate_images/' . $itemReviews->first_img) }}"
                                        alt="Image 1" class="d-inline square-picture">
                                    @endif
                                    @if (isset($itemReviews->second_img))
                                    <img src="{{ asset('images/rate_images/' . $itemReviews->second_img) }}"
                                        alt="Image 1" class="d-inline square-picture">
                                    @endif
                                    @if (isset($itemReviews->third_img))
                                    <img src="{{ asset('images/rate_images/' . $itemReviews->third_img) }}"
                                        alt="Image 1" class="d-inline square-picture">
                                    @endif
                                    @if (isset($itemReviews->fourth_img))
                                    <img src="{{ asset('images/rate_images/' . $itemReviews->fourth_img) }}"
                                        alt="Image 1" class="d-inline square-picture">
                                    @endif
                                    @if (isset($itemReviews->fifth_img))
                                    <img src="{{ asset('images/rate_images/' . $itemReviews->fifth_img) }}"
                                        alt="Image 1" class="d-inline square-picture">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        @endforeach

    </div>

    </div>
    </div>

    <!-- Exchange Request Modal -->
    <div class="modal fade" id="exchange_request" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:#003060;">Exchange Request Form
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault01" style="color:#003060;">Title</label>
                                <input type="text" class="form-control" id="validationDefault01" placeholder="Title"
                                    value="" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault02" style="color:#003060;">ISBN</label>
                                <input type="text" class="form-control" id="validationDefault02" placeholder="ISBN"
                                    value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault03" style="color:#003060;">Author</label>
                                <input type="text" class="form-control" id="validationDefault03" placeholder="Author"
                                    required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault04" style="color:#003060;">Genre</label>
                                <select class="form-control" id="validationDefault04">
                                    <option selected>Genre</option>
                                    <option value="Educational">Educational</option>
                                    <option value="Romance & Saga">Romance & Saga</option>
                                    <option value="Fantasy & Adventure">Fantasy & Adventure</option>
                                    <option value="Science Fiction">Science Fiction</option>
                                    <option value="Historical Fiction">Historical Fiction</option>
                                    <option value="Mystery & Suspense">Mystery & Suspense</option>
                                    <option value="Young Adult">Young Adult</option>
                                    <option value="Non-Fiction & Biography">Non-Fiction & Biography</option>
                                    <option value="Horror & Supernatural">Horror & Supernatural</option>
                                    <option value="Comedy & Satire">Comedy & Satire</option>
                                    <option value="Poetry & Prose">Poetry & Prose</option>
                                    <option value="Self-Help">Self-Help</option>
                                    <option value="Crime & Thriller">Crime & Thriller</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault05" style="color:#003060;">Edition</label>
                                <input type="text" class="form-control" id="validationDefault05" placeholder="Edition"
                                    required>
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="validationDefault06" style="color:#003060;">Format</label>
                                <select class="form-control" id="validationDefault06">
                                    <option selected>Format</option>
                                    <option value="Hardback">Hardback</option>
                                    <option value="Paperback">Paperback</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault07" style="color:#003060;">Condition</label>
                                <select class="form-control" id="validationDefault07">
                                    <option selected>Condition</option>
                                    <option value="New">New</option>
                                    <option value="Like New">Like New</option>
                                    <option value="Very Good">Very Good</option>
                                    <option value="Good">Good</option>
                                    <option value="Fair">Fair</option>
                                    <option value="Poor">Poor</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault08" style="color:#003060;">Exchange Method
                                    Preference</label>
                                <select class="form-control" id="validationDefault08">
                                    <option selected>Exchange Method Preference</option>
                                    <option value="Meetup">Meetup</option>
                                    <option value="Delivery">Delivery</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label report-input"
                                    style="color:#003060;">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                    placeholder="Describe the book's shortcomings or add other important information concerning the request"
                                    rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <p style="color:#003060;">Images of the book you want to offer
                                <div class="image-container">
                                    <div class="image-holder">
                                        <input id="first-img" type="file" accept="image/*" class="d-none" required>
                                        <label for="">Front Cover</label><br>
                                        <label for="first-img"><i id="first-plus" class="fa fa-plus" aria-hidden="true"
                                                style="cursor: pointer;"><img src="" id="one-image" alt=""></i></label>
                                    </div>
                                    <div class="image-holder">
                                        <input id="second-img" type="file" accept="image/*" class="d-none">
                                        <label for="">Back Cover</label><br>
                                        <label for="second-img"><i id="second-plus" class="fa fa-plus"
                                                aria-hidden="true" style="cursor: pointer;"><img src="" id="two-image"
                                                    alt=""></i></label>
                                    </div>
                                    <div class="image-holder">
                                        <input id="third-img" type="file" accept="image/*" class="d-none">
                                        <label for="">Content</label><br>
                                        <label for="third-img"><i id="three-plus" class="fa fa-plus" aria-hidden="true"
                                                style="cursor: pointer;"><img src="" id="three-image"
                                                    alt=""></i></label>
                                    </div>
                                    <div class="image-holder">
                                        <input id="fourth-img" type="file" accept="image/*" class="d-none">
                                        <label for="">Content</label><br>
                                        <label for="fourth-img"><i id="four-plus" class="fa fa-plus" aria-hidden="true"
                                                style="cursor: pointer;"><img src="" id="four-image" alt=""></i></label>
                                    </div>
                                    <div class="image-holder">
                                        <input id="fifth-img" type="file" accept="image/*" class="d-none">
                                        <label for="">Content</label><br>
                                        <label for="fifth-img"><i id="five-plus" class="fa fa-plus" aria-hidden="true"
                                                style="cursor: pointer;"><img src="" id="five-image" alt=""></i></label>
                                    </div>
                                </div>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button submit" class="btn report-button">Send Request</button>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="modal fade" id="exchange_request" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:#003060;">Exchange Request Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <label for="validationDefault01">First name</label>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationDefault02">Last name</label>
                            <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationDefaultUsername">Username</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                              </div>
                              <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="validationDefault03">City</label>
                            <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationDefault04">State</label>
                            <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationDefault05">Zip</label>
                            <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                              Agree to terms and conditions
                            </label>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                      </form>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label report-input"
                            style="color:#003060;">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"
                            placeholder="Please further elaborate on your selected reason" rows="7" style="color:#003060;"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn report-button">Report</button>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Report Modal -->
    <div class="modal fade" id="report" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:#003060;">Select a
                        Reason</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-check">
                        <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                            Counterfeit and copyright
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                            Prohibited item
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                            Offensive or potentially offensive item
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                            Fraudulent listing
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                            Others
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label report-input"
                            style="color:#003060;">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"
                            placeholder="Please further elaborate on your selected reason" rows="7"
                            style="color:#003060;"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn report-button">Report</button>
                </div>
            </div>
        </div>
    </div>
</body>

@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])

<script>
   document.addEventListener('DOMContentLoaded', function () {
        const images = document.querySelectorAll('.easyzoom img');
        images.forEach(img => {
            img.addEventListener('mousemove', function (e) {
                const rect = e.target.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                img.style.transformOrigin = `${x}px ${y}px`;
                img.style.transform = 'scale(2)'; // Adjust the scale value for desired zoom level
            });

            img.addEventListener('mouseout', function () {
                img.style.transform = 'scale(1)';
            });
        });
    });
</script>

<script>
    // search script
    var search = document.getElementById('search_input');
    var searchContainer = document.getElementById('searches');
    if (search.value.trim().length < 1) {
        searchContainer.style.display = 'none'
    }
    search.addEventListener('keydown', (event) => {
        if (event.key === 'Enter' || event.keyCode === 13) {
            window.location.href = '/searchitem/' + search.value;
        }
    });
    search.addEventListener('input', () => {
        if (search.value.trim().length > 1) {
            const requestOptions = {
                method: 'GET',
            };
            fetch('/search/' + search.value.trim(), requestOptions)
                .then(response => response.json())
                .then(result => {
                    searchContainer.style.display = 'inline';
                    searchContainer.innerHTML = '';
                    // console.log(result);
                    result.forEach(data => {
                        console.log(data);
                        if (data.unit == 'Available') {
                            const suggestionElement = document.createElement('div');
                            const searchedImage = document.createElement('img');
                            const searchedContent = document.createElement('div');
                            const titleText = document.createElement('p');
                            const authorText = document.createElement('p');
                            // suggestionElement.textContent = data.title;
                            suggestionElement.id = "searched-item";
                            suggestionElement.className = 'row px-2';
                            searchedImage.src = '/images/books/' + data.book_photo;
                            searchedImage.className = 'col-3 px-0 bg-light';
                            searchedContent.className = 'col border';
                            searchedContent.id = 'textContent';
                            titleText.className = 'm-0 fw-bold';
                            titleText.id = 'searched-title';
                            titleText.textContent = data.title;
                            authorText.id = 'searched-author';
                            authorText.textContent = data.author;
                            suggestionElement.addEventListener('click', () => {
                                window.location.href = "/product/" + data.id + "/" + data
                                    .user_id;
                                searchContainer.innerHTML = '';
                            });
                            searchContainer.appendChild(suggestionElement);
                            suggestionElement.appendChild(searchedImage);
                            suggestionElement.appendChild(searchedContent);
                            searchedContent.appendChild(titleText);
                            searchedContent.appendChild(authorText);
                        }
                    });
                })
                .catch(error => console.log('error', error));
        } else {
            searchContainer.style.display = 'none'
            searchContainer.innerHTML = '';
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const messageButtons = document.querySelectorAll('.message-button');
        messageButtons.forEach(button => {
            button.addEventListener('click', function() {
                const username = button.dataset.username;
                redirectToMessaging(username);
            });
        });

        function redirectToMessaging(username) {
            const messagingUrl = `/messages/${username}`;
            window.location.href = messagingUrl;
        }
    });
</script>

<script>
    var first_img = document.getElementById('first-img');
    var second_img = document.getElementById('second-img');
    var third_img = document.getElementById('third-img');
    var fourth_img = document.getElementById('fourth-img');
    var fifth_img = document.getElementById('fifth-img');
    first_img.addEventListener('change', () => {
        var img = document.getElementById('one-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('first-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });
    second_img.addEventListener('change', () => {
        var img = document.getElementById('two-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('second-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });
    third_img.addEventListener('change', () => {
        var img = document.getElementById('three-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('three-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });
    fourth_img.addEventListener('change', () => {
        var img = document.getElementById('four-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('four-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });
    fifth_img.addEventListener('change', () => {
        var img = document.getElementById('five-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('five-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });

    function ratingReview(user_id, type, item_id) {
        submit_btn.disabled = false;
        first_img.value = '';
        second_img.value = '';
        third_img.value = '';
        fourth_img.value = '';
        fifth_img.value = '';
        document.getElementById('one-image').src = '';
        document.getElementById('two-image').src = '';
        document.getElementById('three-image').src = '';
        document.getElementById('four-image').src = '';
        document.getElementById('five-image').src = '';
        document.getElementById('one-image').style.width = '0px';
        document.getElementById('two-image').style.width = '0px';
        document.getElementById('three-image').style.width = '0px';
        document.getElementById('four-image').style.width = '0px';
        document.getElementById('five-image').style.width = '0px';
        document.getElementById('one-image').style.height = '0px';
        document.getElementById('two-image').style.height = '0px';
        document.getElementById('three-image').style.height = '0px';
        document.getElementById('four-image').style.height = '0px';
        document.getElementById('five-image').style.height = '0px';
        document.getElementById('first-plus').className = 'fa fa-plus';
        document.getElementById('second-plus').className = 'fa fa-plus';
        document.getElementById('three-plus').className = 'fa fa-plus';
        document.getElementById('four-plus').className = 'fa fa-plus';
        document.getElementById('five-plus').className = 'fa fa-plus';
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add an event listener for when the carousel slides
        var myCarousel = document.getElementById('carouselExampleRide');
        myCarousel.addEventListener('slid.bs.carousel', function() {
            // Get the current active slide index
            var currentIndex = $('.carousel-inner .carousel-item.active').index();
            // Calculate the number of items per slide
            var itemsPerSlide = 3;
            // Calculate the total number of slides
            var totalSlides = Math.ceil($('.carousel-item').length / itemsPerSlide);
            // If it's the last slide, go back to the first slide
            if (currentIndex == totalSlides - 1) {
                myCarousel.carousel(0);
            }
        });
    });
</script>