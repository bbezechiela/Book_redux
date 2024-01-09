@include('partials.__header', [
'title' => 'My Purchase | BookRedux',
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
                {{-- <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button> --}}
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    {{-- <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <input class="form-control rounded-3 search-field" type="text" placeholder="Search">
                    </div> --}}
                    {{-- <a href="/messages"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
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
                    <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;"
                        aria-current="page" href="/mypurchase">To Purchase</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/toreceive">To Receive</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/delivered-mypurchase">Delivered</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/dropped-mypurchase">Dropped</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/refund-mypurchase">Refund</a>
                </nav>
            </div>
        </div>
        @foreach ($user->orders as $order)
        @foreach ($order->items as $item)
        @if ($item->order->payment_method == 'Cash on Delivery' && $item->order_status == 'Pending')
        <div class="order-cart">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name"
                        href="#"><span>{{ $item->book->user->first_name . ' ' . $item->book->user->last_name }}</span></a>
                </div>
                <span class="order-text me-5 mt-0">To Pay</span>
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <div class="left-section">
                        <img src="{{ asset('/images/books/' . $item->book->book_photo) }}" alt="book" width="80px"
                            height="110px">
                        <div class="book-info">
                            <p class="mb-0 book-title">{{ $item->book->title }}</p>
                            <p class="mb-0 book-price">Qty: {{ $item->qty }}</p>
                            <p class="mb-0 fw-bold interaction-type">{{ $item->book->status }}</p>
                            <p class="mb-0 payment-mode">{{ $item->order->shipping_option }}</p>
                        </div>
                        <div class="product-cart">
                            <div class="book-details">
                                <div class="left-section">
                                    <img src="{{ asset('/images/books/' . $item->book->book_photo) }}" alt="book"
                                        width="80px" height="110px">
                                    <div class="book-info">
                                        <p class="mb-0 book-title">{{ $item->book->title }}</p>
                                        <p class="mb-0 book-price">Qty: {{ $item->qty }}</p>
                                        <p class="mb-0 fw-bold interaction-type">{{ $item->book->status }}</p>
                                        <p class="mb-0 payment-mode">{{ $item->order->shipping_option }}</p>
                                    </div>
                                </div>
                                <div class="right-section">
                                    <div class="book-price">
                                        <p class="product-price">₱{{ $item->book->price }}</p>
                                        <p class="text-total">Total Payment:<span
                                                class="product-total">₱{{ $item->book->price }}</span></p>
                                    </div>
                                    <div class="button-group">
                                        {{-- <a class="btn btn-sm cancel-button" href="/deleteorder/{{ $item->id }}">Cancel Order</a> --}}
                                        <a class="btn btn-sm cancel-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="assignLink({{ $item->id }})">Cancel Order</a>
                                        <button type="button"
                                            class="btn btn-sm pending-button">{{ $item->order_status }}</button>

                        </div>
                    </div>
                @elseif ($item->order->payment_method == 'eWallet' && $item->order_status == 'Pending')
                    <div class="order-cart">
                        <div class="name-cart d-flex justify-content-between">
                            <div>
                                <a class="seller-name"
                                    href="#"><span>{{ $item->book->user->first_name . ' ' . $item->book->user->last_name }}</span></a>
                            </div>
                            <span class="order-text me-5 mt-0">To Pay</span>
                        </div>
                        <div class="product-cart">
                            <div class="book-details">
                                <div class="left-section">
                                    <img src="{{ asset('/images/books/' . $item->book->book_photo) }}" alt="book"
                                        width="80px" height="110px">
                                    <div class="book-info">
                                        <p id="title_{{ $item->order->id }}" class="mb-0 book-title">
                                            {{ $item->book->title }}</p>
                                        <p class="mb-0 book-price">2 Qty</p>
                                        <p class="mb-0 fw-bold interaction-type">{{ $item->book->status }}</p>
                                        <p class="payment-mode">{{ $item->order->shipping_option }}</p>
                                    </div>
                                </div>
                                <div class="right-section">
                                    <div class="book-price">
                                        <p class="product-price">₱{{ $item->book->price }}</p>
                                        <p class="text-total">Total Payment: ₱<span
                                                id="payment_{{ $item->order->id }}"
                                                class="product-total">{{ $item->book->price }}</span></p>
                                    </div>
                                    <div class="button-group">
                                        {{-- <a class="btn btn-sm cancel-button" href="/deleteorder/{{ $item->id }}">Cancel Order</a> --}}
                                        <a class="btn btn-sm cancel-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="assignLink({{ $item->id }})">Cancel Order</a>
                                        <button type="button"
                                            class="btn btn-sm pending-button">{{ $item->order_status }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="book-price">
                            <p class="product-price">₱{{ $item->book->price }}</p>
                            <p class="text-total">Total Payment: ₱<span id="payment_{{ $item->order->id }}"
                                    class="product-total">{{ $item->book->price }}</span></p>
                        </div>
                        <div class="button-group">
                            <a class="btn btn-sm cancel-button" href="/deleteorder/{{ $item->id }}">Cancel Order</a>
                            <button type="button" class="btn btn-sm pending-button">{{ $item->order_status }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        @endforeach
    </div>
    {{-- alert modal --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body px-3">
                    <p class="fs-4">Are you sure you want to cancel you order?</p>
                    <div class="text-center">
                        <a id="confirm-redirection" class="btn btn-danger">Confirm</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- toast --}}
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="message" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="../assets/Book_Logo.png" class="rouxunded me-2" alt="...">
                <strong class="me-auto"></strong>
                <small>1 min ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            @if (session('message'))
                <div class="toast-body fw-bold text-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>
</div>

@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])

<script>
    // function pay(id) {
    //     var payment_price = document.getElementById('payment_' + id);
    //     var title = document.getElementById('title_' + id);
    //     // console.log(parseFloat(payment_price.textContent) + title.textContent);
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
    //                         amount: parseFloat(payment_price.textContent) * 100,
    //                         name: title.textContent + ' (Book)',
    //                         quantity: 1
    //                     }],
    //                     payment_method_types: ['gcash', 'paymaya', 'grab_pay'],
    //                     description: 'checkout payment',
    //                     success_url: 'http://127.0.0.1:8000/successpayment/' + id
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

    var confirm_redirection_btn = document.getElementById('confirm-redirection');

    // confirm_redirection_btn.addEventListener('click', () => {
    //     alert(confirm_redirection_btn.href);
    // });

    function assignLink(id) {
        confirm_redirection_btn.href = /deleteorder/ + id;
    }

    const message = bootstrap.Toast.getOrCreateInstance(document.getElementById('message'));
    @if(session('message'))
    message.show()
    @endif
</script>