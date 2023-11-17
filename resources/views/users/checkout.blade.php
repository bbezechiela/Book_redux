@include('partials.__header', [
'title' => 'Checkout | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/checkout-style.css',
'aos_link' => '/aos-master/dist/aos.css',
])

{{-- <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head> --}}

<body>
    <div id="body-container" class="container-fluid px-0">
        <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start" tabindex="-1"
            aria-labelledby="offcanvasExampleLabel">
            <x-sidebar />
        </div>
        <div id="content" class="border content">
            <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
                <div class="w-100 d-flex mt-2 p-0">
                    <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                        aria-controls="offcanvasExample">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <a href="/" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                            alt="Logo"></a>
                </div>
                <div class="position-absolute end-0">
                    <div class="d-flex">
                        <div class="input-group mt-1" style="height: 2em">
                            <span class="input-group-text">
                                <i class="fa fa-search"></i>
                            </span>
                            <input class="form-control rounded-3 search-field" type="text" placeholder="Search">
                        </div>
                        <a href="/messages"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" data-bs-title="Messages">
                                <i class="fa fa-envelope-o" aria-hidden="true"
                                    style="font-size: 20px; color: #003060;"></i>
                            </button></a>
                        <a href="/notification"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" data-bs-title="Notification">
                                <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                            </button></a>
                        <a href="/myprofile"><button class="btn mx-1 p-0" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" data-bs-title="Profile">
                                <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}"
                                    alt="notification" width="35" height="35" class="rounded-5"
                                    style="margin-right: 2em;">
                            </button></a>
                    </div>
                </div>
            </ul>
            <div id="checkout" class="checkout-content mt-3 w-100">
                <h4 class="text-center checkout_text mx-5 pb-2">Checkout</h4>
            </div>
            {{-- @if ($user->address->default_address == 'true') --}}

            @foreach ($user->addressUser as $user)
            @if ($user->default_address == 'true')
            <div class="delivery-address-container">
                <span id="address-id" hidden>{{ $user->id }}</span>
                <h2 class="delivery-address-title">
                    <i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 10px;"></i>Delivery
                    Address
                </h2>
                <div class="seller-details">
                    <p class="name" style="margin-right: 10px;">{{ $user->name }}</p>
                    <p class="contact" style="margin-right: 35px;">{{ $user->contact_number }}</p>
                    <p class="address" style="margin-right: 15px;">
                        {{ $user->street_building_house . ', ' . $user->brgy_village . ', ' . $user->city_municipality }}
                    </p>
                    <p class="zipcode">{{ $user->postal_code }}</p>
                </div>
                <button class="change-button"><a href="/deliveryAddress">Change</a></button>
            </div>
            @endif
            @endforeach
            {{-- <div class="float-end">
                <p class="mb-0 me-5 d-flex align-items-center">
                </p>
            </div> --}}
            {{-- <div class="footer fixed-bottom">
                <div class="container"> --}}

            {{-- </div>
            </div> --}}

            <main class="product-list">
                <div class="details-container">
                            <h1 class="product-details">Book Ordered</h1>
                            <h1 class="price">Price</h1>
                </div>
        </div>
        @foreach ($items as $orders)
        {{-- {{ $orders->productRelation->title }} --}}
        {{-- <span hidden>{{ $orders->user_id }}</span> --}}
        <span data="book-id" hidden>{{ $orders->product_id }}</span>
        <div class="order-cart">
            <div class="name-cart">
                <a class="seller-name"
                    href="#"><span>{{ $orders->productRelation->user->first_name . ' ' . $orders->productRelation->user->last_name }}</span></a>
                <button class="message-seller"><i class="fa fa-commenting" aria-hidden="true"></i></button>
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <img src="{{ asset('/images/books/' . $orders->productRelation->book_photo) }}" alt="book"
                        width="80px" height="110px">
                    <div class="book-info">
                        <p class="book-title">{{ $orders->productRelation->title }}</p>
                        <p class="fw-bold interaction-type">{{ $orders->productRelation->status }}</p>
                        <p class="mb-0 interaction-type">Security Deposit: <span>₱0</span></p>
                    </div>
                    <div class="product-price">₱<span class="price-list">{{ $orders->productRelation->price }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="shipping-option">
            <p class="txt-shipping-opt">Shipping Option:</p>
            {{-- <div class="dropdown">
                        <button class="btn btn--bs-primary-border-subtle dropdown-toggle shipping-button"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Door-to-Door Delivery</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Door-to-Door Delivery</a></li>
                            <li><a class="dropdown-item" href="#">Personal Transaction</a></li>
                        </ul>
                    </div> --}}
<<<<<<< HEAD
                    <select id="shipping-option" class="btn shipping-button">
                        <option class="fs-5" value="Door-to-Door Delivery">Door-to-Door Delivery</option>
                        <option class="fs-5" value="Personal Transaction">Personal Transaction</option>
                    </select>
                    <div class="shipping-price">P50</div>
                </div>
                <div class="order-total">
                    <p>Order Total <span id="total">(1 item):</span></p>
                    <div id="total-price" class="total">₱294</div>
                </div>
                <div class="payment-container">
                    <h1 class="payment-details">Payment Method</h1>
                    <select id="payment-method" class="btn payment-button">
                        <option class="fs-6" value="Cash on Delivery">Cash on Delivery</option>
                        <option class="fs-6" value="eWallet">eWallet</option>
                        {{-- <option class="fs-6" value="GCash">GCash</option>
                        <option class="fs-6" value="Maya">Maya</option> --}}
                    </select>
                </div>
                <div class="summary">
                    <p class="merchandise-subtotal">Merchandise Subtotal: <span id="mer-total"
                            class="summary-merchandise-total">P244</span></p>
                    {{-- <p>Shipping Total: <span class="summary-shipping-total">₱110</span></p> --}}
                    <p>Total Payment: <span id="summary-total" class="summary-total">P294</span></p>
                </div>
                <div class="col-md-6 text-right">
                    <button id="place-order" class="btn text-white place-order-button">Place Order</button>
                </div>
            </main>
=======
            <select id="shipping-option" class="btn shipping-button">
                <option class="fs-5" value="Door-to-Door Delivery">Door-to-Door Delivery</option>
                <option class="fs-5" value="Personal Transaction">Personal Transaction</option>
            </select>
            <div class="shipping-price">₱50</div>
>>>>>>> nestine
        </div>
        <div class="order-total">
            <p>Order Total <span id="total">(1 item):</span></p>
            <div id="total-price" class="total">₱294</div>
        </div>
        <div class="payment-container">
            <h1 class="payment-details">Payment Method</h1>
            <select id="payment-method" class="btn payment-button">
                <option class="fs-6" value="Cash on Delivery">Cash on Delivery</option>
                <option class="fs-6" value="eWallet">eWallet</option>
                {{-- <option class="fs-6" value="GCash">GCash</option>
                        <option class="fs-6" value="Maya">Maya</option> --}}
            </select>
        </div>
        <div class="summary">
            <p class="merchandise-subtotal">Merchandise Subtotal: <span id="mer-total"
                    class="summary-merchandise-total">P244</span></p>
            {{-- <p>Shipping Total: <span class="summary-shipping-total">₱110</span></p> --}}
            <p>Total Payment: <span id="summary-total" class="summary-total">P294</span></p>
        </div>
        <div class="col-md-6 text-right">
            <button id="place-order" class="btn text-white place-order-button">Place Order</button>
        </div>
        </main>
    </div>
    </div>
</body>
@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])

