@include('partials.__header', [
'title' => 'Dropped | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/orders-style.css',
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

        <div class="card-body rating-details">
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/orders">Exchange Request</a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/toreceiveLister">To
                    Receive</a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/delivered">Completed</a>
                <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;" aria-current="page"
                    href="/dropped">Dropped</a>
                {{-- <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/refund">Refund</a> --}}
            </nav>
        </div>
         {{-- CARD IS FOR PHYSICAL EXCHANGE --}}
        <div class="order-cart d-print-none">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href=""><span>Nestine Navarro</span></a>
                    <button class="message-seller message-button"><i class="fa fa-commenting"
                            aria-hidden="true"></i></button>
                </div>
                <span class="order-text me-5 mt-0">Dropped</span>
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
                            <h5 class="card-title">Title: <span>City Limits</span></h5>
                            <p class="card-text">Author: <span>Pedro Penduko</span></p>
                            <p class="card-text">Edition: <span>1st Edition</span></p>
                            <p class="card-text">Condition: <span>Good</span></p>
                            <p class="card-text">Description: <span>This is a sample description of the book I want to
                                    offer for exchange.</span></p>
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
                    <div class="col-md-12 d-flex justify-content-between mt-3 mb-3">
                        <small>The requester wants to exchange your book, <span class="btn" data-bs-toggle="modal"
                                data-bs-target="#request" style="color: #E55B13; border: none;">"The Pioneers"</span>
                            for <span class="btn" style="color: #E55B13; cursor: text;">"City
                                Limits"</span></small>
                    </div>
                </div>
            </div>
        </div>
         {{-- CARD IS FOR PHYSICAL EXCHANGE --}}
        @php
        $loopCount = 0;
        @endphp
        @foreach ($orders as $order)
        @foreach ($order->item as $item)
        @if ($item->order_status == 'dropped')
        <div class="order-cart">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name"
                        href="/userlistings/{{ $order->user_id }}"><span>{{ $item->order->user->first_name . ' ' . $item->order->user->last_name }}</span></a>
                </div>
                <span class="order-text me-5 mt-0">Dropped</span>
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <div class="left-section">
                        <img src="{{ asset('/images/books/' . $order->book_photo) }}" alt="book" width="80px"
                            height="110px">
                        <div class="book-info">
                            <p class="mb-0 book-title">{{ $order->title }}</p>
                            <p class="mb-0 book-qty">{{ $item->qty }} Qty</p>
                            <p class="mb-0 fw-bold interaction-type">{{ $order->status }}</p>
                            <p class="payment-mode">{{ $item->order->payment_method }}</p>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="book-price">
                            <p class="product-price">₱{{ $order->price }}</p>
                            <p class="text-total">Shipping Fee:<span class="product-total">₱130</span> <br>
                                <p class="text-total">Total Payment:<span
                                        class="product-total">₱{{ $order->price + 130}}</span></p>
                        </div>
                    </div>
                </div>
                <div class="order-details">
                    <div class="order-message">
                        <p class="cancelled-text">Cancelled</p>
                    </div>
                    <div class="button-group">
                        <a href="/messages" type="button" class="btn btn-sm contact-button">Contact Customer</a>
                    </div>
                </div>
            </div>
        </div>
        @php
        $loopCount++
        @endphp
        @endif
        @endforeach
        @endforeach
        @if ($loopCount == 0)
        <div class="w-100 mt-5 d-flex justify-content-center">
            <img class="img mt-3" src="../assets/Empty-Box.png" alt="image">
        </div>
        <h1 class="mt-2 text-center fw-bold" style="color: #E55B13; font-size: 20px;">No order cancellations</h1>
        @endif
        {{-- <div class="order-cart">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href="#"><span>Jennie Blackpink</span></a>
                </div>
                <span class="order-text me-5 mt-0">Dropped</span>
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <div class="left-section">
                        <img src="../assets/city_of_secrets.png" alt="book" width="80px" height="110px">
                        <div class="book-info">
                            <p class="mb-0 book-title">City of Secrets</p>
                            <p class="mb-0 book-qty">2 Qty</p>
                            <p class="mb-0 fw-bold interaction-type">Sale</p>
                            <p class="payment-mode">Cash on Delivery</p>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="book-price">
                            <p class="product-price">₱144</p>
                            <p class="text-total">Shipping Fee:<span class="product-total">₱130</span> <br>
                            <p class="text-total">Total Payment:<span class="product-total">₱194</span></p>
                        </div>
                    </div>
                </div>
                <div class="order-details">
                    <div class="order-message">
                        <p class="cancelled-text">Cancelled by buyer</p>
                    </div>
                    <div class="button-group">
                        <button type="button" class="btn btn-sm contact-button">Contact Customer</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-cart">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href="#"><span>Jennie Blackpink</span></a>
                </div>
                <span class="order-text me-5 mt-0">Dropped</span>
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <div class="left-section">
                        <img src="../assets/city_of_secrets.png" alt="book" width="80px" height="110px">
                        <div class="book-info">
                            <p class="mb-0 book-title">City of Secrets</p>
                            <p class="mb-0 fw-bold interaction-type">Sale</p>
                            <p class="payment-mode">Cash on Delivery</p>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="book-price">
                            <p class="product-price">₱144</p>
                            <p class="text-total">Shipping Fee:<span class="product-total">₱130</span> <br>
                            <p class="text-total">Total Payment:<span class="product-total">₱194</span></p>
                        </div>
                    </div>
                </div>
                <div class="order-details">
                    <div class="order-message">
                        <p class="cancelled-text">Cancelled by buyer</p>
                    </div>
                    <div class="button-group">
                        <button type="button" class="btn btn-sm contact-button">Contact Customer</button>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
 {{-- CARD IS FOR PHYSICAL EXCHANGE --}}
<!-- Request Modal -->
<div class="modal fade" id="request" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:#003060;">Exchange Request Submission
                    Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card mb-3" style="max-width: 100%; margin-left: 3em; margin-right: 2.1em; border: none;">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 {{-- CARD IS FOR PHYSICAL EXCHANGE --}}
@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])