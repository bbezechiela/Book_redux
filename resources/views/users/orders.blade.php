@include('partials.__header', [
'title' => 'My List | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/orders-style.css',
'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100">
        <x-sidebar />
    </div>
    <div id="content" class="pe-0 border content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
            <div class="w-100 d-flex justify-content-between mt-1 p-0">
                <input class="border rounded-3 px-3 w-100" type="text" placeholder="Search">
                <a href="/" class="pb-2 px-2"><img class="img" src="../assets/Book_Logo.png" alt="Logo"></a>
            </div>
        </ul>

        <div class="card-body rating-details">
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;" aria-current="page"
                    href="#">Orders</a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="#">Delivered</a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="#">Dropped</a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="#">Refund</a>
            </nav>
        </div>

        <div class="order-cart">
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
                            <button type="button" class="btn btn-primary btn-sm view-button">View shipping
                                details</button>
                        </div>
                    </div>
                    <p class="order-ID">Order ID <span class="float-end me-5">#7649324789134</span></p>
                </div>
            </div>
        </div>
        <div class="order-cart">
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
                            <button type="button" class="btn btn-primary btn-sm decline-button">Decline</button>
                            <button type="button" class="btn btn-primary btn-sm arrange-button" data-bs-toggle="modal"
                                data-bs-target="#arrange-shipment">Arrange
                                Shipment</button>
                        </div>
                    </div>
                    <p class="order-ID">Order ID <span class="float-end me-5">#7649324789134</span></p>
                </div>
            </div>
        </div>
        <div class="order-cart">
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
                            <button type="button" class="btn btn-primary btn-sm decline-button">Decline</button>
                            <button type="button" class="btn btn-primary btn-sm arrange-button" data-bs-toggle="modal"
                                data-bs-target="#arrange-shipment">Arrange
                                Shipment</button>
                        </div>
                    </div>
                    <p class="order-ID">Order ID <span class="float-end me-5">#7649324789134</span></p>
                </div>
            </div>
        </div>

        <!-- Arrange Shipment Modal -->
        <div class="modal fade" id="arrange-shipment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
                        <button type="button" class="btn btn-primary confirm-button">Confirm</button>
                        {{-- Clicking confirm button means you accept the order --}}
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Address Modal -->
        <div class="modal fade" id="edit-address" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <button type="button" class="btn btn-primary save-button">Update</button>
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