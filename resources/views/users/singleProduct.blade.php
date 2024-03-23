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
                                    {{-- <li><a class="dropdown-item" href="/changepassword">Change Password</a></li> --}}
                                    <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </ul>
            @if ($book_id->status == 'Exchange')
            <div class="card mb-3 book-details mx-4">
                <div class="row g-0">
                    <div class="col-md-4 p-5 stretch-card">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-inner">
                                    <div class="carousel-item active easyzoom easyzoom--overlay"
                                        data-bs-interval="10000">
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
        <div class="ratings"
            style="background-color:#F6F5F5; border-radius: 8px; padding: 10px 17px; margin: 10px 0px 0px;">
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
                <img src="{{ asset('images/profile_photos/' . $itemReviews->user->profile_photo) }}" alt="seller image"
                    class="customer-picture">
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
                                <img src="{{ asset('images/rate_images/' . $itemReviews->first_img) }}" alt="Image 1"
                                    class="d-inline square-picture">
                                @endif
                                @if (isset($itemReviews->second_img))
                                <img src="{{ asset('images/rate_images/' . $itemReviews->second_img) }}" alt="Image 1"
                                    class="d-inline square-picture">
                                @endif
                                @if (isset($itemReviews->third_img))
                                <img src="{{ asset('images/rate_images/' . $itemReviews->third_img) }}" alt="Image 1"
                                    class="d-inline square-picture">
                                @endif
                                @if (isset($itemReviews->fourth_img))
                                <img src="{{ asset('images/rate_images/' . $itemReviews->fourth_img) }}" alt="Image 1"
                                    class="d-inline square-picture">
                                @endif
                                @if (isset($itemReviews->fifth_img))
                                <img src="{{ asset('images/rate_images/' . $itemReviews->fifth_img) }}" alt="Image 1"
                                    class="d-inline square-picture">
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
                        <button type="button" id="exchange-shipping-fee-btn" class="form-control"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Click to open shipping form"
                            style="text-align: justify; margin-bottom: 12px;">
                            Shipping Fee (DRE PA NA SHOW AN ANOTHER MODAL AHHAHA)
                        </button>
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

 {{-- shipping fee --}}
 <div class="modal fade" id="shipping-fee" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
 aria-labelledby="staticBackdropLabel" aria-hidden="true">
 <div class="modal-dialog">
     <div class="modal-content">
         <div class="modal-header text-center">
             <button id="back-shipping" class="btn text-decoration-none float-start"><img
                     src="{{ asset('assets/left_arrow.png') }}" alt="back"></button>
             <div class="d-flex justify-content-center w-100">
                 <h3 class="modal-title" id="staticBackdropLabel">Shipping Fee</h3>
             </div>
         </div>
         <div class="modal-body py-2 px-4">
             <span class="m-0 p-0" style="color: #737679; text-align: justify; font-size: 15px">Please
                 fill
                 in dimensions accurately. Inaccurate or missing dimensions may result in additional shipping
                 fee or failed delivery.</span>
             <input type="number" name="weight" id="weight" class="form-control" placeholder="Weight (kg)"
                 style="margin-bottom: 7px; margin-top: 8px; color: #003060;"><br>

             <label class="fw-bold" for="size">Packaging Size</label><br>
             <input id="width" name="width" type="number" class="form-control" placeholder="Width (cm)"
                 style="margin-bottom: 7px; color: #003060;"><br>
             <input id="height" name="height" type="number" class="form-control" placeholder="Height (cm)"
                 style="margin-bottom: 7px; color: #003060;"><br>
             <input id="length" name="length" type="number" class="form-control" placeholder="Length (cm)"
                 style="margin-bottom: 7px; color: #003060;"><br>

             <label class="fw-bold" for="courier">Please Select Courier</label><br>
             {{-- <input id="jrs" class="ms-2" name="courier" type="radio" value="JRS Express">
                 <label for="jrs">JRS Express</label><br> --}}
             <input id="jt" class="ms-2" name="courier" type="radio" value="J&T Express">
             <label for="jt">J&T Express</label>
         </div>
         <div class="modal-footer">
             <button type="button" id="shipping-save-btn" class="btn mx-auto w-25 text-white rounded-3"
                 style="background-color: #E55B13;">Save</button>
         </div>
     </div>
 </div>
</div>

