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
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a>
                    <a href="/notification"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a>
                    <a href="/myprofile"><button class="btn mx-1 p-0" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Profile">
                            <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="notification"
                                width="35" height="35" class="rounded-5" style="margin-right: 2em;">
                        </button></a>
                </div>
            </div>
        </ul>
        <div class="card-body rating-details">
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/orders">Orders</a>
                <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;" aria-current="page"
                    href="/delivered">Delivered</a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/dropped">Dropped</a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/refund">Refund</a>
            </nav>
        </div>
        <div class="order-cart">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href="#"><span>Jennie Blackpink</span></a>
                </div>
                <span class="order-text me-5 mt-0">Delivered</span>
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <div class="left-section">
                        <img src="../assets/city_of_secrets.png" alt="book" width="80px" height="110px">
                        <div class="book-info">
                            <p class="mb-0 book-title">City of Secrets</p>
                            <p class="mb-0 fw-bold interaction-type">Sale</p>
                            <p class="payment-mode">Cash on Delivery</p>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="book-price">
                            <p class="product-price">P144</p>
                            <p class="text-total">Total Payment:<span class="product-total">P194</span></p>
                        </div>
                    </div>
                </div>
                <div class="order-details">
                    <div class="order-message">
                        <button type="button" class="post-btn" data-bs-toggle="modal" data-bs-target="#rate-review">Post
                            Rating and Review</button>
                    </div>
                    <div class="button-group">
                        <button type="button" class="btn btn-primary btn-sm contact-button">Contact Customer</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-cart">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href="#"><span>Jennie Blackpink</span></a>
                </div>
                <span class="order-text me-5 mt-0">Delivered</span>
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <div class="left-section">
                        <img src="../assets/city_of_secrets.png" alt="book" width="80px" height="110px">
                        <div class="book-info">
                            <p class="mb-0 book-title">City of Secrets</p>
                            <p class="mb-0 fw-bold interaction-type">Sale</p>
                            <p class="payment-mode">Cash on Delivery</p>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="book-price">
                            <p class="product-price">P144</p>
                            <p class="text-total">Total Payment:<span class="product-total">P194</span></p>
                        </div>
                    </div>
                </div>
                <div class="order-details">
                    <div class="order-message">
                        <button type="button" class="post-btn" data-bs-toggle="modal" data-bs-target="#rate-review">Post
                            Rating and Review</button>
                    </div>
                    <div class="button-group">
                        <button type="button" class="btn btn-primary btn-sm contact-button">Contact Customer</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-cart">
            <div class="name-cart d-flex justify-content-between">
                <div>
                    <a class="seller-name" href="#"><span>Jennie Blackpink</span></a>
                </div>
                <span class="order-text me-5 mt-0">Delivered</span>
            </div>
            <div class="product-cart">
                <div class="book-details">
                    <div class="left-section">
                        <img src="../assets/city_of_secrets.png" alt="book" width="80px" height="110px">
                        <div class="book-info">
                            <p class="mb-0 book-title">City of Secrets</p>
                            <p class="mb-0 fw-bold interaction-type">Sale</p>
                            <p class="payment-mode">Cash on Delivery</p>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="book-price">
                            <p class="product-price">P144</p>
                            <p class="text-total">Total Payment:<span class="product-total">P194</span></p>
                        </div>
                    </div>
                </div>
                <div class="order-details">
                    <div class="order-message">
                        <button type="button" class="post-btn" data-bs-toggle="modal" data-bs-target="#rate-review">Post
                            Rating and Review</button>
                    </div>
                    <div class="button-group">
                        <button type="button" class="btn btn-primary btn-sm contact-button">Contact Customer</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rate and Review Modal -->
        <div class="modal fade" id="rate-review" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Rate and Review Customer</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="customer-details">
                                    <img src="../assets/nestine.png" alt="seller image" class="circle-picture">
                                    <div class="name-interaction">
                                        <p>Nestine Nicole Navarro</p>
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Interaction Type
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><button class="dropdown-item" type="button">Bought</button></li>
                                                <li><button class="dropdown-item" type="button">Exchange</button></li>
                                                <li><button class="dropdown-item" type="button">Rent</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 d-flex m-0 justify-content-end">
                                <div class="rate">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="review-details">
                                <p>Interaction:<span>10/10</span></p>
                                <div class="mb-3">
                                    <label for="exampleTextarea" class="form-label">Description:</label>
                                    <textarea class="form-control" id="exampleTextarea" rows="5"
                                        placeholder="Enter your text here..."></textarea>
                                </div>
                                </p>
                                <p>Photo:
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
                                <div class="col-4 d-flex justify-content-between show-text">
                                    <p>Show username on your rating/review</p>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                    </div>
                                </div>
                                <p class="username-text">Your username will be shown as <span>necxs</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-primary confirm-button">Submit</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])