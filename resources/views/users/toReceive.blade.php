@include('partials.__header', [
'title' => 'To Receive | BookRedux',
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
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
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
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

        </ul>
        <div class="purchase-container">
            <div class="header">
                <h4>My Purchase</h4>
                <p>View and track your purchase item</p>
            </div>
            <div class="card-body nav-details">
                <nav class="nav nav-pills flex-column flex-sm-row">
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/mypurchase">My Exchange Request</a>
                    <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;"
                        aria-current="page" href="/toreceive">To
                        Receive</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/delivered-mypurchase">Completed</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/dropped-mypurchase">Dropped</a>
                    {{-- <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/refund-mypurchase">Refund</a> --}}
                </nav>
            </div>
        </div>
        <div class="order-cart d-print-none">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href=""><span>Maria Mesa</span></a>
                    <button class="message-seller message-button"><i class="fa fa-commenting"
                            aria-hidden="true"></i></button>
                </div>
                <span class="order-text me-5 mt-0">To Receive</span>
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
                        <small class="" style="color:#003060;">Exchange Request Accepted: <span
                                style="color: #E55B13;">Book Ready for Delivery</span></small>
                        <div class="button-group">
                            <button type="button" class="btn btn-sm pending-button" data-bs-toggle="modal"
                                data-bs-target="#arrange-shipment" onclick="arrangeShipment">Arrange Shipment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-cart d-print-none">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href=""><span>Maria Mesa</span></a>
                    <button class="message-seller message-button"><i class="fa fa-commenting"
                            aria-hidden="true"></i></button>
                </div>
                <span class="order-text me-5 mt-0">To Receive</span>
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
                        <small class="" style="color:#003060;">Exchange Request Accepted: <span
                                style="color: #E55B13;">Book Ready for Delivery</span></small>
                        <div class="button-group">
                            <button id="arrange_shipment" type="button" class="btn btn-sm arrange-button"
                                data-bs-toggle="modal" onclick="viewShipping" data-bs-target="#shipping-details">View
                                Details</button>
                            <a class="btn btn-sm receive-button" href="">Order
                                Received</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
        $loopCount = 0;
        @endphp
        @foreach ($user->orders as $order)
        @foreach ($order->items as $item)
        @if ($item->order->payment_method == 'Cash on Delivery' && $item->order_status == 'paid')
        <div class="order-cart">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name"
                        href="/userlistings/{{ $order->user_id }}"><span>{{ $item->book->user->first_name . ' ' . $item->book->user->last_name }}</span></a>
                </div>
                <span class="order-text me-5 mt-0">To Receive</span>
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <div class="left-section">
                        <img src="{{ asset('/images/books/' . $item->book->book_photo) }}" alt="book" width="80px"
                            height="110px">
                        <div class="book-info">
                            <p class="mb-0 book-title">{{ $item->book->title }}</p>
                            <p class="mb-0 book-qty">{{ $item->qty }} Qty</p>
                            <p class="mb-0 fw-bold interaction-type">{{ $item->book->status }}</p>
                            <p class="mb-0 payment-mode">{{ $item->order->shipping_option }}</p>
                            <p id="track_{{ $item->id }}" class="d-none">{{ $item->tracking_number }}
                            </p>
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
                    </div>
                </div>
                <div class="order-details">
                    <div class="order-message">
                        <button type="button" class="ms-3 post-btn" data-bs-toggle="modal"
                            data-bs-target="#track-delivery" onclick="trackOrder({{ $item->id }})">Track Order<i
                                class="fa fa-angle-right" aria-hidden="true"></i></button>
                    </div>
                    <div class="button-group">
                        <a class="btn btn-outline-primary btn-sm receive-button"
                            href="/orderreceived/{{ $item->id }}">Order
                            Received</a>
                    </div>
                </div>
            </div>
        </div>
        @php
        $loopCount++;
        @endphp
        @elseif ($item->order->payment_method == 'eWallet' && $item->order_status == 'paid')
        <div class="order-cart">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name"
                        href="/userlistings/{{ $order->user_id }}"><span>{{ $item->book->user->first_name . ' ' . $item->book->user->last_name }}</span></a>
                </div>
                <span class="order-text me-5 mt-0">To Receive</span>
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <div class="left-section">
                        <img src="{{ asset('/images/books/' . $item->book->book_photo) }}" alt="book" width="80px"
                            height="110px">
                        <div class="book-info">
                            <p class="mb-0 book-title">{{ $item->book->title }}</p>
                            <p class="mb-0 book-qty">2 Qty</p>
                            <p class="mb-0 fw-bold interaction-type">{{ $item->book->status }}</p>
                            <p class="mb-0payment-mode">{{ $item->order->shipping_option }}</p>
                            <p id="track_{{ $item->id }}" class="d-none">{{ $item->tracking_number }}
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="book-price">
                            <p class="product-price">{{ $item->book->price }}</p>
                            <p class="text-total">Total Payment:<span
                                    class="product-total">{{ $item->book->price }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="order-details">
                    <div class="order-message">
                        <button type="button" class="post-btn" data-bs-toggle="modal" data-bs-target="#track-delivery"
                            onclick="trackOrder({{ $item->id }})">Track Order<i class="fa fa-angle-right"
                                aria-hidden="true"></i></button>
                    </div>
                    <div class="button-group">
                        <a class="btn btn-outline-primary btn-sm receive-button"
                            href="/orderreceived/{{ $item->id }}">Order
                            Received</a>
                    </div>
                </div>
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
        <h1 class="mt-2 text-center fw-bold" style="color: #E55B13; font-size: 20px;">No deliveries yet</h1>
        @endif

        <!-- Tracking Modal -->
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
                                                            received by the rider</span>
                                                        <span id="modal_tracking"
                                                            class="text-muted small tracking-text"></span>
                                                    </div>
                                                </div>
                                                {{-- I COMMENT MUNA KAY NA ERROR DIK NATUTUHAY PAG FRONTEND --}}

                                                {{-- <div
                                                    class="d-flex flex-row justify-content-between align-items-center align-content-center">
                                                    <span id="first_track{{ $item->id }}"
                                                class="dot"></span>
                                                <hr class="flex-fill track-line"><span id="second_track{{ $item->id }}"
                                                    class="dot"></span>
                                                <hr class="flex-fill track-line"><span id="fourth_track{{ $item->id }}"
                                                    class="d-flex justify-content-center align-items-center big-dot dot"><i
                                                        class="fa fa-check text-white"></i></span>
                                                <hr class="flex-fill track-line"><span id="fifth_track{{ $item->id }}"
                                                    class="dot"></span>
                                            </div> --}}

                                            {{-- I COMMENT MUNA KAY NA ERROR DIK NATUTUHAY PAG FRONTEND --}}
                                            <div class="d-flex flex-row justify-content-between align-items-center">
                                                <div class="d-flex flex-column align-items-start tracking-text">
                                                    <span class="date-track"></span>
                                                    <span class="tracking-description">Order
                                                        placed</span>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center tracking-text">
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

    <!-- Confirmation-Order Modal -->
    <div class="modal fade" id="order-received" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #003060;">Release
                        <span>P120.00</span> to seller
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="color: #003060;">
                    <p>Check that you received all items in satisfactory condition (no return/refund required)
                        before confirming receipt.</p>
                    <p>Once you confirm, the order is completed and we will release the payment to seller.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                        data-bs-target="#return-refund">Return Refund</button>
                    <button type="button" class="btn confirm-btn">Confirm</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Return Refund Modal -->
    <div class="modal fade" id="return-refund" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #003060;">Return/Refund
                        Request</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="color: #003060;">
                    <p>Please complete the following details for return/refund request.</p>
                    <div class="order-cart">
                        <div class="name-return d-flex justify-content-between">
                            <div>

                                {{-- I COMMENT MUNA KAY NA ERROR DIK NATUTUHAY PAG FRONTEND --}}

                                {{-- <a class="seller-name" href="/userlistings/{{ $order->user_id }}"><span>Jennie
                                    Blackpink</span></a> --}}

                                {{-- I COMMENT MUNA KAY NA ERROR DIK NATUTUHAY PAG FRONTEND --}}
                            </div>
                        </div>
                        <div class="product-return">
                            <div class="book-details-return">
                                <div class="left-section">
                                    <img src="../assets/city_of_secrets.png" alt="book" width="50px" height="80px">
                                    <div class="book-info-return">
                                        <p class="mb-0 book-title">City of Secrets</p>
                                        <p class="mb-0 fw-bold interaction-type">Sale</p>
                                        <p class="payment-mode">Personal Transaction</p>
                                    </div>
                                </div>
                                <div class="right-section">
                                    <div class="book-price">
                                        <p class="product-price">P144</p>
                                        <p class="text-total">Total Payment:<span class="product-total">P144</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleTextarea" class="form-label">Reason/s:</label>
                        <textarea class="form-control" id="exampleTextarea" rows="5"
                            placeholder="Enter your text here..."></textarea>
                    </div>
                    <p>Evidence:
                        <div class="image-container">
                            <div class="image-holder">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                            <div class="image-holder">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                            <div class="image-holder">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                            <div class="image-holder">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                            <div class="image-holder">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                        </div>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn request-btn">Send Request</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Arrange Shipment Modal -->
<div class="modal fade d-print-none" id="arrange-shipment" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Transaction Record</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="details-container">
                    <div class="seller-details-box">
                        <input type="text" class="d-none" id="item_id">
                        <label for="seller-details" class="form-label">Lister Details</label>
                        <input type="text" class="form-control" id="seller-fullname"
                            placeholder="Nestine Nicole Navarro"><br>
                        <input type="text" class="form-control" id="seller-contact-number"
                            placeholder="09097568923"><br>
                        <input type="text" class="form-control" id="seller-address"
                            placeholder="Blk 33 Lot 52 Peerless Village, Bagacay, Tacloban">
                    </div>

                    <div class="customer-details-box">
                        <label for="customer-details" class="form-label">Requester Details</label>
                        <input type="text" class="form-control" id="customer-fullname"
                            placeholder="Jennie BlackPink"><br>
                        <input type text="text" class="form-control" id="customer-contact-number"
                            placeholder="09129348884"><br>
                        <input type="text" class="form-control" id="customer-address"
                            placeholder="Blk 33 Lot 52 Buhat Village, Diit, Tacloban">
                    </div>
                </div>

                <div class="details-container">
                    <div class="package-details-box">
                        <label for="package-details" class="form-label">Package Description</label>
                        <input type="text" class="form-control" id="weight" placeholder="1 (kg)"><br>
                        <input type="text" class="form-control" id="width" placeholder="5 cm"><br>
                        <input type="text" class="form-control" id="height" placeholder="7 cm"><br>
                        <input type="text" class="form-control" id="length" placeholder="7 cm"><br>
                        {{-- <input type="text" class="form-control" id="payment-method"
                            placeholder="Cash on Delivery"> --}}
                    </div>

                    <div class="product-details-box">
                        <label for="product-details" class="form-label">Product Details</label>
                        <input type="text" class="form-control" id="order-date"
                            placeholder="Submitted Request Date: 12/29/2023"><br>
                        <input type="text" class="form-control" id="order-date"
                            placeholder="Approved Request Date: 12/29/2023"><br>
                        <input type text="text" class="form-control" id="transaction-number"
                            placeholder="Transaction Number: TRA421376365"><br>
                        <input type="text" class="form-control" id="book-title" placeholder="Title: City Limits"><br>
                    </div>
                </div>

                <div class="details-container">
                    <label class="drop-off-details" for="drop_off" onclick="hidePickupContent()">
                        <i class="fa fa-dropbox" aria-hidden="true"></i>
                        <div class="text-section">
                            <h6 class="fw-bold">Drop off</h6>
                            <p>You can drop off your parcel at any J&T Express Branch</p>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Drop off" name="transaction_type"
                                id="drop_off">
                            {{-- <label class="form-check-label" for="flexCheckDefault"></label> --}}
                        </div>
                    </label>
                    <label class="pickup-details" for="pick_up">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                        <div class="text-section">
                            <h6 class="fw-bold">Pickup</h6>
                            <p>J&T Express will collect parcel from your pickup address</p>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Pickup" name="transaction_type"
                                id="pick_up">
                            {{-- <label class="form-check-label" for="flexCheckDefault"></label> --}}
                        </div>
                    </label>
                    <label class="personal-transaction-details" for="personal_transaction"
                        onclick="hidePickupContent()">
                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
                        <div class="text-section">
                            <h6 class="fw-bold">Personal Transaction</h6>
                            <p>You and the requester will arrange your transaction</p>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="Personal Transaction"
                                name="transaction_type" id="personal_transaction">
                            {{-- <label class="form-check-label" for="flexCheckDefault"></label> --}}
                        </div>
                    </label>
                </div>
                <div class="details-container d-none" id="details">
                    <div class="pickup-address">
                        <div class="text-section">
                            <h6 class="mb-2 fw-bold">Pickup Address</h6>
                            <p id="pickup-name">Nestine Nicole Navarro</p>
                            <p id="pickup-phone">09054173103</p>
                            <p id="pickup-address">Peerless Village, Bagacay, Tacloban City</p>
                            <p id="pickup-postal">6500</p>
                        </div>
                        <button class="change-btn" data-bs-toggle="modal" data-bs-target="#edit-address"><a
                                href="#">Change</a></button>
                    </div>
                    <div class="pickup-date">
                        <div class="text-section">
                            <h6 class="mb-2 fw-bold">Pickup Date</h6>
                            <div class="form-group">
                                <input type="date" class="form-control" id="pickup-date" data-date-format="yyyy-mm-dd">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" id="confirm-btn" class="btn confirm-button">Confirm</button>
                {{-- Clicking confirm button means you accept the order --}}
            </div>
        </div>
    </div>
</div>

<!-- Shipping Details Modal -->
<div class="modal fade" id="shipping-details" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-print-none">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Transaction Details</h1>
            </div>
            <div class="modal-body d-print-block">
                <div class="container mt-5 mb-5">
                    <div class="d-flex justify-content-center row">
                        <div class="col-md-10">
                            <div class="receipt bg-white p-3 rounded"><img src="../assets/Book_Logo.png" width="120">
                                {{-- <h4 class="mt-2 mb-3">Your order is confirmed!</h4> --}}
                                {{-- <h6 class="name">Hello John,</h6><span class="fs-12 text-black-50">your order has been confirmed and will be shipped in two days</span> --}}
                                <hr>
                                <div class="d-flex flex-row justify-content-between align-items-center order-details">
                                    <div><span class="d-block fs-12">Approved Request Date</span><span
                                            id="detail-order-date" class="font-weight-bold">12 March
                                            2020</span></div>
                                    <div><span class="d-block fs-12">Transaction number</span><span
                                            id="detail-order-number" class="font-weight-bold">TRA44434324</span>
                                    </div>
                                    <div><span class="d-block fs-12">Request Date</span><span id="detail-payment-method"
                                            class="font-weight-bold">03 April
                                            2024</span></div>
                                    <div><span class="d-block fs-12">Shipping Address</span><span
                                            id="detail-shipping-address"
                                            class="font-weight-bold shipping-address-text">Bagacay,
                                            Tacloban</span></div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center product-details">
                                    <div class="d-flex flex-row product-name-image">
                                        <div class="d-flex flex-column justify-content-between ml-2">
                                            <div>
                                                <span id="detail-title" class="d-block fw-bold p-name">City
                                                    Limits</span>
                                                <span id="detail-isbn" class="fs-12">ISBN:
                                                    65342688564324</span><br>
                                                <span id="detail-isbn" class="fs-12">Author: Marx
                                                    Hinton</span><br>
                                                <span id="detail-isbn" class="fs-12">Genre: Self-help</span><br>
                                                <span id="detail-isbn" class="fs-12">Edition: 1st
                                                    Edition</span><br>
                                                <span id="detail-isbn" class="fs-12">Condition: New</span><br>
                                                <span id="detail-isbn" class="fs-12">Exchange Method Preference:
                                                    Meetup</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h5 id="detail-price">Paperback</h5>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex flex-row justify-content-between align-items-center order-details">
                                    <div><span class="d-block fs-12">Lister Name</span><span
                                            id="detail-order-date">Marie Penduko</span>
                                    </div>
                                    <div><span class="d-block fs-12">Contact number</span><span
                                            id="detail-shipping-address"
                                            class="font-weight-bold shipping-address-text">09491229441</span>
                                    </div>
                                    <div><span class="d-block fw-bold fs-12">Requester Name</span><span
                                            id="detail-payment-method" style="color: rgb(111, 185, 219)">Nestine
                                            Navarro</span></div>
                                    <div><span class="d-block fs-12">Contact Number</span><span
                                            id="detail-shipping-address"
                                            class="font-weight-bold shipping-address-text">09054173103</span>
                                    </div>
                                </div>
                                <hr>
                                {{-- <div class="mt-5 amount row">
                                <div class="d-flex justify-content-center col-md-6"><img id="detail-barcode"
                                        src="../assets/tracking.jfif" width="250" height="100">
                                </div> --}}
                                {{-- <div class="col-md-6">
                                    <div class="billing">
                                        <div class="d-flex justify-content-between">
                                            <span>Subtotal</span><span id="detail-subtotal"
                                                class="font-weight-bold">₱100</span>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2"><span>Shipping
                                                fee</span><span id="detail-shipping-fee"
                                                class="font-weight-bold">₱130</span></div>
                                        <hr>
                                        <div class="d-flex justify-content-between mt-1"><span
                                                class="font-weight-bold">Total</span>
                                            <span id="detail-total"
                                                class="font-weight-bold shipping-address-text">₱140</span>
                                        </div>
                                    </div>
                                </div> --}}
                            </div><span class="d-block">Complete Address</span><span id="detail-address"
                                class="font-weight-bold shipping-address-text">Blk 33 Lot 52 Bagacay,
                                Tacloban City</span>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center footer">
                                <div class="thanks"><span class="d-block font-weight-bold">Thanks for
                                        sharing</span><span>BookRedux team</span></div>
                                {{-- <div class="d-flex flex-column justify-content-end align-items-end"><span class="d-block font-weight-bold">Need Help?</span><span>Call - 974493933</span></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-print-none">
                <button type="button" class="btn btn-secondary close-button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary hidden-print save-button" onclick="myFunction()"><span
                        class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
                {{-- <button type="button" class="btn save-button">Update</button> --}}
            </div>
        </div>
    </div>
</div>
</div>

<script>
    const trackOrder = (id) => {
        // alert(document.getElementById(`track_${id}`).textContent);
        document.getElementById('modal_tracking').textContent =
            `Tracking Number: ${document.getElementById(`track_${id}`).textContent}`;
    }
</script>
@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])