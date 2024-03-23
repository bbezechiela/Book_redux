@include('partials.__header', [
'title' => 'Delivered | BookRedux',
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
    <div id="content" class="content">
        <ul class="nav bg-light sticky-top head-nav shadow py-4 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                {{-- <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button> --}}
                <a href="/" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
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
                                {{-- <li><a class="dropdown-item" href="/changepassword">Change Password</a></li> --}}
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
                        href="/mypurchase">My Exchange Request</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        style="background-color: #003060;" aria-current="page" href="/toreceive">To
                        Receive</a>
                    <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;"
                        aria-current="page" href="/delivered-mypurchase">Completed</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/dropped-mypurchase">Dropped</a>
                    {{-- <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/refund-mypurchase">Refund</a> --}}
                </nav>
            </div>
        </div>
        <div class="order-cart d-print-none">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href=""><span>Maria Mesa</span></a>
                    <button class="message-seller message-button"><i class="fa fa-commenting"
                            aria-hidden="true"></i></button>
                </div>
                <span class="order-text me-5 mt-0">Completed</span>
            </div>
            <div class="card mb-3" style="max-width: 100%; margin-left: 3em; margin-right: 2.1em;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                        <img src="/assets/city_limits.png" class="img-fluid rounded-start" alt="..."
                                            height="200px" width="200px">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="/assets/bubble_bath.png" class="img-fluid rounded-start" alt="..."
                                            height="200px" width="200px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/brown_book.png" class="img-fluid rounded-start" alt="..."
                                            height="200px" width="200px">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="/assets/yellow_book.png" class="img-fluid rounded-start" alt="..."
                                            height="200px" width="200px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/city_of_secrets.png" class="img-fluid rounded-start" alt="..."
                                            height="200px" width="200px">
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"
                                    style="color: #003060"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title">Title: <span>The Pioneers</span></h5>
                            <p class="card-text">Author: <span>Pedro Penduko</span></p>
                            <p class="card-text">Edition: <span>1st Edition</span></p>
                            <p class="card-text">Condition: <span>Good</span></p>
                            <p class="card-text">Description: <span>This is a sample description.</span></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title">ISBN: <span>124154238778</span></h5>
                            <p class="card-text">Genre: <span>Self-help</span></p>
                            <p class="card-text">Format: <span>Paperback</span></p>
                            <p class="card-text">Exchange Preferences: <span>This is a sample exchange
                                    preferences.</span></p>

                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-end mt-3 mb-3">
                        <div class="button-group">
                            <button id="arrange_shipment" type="button" class="btn btn-sm arrange-button"
                                data-bs-toggle="modal" onclick="viewShipping" data-bs-target="#shipping-details">View
                                Details</button>
                            <a class="btn btn-sm receive-button" data-bs-toggle="modal"
                            data-bs-target="#rate-review" href="">Post Rating and Review</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
        $loopCount = 0;
        @endphp
        @foreach ($orders as $order)
        @foreach ($order->items as $item)
        @if ($item->order_status == 'received')
        <div class="order-cart">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    @if ($item->book->user->type == 'Bookseller')
                    <a class="seller-name"
                        href="/userlistings/{{ $order->user_id }}"><span>{{ $item->book->user->business_name }}</span></a>
                    @else
                    <a class="seller-name"
                        href="/userlistings/{{ $order->user_id }}"><span>{{ $item->book->user->first_name . ' ' . $item->book->user->last_name }}</span></a>
                    @endif
                </div>
                <span class="order-text me-5 mt-0">Delivered</span>
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <div class="left-section">
                        <img src="{{ asset('/images/books/' . $item->book->book_photo) }}" alt="book" width="80px"
                            height="110px">
                        <div class="book-info">
                            <p class="mb-0 book-title">{{ $item->book->title }}</p>
                            <p class="mb-0 fw-bold interaction-type" id="interaction-type">
                                {{ $item->book->status }}</p>
                            <p class="mb-0 payment-mode">{{ $order->payment_method }}</p>
                            <button type="button" class="fw-bold p-0 post-btn text-start mb-0" data-bs-toggle="modal"
                                data-bs-target="#track-delivery" style="color:#003060"
                                onclick="trackOrder({{ $item->id }})">Track
                                Order<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            <p id="track_{{ $item->id }}" class="d-none">{{ $item->tracking_number }}
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="book-price">
                            <p class="product-price">₱{{ $item->book->price }}</p>
                            <p class="text-total">Shipping Fee:<span class="product-total">₱130</span>
                            </p> <br>
                            <p class="text-total fw-bold">Total Payment:<span
                                    class="product-total fw-bold">₱{{ $item->book->price + 130 }}</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="order-details mt-0">
                    <div class="order-message">
                        @php
                        $loopFlag = false;
                        $rate_id = 0;

                        if ($item->ratedItem->count() > 0) {
                        foreach ($item->ratedItem as $review) {
                        if ($review->item_id == $item->id && $review->user_id == session('id') && $loopFlag == false) {
                        $loopFlag = true;
                        $rate_id = $review->id;
                        }
                        }
                        }
                        @endphp
                        @if ($loopFlag)
                        <button type="button" class="post-btn-delivered" data-bs-toggle="modal"
                            data-bs-target="#rate-review" onclick="editRating({{ $review->id }}, {{ $item->id }})">Edit
                            Rating and Review</button>
                        @else
                        <button type="button" class="post-btn-delivered" data-bs-toggle="modal"
                            data-bs-target="#rate-review"
                            onclick="ratingReview({{ $item->book->user->id }}, '{{ $item->book->status }}', {{ $item->id }})">Post
                            Rating and Review</button>
                        @endif
                    </div>
                    <div class="button-group">
                        <a href="/messages" type="button" class="btn btn-sm contact-button">Contact
                            Seller</a>
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
        <h1 class="mt-2 text-center fw-bold" style="color: #E55B13; font-size: 20px;">Nothing received yet</h1>
        @endif

        <!-- Rate and Review Modal -->
        <div class="modal fade" id="rate-review" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: #003060;">Rate and Review
                            Lister</h1>
                        <button type="button" id="close-btn" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="customer-details">
                                    <img id="user_img" src="../assets/nestine.png" alt="seller image"
                                        class="circle-picture">
                                    <div class="name-interaction">
                                        <p id="user_name">Nestine Nicole Navarro</p>
                                        <div class="rate">
                                            <i id="one-star" class="fa fa-star-o" style="cursor: pointer;"
                                                aria-hidden="true"></i>
                                            <i id="two-star" class="fa fa-star-o" style="cursor: pointer;"
                                                aria-hidden="true"></i>
                                            <i id="three-star" class="fa fa-star-o" style="cursor: pointer;"
                                                aria-hidden="true"></i>
                                            <i id="four-star" class="fa fa-star-o" style="cursor: pointer;"
                                                aria-hidden="true"></i>
                                            <i id="five-star" class="fa fa-star-o" style="cursor: pointer;"
                                                aria-hidden="true"></i>
                                        </div>
                                        {{-- <span id="interaction-type" class="fw-bold interaction-drpdwn">Interaction
                                            Type</span> --}}
                                        {{-- <div class="dropdown interaction-drpdwn">
                                            <button class="btn dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Interaction Type
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><button class="dropdown-item" type="button">Sale</button></li>
                                                <li><button class="dropdown-item" type="button">Exchange</button>
                                                </li>
                                                <li><button class="dropdown-item" type="button">Lent</button></li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-4 d-flex m-0 justify-content-end">
                                <div class="rate">
                                    <i id="one-star" class="fa fa-star-o" style="cursor: pointer;"
                                        aria-hidden="true"></i>
                                    <i id="two-star" class="fa fa-star-o" style="cursor: pointer;"
                                        aria-hidden="true"></i>
                                    <i id="three-star" class="fa fa-star-o" style="cursor: pointer;"
                                        aria-hidden="true"></i>
                                    <i id="four-star" class="fa fa-star-o" style="cursor: pointer;"
                                        aria-hidden="true"></i>
                                    <i id="five-star" class="fa fa-star-o" style="cursor: pointer;"
                                        aria-hidden="true"></i>
                                </div>
                            </div> --}}
                            <div class="review-details">
                                <span id="item-id" hidden></span>
                                <p>Accuracy of Condition:
                                    {{-- <span>10/10</span> --}}
                                    <select class="btn" name="" id="condition-accuracy" required>
                                        {{-- <option >/10</option> --}}
                                        <option value="1/10">1/10</option>
                                        <option value="2/10">2/10</option>
                                        <option value="3/10">3/10</option>
                                        <option value="4/10">4/10</option>
                                        <option value="5/10">5/10</option>
                                        <option value="6/10">6/10</option>
                                        <option value="7/10">7/10</option>
                                        <option value="8/10">8/10</option>
                                        <option value="9/10">9/10</option>
                                        <option value="10/10">10/10</option>
                                    </select>
                                </p>
                                <p>Accuracy of Description:
                                    {{-- <span>10/10</span> --}}
                                    <select class="btn" name="" id="condition-description" required>
                                        {{-- <option >/10</option> --}}
                                        <option value="1/10">1/10</option>
                                        <option value="2/10">2/10</option>
                                        <option value="3/10">3/10</option>
                                        <option value="4/10">4/10</option>
                                        <option value="5/10">5/10</option>
                                        <option value="6/10">6/10</option>
                                        <option value="7/10">7/10</option>
                                        <option value="8/10">8/10</option>
                                        <option value="9/10">9/10</option>
                                        <option value="10/10">10/10</option>
                                    </select>
                                </p>
                                <p>Interaction:
                                    {{-- <span>10/10</span> --}}
                                    <select class="btn" name="" id="interaction" required>
                                        {{-- <option >/10</option> --}}
                                        <option value="1/10">1/10</option>
                                        <option value="2/10">2/10</option>
                                        <option value="3/10">3/10</option>
                                        <option value="4/10">4/10</option>
                                        <option value="5/10">5/10</option>
                                        <option value="6/10">6/10</option>
                                        <option value="7/10">7/10</option>
                                        <option value="8/10">8/10</option>
                                        <option value="9/10">9/10</option>
                                        <option value="10/10">10/10</option>
                                    </select>
                                </p>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description:</label>
                                    <textarea class="form-control" id="description" rows="5"
                                        placeholder="Enter your text here..." required></textarea>
                                </div>
                                </p>
                                <p>Photo:
                                    <div class="image-container">
                                        <div class="image-holder">
                                            <input id="first-img" type="file" accept="image/*" class="d-none" required>
                                            <label for="first-img"><i id="first-plus" class="fa fa-plus"
                                                    aria-hidden="true" style="cursor: pointer;"><img src=""
                                                        id="one-image" alt=""></i></label>
                                        </div>
                                        <div class="image-holder">
                                            <input id="second-img" type="file" accept="image/*" class="d-none">
                                            <label for="second-img"><i id="second-plus" class="fa fa-plus"
                                                    aria-hidden="true" style="cursor: pointer;"><img src=""
                                                        id="two-image" alt=""></i></label>
                                        </div>
                                        <div class="image-holder">
                                            <input id="third-img" type="file" accept="image/*" class="d-none">
                                            <label for="third-img"><i id="three-plus" class="fa fa-plus"
                                                    aria-hidden="true" style="cursor: pointer;"><img src=""
                                                        id="three-image" alt=""></i></label>
                                        </div>
                                        <div class="image-holder">
                                            <input id="fourth-img" type="file" accept="image/*" class="d-none">
                                            <label for="fourth-img"><i id="four-plus" class="fa fa-plus"
                                                    aria-hidden="true" style="cursor: pointer;"><img src=""
                                                        id="four-image" alt=""></i></label>
                                        </div>
                                        <div class="image-holder">
                                            <input id="fifth-img" type="file" accept="image/*" class="d-none">
                                            <label for="fifth-img"><i id="five-plus" class="fa fa-plus"
                                                    aria-hidden="true" style="cursor: pointer;"><img src=""
                                                        id="five-image" alt=""></i></label>
                                        </div>
                                    </div>
                                </p>
                                <div class="col-4 d-flex justify-content-between show-text">
                                    <p>Show name on your rating/review</p>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="user-switch"
                                            value="true">
                                    </div>
                                </div>
                                <p class="username-text">Your name will be shown as <span id="username">Nestine Navarro</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" id="submit-btn" class="btn submit-button">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tracking Modal --}}
        <div class="modal fade" id="track-delivery" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #003060;">Tracking My
                            Purchase
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                            delivered</span>
                                                        <span id="modal_tracking"
                                                            class="text-muted small tracking-text"></span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex flex-row justify-content-between align-items-center align-content-center">
                                                    {{-- <span id="first_track{{ $item->id }}" class="dot"></span> --}}
                                                    {{-- <hr class="flex-fill track-line"><span
                                                        id="second_track{{ $item->id }}" class="dot"></span>
                                                    <hr class="flex-fill track-line"><span
                                                        id="fourth_track{{ $item->id }}" class="dot"></span>
                                                    <hr class="flex-fill track-line"><span
                                                        id="fifth_track{{ $item->id }}"
                                                        class="d-flex justify-content-center align-items-center big-dot dot"><i
                                                            class="fa fa-check text-white"></i></span> --}}
                                                </div>
                                                <div class="d-flex flex-row justify-content-between align-items-center">
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

        {{-- toast --}}
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="message" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="../assets/Book_Logo.png" class="rouxunded me-2" alt="...">
                    <strong class="me-auto"></strong>
                    <small>1 min ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>

                <div id="toast-message" class="toast-body fw-bold text-success">
                    {{ 'test' }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Shipping Details Modal -->
<div class="modal fade" id="shipping-details" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-print-none">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Transaction Details</h1>
            </div>
            <div class="modal-body d-print-block">
                <div class="container mt-5 mb-5">
                    <div class="d-flex justify-content-center row">
                        <div class="col-md-10">
                            <div class="receipt bg-white p-3 rounded"><img src="../assets/Book_Logo.png" width="120">
                                {{-- <h4 class="mt-2 mb-3">Your order is confirmed!</h4> --}}
                                {{-- <h6 class="name">Hello John,</h6><span class="fs-12 text-black-50">your order has been confirmed and will be shipped in two days</span> --}}
                                <hr>
                                <div class="d-flex flex-row justify-content-between align-items-center order-details">
                                    <div><span class="d-block fs-12">Approved Request Date</span><span
                                            id="detail-order-date" class="font-weight-bold">12 March
                                            2020</span></div>
                                    <div><span class="d-block fs-12">Transaction number</span><span
                                            id="detail-order-number" class="font-weight-bold">TRA44434324</span>
                                    </div>
                                    <div><span class="d-block fs-12">Request Date</span><span id="detail-payment-method"
                                            class="font-weight-bold">03 April
                                            2024</span></div>
                                    <div><span class="d-block fs-12">Shipping Address</span><span
                                            id="detail-shipping-address"
                                            class="font-weight-bold shipping-address-text">Bagacay,
                                            Tacloban</span></div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center product-details">
                                    <div class="d-flex flex-row product-name-image">
                                        <div class="d-flex flex-column justify-content-between ml-2">
                                            <div>
                                                <h6 style="color:#E55B13;">My Book - Outgoing book</h6>
                                                <span id="detail-title" class="d-block fw-bold p-name">City Limits</span>
                                                <span id="detail-isbn" class="fs-12">ISBN:
                                                    65342688564324</span><br>
                                                <span id="detail-isbn" class="fs-12">Author: Marx
                                                    Hinton</span><br>
                                                <span id="detail-isbn" class="fs-12">Genre: Self-help</span><br>
                                                <span id="detail-isbn" class="fs-12">Edition: 1st
                                                    Edition</span><br>
                                                <span id="detail-isbn" class="fs-12">Condition: New</span><br>
                                                <span id="detail-isbn" class="fs-12">Exchange Method Preference:
                                                    Meetup</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h5 id="detail-price">Paperback</h5>
                                    </div>
                                </div>
                                <hr>
                                <div
                                    class="d-flex flex-row justify-content-between align-items-center order-details">
                                    {{-- <div><span class="d-block fw-bold fs-12">Lister Name</span><span
                                            id="detail-order-date" style="color: rgb(111, 185, 219)">Marie
                                            Penduko</span>
                                    </div>
                                    <div><span class="d-block fs-12">Contact number</span><span
                                            id="detail-shipping-address"
                                            class="font-weight-bold shipping-address-text">09491229441</span>
                                    </div> --}}
                                    <div><span class="d-block fw-bold fs-12">Requester Name</span><span
                                            id="detail-payment-method" class="font-weight-bold" style="color: rgb(111, 185, 219)">Nestine
                                            Navarro</span></div>
                                    <div><span class="d-block fs-12">Contact Number</span><span
                                            id="detail-shipping-address"
                                            class="font-weight-bold shipping-address-text">09054173103</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center product-details">
                                    <div class="d-flex flex-row product-name-image">
                                        <div class="d-flex flex-column justify-content-between ml-2">
                                            <div>
                                                <h6 style="color:#E55B13;">Lister Book - Incoming book</h6>
                                                <span id="detail-title" class="d-block fw-bold p-name">The
                                                    Pioneers</span>
                                                <span id="detail-isbn" class="fs-12">ISBN:
                                                    65342688564324</span><br>
                                                <span id="detail-isbn" class="fs-12">Author: Marx
                                                    Hinton</span><br>
                                                <span id="detail-isbn" class="fs-12">Genre: Self-help</span><br>
                                                <span id="detail-isbn" class="fs-12">Edition: 1st
                                                    Edition</span><br>
                                                <span id="detail-isbn" class="fs-12">Condition: New</span><br>
                                                <span id="detail-isbn" class="fs-12">Exchange Method Preference:
                                                    Meetup</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h5 id="detail-price">Paperback</h5>
                                    </div>
                                </div>
                                <hr>
                                <div
                                    class="d-flex flex-row justify-content-between align-items-center order-details">
                                    <div><span class="d-block fs-12">Lister Name</span><span
                                            id="detail-order-date" style="color: rgb(111, 185, 219)">Marie Penduko</span>
                                    </div>
                                    <div><span class="d-block fs-12">Contact number</span><span
                                            id="detail-shipping-address"
                                            class="font-weight-bold shipping-address-text">09491229441</span>
                                    </div>
                                    {{-- <div><span class="d-block fs-12">Requester Name</span><span
                                            id="detail-payment-method" class="font-weight-bold" style="color: rgb(111, 185, 219)">Nestine
                                            Navarro</span></div>
                                    <div><span class="d-block fs-12">Contact Number</span><span
                                            id="detail-shipping-address"
                                            class="font-weight-bold shipping-address-text">09054173103</span>
                                    </div> --}}
                                </div>
                                <hr>
                                {{-- <div class="mt-5 amount row">
                                <div class="d-flex justify-content-center col-md-6"><img id="detail-barcode"
                                        src="../assets/tracking.jfif" width="250" height="100">
                                </div> --}}
                                {{-- <div class="col-md-6">
                                    <div class="billing">
                                        <div class="d-flex justify-content-between">
                                            <span>Subtotal</span><span id="detail-subtotal"
                                                class="font-weight-bold">₱100</span>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2"><span>Shipping
                                                fee</span><span id="detail-shipping-fee"
                                                class="font-weight-bold">₱130</span></div>
                                        <hr>
                                        <div class="d-flex justify-content-between mt-1"><span
                                                class="font-weight-bold">Total</span>
                                            <span id="detail-total"
                                                class="font-weight-bold shipping-address-text">₱140</span>
                                        </div>
                                    </div>
                                </div> --}}
                            </div><span class="d-block">Complete Address</span><span id="detail-address"
                                class="font-weight-bold shipping-address-text">Blk 33 Lot 52 Bagacay,
                                Tacloban City</span>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center footer">
                                <div class="thanks"><span class="d-block font-weight-bold">Thanks for
                                        sharing</span><span>BookRedux team</span></div>
                                {{-- <div class="d-flex flex-column justify-content-end align-items-end"><span class="d-block font-weight-bold">Need Help?</span><span>Call - 974493933</span></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-print-none">
                <button type="button" class="btn btn-secondary close-button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary hidden-print save-button" onclick="myFunction()"><span
                        class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
                {{-- <button type="button" class="btn save-button">Update</button> --}}
            </div>
        </div>
    </div>
</div>
</div>

@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])

<script>
    const message = bootstrap.Toast.getOrCreateInstance(document.getElementById('message'));
    const trackOrder = (id) => {
        document.getElementById('modal_tracking').textContent =
            `Tracking Number: ${document.getElementById(`track_${id}`).textContent}`;
    }
    var rate_val = 0;
    var one_S = document.getElementById('one-star');
    var two_S = document.getElementById('two-star');
    var three_S = document.getElementById('three-star');
    var four_S = document.getElementById('four-star');
    var five_S = document.getElementById('five-star');
    var first_img = document.getElementById('first-img');
    var second_img = document.getElementById('second-img');
    var third_img = document.getElementById('third-img');
    var fourth_img = document.getElementById('fourth-img');
    var fifth_img = document.getElementById('fifth-img');
    var submit_btn = document.getElementById('submit-btn');
    var accu_cond = document.getElementById('condition-accuracy');
    var accu_desc = document.getElementById('condition-description');
    var interaction = document.getElementById('interaction');
    var description = document.getElementById('description');
    var check_username = document.getElementById('user-switch');
    var close_btn = document.getElementById('close-btn');
    first_img.addEventListener('change', () => {
        var img = document.getElementById('one-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('first-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });
    second_img.addEventListener('change', () => {
        var img = document.getElementById('two-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('second-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });
    third_img.addEventListener('change', () => {
        var img = document.getElementById('three-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('three-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });
    fourth_img.addEventListener('change', () => {
        var img = document.getElementById('four-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('four-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });
    fifth_img.addEventListener('change', () => {
        var img = document.getElementById('five-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('five-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });
    one_S.addEventListener('click', () => {
        star(1);
        rate_val = 1;
    });
    two_S.addEventListener('click', () => {
        star(2);
        rate_val = 2;
    });
    three_S.addEventListener('click', () => {
        star(3);
        rate_val = 3;
    });
    four_S.addEventListener('click', () => {
        star(4);
        rate_val = 4;
    });
    five_S.addEventListener('click', () => {
        star(5);
        rate_val = 5;
    });

    function ratingReview(user_id, type, item_id) {
        submit_btn.disabled = false;
        first_img.value = '';
        second_img.value = '';
        third_img.value = '';
        fourth_img.value = '';
        fifth_img.value = '';
        document.getElementById('one-image').src = '';
        document.getElementById('two-image').src = '';
        document.getElementById('three-image').src = '';
        document.getElementById('four-image').src = '';
        document.getElementById('five-image').src = '';
        document.getElementById('one-image').style.width = '0px';
        document.getElementById('two-image').style.width = '0px';
        document.getElementById('three-image').style.width = '0px';
        document.getElementById('four-image').style.width = '0px';
        document.getElementById('five-image').style.width = '0px';
        document.getElementById('one-image').style.height = '0px';
        document.getElementById('two-image').style.height = '0px';
        document.getElementById('three-image').style.height = '0px';
        document.getElementById('four-image').style.height = '0px';
        document.getElementById('five-image').style.height = '0px';
        document.getElementById('first-plus').className = 'fa fa-plus';
        document.getElementById('second-plus').className = 'fa fa-plus';
        document.getElementById('three-plus').className = 'fa fa-plus';
        document.getElementById('four-plus').className = 'fa fa-plus';
        document.getElementById('five-plus').className = 'fa fa-plus';
        const request = {
            method: 'GET'
        };
        fetch('/getuser/' + user_id, request)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                if (data.type == 'Bookseller') {
                    document.getElementById('user_img').src = 'images/profile_photos/' + data.profile_photo;
                    document.getElementById('user_name').textContent = data.business_name;
                    // document.getElementById('username').textContent = data.owner_name;
                } else {
                    document.getElementById('user_img').src = 'images/profile_photos/' + data.profile_photo;
                    document.getElementById('user_name').textContent = data.first_name + ' ' + data.last_name;
                    document.getElementById('username').textContent = data.username;
                }
                document.getElementById('interaction-type').textContent = type;
                document.getElementById('item-id').textContent = item_id;
            })
            .catch(error => console.error(error));
        submit_btn.id = 'submit-btn';
        document.getElementById('submit-btn').textContent = 'Submit';
        document.getElementById('submit-btn').addEventListener('click', submitBtn);
    }
    var id_edit_btn = 0;

    function editRating(id, item_id) {
        submit_btn.disabled = false;
        var review_id = 0;
        const request = {
            method: 'GET'
        };
        fetch('/getrating/' + id, request)
            .then(response => response.json())
            .then(data => {
                // console.log(data);
                review_id = data.id;
                star(parseInt(data.rate_value));
                rate_val = data.rate_value;
                document.getElementById('user_img').src = 'images/profile_photos/' + data.item.book.user
                    .profile_photo;
                if (data.item.book.user.type == 'Bookseller') {
                    document.getElementById('user_name').textContent = data.item.book.user.business_name;
                } else {
                    document.getElementById('user_name').textContent = data.item.book.user.first_name + ' ' + data
                        .item.book.user.last_name;
                }
                document.getElementById('username').textContent = data.item.book.user.username;
                document.getElementById('interaction-type').textContent = data.item.book.status;
                document.getElementById('item-id').textContent = item_id;
                accu_cond.value = data.condition_accuracy;
                accu_desc.value = data.description_accuracy;
                interaction.value = data.interaction;
                description.value = data.description;
                if (data.first_img != undefined) {
                    document.getElementById('one-image').src = '/images/rate_images/' + data.first_img;
                    document.getElementById('first-plus').className = 'fa p-0';
                    document.getElementById('one-image').style.width = '60px';
                    document.getElementById('one-image').style.height = '60px';
                }
                if (data.second_img != undefined) {
                    document.getElementById('two-image').src = '/images/rate_images/' + data.second_img;
                    document.getElementById('second-plus').className = 'fa p-0';
                    document.getElementById('two-image').style.width = '60px';
                    document.getElementById('two-image').style.height = '60px';
                }
                if (data.third_img != undefined) {
                    document.getElementById('three-image').src = '/images/rate_images/' + data.third_img;
                    document.getElementById('three-plus').className = 'fa p-0';
                    document.getElementById('three-image').style.width = '60px';
                    document.getElementById('three-image').style.height = '60px';
                }
                if (data.fourth_img != undefined) {
                    document.getElementById('four-image').src = '/images/rate_images/' + data.fourth_img;
                    document.getElementById('four-plus').className = 'fa p-0';
                    document.getElementById('four-image').style.width = '60px';
                    document.getElementById('four-image').style.height = '60px';
                }
                if (data.fifth_img != undefined) {
                    document.getElementById('five-image').src = '/images/rate_images/' + data.fifth_img;
                    document.getElementById('five-plus').className = 'fa p-0';
                    document.getElementById('five-image').style.width = '60px';
                    document.getElementById('five-image').style.height = '60px';
                    alert(data.description_accuracy)
                }
            })
            .catch(err => console.error(err));
        submit_btn.id = 'edit-btn';
        document.getElementById('edit-btn').textContent = 'Edit';
        id_edit_btn = id;
        document.getElementById('edit-btn').addEventListener('click', editBtn);
    }

    function submitBtn() {
        submit();
    }

    function editBtn() {
        edit(id_edit_btn);
    }
    close_btn.addEventListener('click', () => {
        if (document.getElementById('submit-btn') == null) {
            document.getElementById('edit-btn').removeEventListener('click', editBtn);
            star(0);
            accu_cond.value = '1/10';
            accu_desc.value = '1/10';
            interaction.value = '1/10';
            description.value = '';
        } else {
            document.getElementById('submit-btn').removeEventListener('click', submitBtn);
            star(0);
            star(0);
            accu_cond.value = '1/10';
            accu_desc.value = '1/10';
            interaction.value = '1/10';
            description.value = '';
        }
    });

    function submit() {
        document.getElementById('submit-btn').disabled = true;
        var formData = new FormData();
        formData.append('item_id', document.getElementById('item-id').textContent);
        formData.append('user_id', {
            {
                session('id')
            }
        });
        formData.append('rate_value', rate_val);
        formData.append('condition_accuracy', accu_cond.value);
        formData.append('description_accuracy', accu_desc.value);
        formData.append('interaction', interaction.value);
        formData.append('description', description.value);
        formData.append('display_username', check_username.checked);
        if (first_img.files.length > 0) {
            formData.append('first_img', first_img.files[0]);
        }
        if (second_img.files.length > 0) {
            formData.append('second_img', second_img.files[0]);
        }
        if (third_img.files.length > 0) {
            formData.append('third_img', third_img.files[0]);
        }
        if (fourth_img.files.length > 0) {
            formData.append('fourth_img', fourth_img.files[0]);
        }
        if (fifth_img.files.length > 0) {
            formData.append('fifth_img', fifth_img.files[0]);
        }
        // console.log(formData);
        fetch('/ratepost', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    // 'Content-type': 'application/json'
                },
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('toast-message').textContent = data.response;
                message.show()
                setTimeout(() => {
                    window.location.reload();
                }, 800);
            })
            .catch(error => console.log(error));
    }

    function edit(id) {
        document.getElementById('edit-btn').disabled = true;
        var formData = new FormData();
        formData.append('item_id', document.getElementById('item-id').textContent);
        formData.append('user_id', {
            {
                session('id')
            }
        });
        formData.append('rate_value', rate_val);
        formData.append('condition_accuracy', accu_cond.value);
        formData.append('description_accuracy', accu_desc.value);
        formData.append('interaction', interaction.value);
        formData.append('description', description.value);
        formData.append('display_username', check_username.checked);
        if (first_img.files.length > 0) {
            formData.append('first_img', first_img.files[0]);
        }
        if (second_img.files.length > 0) {
            formData.append('second_img', second_img.files[0]);
        }
        if (third_img.files.length > 0) {
            formData.append('third_img', third_img.files[0]);
        }
        if (fourth_img.files.length > 0) {
            formData.append('fourth_img', fourth_img.files[0]);
        }
        if (fifth_img.files.length > 0) {
            formData.append('fifth_img', fifth_img.files[0]);
        }
        // console.log(formData);
        fetch('/updaterate/' + id, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    // 'Content-type': 'application/json'
                },
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('toast-message').textContent = data.response;
                message.show()
                setTimeout(() => {
                    window.location.reload();
                }, 800);
            })
            .catch(error => console.log(error));
    }
    // });
    function star(rate) {
        if (rate == 0) {
            one_S.className = 'fa fa-star-o';
            two_S.className = 'fa fa-star-o';
            three_S.className = 'fa fa-star-o';
            four_S.className = 'fa fa-star-o';
            five_S.className = 'fa fa-star-o';
        } else if (rate == 1) {
            one_S.className = 'fa fa-star';
            two_S.className = 'fa fa-star-o';
            three_S.className = 'fa fa-star-o';
            four_S.className = 'fa fa-star-o';
            five_S.className = 'fa fa-star-o';
        } else if (rate == 2) {
            one_S.className = 'fa fa-star';
            two_S.className = 'fa fa-star';
            three_S.className = 'fa fa-star-o';
            four_S.className = 'fa fa-star-o';
            five_S.className = 'fa fa-star-o';
        } else if (rate == 3) {
            one_S.className = 'fa fa-star';
            two_S.className = 'fa fa-star';
            three_S.className = 'fa fa-star';
            four_S.className = 'fa fa-star-o';
            five_S.className = 'fa fa-star-o';
        } else if (rate == 4) {
            one_S.className = 'fa fa-star';
            two_S.className = 'fa fa-star';
            three_S.className = 'fa fa-star';
            four_S.className = 'fa fa-star';
            five_S.className = 'fa fa-star-o';
        } else if (rate == 5) {
            one_S.className = 'fa fa-star';
            two_S.className = 'fa fa-star';
            three_S.className = 'fa fa-star';
            four_S.className = 'fa fa-star';
            five_S.className = 'fa fa-star';
        }
    }
</script>