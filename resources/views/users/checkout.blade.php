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
        <div id="sidebar" class="sidebar p-2 min-vh-100 shadow">
            <x-sidebar />
        </div>
        <div id="content" class="border content">
            <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
                <div class="w-100 d-flex mt-2 p-0">
                    <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                        aria-controls="offcanvasExample">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5"
                            src="../assets/Book_Logo.png" alt="Logo"></a>
                </div>
                <div class="position-absolute end-0">
                    <div class="d-flex">
                        {{-- <div class="input-group mt-1" style="height: 2em">
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
                            </button></a> --}}
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
                                    <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
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
                {{-- <div class="details-container">
                    <h1 class="product-details">Book Ordered</h1>
                    <h1 class="price">Price</h1>
                </div> --}}
                {{-- </div> --}}
                @foreach ($items as $index => $orders)
                    {{-- {{ $orders->productRelation->title }} --}}
                    {{-- <span data="id" >{{ $orders->id }}</span> --}}
                    <span data="book-id" hidden>{{ $orders->product_id }}</span>
                    <div class="order-cart">
                        <div class="name-cart">
                            <a class="seller-name"
                                href="#"><span>{{ $orders->productRelation->user->first_name . ' ' . $orders->productRelation->user->last_name }}</span></a>
                            <button class="message-seller"><i class="fa fa-commenting" aria-hidden="true"></i></button>
                        </div>
                        <div class="product-cart">
                            <div class="book-details">
                                <img src="{{ asset('/images/books/' . $orders->productRelation->book_photo) }}"
                                    alt="book" width="80px" height="110px">
                                <div class="book-info">
                                    <p class="book-title">{{ $orders->productRelation->title }}</p>
                                    <p class="fw-bold interaction-type">{{ $orders->productRelation->status }}</p>
                                    <p class="mb-0 interaction-type">Qty: <span
                                            class="qty">{{ $qty[$index] }}</span></p>
                                </div>
                                <div class="product-price">₱<span
                                        class="price-list">{{ $orders->productRelation->price }}</span>
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
                    <select id="shipping-option" class="btn shipping-button">
                        <option class="fs-5" value="Door-to-Door Delivery">Door-to-Door Delivery</option>
                        <option class="fs-5" value="Personal Transaction">Personal Transaction</option>
                    </select>
                    {{-- <div class="shipping-price">₱130.0</div> --}}
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
                    <p>Shipping Total: <span class="summary-shipping-total">₱130.0</span></p>
                    <p>Total Payment: <span id="summary-total" class="summary-total">P294</span></p>
                </div>
                <div class="col-md-6 text-right">
                    <button id="place-order" class="btn text-white place-order-button" data-bs-toggle="modal"
                        data-bs-target="#messageModal">Place Order</button>
                </div>
            </main>
        </div>
    </div>
</body>
<!-- Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">           
            <div class="modal-body text-center">
                <h3 class="fw-bold fs-2" style="color: #003060;">Please Wait</h3>
                <p style="color: #003060;">You'll be redirected to another page.</p>
                <img class="img  mt-2" src="../assets/loading.gif" width="50" alt="loading gif">                
            </div>            
        </div>
    </div>
</div>

@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])

