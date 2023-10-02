@include('partials.__header', [
    'title' => 'Home | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/checkout-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="body-container" class="container-fluid px-0">
            <div id="sidebar" class="sidebar p-2 min-vh-100"><x-sidebar /></div>
                <div id="content" class="pe-0 border content">
                    <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
                        <div class="w-100 d-flex justify-content-between mt-1 p-0">
                            <input class="border rounded-3 px-3 w-100" type="text" placeholder="Search">
                            <a href="/" class="pb-2 px-2"><img class="img" src="../assets/Book_Logo.png" alt="Logo"></a>
                        </div>
                    </ul>
                    <div id="checkout" class="checkout-content mt-3 w-100">
                        <h4 class="text-center checkout_text mx-5 pb-2">Checkout</h4>
                    </div>
                    <div class="delivery-address-container">
                        <h2 class="delivery-address-title">
                            <i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 10px;"></i>Delivery Address
                        </h2>
                        <div class="seller-details">
                            <p class="name" style="margin-right: 10px;">Nestine Nicole Navarro</p>
                            <p class="contact" style="margin-right: 35px;">09054173103</p>
                            <p class="address" style="margin-right: 15px;">Peerless Village, Bagacay, Tacloban City,</p>
                            <p class="zipcode">6500</p>
                        </div>
                        <button class="change-button"><a href="/deliveryAddress">Change</a></button>
                    </div>
                    <main class="product-list">
                        <div class="details-container">
                            <h1 class="product-details">Book Ordered</h1>
                            <h1 class="price">Price</h1>
                        </div>
                        <div class="name-cart">
                            <a class="seller-name" href="#"><span>Jennie Blackpink</span></a>
                            <button class="message-seller"><i class="fa fa-commenting" aria-hidden="true"></i></button>
                        </div>
                        <div class="product-cart">
                        <div class="book-details">
                            <img src="../assets/city_of_secrets.png" alt="book" width="80px" height="110px">
                            <div class="book-info">
                                <p class="book-title">City of Secrets</p>
                                <p class="mb-0 fw-bold interaction-type">Sale</p>
                            </div>
                            <div class="product-price">P144</div> 
                        </div>
                        </div>
                        <div class="name-cart">
                            <a class="seller-name" href="#"><span>Nestine Blackpink</span></a>
                            <button class="message-seller"><i class="fa fa-commenting" aria-hidden="true"></i></button>
                        </div>
                        <div class="product-cart">
                        <div class="book-details">
                            <img src="../assets/city_of_secrets.png" alt="book" width="80px" height="110px">
                            <div class="book-info">
                                <p class="book-title">Many Secrets</p>
                                <p class="mb-0 fw-bold interaction-type">Sale</p>
                            </div>
                            <div class="product-price">P100</div> 
                        </div>
                        </div>
                       <div class="shipping-option">
                            <p class="txt-shipping-opt">Shipping Option:</p>
                            <div class="dropdown">
                            <button class="btn btn--bs-primary-border-subtle dropdown-toggle shipping-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Door-to-Door Delivery</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Door-to-Door Delivery</a></li>
                                <li><a class="dropdown-item" href="#">Personal Transaction</a></li>
                            </ul>
                            </div>
                            <div class="shipping-price">P50</div> 
                        </div>
                        <div class="order-total">
                            <p>Order Total <span>(1 item):</span></p>
                            <div class="total">P294</div> 
                        </div>
                        <div class="payment-container">
                            <h1 class="payment-details">Payment Method</h1>
                            <div class="dropdown">
                            <button class="btn btn--bs-primary-border-subtle dropdown-toggle payment-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cash on Delivery</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Cash on Delivery</a></li>
                                <li><a class="dropdown-item" href="#">GCash</a></li>
                                <li><a class="dropdown-item" href="#">Maya</a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="summary">
                            <p class="merchandise-subtotal">Merchandise Subtotal: <span class="summary-merchandise-total">P244</span></p>
                            <p>Shipping Total: <span class="summary-shipping-total">P50</span></p>
                            <p>Total Payment: <span class="summary-total">P294</span></p>
                        </div>
                        <div class="col-md-6 text-right">
                                    <button class="btn btn-primary checkout-button"><a href="">Place Order</a></button>
                        </div>
                    </main>
                </div>
    </div>
</body>
@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])