{{-- edit shipping fee --}}
<div class="modal fade" id="edit-shipping-fee" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
 aria-labelledby="staticBackdropLabel" aria-hidden="true">
 <div class="modal-dialog">
     <div class="modal-content">
         <div class="modal-header text-center">
             <button id="edit-back-shipping" class="btn text-decoration-none float-start"><img
                     src="{{ asset('assets/left_arrow.png') }}" alt="back"></button>
             <div class="d-flex justify-content-center w-100">
                 <h3 class="modal-title" id="staticBackdropLabel">Shipping Fee</h3>
             </div>
         </div>
         <div class="modal-body py-2 px-4">
             <span class="m-0 p-0" style="color: #737679; text-align: justify; font-size: 15px">Please
                 fill
                 in dimensions accurately. Inaccurate or missing dimensions may result in additional shipping
                 fee or failed delivery.</span>
             <input type="number" name="weight" id="edit-weight" class="form-control" placeholder="Weight (kg)"
                 style="margin-bottom: 7px; color: #003060;"><br>

             <label class="fw-bold" for="size">Packaging Size</label><br>
             <input id="edit-width" name="width" type="number" class="form-control" placeholder="Width (cm)"
                 style="margin-bottom: 7px; color: #003060;"><br>
             <input id="edit-height" name="height" type="number" class="form-control" placeholder="Height (cm)"
                 style="margin-bottom: 7px; color: #003060;"><br>
             <input id="edit-length" name="length" type="number" class="form-control" placeholder="Length (cm)"
                 style="margin-bottom: 7px; color: #003060;"><br>

             <label class="fw-bold" for="courier">Please Select Courier</label><br>
             {{-- <input id="edit-jrs" class="ms-2" name="courier" type="radio" value="JRS Express">
                 <label for="edit-jrs">JRS Express</label><br> --}}
             <input id="edit-jt" class="ms-2" name="courier" type="radio" value="J&T Express">
             <label for="edit-jt">J&T Express</label>
         </div>
         <div class="modal-footer">
             <button type="button" id="edit-shipping-save-btn" class="btn mx-auto w-25 text-white rounded-3"
                 style="background-color: #E55B13;">Save</button>
         </div>
     </div>
 </div>
</div>

@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])

