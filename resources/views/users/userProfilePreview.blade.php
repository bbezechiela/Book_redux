@include('partials.__header', [
'title' => 'User Profile Preview | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/preview-style.css',
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
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <input class="form-control rounded-3" type="text" placeholder="Search">
                    </div>
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
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </ul>
        <div class="container text-center seller-details mx-4">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <img src="../assets/nestine.png" alt="seller image" class="circle-picture">
                        <div class="user-info">
                            <p>Nestine Nicole Navarro</p>
                            <p>2K followers . 400 following</p>
                            <p>Lives in Tacloban City</p>
                            <button class="message-button"><i class="fa fa-envelope"
                                    aria-hidden="true"></i>Message</button>
                            <button class="follow-button"><i class="fa fa-plus" aria-hidden="true"></i>Follow</button>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle ellipsis-button" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-h ellipsis-icon ml-auto" aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fa fa-exclamation-circle"
                                            aria-hidden="true" style="margin-right: 7px"></i>
                                        Report</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-ban" aria-hidden="true"
                                            style="margin-right: 7px"></i>Block</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="ratings">
                        <p>Ratings <span class="rate">100</span></p>
                        <p>Books Bought <span class="bought">20</span></p>
                    </div>
                </div>
                <div class="col">
                    <div class="ratings">
                        <p>Books Sold <span class="sold">203</span></p>
                        <p>Books Exchanged <span class="exchange">59</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-details">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/userlistings">Listings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="/userreviews">User Reviews and Ratings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="/userwishlist">Wish List</a>
                </li>
            </ul>
        </div>
        <div class="row contents px-3 mt-4">
            <div class="row justify-content-between mx-auto">
                <div class="col-4 d-flex flex-row">
                    <h3 class="fw-bold">Listings (Ikaw nala himo UI kay na error na an ak cocopyhan unta kay mayda na
                        backend hahaha)</h3>
                </div>
                {{--
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <label class="fw-bold" for="sort">Sort by</label>
                    <select class="px-3 py-1 h-75 ms-2 rounded" name="" id="sort">
                        <option selected disabled>{{ $status }}</option>
                <option value="All">All</option>
                <option value="Sale">Sale</option>
                <option value="Exchange">Exchange</option>
                <option value="Rent">Rent</option>
                </select>
            </div>
            <div id="content-cards" class="w-100 mx-2 d-flex px-4 overflow-x-auto"
                style="height: 300px; margin-top: 2em;">
                @foreach ($books as $book)
                <div class="card col-3 m-1 shadow" style="width: 200px; flex: 0 0 auto;">
                    <span id="status_{{ $book->id }}" hidden>{{ $book->status }}</span>
                    <span id="user_{{ $book->id }}" hidden>{{ $book->post_user }}</span>
                    <span id="edition_{{ $book->id }}" hidden>{{ $book->edition }}</span>
                    <span id="condition_{{ $book->id }}" hidden>{{ $book->condition }}</span>
                    <span id="description_{{ $book->id }}" hidden>{{ $book->description }}</span>
                    <span id="language_{{ $book->id }}" hidden>{{ $book->language }}</span>
                    <span id="weight_{{ $book->id }}" hidden>{{ $book->weight }}</span>
                    <span id="width_{{ $book->id }}" hidden>{{ $book->width }}</span>
                    <span id="height_{{ $book->id }}" hidden>{{ $book->height }}</span>
                    <span id="length_{{ $book->id }}" hidden>{{ $book->length }}</span>
                    <span id="courier_{{ $book->id }}" hidden>{{ $book->courier }}</span>
                    <span id="price_{{ $book->id }}" hidden>{{ $book->price }}</span>

                    <span id="exchange_preferences_{{ $book->id }}" hidden>{{ $book->exchange_preferences }}</span>

                    <span id="rental_duration_{{ $book->id }}" hidden>{{ $book->rental_duration }}</span>
                    <span id="rental_terms_and_condition_{{ $book->id }}"
                        hidden>{{ $book->rental_terms_and_condition }}</span>
                    <span id="security_deposit_{{ $book->id }}" hidden>{{ $book->security_deposit }}</span>

                    <img id="photo_{{ $book->id }}" data-filename="{{ $book->book_photo }}"
                        src="{{ asset('images/books/' . $book->book_photo) }}" class="img mx-auto p-2"
                        alt="{{ $book->book_photo }}" width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="title_{{ $book->id }}" class="card-title mb-0 fw-bold">
                            {{ $book->title }}</p>
                        <p id="author_{{ $book->id }}" class="card-text mt-0 mb-0 pb-0">
                            {{ $book->author }}</p>
                        <p id="genre_{{ $book->id }}" class="card-text mt-0 mb-2 pt-0">
                            {{ $book->genre }}</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">₱{{ $sale->price }}</span>
                            <div class="button-container">
                                <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Cart</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>--}}
    </div>
</div>
</div>
@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])