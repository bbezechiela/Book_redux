@include('partials.__header', [
'title' => 'My Purchase | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/myPurchase-style.css',
'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 shadow">
        <x-sidebar />
    </div>

    {{-- <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start" tabindex="-1"
        aria-labelledby="offcanvasExampleLabel">
        <x-sidebar />
    </div>
    <div id="sidebarProfile" class="sidebarProfile p-2 min-vh-100 shadow">
        <x-sidebarProfile />
    </div> --}}
    <div id="content" class="content">
        <ul class="nav bg-light sticky-top head-nav shadow py-4 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                {{-- <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button> --}}
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    {{-- <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <input class="form-control rounded-3 search-field" type="text" placeholder="Search">
                    </div> --}}
                    {{-- <a href="/messages"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
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
                                <li><a class="dropdown-item" href="/mypurchase">My Exchange Request</a></li>
                                <li><a class="dropdown-item" href="/addresses">Addresses</a></li>
                                {{-- <li><a class="dropdown-item" href="/changepassword">Change Password</a></li> --}}
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </ul>
        <div class="purchase-container">
            <div class="header">
                <h4>My Exchange Request</h4>
                <p>View and track your exchange request</p>
            </div>
            <div class="card-body nav-details">
                <nav class="nav nav-pills flex-column flex-sm-row">
                    <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;"
                        aria-current="page" href="/mypurchase">My Exchange Request</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/toreceive">To Receive</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/delivered-mypurchase">Completed</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/dropped-mypurchase">Dropped</a>
                    {{-- <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/refund-mypurchase">Refund</a> --}}
                </nav>
            </div>
        </div>

        {{-- CARD IS FOR PHYSICAL EXCHANGE --}}
        <div class="order-cart d-print-none">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href=""><span>Maria Mesa</span></a>
                    <button class="message-seller message-button"><i class="fa fa-commenting"
                            aria-hidden="true"></i></button>
                </div>
                <span class="order-text me-5 mt-0">My Exchange Request</span>
            </div>
            <div class="card mb-3" style="max-width: 100%; margin-left: 3em; margin-right: 2.1em;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                        <img src="/assets/city_limits.png" class="img-fluid rounded-start" alt="..."
                                            height="200px" width="200px">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="/assets/bubble_bath.png" class="img-fluid rounded-start" alt="..."
                                            height="200px" width="200px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/brown_book.png" class="img-fluid rounded-start" alt="..."
                                            height="200px" width="200px">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="/assets/yellow_book.png" class="img-fluid rounded-start" alt="..."
                                            height="200px" width="200px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/city_of_secrets.png" class="img-fluid rounded-start" alt="..."
                                            height="200px" width="200px">
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
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title">Title: <span>The Pioneers</span></h5>
                            <p class="card-text">Author: <span>Pedro Penduko</span></p>
                            <p class="card-text">Edition: <span>1st Edition</span></p>
                            <p class="card-text">Condition: <span>Good</span></p>
                            <p class="card-text">Description: <span>This is a sample description.</span></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title">ISBN: <span>124154238778</span></h5>
                            <p class="card-text">Genre: <span>Self-help</span></p>
                            <p class="card-text">Format: <span>Paperback</span></p>
                            <p class="card-text">Exchange Preferences: <span>This is a sample exchange
                                    preferences.</span></p>

                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-between mt-3 mb-3">
                        <small class="text-body-secondary">Please wait for the lister to approve your
                            request <span class="btn" data-bs-toggle="modal" data-bs-target="#request"
                                style="color: #E55B13; text-decoration: underline; cursor: pointer; margin-left: 20px; border: none;">View
                                my exchange request</span> </small>
                        <div class="button-group">
                            <a class="btn btn-sm cancel-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                onclick="">Cancel
                                Request</a>
                            <button type="button" class="btn btn-sm pending-button" disabled>Pending</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- CARD IS FOR PHYSICAL EXCHANGE --}}

        {{-- CARD IS FOR DIGITAL EXCHANGE --}}
        <div class="order-cart d-print-none">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href=""><span>Maria Mesa</span></a>
                    <button class="message-seller message-button"><i class="fa fa-commenting"
                            aria-hidden="true"></i></button>
                </div>
                <span class="order-text me-5 mt-0">My Exchange Request</span>
            </div>
            <div class="card mb-3" style="max-width: 100%; margin-left: 3em; margin-right: 2.1em;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                        <img src="/assets/city_limits.png" class="img-fluid rounded-start" alt="..."
                                            height="200px" width="200px">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="/assets/bubble_bath.png" class="img-fluid rounded-start" alt="..."
                                            height="200px" width="200px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/brown_book.png" class="img-fluid rounded-start" alt="..."
                                            height="200px" width="200px">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="/assets/yellow_book.png" class="img-fluid rounded-start" alt="..."
                                            height="200px" width="200px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/city_of_secrets.png" class="img-fluid rounded-start" alt="..."
                                            height="200px" width="200px">
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
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title">Title: <span>The Pioneers</span></h5>
                            <p class="card-text">Author: <span>Pedro Penduko</span></p>
                            <p class="card-text">Edition: <span>1st Edition</span></p>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title">ISBN: <span>124154238778</span></h5>
                            <p class="card-text">Genre: <span>Self-help</span></p>
                            <p class="card-text">Description: <span>This is a sample description.</span></p>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-between mt-3 mb-3">
                        <small class="text-body-secondary">Please wait for the lister to approve your
                            request <span class="btn" data-bs-toggle="modal" data-bs-target="#digital_request"
                                style="color: #E55B13; text-decoration: underline; cursor: pointer; margin-left: 20px; border: none;">View
                                my exchange request</span> </small>
                        <div class="button-group">
                            <a class="btn btn-sm cancel-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                onclick="">Cancel
                                Request</a>
                            <button type="button" class="btn btn-sm pending-button" disabled>Pending</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- CARD IS FOR DIGITAL EXCHANGE --}}
        @php
        $loopCount = 0;
        @endphp
        @foreach ($user->orders as $order)
        @foreach ($order->items as $item)
        @if (
        $item->order->payment_method == 'Cash on Delivery' &&
        ($item->order_status == 'Pending' || $item->order_status == 'Confirmed by seller'))
        <div class="order-cart">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    @if ($item->book->user->type == 'Bookseller')
                    <a class="seller-name"
                        href="/userlistings/{{ $order->user_id }}"><span>{{ $item->book->user->business_name }}</span></a>
                    @else
                    <a class="seller-name"
                        href="/userlistings/{{ $order->user_id }}"><span>{{ $item->book->user->first_name . ' ' . $item->book->user->last_name }}</span></a>
                    @endif
                </div>
                <span class="order-text me-5 mt-0">To Purchase</span>
                {{-- <button type="button" class="post-btn" data-bs-toggle="modal"
                                data-bs-target="#track-delivery">Your order has arrived at Catbalogan centre<i
                                    class="fa fa-angle-right" aria-hidden="true"></i></button> --}}
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <div class="left-section">
                        <img src="{{ asset('/images/books/' . $item->book->book_photo) }}" alt="book" width="80px"
                            height="110px">
                        <div class="book-info">
                            <p class="mb-0 book-title">{{ $item->book->title }}</p>
                            <p class="mb-0 book-price">Qty: {{ $item->qty }}</p>
                            <p class="mb-0 fw-bold interaction-type">{{ $item->book->status }}</p>
                            <p class="mb-0 payment-mode">{{ $item->order->shipping_option }}</p>
                            {{-- <p>#{{ $item->order->order_number }}</p> --}}
                            <p id="create_{{ $item->id }}" class="d-none date-create">
                                {{ $item->created_at->format('m/d/Y') }}</p>
                            <p id="update_{{ $item->id }}" class="d-none date-update">
                                {{ $item->updated_at->format('m/d/Y') }}</p>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="book-price">
                            <p class="product-price">₱{{ $item->book->price }}</p>
                            <p class="text-total">Shipping Fee:<span class="product-total">₱130</span></p>
                            <br>
                            <p class="text-total">Total Payment:<span
                                    class="product-total">₱{{ $item->book->price + 130 }}</span></p>
                        </div>
                        <div class="button-group">
                            {{-- <a class="btn btn-sm cancel-button" href="/deleteorder/{{ $item->id }}">Cancel
                            Order</a> --}}
                            <a class="btn btn-sm cancel-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                onclick="assignLink({{ $item->id }})">Cancel Order</a>
                            <button type="button" class="btn btn-sm pending-button"
                                disabled>{{ $item->order_status }}</button>

                        </div>
                    </div>
                </div>
                <button type="button" class="ms-4 post-btn text-start" data-bs-toggle="modal"
                    data-bs-target="#track-delivery" onclick="trackOrder({{ $item->id }})">Track
                    Order<i class="fa fa-angle-right" aria-hidden="true"></i></button>
            </div>
            @php
            $loopCount++;
            @endphp
            @elseif (
            $item->order->payment_method == 'eWallet' &&
            ($item->order_status == 'Pending' || $item->order_status == 'Confirmed by seller'))
            <div class="order-cart">
                <div class="name-cart d-flex justify-content-between">
                    <div>
                        <a class="seller-name"
                            href="/userlistings/{{ $order->user_id }}"><span>{{ $item->book->user->first_name . ' ' . $item->book->user->last_name }}</span></a>
                    </div>
                    <span class="order-text me-5 mt-0">To Purchase</span>
                </div>
                <div class="product-cart">
                    <div class="book-details">
                        <div class="left-section">
                            <img src="{{ asset('/images/books/' . $item->book->book_photo) }}" alt="book" width="80px"
                                height="110px">
                            <div class="book-info">
                                <p id="title_{{ $item->order->id }}" class="mb-0 book-title">
                                    {{ $item->book->title }}</p>
                                <p class="mb-0 book-price">2 Qty</p>
                                <p class="mb-0 fw-bold interaction-type">{{ $item->book->status }}
                                </p>
                                <p class="mb-0 payment-mode">{{ $item->order->shipping_option }}</p>
                                {{-- <p>#{{ $item->order->order_number }}</p> --}}
                            </div>
                        </div>
                        <div class="right-section">
                            <div class="book-price">
                                <p class="product-price">₱{{ $item->book->price }}</p>
                                <p class="text-total">Total Payment: ₱<span id="payment_{{ $item->order->id }}"
                                        class="product-total">{{ $item->book->price }}</span></p>
                            </div>
                            <div class="button-group">
                                {{-- <a class="btn btn-sm cancel-button" href="/deleteorder/{{ $item->id }}">Cancel
                                Order</a> --}}
                                <a class="btn btn-sm cancel-button" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop" onclick="assignLink({{ $item->id }})">Cancel
                                    Order</a>
                                <button type="button" class="btn btn-sm pending-button"
                                    disabled>{{ $item->order_status }}</button>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="post-btn text-start" data-bs-toggle="modal"
                        data-bs-target="#track-delivery" onclick="trackOrder({{ $item->id }})">Track
                        Order<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                </div>
            </div>
            @php
            $loopCount++;
            @endphp
            @endif
            @endforeach
            @endforeach
            @if ($loopCount == 0)
            <div class="w-100 mt-5 d-flex justify-content-center">
                <img class="img mt-3" src="../assets/Empty-Box.png" alt="image">
            </div>
            <h1 class="mt-2 text-center fw-bold" style="color: #E55B13; font-size: 20px;">You haven't send any
                requests yet</h1>
            @endif
        </div>

        {{-- Tracking Order Modal --}}
        <div class="modal fade" id="track-delivery" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #003060;">Tracking My
                            Purchase
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="container py-3 h-10 mb-4">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="card card-stepper" style="border-radius: 10px; border: none;">
                                            <div class="card-body p-4">
                                                <div
                                                    class="d-flex justify-content-between align-items-center header-track">
                                                    <div class="d-flex flex-column">
                                                        <span id="tracking-text-header"
                                                            class="lead fw-normal tracking-text">Your order has been
                                                            placed</span>
                                                        {{-- <span class="text-muted small tracking-text">by DHFL on 21 Jan, 2020</span> --}}
                                                    </div>
                                                </div>
                                                {{-- <hr class="my-4"> --}}
                                                <div
                                                    class="d-flex flex-row justify-content-between align-items-center align-content-center">
                                                    <span id="first_track_dot"
                                                        class="d-flex justify-content-center align-items-center big-dot dot"><i
                                                            class="fa fa-check text-white"></i></span>
                                                    <hr class="flex-fill track-line"><span id="second_track_dot"
                                                        class="dot"></span>
                                                    {{-- <hr class="flex-fill track-line"><span id="third_track_dot" class="dot"></span> --}}
                                                    <hr class="flex-fill track-line"><span id="fourth_track_dot"
                                                        class="dot"></span>
                                                    <hr class="flex-fill track-line"><span id="fifth_track_dot"
                                                        class="dot"></span>
                                                </div>
                                                <div class="d-flex flex-row justify-content-between align-items-center">
                                                    <div class="d-flex flex-column align-items-start tracking-text">
                                                        <span class="date-track"></span>
                                                        <span class="tracking-description">Order
                                                            placed</span>
                                                    </div>
                                                    <div
                                                        class="d-flex flex-column justify-content-center tracking-text">
                                                        <span class="date-track"></span><span
                                                            class="tracking-description">Preparing
                                                            to ship</span>
                                                    </div>
                                                    {{-- <div class="d-flex flex-column justify-content-center align-items-center tracking-text">
                                                    <span class="date-track"></span><span
                                                        class="tracking-description">Your order has
                                                        been shipped</span>
                                                </div> --}}
                                                    <div class="d-flex flex-column align-items-center tracking-text">
                                                        <span class="date-track"></span><span
                                                            class="tracking-description">Out for
                                                            delivery</span>
                                                    </div>
                                                    <div class="d-flex flex-column align-items-end tracking-text">
                                                        <span class="date-track"></span><span
                                                            class="tracking-description">Delivered</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        {{-- alert modal --}}
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body px-3">
                        <p class="fs-4">Are you sure you want to cancel your request?</p>
                        <div class="text-center">
                            <a id="confirm-redirection" class="btn btn-danger">Confirm</a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- toast --}}
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="message" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="../assets/Book_Logo.png" class="rouxunded me-2" alt="...">
                    <strong class="me-auto"></strong>
                    <small>1 min ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                @if (session('message'))
                <div class="toast-body fw-bold text-success">
                    {{ session('message') }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Request Modal -->
    <div class="modal fade" id="request" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:#003060;">Exchange Request
                        Submission Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card mb-3"
                        style="max-width: 100%; margin-left: 3em; margin-right: 2.1em; border: none;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div id="carouselExampleDark" class="carousel carousel-dark slide"
                                    data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="10000">
                                                <img src="/assets/city_limits.png" class="img-fluid rounded-start"
                                                    alt="..." height="200px" width="200px">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="/assets/bubble_bath.png" class="img-fluid rounded-start"
                                                    alt="..." height="200px" width="200px">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/assets/brown_book.png" class="img-fluid rounded-start"
                                                    alt="..." height="200px" width="200px">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="/assets/yellow_book.png" class="img-fluid rounded-start"
                                                    alt="..." height="200px" width="200px">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/assets/city_of_secrets.png" class="img-fluid rounded-start"
                                                    alt="..." height="200px" width="200px">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"
                                            style="color: #003060"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title">Title: <span>City Limits</span></h5>
                                    <p class="card-text">Author: <span>Pedro Penduko</span></p>
                                    <p class="card-text">Edition: <span>1st Edition</span></p>
                                    <p class="card-text">Condition: <span>Good</span></p>
                                    <p class="card-text">Description: <span>This is a sample description of the book
                                            I want to offer for exchange.</span></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title">ISBN: <span>124154238778</span></h5>
                                    <p class="card-text">Genre: <span>Self-help</span></p>
                                    <p class="card-text">Format: <span>Paperback</span></p>
                                    <p class="card-text">Exchange Method Preference: <span>Delivery</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- DIGITAL Request Modal -->
     <div class="modal fade" id="digital_request" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:#003060;">Exchange Request
                        Submission Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card mb-3"
                        style="max-width: 100%; margin-left: 3em; margin-right: 2.1em; border: none;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div id="carouselExampleDark" class="carousel carousel-dark slide"
                                    data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="10000">
                                                <img src="/assets/city_limits.png" class="img-fluid rounded-start"
                                                    alt="..." height="200px" width="200px">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="/assets/bubble_bath.png" class="img-fluid rounded-start"
                                                    alt="..." height="200px" width="200px">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/assets/brown_book.png" class="img-fluid rounded-start"
                                                    alt="..." height="200px" width="200px">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="/assets/yellow_book.png" class="img-fluid rounded-start"
                                                    alt="..." height="200px" width="200px">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/assets/city_of_secrets.png" class="img-fluid rounded-start"
                                                    alt="..." height="200px" width="200px">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"
                                            style="color: #003060"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title">Title: <span>City Limits</span></h5>
                                    <p class="card-text">Author: <span>Pedro Penduko</span></p>
                                    <p class="card-text">Edition: <span>1st Edition</span></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title">ISBN: <span>124154238778</span></h5>
                                    <p class="card-text">Genre: <span>Self-help</span></p>
                                    <p class="card-text">Description: <span>This is a sample description of the book
                                        I want to offer for exchange.</span></p>
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

    <script>
        var date = new Date();
        const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
        var track_date = document.querySelectorAll('span[class="date-track"]');
        var track_prog = document.querySelectorAll('span[class="dot"]');
        var dot_1 = document.getElementById('first_track_dot');
        var dot_2 = document.getElementById('second_track_dot');
        // var dot_3 = document.getElementById('third_track_dot');
        // var dot_4 = document.getElementById('fourth_track_dot');
        // var dot_5 = document.getElementById('fifth_track_dot');
        const trackOrder = (id) => {
            // alert(document.getElementById(`create_${id}`).textContent);        
            fetch(`/gettoshipitem/${id}`, {
                    method: 'GET'
                })
                .then(response => response.json())
                .then(result => {
                    console.log(result);
                    var check = document.createElement('i');
                    check.className = 'fa fa-check text-white';
                    if (result.order_status == 'Confirmed by seller') {
                        // console.log('with tracking');
                        document.getElementById('tracking-text-header').textContent =
                            'Seller is preparing your order to ship';
                        dot_1.className = 'dot';
                        dot_2.className = 'd-flex justify-content-center align-items-center big-dot dot';
                        dot_2.appendChild(check);
                        // track_date[0].textContent = document.getElementById(`create_${id}`).textContent;
                        // track_date[1].textContent = document.getElementById(`update_${id}`).textContent;
                    } else {
                        // track_date[0].textContent = document.getElementById(`create_${id}`).textContent;
                        dot_1.className = 'd-flex justify-content-center align-items-center big-dot dot';
                        dot_2.className = 'dot';
                    }
                })
                .catch(error => console.error(error));
        }
        // function pay(id) {
        //     var payment_price = document.getElementById('payment_' + id);
        //     var title = document.getElementById('title_' + id);
        //     // console.log(parseFloat(payment_price.textContent) + title.textContent);
        //     const options = {
        //         method: 'POST',
        //         headers: {
        //             accept: 'application/json',
        //             'Content-Type': 'application/json',
        //             authorization: 'Basic c2tfdGVzdF9nOGZHd3NqYkJYNnY2aVVHWGJLQWlyeUw6'
        //         },
        //         body: JSON.stringify({
        //             data: {
        //                 attributes: {
        //                     send_email_receipt: false,
        //                     show_description: true,
        //                     show_line_items: true,
        //                     cancel_url: document.URL,
        //                     line_items: [{
        //                         currency: 'PHP',
        //                         amount: parseFloat(payment_price.textContent) * 100,
        //                         name: title.textContent + ' (Book)',
        //                         quantity: 1
        //                     }],
        //                     payment_method_types: ['gcash', 'paymaya', 'grab_pay'],
        //                     description: 'checkout payment',
        //                     success_url: 'http://127.0.0.1:8000/successpayment/' + id
        //                 }
        //             }
        //         })
        //     };
        //     fetch('https://api.paymongo.com/v1/checkout_sessions', options)
        //         .then(response => response.json())
        //         .then(response => {
        //             // console.log(response)
        //             // window.open(response.data.attributes.checkout_url, '_blank');
        //             window.location.href = response.data.attributes.checkout_url;
        //         })
        //         .catch(err => console.error(err));
        // }
        var confirm_redirection_btn = document.getElementById('confirm-redirection');
        // confirm_redirection_btn.addEventListener('click', () => {
        //     alert(confirm_redirection_btn.href);
        // });
        function assignLink(id) {
            confirm_redirection_btn.href = '/deleteorder/' + id;
        }
        const message = bootstrap.Toast.getOrCreateInstance(document.getElementById('message'));
        @if(session('message'))
        message.show()
        @endif
    </script>