<script>
    function arrangeShipment(book_id, item_id) {
        address_modal.innerHTML = '';
        id_book = book_id;
        fetch('/getorderdetails/' + book_id, {
                method: 'GET'
            })
            .then(response => response.json())
            .then(result => {
                // console.log(result);
                result.user.address_user.forEach(address => {
                    console.log(address);
                    if (address.id == parseInt(selected_adress)) {
                        seller_name.value = address.name;
                        seller_contact_num.value = address.contact_number;
                        seller_add.value = address.address;
                        pickup_name.textContent = address.name;
                        pickup_phone.textContent = address.contact_number;
                        pickup_address.textContent = address.address;
                        pickup_postal.textContent = address.postal_code;
                    } else if (address.default_address) {
                        selected_adress = address.id;
                        seller_name.value = address.name;
                        seller_contact_num.value = address.contact_number;
                        seller_add.value = address.address;
                        pickup_name.textContent = address.name;
                        pickup_phone.textContent = address.contact_number;
                        pickup_address.textContent = address.address;
                    }
                    var address_label = document.createElement('label');
                    var address_text_section = document.createElement('div');
                    var add_pickup_name = document.createElement('p');
                    var add_pickup_phone = document.createElement('p');
                    var add_pickup_address = document.createElement('p');
                    var add_pickup_postal = document.createElement('p');
                    var address_radio = document.createElement('input');
                    address_label.className = 'pickup-address mb-2';
                    address_label.htmlFor = 'id_' + address.id;
                    address_text_section.className = 'text-section';
                    // add_pickup_name.id = 'pickup-name';
                    // add_pickup_name.className = 'fw-bold';
                    // add_pickup_phone.id = 'pickup-phone';
                    // add_pickup_address.id = 'pickup-address';
                    // add_pickup_postal.id = 'pickup-postal';
                    address_radio.id = 'id_' + address.id;
                    address_radio.type = 'radio';
                    address_radio.name = 'address_id';
                    address_radio.value = address.id;
                    add_pickup_name.textContent = address.name;
                    add_pickup_phone.textContent = address.contact_number;
                    add_pickup_address.textContent = address.address;
                    address_modal.appendChild(address_label);
                    address_label.appendChild(address_text_section);
                    address_text_section.appendChild(add_pickup_name);
                    address_text_section.appendChild(add_pickup_phone);
                    address_text_section.appendChild(add_pickup_address);
                    address_text_section.appendChild(add_pickup_postal);
                    address_label.appendChild(address_radio);
                });
                var item_created;
                result.item.forEach(item => {
                    if (item.id == item_id) {
                        id.value = item.id;
                        customer_name.value = item.order.address.name;
                        order_number.value = item.order.order_number;
                        customer_contact_num.value = item.order.user.phone_number;
                        customer_add.value = item.order.address.address;
                        payment.value = item.order.payment_method;
                        item_created = item.order.created_at;
                    }
                });
                weight.value = result.weight;
                width.value = result.width;
                height.value = result.height;
                length.value = result.length;
                var date = new Date(item_created);
                // order_date.value = date.toLocaleDateString('en-US', {month: 'long', year: 'numeric', day: 'numeric'});
                order_date.value = date.toLocaleDateString();
                book_title.value = result.title;
                trans_type.value = result.status;
                price.value = result.price;
                shipping.value = '₱130';
                if (document.getElementById('pick_up').checked) {
                    displayPickupContent();
                }
            })
            .catch(error => console.error(error));
    }
    address_update_btn.addEventListener('click', () => {
        var address_selection = document.querySelectorAll('input[name="address_id"]');
        address_selection.forEach(add_id => {
            if (add_id.checked == true) {
                selected_adress = add_id.value
            }
        });
        // alert(selected_adress);
        fetch('/getorderdetails/' + id_book, {
                method: 'GET'
            })
            .then(response => response.json())
            .then(result => {
                // console.log(result);
                result.user.address_user.forEach(address => {
                    if (address.id == selected_adress) {
                        selected_adress = address.id;
                        seller_name.value = address.name;
                        seller_contact_num.value = address.contact_number;
                        seller_add.value = address.region + ', ' + address.street_building_house +
                            ', ' +
                            address.brgy_village + ', ' + address.city_municipality;
                        pickup_name.textContent = address.name;
                        pickup_phone.textContent = address.contact_number;
                        pickup_address.textContent = address.brgy_village + ', ' + address
                            .city_municipality + ', ' + address.region;
                        pickup_postal.textContent = address.postal_code;
                    }
                });
            })
            .catch(error => console.error(error));
    });

    function viewShipping(book_id, item_id) {
        fetch('/viewshipping/' + book_id, {
                method: 'GET'
            })
            .then(response => response.json())
            .then(result => {
                // console.log(result);
                var item_updated;
                result.item.forEach(item => {
                    if (item.id == item_id) {
                        item_updated = item.updated_at;
                        detail_payment_method.textContent = item.order.payment_method;
                        detail_order_number.textContent = item.order.order_number;
                        detail_shipping_address.textContent = item.order.address.brgy_village + ', ' + item
                            .order.address.city_municipality;
                        detail_barcode.src = 'images/bar_codes/' + item.bar_code;
                        detail_address.textContent = item.order.address.street_building_house + ' ' + item
                            .order.address.brgy_village + ', ' + item.order.address.city_municipality;
                    }
                });
                var date = new Date(item_updated);
                detail_order_date.textContent = date.toLocaleDateString('en-US', {
                    month: 'long',
                    year: 'numeric',
                    day: 'numeric'
                });
                detail_title.textContent = result.title;
                detail_status.textContent = result.status;
                detail_price.textContent = '₱' + result.price;
                detail_subtotal.textContent = '₱' + result.price;
                detail_total.textContent = '₱' + (parseFloat(result.price) + parseFloat(130)) + '.0';
            })
            .catch(error => console.error(error));
    }

    function hidePickupContent() {
        var detailContent = document.getElementById('details');
        detailContent.className = 'details-container d-none';
    }

    function displayPickupContent() {
        var detailContent = document.getElementById('details');
        detailContent.className = 'details-container';
        var currentDate = new Date().toISOString().split('T')[0];
        // Set the minimum date for the input
        document.getElementById('pickup-date').min = currentDate;
    }

    function myFunction() {
        window.print();
    }
</script>

