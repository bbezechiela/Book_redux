@include('partials.__header', [
'title' => 'Delivered | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/orders-style.css',
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
                                {{-- <li><a class="dropdown-item" href="/changepassword">Change Password</a></li> --}}
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </ul>
        <div class="card-body rating-details">
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/orders">Exchange Request</a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/toreceiveLister">To
                    Receive</a>
                <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;" aria-current="page"
                    href="/delivered">Completed</a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/dropped">Dropped</a>
                {{-- <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/refund">Refund</a> --}}
            </nav>
        </div>
        {{-- CARD IS FOR PHYSICAL EXCHANGE --}}
        <div class="order-cart d-print-none">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href=""><span>Nestine Navarro</span></a>
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
                            <h5 class="card-title">Title: <span>City Limits</span></h5>
                            <p class="card-text">Author: <span>Pedro Penduko</span></p>
                            <p class="card-text">Edition: <span>1st Edition</span></p>
                            <p class="card-text">Condition: <span>Good</span></p>
                            <p class="card-text">Description: <span>This is a sample description of the book I want to
                                    offer for exchange.</span></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title">ISBN: <span>124154238778</span></h5>
                            <p class="card-text">Genre: <span>Self-help</span></p>
                            <p class="card-text">Format: <span>Paperback</span></p>
                            <p class="card-text">Exchange Method Preference: <span>Delivery</span></p>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-end mt-3 mb-3">
                        
                        <div>
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
 {{-- CARD IS FOR PHYSICAL EXCHANGE --}}


         {{-- CARD IS FOR DIGITAL EXCHANGE --}}
         <div class="order-cart d-print-none">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href=""><span>Nestine Navarro</span></a>
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
                            <h5 class="card-title">Title: <span>City Limits</span></h5>
                            <p class="card-text">Author: <span>Pedro Penduko</span></p>
                            <p class="card-text">Edition: <span>1st Edition</span></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title">ISBN: <span>124154238778</span></h5>
                            <p class="card-text">Genre: <span>Self-help</span></p>
                            <p class="card-text">Description: <span>This is a sample description of the book I want to
                                offer for exchange.</span></p>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-end mt-3 mb-3">
                        
                        <div>
                            <button id="arrange_shipment" type="button" class="btn btn-sm arrange-button"
                                data-bs-toggle="modal" onclick="viewShipping" data-bs-target="#book-details">View
                                Details</button>
                            <a class="btn btn-sm receive-button" data-bs-toggle="modal"
                            data-bs-target="#rate-review" href="">Post Rating and Review</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 {{-- CARD IS FOR DIGITAL EXCHANGE --}}
        @php
        $loopCount = 0;
        @endphp
        @foreach ($orders as $order)
        @foreach ($order->item as $item)
        @if ($item->order_status == 'received')
        <div class="order-cart">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name"
                        href="/userlistings/{{ $order->user_id }}"><span>{{ $item->order->user->first_name . ' ' . $item->order->user->last_name }}</span></a>
                </div>
                <span class="order-text me-5 mt-0">Delivered</span>
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <div class="left-section">
                        <img src="{{ asset('/images/books/' . $order->book_photo) }}" alt="book" width="80px"
                            height="110px">
                        <div class="book-info">
                            <p class="mb-0 book-title">{{ $order->title }}</p>
                            <p class="mb-0 book-qty">{{ $item->qty }} Qty</p>
                            <p class="mb-0 fw-bold interaction-type">{{ $order->status }}</p>
                            <p class="payment-mode">{{ $item->order->payment_method }}</p>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="book-price">
                            <p class="product-price">₱{{ $order->price }}</p>
                            <p class="text-total">Shipping Fee:<span class="product-total">₱130</span> <br>
                                <p class="text-total">Total Payment:<span
                                        class="product-total">₱{{ $order->price + 130 }}</span>
                                </p>
                        </div>
                    </div>
                </div>
                <div class="order-details">
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
                        <button type="button" class="post-btn" data-bs-toggle="modal" data-bs-target="#rate-review"
                            {{-- onclick="editRating({{ $review->id }}, {{ $item->id }})">Edit --}}
                            onclick="editRating({{ $rate_id }})">Edit
                            Rating and Review</button>
                        @else
                        <button type="button" class="post-btn" data-bs-toggle="modal" data-bs-target="#rate-review"
                            onclick="ratingReview({{ $item->order->user_id }}, '{{ $item->book->status }}', {{ $item->id }})">Post
                            Rating and Review</button>
                        @endif
                    </div>
                    <div class="button-group">
                        <a href="/messages" type="button" class="btn btn-sm contact-button">Contact Customer</a>
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
        <h1 class="mt-2 text-center fw-bold" style="color: #E55B13; font-size: 20px;">No completed orders</h1>
        @endif

        <!-- Rate and Review Modal -->
        <div class="modal fade" id="rate-review" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Rate and Review Requester</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="customer-details">
                                    <img src="../assets/eubert.png" id="user_img" alt="seller image"
                                        class="circle-picture">
                                    <div class="name-interaction">
                                        <p id="user_name">Marc Eubert Contado</p>
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
                                        {{-- <div class="dropdown">
                                            <button class="btn dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Interaction Type
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><button class="dropdown-item" type="button">Bought</button></li>
                                                <li><button class="dropdown-item" type="button">Exchange</button>
                                                </li>
                                                <li><button class="dropdown-item" type="button">Rent</button></li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="review-details">
                                <span id="review_id" hidden></span>
                                <span id="item-id" hidden></span>
                                <p>Accuracy of Claim:
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
                                        placeholder="Enter your text here..."></textarea>
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
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="username-switch">
                                    </div>
                                </div>
                                <p class="username-text">Your name will be shown as <span>Nestine Navarro</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" id="submit-btn" class="btn confirm-button">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rate and Review Modal -->
        {{-- <div class="modal fade" id="rental-period" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Rental Period Tracking</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="end-date" id="end-date" class="form-control"
                            placeholder="End Date" style="margin-bottom: 12px; color: #003060;">
                        <input type="text" name="start-date" id="start-date" class="form-control"
                            placeholder="Start Date" style="margin-bottom: 12px; color: #003060;">
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="Title" style="margin-bottom: 12px; color: #003060;">
                        <input type="text" name="rental-price" id="rental-price" class="form-control"
                            placeholder="Rental Price" style="margin-bottom: 12px; color: #003060;">
                        <input type="text" name="deposit" id="deposit" class="form-control"
                            placeholder="Security Deposit" style="margin-bottom: 12px; color: #003060;">
                        <input type="text" name="duration" id="duration" class="form-control"
                            placeholder="Duration" style="margin-bottom: 12px; color: #003060;">
                        <input type="text" name="customer-name" id="customer-name" class="form-control"
                            placeholder="Name" style="margin-bottom: 12px; color: #003060;">
                        <input type="text" name="contact" id="contact" class="form-control"
                            placeholder="Contact Number" style="margin-bottom: 12px; color: #003060;">
                        <input type="text" name="email" id="email" class="form-control"
                            placeholder="Email" style="margin-bottom: 12px; color: #003060;">
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn confirm-button">Submit</button>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- toast --}}
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="message" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="../assets/Book_Logo.png" class="rouxunded me-2" alt="...">
                    <strong class="me-auto"></strong>
                    <small>1 min ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>

                <div id="message-toast" class="toast-body fw-bold text-success">
                    {{ session('message') }}
                </div>

            </div>
        </div>

    </div>
</div>
 {{-- CARD IS FOR PHYSICAL EXCHANGE --}}
 <!-- Shipping Details Modal -->
 <div class="modal fade" id="shipping-details" tabindex="-1" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog modal-lg">
     <div class="modal-content">
         <div class="modal-header d-print-none">
             <h1 class="modal-title fs-5" id="exampleModalLabel">Transaction Details</h1>
         </div>
         <div class="modal-body d-print-block">
             <div class="container mt-5 mb-5">
                 <div class="d-flex justify-content-center row">
                     <div class="col-md-10">
                         <div class="receipt bg-white p-3 rounded"><img src="../assets/Book_Logo.png"
                                 width="120">
                             {{-- <h4 class="mt-2 mb-3">Your order is confirmed!</h4> --}}
                             {{-- <h6 class="name">Hello John,</h6><span class="fs-12 text-black-50">your order has been confirmed and will be shipped in two days</span> --}}
                             <hr>
                             <div
                                 class="d-flex flex-row justify-content-between align-items-center order-details">
                                 <div><span class="d-block fs-12">Approved Request Date</span><span
                                         id="detail-order-date" class="font-weight-bold">12 March
                                         2020</span></div>
                                 <div><span class="d-block fs-12">Transaction number</span><span
                                         id="detail-order-number" class="font-weight-bold">TRA44434324</span>
                                 </div>
                                 <div><span class="d-block fs-12">Request Date</span><span
                                         id="detail-payment-method" class="font-weight-bold">03 April
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
                                <div><span class="d-block fw-bold fs-12">Lister Name</span><span
                                        id="detail-order-date" style="color: rgb(111, 185, 219)">Marie
                                        Penduko</span>
                                </div>
                                <div><span class="d-block fs-12">Contact number</span><span
                                        id="detail-shipping-address"
                                        class="font-weight-bold shipping-address-text">09491229441</span>
                                </div>
                                {{-- <div><span class="d-block fs-12">Requester Name</span><span
                                        id="detail-payment-method" class="font-weight-bold">Nestine
                                        Navarro</span></div>
                                <div><span class="d-block fs-12">Contact Number</span><span
                                        id="detail-shipping-address"
                                        class="font-weight-bold shipping-address-text">09054173103</span>
                                </div> --}}
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center product-details">
                                <div class="d-flex flex-row product-name-image">
                                    <div class="d-flex flex-column justify-content-between ml-2">
                                        <div>
                                            <h6 style="color:#E55B13;">Requester Book - Incoming book</h6>
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
                                <div><span class="d-block fs-12">Requester Name</span><span
                                        id="detail-payment-method" class="font-weight-bold" style="color: rgb(111, 185, 219)">Nestine
                                        Navarro</span></div>
                                <div><span class="d-block fs-12">Contact Number</span><span
                                        id="detail-shipping-address"
                                        class="font-weight-bold shipping-address-text">09054173103</span>
                                </div>
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
             <button type="button" class="btn btn-secondary close-button"
                 data-bs-dismiss="modal">Close</button>
             <button class="btn btn-primary hidden-print save-button" onclick="myFunction()"><span
                     class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
             {{-- <button type="button" class="btn save-button">Update</button> --}}
         </div>
     </div>
 </div>
</div>
</div>
 {{-- CARD IS FOR PHYSICAL EXCHANGE --}}


 {{-- CARD IS FOR DIGITAL EXCHANGE --}}
 <!-- Book Details Modal -->
 <div class="modal fade" id="book-details" tabindex="-1" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog modal-xl">
     <div class="modal-content">
         <div class="modal-header d-print-none">
             <h1 class="modal-title fs-5" id="exampleModalLabel">Transaction Details</h1>
         </div>
         <div class="modal-body">
            <h5 style="color: #E55B13;">Transaction #: 784328432194</h5>
            <div class="details-container">
                <div class="seller-details-box">
                    <input type="text" class="d-none" id="item_id">
                    <label for="seller-details" class="form-label">Lister</label>
                    <input type="text" class="form-control" id="seller-fullname"
                        placeholder="Nestine Nicole Navarro"><br>
                    <label for="seller-details" class="form-label">Title: The Pioneers</label>
                    <div class="ExternalFiles">
                        <iframe src="/assets/TRANSACTION FORM.pdf" frameborder="0" height="400"
                            width="500"></iframe>
                    </div>
                </div>

                <div class="customer-details-box">
                    <label for="customer-details" class="form-label">Requester</label>
                    <input type="text" class="form-control" id="customer-fullname"
                        placeholder="Jennie BlackPink"><br>
                    <label for="seller-details" class="form-label">Title: City Limits</label>
                    <div class="ExternalFiles">
                        <iframe src="/assets/InfoSec_Module-1.pdf" frameborder="0" height="400"
                            width="500"></iframe>
                    </div>
                </div>
            </div>
         </div>
         <div class="modal-footer d-print-none">
             <button type="button" class="btn btn-secondary close-button"
                 data-bs-dismiss="modal">Close</button>
             <button class="btn btn-primary hidden-print save-button" onclick="myFunction()"><span
                     class="glyphicon glyphicon-print" aria-hidden="true"></span> Disallow Access</button>
             {{-- <button type="button" class="btn save-button">Update</button> --}}
         </div>
     </div>
 </div>
</div>
</div>
 {{-- CARD IS FOR DIGITAL EXCHANGE --}}
@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])

<script>
    const message = bootstrap.Toast.getOrCreateInstance(document.getElementById('message'));
    var first_img = document.getElementById('first-img');
    var second_img = document.getElementById('second-img');
    var third_img = document.getElementById('third-img');
    var fourth_img = document.getElementById('fourth-img');
    var fifth_img = document.getElementById('fifth-img');
    var one_S = document.getElementById('one-star');
    var two_S = document.getElementById('two-star');
    var three_S = document.getElementById('three-star');
    var four_S = document.getElementById('four-star');
    var five_S = document.getElementById('five-star');
    var submit_btn = document.getElementById('submit-btn');
    var description = document.getElementById('description');
    var username_radio = document.getElementById('username-switch');
    var rate_val = 0;
    var submit_btn_status = '';
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

    function editRating(id) {
        // alert(id);
        fetch('/getrating/' + id, {
                method: 'GET'
            })
            .then(response => response.json())
            .then(result => {
                console.log(result);
                document.getElementById('user_img').src = 'images/profile_photos/' + result.item.order.user
                    .profile_photo;
                if (result.item.order.user.type == 'Bookseller') {
                    document.getElementById('user_name').textContent = result.item.order.user.business_name;
                } else {
                    document.getElementById('user_name').textContent = result.item.order.user.first_name + ' ' +
                        result.item.order.user.last_name;
                }
                document.getElementById('review_id').textContent = result.id;
                star(result.rate_value);
                interaction.value = result.interaction;
                description.value = result.description;
                if (result.first_img != undefined) {
                    document.getElementById('one-image').src = '/images/rate_images/' + result.first_img;
                    document.getElementById('first-plus').className = 'fa p-0';
                    document.getElementById('one-image').style.width = '60px';
                    document.getElementById('one-image').style.height = '60px';
                }
                if (result.second_img != undefined) {
                    document.getElementById('two-image').src = '/images/rate_images/' + result.second_img;
                    document.getElementById('second-plus').className = 'fa p-0';
                    document.getElementById('two-image').style.width = '60px';
                    document.getElementById('two-image').style.height = '60px';
                }
                if (result.third_img != undefined) {
                    document.getElementById('three-image').src = '/images/rate_images/' + result.third_img;
                    document.getElementById('three-plus').className = 'fa p-0';
                    document.getElementById('three-image').style.width = '60px';
                    document.getElementById('three-image').style.height = '60px';
                }
                if (result.fourth_img != undefined) {
                    document.getElementById('four-image').src = '/images/rate_images/' + result.fourth_img;
                    document.getElementById('four-plus').className = 'fa p-0';
                    document.getElementById('four-image').style.width = '60px';
                    document.getElementById('four-image').style.height = '60px';
                }
                if (result.fifth_img != undefined) {
                    document.getElementById('five-image').src = '/images/rate_images/' + result.fifth_img;
                    document.getElementById('five-plus').className = 'fa p-0';
                    document.getElementById('five-image').style.width = '60px';
                    document.getElementById('five-image').style.height = '60px';
                }
            })
            .catch(error => console.error(error));
        submit_btn.textContent = 'Edit';
        submit_btn_status = 'Edit';
        // submit_btn.id = 'edit-btn';
        // document.getElementById('edit-btn').textContent = 'Edit';
        // document.getElementById('edit-btn').href = 'google.com';
        // alert(document.getElementById('edit-btn').href);
    }

    function ratingReview(user_id, type, item_id) {
        description.value = '';
        interaction.value = '1/10';
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
        star(0);
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
                    // document.getElementById('username').textContent = data.username;
                }
                // document.getElementById('interaction-type').textContent = type;
                document.getElementById('item-id').textContent = item_id;
            })
            .catch(error => console.error(error));
        submit_btn.textContent = 'Submit';
        submit_btn_status = 'Submit';
        // submit_btn.id = 'submit-btn';
        // document.getElementById('submit-btn').textContent = 'Submit';
        // document.getElementById('submit-btn').href = 'facebook.com';
        // alert(document.getElementById('submit-btn').href);
    }
    submit_btn.addEventListener('click', () => {
        if (submit_btn_status == 'Submit') {
            var formData = new FormData();
            formData.append('item_id', document.getElementById('item-id').textContent);
            formData.append('user_id', {
                {
                    session('id')
                }
            });
            formData.append('rate_value', rate_val);
            formData.append('interaction', interaction.value);
            formData.append('description', description.value);
            formData.append('display_username', username_radio.checked);
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
            fetch('/sellerpostrate', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                // .then(response => response.json())
                .then(response => {
                    console.log(response);
                    document.getElementById('message-toast').textContent = response.message;
                    message.show();
                    setTimeout(() => {
                        window.location.reload();
                    }, 800);
                })
                .catch(error => console.error(error));
        } else if (submit_btn_status == 'Edit') {
            var editFormData = new FormData();
            editFormData.append('id', document.getElementById('review_id').textContent);
            editFormData.append('user_id', {
                {
                    session('id')
                }
            });
            editFormData.append('rate_value', rate_val);
            editFormData.append('interaction', interaction.value);
            editFormData.append('description', description.value);
            editFormData.append('display_username', username_radio.checked);
            if (first_img.files.length > 0) {
                editFormData.append('first_img', first_img.files[0]);
            }
            if (second_img.files.length > 0) {
                editFormData.append('second_img', second_img.files[0]);
            }
            if (third_img.files.length > 0) {
                editFormData.append('third_img', third_img.files[0]);
            }
            if (fourth_img.files.length > 0) {
                editFormData.append('fourth_img', fourth_img.files[0]);
            }
            if (fifth_img.files.length > 0) {
                editFormData.append('fifth_img', fifth_img.files[0]);
            }
            fetch('/sellerupdaterate', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: editFormData
                })
                .then(response => response.json())
                .then(response => {
                    console.log(response);
                    document.getElementById('message-toast').textContent = response.message;
                    message.show();
                    setTimeout(() => {
                        window.location.reload();
                    }, 800);
                })
                .catch(error => console.error(error));
        }
    });
</script>