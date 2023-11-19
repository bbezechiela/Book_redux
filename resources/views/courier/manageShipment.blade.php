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
                <a href="/shipment"><button class="btn mx-1 mt-1 selected-style" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" data-bs-title="Home">
                        <i class="fa fa-area-chart" aria-hidden="true" style="font-size: 20px; margin-right: 20px;">
                            Manage Order</i>
                    </button></a>
                <a href="/return"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        data-bs-title="Return">
                        <i class="fa fa-refresh" aria-hidden="true" style="font-size: 20px; color: #003060;"> Manage
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
            <h4>Manage Order Shipment</h4>
            @foreach ($orders as $order)
                @foreach ($order->items as $item)
                    <div class="container-fluid ship-details">
                        <div class="details-container">
                            <div class="seller-details-box">
                                <label for="seller-details" class="form-label label-title">Seller Details</label>
                                <label
                                    for="seller-fullname">{{ $item->book->user->first_name . ' ' . $item->book->user->last_name }}</label>
                                <label for="seller-contact-number">{{ $item->book->user->phone_number }}</label>
                                @foreach ($item->book->user->addressUser as $address)
                                    @if ($address->default_address == 'true')
                                        <label for="seller-address">{{ $address->street_building_house . ', ' . $address->brgy_village . ', ' . $address->city_municipality . ', ' . $address->postal_code . ', ' . $address->region }}</label>
                                    @endif
                                @endforeach

                            </div>

                            <div class="customer-details-box">
                                <label for="customer-details" class="form-label label-title">Customer Details</label>
                                <label for="customer-fullname">{{ $order->address->name }}</label>
                                <label for="customer-contact-number">{{ $order->user->phone_number }}</label>
                                <label for="customer-address">{{ $order->address->street_building_house . ', ' . $order->address->brgy_village . ', ' . $order->address->city_municipality . ', ' . $order->address->postal_code . ', ' . $order->address->region }}</label>
                            </div>
                            <div class="package-details-box">
                                <label for="package-details" class="form-label label-title">Package Description</label>
                                <label for="weight">Weight: {{ $item->book->weight }} (kg)</label>
                                <label for="width">Width: {{ $item->book->width }} (cm)</label>
                                <label for="height">Height: {{ $item->book->height }} (cm)</label>
                                <label for="length">Length: {{ $item->book->length }} (cm)</label>
                                <label for="payment-method">Payment Method: {{ $order->payment_method }}</label>
                            </div>

                            <div class="product-details-box">
                                <label for="product-details" class="form-label label-title">Product Details</label>
                                <label for="order-date">Order Date: {{ $order->created_at->format('d/m/Y') }}</label>
                                <label for="order-number">Order Number: {{ $order->order_number }}</label>
                                <label for="book-title">Product Name: {{ $item->book->title }} (Book)</label>
                                <label for="transaction-type">Transaction Type: {{ $item->book->status }}</label>
                                <label for="price">Price/Rental Price: ₱{{ $item->book->price }}</label>
                                <label for="price">Security Deposit: ₱{{ $item->book->security_deposit }}</label>
                                <label for="shipping-fee">Shipping Fee: ₱{{ 0 }}</label>
                            </div>
                            <div class="product-details-box">
                                <label for="product-details" class="form-label label-title">Shipping Details</label>
                                <label for="order-date">Shipping: Pickup</label>
                                <label for="pickup-date">Pickup Date: OD421376365</label>
                                <label for="pickup-address">Pickup Address: {{ $order->address->street_building_house . ', ' . $order->address->brgy_village . ', ' . $order->address->city_municipality . ', ' . $order->address->postal_code . ', ' . $order->address->region }}</label>
                            </div>
                        </div>
                        <center>
                            <br>
                            <a href="#" class="btn accept" data-bs-toggle="modal"
                                data-bs-target="#shipping-details">Accept
                                <span class="fa fa-check"></span></a>
                            <a href="#" class="deny btn">Decline <span class="fa fa-close"></span></a>
                        </center>
                    </div>
                @endforeach
            @endforeach
        </div>
        {{-- <div class="container-fluid-wrapper">
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
                    <div class="product-details-box">
                        <label for="product-details" class="form-label label-title">Shipping Details</label>
                        <label for="order-date">Shipping: Dropoff</label>
                    </div>
                </div>
                <center>
                    <br>
                    <a href="#" class="accept btn" data-bs-toggle="modal" data-bs-target="#shipping-details">Accept
                        <span class="fa fa-check"></span></a>
                    <a href="#" class="deny btn">Decline <span class="fa fa-close"></span></a>
                </center>
            </div>
        </div> --}}
    </div>

    <!-- Shipping Details Modal -->
    <div class="modal fade" id="shipping-details" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header d-print-none">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #003060;">Shipping Details</h1>
                </div>
                <div class="modal-body d-print-block" style="color: #003060;">
                    <div class="container mt-5 mb-5">
                        <div class="d-flex justify-content-center row">
                            <div class="col-md-10">
                                <div class="receipt bg-white p-3 rounded"><img src="../assets/JT_Express_Logo.jpg"
                                        width="120">
                                    <hr>
                                    <div
                                        class="d-flex flex-row justify-content-between align-items-center order-details">
                                        <div><span class="d-block fs-12">Order date</span><span
                                                class="font-weight-bold">12 March 2020</span></div>
                                        <div><span class="d-block fs-12">Order number</span><span
                                                class="font-weight-bold">OD44434324</span></div>
                                        <div><span class="d-block fs-12">Payment method</span><span
                                                class="font-weight-bold">Cash on Delivery</span></div>
                                        <div><span class="d-block fs-12">Shipping Address</span><span
                                                class="font-weight-bold shipping-address-text">Bagacay,
                                                Tacloban</span></div>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center product-details">
                                        <div class="d-flex flex-row product-name-image">
                                            <div class="d-flex flex-column justify-content-between ml-2">
                                                <div><span class="d-block font-weight-bold p-name">City of
                                                        Secrets</span><span class="fs-12">Sale</span></div><span
                                                    class="fs-12"></span>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <h5>₱100</h5>
                                        </div>
                                    </div>
                                    <div class="mt-5 amount row">
                                        <div class="d-flex justify-content-center col-md-6">
                                            <input type="file" class="d-none" accept="image/*"
                                                id="tracking_number" name="tracking_number" required>
                                            <label for="tracking_number"
                                                class="btn mx-auto mt-3 py-1 px-0 upload-track-btn">Upload</label>
                                            <img src="../assets/tracking.jfif" width="250" height="100"
                                                id="img-icon">

                                        </div>
                                        <div class="col-md-6">
                                            <div class="billing">
                                                <div class="d-flex justify-content-between">
                                                    <span>Subtotal</span><span class="font-weight-bold">₱100</span>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2"><span>Shipping
                                                        fee</span><span class="font-weight-bold">₱40</span></div>
                                                <hr>
                                                <div class="d-flex justify-content-between mt-1"><span
                                                        class="font-weight-bold">Total</span><span
                                                        class="font-weight-bold shipping-address-text">₱140</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><span class="d-block">Complete Address</span><span
                                        class="font-weight-bold shipping-address-text">Blk 33 Lot 52 Bagacay,
                                        Tacloban City</span>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center footer">
                                        <div class="thanks"><span class="d-block font-weight-bold">Thanks for
                                                shopping</span><span>BookRedux team</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer d-print-none">
                    <button type="button" class="btn btn-secondary close-button"
                        data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary hidden-print save-button">Save</button>
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