<script>
    // console.log(document.querySelectorAll('span[data="status"]').textContent);
    var prices = document.querySelectorAll('span[class="price-list"]');
    var item_qty = document.querySelectorAll('span[class="qty"]');
    var totalItem = document.getElementById('total');
    var displayTotal = document.getElementById('total-price');
    var mercha_total = document.getElementById('mer-total');
    var sum_total = document.getElementById('summary-total');
    var totalPrice = 0.0;


    for (var i = 0; i < item_qty.length; i++) {
        totalPrice += (parseFloat(prices[i].textContent) * parseFloat(item_qty[i].textContent));
    }
    // prices.forEach(element => {
    //     // console.log(parseFloat(element.textContent));
    //     totalPrice += parseFloat(element.textContent);
    // });

    displayTotal.textContent = '₱' + totalPrice + '.0';
    totalItem.textContent = '(' + prices.length + ' item/s)';
    mercha_total.textContent = '₱' + totalPrice + '.0';
    sum_total.textContent = '₱' + parseFloat(totalPrice + 130) + '.0';
    // place order
    var place_order_btn = document.getElementById('place-order');
    var address_id = document.getElementById('address-id');
    var books = document.querySelectorAll('span[data="book-id"]');
    var shipping_option = document.getElementById('shipping-option');
    var payment_method = document.getElementById('payment-method');
    var titles = document.querySelectorAll('p[class="book-title"]');
    var book_titles = Array.from(titles, element => element.textContent).join(', ');
    var book_id = [];
    var qty = [];

    place_order_btn.addEventListener('click', () => {
        // alert(orderNumber().toString());
        // if (payment_method.value == 'eWallet') {
        // console.log(book_titles);
        if (address_id == null) {
            alert('No Current Default Address');
        } else {
            // books.forEach(item => {
            //     // book_id.push(item.textContent);
            // });
            // console.log(books.length);
            for (var i = 0; i < books.length; i++) {
                book_id.push(books[i].textContent)
                qty.push(item_qty[i].textContent);
            }

            const dataToSend = {
                address_id: address_id.textContent,
                book_id: book_id,
                qty: qty,
                order_number: orderNumber().toString(),
                shipping_option: shipping_option.value,
                payment_method: payment_method.value,
                // shipping_total: 110,
                total_price: totalPrice * 100
            };

            const csrf_token = '{{ csrf_token() }}';
            fetch('/placeorder', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrf_token,
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        data: dataToSend
                    }), // Your request body data
                })
                .then(response => response.json())
                .then(data => {
                    if (data.response.payment_method == 'eWallet') {
                        payment(data);
                    } else if (data.response.payment_method == 'Cash on Delivery') {
                        window.location.href = '/successpayment';
                    }
                })
                .catch(error => {
                    console.log('error', error);
                });
        }
    });
    var line_items = [];

    function payment(event) {
        // console.log(event.response.total_price);
        for (var i = 0; i < book_id.length; i++) {
            line_items.push({
                currency: 'PHP',
                amount: parseFloat(prices[i].textContent) * 100,
                name: titles[i].textContent,
                quantity: parseFloat(item_qty[i].textContent)
            });
        }

        line_items.push({
            currency: 'PHP',
            amount: 13000,
            name: 'Shipping Fee',
            quantity: line_items.length
        });

        const options = {
            method: 'POST',
            headers: {
                accept: 'application/json',
                'Content-Type': 'application/json',
                authorization: 'Basic c2tfdGVzdF9nOGZHd3NqYkJYNnY2aVVHWGJLQWlyeUw6'
            },
            body: JSON.stringify({
                data: {
                    attributes: {
                        send_email_receipt: false,
                        show_description: true,
                        show_line_items: true,
                        cancel_url: document.URL,
                        line_items,
                        // line_items: [{
                        //         currency: 'PHP',
                        //         amount: event.response.total_price,
                        //         name: book_titles,
                        //         quantity: 1
                        //     },
                        //     {
                        //         currency: 'PHP',
                        //         amount: 13000,
                        //         name: 'Shipping Fee',
                        //         quantity: 1
                        //     }
                        // ],
                        payment_method_types: ['gcash', 'paymaya', 'grab_pay'],
                        description: 'checkout payment',
                        success_url: 'http://127.0.0.1:8000/successpayment'
                    }
                }
            })
        };

        console.log(options);
        fetch('https://api.paymongo.com/v1/checkout_sessions', options)
            .then(response => response.json())
            .then(response => {
                // console.log(response)
                // window.open(response.data.attributes.checkout_url, '_blank');
                console.log(response);
                window.location.href = response.data.attributes.checkout_url;
            })
            .catch(err => console.error(err));
    }


    function orderNumber() {
        let now = Date.now().toString() // '1492341545873'
        // pad with extra random digit
        now += now + Math.floor(Math.random() * 5)
        // format
        return [now.slice(0, 4), now.slice(4, 10), now.slice(10, 14)].join('')
    }
</script>
