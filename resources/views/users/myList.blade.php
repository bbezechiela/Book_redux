@include('partials.__header', [
    'title' => 'My List | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/mylist-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 shadow">
        <x-sidebar />
    </div>
</div>

<div id="content" class="pe-0 content">
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                @endforeach
            </ul>
        </div>
    @endif
    <ul class="nav bg-light sticky-top head-nav shadow py-4 px-4">
        <div class="w-100 d-flex mt-1 p-0">
            <a href="/explore" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                    alt="Logo"></a>
        </div>
        <div class="position-absolute end-0">
            <div class="d-flex">
                <ul class="nav py-profile justify-content-end">
                    <li class="nav-item dropdown">
                        <a href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                            class="nav-link dropdown-toggle avatar" aria-expanded="false" title="profile">
                            <img src="{{ session('image') }}" alt="notification" width="35" height="35"
                                class="rounded-5" style="margin-right: 2em;">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/myprofile">Profile</a></li>
                            <li><a class="dropdown-item" href="/mypurchase">My Exchange Request</a></li>
                            <li><a class="dropdown-item" href="/addresses">Addresses</a></li>
                            <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </ul>
    @php
        $order_amount = 0;
        $delivered_amount = 0;
        $dropped_amount = 0;
        foreach ($books as $orders) {
            foreach ($orders->item as $item) {
                if ($item->order_status == 'Pending') {
                    $order_amount++;
                } elseif ($item->order_status == 'received') {
                    $delivered_amount++;
                } elseif ($item->order_status == 'dropped') {
                    $dropped_amount++;
                }
            }
        }
    @endphp
    <div class="container-fuid pt-3 px-3">
        <div class="row border mx-2 mt-3 p-3 shadow rounded">
            <div class="col d-flex align-items-center">
                <p class="fs-3 order mx-auto fw-bold m-0">Listing Status</p>
            </div>

            <a href="/orders" class="btn book-status col-2 ms-1 rounded rounded-4 py-2">
                <p class="my-0 text-center fw-bold fs-3">{{ $order_amount }}</p>
                <p class="my-0 text-center fs-6">Exchange Request</p>
            </a>
            <a href="/toreceiveLister" class="btn book-status col-2 ms-1 rounded rounded-4 py-2">
                <p class="my-0 text-center fw-bold fs-3">{{ $order_amount }}</p>
                <p class="my-0 text-center fs-6">To Receive</p>
            </a>

            <a href="/delivered" class="btn book-status col-2 mx-2 rounded rounded-4 py-2">
                <p class="my-0 text-center fw-bold fs-3">{{ $delivered_amount }}</p>
                <p class="my-0 text-center fs-6">Delivered</p>
            </a>
            <a href="/dropped" class="btn book-status col-2 mx-2 rounded rounded-4 py-2">
                <p class="my-0 text-center fw-bold fs-3">{{ $dropped_amount }}</p>
                <p class="my-0 text-center fs-6">Dropped</p>
            </a>

        </div>
        <!-- My List contents -->
        <div class="row contents px-3 mt-4">
            <div class="row justify-content-between mx-auto">
                <div class="col-4 d-flex flex-row">
                    <h3 class="fw-bold list-title">My List</h3>
                    <button id="create-listing" class="create-btn-sale btn px-3 ms-2 d-flex align-items-center h-75"><i
                            class="fa fa-plus-circle" aria-hidden="true" style="margin-right: 5px;"></i>List Book for
                        Online Reading</button>
                    <div class="dropdown">
                        <button class="btn create-btn-exchange dropdown-toggle px-3 ms-2 d-flex align-items-center h-75"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-plus-circle" aria-hidden="true" style="margin-right: 5px;"></i>List Book for
                            Exchange
                        </button>
                        <ul class="dropdown-menu">
                            <li><a id="create-exchange-listing" class="dropdown-item" href="#"
                                    style="color:#E55B13;"><i class="fa fa-plus-circle" aria-hidden="true"
                                        style="margin-right: 5px;"></i>List
                                    Book for Physical Exchange</a></li>
                            <li><a id="create-digital-exchange-listing" class="dropdown-item" href="#"
                                    style="color:#E55B13;"><i class="fa fa-plus-circle" aria-hidden="true"
                                        style="margin-right: 5px;"></i>List Book for Digital Exchange</a></li>
                        </ul>
                    </div>                   
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <label class="fw-bold" for="sort">Sort by</label>
                    <select class="px-3 py-1 h-75 ms-2 rounded" name="" id="sort"
                        style="background-color: #fff;">
                        <option selected disabled>{{ $status }}</option>
                        <option value="All">All</option>
                        <option value="Sale">Online Reading</option>
                        <option value="Exchange">Exchange</option>
                    </select>
                </div>
                <div id="content-cards" class="w-100 mx-2 row justify-content-start px-4"
                    style="height: 300px; margin-top: 2em;">
                    @foreach ($books as $book)
                        <div class="card col-3 m-1 shadow py-2" style="width: 240px; flex: 0 0 auto; mb-3">
                            <img id="photo_{{ $book->id }}" data-filename="{{ $book->back_cover }}"
                                src="{{ asset('images/book_cover/' . $book->back_cover) }}"
                                class="img mx-auto rounded" alt="{{ $book->back_cover }}" height="170px"
                                style="max-width: 200px;">
                            <div class="card-body py-0">
                                <p id="title_{{ $book->id }}" class="card-title mb-0 fw-bold">
                                    {{ $book->title }}</p>
                                <p id="author_{{ $book->id }}" class="card-text mt-0 mb-0 pb-0">
                                    {{ $book->author }}</p>
                                <p id="genre_{{ $book->id }}" class="card-text mt-0 mb-0 pt-0">
                                    {{ $book->genre }}</p>
                                <div class="card-foot price d-flex justify-content-end p-0 mt-2"
                                    style="font-size: 14px;">
                                    {{-- <a class="p-0 view-request" data-bs-toggle="modal" data-bs-target="#request"><i
                                            class="fa fa-eye" aria-hidden="true" style="margin-right: 5px;"></i>View
                                        Request</a> --}}
                                    <a class="p-0 edit-book"
                                        onclick="itemClicked({{ $book->id }}, '{{ $book->status }}')"><i
                                            class="fa fa-pencil-square-o" aria-hidden="true"
                                            style="margin-right: 5px;"></i>Edit</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Request Modal -->
        <div class="modal fade" id="request" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:#003060;">Exchange Request
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="order-cart d-print-none">
                            <div class="name-cart d-flex justify-content-between">
                                <a class="seller-name" href=""><span style="margin-right: 5px;">Nestine
                                        Navarro</span><button class="message-seller message-button"><i
                                            class="fa fa-commenting" aria-hidden="true"></i></button></a>
                                <span class="order-text me-5 mt-0">Exchange Request</span>
                            </div>
                            <div class="card mb-3" style="max-width: 100%; margin-left: 3em; margin-right: 2.1em;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <div id="carouselExampleDark" class="carousel carousel-dark slide"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" data-bs-interval="10000">
                                                        <img src="/assets/city_limits.png"
                                                            class="img-fluid rounded-start" alt="..."
                                                            height="200px" width="200px">
                                                    </div>
                                                    <div class="carousel-item" data-bs-interval="2000">
                                                        <img src="/assets/bubble_bath.png"
                                                            class="img-fluid rounded-start" alt="..."
                                                            height="200px" width="200px">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="/assets/brown_book.png"
                                                            class="img-fluid rounded-start" alt="..."
                                                            height="200px" width="200px">
                                                    </div>
                                                    <div class="carousel-item" data-bs-interval="2000">
                                                        <img src="/assets/yellow_book.png"
                                                            class="img-fluid rounded-start" alt="..."
                                                            height="200px" width="200px">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="/assets/city_of_secrets.png"
                                                            class="img-fluid rounded-start" alt="..."
                                                            height="200px" width="200px">
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleDark" data-bs-slide="next">
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
                                            <p class="card-text">Description: <span>This is a sample description of the
                                                    book I want to offer for exchange.</span></p>
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
                                    <div class="col-md-12 d-flex justify-content-end mt-1 mb-3">
                                        <button id="arrange_shipment" type="button"
                                            class="btn btn-sm arrange-button" data-bs-toggle="modal"
                                            onclick="viewShipping" data-bs-target="#shipping-details">View
                                            Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Arrange Shipment Modal -->
        <div class="modal fade d-print-none" id="arrange-shipment" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Transaction Record</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="details-container">
                            <div class="seller-details-box">
                                <input type="text" class="d-none" id="item_id">
                                <label for="seller-details" class="form-label">Sharer Details</label>
                                <input type="text" class="form-control" id="seller-fullname"
                                    placeholder="Nestine Nicole Navarro"><br>
                                <input type="text" class="form-control" id="seller-contact-number"
                                    placeholder="09097568923"><br>
                                <input type="text" class="form-control" id="seller-address"
                                    placeholder="Blk 33 Lot 52 Peerless Village, Bagacay, Tacloban">
                            </div>

                            <div class="customer-details-box">
                                <label for="customer-details" class="form-label">Requester Details</label>
                                <input type="text" class="form-control" id="customer-fullname"
                                    placeholder="Jennie BlackPink"><br>
                                <input type text="text" class="form-control" id="customer-contact-number"
                                    placeholder="09129348884"><br>
                                <input type="text" class="form-control" id="customer-address"
                                    placeholder="Blk 33 Lot 52 Buhat Village, Diit, Tacloban">
                            </div>
                        </div>

                        <div class="details-container">
                            <div class="package-details-box">
                                <label for="package-details" class="form-label">Package Description</label>
                                <input type="text" class="form-control" id="weight" placeholder="1 (kg)"><br>
                                <input type="text" class="form-control" id="width" placeholder="5 cm"><br>
                                <input type="text" class="form-control" id="height" placeholder="7 cm"><br>
                                <input type="text" class="form-control" id="length" placeholder="7 cm"><br>                                
                            </div>

                            <div class="product-details-box">
                                <label for="product-details" class="form-label">Product Details</label>
                                <input type="text" class="form-control" id="order-date"
                                    placeholder="Date of the request: 12/29/2023"><br>
                                <input type="text" class="form-control" id="order-date"
                                    placeholder="Date of the approved request: 12/29/2023"><br>
                                <input type text="text" class="form-control" id="transaction-number"
                                    placeholder="Transaction Number: TRA421376365"><br>
                                <input type="text" class="form-control" id="book-title"
                                    placeholder="Maria Clara"><br>
                            </div>
                        </div>

                        <div class="details-container">
                            <label class="drop-off-details" for="drop_off" onclick="hidePickupContent()">
                                <i class="fa fa-dropbox" aria-hidden="true"></i>
                                <div class="text-section">
                                    <h6 class="fw-bold">Drop off</h6>
                                    <p>You can drop off your parcel at any J&T Express Branch</p>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Drop off"
                                        name="transaction_type" id="drop_off">
                                    
                                </div>
                            </label>
                            <label class="pickup-details" for="pick_up">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                                <div class="text-section">
                                    <h6 class="fw-bold">Pickup</h6>
                                    <p>J&T Express will collect parcel from your pickup address</p>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Pickup"
                                        name="transaction_type" id="pick_up">
                                    {{-- <label class="form-check-label" for="flexCheckDefault"></label> --}}
                                </div>
                            </label>
                            <label class="personal-transaction-details" for="personal_transaction"
                                onclick="hidePickupContent()">
                                <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                <div class="text-section">
                                    <h6 class="fw-bold">Personal Transaction</h6>
                                    <p>You and the customer will arrange your transaction</p>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Personal Transaction"
                                        name="transaction_type" id="personal_transaction">
                                    {{-- <label class="form-check-label" for="flexCheckDefault"></label> --}}
                                </div>
                            </label>
                        </div>
                        <div class="details-container d-none" id="details">
                            <div class="pickup-address">
                                <div class="text-section">
                                    <h6 class="mb-2 fw-bold">Pickup Address</h6>
                                    <p id="pickup-name">Nestine Nicole Navarro</p>
                                    <p id="pickup-phone">09054173103</p>
                                    <p id="pickup-address">Peerless Village, Bagacay, Tacloban City</p>
                                    <p id="pickup-postal">6500</p>
                                </div>
                                <button class="change-btn" data-bs-toggle="modal" data-bs-target="#edit-address"><a
                                        href="#">Change</a></button>
                            </div>
                            <div class="pickup-date">
                                <div class="text-section">
                                    <h6 class="mb-2 fw-bold">Pickup Date</h6>
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="pickup-date"
                                            data-date-format="yyyy-mm-dd">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" id="confirm-btn" class="btn confirm-button">Confirm</button>
                        {{-- Clicking confirm button means you accept the order --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    {{-- create listing --}}
    <div class="modal fade" id="createListingModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add listing for <span id="listing-type"
                            class="fw-bold"></span></h1>
                    <select name="" class="btn mx-2 fw-bold px-0 interaction-type" id="modal-category" hidden>
                        <option value="Online Reading">Online Reading</option>
                        <option value="Physical Exchange">Physical Exchange</option>
                        <option value="Digital Exchange">Digital Exchange</option>
                    </select>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- sale -->
                <div id="sale">
                    <form id="sale-form" action="/mylist/salepost" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body container-fluid px-5">
                            <div class="row">
                                <div class="col-5 me-1 px-0 py-0 border mb-2 rounded" style="height: 250px">
                                    <input type="text" name="user_id" value="{{ session('id') }}" required
                                        hidden>

                                    {{-- The book file that the user uploaded should be display here for preview --}}
                                    <div class="ExternalFiles h-75">
                                        <small style="color: #737679; margin-left: 8px; font-size: 10px;">Book File
                                            Preview</small>
                                        <input id="pdfUpload" type="file" accept="application/pdf"
                                            name="pdf_file" hidden required>
                                        <label for="pdfUpload" class="btn btn-outline-warning my-1 mx-2">Click to
                                            upload file</label>
                                        <iframe class="w-100 h-100" id="frame" src=""
                                            frameborder="0"></iframe>
                                    </div>

                                </div>
                                <div class="col mb-3">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-4 control-label" for="filebutton1">Back
                                                Cover</label>
                                            <div class="col-md-8">
                                                <div class="input-file-wrapper">
                                                    <input id="filebutton1" name="front_cover" accept="image/*"
                                                        class="input-file form-control" type="file"
                                                        style="margin-bottom: 12px;" required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <select name="genre" id="genre" class="form-control form-select"
                                        style="margin-bottom: 12px; color: #003060;" required>
                                        <option>Genre</option>
                                        <option value="Educational">Educational</option>
                                        <option value="Romance & Saga">Romance & Saga</option>
                                        <option value="Fantasy & Adventure">Fantasy & Adventure</option>
                                        <option value="Science Fiction">Science Fiction</option>
                                        <option value="Historical Fiction">Historical Fiction</option>
                                        <option value="Mystery & Suspense">Mystery & Suspense</option>
                                        <option value="Young Adult">Young Adult</option>
                                        <option value="Non-Fiction & Biography">Non-Fiction & Biography</option>
                                        <option value="Horror & Supernatural">Horror & Supernatural</option>
                                        <option value="Comedy & Satire">Comedy & Satire</option>
                                        <option value="Poetry & Prose">Poetry & Prose</option>
                                        <option value="Self-Help">Self-Help</option>
                                        <option value="Crime & Thriller">Crime & Thriller</option>
                                    </select>
                                    <input type="text" name="isbn" id="isbn-exchange" class="form-control"
                                        placeholder="ISBN" style="margin-bottom: 12px; color: #003060;" required>
                                    <input type="text" name="edition" id="edition-sale" class="form-control"
                                        placeholder="Edition" style="margin-bottom: 12px; color: #003060;" required>
                                </div>
                                <input type="text" name="title" class="form-control" placeholder="Title"
                                    style="margin-bottom: 12px; color: #003060;" required>
                                <input type="text" name="author" class="form-control" placeholder="Author"
                                    style="margin-bottom: 12px; color: #003060;" required>
                                <textarea name="description" id="description" class="form-control" cols="30" rows="4"
                                    placeholder="Description" style="margin-bottom: 12px; color: #003060;" required></textarea>
                                <div class="col guidelines">
                                    <h6>Listing Guidelines</h6>
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapseOne">
                                                    Genre Guidelines
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <strong>Educational: </strong>
                                                    <small>Educational books aim to impart knowledge and information
                                                        to readers. They cover a wide range of topics, from academic
                                                        subjects to self-improvement and skill
                                                        development.</small><br>
                                                    <strong>Romance & Saga: </strong>
                                                    <small>Romance and Saga novels typically focus on the emotional
                                                        and romantic relationships of the main characters. Sagas
                                                        often encompass multiple generations and can be epic in
                                                        scope.</small><br>
                                                    <strong>Fantasy & Adventure: </strong>
                                                    <small>Fantasy and Adventure books transport readers to
                                                        imaginative worlds filled with magical creatures and epic
                                                        quests. They often involve heroes or heroines on thrilling
                                                        adventures.</small><br>
                                                    <strong>Science Fiction: </strong>
                                                    <small>Science fiction explores speculative and futuristic
                                                        concepts often rooted in scientific and technological
                                                        advancements. It can delve into futuristic technologies,
                                                        space exploration, and alternate realities.</small><br>
                                                    <strong>Historical Fiction: </strong>
                                                    <small>Historical fiction is set in a particular historical
                                                        period and incorporates real events, people, and settings
                                                        into a fictional narrative. It offers a glimpse into the
                                                        past with fictional characters and stories.</small><br>
                                                    <strong>Mystery & Suspense: </strong>
                                                    <small>Mystery and Suspense books revolve around solving a
                                                        puzzle, uncovering a secret, or navigating high-stakes
                                                        situations. They keep readers engaged through suspenseful
                                                        and often thrilling plots.</small><br>
                                                    <strong>Young Adult: </strong>
                                                    <small>Young Adult literature targets teenage and young adult
                                                        readers. These books address the challenges and experiences
                                                        of young people, covering various genres and themes relevant
                                                        to this age group.</small><br>
                                                    <strong>Non-Fiction & Biography: </strong>
                                                    <small>Non-fiction books provide factual information on various
                                                        subjects, while biographies offer an in-depth look at the
                                                        lives of real individuals. Both genres are grounded in
                                                        reality and offer insights and knowledge.</small><br>
                                                    <strong>Horror & Supernatural: </strong>
                                                    <small>Horror and Supernatural books aim to evoke fear and
                                                        suspense in readers. They often involve elements of the
                                                        supernatural, such as ghosts, vampires, and otherworldly
                                                        phenomena.</small><br>
                                                    <strong>Comedy & Satire: </strong>
                                                    <small>Comedy and Satire books are intended to make readers
                                                        laugh and often use humor and wit to comment on society,
                                                        politics, or human behavior. Satire may employ irony and
                                                        sarcasm to critique or mock.</small><br>
                                                    <strong>Poetry & Prose: </strong>
                                                    <small>This genre encompasses creative works that use language
                                                        and imagery to convey emotions, ideas, and beauty. Poetry
                                                        focuses on rhythmic and symbolic language, while prose
                                                        includes fiction and non-fiction works that tell stories or
                                                        convey information.</small><br>
                                                    <strong>Self-Help: </strong>
                                                    <small>Self-Help books offer guidance, advice, and strategies
                                                        for personal development and self-improvement. They address
                                                        various aspects of life, including mental health,
                                                        relationships, productivity, and well-being.</small><br>
                                                    <strong>Crime & Thriller: </strong>
                                                    <small>Crime and Thriller novels are filled with suspense,
                                                        intrigue, and criminal elements. They often involve
                                                        detectives, law enforcement, or ordinary individuals caught
                                                        in dangerous situations, with an emphasis on solving crimes
                                                        and facing perilous challenges.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapseTwo">
                                                    Book Condition Guidelines
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <strong>New: </strong>
                                                    <small>A book that is in pristine condition, showing no
                                                        signs of use or wear. It looks like it has just come from
                                                        the bookstore and
                                                        may still have
                                                        the original packaging or dust jacket.</small><br>
                                                    <strong>Like New: </strong>
                                                    <small>The book appears almost brand new but may have minor
                                                        imperfections,
                                                        such as a slight crease on the spine or cover, which are
                                                        hardly
                                                        noticeable.</small><br>
                                                    <strong>Very Good: </strong>
                                                    <small>The book is in excellent condition overall, with minimal
                                                        signs
                                                        of
                                                        wear. There may be slight cover or spine creases, but the
                                                        pages are clean
                                                        and
                                                        unmarked.</small><br>
                                                    <strong>Good: </strong>
                                                    <small>The book has been read and shows some wear and tear, but
                                                        it is
                                                        still in
                                                        reasonable condition. There may be creases, minor stains, or
                                                        dog-eared
                                                        pages,
                                                        but no significant damage.</small><br>
                                                    <strong>Fair: </strong>
                                                    <small>The book has seen significant use and displays noticeable
                                                        wear. It
                                                        may
                                                        have loose or torn pages, markings, or
                                                        highlighting.</small><br>
                                                    <strong>Poor: </strong>
                                                    <small>The book is heavily worn, damaged, or may be missing
                                                        pages or
                                                        covers.
                                                        It is not in good reading condition and might be suitable
                                                        only for reference
                                                        purposes or collectors looking for rare editions.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseThree"
                                                    aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapseThree">
                                                    Selling Guidelines
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseThree"
                                                class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <strong>Book Information: </strong>
                                                    <small>Provide accurate and detailed information about the book
                                                        you want to sell. Include the book's title, author or
                                                        other relevant identifiers, edition, condition (e.g., new,
                                                        used), and a brief description.</small><br>

                                                    <strong>Pricing: </strong>
                                                    <small>Set a competitive and reasonable price for your book.
                                                        Consider factors such as the book's condition, demand, and
                                                        market rates.</small><br>

                                                    <strong>Images: </strong>
                                                    <small>Upload clear and high-quality images of the book's cover
                                                        and any relevant pages or content. Images help potential
                                                        buyers assess the book's condition.
                                                    </small><br>

                                                    <strong>Listing Description: </strong>
                                                    <small>Write a clear and informative description of the book.
                                                        Mention any highlights, notes, or signs of wear and tear if
                                                        the book is used.</small><br>

                                                    <strong>Policies: </strong>
                                                    <small>Familiarize yourself with BookRedux's policies,
                                                        especially those related to listing books for sale. Ensure
                                                        that your listing complies with these policies.</small><br>

                                                    <strong>Honesty and Accuracy: </strong>
                                                    <small>Be honest about the book's condition and any potential
                                                        flaws. Misrepresentation may lead to disputes and return
                                                        requests.</small><br>

                                                    <strong>Pricing and Fees: </strong>
                                                    <small>Understand the pricing structure and fees associated with
                                                        selling on the platform. <strong>BookRedux will charge 10%
                                                            of the
                                                            total price when the listing is placed in
                                                            order.</strong></small><br>

                                                    <strong>Availability and Stock Management: </strong>
                                                    <small>Regularly update your listing's availability. If the book
                                                        is no longer available, remove the listing
                                                        promptly.</small><br>

                                                    <strong>Communication: </strong>
                                                    <small>Be responsive to potential buyers' inquiries and
                                                        messages. Good communication can build trust with
                                                        buyers.</small><br>

                                                    <strong>Shipping: </strong>
                                                    <small>Clearly specify your shipping methods, costs, and
                                                        estimated delivery times. Use appropriate packaging to
                                                        protect the book during transit.</small><br>

                                                    <strong>Payment: </strong>
                                                    <small>BookRedux will handle payment processing. Ensure that
                                                        your payment information is accurate and up to
                                                        date.</small><br>

                                                    <strong>Review and Monitor Listings: </strong>
                                                    <small>Regularly review and monitor your book listings. Make
                                                        necessary adjustments to improve the visibility and
                                                        attractiveness of your listings.</small><br>

                                                    <strong>Buyer Feedback: </strong>
                                                    <small>Encourage buyers to leave feedback after completing a
                                                        transaction. Positive feedback can enhance your reputation
                                                        on the platform.</small>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                                    aria-controls="panelsStayOpen-collapseOne">
                                                    Terms and Conditions for Listing Books for Sale
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseFour"
                                                class="accordion-collapse collapse show">
                                                <div class="accordion-body">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>You warrant that all books listed are genuine, free from
                                                        copyright infringement, and do not violate any intellectual
                                                        property rights.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>BookRedux will handle returns and refunds in accordance
                                                        with its policies. You must comply with these policies
                                                        regarding returns and refunds for your listings.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>BookRedux may charge commissions, listing fees, or other
                                                        charges for using its platform. These fees are outlined in
                                                        the User Fee Schedule.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>BookRedux reserves the right to terminate your seller
                                                        account or remove your listings for any violation of these
                                                        terms or for other legitimate reasons.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>By listing books, you grant BookRedux the right to use
                                                        your content, including images and descriptions, for
                                                        promotional and display purposes on the
                                                        platform.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>BookRedux will process payments from customers on your
                                                        behalf and may deduct applicable fees and
                                                        commissions.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>Users are encouraged to resolve disputes among themselves
                                                        through communication and negotiation. BookRedux is not
                                                        responsible for disputes between users.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>You are responsible for providing accurate
                                                        and complete information about the books you list, including
                                                        title, author, condition, and price.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>By listing a book, you confirm that you are the rightful
                                                        owner of the book, or you have the necessary authorization
                                                        to sell it.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>You are responsible for fulfilling orders
                                                        promptly and providing accurate shipping information.
                                                        Failure to fulfill orders may result in penalties or account
                                                        suspension.</small><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check" style="margin-top: 1em">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" />
                                            <label class="form-check-label" for="flexCheckDefault">I have read and
                                                agree
                                                to the listing terms and condition.</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="submit" id="submitButton" class="btn mx-auto w-25 text-white rounded-3"
                                style="background-color: #E55B13;" disabled>List</button>
                        </div>
                    </form>
                </div>

                <!-- exchange -->
                <div id="exchange" class="modal-body container-fluid px-5">
                    <form id="exchange-form" action="/mylist/exchangepost" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-5 me-1 border px-0 mb-2 rounded">
                                <input type="text" name="user_id" value="{{ session('id') }}" hidden>
                                <input type="text" name="weight" id="exchange-weight" hidden>
                                <input type="text" name="width" id="exchange-width" hidden>
                                <input type="text" name="height" id="exchange-height" hidden>
                                <input type="text" name="length" id="exchange-length" hidden>
                                <input type="text" name="courier" id="exchange-courier" hidden>

                                <input type="file" name="book_photo" id="exchange-image" class="d-none"
                                    accept="image/*">
                                <small style="color: #737679; margin-left: 8px; font-size: 10px;">The book photo
                                    field must be a file of type: jpeg, png, jpg, gif.</small>
                                <label for="exchange-image" class="position-relative w-100 h-100"
                                    style="cursor: pointer;">
                                    <img id="exchange-book-image" src="../assets/listing.png" alt="image"
                                        class="img-fluid position-absolute top-50 start-50 translate-middle"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="Click to Upload Image" width="170" height="170">
                                </label>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-4 control-label" for="filebutton1">Back
                                            Cover</label>
                                        <div class="col-md-8">
                                            <div class="input-file-wrapper">
                                                <input id="filebutton1" name="back_cover" accept="image/*"
                                                    class="input-file form-control" type="file"
                                                    style="margin-bottom: 12px;">
                                            </div>
                                        </div>

                                        <label class="col-md-4 control-label" for="filebutton2"
                                            style="white-space: nowrap;">Content or Interior Photos</label>
                                        <div class="col-md-8">
                                            <div class="input-file-wrapper">
                                                <input id="filebutton2" name="interior_photo" accept="image/*"
                                                    class="input-file form-control" type="file"
                                                    style="margin-bottom: 12px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <select name="genre" id="" class="form-control form-select"
                                    style="margin-bottom: 12px; color: #003060;">
                                    <option>Genre</option>
                                    <option value="Educational">Educational</option>
                                    <option value="Romance & Saga">Romance & Saga</option>
                                    <option value="Fantasy & Adventure">Fantasy & Adventure</option>
                                    <option value="Science Fiction">Science Fiction</option>
                                    <option value="Historical Fiction">Historical Fiction</option>
                                    <option value="Mystery & Suspense">Mystery & Suspense</option>
                                    <option value="Young Adult">Young Adult</option>
                                    <option value="Non-Fiction & Biography">Non-Fiction & Biography</option>
                                    <option value="Horror & Supernatural">Horror & Supernatural</option>
                                    <option value="Comedy & Satire">Comedy & Satire</option>
                                    <option value="Poetry & Prose">Poetry & Prose</option>
                                    <option value="Self-Help">Self-Help</option>
                                    <option value="Crime & Thriller">Crime & Thriller</option>
                                </select>
                                <input type="text" name="isbn" id="isbn-exchange" class="form-control"
                                    placeholder="ISBN" style="margin-bottom: 12px; color: #003060;">
                                <input type="text" name="edition" id="edition-exchange" class="form-control"
                                    placeholder="Edition" style="margin-bottom: 12px; color: #003060;">
                                <button type="button" id="exchange-shipping-fee-btn" class="form-control"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Click to open shipping form"
                                    style="text-align: justify; margin-bottom: 12px;">
                                    Shipping Fee
                                </button>
                                <select name="condition" id="" class="form-control form-select"
                                    style="margin-bottom: 12px; color: #003060;">
                                    <option>Condition</option>
                                    <option value="New">New</option>
                                    <option value="Like New">Like New</option>
                                    <option value="Very Good">Very Good</option>
                                    <option value="Good">Good</option>
                                    <option value="Fair">Fair</option>
                                    <option value="Poor">Poor</option>
                                </select>
                                <select name="format" class="form-control form-select" id=""
                                    style="margin-bottom: 12px; color: #003060;">
                                    <option>Format</option>
                                    <option value="Hardback">Hardback</option>
                                    <option value="Paperback">Paperback</option>
                                </select>
                            </div>
                            <input type="text" name="title" class="form-control" placeholder="Title"
                                style="margin-bottom: 12px; color: #003060;">
                            <input type="text" name="author" class="form-control" placeholder="Author"
                                style="margin-bottom: 12px; color: #003060;">
                            <textarea name="exchange_preferences" id="exchange-preferences" class="form-control" cols="30" rows="4"
                                placeholder="Exchange Preferences (E.g., desired book genres, preferences on physical exchange)"
                                style="margin-bottom: 12px; color: #003060;"></textarea>
                            <textarea name="description" id="description" class="form-control" cols="30" rows="4"
                                placeholder="Description" style="margin-bottom: 12px; color: #003060;"></textarea>
                            <div class="col guidelines">
                                <h6>Listing Guidelines</h6>
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                                Genre Guidelines
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                <strong>Educational: </strong>
                                                <small>Educational books aim to impart knowledge and information
                                                    to readers. They cover a wide range of topics, from academic
                                                    subjects to self-improvement and skill
                                                    development.</small><br>
                                                <strong>Romance & Saga: </strong>
                                                <small>Romance and Saga novels typically focus on the emotional
                                                    and romantic relationships of the main characters. Sagas
                                                    often encompass multiple generations and can be epic in
                                                    scope.</small><br>
                                                <strong>Fantasy & Adventure: </strong>
                                                <small>Fantasy and Adventure books transport readers to
                                                    imaginative worlds filled with magical creatures and epic
                                                    quests. They often involve heroes or heroines on thrilling
                                                    adventures.</small><br>
                                                <strong>Science Fiction: </strong>
                                                <small>Science fiction explores speculative and futuristic
                                                    concepts often rooted in scientific and technological
                                                    advancements. It can delve into futuristic technologies,
                                                    space exploration, and alternate realities.</small><br>
                                                <strong>Historical Fiction: </strong>
                                                <small>Historical fiction is set in a particular historical
                                                    period and incorporates real events, people, and settings
                                                    into a fictional narrative. It offers a glimpse into the
                                                    past with fictional characters and stories.</small><br>
                                                <strong>Mystery & Suspense: </strong>
                                                <small>Mystery and Suspense books revolve around solving a
                                                    puzzle, uncovering a secret, or navigating high-stakes
                                                    situations. They keep readers engaged through suspenseful
                                                    and often thrilling plots.</small><br>
                                                <strong>Young Adult: </strong>
                                                <small>Young Adult literature targets teenage and young adult
                                                    readers. These books address the challenges and experiences
                                                    of young people, covering various genres and themes relevant
                                                    to this age group.</small><br>
                                                <strong>Non-Fiction & Biography: </strong>
                                                <small>Non-fiction books provide factual information on various
                                                    subjects, while biographies offer an in-depth look at the
                                                    lives of real individuals. Both genres are grounded in
                                                    reality and offer insights and knowledge.</small><br>
                                                <strong>Horror & Supernatural: </strong>
                                                <small>Horror and Supernatural books aim to evoke fear and
                                                    suspense in readers. They often involve elements of the
                                                    supernatural, such as ghosts, vampires, and otherworldly
                                                    phenomena.</small><br>
                                                <strong>Comedy & Satire: </strong>
                                                <small>Comedy and Satire books are intended to make readers
                                                    laugh and often use humor and wit to comment on society,
                                                    politics, or human behavior. Satire may employ irony and
                                                    sarcasm to critique or mock.</small><br>
                                                <strong>Poetry & Prose: </strong>
                                                <small>This genre encompasses creative works that use language
                                                    and imagery to convey emotions, ideas, and beauty. Poetry
                                                    focuses on rhythmic and symbolic language, while prose
                                                    includes fiction and non-fiction works that tell stories or
                                                    convey information.</small><br>
                                                <strong>Self-Help: </strong>
                                                <small>Self-Help books offer guidance, advice, and strategies
                                                    for personal development and self-improvement. They address
                                                    various aspects of life, including mental health,
                                                    relationships, productivity, and well-being.</small><br>
                                                <strong>Crime & Thriller: </strong>
                                                <small>Crime and Thriller novels are filled with suspense,
                                                    intrigue, and criminal elements. They often involve
                                                    detectives, law enforcement, or ordinary individuals caught
                                                    in dangerous situations, with an emphasis on solving crimes
                                                    and facing perilous challenges.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                Book Condition Guidelines
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                <strong>New: </strong>
                                                <small>A book that is in pristine condition, showing no
                                                    signs of use or wear. It looks like it has just come from
                                                    the bookstore and
                                                    may still have
                                                    the original packaging or dust jacket.</small><br>
                                                <strong>Like New: </strong>
                                                <small>The book appears almost brand new but may have minor
                                                    imperfections,
                                                    such as a slight crease on the spine or cover, which are
                                                    hardly
                                                    noticeable.</small><br>
                                                <strong>Very Good: </strong>
                                                <small>The book is in excellent condition overall, with minimal
                                                    signs
                                                    of
                                                    wear. There may be slight cover or spine creases, but the
                                                    pages are clean
                                                    and
                                                    unmarked.</small><br>
                                                <strong>Good: </strong>
                                                <small>The book has been read and shows some wear and tear, but
                                                    it is
                                                    still in
                                                    reasonable condition. There may be creases, minor stains, or
                                                    dog-eared
                                                    pages,
                                                    but no significant damage.</small><br>
                                                <strong>Fair: </strong>
                                                <small>The book has seen significant use and displays noticeable
                                                    wear. It
                                                    may
                                                    have loose or torn pages, markings, or
                                                    highlighting.</small><br>
                                                <strong>Poor: </strong>
                                                <small>The book is heavily worn, damaged, or may be missing
                                                    pages or
                                                    covers.
                                                    It is not in good reading condition and might be suitable
                                                    only for reference
                                                    purposes or collectors looking for rare editions.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseThree">
                                                Guidelines for Listing a Book for Exchange
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                <strong>Book Information: </strong>
                                                <small>Provide accurate and detailed information about the book
                                                    you want to sell. Include the book's title, author or
                                                    other relevant identifiers, edition, condition (e.g., new,
                                                    used), and a brief description.</small><br>

                                                <strong>Exchange Terms: </strong>
                                                <small>Clearly outline your exchange terms. Specify what types of
                                                    books you are willing to exchange for and any conditions or
                                                    preferences you have.</small><br>

                                                <strong>Images: </strong>
                                                <small>Upload clear and high-quality images of the book's cover
                                                    and any relevant pages or content. Images help potential
                                                    exchange partners assess the book's condition.
                                                </small><br>

                                                <strong>Listing Description: </strong>
                                                <small>Write a clear and informative description of the book and
                                                    your preferences for the exchange.
                                                    Mention any highlights, notes, or signs of wear and tear if
                                                    the book is used.</small><br>

                                                <strong>Policies: </strong>
                                                <small>Familiarize yourself with BookRedux's policies,
                                                    especially those related to listing books for exchange. Ensure
                                                    that your listing complies with these policies.</small><br>

                                                <strong>Honesty and Accuracy: </strong>
                                                <small>Be honest about the book's condition and any potential
                                                    flaws. Misrepresentation may lead to disputes and exchange
                                                    request denials.</small><br>

                                                <strong>Availability and Stock Management: </strong>
                                                <small>Regularly update your exchange listing's availability. If the
                                                    book
                                                    is no longer available, remove the listing
                                                    promptly.</small><br>

                                                <strong>Communication: </strong>
                                                <small>Be responsive to potential exchange partners' inquiries and
                                                    messages. Good communication is key to finding suitable exchange
                                                    opportunities.</small><br>

                                                <strong>Exchange Negotiation: </strong>
                                                <small>Be open to negotiation with potential exchange partners.
                                                    Discuss terms, conditions, and any additional details to ensure
                                                    a mutually beneficial exchange.</small><br>

                                                <strong>Review and Monitor Listings: </strong>
                                                <small>Regularly review and monitor your book exchange listings.
                                                    Make
                                                    necessary adjustments to improve the visibility and
                                                    attractiveness of your listings.</small><br>

                                                <strong>Feedback: </strong>
                                                <small>After completing an exchange, consider leaving feedback about
                                                    the experience with your exchange partner. Positive feedback can
                                                    enhance your reputation on the platform..</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true"
                                                aria-controls="panelsStayOpen-collapseFour">
                                                Terms and Conditions for Listing Books for Exchange
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseFour"
                                            class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                </svg>
                                                <small>You warrant that all books listed for exchange are genuine,
                                                    free from copyright infringement, and do not violate any
                                                    intellectual property rights.</small><br>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                </svg>
                                                <small>Users agree to the exchange process outlined on BookRedux,
                                                    which may include communication with other users, negotiation of
                                                    exchange terms, and arranging for the exchange of
                                                    books.</small><br>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                </svg>
                                                <small>BookRedux reserves the right to terminate your seller
                                                    account or remove your listings for any violation of these
                                                    terms or for other legitimate reasons.</small><br>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                </svg>
                                                <small>By listing books, you grant BookRedux the right to use
                                                    your content, including images and descriptions, for
                                                    promotional and display purposes on the
                                                    platform.</small><br>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                </svg>
                                                <small>Users are encouraged to resolve disputes among themselves
                                                    through communication and negotiation. BookRedux is not
                                                    responsible for disputes between users.</small><br>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                </svg>
                                                <small>You are responsible for providing accurate
                                                    and complete information about the books you list for exchange,
                                                    including
                                                    title, author, condition, and exchange preferences.</small><br>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                </svg>
                                                <small>By listing a book, you confirm that you are the rightful
                                                    owner of the book, or you have the necessary authorization
                                                    to exchange it.</small><br>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                </svg>
                                                <small>You are responsible for fulfilling orders
                                                    promptly and providing accurate shipping information.
                                                    Failure to fulfill orders may result in penalties or account
                                                    suspension.</small><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check" style="margin-top: 1em">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="exchangeDefault" />
                                        <label class="form-check-label" for="exchangeDefault">I have read and agree
                                            to the listing terms and condition.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="submit" id="submitExchangeButton"
                                class="btn mx-auto w-25 text-white rounded-3" style="background-color: #E55B13;"
                                disabled>List</button>
                        </div>
                    </form>
                </div>


                {{-- digital exchange --}}
                <div id="digital">
                    <form id="digital-form" action="/mylist/digitalpost" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body container-fluid px-5">
                            <div class="row">
                                <div class="col-5 me-1 px-0 py-0 border mb-2 rounded">
                                    <input type="text" name="user_id" value="{{ session('id') }}" hidden>

                                    {{-- The book file that the user uploaded should be display here for preview --}}
                                    <div class="ExternalFiles">
                                        <small style="color: #737679; margin-left: 8px; font-size: 10px;">Book File
                                            Preview</small>
                                        <input id="digital-pdfUpload" type="file" accept="application/pdf"
                                            onchange="pdfPreview()" name="pdf_file" hidden required>
                                        <label for="digital-pdfUpload" class="btn create-btn-exchange my-1 mx-2">Click
                                            to
                                            upload file</label>
                                        <iframe class="w-100 h-100" id="digital-frame" src=""
                                            frameborder="0"></iframe>
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-4 control-label" for="digital-bookcover">Book
                                                Cover</label>
                                            <div class="col-md-8">
                                                <div class="input-file-wrapper">
                                                    <input id="digital-bookcover" name="front_cover" accept="image/*"
                                                        class="input-file form-control" type="file"
                                                        style="margin-bottom: 12px;" required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <select name="genre" id="digital-genre" class="form-control form-select"
                                        style="margin-bottom: 12px; color: #003060;" required>
                                        <option>Genre</option>
                                        <option value="Educational">Educational</option>
                                        <option value="Romance & Saga">Romance & Saga</option>
                                        <option value="Fantasy & Adventure">Fantasy & Adventure</option>
                                        <option value="Science Fiction">Science Fiction</option>
                                        <option value="Historical Fiction">Historical Fiction</option>
                                        <option value="Mystery & Suspense">Mystery & Suspense</option>
                                        <option value="Young Adult">Young Adult</option>
                                        <option value="Non-Fiction & Biography">Non-Fiction & Biography</option>
                                        <option value="Horror & Supernatural">Horror & Supernatural</option>
                                        <option value="Comedy & Satire">Comedy & Satire</option>
                                        <option value="Poetry & Prose">Poetry & Prose</option>
                                        <option value="Self-Help">Self-Help</option>
                                        <option value="Crime & Thriller">Crime & Thriller</option>
                                    </select>
                                    <input type="text" name="isbn" id="digital-isbn" class="form-control"
                                        placeholder="ISBN" style="margin-bottom: 12px; color: #003060;" required>
                                    <input type="text" name="edition" id="digital-edition" class="form-control"
                                        placeholder="Edition" style="margin-bottom: 12px; color: #003060;" required>
                                </div>
                                <input type="text" name="title" class="form-control" placeholder="Title"
                                    style="margin-bottom: 12px; color: #003060;" required>
                                <input type="text" name="author" class="form-control" placeholder="Author"
                                    style="margin-bottom: 12px; color: #003060;" required>
                                <textarea name="exchange_preferences" id="exchange-preferences" class="form-control" cols="30" rows="4"
                                    placeholder="Exchange Preferences (E.g., desired book genres etc.)" style="margin-bottom: 12px; color: #003060;"
                                    required></textarea>
                                <textarea name="description" id="description" class="form-control" cols="30" rows="4"
                                    placeholder="Description" style="margin-bottom: 12px; color: #003060;" required></textarea>
                                <div class="col guidelines">
                                    <h6>Listing Guidelines</h6>
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapseOne">
                                                    Genre Guidelines
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <strong>Educational: </strong>
                                                    <small>Educational books aim to impart knowledge and information
                                                        to readers. They cover a wide range of topics, from academic
                                                        subjects to self-improvement and skill
                                                        development.</small><br>
                                                    <strong>Romance & Saga: </strong>
                                                    <small>Romance and Saga novels typically focus on the emotional
                                                        and romantic relationships of the main characters. Sagas
                                                        often encompass multiple generations and can be epic in
                                                        scope.</small><br>
                                                    <strong>Fantasy & Adventure: </strong>
                                                    <small>Fantasy and Adventure books transport readers to
                                                        imaginative worlds filled with magical creatures and epic
                                                        quests. They often involve heroes or heroines on thrilling
                                                        adventures.</small><br>
                                                    <strong>Science Fiction: </strong>
                                                    <small>Science fiction explores speculative and futuristic
                                                        concepts often rooted in scientific and technological
                                                        advancements. It can delve into futuristic technologies,
                                                        space exploration, and alternate realities.</small><br>
                                                    <strong>Historical Fiction: </strong>
                                                    <small>Historical fiction is set in a particular historical
                                                        period and incorporates real events, people, and settings
                                                        into a fictional narrative. It offers a glimpse into the
                                                        past with fictional characters and stories.</small><br>
                                                    <strong>Mystery & Suspense: </strong>
                                                    <small>Mystery and Suspense books revolve around solving a
                                                        puzzle, uncovering a secret, or navigating high-stakes
                                                        situations. They keep readers engaged through suspenseful
                                                        and often thrilling plots.</small><br>
                                                    <strong>Young Adult: </strong>
                                                    <small>Young Adult literature targets teenage and young adult
                                                        readers. These books address the challenges and experiences
                                                        of young people, covering various genres and themes relevant
                                                        to this age group.</small><br>
                                                    <strong>Non-Fiction & Biography: </strong>
                                                    <small>Non-fiction books provide factual information on various
                                                        subjects, while biographies offer an in-depth look at the
                                                        lives of real individuals. Both genres are grounded in
                                                        reality and offer insights and knowledge.</small><br>
                                                    <strong>Horror & Supernatural: </strong>
                                                    <small>Horror and Supernatural books aim to evoke fear and
                                                        suspense in readers. They often involve elements of the
                                                        supernatural, such as ghosts, vampires, and otherworldly
                                                        phenomena.</small><br>
                                                    <strong>Comedy & Satire: </strong>
                                                    <small>Comedy and Satire books are intended to make readers
                                                        laugh and often use humor and wit to comment on society,
                                                        politics, or human behavior. Satire may employ irony and
                                                        sarcasm to critique or mock.</small><br>
                                                    <strong>Poetry & Prose: </strong>
                                                    <small>This genre encompasses creative works that use language
                                                        and imagery to convey emotions, ideas, and beauty. Poetry
                                                        focuses on rhythmic and symbolic language, while prose
                                                        includes fiction and non-fiction works that tell stories or
                                                        convey information.</small><br>
                                                    <strong>Self-Help: </strong>
                                                    <small>Self-Help books offer guidance, advice, and strategies
                                                        for personal development and self-improvement. They address
                                                        various aspects of life, including mental health,
                                                        relationships, productivity, and well-being.</small><br>
                                                    <strong>Crime & Thriller: </strong>
                                                    <small>Crime and Thriller novels are filled with suspense,
                                                        intrigue, and criminal elements. They often involve
                                                        detectives, law enforcement, or ordinary individuals caught
                                                        in dangerous situations, with an emphasis on solving crimes
                                                        and facing perilous challenges.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapseTwo">
                                                    Book Condition Guidelines
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <strong>New: </strong>
                                                    <small>A book that is in pristine condition, showing no
                                                        signs of use or wear. It looks like it has just come from
                                                        the bookstore and
                                                        may still have
                                                        the original packaging or dust jacket.</small><br>
                                                    <strong>Like New: </strong>
                                                    <small>The book appears almost brand new but may have minor
                                                        imperfections,
                                                        such as a slight crease on the spine or cover, which are
                                                        hardly
                                                        noticeable.</small><br>
                                                    <strong>Very Good: </strong>
                                                    <small>The book is in excellent condition overall, with minimal
                                                        signs
                                                        of
                                                        wear. There may be slight cover or spine creases, but the
                                                        pages are clean
                                                        and
                                                        unmarked.</small><br>
                                                    <strong>Good: </strong>
                                                    <small>The book has been read and shows some wear and tear, but
                                                        it is
                                                        still in
                                                        reasonable condition. There may be creases, minor stains, or
                                                        dog-eared
                                                        pages,
                                                        but no significant damage.</small><br>
                                                    <strong>Fair: </strong>
                                                    <small>The book has seen significant use and displays noticeable
                                                        wear. It
                                                        may
                                                        have loose or torn pages, markings, or
                                                        highlighting.</small><br>
                                                    <strong>Poor: </strong>
                                                    <small>The book is heavily worn, damaged, or may be missing
                                                        pages or
                                                        covers.
                                                        It is not in good reading condition and might be suitable
                                                        only for reference
                                                        purposes or collectors looking for rare editions.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseThree"
                                                    aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapseThree">
                                                    Selling Guidelines
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseThree"
                                                class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <strong>Book Information: </strong>
                                                    <small>Provide accurate and detailed information about the book
                                                        you want to sell. Include the book's title, author or
                                                        other relevant identifiers, edition, condition (e.g., new,
                                                        used), and a brief description.</small><br>

                                                    <strong>Pricing: </strong>
                                                    <small>Set a competitive and reasonable price for your book.
                                                        Consider factors such as the book's condition, demand, and
                                                        market rates.</small><br>

                                                    <strong>Images: </strong>
                                                    <small>Upload clear and high-quality images of the book's cover
                                                        and any relevant pages or content. Images help potential
                                                        buyers assess the book's condition.
                                                    </small><br>

                                                    <strong>Listing Description: </strong>
                                                    <small>Write a clear and informative description of the book.
                                                        Mention any highlights, notes, or signs of wear and tear if
                                                        the book is used.</small><br>

                                                    <strong>Policies: </strong>
                                                    <small>Familiarize yourself with BookRedux's policies,
                                                        especially those related to listing books for sale. Ensure
                                                        that your listing complies with these policies.</small><br>

                                                    <strong>Honesty and Accuracy: </strong>
                                                    <small>Be honest about the book's condition and any potential
                                                        flaws. Misrepresentation may lead to disputes and return
                                                        requests.</small><br>

                                                    <strong>Pricing and Fees: </strong>
                                                    <small>Understand the pricing structure and fees associated with
                                                        selling on the platform. <strong>BookRedux will charge 10%
                                                            of the
                                                            total price when the listing is placed in
                                                            order.</strong></small><br>

                                                    <strong>Availability and Stock Management: </strong>
                                                    <small>Regularly update your listing's availability. If the book
                                                        is no longer available, remove the listing
                                                        promptly.</small><br>

                                                    <strong>Communication: </strong>
                                                    <small>Be responsive to potential buyers' inquiries and
                                                        messages. Good communication can build trust with
                                                        buyers.</small><br>

                                                    <strong>Shipping: </strong>
                                                    <small>Clearly specify your shipping methods, costs, and
                                                        estimated delivery times. Use appropriate packaging to
                                                        protect the book during transit.</small><br>

                                                    <strong>Payment: </strong>
                                                    <small>BookRedux will handle payment processing. Ensure that
                                                        your payment information is accurate and up to
                                                        date.</small><br>

                                                    <strong>Review and Monitor Listings: </strong>
                                                    <small>Regularly review and monitor your book listings. Make
                                                        necessary adjustments to improve the visibility and
                                                        attractiveness of your listings.</small><br>

                                                    <strong>Buyer Feedback: </strong>
                                                    <small>Encourage buyers to leave feedback after completing a
                                                        transaction. Positive feedback can enhance your reputation
                                                        on the platform.</small>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseOne"
                                                    aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                    Terms and Conditions for Listing Books for Sale
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseFour"
                                                class="accordion-collapse collapse show">
                                                <div class="accordion-body">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>You warrant that all books listed are genuine, free from
                                                        copyright infringement, and do not violate any intellectual
                                                        property rights.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>BookRedux will handle returns and refunds in accordance
                                                        with its policies. You must comply with these policies
                                                        regarding returns and refunds for your listings.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>BookRedux may charge commissions, listing fees, or other
                                                        charges for using its platform. These fees are outlined in
                                                        the User Fee Schedule.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>BookRedux reserves the right to terminate your seller
                                                        account or remove your listings for any violation of these
                                                        terms or for other legitimate reasons.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>By listing books, you grant BookRedux the right to use
                                                        your content, including images and descriptions, for
                                                        promotional and display purposes on the
                                                        platform.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>BookRedux will process payments from customers on your
                                                        behalf and may deduct applicable fees and
                                                        commissions.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>Users are encouraged to resolve disputes among themselves
                                                        through communication and negotiation. BookRedux is not
                                                        responsible for disputes between users.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>You are responsible for providing accurate
                                                        and complete information about the books you list, including
                                                        title, author, condition, and price.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>By listing a book, you confirm that you are the rightful
                                                        owner of the book, or you have the necessary authorization
                                                        to sell it.</small><br>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-dot"
                                                        viewBox="0 0 16 16">
                                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                    </svg>
                                                    <small>You are responsible for fulfilling orders
                                                        promptly and providing accurate shipping information.
                                                        Failure to fulfill orders may result in penalties or account
                                                        suspension.</small><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check" style="margin-top: 1em">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="digitalCheckList" />
                                            <label class="form-check-label" for="digitalCheckList">I have read and
                                                agree
                                                to the listing terms and condition.</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="submit" id="digitalSubmitButton"
                                class="btn mx-auto w-25 text-white rounded-3" style="background-color: #E55B13;"
                                disabled>List</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    {{-- update listing modal --}}
    <div class="modal fade" id="updateListingModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Listing</h1>

                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <select name="" class="btn mx-5 fw-bold px-0 interaction-type" id="edit-modal-category">
                    <option value="Online Reading">Online Reading</option>
                    <option value="Digital Exchange">Digital Exchange</option>
                    <option value="Exchange">Exchange</option>
                </select>
                <input type="text" id="edit-book-id" name="id" hidden>


                <!-- online reading -->
                <div id="edit-online-reading-div">
                    <form id="edit-online-reading-form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body container-fluid px-5">
                            <div class="row">
                                <div class="col-5 me-1 px-0 py-0 border mb-2 rounded" style="height: 250px">
                                    <input type="text" name="user_id" value="{{ session('id') }}" required
                                        hidden>

                                    <div class="ExternalFiles h-75">
                                        <small style="color: #737679; margin-left: 8px; font-size: 10px;">Book File
                                            Preview</small>
                                        <input id="edit-pdfUpload" type="file" accept="application/pdf"
                                            name="edit_pdf_file" hidden required>
                                        <label for="edit-pdfUpload" class="btn btn-outline-warning my-1 mx-2">Click
                                            to
                                            upload file</label>
                                        <iframe class="w-100 h-100" id="edit-frame" src=""
                                            frameborder="0"></iframe>
                                    </div>

                                </div>
                                <div class="col mb-3">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-4 control-label" for="filebutton1">Book
                                                Cover</label>
                                            <div class="col-md-8">
                                                <div class="input-file-wrapper">
                                                    <input id="edit-bookcover" name="edit_front_cover"
                                                        accept="image/*" class="input-file form-control"
                                                        type="file" style="margin-bottom: 12px;" required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <select name="edit-genre" id="edit-genre" class="form-control form-select"
                                        style="margin-bottom: 12px; color: #003060;" required>
                                        <option>Genre</option>
                                        <option value="Educational">Educational</option>
                                        <option value="Romance & Saga">Romance & Saga</option>
                                        <option value="Fantasy & Adventure">Fantasy & Adventure</option>
                                        <option value="Science Fiction">Science Fiction</option>
                                        <option value="Historical Fiction">Historical Fiction</option>
                                        <option value="Mystery & Suspense">Mystery & Suspense</option>
                                        <option value="Young Adult">Young Adult</option>
                                        <option value="Non-Fiction & Biography">Non-Fiction & Biography</option>
                                        <option value="Horror & Supernatural">Horror & Supernatural</option>
                                        <option value="Comedy & Satire">Comedy & Satire</option>
                                        <option value="Poetry & Prose">Poetry & Prose</option>
                                        <option value="Self-Help">Self-Help</option>
                                        <option value="Crime & Thriller">Crime & Thriller</option>
                                    </select>
                                    <input type="text" name="isbn" id="edit-isbn" class="form-control"
                                        placeholder="ISBN" style="margin-bottom: 12px; color: #003060;" required>
                                    <input type="text" name="edition" id="edit-edition-sale"
                                        class="form-control" placeholder="Edition"
                                        style="margin-bottom: 12px; color: #003060;" required>
                                </div>
                                <input type="text" id="edit-title" name="title" class="form-control"
                                    placeholder="Title" style="margin-bottom: 12px; color: #003060;" required>
                                <input type="text" id="edit-author" name="author" class="form-control"
                                    placeholder="Author" style="margin-bottom: 12px; color: #003060;" required>
                                <textarea name="description" id="edit-description" class="form-control" cols="30" rows="4"
                                    placeholder="Description" style="margin-bottom: 12px; color: #003060;" required></textarea>

                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" id="online-reading-update"
                                    class="btn mx-auto w-25 text-white rounded-3 update-btn">Update</button>
                                <button type="button" id="online-reading-delete"
                                    class="btn mx-auto w-25 rounded-3 delete-btn">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>

                {{-- update digital exchange --}}
                <div id="digital-update">
                    <form id="edit-digital-form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body container-fluid px-5">
                            <div class="row">
                                <div class="col-5 me-1 px-0 py-0 border mb-2 rounded">                                    
                                    {{-- The book file that the user uploaded should be display here for preview --}}
                                    <div class="ExternalFiles">
                                        <small style="color: #737679; margin-left: 8px; font-size: 10px;">Book File
                                            Preview</small>
                                        <input id="edit-digital-pdfUpload" type="file" accept="application/pdf"
                                            onchange="pdfPreview()" name="pdf_file" hidden required>
                                        <label for="edit-digital-pdfUpload"
                                            class="btn create-btn-exchange my-1 mx-2">Click to
                                            upload file</label>
                                        <iframe class="w-100 h-100" id="edit-digital-frame" src=""
                                            frameborder="0"></iframe>
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-4 control-label" for="edit-digital-bookcover">Book
                                                Cover</label>
                                            <div class="col-md-8">
                                                <div class="input-file-wrapper">
                                                    <input id="edit-digital-bookcover" name="front_cover"
                                                        accept="image/*" class="input-file form-control"
                                                        type="file" style="margin-bottom: 12px;" required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <select name="genre" id="edit-digital-genre"
                                        class="form-control form-select"
                                        style="margin-bottom: 12px; color: #003060;" required>
                                        <option>Genre</option>
                                        <option value="Educational">Educational</option>
                                        <option value="Romance & Saga">Romance & Saga</option>
                                        <option value="Fantasy & Adventure">Fantasy & Adventure</option>
                                        <option value="Science Fiction">Science Fiction</option>
                                        <option value="Historical Fiction">Historical Fiction</option>
                                        <option value="Mystery & Suspense">Mystery & Suspense</option>
                                        <option value="Young Adult">Young Adult</option>
                                        <option value="Non-Fiction & Biography">Non-Fiction & Biography</option>
                                        <option value="Horror & Supernatural">Horror & Supernatural</option>
                                        <option value="Comedy & Satire">Comedy & Satire</option>
                                        <option value="Poetry & Prose">Poetry & Prose</option>
                                        <option value="Self-Help">Self-Help</option>
                                        <option value="Crime & Thriller">Crime & Thriller</option>
                                    </select>
                                    <input type="text" name="isbn" id="edit-digital-isbn"
                                        class="form-control" placeholder="ISBN"
                                        style="margin-bottom: 12px; color: #003060;" required>
                                    <input type="text" name="edition" id="edit-digital-edition"
                                        class="form-control" placeholder="Edition"
                                        style="margin-bottom: 12px; color: #003060;" required>
                                </div>
                                <input type="text" name="title" id="edit-digital-title"
                                    class="form-control" placeholder="Title"
                                    style="margin-bottom: 12px; color: #003060;" required>
                                <input type="text" name="author" id="edit-digital-author"
                                    class="form-control" placeholder="Author"
                                    style="margin-bottom: 12px; color: #003060;" required>
                                <textarea name="exchange_preferences" id="edit-digital-exchange-preferences" class="form-control" cols="30"
                                    rows="4" placeholder="Exchange Preferences (E.g., desired book genres etc.)"
                                    style="margin-bottom: 12px; color: #003060;" required></textarea>
                                <textarea name="description" id="edit-digital-description" class="form-control" cols="30" rows="4"
                                    placeholder="Description" style="margin-bottom: 12px; color: #003060;" required></textarea>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" id="digital-exchange-update"
                                    class="btn mx-auto w-25 text-white rounded-3 update-btn">Update</button>
                                <button type="button" id="digital-exchange-delete"
                                    class="btn mx-auto w-25 rounded-3 delete-btn">Delete</button>
                            </div>
                        </div>

                    </form>
                </div>

                <!-- exchange -->
                <div id="edit-exchange-div" class="modal-body container-fluid px-5">
                    <form id="edit-exchange-form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-5 me-1 border px-0 mb-2 rounded">
                                <input type="text" name="user_id" value="{{ session('id') }}" hidden>
                                <input type="text" name="weight" id="edit-exchange-weight" hidden>
                                <input type="text" name="width" id="edit-exchange-width" hidden>
                                <input type="text" name="height" id="edit-exchange-height" hidden>
                                <input type="text" name="length" id="edit-exchange-length" hidden>
                                <input type="text" name="courier" id="edit-exchange-courier" hidden>

                                <input type="file" name="book_photo" id="edit-exchange-image" class="d-none">
                                <small style="color: #737679; margin-left: 8px; font-size: 10px;">The book photo
                                    field must be a file of type: jpeg, png, jpg, gif.</small>
                                <label for="edit-exchange-image" class="position-relative w-100 h-100"
                                    style="cursor: pointer;">
                                    <img id="edit-exchange-book-image" src="../assets/listing.png" alt="image"
                                        class="img-fluid position-absolute top-50 start-50 translate-middle"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="Click to Upload Image" width="170" height="170">
                                </label>

                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-4 control-label" for="filebutton1">Back
                                            Cover</label>
                                        <div class="col-md-8">
                                            <div class="input-file-wrapper">
                                                <input id="filebutton1" name="back_cover" accept="image/*"
                                                    class="input-file form-control" type="file"
                                                    style="margin-bottom: 12px;">
                                            </div>
                                        </div>

                                        <label class="col-md-4 control-label" for="filebutton2"
                                            style="white-space: nowrap;">Content or Interior Photos</label>
                                        <div class="col-md-8">
                                            <div class="input-file-wrapper">
                                                <input id="filebutton2" name="interior_photo" accept="image/*"
                                                    class="input-file form-control" type="file"
                                                    style="margin-bottom: 12px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <select name="genre" id="edit-exchange-genre" class="form-control form-select"
                                    style="margin-bottom: 12px; color: #003060;">
                                    <option>Genre</option>
                                    <option value="Educational">Educational</option>
                                    <option value="Romance & Saga">Romance & Saga</option>
                                    <option value="Fantasy & Adventure">Fantasy & Adventure</option>
                                    <option value="Science Fiction">Science Fiction</option>
                                    <option value="Historical Fiction">Historical Fiction</option>
                                    <option value="Mystery & Suspense">Mystery & Suspense</option>
                                    <option value="Young Adult">Young Adult</option>
                                    <option value="Non-Fiction & Biography">Non-Fiction & Biography</option>
                                    <option value="Horror & Supernatural">Horror & Supernatural</option>
                                    <option value="Comedy & Satire">Comedy & Satire</option>
                                    <option value="Poetry & Prose">Poetry & Prose</option>
                                    <option value="Self-Help">Self-Help</option>
                                    <option value="Crime & Thriller">Crime & Thriller</option>
                                </select>
                                <input type="number" name="stock" id="edit-exchange-stock"
                                    class="form-control" placeholder="Stock"
                                    style="margin-bottom: 12px; color: #003060;">
                                <input type="text" name="edition" id="edit-exchange-edition"
                                    class="form-control" placeholder="Edition"
                                    style="margin-bottom: 12px; color: #003060;">
                                <button type="button" id="edit-exchange-shipping-fee-btn" class="form-control"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Click to open shipping form"
                                    style="text-align: justify; margin-bottom: 12px; color: #003060;">
                                    Shipping Fee
                                </button>
                                <select name="condition" id="edit-exchange-condition"
                                    class="form-control form-select" style="margin-bottom: 12px; color: #003060;">
                                    <option>Condition</option>
                                    <option value="New">New</option>
                                    <option value="Like New">Like New</option>
                                    <option value="Very Good">Very Good</option>
                                    <option value="Good">Good</option>
                                    <option value="Fair">Fair</option>
                                    <option value="Poor">Poor</option>
                                </select>
                                <select name="language" class="form-control form-select"
                                    style="margin-bottom: 12px; color: #003060;" id="edit-exchange-language">
                                    <option>Language</option>
                                    <option value="English">English</option>
                                </select>
                            </div>
                            <input type="text" id="edit-exchange-title" name="title" class="form-control"
                                placeholder="Title" style="margin-bottom: 12px; color: #003060;">
                            <input type="text" id="edit-exchange-author" name="author" class="form-control"
                                placeholder="Author" style="margin-bottom: 12px; color: #003060;">
                            <textarea name="exchange_preferences" id="edit-exchange-preferences" class="form-control" cols="30"
                                rows="4" placeholder="Exchange Preferences" style="margin-bottom: 12px; color: #003060;"></textarea>
                            <textarea name="description" id="edit-exchange-description" class="form-control" cols="30" rows="4"
                                placeholder="Description" style="margin-bottom: 12px; color: #003060;"></textarea>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="button" id="exchange-update"
                                class="btn mx-auto w-25 text-white rounded-3 update-btn">Update</button>
                            <button type="button" id="exchange-delete"
                                class="btn mx-auto w-25 rounded-3 delete-btn">Delete</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>



        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="createLiveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="../assets/Book_Logo.png" class="rouxunded me-2" alt="...">
                    <strong class="me-auto"></strong>
                    <small>1 min ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
                @if (session('createMessage') &&
                        session('createMessage') ==
                            'Listing created successfully! Your information has been recorded and is now live for viewing.')
                    <div class="toast-body fw-bold text-success">
                        {{ session('createMessage') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="deleteLiveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="../assets/Book_Logo.png" class="rouxunded me-2" alt="...">
                    <strong class="me-auto"></strong>
                    <small>1 min ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
                @if (session('deleteMessage') &&
                        session('deleteMessage') ==
                            'Listing deleted successfully. Your request has been processed, and the specified listing has been
                                            removed.')
                    <div class="toast-body fw-bold text-success">
                        {{ session('deleteMessage') }}
                    </div>
                @elseif (session('deleteMessage'))
                    <div class="toast-body fw-bold text-danger">
                        {{ session('deleteMessage') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="updateLiveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="../assets/Book_Logo.png" class="rouxunded me-2" alt="...">
                    <strong class="me-auto"></strong>
                    <small>1 min ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
                @if (session('updateMessage') == 'Update Confirmed: Your listing has been successfully updated.')
                    <div class="toast-body fw-bold text-success">
                        {{ session('updateMessage') }}
                    </div>
                @elseif (session('updateMessage'))
                    <div class="toast-body fw-bold text-danger">
                        {{ session('updateMessage') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])

<script>
    const fetchGet = async (path) => {
        const get = await fetch(path, {
            method: 'GET'
        });
        const data = await get.json();
        return data;

    }

    document.getElementById('submitButton').addEventListener('click', () => {
        if (document.getElementById('pdfUpload').files.length == 0) {
            alert('Please upload book file.');
        }
    });

    document.getElementById('pdfUpload').addEventListener('change', (e) => {
        var file = e.target.files[0];
        document.getElementById('frame').src = URL.createObjectURL(file);
    });

    document.getElementById('digital-pdfUpload').addEventListener('change', (e) => {
        var file = e.target.files[0];
        document.getElementById('digital-frame').src = URL.createObjectURL(file);
    });


    // Update
    document.getElementById('edit-pdfUpload').addEventListener('change', (e) => {
        var file = e.target.files[0];
        document.getElementById('edit-frame').src = URL.createObjectURL(file);
    });

    document.getElementById('edit-digital-pdfUpload').addEventListener('change', (e) => {
        var file = e.target.files[0];
        document.getElementById('edit-digital-frame').src = URL.createObjectURL(file);
    });


    function viewShipping(book_id, item_id) {
        fetch('/viewshipping/' + book_id, {
                method: 'GET'
            })
            .then(response => response.json())
            .then(result => {
                // console.log(result);
                var item_updated;
                result.item.forEach(item => {
                    if (item.id == item_id) {
                        item_updated = item.updated_at;
                        detail_payment_method.textContent = item.order.payment_method;
                        detail_order_number.textContent = item.order.order_number;
                        detail_shipping_address.textContent = item.order.address.brgy_village + ', ' + item
                            .order.address.city_municipality;
                        detail_barcode.src = 'images/bar_codes/' + item.bar_code;
                        detail_address.textContent = item.order.address.street_building_house + ' ' + item
                            .order.address.brgy_village + ', ' + item.order.address.city_municipality;
                    }
                });
                var date = new Date(item_updated);
                detail_order_date.textContent = date.toLocaleDateString('en-US', {
                    month: 'long',
                    year: 'numeric',
                    day: 'numeric'
                });
                detail_title.textContent = result.title;
                detail_status.textContent = result.status;
                detail_price.textContent = '₱' + result.price;
                detail_subtotal.textContent = '₱' + result.price;
                detail_total.textContent = '₱' + (parseFloat(result.price) + parseFloat(130)) + '.0';
            })
            .catch(error => console.error(error));
    }

    function hidePickupContent() {
        var detailContent = document.getElementById('details');
        detailContent.className = 'details-container d-none';
    }

    function displayPickupContent() {
        var detailContent = document.getElementById('details');
        detailContent.className = 'details-container';
        var currentDate = new Date().toISOString().split('T')[0];
        // Set the minimum date for the input
        document.getElementById('pickup-date').min = currentDate;
    }

    function myFunction() {
        window.print();
    }
    // toast script
    const deleteToast = bootstrap.Toast.getOrCreateInstance(document.getElementById('deleteLiveToast'));
    const createToast = bootstrap.Toast.getOrCreateInstance(document.getElementById('createLiveToast'));
    const updateToast = bootstrap.Toast.getOrCreateInstance(document.getElementById('updateLiveToast'));
    
    var exchange_delete = document.getElementById('exchange-delete');    
    exchange_delete.addEventListener('click', () => {
        var id = document.getElementById('edit-book-id');
    });
    var edit_modal = document.getElementById('edit-modal-category');
    var edit_courier;

    const itemClicked = (id, status) => {
        fetchGet(`/getbook/${id}`)
            .then(result => {
                if (status == 'Online Reading') {
                    edit_modal.value = 'Online Reading'
                    document.getElementById('edit-frame').src = `/files/books/${result.book_filename}`;
                    document.getElementById('edit-genre').value = result.genre;
                    document.getElementById('edit-isbn').value = result.isbn;
                    document.getElementById('edit-edition-sale').value = result.edition;
                    document.getElementById('edit-title').value = result.title;
                    document.getElementById('edit-author').value = result.author;
                    document.getElementById('edit-description').value = result.description;
                    document.getElementById('online-reading-delete').onclick = () => window.location.href =
                        `/mylist/delete/${result.id}`;
                    document.getElementById('online-reading-update').onclick = () => {
                        document.getElementById('edit-online-reading-form').action =
                            `/mylist/updateSale/${result.id}`;
                        document.getElementById('edit-online-reading-form').submit();
                    }

                    console.log(result);
                    document.getElementById("edit-online-reading-div").style.display = "flex";
                    document.getElementById("edit-exchange-div").style.display = "none";
                    document.getElementById('digital-update').style.display = "none";
                } else if (status == 'Digital Exchange') {
                    edit_modal.value = 'Digital Exchange';
                    document.getElementById('edit-digital-frame').src = `/files/books/${result.book_filename}`;
                    document.getElementById('edit-digital-genre').value = result.genre;
                    document.getElementById('edit-digital-isbn').value = result.isbn;
                    document.getElementById('edit-digital-edition').value = result.edition;
                    document.getElementById('edit-digital-title').value = result.title;
                    document.getElementById('edit-digital-author').value = result.author;
                    document.getElementById('edit-digital-exchange-preferences').value = result
                        .exchange_preferences;
                    document.getElementById('edit-digital-description').value = result.description;
                    document.getElementById('digital-exchange-delete').onclick = () => window.location.href =
                        `/mylist/delete/${result.id}`;
                    document.getElementById('digital-exchange-update').onclick = () => {
                        document.getElementById('edit-digital-form').action =
                            `/mylist/digitalupdate/${result.id}`;
                        document.getElementById('edit-digital-form').submit();
                    }

                    document.getElementById("edit-online-reading-div").style.display = "none";
                    document.getElementById("edit-exchange-div").style.display = "none";
                    document.getElementById('digital-update').style.display = "flex";
                } else {
                    document.getElementById("edit-online-reading-div").style.display = "none";
                    document.getElementById('digital-update').style.display = "none";
                    document.getElementById("edit-exchange-div").style.display = "none";
                }
                updateListingModal.show();
            })
            .catch(err => console.error(err));


    }
    
    var exchange_update_btn = document.getElementById('exchange-update');  
    exchange_update_btn.addEventListener('click', () => {        
    });

    edit_modal.addEventListener('change', () => {
        if (edit_modal.value == 'Online Reading') {
            document.getElementById("edit-online-reading-div").style.display = "flex";
            document.getElementById("edit-exchange-div").style.display = "none";
        } else if (edit_modal.value == 'Exchange') {
            document.getElementById("edit-online-reading-div").style.display = "none";
            document.getElementById("edit-exchange-div").style.display = "flex";
        }
    });
    // sort select    
    var sort_by = document.getElementById('sort');
    sort_by.addEventListener('change', function() {
        if (sort_by.value == "All") {
            window.location.href = "/mylist";
        } else if (sort_by.value == "Sale") {
            window.location.href = "/mylist/sale";
        } else if (sort_by.value == "Exchange") {
            window.location.href = "/mylist/exchange";
        }
    });
    // tool tips   
    const ExchangeImageToolTip = document.getElementById('exchange-book-image');
    const tooltipExchangeImageShow = bootstrap.Tooltip.getOrCreateInstance(ExchangeImageToolTip);

    // modals
    const createListingModal = new bootstrap.Modal('#createListingModal', {
        keyboard: false
    });
    const updateListingModal = new bootstrap.Modal('#updateListingModal', {
        keyboard: false
    });

    var list_category = document.getElementById("modal-category");
    // var create_listing_btn = document.getElementById('create-listing');
    var edit_sale_shipping_fee_btn = document.getElementById('edit-sale-shipping-fee-btn');

    document.getElementById('create-listing').addEventListener('click', function() {
        list_category.value = 'Online Reading';
        document.getElementById('listing-type').textContent = 'Online Reading';
        document.getElementById("sale").style.display = "flex";
        document.getElementById("exchange").style.display = "none";
        document.getElementById("digital").style.display = "none";
        createListingModal.show();
    });

    document.getElementById('create-exchange-listing').addEventListener('click', () => {
        list_category.value = 'Physical Exchange';
        document.getElementById('listing-type').textContent = 'Physical Exchange';
        document.getElementById("sale").style.display = "none";
        document.getElementById("exchange").style.display = "flex";
        document.getElementById("digital").style.display = "none";
        createListingModal.show();
    });

    document.getElementById('create-digital-exchange-listing').addEventListener('click', () => {
        list_category.value = 'Digital Exchange';
        document.getElementById('listing-type').textContent = 'Digital Exchange';
        document.getElementById("sale").style.display = "none";
        document.getElementById("exchange").style.display = "none";
        document.getElementById("digital").style.display = "flex";
        createListingModal.show();
    });

    var sale_form = document.getElementById('sale-form');
    var exchange_form = document.getElementById('exchange-form');
    // var rent_form = document.getElementById('rent-form');
    sale_form.addEventListener('submit', function(event) {
        sale_weight.value = weight.value;
        sale_width.value = width.value;
        sale_height.value = height.value;
        sale_length.value = length.value;
        sale_courier.value = courier;
    });
    exchange_form.addEventListener('submit', function(event) {
        exchange_weight.value = weight.value;
        exchange_width.value = width.value;
        exchange_height.value = height.value;
        exchange_length.value = length.value;
        exchange_courier.value = courier;
    });

    // list category    
    
    list_category.addEventListener("change", function() {
        // console.log(String(list_category.value));
        if (list_category.value == "Online Reading") {
            document.getElementById("sale").style.display = "flex";
            document.getElementById("exchange").style.display = "none";
        } else if (list_category.value == "Exchange") {
            document.getElementById("sale").style.display = "none";
            document.getElementById("exchange").style.display = "flex";
        }
    });
    // uploading image    
    var exchange_image_upload = document.getElementById("exchange-image");

    exchange_image_upload.addEventListener("change", function() {
        var image = document.getElementById("exchange-book-image");
        image.src = URL.createObjectURL(event.target.files[0]);
    });

    // uploading edit image
    
    var exchange_image_upload = document.getElementById("edit-exchange-image");
   
    exchange_image_upload.addEventListener("change", function() {
        var image = document.getElementById("edit-exchange-book-image");
        image.src = URL.createObjectURL(event.target.files[0]);
    });

    document.getElementById('flexCheckDefault').addEventListener('change', function() {
        var submitButton = document.getElementById('submitButton');
        submitButton.disabled = !this.checked;
    });
    document.getElementById('digitalCheckList').addEventListener('change', function() {
        var submitButton = document.getElementById('digitalSubmitButton');
        submitButton.disabled = !this.checked;
    });
</script>
