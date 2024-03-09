@include('partials.__header', [
    'title' => 'To Receive | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/myPurchase-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 shadow">
        <x-sidebar />
    </div>

    {{-- <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start" tabindex="-1"
        aria-labelledby="offcanvasExampleLabel">
        <x-sidebar />
    </div>
    <div id="sidebarProfile" class="sidebarProfile p-2 min-vh-100 shadow">
        <x-sidebarProfile />
    </div> --}}
    <div id="content" class="content">
        <ul class="nav bg-light sticky-top head-nav shadow py-4 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5"
                        src="../assets/Book_Logo.png" alt="Logo"></a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
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
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

        </ul>
        <div class="purchase-container">
            <div class="header">
                <h4>My Purchase</h4>
                <p>View and track your purchase item</p>
            </div>
            <div class="card-body nav-details">
                <nav class="nav nav-pills flex-column flex-sm-row">
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/booksrented">Books Rented</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/mypurchase">To Purchase</a>
                    <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;"
                        aria-current="page" href="/toreceive">To
                        Receive</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/delivered-mypurchase">Delivered</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/dropped-mypurchase">Dropped</a>
                    {{-- <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/refund-mypurchase">Refund</a> --}}
                </nav>
            </div>
        </div>
        @php
            $loopCount = 0;
        @endphp
        @foreach ($user->orders as $order)
            @foreach ($order->items as $item)
                @if ($item->order->payment_method == 'Cash on Delivery' && $item->order_status == 'paid')
                    <div class="order-cart">
                        <div class="name-cart d-flex justify-content-between">
                            <div>
                                <a class="seller-name"
                                    href="/userlistings/{{ $order->user_id }}"><span>{{ $item->book->user->first_name . ' ' . $item->book->user->last_name }}</span></a>
                            </div>
                            <span class="order-text me-5 mt-0">To Receive</span>
                        </div>
                        <div class="product-cart">
                            <div class="book-details">
                                <div class="left-section">
                                    <img src="{{ asset('/images/books/' . $item->book->book_photo) }}" alt="book"
                                        width="80px" height="110px">
                                    <div class="book-info">
                                        <p class="mb-0 book-title">{{ $item->book->title }}</p>
                                        <p class="mb-0 book-qty">{{ $item->qty }} Qty</p>
                                        <p class="mb-0 fw-bold interaction-type">{{ $item->book->status }}</p>
                                        <p class="mb-0 payment-mode">{{ $item->order->shipping_option }}</p>
                                        <p id="track_{{ $item->id }}" class="d-none">{{ $item->tracking_number }}
                                        </p>
                                    </div>
                                </div>
                                <div class="right-section">
                                    <div class="book-price">
                                        <p class="product-price">₱{{ $item->book->price }}</p>
                                        <p class="text-total">Shipping Fee:<span class="product-total">₱130</span></p>
                                        <br>
                                        <p class="text-total">Total Payment:<span
                                                class="product-total">₱{{ $item->book->price + 130 }}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="order-details">
                                <div class="order-message">
                                    <button type="button" class="ms-3 post-btn" data-bs-toggle="modal" data-bs-target="#track-delivery" onclick="trackOrder({{ $item->id }})">Track Order<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                                </div>
                                <div class="button-group">
                                    <a class="btn btn-outline-primary btn-sm receive-button"
                                        href="/orderreceived/{{ $item->id }}">Order
                                        Received</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $loopCount++;
                    @endphp
                @elseif ($item->order->payment_method == 'eWallet' && $item->order_status == 'paid')
                    <div class="order-cart">
                        <div class="name-cart d-flex justify-content-between">
                            <div>
                                <a class="seller-name"
                                    href="/userlistings/{{ $order->user_id }}"><span>{{ $item->book->user->first_name . ' ' . $item->book->user->last_name }}</span></a>
                            </div>
                            <span class="order-text me-5 mt-0">To Receive</span>
                        </div>
                        <div class="product-cart">
                            <div class="book-details">
                                <div class="left-section">
                                    <img src="{{ asset('/images/books/' . $item->book->book_photo) }}" alt="book"
                                        width="80px" height="110px">
                                    <div class="book-info">
                                        <p class="mb-0 book-title">{{ $item->book->title }}</p>
                                        <p class="mb-0 book-qty">2 Qty</p>
                                        <p class="mb-0 fw-bold interaction-type">{{ $item->book->status }}</p>
                                        <p class="mb-0payment-mode">{{ $item->order->shipping_option }}</p>
                                        <p id="track_{{ $item->id }}" class="d-none">{{ $item->tracking_number }}
                                    </div>
                                </div>
                                <div class="right-section">
                                    <div class="book-price">
                                        <p class="product-price">{{ $item->book->price }}</p>
                                        <p class="text-total">Total Payment:<span
                                                class="product-total">{{ $item->book->price }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="order-details">
                                <div class="order-message">
                                    <button type="button" class="post-btn" data-bs-toggle="modal" data-bs-target="#track-delivery" onclick="trackOrder({{ $item->id }})">Track Order<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                                </div>
                                <div class="button-group">
                                    <a class="btn btn-outline-primary btn-sm receive-button"
                                        href="/orderreceived/{{ $item->id }}">Order
                                        Received</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $loopCount++;
                    @endphp
                @endif
            @endforeach
        @endforeach
        @if ($loopCount == 0)
            <div class="w-100 mt-5 d-flex justify-content-center">
                <img class="img mt-3" src="../assets/Empty-Box.png" alt="image">
            </div>
            <h1 class="mt-2 text-center fw-bold" style="color: #E55B13; font-size: 20px;">No deliveries yet</h1>
        @endif

        <!-- Tracking Modal -->
        <div class="modal fade" id="track-delivery" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #003060;">Tracking My
                            Purchase
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <section>
                            <div class="container py-3 h-10 mb-4">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="card card-stepper" style="border-radius: 10px; border: none;">
                                            <div class="card-body p-4">
                                                <div
                                                    class="d-flex justify-content-between align-items-center header-track">
                                                    <div class="d-flex flex-column">
                                                        <span id="tracking-text-header"
                                                            class="lead fw-normal tracking-text">Your order has been
                                                            received by the rider</span>
                                                        <span id="modal_tracking" class="text-muted small tracking-text"></span>
                                                    </div>
                                                </div>
                                                {{-- <hr class="my-4"> --}}
                                                <div
                                                    class="d-flex flex-row justify-content-between align-items-center align-content-center">
                                                    <span id="first_track{{ $item->id }}"
                                                        class="dot"></span>
                                                    <hr class="flex-fill track-line"><span
                                                        id="second_track{{ $item->id }}"
                                                        class="dot"></span>
                                                    {{-- <hr class="flex-fill track-line"><span id="third_track{{ $item->id }}"
                                                        class="dot"></span> --}}
                                                    <hr class="flex-fill track-line"><span
                                                        id="fourth_track{{ $item->id }}"
                                                        class="d-flex justify-content-center align-items-center big-dot dot"><i
                                                            class="fa fa-check text-white"></i></span>
                                                    <hr class="flex-fill track-line"><span
                                                        id="fifth_track{{ $item->id }}"
                                                        class="dot"></span>
                                                </div>
                                                <div
                                                    class="d-flex flex-row justify-content-between align-items-center">
                                                    <div class="d-flex flex-column align-items-start tracking-text">
                                                        <span class="date-track"></span>
                                                        <span class="tracking-description">Order
                                                            placed</span>
                                                    </div>
                                                    <div
                                                        class="d-flex flex-column justify-content-center tracking-text">
                                                        <span class="date-track"></span><span
                                                            class="tracking-description">Preparing
                                                            to ship</span>
                                                    </div>
                                                    {{-- <div class="d-flex flex-column justify-content-center align-items-center tracking-text">
                                                        <span class="date-track"></span><span
                                                            class="tracking-description">Your order has
                                                            been shipped</span>
                                                    </div> --}}
                                                    <div class="d-flex flex-column align-items-center tracking-text">
                                                        <span class="date-track"></span><span
                                                            class="tracking-description">Out for
                                                            delivery</span>
                                                    </div>
                                                    <div class="d-flex flex-column align-items-end tracking-text">
                                                        <span class="date-track"></span><span
                                                            class="tracking-description">Delivered</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!-- Confirmation-Order Modal -->
        <div class="modal fade" id="order-received" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #003060;">Release
                            <span>P120.00</span> to seller
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="color: #003060;">
                        <p>Check that you received all items in satisfactory condition (no return/refund required)
                            before confirming receipt.</p>
                        <p>Once you confirm, the order is completed and we will release the payment to seller.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                            data-bs-target="#return-refund">Return Refund</button>
                        <button type="button" class="btn confirm-btn">Confirm</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Return Refund Modal -->
        <div class="modal fade" id="return-refund" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #003060;">Return/Refund
                            Request</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="color: #003060;">
                        <p>Please complete the following details for return/refund request.</p>
                        <div class="order-cart">
                            <div class="name-return d-flex justify-content-between">
                                <div>
                                    <a class="seller-name" href="/userlistings/{{ $order->user_id }}"><span>Jennie Blackpink</span></a>
                                </div>
                            </div>
                            <div class="product-return">
                                <div class="book-details-return">
                                    <div class="left-section">
                                        <img src="../assets/city_of_secrets.png" alt="book" width="50px"
                                            height="80px">
                                        <div class="book-info-return">
                                            <p class="mb-0 book-title">City of Secrets</p>
                                            <p class="mb-0 fw-bold interaction-type">Sale</p>
                                            <p class="payment-mode">Personal Transaction</p>
                                        </div>
                                    </div>
                                    <div class="right-section">
                                        <div class="book-price">
                                            <p class="product-price">P144</p>
                                            <p class="text-total">Total Payment:<span
                                                    class="product-total">P144</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleTextarea" class="form-label">Reason/s:</label>
                            <textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Enter your text here..."></textarea>
                        </div>
                        <p>Evidence:
                        <div class="image-container">
                            <div class="image-holder">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                            <div class="image-holder">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                            <div class="image-holder">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                            <div class="image-holder">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                            <div class="image-holder">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </div>
                        </div>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn request-btn">Send Request</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    const trackOrder = (id) => {
        // alert(document.getElementById(`track_${id}`).textContent);
        document.getElementById('modal_tracking').textContent = `Tracking Number: ${document.getElementById(`track_${id}`).textContent}`;
    }
</script>
    @include('partials.__footer', [
        'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
        'aos_link' => '/aos-master/dist/aos.js',
    ])
