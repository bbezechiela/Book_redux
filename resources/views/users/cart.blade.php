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
        <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start" tabindex="-1"
            aria-labelledby="offcanvasExampleLabel">
            <x-sidebar />
        </div>
        <div id="content" class="pe-0 border content">
            <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">

                <div class="w-100 d-flex mt-1 p-0">
                    <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                        aria-controls="offcanvasExample">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <a href="/" id="logo" class="px-2"><img class="img mt-1 me-5"
                            src="../assets/Book_Logo.png" alt="Logo"></a>
                </div>
                <div class="position-absolute end-0">
                    <div class="d-flex">
                        <div class="input-group mt-1" style="height: 2em">
                            <span class="input-group-text">
                                <i class="fa fa-search"></i>
                            </span>
                            <input class="form-control rounded-3" type="text" placeholder="Search">
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
            <div id="cart" class="mx-2 px-3">
                <h4 id="cart-header">Shopping Cart
                    <label class="form-check-label" for="select-all">
                        <input class="form-check-input check-order" type="checkbox" value="" id="select-all">
                        Select all
                        <span>(3 items)</span>
                    </label>
                </h4>
            </div>
            <main class="product-list">
                <div class="details-container">
                    <div class="product-details">Product Details</div>
                    <div class="price">Price</div>
                    <div class="action">Actions</div>
                </div>
                @foreach ($items->cart as $item)
                    {{-- <p>{{ $item->productRelation->title }}</p> --}}
                    @if ($item->productRelation->status == 'Exchange')
                        <div class="order-cart">
                            <div class="name-cart">
                                <a class="seller-name"
                                    href="#"><span>{{ $item->productRelation->user->first_name . ' ' . $item->productRelation->user->last_name }}</span></a>
                                <button class="message-seller"><i class="fa fa-commenting"
                                        aria-hidden="true"></i></button>
                            </div>

                            <div class="product-cart">
                                <div class="book-details">
                                    <input class="form-check-input check-order" type="checkbox" value=""
                                        id="check-order">
                                    <img src="{{ asset('/images/books/' . $item->productRelation->book_photo) }}"
                                        alt="book" width="80px" height="110px">
                                    <div class="book-info">
                                        <p class="book-title">{{ $item->productRelation->title }}</p>
                                        <p class="mb-0 fw-bold interaction-type">{{ $item->productRelation->status }}
                                        </p>
                                    </div>
                                </div>
                                <div class="product-price">₱{{ $item->productRelation->price }}</div>
                                <div class="product-action">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle move-button" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Move to</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Move to likes</a></li>
                                            <li><a class="dropdown-item" href="#">Move to wish list</a></li>
                                        </ul>
                                    </div>
                                    <button class="delete-button">Delete</button>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="order-cart">
                            <div class="name-cart">
                                <a class="seller-name"
                                    href="#"><span>{{ $item->productRelation->user->first_name . ' ' . $item->productRelation->user->last_name }}</span></a>
                                <button class="message-seller"><i class="fa fa-commenting"
                                        aria-hidden="true"></i></button>
                            </div>

                            <div class="product-cart">
                                <div class="book-details">
                                    <input class="form-check-input check-order" type="checkbox" value=""
                                        id="check-order">
                                    <img src="{{ asset('/images/books/' . $item->productRelation->book_photo) }}"
                                        alt="book" width="80px" height="110px">
                                    <div class="book-info">
                                        <p class="book-title">{{ $item->productRelation->title }}</p>
                                        <p class="mb-0 fw-bold interaction-type">{{ $item->productRelation->status }}
                                        </p>
                                    </div>
                                </div>
                                <div class="product-price flex-row">₱<span id="price">{{ $item->productRelation->price }}</span></div>
                                <div class="product-action">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle move-button" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Move to</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Move to likes</a></li>
                                            <li><a class="dropdown-item" href="#">Move to wish list</a></li>
                                        </ul>
                                    </div>
                                    <button class="delete-button">Delete</button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </main>
            <!-- Sticky footer -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="total-items">Total (<span>4 items</span>): <span class="total">₱544</span></p>
                        </div>
                        <div class="col-md-6 text-right">
                            <a class="btn checkout-button" href="/checkout">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
</body>

@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])
