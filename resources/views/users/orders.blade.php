@include('partials.__header', [
    'title' => 'Exchange Request | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/orders-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> --}}
    <script src="https://unpkg.com/pdfjs-dist@2.9.359/build/pdf.min.js"></script>
</head>

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 shadow">
        <x-sidebar />
    </div>
    <div id="content" class="content">
        <ul class="nav bg-light sticky-top head-nav shadow py-4 px-4 d-print-none">
            <div class="w-100 d-flex mt-2 p-0 d-print-none">
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5"
                        src="../assets/Book_Logo.png" alt="Logo"></a>
            </div>
            <div class="position-absolute end-0 d-print-none">
                <div class="d-flex">
                    <ul class="nav py-profile justify-content-end">
                        <li class="nav-item dropdown">
                            <a href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                class="nav-link dropdown-toggle avatar" aria-expanded="false" title="profile">
                                <img src="{{ session('image') }}" alt="notification" width="35" height="35"
                                    class="rounded-5" style="margin-right: 2em;">
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

        <div class="card-body rating-details d-print-none">
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;" aria-current="page"
                    href="/orders">Exchange Request</a>
                {{-- <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/toreceiveLister">To
                    Receive</a> --}}
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/delivered">Completed</a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/dropped">Dropped</a>
                {{-- <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/refund">Refund</a> --}}
            </nav>
        </div>
        {{-- CARD IS FOR DIGITAL EXCHANGE --}}
        @foreach ($orders as $req)
            @foreach ($req->request as $order)
                @if ($order->status == 'Request')
                    <div class="order-cart d-print-none">
                        <div class="name-cart d-flex justify-content-between">
                            <div>
                                <a class="seller-name" href=""><span>{{ $order->user->name }}</span></a>
                                <button class="message-seller message-button"><i class="fa fa-commenting"
                                        aria-hidden="true"></i></button>
                            </div>
                            <span class="order-text me-5 mt-0">{{ $order->book->status }} Request</span>
                        </div>
                        <div class="card mb-3" style="max-width: 100%; margin-left: 3em; margin-right: 2.1em;">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('/images/book_cover/' . $order->back_cover) }}"
                                        class="img w-100 h-100" alt="image">
                                </div>
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">Title: <span
                                                class="fw-normal">{{ $order->title }}</span></h5>
                                        <p class="card-text fw-bold">Author: <span
                                                class="fw-normal">{{ $order->author }}</span></p>
                                        <p class="card-text fw-bold">Edition: <span
                                                class="fw-normal">{{ $order->edition }}</span></p>
                                        {{-- <button type="button" class="btn preview btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#digitalPreviewModal" onclick="previewBtn({{ $order->book_filename }})">Preview
                                        </button> --}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">ISBN: <span
                                                class="fw-normal">{{ $order->isbn }}</span></h5>
                                        <p class="card-text fw-bold">Genre: <span
                                                class="fw-normal">{{ $order->genre }}</span></p>
                                        <p class="card-text fw-bold">Description: <span
                                                class="fw-normal">{{ $order->description }}</span></p>
                                    </div>
                                </div>
                                <div class="col-md-12 d-flex justify-content-between mt-3 mb-3">
                                    <small>The requester wants to exchange your book, <span class="btn"
                                            data-bs-toggle="modal" data-bs-target="#digital_request"
                                            onclick="requester({{ $order->book->id }})"
                                            style="color: #E55B13; border: none;">"{{ $order->book->title }}"</span>
                                        for <span class="btn"
                                            style="color: #E55B13; cursor: text;">"{{ $order->title }}"</span></small>
                                    <div>
                                        <button type="button" class="btn accept btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#accept_request"
                                            onclick="viewTransaction({{ $order->id }})">Accept
                                            <span class="fa fa-check"></span>
                                        </button>
                                        <button id="decline_order_btn" onclick="declineOrderBtn({{ $order->id }})" class="deny btn btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Decline <span
                                                class="fa fa-close"></span></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
        {{-- CARD IS FOR PHYSICAL EXCHANGE --}}
        {{-- <div class="order-cart d-print-none">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href=""><span>Nestine Navarro</span></a>
                    <button class="message-seller message-button"><i class="fa fa-commenting"
                            aria-hidden="true"></i></button>
                </div>
                <span class="order-text me-5 mt-0">Exchange Request</span>
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
                        <div>
                            <button type="button" class="btn accept btn-sm" data-bs-toggle="modal"
                                data-bs-target="#arrange-shipment" onclick="arrangeShipment">Accept
                                <span class="fa fa-check"></span>
                            </button>
                            <a href="#" class="deny btn btn-sm">Decline <span class="fa fa-close"></span></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="order-cart d-print-none">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href=""><span>Nestine Navarro</span></a>
                    <button class="message-seller message-button"><i class="fa fa-commenting"
                            aria-hidden="true"></i></button>
                </div>
                <span class="order-text me-5 mt-0">Exchange Request</span>
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
                        <small class="" style="color:#003060;">Exchange Request Accepted: <span
                                style="color: #E55B13;">Waiting for the requester to arrange the shipment</span></small>
                        <div>
                            <button id="arrange_shipment" type="button" class="btn btn-sm arrange-button"
                                data-bs-toggle="modal" onclick="viewShipping" data-bs-target="#shipping-details">View
                                Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- CARD IS FOR PHYSICAL EXCHANGE --}}

        {{-- @php
        $loopCount = 0;
        @endphp
        @foreach ($orders as $order)
        @foreach ($order->item as $item)
        @if ($item->order_status == 'Pending') --}}
        {{-- {{ $item->order->user->first_name }} --}}
        {{-- <div class="order-cart d-print-none">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name"
                        href="/userlistings/{{ $order->user_id }}"><span>{{ $item->order->user->first_name . ' ' . $item->order->user->last_name }}</span></a>
                    <button class="message-seller message-button"><i class="fa fa-commenting"
                            aria-hidden="true"></i></button>
                </div>
                <span class="order-text me-5 mt-0">Order</span>
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <div class="left-section">
                        <img src="{{ asset('images/books/' . $order->book_photo) }}" alt="book" width="80px"
                            height="110px">
                        <div class="book-info">
                            <p class="mb-0 book-title">{{ $order->title }}</p>
                            <p class="mb-0 book-qty">{{ $item->qty }} Qty</p>
                            <p class="mb-0 fw-bold interaction-type">{{ $order->status }}</p>
                            <p class="mb-0 payment-mode">{{ $item->order->shipping_option }}</p>
                            <p>Order No: {{ $item->order->order_number }}</p>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="book-price">
                            <p class="product-price">₱{{ $order->price }}</p>
                            <p class="text-total">Shipping Fee:<span class="product-total">₱130</span>
                            </p> <br>
                            <p class="text-total">Total Payment:<span class="product-total">₱{{ $order->price }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="order">
                    <div class="order-details">
                        <div class="order-message">
                            <small class="text-body-secondary">To accept the order, arrange first the
                                shipment
                                details</small>
                        </div>
                        <div class="button-group">
                            <button type="button" id="decline-btn" class="btn btn-sm decline-button"
                                data-bs-toggle="modal" onclick="declineItem({{ $item->id }})"
                                data-bs-target="#staticBackdrop">Decline</button>
                            <button id="arrange_shipment" type="button" class="btn btn-sm arrange-button"
                                data-bs-toggle="modal" onclick="arrangeShipment({{ $order->id . ', ' . $item->id }})"
                                data-bs-target="#arrange-shipment">Arrange Shipment</button>
                        </div>
                    </div>
                    <p class="order-ID">Order ID <span class="float-end me-5 orderID">#7649324789134</span></p>
                </div>
            </div>
        </div> --}}
        {{-- @php
        $loopCount++;
        @endphp
        @elseif ($item->order_status == 'paid')
        <div class="order-cart d-print-none">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name"
                        href="/userlistings/{{ $order->user_id }}"><span>{{ $item->order->user->first_name . ' ' . $item->order->user->last_name }}</span></a>
                    <button class="message-seller message-button"><i class="fa fa-commenting"
                            aria-hidden="true"></i></button>
                </div>
                <span class="order-text me-5 mt-0">Order</span>
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <div class="left-section">
                        <img src="{{ asset('images/books/' . $order->book_photo) }}" alt="book" width="80px"
                            height="110px">
                        <div class="book-info">
                            <p class="mb-0 book-title">{{ $order->title }}</p>
                            <p class="mb-0 book-qty">{{ $item->qty }} Qty</p>
                            <p class="mb-0 fw-bold interaction-type">{{ $order->status }}</p>
                            <p class="mb-0 payment-mode">{{ $item->order->shipping_option }}</p>
                            <p>#{{ $item->order->order_number }}</p>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="book-price">
                            <p class="product-price">₱{{ $order->price }}</p>
                            <p class="text-total">Shipping Fee:<span class="product-total">₱130</span>
                            </p> <br>
                            <p class="text-total">Total Payment:<span class="product-total">₱{{ $order->price }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="order">
                    <div class="order-details">
                        <div class="order-message">                            
                        </div>
                        <div class="button-group">                            
                            <button id="arrange_shipment" type="button" class="btn btn-sm arrange-button"
                                data-bs-toggle="modal" onclick="viewShipping({{ $order->id . ', ' . $item->id }})"
                                data-bs-target="#shipping-details">View Shipping Details</button>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        @php
        $loopCount++;
        @endphp
        @elseif ($item->order_status == 'Confirmed by seller')
        <div class="order-cart d-print-none">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name"
                        href="/userlistings"><span>{{ $item->order->user->first_name . ' ' . $item->order->user->last_name }}</span></a>
                    <button class="message-seller"><i class="fa fa-commenting" aria-hidden="true"></i></button>
                </div>
                <span class="order-text me-5 mt-0">Order</span>
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <div class="left-section">
                        <img src="{{ asset('images/books/' . $order->book_photo) }}" alt="book" width="80px"
                            height="110px">
                        <div class="book-info">
                            <p class="mb-0 book-title">{{ $order->title }}</p>
                            <p class="mb-0 book-qty">{{ $item->qty }} Qty</p>
                            <p class="mb-0 fw-bold interaction-type">{{ $order->status }}</p>
                            <p class="mb-0 payment-mode">{{ $item->order->shipping_option }}</p>
                            <p>#{{ $item->order->order_number }}</p>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="book-price">
                            <p class="product-price">₱{{ $order->price }}</p>
                            <p class="text-total">Shipping Fee:<span class="product-total">₱130</span>
                            </p> <br>
                            <p class="text-total">Total Payment:<span class="product-total">₱{{ $order->price }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="order">
                    <div class="order-details">
                        <div class="order-message">
                            <small class="" style="color: #E55B13">FOR APPROVAL BY COURIER</small>                            
                        </div>
                        <div class="button-group">
                            
                            <button id="arrange_shipment" type="button" class="btn btn-sm arrange-button"
                                data-bs-toggle="modal" onclick="viewShipping({{ $order->id . ', ' . $item->id }})"
                                data-bs-target="#shipping-details" disabled>View Shipping Details</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        @php
        $loopCount++;
        @endphp
        @endif
        @endforeach
        @endforeach --}}



        {{-- @if ($loopCount == 0)
        <div class="w-100 mt-5 d-flex justify-content-center">
            <img class="img mt-3" src="../assets/Empty-Box.png" alt="image">
        </div>
        <h1 class="mt-2 text-center fw-bold" style="color: #E55B13; font-size: 20px;">No new exchange request today</h1>
        @endif --}}
        {{-- CARD IS FOR PHYSICAL EXCHANGE --}}
        <!-- Transaction Record Modal -->
        {{-- <div class="modal fade d-print-none" id="arrange-shipment" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Transaction Record</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
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
                            </div>

                            <div class="product-details-box">
                                <label for="product-details" class="form-label">Product Details</label>
                                <input type="text" class="form-control" id="order-date"
                                    placeholder="Submitted Request Date: 12/29/2023"><br>
                                <input type="text" class="form-control" id="order-date"
                                    placeholder="Approved Request Date: 12/29/2023"><br>
                                <input type text="text" class="form-control" id="transaction-number"
                                    placeholder="Transaction Number: TRA421376365"><br>
                                <input type="text" class="form-control" id="book-title"
                                    placeholder="Title: The Pioneers"><br>
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
                                    <input class="form-check-input" type="radio" value="Drop off"
                                        name="transaction_type" id="drop_off">
                                    
                                </div>
                            </label>
                            <label class="pickup-details" for="pick_up">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                                <div class="text-section">
                                    <h6 class="fw-bold">Pickup</h6>
                                    <p>J&T Express will collect parcel from your pickup address</p>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Pickup"
                                        name="transaction_type" id="pick_up">
                                    
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
                                        <input type="date" class="form-control" id="pickup-date"
                                            data-date-format="yyyy-mm-dd">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" id="confirm-btn" class="btn confirm-button">Confirm</button>                        
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- CARD IS FOR PHYSICAL EXCHANGE --}}
        <!-- Edit Address Modal -->
        {{-- <div class="modal fade d-print-none" id="edit-address" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Address</h1>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <h6 class="ms-3 mt-4 fw-bold" style="color: #003060; margin-bottom: -10px;">Select Address:</h6>
                    <div id="address-modal" class="modal-body mt-0">
                        <label class="pickup-address" for="address-id">
                            <div class="text-section">
                                <p id="pickup-name">Nestine Nicole Navarro</p>
                                <p id="pickup-phone">09054173103</p>
                                <p id="pickup-address">Peerless Village, Bagacay, Tacloban City</p>
                                <p id="pickup-postal">6500</p>
                            </div>                           
                            <input type="radio" id="address-id" name="address_id">
                        </label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-button" data-bs-toggle="modal"
                            data-bs-target="#arrange-shipment">Close</button>
                        <button type="button" id="update-address" class="btn save-button" data-bs-toggle="modal"
                            data-bs-target="#arrange-shipment">Update</button>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- CARD IS FOR PHYSICAL EXCHANGE --}}

        {{-- Digital Exchange Preview --}}
        <div class="modal fade" id="digitalPreviewModal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="digitalPreviewModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                <div class="modal-content h-100">
                    <div class="modal-header">
                        <h1 id="digitalPreviewTitle" class="modal-title fs-5 fw-bold" style="color: #003060">Modal
                            title
                        </h1>
                        <button id="digitalPreviewClose" type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <div id="pdfPreview" class="d-flex justify-center flex-column m-5"></div>
                        <h2 class="text-center mb-5 text-danger fw-bold">Send an Exchange Request to continue reading
                            the
                            whole document</h2>
                    </div>
                </div>
            </div>
        </div>

        {{-- CARD IS FOR DIGITAL EXCHANGE --}}
        <!-- Transaction Record Modal -->
        <div class="modal fade d-print-none" id="accept_request" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Transaction Record</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- <h5 style="color: #E55B13;">Transaction #: 784328432194</h5> --}}
                        <div class="d-flex flex-row justify-content-center">
                            <div class="w-100 me-2">
                                {{-- <input type="text" class="d-none" id="lister_input"> --}}
                                <label for="seller-details" class="form-label">Lister</label>
                                <input type="text" class="form-control" id="lister_input"
                                    placeholder="Nestine Nicole Navarro"><br>
                                <p id="lister_book_title" class="form-label">Title: The Pioneers</p>
                                <div class="ExternalFiles">
                                    <div id="listerPdfPreview" height="400" width="500px"
                                        style="max-width: 500px;"></div>
                                    {{-- <iframe src="/assets/TRANSACTION FORM.pdf" frameborder="0" height="400"
                                        width="500"></iframe> --}}
                                </div>
                            </div>

                            <div class="w-100 ms-2">
                                <label for="customer-details" class="form-label">Requester</label>
                                <input type="text" class="form-control" id="requester_input"
                                    placeholder="Jennie BlackPink"><br>
                                <p id="requester_book_title" class="form-label">Title: City Limits</p>
                                <div class="ExternalFiles">
                                    <div id="requesterPdfPreview" height="400" width="500px"
                                        style="max-width: 500px;"></div>
                                    {{-- <iframe src="/assets/InfoSec_Module-1.pdf" frameborder="0" height="400"
                                        width="500"></iframe> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                    <form action="/confirmexchange" method="POST">
                        @csrf
                        <input id="requestID" type="text" name="req_id" hidden>
                        <input type="text" value="Confirmed" name="confirm_col" hidden>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" id="confirm-btn" class="btn confirm-button">Confirm</button>
                        </div>
                    </form>
                    <p style="color: #003060; text-align:center;">By confirming, you can access the entire file
                        offered
                        and grant
                        the requester permission to view your file in full.</p>
                </div>
            </div>
        </div>
        {{-- CARD IS FOR DIGITAL EXCHANGE --}}

        <!-- Shipping Details Modal -->
        {{-- <div class="modal fade" id="shipping-details" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header d-print-none">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Transaction Details</h1>
                    </div>
                    <div class="modal-body d-print-block">
                        <div class="container mt-5 mb-5">
                            <div class="d-flex justify-content-center row">
                                <div class="col-md-10">
                                    <div class="receipt bg-white p-3 rounded"><img src="../assets/Book_Logo.png"
                                            width="120">                                       
                                        <hr>
                                        <div
                                            class="d-flex flex-row justify-content-between align-items-center order-details">
                                            <div><span class="d-block fs-12">Approved Request Date</span><span
                                                    id="detail-order-date" class="font-weight-bold">12 March
                                                    2020</span></div>
                                            <div><span class="d-block fs-12">Transaction number</span><span
                                                    id="detail-order-number"
                                                    class="font-weight-bold">TRA44434324</span>
                                            </div>
                                            <div><span class="d-block fs-12">Request Date</span><span
                                                    id="detail-payment-method" class="font-weight-bold">03 April
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
                                                        <h6 style="color:#E55B13;">My Book - Outgoing book</h6>
                                                        <span id="detail-title" class="d-block fw-bold p-name">The
                                                            Pioneers</span>
                                                        <span id="detail-isbn" class="fs-12">ISBN:
                                                            65342688564324</span><br>
                                                        <span id="detail-isbn" class="fs-12">Author: Marx
                                                            Hinton</span><br>
                                                        <span id="detail-isbn" class="fs-12">Genre:
                                                            Self-help</span><br>
                                                        <span id="detail-isbn" class="fs-12">Edition: 1st
                                                            Edition</span><br>
                                                        <span id="detail-isbn" class="fs-12">Condition:
                                                            New</span><br>
                                                        <span id="detail-isbn" class="fs-12">Exchange Method
                                                            Preference:
                                                            Meetup</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <h5 id="detail-price">Paperback</h5>
                                            </div>
                                        </div>
                                        <hr>
                                        <div
                                            class="d-flex flex-row justify-content-between align-items-center order-details">
                                            <div><span class="d-block fw-bold fs-12">Lister Name</span><span
                                                    id="detail-order-date" style="color: rgb(111, 185, 219)">Marie
                                                    Penduko</span>
                                            </div>
                                            <div><span class="d-block fs-12">Contact number</span><span
                                                    id="detail-shipping-address"
                                                    class="font-weight-bold shipping-address-text">09491229441</span>
                                            </div>                                            
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-between align-items-center product-details">
                                            <div class="d-flex flex-row product-name-image">
                                                <div class="d-flex flex-column justify-content-between ml-2">
                                                    <div>
                                                        <h6 style="color:#E55B13;">Requester Book - Incoming book</h6>
                                                        <span id="detail-title" class="d-block fw-bold p-name">City
                                                            Limits</span>
                                                        <span id="detail-isbn" class="fs-12">ISBN:
                                                            65342688564324</span><br>
                                                        <span id="detail-isbn" class="fs-12">Author: Marx
                                                            Hinton</span><br>
                                                        <span id="detail-isbn" class="fs-12">Genre:
                                                            Self-help</span><br>
                                                        <span id="detail-isbn" class="fs-12">Edition: 1st
                                                            Edition</span><br>
                                                        <span id="detail-isbn" class="fs-12">Condition:
                                                            New</span><br>
                                                        <span id="detail-isbn" class="fs-12">Exchange Method
                                                            Preference:
                                                            Meetup</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <h5 id="detail-price">Paperback</h5>
                                            </div>
                                        </div>
                                        <hr>
                                        <div
                                            class="d-flex flex-row justify-content-between align-items-center order-details">                                            
                                            <div><span class="d-block fs-12">Requester Name</span><span
                                                    id="detail-payment-method" class="font-weight-bold"
                                                    style="color: rgb(111, 185, 219)">Nestine
                                                    Navarro</span></div>
                                            <div><span class="d-block fs-12">Contact Number</span><span
                                                    id="detail-shipping-address"
                                                    class="font-weight-bold shipping-address-text">09054173103</span>
                                            </div>
                                        </div>
                                        <hr>

                                    </div><span class="d-block">Complete Address</span><span id="detail-address"
                                        class="font-weight-bold shipping-address-text">Blk 33 Lot 52 Bagacay,
                                        Tacloban City</span>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center footer">
                                        <div class="thanks"><span class="d-block font-weight-bold">Thanks for
                                                sharing</span><span>BookRedux team</span></div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-print-none">
                        <button type="button" class="btn btn-secondary close-button"
                            data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary hidden-print save-button" onclick="myFunction()"><span
                                class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>                        
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
        {{-- CARD IS FOR PHYSICAL EXCHANGE --}}
        {{-- alert modal --}}
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body px-3">
                        <p class="fs-4">Are you sure you want to decline the order?</p>
                        <div class="text-center">
                            <a id="decline_request_order" class="btn btn-danger">Confirm</a>
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
</div>

{{-- CARD IS FOR DIGITAL EXCHANGE --}}
<!-- Digital Request Modal -->
<div class="modal fade" id="digital_request" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:#003060;">Exchange Request
                    Submission
                    Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card mb-3" style="max-width: 100%; margin-left: 3em; margin-right: 2.1em; border: none;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img id="req_img" class="img w-100 h-100" alt="image">

                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Title: <span id="title" class="fw-normal">The
                                        Pioneers</span></h5>
                                <p class="card-text fw-bold">Author: <span id="author" class="fw-normal">Pedro
                                        Penduko</span></p>
                                <p class="card-text fw-bold">Edition: <span id="edition" class="fw-normal">1st
                                        Edition</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">ISBN: <span id="isbn"
                                        class="fw-normal">124154238778</span></h5>
                                <p class="card-text fw-bold">Genre: <span id="genre"
                                        class="fw-normal">Self-help</span></p>
                                <p class="card-text fw-bold">Description: <span id="descrip" class="fw-normal">This
                                        is a sample description.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- CARD IS FOR DIGITAL EXCHANGE --}}
@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
{{-- <script>
    $(document).ready(function() {
        $('#datepicker').datepicker();
    });
</script> --}}

<script>
    const message = bootstrap.Toast.getOrCreateInstance(document.getElementById('message'));
    @if (session('message'))
        message.show()
    @endif

    const listerPreview = (filename) => {
        var loadingTask = pdfjsLib.getDocument(`/files/books/${filename}`);
        var pdfDiv = document.getElementById('listerPdfPreview');
        var pageNumIsRendering = false;
        var pageNumIsPending = null;

        loadingTask.promise.then((pdf) => {
            // console.log(pdf.numPages);
            for (var pageNum = 1; pageNum <= 10; pageNum++) {
                const canvas = document.createElement('canvas');
                canvas.className = 'border border-secondary-subtle my-2';
                canvas.style.maxWidth = '500px';
                // if (pageNum >= 6 && pageNum <= 10) {
                //     canvas.style.filter = 'blur(7px)';
                // }

                pdf.getPage(pageNum).then((page) => {

                    var context = canvas.getContext('2d');
                    var viewport = page.getViewport({
                        scale: 1.5,
                    });
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    var renderContext = {
                        canvasContext: context,
                        viewport: viewport
                    }

                    pdfDiv.appendChild(canvas);

                    page.render(renderContext).promise.then(() => {});
                });
            }
        });
    }

    const requesterPreview = (filename) => {
        var loadingTask = pdfjsLib.getDocument(`/files/books/${filename}`);
        var pdfDiv = document.getElementById('requesterPdfPreview');
        var pageNumIsRendering = false;
        var pageNumIsPending = null;

        loadingTask.promise.then((pdf) => {
            // console.log(pdf.numPages);
            for (var pageNum = 1; pageNum <= 10; pageNum++) {
                const canvas = document.createElement('canvas');
                canvas.className = 'border border-secondary-subtle my-2';
                canvas.style.maxWidth = '500px';
                if (pageNum >= 6 && pageNum <= 10) {
                    canvas.style.filter = 'blur(7px)';
                }

                pdf.getPage(pageNum).then((page) => {

                    var context = canvas.getContext('2d');
                    var viewport = page.getViewport({
                        scale: 1.5,
                    });
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    var renderContext = {
                        canvasContext: context,
                        viewport: viewport
                    }

                    pdfDiv.appendChild(canvas);

                    page.render(renderContext).promise.then(() => {});
                });
            }
        });
    }

    const viewTransaction = (id) => {
        fetch(`/request/${id}`, {
                method: 'GET'
            })
            .then(res => res.json())
            .then(data => {
                document.getElementById('lister_input').value = data.book.user.name;
                document.getElementById('requester_input').value = data.user.name;
                document.getElementById('lister_book_title').textContent = `Title: ${data.book.title}`;
                document.getElementById('requester_book_title').textContent = `Title: ${data.title}`;
                document.getElementById('requestID').value = data.id;

                listerPreview(data.book.book_filename);
                requesterPreview(data.book_filename);
                console.log(data);
            })
            .catch(err => console.error(err));
    }

    const previewBtn = (filename) => {
        var loadingTask = pdfjsLib.getDocument(`/files/books/${filename}`);
        var pdfDiv = document.getElementById('pdfPreview');
        var pageNumIsRendering = false;
        var pageNumIsPending = null;

        loadingTask.promise.then((pdf) => {
            // console.log(pdf.numPages);
            for (var pageNum = 1; pageNum <= 10; pageNum++) {
                const canvas = document.createElement('canvas');
                canvas.className = 'border border-secondary-subtle my-2';
                if (pageNum >= 6 && pageNum <= 10) {
                    canvas.style.filter = 'blur(7px)';
                }

                pdf.getPage(pageNum).then((page) => {

                    var context = canvas.getContext('2d');
                    var viewport = page.getViewport({
                        scale: 1.5,
                    });
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    var renderContext = {
                        canvasContext: context,
                        viewport: viewport
                    }

                    pdfDiv.appendChild(canvas);

                    page.render(renderContext).promise.then(() => {});
                });
            }
        });
    }

    const requester = (id) => {
        fetch(`/getbook/${id}`, {
                method: 'GET'
            })
            .then(res => res.json())
            .then(data => {
                document.getElementById('req_img').src = `/images/book_cover/${data.back_cover}`;
                document.getElementById('title').textContent = data.title;
                document.getElementById('author').textContent = data.author;
                document.getElementById('edition').textContent = data.edition;
                document.getElementById('isbn').textContent = data.isbn;
                document.getElementById('genre').textContent = data.genre;
                document.getElementById('descrip').textContent = data.description;
                console.log(data);
            })
            .catch(err => console.error(err));
    }

    const declineOrderBtn = (id) => {
        document.getElementById('decline_request_order').href = `/declineorder/${id}`;
    }
</script>
