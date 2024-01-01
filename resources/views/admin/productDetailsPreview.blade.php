@include('partials.__header', [
'title' => 'Product | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/singleProduct-style.css',
'aos_link' => '/aos-master/dist/aos.css',
])

<head>
</head>

<body>
    <div id="body-container" class="container-fluid px-0">
        @if ($book_id->status == 'Exchange')
        <div class="card mb-3 book-details mx-4">
            <div class="row g-0">
                <div class="col-md-4 p-5">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="{{ asset('images/books/' . $book_id->book_photo) }}"
                                        class="img-fluid mx-auto rounded d-block mx-auto" alt="product" width="300px"
                                        height="564px">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="{{ asset('images/interior_photo/' . $book_id->interior_photo) }}"
                                        class="img-fluid mx-auto rounded d-block mx-auto" alt="product" width="300px"
                                        height="564px">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/book_cover/' . $book_id->back_cover) }}"
                                        class="img-fluid mx-auto rounded d-block mx-auto" alt="product" width="300px"
                                        height="564px">
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
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book_id->title }}</h5>
                        <h6 class="card-title"><span style="color: #E55B13; font-weight: bold;"></span>
                            <span> For {{ $book_id->status }}
                                |</span> <span>{{ $book_id->genre }}</span>
                        </h6>
                        {{-- <p class="card-text">
                                    Shipping From <span style="font-weight: bold;">{{ $user_id->address }} to</span>
                        <span class="inline-dropdown">
                            <button class="btn dropdown-toggle places-button" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Catbalogan
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Sample 1</a></li>
                                <li><a class="dropdown-item" href="#">Sample 2</a></li>
                                <li><a class="dropdown-item" href="#">Sample 3</a></li>
                            </ul>
                        </span>
                        </p> --}}
                        {{-- <p class="card-text">Shipping Fee <span
                                            style="font-weight: bold;">₱{{ $book_id->price }}</span></p> --}}
                        <p class="card-text">Shipping Fee <span style="font-weight: bold;">₱103</span></p>
                        <p class="card-text">Author: <span class="fw-bold">{{ $book_id->author }}</span></p>
                        <p class="card-text">Edition: <span class="fw-bold">{{ $book_id->edition }}</span></p>
                        <div class="d-flex justify-content-start align-items-center mb-2">
                            <div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-center">
                                <p class="m-0" style="color: #003060;">Quantity: <span
                                        class="fw-bold">{{ $book_id->stock }} pieces available</span></p>
                                {{-- <button class="btn btn-link btn-minus px-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </button>
                                        <input id="form1" min="0" name="quantity" value="0" type="number"
                                            class="form-control form-control-mm" />
                                        <button class="btn btn-link btn-plus px-2"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                        <p class="card-text m-0" style="white-space: nowrap;">{{ $book_id->stock }}
                                pieces available</p> --}}
                            </div>
                        </div>
                        <p class="card-text">Language: <span class="fw-bold">{{ $book_id->language }}</span>
                        </p>
                        <p class="card-text">Condition: <span class="fw-bold">{{ $book_id->condition }}</span>
                        </p>
                        <p class="card-text">Product Description: <span
                                class="fw-bold">{{ $book_id->description }}</span></p>
                        <p class="card-text location-text"><i class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $user_id->address }}Bagacay, Tacloban</p>

                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="card mb-3 book-details mx-4">
            <div class="row g-0">
                <div class="col-md-4 p-5">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="{{ asset('images/books/' . $book_id->book_photo) }}"
                                    class="img-fluid mx-auto rounded d-block mx-auto" alt="product" width="300px"
                                    height="564px">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{ asset('images/interior_photo/' . $book_id->interior_photo) }}"
                                    class="img-fluid mx-auto rounded d-block mx-auto" alt="product" width="300px"
                                    height="564px">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/book_cover/' . $book_id->back_cover) }}"
                                    class="img-fluid mx-auto rounded d-block mx-auto" alt="product" width="300px"
                                    height="564px">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book_id->title }} <a href="" data-bs-toggle="modal"
                                data-bs-target="#report">Report</a></h5>
                        <h6 class="card-title"><span style="color: #E55B13; font-weight: bold;">₱{{ $book_id->price }}
                            </span>
                            <span>| For {{ $book_id->status }}
                                |</span> <span>{{ $book_id->genre }}</span>
                        </h6>
                        <p class="card-text">Shipping Fee <span style="font-weight: bold;">₱{{ $book_id->price }}</span>
                        </p>
                        <p class="card-text">Author: <span class="fw-bold">{{ $book_id->author }}</span></p>
                        <p class="card-text">Edition: <span class="fw-bold">{{ $book_id->edition }}</span>
                        </p>
                        <div class="d-flex justify-content-start align-items-center mb-2">
                            <div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-center">
                                <p class="m-0" style="color: #003060;">Quantity: <span
                                        class="fw-bold">{{ $book_id->stock }}
                                        pieces available</span></p>
                            </div>
                        </div>
                        <p class="card-text">Language: <span class="fw-bold">{{ $book_id->language }}</span>
                        </p>
                        <p class="card-text">Condition: <span class="fw-bold">{{ $book_id->condition }}</span>
                        </p>
                        <p class="card-text">Product Description: <span
                                class="fw-bold">{{ $book_id->description }}</span></p>
                        <p class="card-text"><small class="text-body-secondary">{{ $user_id->address }}</small>
                        </p>

                        @if ($book_id->unit == 'Added to Cart' && $book_id->user_id == session('id'))
                        <p class="fs-3 fw-bold text-success">Item added to Cart</p>
                        @else
                        <a href="/addtocart/{{ $book_id->id }}" class="btn cart-button"><i class="fa fa-cart-plus"
                                aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                        <a href="#" class="btn wishlist-button"><i class="fa fa-list-alt" aria-hidden="true"
                                style="margin-right: 7px"></i>Add to Wishlist</a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- ADD ELSE IF FOR RENT PRODUCT PAGE 
            DETAILS INCLUDE: 
                Shipping fee
                Photo
                Front
                Back
                Genre
                Condition
                Rental Price
                Security Deposit
                Title
                Author
                Edition
                Language
                Rental Duration
                Rental Terms and Condition
                Description --}}

        <div class="container text-center seller-details mx-4">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('images/profile_photos/' . $user_id->profile_photo) }}" alt="seller image"
                            class="circle-picture">
                        <div class="user-info">
                            <p>{{ $user_id->first_name . ' ' . $user_id->last_name }}</p>
                            <p>2K followers . 400 following</p>
                            <button class="message-button"><i class="fa fa-envelope"
                                    aria-hidden="true"></i>Message</button>
                            <a href="/userlistings"><button class="view-profile-button"><i class="fa fa-eye"
                                        aria-hidden="true"></i>View
                                    Profile</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ratings-review">
            <div class="card-body rating-details">
            </div>
            <div class="container text-center review-rating-details">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="rating-info">
                                <h4>4.9</h4>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ratings">
                            <a href="#" class="btn active d-block rate-button" role="button" data-bs-toggle="button"
                                aria-pressed="true" style="background-color: #003060; border-color: #003060;">All
                                <span>(10)</span></a>
                            <a href="#" class="btn d-block rate-button" role="button" data-bs-toggle="button">3
                                Star
                                <span>(20)</span></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ratings">
                            <a href="#" class="btn d-block rate-button" role="button" data-bs-toggle="button"
                                aria-pressed="true">5 Star
                                <span>(100)</span></a>
                            <a href="#" class="btn d-block rate-button" role="button" data-bs-toggle="button">2
                                Star
                                <span>(20)</span></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ratings">
                            <a href="#" class="btn d-block rate-button" role="button" data-bs-toggle="button"
                                aria-pressed="true">4 star
                                <span>(10)</span></a>
                            <a href="#" class="btn d-block rate-button" role="button" data-bs-toggle="button">1
                                Star
                                <span>(59)</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center customer-ratings">
            <div class="row align-items-center">
                <div class="d-flex align-items-center">
                    <img src="/assets/nestine.png" alt="seller image" class="customer-picture">
                    <div class="customer-ratings-info">
                        <p>N******nnn</p>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <p style="font-weight: bold;">Exchange</p>
                        <p>22/07/2023 <span>11.03</span></p>
                        <p>Condition: <span>10/10</span></p>
                        <p>Accuracy of Description: <span>10/10</span></p>
                        <p>Interaction: <span>10/10</span></p>
                        <p>Nice book. Good job Exchanger!</p>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <img src="/assets/bubble_bath.png" alt="Image 1" class="d-inline square-picture">
                                    <img src="/assets/bubble_bath.png" alt="Image 2" class="d-inline square-picture">
                                    <img src="/assets/bubble_bath.png" alt="Image 3" class="d-inline square-picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center customer-ratings">
            <div class="row align-items-center">
                <div class="d-flex align-items-center">
                    <img src="/assets/nestine.png" alt="seller image" class="customer-picture">
                    <div class="customer-ratings-info">
                        <p>N******nnn</p>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <p style="font-weight: bold;">Exchange</p>
                        <p>22/07/2023 <span>11.03</span></p>
                        <p>Condition: <span>10/10</span></p>
                        <p>Accuracy of Description: <span>10/10</span></p>
                        <p>Interaction: <span>10/10</span></p>
                        <p>Nice book. Good job Exchanger!</p>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <img src="/assets/bubble_bath.png" alt="Image 1" class="d-inline square-picture">
                                    <img src="/assets/bubble_bath.png" alt="Image 2" class="d-inline square-picture">
                                    <img src="/assets/bubble_bath.png" alt="Image 3" class="d-inline square-picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

</body>

@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])