<script>
    // toast script
    const deleteToast = bootstrap.Toast.getOrCreateInstance(document.getElementById('deleteLiveToast'));
    const createToast = bootstrap.Toast.getOrCreateInstance(document.getElementById('createLiveToast'));
    const updateToast = bootstrap.Toast.getOrCreateInstance(document.getElementById('updateLiveToast'));
    @if(session('deleteMessage'))
    deleteToast.show()
    @elseif(session('createMessage'))
    createToast.show()
    @elseif(session('updateMessage'))
    updateToast.show()
    @endif
    // delete
    var sale_delete = document.getElementById('sale-delete');
    var exchange_delete = document.getElementById('exchange-delete');
    var rent_delete = document.getElementById('rent-delete');
    sale_delete.addEventListener('click', () => {
        var id = document.getElementById('edit-book-id');
        window.location.href = "/mylist/delete/" + id.value;
    });
    exchange_delete.addEventListener('click', () => {
        var id = document.getElementById('edit-book-id');
        window.location.href = "/mylist/delete/" + id.value;
    });
    rent_delete.addEventListener('click', () => {
        var id = document.getElementById('edit-book-id');
        window.location.href = "/mylist/delete/" + id.value;
    });
    // update    
    var edit_modal = document.getElementById('edit-modal-category');
    var edit_courier;

    function itemClicked(card) {
        var status = document.getElementById('status_' + card);
        var user = document.getElementById('user_' + card);
        var img = document.getElementById('photo_' + card);
        var title = document.getElementById('title_' + card);
        var author = document.getElementById('author_' + card);
        var edition = document.getElementById('edition_' + card);
        var genre = document.getElementById('genre_' + card);
        var stock = document.getElementById('stock_' + card);
        var condition = document.getElementById('condition_' + card);
        var description = document.getElementById('description_' + card);
        var language = document.getElementById('language_' + card);
        var weight = document.getElementById('weight_' + card);
        var width = document.getElementById('width_' + card);
        var height = document.getElementById('height_' + card);
        var length = document.getElementById('length_' + card);
        var courier = document.getElementById('courier_' + card);
        var price = document.getElementById('price_' + card);
        var exchange_preferences = document.getElementById('exchange_preferences_' + card);
        var rental_duration = document.getElementById('rental_duration_' + card);
        var rental_terms_and_condition = document.getElementById('rental_terms_and_condition_' + card);
        var security_deposit = document.getElementById('security_deposit_' + card);
        edit_modal.value = status.textContent;
        if (edit_modal.value == 'Sale') {
            document.getElementById('edit-sale-weight').value = weight.textContent;
            document.getElementById('edit-sale-width').value = width.textContent;
            document.getElementById('edit-sale-height').value = height.textContent;
            document.getElementById('edit-sale-length').value = length.textContent;
            document.getElementById('edit-sale-courier').value = courier.textContent;
            document.getElementById('edit-book-id').value = card;
            // document.getElementById('edit-sale-image').value = img.getAttribute('data-filename');
            document.getElementById('edit-sale-book-image').src = img.src;
            document.getElementById('edit-sale-genre').value = genre.textContent.trim();
            document.getElementById('edit-sale-stock').value = stock.textContent.trim();
            document.getElementById('edit-sale-price').value = price.textContent.trim();
            document.getElementById('edit-sale-condition').value = condition.textContent.trim();
            document.getElementById('edit-sale-language').value = language.textContent.trim();
            document.getElementById('edit-sale-title').value = title.textContent.trim();
            document.getElementById('edit-sale-author').value = author.textContent.trim();
            document.getElementById('edit-sale-edition').value = edition.textContent.trim();
            document.getElementById('edit-sale-description').value = description.textContent.trim();
            document.getElementById('edit-weight').value = weight.textContent.trim();
            document.getElementById('edit-width').value = width.textContent.trim();
            document.getElementById('edit-height').value = height.textContent.trim();
            document.getElementById('edit-length').value = length.textContent.trim();
            // if (courier.textContent == "JRS Express") {
            //     document.getElementById('edit-jrs').checked = true;
            //     edit_courier = document.getElementById('edit-jrs').value;
            // } else 
            if (courier.textContent == "J&T Express") {
                document.getElementById('edit-jt').checked = true;
                edit_courier = document.getElementById('edit-jt').value;
            }
            document.getElementById("edit-sale-div").style.display = "flex";
            document.getElementById("edit-exchange-div").style.display = "none";
            document.getElementById("edit-rent-div").style.display = "none";
        } else if (edit_modal.value == 'Exchange') {
            document.getElementById('edit-exchange-weight').value = weight.textContent;
            document.getElementById('edit-exchange-width').value = width.textContent;
            document.getElementById('edit-exchange-height').value = height.textContent;
            document.getElementById('edit-exchange-length').value = length.textContent;
            document.getElementById('edit-exchange-courier').value = courier.textContent;
            document.getElementById('edit-book-id').value = card;
            document.getElementById('edit-exchange-book-image').src = img.src;
            document.getElementById('edit-exchange-genre').value = genre.textContent.trim();
            document.getElementById('edit-exchange-stock').value = stock.textContent.trim();
            document.getElementById('edit-exchange-condition').value = condition.textContent.trim();
            document.getElementById('edit-exchange-language').value = language.textContent.trim();
            document.getElementById('edit-exchange-title').value = title.textContent.trim();
            document.getElementById('edit-exchange-author').value = author.textContent.trim();
            document.getElementById('edit-exchange-edition').value = edition.textContent.trim();
            document.getElementById('edit-exchange-preferences').value = exchange_preferences.textContent.trim();
            document.getElementById('edit-exchange-description').value = description.textContent.trim();
            document.getElementById('edit-weight').value = weight.textContent.trim();
            document.getElementById('edit-width').value = width.textContent.trim();
            document.getElementById('edit-height').value = height.textContent.trim();
            document.getElementById('edit-length').value = length.textContent.trim();
            // if (courier.textContent == "JRS Express") {
            //     document.getElementById('edit-jrs').checked = true;
            //     edit_courier = document.getElementById('edit-jrs').value;
            // } else 
            if (courier.textContent == "J&T Express") {
                document.getElementById('edit-jt').checked = true;
                edit_courier = document.getElementById('edit-jt').value;
            }
            document.getElementById("edit-sale-div").style.display = "none";
            document.getElementById("edit-exchange-div").style.display = "flex";
            document.getElementById("edit-rent-div").style.display = "none";
        } else if (edit_modal.value == 'Rent') {
            document.getElementById('edit-rent-weight').value = weight.textContent;
            document.getElementById('edit-rent-width').value = width.textContent;
            document.getElementById('edit-rent-height').value = height.textContent;
            document.getElementById('edit-rent-length').value = length.textContent;
            document.getElementById('edit-rent-courier').value = courier.textContent;
            document.getElementById('edit-book-id').value = card;
            document.getElementById('edit-rent-book-image').src = img.src;
            document.getElementById('edit-rent-genre').value = genre.textContent.trim();
            document.getElementById('edit-rent-stock').value = stock.textContent.trim();
            document.getElementById('edit-rent-condition').value = condition.textContent.trim();
            document.getElementById('edit-rent-rental-price').value = price.textContent.trim();
            document.getElementById('edit-rent-language').value = language.textContent.trim();
            document.getElementById('edit-rent-title').value = title.textContent.trim();
            document.getElementById('edit-rent-author').value = author.textContent.trim();
            document.getElementById('edit-rent-edition').value = edition.textContent.trim();
            document.getElementById('edit-rent-description').value = description.textContent.trim();
            document.getElementById('edit-rent-rental-duration').value = rental_duration.textContent;
            document.getElementById('edit-rent-rental-terms-and-condition').value = rental_terms_and_condition
                .textContent;
            document.getElementById('edit-rent-security-deposit').value = security_deposit.textContent;
            document.getElementById('edit-weight').value = weight.textContent.trim();
            document.getElementById('edit-width').value = width.textContent.trim();
            document.getElementById('edit-height').value = height.textContent.trim();
            document.getElementById('edit-length').value = length.textContent.trim();
            // if (courier.textContent == "JRS Express") {
            //     document.getElementById('edit-jrs').checked = true;
            //     edit_courier = document.getElementById('edit-jrs').value;
            // } else 
            if (courier.textContent == "J&T Express") {
                document.getElementById('edit-jt').checked = true;
                edit_courier = document.getElementById('edit-jt').value;
            }
            document.getElementById("edit-sale-div").style.display = "none";
            document.getElementById("edit-exchange-div").style.display = "none";
            document.getElementById("edit-rent-div").style.display = "flex";
        }
        updateListingModal.show();
    }
    // update btn
    var sale_update_btn = document.getElementById('sale-update');
    var exchange_update_btn = document.getElementById('exchange-update');
    var rent_update_btn = document.getElementById('rent-update');
    sale_update_btn.addEventListener('click', () => {
        var sale_form = document.getElementById('edit-sale-form');
        var book_id = document.getElementById('edit-book-id');
        var edit_weight = document.getElementById('edit-weight');
        var edit_width = document.getElementById('edit-width');
        var edit_height = document.getElementById('edit-height');
        var edit_length = document.getElementById('edit-length');
        document.getElementById('edit-sale-weight').value = edit_weight.value;
        document.getElementById('edit-sale-width').value = edit_width.value
        document.getElementById('edit-sale-height').value = edit_height.value;
        document.getElementById('edit-sale-length').value = edit_length.value;
        document.getElementById('edit-sale-courier').value = edit_courier;
        sale_form.action = "/mylist/updateSale/" + book_id.value;
        sale_form.submit();
    });
    exchange_update_btn.addEventListener('click', () => {
        var exchange_form = document.getElementById('edit-exchange-form');
        var book_id = document.getElementById('edit-book-id');
        var edit_weight = document.getElementById('edit-weight');
        var edit_width = document.getElementById('edit-width');
        var edit_height = document.getElementById('edit-height');
        var edit_length = document.getElementById('edit-length');
        document.getElementById('edit-exchange-weight').value = edit_weight.value;
        document.getElementById('edit-exchange-width').value = edit_width.value
        document.getElementById('edit-exchange-height').value = edit_height.value;
        document.getElementById('edit-exchange-length').value = edit_length.value;
        document.getElementById('edit-exchange-courier').value = edit_courier;
        exchange_form.action = "/mylist/updateExchange/" + book_id.value;
        exchange_form.submit();
    });
    rent_update_btn.addEventListener('click', () => {
        var rent_form = document.getElementById('edit-rent-form');
        var book_id = document.getElementById('edit-book-id');
        var edit_weight = document.getElementById('edit-weight');
        var edit_width = document.getElementById('edit-width');
        var edit_height = document.getElementById('edit-height');
        var edit_length = document.getElementById('edit-length');
        document.getElementById('edit-rent-weight').value = edit_weight.value;
        document.getElementById('edit-rent-width').value = edit_width.value
        document.getElementById('edit-rent-height').value = edit_height.value;
        document.getElementById('edit-rent-length').value = edit_length.value;
        document.getElementById('edit-rent-courier').value = edit_courier;
        rent_form.action = "/mylist/updateRent/" + book_id.value;
        rent_form.submit();
    });
    edit_modal.addEventListener('change', () => {
        if (edit_modal.value == 'Sale') {
            document.getElementById("edit-sale-div").style.display = "flex";
            document.getElementById("edit-exchange-div").style.display = "none";
            document.getElementById("edit-rent-div").style.display = "none";
        } else if (edit_modal.value == 'Exchange') {
            document.getElementById("edit-sale-div").style.display = "none";
            document.getElementById("edit-exchange-div").style.display = "flex";
            document.getElementById("edit-rent-div").style.display = "none";
        } else if (edit_modal.value == 'Rent') {
            document.getElementById("edit-sale-div").style.display = "none";
            document.getElementById("edit-exchange-div").style.display = "none";
            document.getElementById("edit-rent-div").style.display = "flex";
        }
    });
    // sort select    
    var sort_by = document.getElementById('sort');
    sort_by.addEventListener('change', function() {
        if (sort_by.value == "All") {
            window.location.href = "/mylist";
        } else if (sort_by.value == "Sale") {
            window.location.href = "/mylist/sale";
        } else if (sort_by.value == "Exchange") {
            window.location.href = "/mylist/exchange";
        } else if (sort_by.value == "Rent") {
            window.location.href = "/mylist/rent";
        }
    });
    // tool tips
    const SaleimageToolTip = document.getElementById('sale-book-image');
    const tooltipSaleImageShow = bootstrap.Tooltip.getOrCreateInstance(SaleimageToolTip);
    const ExchangeImageToolTip = document.getElementById('exchange-book-image');
    const tooltipExchangeImageShow = bootstrap.Tooltip.getOrCreateInstance(ExchangeImageToolTip);
    const RentImageToolTip = document.getElementById('rent-book-image');
    const tooltipRentImageShow = bootstrap.Tooltip.getOrCreateInstance(RentImageToolTip);
    const EditSaleimageToolTip = document.getElementById('edit-sale-book-image');
    const tooltipEditSaleImageShow = bootstrap.Tooltip.getOrCreateInstance(EditSaleimageToolTip);
    const SaleShippingToolTip = document.getElementById('sale-shipping-fee-btn');
    const tooltipSaleShippingShow = bootstrap.Tooltip.getOrCreateInstance(SaleShippingToolTip);
    const ExchangeShippingToolTip = document.getElementById('exchange-shipping-fee-btn');
    const tooltipExchangeShippingShow = bootstrap.Tooltip.getOrCreateInstance(ExchangeShippingToolTip);
    const RentShippingToolTip = document.getElementById('rent-shipping-fee-btn');
    const tooltipRentShippingShow = bootstrap.Tooltip.getOrCreateInstance(RentShippingToolTip);
    const EditSaleShippingToolTip = document.getElementById('edit-sale-shipping-fee-btn');
    const tooltipEditSaleShippingShow = bootstrap.Tooltip.getOrCreateInstance(EditSaleShippingToolTip);
    // modals
    const createListingModal = new bootstrap.Modal('#createListingModal', {
        keyboard: false
    });
    const updateListingModal = new bootstrap.Modal('#updateListingModal', {
        keyboard: false
    });
    const shippingModal = new bootstrap.Modal('#shipping-fee', {
        keyboard: false
    });
    const editShippingModal = new bootstrap.Modal('#edit-shipping-fee', {
        keyboard: false
    });
    // buttons for modals
    var list_category = document.getElementById("modal-category");
    var create_listing_btn = document.getElementById('create-listing');
    var back_btn = document.getElementById("back-shipping");
    var sale_shipping_fee_btn = document.getElementById('sale-shipping-fee-btn');
    var exchange_shipping_fee_btn = document.getElementById('exchange-shipping-fee-btn');
    var rent_shipping_fee_btn = document.getElementById('rent-shipping-fee-btn');
    var shipping_save_btn = document.getElementById('shipping-save-btn');
    var edit_back_btn = document.getElementById("edit-back-shipping");
    var edit_sale_shipping_fee_btn = document.getElementById('edit-sale-shipping-fee-btn');
    var edit_exchange_shipping_fee_btn = document.getElementById('edit-exchange-shipping-fee-btn');
    var edit_rent_shipping_fee_btn = document.getElementById('edit-rent-shipping-fee-btn');
    var edit_shipping_save_btn = document.getElementById('edit-shipping-save-btn');
    // shipping form inputs
    var weight = document.getElementById('weight');
    var width = document.getElementById('width');
    var height = document.getElementById('height');
    var length = document.getElementById('length');
    // var jrsRadio = document.getElementById('jrs');
    var jtRadio = document.getElementById('jt');
    var courier;
    // hidden inputs for sale
    var sale_weight = document.getElementById('sale-weight');
    var sale_width = document.getElementById('sale-width');
    var sale_height = document.getElementById('sale-height');
    var sale_length = document.getElementById('sale-length');
    var sale_courier = document.getElementById('sale-courier');
    // hidden inputs for exchange
    var exchange_weight = document.getElementById('exchange-weight');
    var exchange_width = document.getElementById('exchange-width');
    var exchange_height = document.getElementById('exchange-height');
    var exchange_length = document.getElementById('exchange-length');
    var exchange_courier = document.getElementById('exchange-courier');
    // hidden inputs for rent
    var rent_weight = document.getElementById('rent-weight');
    var rent_width = document.getElementById('rent-width');
    var rent_height = document.getElementById('rent-height');
    var rent_length = document.getElementById('rent-length');
    var rent_courier = document.getElementById('rent-courier');
    create_listing_btn.addEventListener('click', function() {
        list_category.value = 'Sale';
        document.getElementById('listing-type').textContent = 'Sale';
        createListingModal.show();
    });
    back_btn.addEventListener("click", function() {
        shippingModal.hide();
        createListingModal.show();
    });
    sale_shipping_fee_btn.addEventListener('click', function() {
        createListingModal.hide();
        shippingModal.show();
    });
    exchange_shipping_fee_btn.addEventListener('click', function() {
        createListingModal.hide();
        shippingModal.show();
    });
    rent_shipping_fee_btn.addEventListener('click', function() {
        createListingModal.hide();
        shippingModal.show();
    });
    edit_back_btn.addEventListener('click', () => {
        editShippingModal.hide();
        updateListingModal.show();
    });
    edit_sale_shipping_fee_btn.addEventListener('click', () => {
        updateListingModal.hide();
        editShippingModal.show()
    });
    edit_exchange_shipping_fee_btn.addEventListener('click', () => {
        updateListingModal.hide();
        editShippingModal.show()
    });
    edit_rent_shipping_fee_btn.addEventListener('click', () => {
        updateListingModal.hide();
        editShippingModal.show()
    });
    var sale_form = document.getElementById('sale-form');
    var exchange_form = document.getElementById('exchange-form');
    var rent_form = document.getElementById('rent-form');
    sale_form.addEventListener('submit', function(event) {
        sale_weight.value = weight.value;
        sale_width.value = width.value;
        sale_height.value = height.value;
        sale_length.value = length.value;
        sale_courier.value = courier;
    });
    exchange_form.addEventListener('submit', function(event) {
        exchange_weight.value = weight.value;
        exchange_width.value = width.value;
        exchange_height.value = height.value;
        exchange_length.value = length.value;
        exchange_courier.value = courier;
    });
    rent_form.addEventListener('submit', function(event) {
        rent_weight.value = weight.value;
        rent_width.value = width.value;
        rent_height.value = height.value;
        rent_length.value = length.value;
        rent_courier.value = courier;
    });
    shipping_save_btn.addEventListener('click', function() {
        if (weight.value == "" || width.value == "" || height.value == "" || length.value == "") {
            alert("Please complete every fields");
        } else {
            if (jtRadio.checked) {
                courier = jtRadio.value;
                // if (jrsRadio.checked) {
                //     courier = jrsRadio.value;
                // } else if (jtRadio.checked) {
                //     courier = jtRadio.value;
            } else {
                courier = null;
            }
            sale_weight.value = weight.value;
            sale_width.value = width.value;
            sale_height.value = height.value;
            sale_length.value = length.value;
            sale_courier.value = courier;
            shippingModal.hide();
            createListingModal.show();
        }
    });
    edit_shipping_save_btn.addEventListener('click', () => {
        // var book_id = document.getElementById('edit-book-id');
        var edit_weight = document.getElementById('edit-weight');
        var edit_width = document.getElementById('edit-width');
        var edit_height = document.getElementById('edit-height');
        var edit_length = document.getElementById('edit-length');
        var edit_jrs_radio = document.getElementById('edit-jrs');
        var edit_jt_radio = document.getElementById('edit-jt');
        if (edit_weight.value == "" || edit_width.value == "" || edit_height.value == "" || edit_length.value ==
            "") {
            alert("Please fill all the inputs");
        } else {
            if (edit_jrs_radio.checked) {
                edit_courier = edit_jrs_radio.value;
            } else if (edit_jt_radio.checked) {
                edit_courier = edit_jt_radio.value;
            } else {
                edit_courier = null;
            }
            editShippingModal.hide();
            updateListingModal.show();
        }
        // alert(edit_weight.value + " " + edit_width.value + " " + edit_height.value + " " + edit_length.value + " " + edit_courier);
    });
    // list category    
    var exchange_btn = document.getElementById('create-exchange-listing');
    exchange_btn.addEventListener('click', () => {
        list_category.value = "Exchange";
        document.getElementById('listing-type').textContent = 'Exchange';
        document.getElementById("sale").style.display = "none";
        document.getElementById("exchange").style.display = "flex";
        document.getElementById("rent").style.display = "none";
        createListingModal.show();
    });
    list_category.addEventListener("change", function() {
        // console.log(String(list_category.value));
        if (list_category.value == "Sale") {
            document.getElementById("sale").style.display = "flex";
            document.getElementById("exchange").style.display = "none";
            document.getElementById("rent").style.display = "none";
        } else if (list_category.value == "Exchange") {
            document.getElementById("sale").style.display = "none";
            document.getElementById("exchange").style.display = "flex";
            document.getElementById("rent").style.display = "none";
        } else if (list_category.value == "Rent") {
            document.getElementById("sale").style.display = "none";
            document.getElementById("exchange").style.display = "none";
            document.getElementById("rent").style.display = "flex";
        }
    });
    // uploading image
    var sale_image_upload = document.getElementById("sale-image");
    var exchange_image_upload = document.getElementById("exchange-image");
    var rent_image_upload = document.getElementById("rent-image");
    sale_image_upload.addEventListener("change", function() {
        var image = document.getElementById("sale-book-image");
        image.src = URL.createObjectURL(event.target.files[0]);
    });
    exchange_image_upload.addEventListener("change", function() {
        var image = document.getElementById("exchange-book-image");
        image.src = URL.createObjectURL(event.target.files[0]);
    });
    rent_image_upload.addEventListener("change", function() {
        var image = document.getElementById("rent-book-image");
        image.src = URL.createObjectURL(event.target.files[0]);
    });
    // uploading edit image
    var edit_sale_image_upload = document.getElementById("edit-sale-image");
    var exchange_image_upload = document.getElementById("edit-exchange-image");
    var rent_image_upload = document.getElementById("edit-rent-image");
    edit_sale_image_upload.addEventListener("change", function() {
        var image = document.getElementById("edit-sale-book-image");
        image.src = URL.createObjectURL(event.target.files[0]);
    });
    exchange_image_upload.addEventListener("change", function() {
        var image = document.getElementById("edit-exchange-book-image");
        image.src = URL.createObjectURL(event.target.files[0]);
    });
    rent_image_upload.addEventListener("change", function() {
        var image = document.getElementById("edit-rent-book-image");
        image.src = URL.createObjectURL(event.target.files[0]);
    });
</script>
{{-- <script src="{{ asset('/js/app-homepage.js') }}"></script> --}}

<script>
    document.getElementById('flexCheckDefault').addEventListener('change', function() {
        var submitButton = document.getElementById('submitButton');
        submitButton.disabled = !this.checked;
    });
    document.getElementById('exchangeDefault').addEventListener('change', function() {
        var submitButton = document.getElementById('submitExchangeButton');
        submitButton.disabled = !this.checked;
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const images = document.querySelectorAll('.easyzoom img');
        images.forEach(img => {
            img.addEventListener('mousemove', function(e) {
                const rect = e.target.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                img.style.transformOrigin = `${x}px ${y}px`;
                img.style.transform =
                'scale(2)'; // Adjust the scale value for desired zoom level
            });
            img.addEventListener('mouseout', function() {
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