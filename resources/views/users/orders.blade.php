@include('partials.__header', [
'title' => 'Orders | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/orders-style.css',
'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
</head>

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start d-print-none" tabindex="-1"
        aria-labelledby="offcanvasExampleLabel">
        <x-sidebar />
    </div>
    <div id="content" class="border content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4 d-print-none">
            <div class="w-100 d-flex mt-2 p-0 d-print-none">
                <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <a href="/" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
            </div>
            <div class="position-absolute end-0 d-print-none">
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

        <div class="card-body rating-details d-print-none">
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;" aria-current="page"
                    href="/orders">Orders</a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/delivered">Delivered</a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/dropped">Dropped</a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/refund">Refund</a>
            </nav>
        </div>

        <div class="order-cart d-print-none">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href="#"><span>Jennie Blackpink</span></a>
                    <button class="message-seller"><i class="fa fa-commenting" aria-hidden="true"></i></button>
                </div>
                <span class="order-text me-5 mt-0">Order</span>
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
                            <p class="product-price">P144</p>
                            <p class="text-total">Total Payment:<span class="product-total">P194</span></p>
                        </div>
                    </div>
                </div>
                <div class="order">
                    <div class="order-details">
                        <div class="order-message">
                            <small class="text-body-secondary">Waiting for courier to confirm shipment</small>
                        </div>
                        <div class="button-group">
                            <button type="button" class="btn btn-sm view-button" data-bs-toggle="modal"
                                data-bs-target="#shipping-details">View shipping
                                details</button>
                        </div>
                    </div>
                    <p class="order-ID">Order ID <span class="float-end me-5">#7649324789134</span></p>
                </div>
            </div>
        </div>
        <div class="order-cart d-print-none">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href="#"><span>Jennie Blackpink</span></a>
                    <button class="message-seller"><i class="fa fa-commenting" aria-hidden="true"></i></button>
                </div>
                <span class="order-text me-5 mt-0">Order</span>
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <div class="left-section">
                        <img src="../assets/city_of_secrets.png" alt="book" width="80px" height="110px">
                        <div class="book-info">
                            <p class="mb-0 book-title">City of Secrets</p>
                            <p class="mb-0 fw-bold interaction-type">Sale</p>
                            <p class="payment-mode">Personal Transaction</p>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="book-price">
                            <p class="product-price">P144</p>
                            <p class="text-total">Total Payment:<span class="product-total">P144</span></p>
                        </div>
                    </div>
                </div>
                <div class="order">
                    <div class="order-details">
                        <div class="order-message">
                            <small class="text-body-secondary">To accept the order, arrange first the shipment
                                details</small>
                        </div>
                        <div class="button-group">
                            <button type="button" class="btn btn-sm decline-button">Decline</button>
                            <button type="button" class="btn btn-sm arrange-button" data-bs-toggle="modal"
                                data-bs-target="#arrange-shipment">Arrange
                                Shipment</button>
                        </div>
                    </div>
                    <p class="order-ID">Order ID <span class="float-end me-5 orderID">#7649324789134</span></p>
                </div>
            </div>
        </div>
        <div class="order-cart d-print-none">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href="#"><span>Jennie Blackpink</span></a>
                    <button class="message-seller"><i class="fa fa-commenting" aria-hidden="true"></i></button>
                </div>
                <span class="order-text me-5 mt-0">Order</span>
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <div class="left-section">
                        <img src="../assets/city_of_secrets.png" alt="book" width="80px" height="110px">
                        <div class="book-info">
                            <p class="mb-0 book-title">City of Secrets</p>
                            <p class="mb-0 fw-bold interaction-type">Sale</p>
                            <p class="payment-mode">Personal Transaction</p>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="book-price">
                            <p class="product-price">P144</p>
                            <p class="text-total">Total Payment:<span class="product-total">P144</span></p>
                        </div>
                    </div>
                </div>
                <div class="order">
                    <div class="order-details">
                        <div class="order-message">
                            <small class="text-body-secondary">To accept the order, arrange first the shipment
                                details</small>
                        </div>
                        <div class="button-group">
                            <button type="button" class="btn btn-sm decline-button">Decline</button>
                            <button type="button" class="btn btn-sm arrange-button" data-bs-toggle="modal"
                                data-bs-target="#arrange-shipment">Arrange
                                Shipment</button>
                        </div>
                    </div>
                    <p class="order-ID">Order ID <span class="float-end me-5">#7649324789134</span></p>
                </div>
            </div>
        </div>

        <!-- Arrange Shipment Modal -->
        <div class="modal fade d-print-none" id="arrange-shipment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Arrange Shipment</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="drop-off-details">
                            <i class="fa fa-dropbox" aria-hidden="true"></i>
                            <div class="text-section">
                                <h6>Drop off</h6>
                                <p>You can drop off your parcel at any J&T Express Branch</p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault"></label>
                            </div>
                        </div>
                        <div class="pickup-details">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                            <div class="text-section">
                                <h6>Pickup</h6>
                                <p>J&T Express will collect parcel from your pickup address</p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault"></label>
                            </div>
                        </div>
                        <div class="pickup-address">
                            <div class="text-section">
                                <h6 class="mb-2">Pickup Address</h6>
                                <p>Nestine Nicole Navarro</p>
                                <p>09054173103</p>
                                <p>Peerless Village, Bagacay, Tacloban City</p>
                                <p>6500</p>
                            </div>
                            <button class="change-btn" data-bs-toggle="modal" data-bs-target="#edit-address"><a
                                    href="#">Change</a></button>
                        </div>
                        <div class="pickup-date">
                            <div class="text-section">
                                <h6 class="mb-2">Pickup Date</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="datepicker"
                                        data-date-format="yyyy-mm-dd">
                                </div>
                            </div>
                        </div>
                        <div class="personal-transaction-details">
                            <i class="fa fa-handshake-o" aria-hidden="true"></i>
                            <div class="text-section">
                                <h6>Personal Transaction</h6>
                                <p>You and the customer will arrange your transaction</p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault"></label>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn confirm-button">Confirm</button>
                        {{-- Clicking confirm button means you accept the order --}}
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Address Modal -->
        <div class="modal fade d-print-none" id="edit-address" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Address</h1>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Fullname</label>
                            <input type="text" class="form-control" id="fullname" placeholder="Fullname"
                                style="margin-bottom: 20px; color: #003060;">
                            <label for="contact-number" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="contact-number" placeholder="Contact Number"
                                style="margin-bottom: 20px; color: #003060;">
                            <label for="address" class="form-label">Province, City, Barangay</label>
                            <div class="form-group">
                                <select class="form-control form-select" aria-label="Select Address" placeholder=""
                                    style="color: #003060; margin-bottom: 20px;">
                                    <option value="public">To be continue</option>
                                    <option value="private">To be continue</option>
                                </select>
                            </div>
                            <label for="postal-code" class="form-label">Postal Code</label>
                            <input type="text" class="form-control" id="postal-code" placeholder="Postal Code"
                                style="margin-bottom: 20px; color: #003060;">
                            <label for="street" class="form-label">Street Name, Building, House No.</label>
                            <input type="text" class="form-control" id="street"
                                placeholder="Street Name, Building, House No."
                                style="margin-bottom: 50px; color: #003060;">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input default-address" type="checkbox" value=""
                                id="default-address">
                            <label class="form-check-label" for="default-address"
                                style="margin-bottom: 50px; color: #E55B13; margin-left: 8px;">
                                Set as default address
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-button"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn save-button">Update</button>
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
                                    <div class="receipt bg-white p-3 rounded"><img src="../assets/JT_Express_Logo.jpg" width="120">
                                        {{-- <h4 class="mt-2 mb-3">Your order is confirmed!</h4> --}}
                                        {{-- <h6 class="name">Hello John,</h6><span class="fs-12 text-black-50">your order has been confirmed and will be shipped in two days</span> --}}
                                        <hr>
                                        <div class="d-flex flex-row justify-content-between align-items-center order-details">
                                            <div><span class="d-block fs-12">Order date</span><span class="font-weight-bold">12 March 2020</span></div>
                                            <div><span class="d-block fs-12">Order number</span><span class="font-weight-bold">OD44434324</span></div>
                                            <div><span class="d-block fs-12">Payment method</span><span class="font-weight-bold">Cash on Delivery</span></div>
                                            <div><span class="d-block fs-12">Shipping Address</span><span class="font-weight-bold shipping-address-text">Bagacay, Tacloban</span></div>
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-between align-items-center product-details">
                                            <div class="d-flex flex-row product-name-image">
                                                <div class="d-flex flex-column justify-content-between ml-2">
                                                    <div><span class="d-block font-weight-bold p-name">City of Secrets</span><span class="fs-12">Sale</span></div><span class="fs-12"></span></div>
                                            </div>
                                            <div class="product-price">
                                                <h5>₱100</h5>
                                            </div>
                                        </div>
                                        <div class="mt-5 amount row">
                                            <div class="d-flex justify-content-center col-md-6"><img src="../assets/tracking.jfif" width="250" height="100"></div>
                                            <div class="col-md-6">
                                                <div class="billing">
                                                    <div class="d-flex justify-content-between"><span>Subtotal</span><span class="font-weight-bold">₱100</span></div>
                                                    <div class="d-flex justify-content-between mt-2"><span>Shipping fee</span><span class="font-weight-bold">₱40</span></div>
                                                    <hr>
                                                    <div class="d-flex justify-content-between mt-1"><span class="font-weight-bold">Total</span><span class="font-weight-bold shipping-address-text">₱140</span></div>
                                                </div>
                                            </div>
                                        </div><span class="d-block">Complete Address</span><span class="font-weight-bold shipping-address-text">Blk 33 Lot 52 Bagacay, Tacloban City</span>
                                        <hr>
                                        <div class="d-flex justify-content-between align-items-center footer">
                                            <div class="thanks"><span class="d-block font-weight-bold">Thanks for shopping</span><span>BookRedux team</span></div>
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
                            <button class="btn btn-primary hidden-print save-button" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
                        {{-- <button type="button" class="btn save-button">Update</button> --}}
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
    $(document).ready(function() {
        $('#datepicker').datepicker();
    });
</script>

<script>
    function myFunction() {
    window.print();
}
</script>