<script>
    var prices = document.querySelectorAll('span[class="price-list"]');
    var totalItem = document.getElementById('total');
    var displayTotal = document.getElementById('total-price');
    var mercha_total = document.getElementById('mer-total');
    var sum_total = document.getElementById('summary-total');
    var totalPrice = 0.0;
    prices.forEach(element => {
        // console.log(parseFloat(element.textContent));
        totalPrice += parseFloat(element.textContent);
    });
    displayTotal.textContent = '₱' + totalPrice + '.0';
    totalItem.textContent = '(' + prices.length + ' item/s)';
    mercha_total.textContent = '₱' + totalPrice + '.0';
    sum_total.textContent = '₱' + parseFloat(totalPrice) + '.0';
    // place order
    var place_order_btn = document.getElementById('place-order');
    var address_id = document.getElementById('address-id');
    var books = document.querySelectorAll('span[data="book-id"]');
    var shipping_option = document.getElementById('shipping-option');
    var payment_method = document.getElementById('payment-method');
    var book_id = [];
    place_order_btn.addEventListener('click', () => {
        // alert(addres_id.textContent);
        if (address_id == null) {
            alert('No Current Default Address');
        } else {
            books.forEach(item => {
                book_id.push(item.textContent);
            });
            // console.log(shipping_option.value + ' ' + payment_method.value);

            const dataToSend = {
                address_id: address_id.textContent,
                book_id: book_id,
                shipping_option: shipping_option.value,
                payment_method: payment_method.value,
                // shipping_total: 110,
                total_price: totalPrice * 100
            };

            const csrf_token = '{{ csrf_token() }}';
            fetch('/placeorder', {
                    method: 'POST', // Specify the HTTP method as POST
                    headers: {
                        'X-CSRF-TOKEN': csrf_token,
                        'Content-Type': 'application/json', // Set the Content-Type header for JSON data
                        // Add any other headers you need
                    },
                    // body: JSON.stringify({
                    //     data: dataToSend
                    // }),
                    body: JSON.stringify(dataToSend), // Your request body data
                })
                // .then(response => response.json())
                .then(data => {
                    console.log(data);
                    // payment(data);
                    if (data.redirected) {
                        window.location.href = data.url;
                    }
                })
                .catch(error => {
                    console.log('error', error);
                });
        }

    });
    // function payment(event) {
    //     // console.log(event.response.total_price);
    //     const options = {
    //         method: 'POST',
    //         headers: {
    //             accept: 'application/json',
    //             'Content-Type': 'application/json',
    //             authorization: 'Basic c2tfdGVzdF9nOGZHd3NqYkJYNnY2aVVHWGJLQWlyeUw6'
    //         },
    //         body: JSON.stringify({
    //             data: {
    //                 attributes: {
    //                     send_email_receipt: false,
    //                     show_description: true,
    //                     show_line_items: true,
    //                     cancel_url: document.URL,
    //                     line_items: [{
    //                         currency: 'PHP',
    //                         amount: event.response.total_price,
    //                         name: 'Book/s',
    //                         quantity: 1
    //                     }],
    //                     payment_method_types: ['gcash', 'paymaya', 'card', 'grab_pay', 'dob', 'dob_ubp'],
    //                     description: 'checkout payment',
    //                     success_url: 'http://127.0.0.1:8000/successpayment'
    //                 }
    //             }
    //         })
    //     };
    //     fetch('https://api.paymongo.com/v1/checkout_sessions', options)
    //         .then(response => response.json())
    //         .then(response => {
    //             // console.log(response)
    //             // window.open(response.data.attributes.checkout_url, '_blank');
    //             window.location.href = response.data.attributes.checkout_url;
    //         })
    //         .catch(err => console.error(err));
    // }
</script>