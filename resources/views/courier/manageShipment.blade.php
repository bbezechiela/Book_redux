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
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <input class="form-control rounded-3 search-field" type="text" placeholder="Search">
                    </div>
                    <a href="/adminmessages"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a>
                    <a href="/adminnotification"><button class="btn mx-1 mt-1 selected-style" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px;"></i>
                        </button></a>
                    <a href="/adminprofile"><button class="btn mx-1 p-0" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Profile">
                            <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="profile"
                                width="35" height="35" class="rounded-5" style="margin-right: 2em;">
                        </button></a>
                </div>
            </div>
        </ul>

        <div class="container">
            <div class="details-container">
                <div class="seller-details-box">
                    <label for="seller-details" class="form-label">Seller Details</label>
                    <label for="seller-fullname">Nestine Nicole Navarro</label>
                    {{-- <input type="text" class="form-control" id="seller-fullname"
                        placeholder="Nestine Nicole Navarro"><br> --}}
                    <label for="seller-contact-number">09097568923</label>
                    {{-- <input type="text" class="form-control" id="seller-contact-number"
                        placeholder="09097568923"><br> --}}
                    <label for="seller-address">Blk 33 Lot 52 Peerless Village, Bagacay, Tacloban</label>
                    {{-- <input type="text" class="form-control" id="seller-address"
                        placeholder="Blk 33 Lot 52 Peerless Village, Bagacay, Tacloban"> --}}
                </div>

                <div class="customer-details-box">
                    <label for="customer-details" class="form-label">Customer Details</label>
                    <label for="customer-fullname">Jennie BlackPink</label>
                    {{-- <input type="text" class="form-control" id="customer-fullname"
                        placeholder="Jennie BlackPink"><br> --}}
                    <label for="customer-contact-number">09129348884</label>
                    {{-- <input type text="text" class="form-control" id="customer-contact-number"
                        placeholder="09129348884"><br> --}}
                    <label for="customer-address">Blk 33 Lot 52 Buhat Village, Diit, Tacloban</label>
                    {{-- <input type="text" class="form-control" id="customer-address"
                        placeholder="Blk 33 Lot 52 Buhat Village, Diit, Tacloban"> --}}
                </div>
                <div class="package-details-box">
                    <label for="package-details" class="form-label">Package Description</label>
                    <label for="weight">Weight: 1 (kg)</label>
                    <label for="width">Width: 5 cm</label>
                    <label for="height">Height: 7 cm</label>
                    <label for="length">Length: 7 cm</label>
                    <label for="payment-method">Cash on Delivery</label>
                    {{-- <input type="text" class="form-control" id="weight" placeholder="1 (kg)"><br> --}}
                    {{-- <input type="text" class="form-control" id="width" placeholder="5 cm"><br> --}}
                    {{-- <input type="text" class="form-control" id="height" placeholder="7 cm"><br> --}}
                    {{-- <input type="text" class="form-control" id="length" placeholder="7 cm"><br> --}}
                    {{-- <input type="text" class="form-control" id="payment-method" placeholder="Cash on Delivery"> --}}
                </div>

                <div class="product-details-box">
                    <label for="product-details" class="form-label">Product Details</label>
                    <label for="order-date">Order Date: 12/29/2023</label>
                    {{-- <input type="text" class="form-control" id="order-date" placeholder="Order Date: 12/29/2023"><br> --}}
                    <label for="order-number">OD421376365</label>
                    {{-- <input type text="text" class="form-control" id="order-number" placeholder="OD421376365"><br> --}}
                    <label for="book-title">"Maria Clara</label>
                    {{-- <input type="text" class="form-control" id="book-title" placeholder="Maria Clara"><br> --}}
                    <label for="transaction-type">Sale</label>
                    {{-- <input type="text" class="form-control" id="transaction-type" placeholder="Sale"><br> --}}
                    <label for="price">P100</label>
                    {{-- <input type="text" class="form-control" id="price" placeholder="P100"><br> --}}
                    <label for="shipping-fee">P50</label>
                    {{-- <input type="text" class="form-control" id="shipping-fee" placeholder="P50"> --}}
                </div>
            </div>

            {{-- <div class="details-container">
                <div class="package-details-box">
                    <label for="package-details" class="form-label">Package Description</label><br>
                    <label for="weight">Weight: 1 (kg)</label><br>
                    <label for="width">Width: 5 cm</label><br>
                    <label for="height">Height: 7 cm</label><br>
                    <label for="length">Length: 7 cm</label><br>
                    <label for="payment-method">Cash on Delivery</label> --}}
                    {{-- <input type="text" class="form-control" id="weight" placeholder="1 (kg)"><br> --}}
                    {{-- <input type="text" class="form-control" id="width" placeholder="5 cm"><br> --}}
                    {{-- <input type="text" class="form-control" id="height" placeholder="7 cm"><br> --}}
                    {{-- <input type="text" class="form-control" id="length" placeholder="7 cm"><br> --}}
                    {{-- <input type="text" class="form-control" id="payment-method" placeholder="Cash on Delivery"> --}}
                {{-- </div>

                <div class="product-details-box">
                    <label for="product-details" class="form-label">Product Details</label><br>
                    <label for="order-date">Order Date: 12/29/2023</label><br> --}}
                    {{-- <input type="text" class="form-control" id="order-date" placeholder="Order Date: 12/29/2023"><br> --}}
                    {{-- <label for="order-number">OD421376365</label><br> --}}
                    {{-- <input type text="text" class="form-control" id="order-number" placeholder="OD421376365"><br> --}}
                    {{-- <label for="book-title">"Maria Clara</label><br> --}}
                    {{-- <input type="text" class="form-control" id="book-title" placeholder="Maria Clara"><br> --}}
                    {{-- <label for="transaction-type">Sale</label><br> --}}
                    {{-- <input type="text" class="form-control" id="transaction-type" placeholder="Sale"><br> --}}
                    {{-- <label for="price">P100</label><br> --}}
                    {{-- <input type="text" class="form-control" id="price" placeholder="P100"><br> --}}
                    {{-- <label for="shipping-fee">P50</label> --}}
                    {{-- <input type="text" class="form-control" id="shipping-fee" placeholder="P50"> --}}
                {{-- </div> --}}
            </div>
        </div>

    </div>
</div>
@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])