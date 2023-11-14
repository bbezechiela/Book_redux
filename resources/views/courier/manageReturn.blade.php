@include('partials.__header', [
'title' => 'Manage Shipment | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/shipment-style.css',
'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0 body">
    <div id="content" class="pe-0 border content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4 top-nav">
            <div class="w-100 d-flex mt-1 p-1">
                <p class="text-admin">Courier</p>
                <a href="/shipment"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        data-bs-title="Home">
                        <i class="fa fa-area-chart" aria-hidden="true"
                            style="font-size: 20px; color: #003060; margin-right: 20px;">
                            Manage Order</i>
                    </button></a>
                <a href="/"><button class="btn mx-1 mt-1 selected-style" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" data-bs-title="Return">
                        <i class="fa fa-refresh" aria-hidden="true" style="font-size: 20px;"> Manage
                            Return</i>
                    </button></a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    {{-- <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <input class="form-control rounded-3 search-field" type="text" placeholder="Search">
                    </div> --}}
                    {{-- <a href="/shipment"><button class="btn mx-1 mt-1 selected-style" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" data-bs-title="Home">
                        <i class="fa fa-area-chart" aria-hidden="true" style="font-size: 20px;"></i>
                    </button></a> --}}
                    <a href="/couriermessage"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a>
                    <a href="/couriernotification"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a>
                    <a href="/courierprofile"><button class="btn mx-1 p-0" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Profile">
                            <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="profile"
                                width="35" height="35" class="rounded-5" style="margin-right: 2em;">
                        </button></a>
                </div>
            </div>
        </ul>
        <div class="container-fluid-wrapper">
            <h4>Manage Return Shipment</h4>
            <div class="container-fluid ship-details">
                <div class="details-container">
                    <div class="seller-details-box">
                        <label for="seller-details" class="form-label label-title">Seller Details</label>
                        <label for="seller-fullname">Nestine Nicole Navarro</label>
                        <label for="seller-contact-number">09097568923</label>
                        <label for="seller-address">Blk 33 Lot 52 Peerless Village, Bagacay, Tacloban</label>
                    </div>

                    <div class="customer-details-box">
                        <label for="customer-details" class="form-label label-title">Customer Details</label>
                        <label for="customer-fullname">Jennie BlackPink</label>
                        <label for="customer-contact-number">09129348884</label>
                        <label for="customer-address">Blk 33 Lot 52 Buhat Village, Diit, Tacloban</label>
                    </div>
                    <div class="package-details-box">
                        <label for="package-details" class="form-label label-title">Package Description</label>
                        <label for="weight">Weight: 1 (kg)</label>
                        <label for="width">Width: 5 cm</label>
                        <label for="height">Height: 7 cm</label>
                        <label for="length">Length: 7 cm</label>
                        <label for="payment-method">Payment Method: Cash on Delivery</label>
                    </div>

                    <div class="product-details-box">
                        <label for="product-details" class="form-label label-title">Product Details</label>
                        <label for="order-date">Order Date: 12/29/2023</label>
                        <label for="order-number">Order Number: OD421376365</label>
                        <label for="book-title">Product Name: Maria Clara</label>
                        <label for="transaction-type">Transaction Type: Sale</label>
                        <label for="price">Price/Rental Price: P100</label>
                        <label for="price">Security Deposit: P0</label>
                        <label for="shipping-fee">Shipping Fee: P50</label>
                    </div>
                </div>
                <center>
                    <br>
                    <a href="#" class="btn accept">Accept
                        <span class="fa fa-check"></span></a>
                </center>
            </div>
        </div>
        <div class="container-fluid-wrapper">
            <div class="container-fluid ship-details">
                <div class="details-container">
                    <div class="seller-details-box">
                        <label for="seller-details" class="form-label label-title">Seller Details</label>
                        <label for="seller-fullname">Nestine Nicole Navarro</label>
                        <label for="seller-contact-number">09097568923</label>
                        <label for="seller-address">Blk 33 Lot 52 Peerless Village, Bagacay, Tacloban</label>
                    </div>

                    <div class="customer-details-box">
                        <label for="customer-details" class="form-label label-title">Customer Details</label>
                        <label for="customer-fullname">Jennie BlackPink</label>
                        <label for="customer-contact-number">09129348884</label>
                        <label for="customer-address">Blk 33 Lot 52 Buhat Village, Diit, Tacloban</label>
                    </div>
                    <div class="package-details-box">
                        <label for="package-details" class="form-label label-title">Package Description</label>
                        <label for="weight">Weight: 1 (kg)</label>
                        <label for="width">Width: 5 cm</label>
                        <label for="height">Height: 7 cm</label>
                        <label for="length">Length: 7 cm</label>
                        <label for="payment-method">Payment Method: Cash on Delivery</label>
                    </div>

                    <div class="product-details-box">
                        <label for="product-details" class="form-label label-title">Product Details</label>
                        <label for="order-date">Order Date: 12/29/2023</label>
                        <label for="order-number">Order Number: OD421376365</label>
                        <label for="book-title">Product Name: Maria Clara</label>
                        <label for="transaction-type">Transaction Type: Sale</label>
                        <label for="price">Price/Rental Price: P100</label>
                        <label for="price">Security Deposit: P0</label>
                        <label for="shipping-fee">Shipping Fee: P50</label>
                    </div>
                </div>
                <center>
                    <br>
                    <a href="#" class="accept btn">Accept
                        <span class="fa fa-check"></span></a>
                </center>
            </div>
        </div>
    </div>

</div>
</div>
@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])