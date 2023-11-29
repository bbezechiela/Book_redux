@include('partials.__header', [
    'title' => 'Cart | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/cart-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="body-container" class="container-fluid px-0">
        <div id="sidebar" class="sidebar p-2 min-vh-100 shadow">
            <x-sidebar />
        </div>
        {{-- <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start" tabindex="-1"
            aria-labelledby="offcanvasExampleLabel">
            <x-sidebar />
        </div> --}}
        <div id="content" class="pe-0 content">
            <ul class="nav bg-light sticky-top head-nav shadow py-4 px-4">

                <div class="w-100 d-flex mt-1 p-0">
                    {{-- <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                        aria-controls="offcanvasExample">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button> --}}
                    <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5"
                            src="../assets/Book_Logo.png" alt="Logo"></a>
                </div>
                <div class="position-absolute end-0">
                    <div class="d-flex">
                        {{-- <div class="input-group mt-1" style="height: 2em">
                            <span class="input-group-text">
                                <i class="fa fa-search"></i>
                            </span>
                            <input class="form-control rounded-3" type="text" placeholder="Search">
                        </div> --}}
                        {{-- <a href="/messages"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
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
            <div id="cart" class="mx-2 px-3">
                <h4 id="cart-header">Shopping Cart
                    <label class="form-check-label" for="select-all">
                        <input class="form-check-input check-order" type="checkbox" value="" id="select-all">
                        Select all
                        {{-- <span>(3 items)</span> --}}
                    </label>
                </h4>
            </div>
            <main class="product-list">
                {{-- <div class="details-container">
                    <div class="product-details">Product Details</div>
                    <div class="price">Price</div>
                    <div class="action">Actions</div>
                </div> --}}
                {{-- @php
                    global $totalPrice;
                @endphp --}}
                <form id="form" action="/checkout">
                    @csrf
                    @foreach ($items->cart as $item)
                        {{-- <p>{{ $item->productRelation->title }}</p> --}}
                        @if (
                            $item->productRelation->status == 'Exchange' &&
                                $item->productRelation->unit ==
                                    'Added to
                                                                    Cart')
                            <div class="order-cart">
                                <div class="name-cart">
                                    <a class="seller-name"
                                        href="#"><span>{{ $item->productRelation->user->first_name . ' ' . $item->productRelation->user->last_name }}</span></a>
                                    <button class="message-seller"><i class="fa fa-commenting"
                                            aria-hidden="true"></i></button>
                                </div>

                                <div class="product-cart">
                                    <div class="book-details">
                                        {{-- <input class="form-check-input check-order" type="checkbox" name="items"
                                            value="{{ $item->productRelation->price }}" id="check-order"> --}}
                                        <input class="form-check-input check-order" type="checkbox" name="items[]"
                                            value="{{ $item->id }}" id="check-order">
                                        <img src="{{ asset('/images/books/' . $item->productRelation->book_photo) }}"
                                            alt="book" width="80px" height="110px">
                                        <div class="book-info">
                                            <p class="book-title">{{ $item->productRelation->title }}</p>
                                            <p class="mb-0 fw-bold interaction-type">
                                                {{ $item->productRelation->status }}
                                            </p>
                                        </div>
                                    </div>
                                    {{-- <div class="product-price">₱{{ $item->productRelation->price }}
                        </div> --}}
                                    <div class="product-action">
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle move-button" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">Move to</button>
                                            <ul class="dropdown-menu">
                                                {{-- <li><a class="dropdown-item" href="#">Move to likes</a></li> --}}
                                                <li><a class="dropdown-item" href="#">Move to wish list</a></li>
                                            </ul>
                                        </div>
                                        <a href="/deletecart/{{ $item->id }}" class="delete-button">Delete</a>
                                    </div>
                                </div>
                            </div>
                        @elseif ($item->productRelation->unit == 'Added to Cart')
                            <div class="order-cart">
                                <div class="name-cart">
                                    <a class="seller-name"
                                        href="#"><span>{{ $item->productRelation->user->first_name . ' ' . $item->productRelation->user->last_name }}</span></a>
                                    <button class="message-seller"><i class="fa fa-commenting"
                                            aria-hidden="true"></i></button>
                                </div>

                                <div class="product-cart">
                                    <div class="book-details">
                                        {{-- <input class="form-check-input check-order" type="checkbox" name="items"
                                            value="{{ $item->productRelation->price }}" id="check-order"> --}}
                                        <input class="form-check-input check-order" type="checkbox" name="items[]"
                                            value="{{ $item->id }}" id="check-order">
                                        <img src="{{ asset('/images/books/' . $item->productRelation->book_photo) }}"
                                            alt="book" width="80px" height="110px">
                                        <div class="book-info">
                                            <p class="book-title">{{ $item->productRelation->title }}</p>
                                            <p class="mb-2 fw-bold interaction-type">
                                                {{ $item->productRelation->status }}
                                            </p>
                                            <div class="product-price flex-row">₱<span
                                                    id="{{ $item->id }}">{{ $item->productRelation->price }}</span>
                                            </div>

                                        </div>
                                    </div>
                                    {{-- <div class="product-price flex-row">₱<span
                        id="{{ $item->id }}">{{ $item->productRelation->price }}</span>
            </div> --}}
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-center">
                                            <button type="button" class="btn btn-link btn-minus px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                            <input id="form1" min="0" name="quantity" value="2"
                                                type="number" class="form-control form-control-mm" />
                                            <button type="button" class="btn btn-link btn-plus px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="total-price flex-row">₱<span
                                            id="{{ $item->id }}">{{ $item->productRelation->price }}</span>
                                    </div>
                                    <div class="product-action">
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle move-button" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">Move to</button>
                                            <ul class="dropdown-menu">
                                                {{-- <li><a class="dropdown-item" href="#">Move to likes</a></li> --}}
                                                <li><a class="dropdown-item" href="#">Move to wish list</a></li>
                                            </ul>
                                        </div>
                                        <a class="btn delete-button"
                                            href="/deletecart/{{ $item->id }}">Delete</a>
                                    </div>
                                </div>
                            </div>
                            {{-- @php
                            $totalPrice += floatVal($item->productRelation->price);
                        @endphp --}}
                        @endif
                    @endforeach
                </form>
            </main>
            <div class="footer fixed-bottom">
                <div class="float-end">
                    <p class="mb-0 me-5 d-flex align-items-center">
                        {{-- <p class="total-items">Total (<span>4 items</span>): <span id="total" class="total">₱{{ $totalPrice }}.0</span>
            </p> --}}
                    <p class="total-items">Total (<span id="items">0</span> item/s): <span id="total"
                            class="total">₱0.00</span>
                        <a id="checkout" class="btn btn-primary checkout-button">Checkout</a>
                    </p>
                    </p>
                </div>

            </div>
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="../assets/Book_Logo.png" class="rouxunded me-2" alt="...">
                        <strong class="me-auto"></strong>
                        <small>1 min ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                    @if (session('message'))
                        <div class="toast-body fw-bold text-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div>

</body>

@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])

<script>
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(document.getElementById('liveToast'));

    @if (session('message'))
        toastBootstrap.show()
    @endif
    
    var select_all = document.getElementById('select-all');
    var prices = document.querySelectorAll('input[name="items[]"]');
    var total = document.getElementById('total');
    var items = document.getElementById('items');
    var totalItems = 0;
    var totalPrice = 0.0;
    var checkedValues = [];
    for (var i = 0; i < prices.length; i++) {
        prices[i].checked = false;
    }
    prices.forEach((checkbox) => {
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                // console.log(document.getElementById(this.value).textContent);
                checkedValues.push(document.getElementById(this.value).textContent);
                totalPrice += parseFloat(document.getElementById(this.value).textContent);
                total.textContent = '₱' + totalPrice + '.0';
                totalItems += 1;
                items.textContent = totalItems;
            } else if (totalPrice > 0.0) {
                checkedValues.pop(document.getElementById(this.value).textContent);
                totalPrice -= parseFloat(document.getElementById(this.value).textContent);
                total.textContent = '₱' + totalPrice + '.0';
                totalItems -= 1;
                items.textContent = totalItems;
                if (totalPrice <= 0.0) {
                    total.textContent = '₱' + '0.00';
                    totalPrice = 0.0;
                }
            }
        });
    });
    select_all.addEventListener('change', () => {
        if (select_all.checked) {
            totalPrice = 0.0;
            for (var i = 0; i < prices.length; i++) {
                prices[i].checked = true;
            }
            prices.forEach((checkbox) => {
                if (checkbox.checked) {
                    checkedValues.push(document.getElementById(checkbox.value).textContent);
                    totalPrice += parseFloat(document.getElementById(checkbox.value).textContent);
                    total.textContent = '₱' + totalPrice + '.0';
                    totalItems += 1;
                } else if (totalPrice > 0.0) {
                    checkedValues.pop(document.getElementById(checkbox.value).textContent);
                    totalPrice -= parseFloat(document.getElementById(checkbox.value).textContent);
                    total.textContent = '₱' + totalPrice + '.0';
                    totalItems -= 1;
                    if (totalPrice <= 0.0) {
                        total.textContent = '₱' + '0.00';
                        totalPrice = 0.0;
                    }
                }
            });
            items.textContent = totalItems;
        } else {
            for (var i = 0; i < prices.length; i++) {
                prices[i].checked = false;
            }
            total.textContent = '₱' + '0.00';
            totalPrice = 0.0;
            totalItems = 0;
            items.textContent = totalItems;
        }
    });
    // checkout
    var checkout = document.getElementById('checkout');
    checkout.addEventListener('click', () => {
        var form = document.getElementById('form');
        if (totalPrice == 0.0) {
            // checkout.className = 'btn btn-outline-danger ';
            alert('No selected item/s');
        } else {
            form.submit();
        }
    });
</script>
