@include('partials.__header', [
    'title' => 'Orders | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/orders-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> --}}
</head>

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 shadow">
        <x-sidebar />
    </div>
    {{-- <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start d-print-none" tabindex="-1"
        aria-labelledby="offcanvasExampleLabel">
        <x-sidebar />
    </div> --}}
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
                                <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}"
                                    alt="notification" width="35" height="35" class="rounded-5"
                                    style="margin-right: 2em;">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/myprofile">Profile</a></li>
                                <li><a class="dropdown-item" href="/mypurchase">My Purchase</a></li>
                                <li><a class="dropdown-item" href="/addresses">Addresses</a></li>
                                <li><a class="dropdown-item" href="/changepassword">Change Password</a></li>
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
                    href="/orders">Orders</a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/delivered">Delivered</a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/dropped">Dropped</a>
                {{-- <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/refund">Refund</a> --}}
            </nav>
        </div>
        @php
            $loopCount = 0;
        @endphp
        @foreach ($orders as $order)
            @foreach ($order->item as $item)
                @if ($item->order_status == 'Pending')
                    {{-- {{ $item->order->user->first_name }} --}}
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
                                    <img src="{{ asset('images/books/' . $order->book_photo) }}" alt="book"
                                        width="80px" height="110px">
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
                                        <p class="text-total">Total Payment:<span
                                                class="product-total">₱{{ $order->price }}</span></p>
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
                                            data-bs-toggle="modal"
                                            onclick="arrangeShipment({{ $order->id . ', ' . $item->id }})"
                                            data-bs-target="#arrange-shipment">Arrange Shipment</button>
                                    </div>
                                </div>
                                {{-- <p class="order-ID">Order ID <span class="float-end me-5 orderID">#7649324789134</span></p> --}}
                            </div>
                        </div>
                    </div>
                    @php
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
                                    <img src="{{ asset('images/books/' . $order->book_photo) }}" alt="book"
                                        width="80px" height="110px">
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
                                        <p class="text-total">Total Payment:<span
                                                class="product-total">₱{{ $order->price }}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="order">
                                <div class="order-details">
                                    <div class="order-message">
                                        {{-- <small class="text-body-secondary">To accept the order, arrange first the
                                            shipment
                                            details</small> --}}
                                    </div>
                                    <div class="button-group">
                                        {{-- <button type="button" class="btn btn-sm decline-button">Decline</button> --}}
                                        <button id="arrange_shipment" type="button"
                                            class="btn btn-sm arrange-button" data-bs-toggle="modal"
                                            onclick="viewShipping({{ $order->id . ', ' . $item->id }})"
                                            data-bs-target="#shipping-details">View Shipping Details</button>
                                    </div>
                                </div>
                                {{-- <p class="order-ID">Order ID <span class="float-end me-5 orderID">#7649324789134</span></p> --}}
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
                                <button class="message-seller"><i class="fa fa-commenting"
                                        aria-hidden="true"></i></button>
                            </div>
                            <span class="order-text me-5 mt-0">Order</span>
                        </div>
                        <div class="product-cart">
                            <div class="book-details">
                                <div class="left-section">
                                    <img src="{{ asset('images/books/' . $order->book_photo) }}" alt="book"
                                        width="80px" height="110px">
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
                                        <p class="text-total">Total Payment:<span
                                                class="product-total">₱{{ $order->price }}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="order">
                                <div class="order-details">
                                    <div class="order-message">
                                        <small class="" style="color: #E55B13">FOR APPROVAL BY COURIER</small>
                                        {{-- <p class="fs-5 fw-bold" style="color: #E55B13">FOR APPROVAL BY COURIER</p> --}}
                                    </div>
                                    <div class="button-group">
                                        {{-- <button type="button" class="btn btn-sm decline-button">Decline</button> --}}
                                        <button id="arrange_shipment" type="button"
                                            class="btn btn-sm arrange-button" data-bs-toggle="modal"
                                            onclick="viewShipping({{ $order->id . ', ' . $item->id }})"
                                            data-bs-target="#shipping-details" disabled>View Shipping Details</button>
                                    </div>
                                </div>
                                {{-- <p class="order-ID">Order ID <span class="float-end me-5 orderID">#7649324789134</span></p> --}}
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
            <h1 class="mt-2 text-center fw-bold" style="color: #E55B13; font-size: 20px;">No new orders today</h1>
        @endif

        <!-- Arrange Shipment Modal -->
        <div class="modal fade d-print-none" id="arrange-shipment" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Arrange Shipment</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="details-container">
                            <div class="seller-details-box">
                                <input type="text" class="d-none" id="item_id">
                                <label for="seller-details" class="form-label">Seller Details</label>
                                <input type="text" class="form-control" id="seller-fullname"
                                    placeholder="Nestine Nicole Navarro"><br>
                                <input type="text" class="form-control" id="seller-contact-number"
                                    placeholder="09097568923"><br>
                                <input type="text" class="form-control" id="seller-address"
                                    placeholder="Blk 33 Lot 52 Peerless Village, Bagacay, Tacloban">
                            </div>

                            <div class="customer-details-box">
                                <label for="customer-details" class="form-label">Customer Details</label>
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
                                <input type="text" class="form-control" id="payment-method"
                                    placeholder="Cash on Delivery">
                            </div>

                            <div class="product-details-box">
                                <label for="product-details" class="form-label">Product Details</label>
                                <input type="text" class="form-control" id="order-date"
                                    placeholder="Order Date: 12/29/2023"><br>
                                <input type text="text" class="form-control" id="order-number"
                                    placeholder="OD421376365"><br>
                                <input type="text" class="form-control" id="book-title"
                                    placeholder="Maria Clara"><br>
                                <input type="text" class="form-control" id="transaction-type"
                                    placeholder="Sale"><br>
                                <input type="text" class="form-control" id="price" placeholder="P100"><br>
                                {{-- <input type="text" class="form-control" id="deposit" placeholder="P0"><br> --}}
                                <input type="text" class="form-control" id="shipping-fee" placeholder="P50">
                            </div>
                        </div>

                        <div class="details-container">
                            <label class="drop-off-details" for="drop_off" onclick="hidePickupContent()">
                                <i class="fa fa-dropbox" aria-hidden="true"></i>
                                <div class="text-section">
                                    <h6 class="fw-bold">Drop off</h6>
                                    <p>You can drop off your parcel at any JRS Express Branch</p>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Drop off"
                                        name="transaction_type" id="drop_off">
                                    {{-- <label class="form-check-label" for="flexCheckDefault"></label> --}}
                                </div>
                            </label>
                            <label class="pickup-details" for="pick_up">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                                <div class="text-section">
                                    <h6 class="fw-bold">Pickup</h6>
                                    <p>JRS Express will collect parcel from your pickup address</p>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Pickup"
                                        name="transaction_type" id="pick_up">
                                    {{-- <label class="form-check-label" for="flexCheckDefault"></label> --}}
                                </div>
                            </label>
                            <label class="personal-transaction-details" for="personal_transaction"
                                onclick="hidePickupContent()">
                                <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                <div class="text-section">
                                    <h6 class="fw-bold">Personal Transaction</h6>
                                    <p>You and the customer will arrange your transaction</p>
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
                                        <input type="date" class="form-control" id="pickup-date"
                                            data-date-format="yyyy-mm-dd">
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

        <!-- Edit Address Modal -->
        <div class="modal fade d-print-none" id="edit-address" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            {{-- <button class="change-btn" data-bs-toggle="modal" data-bs-target="#edit-address"><a
                                    href="#">Change</a></button> --}}
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
        </div>

        <!-- Shipping Details Modal -->
        <div class="modal fade" id="shipping-details" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header d-print-none">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Shipping Details</h1>
                    </div>
                    <div class="modal-body d-print-block">
                        <div class="container mt-5 mb-5">
                            <div class="d-flex justify-content-center row">
                                <div class="col-md-10">
                                    <div class="receipt bg-white p-3 rounded"><img src="../assets/jrs.jpg"
                                            width="120">
                                        {{-- <h4 class="mt-2 mb-3">Your order is confirmed!</h4> --}}
                                        {{-- <h6 class="name">Hello John,</h6><span class="fs-12 text-black-50">your order has been confirmed and will be shipped in two days</span> --}}
                                        <hr>
                                        <div
                                            class="d-flex flex-row justify-content-between align-items-center order-details">
                                            <div><span class="d-block fs-12">Order date</span><span
                                                    id="detail-order-date" class="font-weight-bold">12 March
                                                    2020</span></div>
                                            <div><span class="d-block fs-12">Order number</span><span
                                                    id="detail-order-number"
                                                    class="font-weight-bold">OD44434324</span></div>
                                            <div><span class="d-block fs-12">Payment method</span><span
                                                    id="detail-payment-method" class="font-weight-bold">Cash on
                                                    Delivery</span></div>
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
                                                        <span id="detail-title"
                                                            class="d-block font-weight-bold p-name">City of
                                                            Secrets</span>
                                                        <span id="detail-status" class="fs-12">Sale</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <h5 id="detail-price">₱100</h5>
                                            </div>
                                        </div>
                                        <div class="mt-5 amount row">
                                            <div class="d-flex justify-content-center col-md-6"><img
                                                    id="detail-barcode" src="../assets/tracking.jfif" width="250"
                                                    height="100">
                                            </div>
                                            <div class="col-md-6">
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
                                            </div>
                                        </div><span class="d-block">Complete Address</span><span id="detail-address"
                                            class="font-weight-bold shipping-address-text">Blk 33 Lot 52 Bagacay,
                                            Tacloban City</span>
                                        <hr>
                                        <div class="d-flex justify-content-between align-items-center footer">
                                            <div class="thanks"><span class="d-block font-weight-bold">Thanks for
                                                    shopping</span><span>BookRedux team</span></div>
                                            {{-- <div class="d-flex flex-column justify-content-end align-items-end"><span class="d-block font-weight-bold">Need Help?</span><span>Call - 974493933</span></div> --}}
                                        </div>
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
                        {{-- <button type="button" class="btn save-button">Update</button> --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- alert modal --}}
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body px-3">
                        <p class="fs-4">Are you sure you want to decline the order of the buyer?</p>
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
</div>

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
    
    var id = document.getElementById('item_id');
    var address_modal = document.getElementById('address-modal');
    var seller_name = document.getElementById('seller-fullname');
    var seller_contact_num = document.getElementById('seller-contact-number');
    var seller_add = document.getElementById('seller-address');

    var customer_name = document.getElementById('customer-fullname');
    var customer_contact_num = document.getElementById('customer-contact-number');
    var customer_add = document.getElementById('customer-address');

    var weight = document.getElementById('weight');
    var width = document.getElementById('width');
    var height = document.getElementById('height');
    var length = document.getElementById('length');
    var payment = document.getElementById('payment-method');

    var order_date = document.getElementById('order-date');
    var order_number = document.getElementById('order-number');
    var book_title = document.getElementById('book-title');

    var trans_type = document.getElementById('transaction-type');
    var price = document.getElementById('price');
    var deposit = document.getElementById('deposit');
    var shipping = document.getElementById('shipping-fee');

    var pickup = document.querySelector('label[class="pickup-details"]');
    var pickup_date = document.getElementById('pickup-date');
    var pickup_name = document.getElementById('pickup-name');
    var pickup_phone = document.getElementById('pickup-phone');
    var pickup_address = document.getElementById('pickup-address');
    var pickup_postal = document.getElementById('pickup-postal');
    var confirm_btn = document.getElementById('confirm-btn');

    var detail_order_date = document.getElementById('detail-order-date');
    var detail_payment_method = document.getElementById('detail-payment-method');
    var detail_order_number = document.getElementById('detail-order-number');
    var detail_shipping_address = document.getElementById('detail-shipping-address');
    var detail_title = document.getElementById('detail-title');
    var detail_status = document.getElementById('detail-status');
    var detail_price = document.getElementById('detail-price');
    var detail_barcode = document.getElementById('detail-barcode');
    var detail_subtotal = document.getElementById('detail-subtotal');
    var detail_total = document.getElementById('detail-total');
    var detail_address = document.getElementById('detail-address');

    var address_update_btn = document.getElementById('update-address');
    var selected_adress;
    var id_book;
    var decline_btn = document.getElementById('decline-btn');
    var confirm_decline_btn = document.getElementById('confirm-redirection');

    function declineItem(id) {
        confirm_decline_btn.href = '/declineorder/' + id;
    }
    // decline_btn.addEventListener('click', () => {
    // confirm_decline_btn.href = 
    // });

    pickup.addEventListener('click', (event) => {
        event.preventDefault();
        if (!document.getElementById('pick_up').checked) {
            document.getElementById('pick_up').checked = true;
            displayPickupContent();
        }
    });

    const csrf_token = '{{ csrf_token() }}';
    confirm_btn.addEventListener('click', () => {
        if (document.getElementById('drop_off').checked) {
            fetch('/sellerconfirm', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrf_token,
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        id: id.value,
                        shipping_status: document.getElementById('drop_off').value
                    })
                })
                // .then(response => response.json())
                .then(response => {
                    if (response.redirected) {
                        window.location.reload();
                    }
                })
                .catch(error => console.error(error));

        } else if (document.getElementById('pick_up').checked) {
            if (pickup_date.value == '') {
                alert('Please set your pickup date');
            } else {
                fetch('/sellerconfirm', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrf_token,
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            id: id.value,
                            shipping_status: document.getElementById('pick_up').value,
                            pickup_address_id: selected_adress,
                            pickup_date: pickup_date.value
                        }),
                    })
                    // .then(response => response.json())
                    .then(response => {
                        if (response.redirected) {
                            window.location.reload();
                        }
                    })
                    .catch(error => console.error(error));
            }

        } else if (document.getElementById('personal_transaction').checked) {
            fetch('/sellerconfirm', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrf_token,
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        id: id.value,
                        shipping_status: document.getElementById('personal_transaction').value
                    }),
                })
                // .then(response => response.json())
                .then(response => {
                    if (response.redirected) {
                        window.location.reload();
                    }
                })
                .catch(error => console.error(error));

        }
    });

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
    document.addEventListener('DOMContentLoaded', function() {
        const messageButtons = document.querySelectorAll('.message-button');

        messageButtons.forEach(button => {
            button.addEventListener('click', function() {
                const username = button.dataset.username;
                redirectToMessaging(username);
            });
        });

        function redirectToMessaging(username) {
            const messagingUrl = `/messages?user=${username}`;
            window.location.href = messagingUrl;
        }
    });
</script>