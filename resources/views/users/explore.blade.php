@include('partials.__header', [
    'title' => 'Explore | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/explore-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDYtN3BNCcHFJXpQXrNMxKxIsc9-Pdd-0&callback=console.debug&libraries=maps,marker,places&v=beta">
    </script>
</head>

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 shadow">
        <x-sidebar />
    </div>
    <div id="content" class="content">
        <ul class="nav bg-light sticky-top head-nav shadow py-4 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                <a href="/explore" id="logo" class="px-2"><img class="img mx-1" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
                <a class="mx-2 mt-2 tabs" id="daily-discover-anchor" href="#daily-discover">Daily Discover</a>
                <a class="mx-2 mt-2 tabs" id="featured-anchor" href="#featured">New Listings</a>
                <a class="mx-2 mt-2 tabs" id="recommended-anchor" href="#recommended">Recommended for you</a>
                <a class="mx-2 mt-2 tabs" id="for_exchange-anchor" href="#for_exchange">Online Reading</a>
                <a class="mx-2 mt-2 tabs" id="for_exchange-anchor" href="#for_exchange">For exchange</a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <div class="position-relevant">
                            <input id="search_input" class="form-control rounded-3" type="text" placeholder="Search">
                            <div id="searches" class="position-absolute border bg-light w-100 p-2"
                                style="cursor: pointer;">
                            </div>
                        </div>
                    </div>
                    <ul class="nav py-profile justify-content-end" style="margin-left: 2em; margin-right: 2em;">
                        <li class="nav-item dropdown">
                            <a href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                class="nav-link dropdown-toggle avatar" aria-expanded="false" title="profile">
                                <img src="{{ session('image') }}" alt="notification" width="35" height="35"
                                    class="rounded-5">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/myprofile">Profile</a></li>
                                <li><a class="dropdown-item" href="/mypurchase">My Exchange Request</a></li>
                                <li><a class="dropdown-item" href="/addresses">Addresses</a></li>
                                {{-- <li><a class="dropdown-item" href="/changepassword">Change Password</a></li> --}}
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </ul>
        {{-- <button type="button" class="position-absolute end-0 mt-2 btn fw-bold nearby-user-btn"
            style="color: #E55B13; margin-right: 230px"><img src="assets/location-icon.png" alt="Location icon"
                class="img" width="25">Find Nearby Users</button type="button">
        <button type="button" class="position-absolute end-0 mt-2 mx-3 btn fw-bold nearby-seller-btn"
            style="color: #E55B13"><img src="assets/location-icon.png" alt="Location icon" class="img"
                width="25">Find Nearby Listings</button type="button"> --}}

        {{-- <div id="books" class="mx-5 px-5 mt-5">
            <div id="content-cards" class="w-100 mx-2 d-flex px-4 overflow-x-auto" style="height: 280px; ">
                @foreach ($post as $book)
                    <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                        onclick="clickedPost({{ $book->id }}, {{ $book->user_id }})">
                        <img src="{{ asset('images/book_cover/' . $book->back_cover) }}" class="img mx-auto p-2"
                            alt="..." width="130px" height="150px">
                        <div class="card-body py-0">
                            <p id="book-title" class="card-title mb-0 fw-bold">{{ $book->title }}</p>
                            <p class="card-text mt-0 mb-0">{{ $book->author }}<br>
                                {{ $book->genre }}</p>                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div> --}}
        <div id="daily-discover" class="mx-5 px-5">
            <h4 id="daily-discover-header">Daily Discover</h4>
            <div id="content-cards" class="w-100 mx-2 d-flex px-4 overflow-x-auto" style="height: 290px; ">
                <!-- card Daily Discover -->
                @php
                    $dailyAmount = 0;
                @endphp
                @foreach ($post->shuffle() as $daily)
                    @if (!preg_match('/' . $daily->genre . ',?/i', $user->interest))
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $daily->back_cover) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $daily->author }}<br>
                                    {{ $daily->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $daily->status }}</p>
                            </div>
                        </div>
                        @php
                            $dailyAmount++;

                            if ($dailyAmount == 10) {
                                break;
                            }
                        @endphp
                        {{-- @if ($daily->user->type == 'Bookseller')
                            @if ($daily->status == 'Rent' && $daily->stock > 0)
                                <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                                    <img src="{{ asset('images/books/' . $daily->book_photo) }}" class="img mx-auto p-2"
                                        alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                        <p class="card-text mt-0 mb-0">{{ $daily->author }}<br>
                                            {{ $daily->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $daily->user->address }}</p>
                                        @foreach ($daily->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $daily->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $daily->security_deposit }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $daily->id }}"
                                                                onclick="stopPropagation(event)"><i
                                                                    class="fa fa-cart-plus" aria-hidden="true"
                                                                    style="margin-right: 7px"></i>Add to
                                                                Cart</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $dailyAmount++;

                                    if ($dailyAmount == 10) {
                                        break;
                                    }
                                @endphp
                            @elseif ($daily->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                                    <img src="{{ asset('images/books/' . $daily->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                        <p class="card-text mt-0 mb-0">{{ $daily->author }}<br>
                                            {{ $daily->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $daily->user->address }}</p>
                                        @foreach ($daily->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $daily->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $daily->price }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $daily->id }}"
                                                                onclick="stopPropagation(event)"><i
                                                                    class="fa fa-cart-plus" aria-hidden="true"
                                                                    style="margin-right: 7px"></i>Add to
                                                                Cart</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $dailyAmount++;

                                    if ($dailyAmount == 10) {
                                        break;
                                    }
                                @endphp
                            @endif
                        @elseif ($daily->status == 'Exchange' && $daily->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                                <img src="{{ asset('images/books/' . $daily->book_photo) }}" class="img mx-auto p-2"
                                    alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $daily->author }}<br>
                                        {{ $daily->genre }}</p>
                                    @foreach ($daily->user->addressUser as $address)
                                        @if ($address->default_address)
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->address }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($daily->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $daily->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">For Exchange</span>
                                    </div>
                                </div>
                            </div>
                            @php
                                $dailyAmount++;

                                if ($dailyAmount == 10) {
                                    break;
                                }
                            @endphp
                        @elseif ($daily->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                                <img src="{{ asset('images/books/' . $daily->book_photo) }}" class="img mx-auto p-2"
                                    alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $daily->author }}<br>
                                        {{ $daily->genre }}</p>
                                    @foreach ($daily->user->addressUser as $address)
                                        @if ($address->default_address)
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->address }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($daily->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $daily->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $daily->price }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $daily->id }}"
                                                            onclick="stopPropagation(event)"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to
                                                            Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $dailyAmount++;

                                if ($dailyAmount == 10) {
                                    break;
                                }
                            @endphp
                        @endif --}}
                    @endif
                @endforeach
            </div>
        </div>
        <div id="featured" class="mx-5 px-5">
            <h4 id="featured-header">New Listings</h4>
            <div class="w-100mx-2 d-flex px-4 overflow-x-auto" style="height: 290px; ">
                <!-- card Featured -->
                @php
                    $featuredAmount = 0;
                @endphp
                @foreach ($post->sortByDesc('created_at') as $daily)
                    <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                        onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                        <img src="{{ asset('images/book_cover/' . $daily->back_cover) }}" class="img mx-auto p-2"
                            alt="..." width="130px" height="150px">
                        <div class="card-body py-0">
                            <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                            <p class="card-text mt-0 mb-0">{{ $daily->author }}<br>
                                {{ $daily->genre }}</p>
                            <p class="fw-bold" style="color: #E55B13;">{{ $daily->status }}</p>
                        </div>
                    </div>
                    @php
                        $featuredAmount++;

                        if ($featuredAmount == 10) {
                            break;
                        }
                    @endphp
                    {{-- @if ($daily->user->type == 'Bookseller')
                        @if ($daily->status == 'Rent' && $daily->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                                <img src="{{ asset('images/books/' . $daily->book_photo) }}" class="img mx-auto p-2"
                                    alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $daily->author }}<br>
                                        {{ $daily->genre }}</p>
                                    <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                            aria-hidden="true"></i>{{ $daily->user->address }}</p>
                                    @foreach ($daily->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $daily->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $daily->security_deposit }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $daily->id }}"
                                                            onclick="stopPropagation(event)"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to
                                                            Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $featuredAmount++;

                                if ($featuredAmount == 10) {
                                    break;
                                }
                            @endphp
                        @elseif ($daily->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                                <img src="{{ asset('images/books/' . $daily->book_photo) }}" class="img mx-auto p-2"
                                    alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $daily->author }}<br>
                                        {{ $daily->genre }}</p>
                                    <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                            aria-hidden="true"></i>{{ $daily->user->address }}</p>
                                    @foreach ($daily->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $daily->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $daily->price }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $daily->id }}"
                                                            onclick="stopPropagation(event)"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to
                                                            Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $featuredAmount++;

                                if ($featuredAmount == 10) {
                                    break;
                                }
                            @endphp
                        @endif
                    @elseif ($daily->status == 'Exchange' && $daily->stock > 0)
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                            <img src="{{ asset('images/books/' . $daily->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $daily->author }}<br>
                                    {{ $daily->genre }}</p>
                                @foreach ($daily->user->addressUser as $address)
                                    @if ($address->default_address)
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $address->address }}
                                        </p>
                                    @endif
                                @endforeach
                                @foreach ($daily->cart as $cart)
                                    @if ($cart->user_id == session('id') && $cart->product_id == $daily->id)
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0 text-success">Added to cart</span>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">For Exchange</span>
                                </div>
                            </div>
                        </div>
                        @php
                            $featuredAmount++;

                            if ($featuredAmount == 10) {
                                break;
                            }
                        @endphp
                    @elseif ($daily->stock > 0)
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                            <img src="{{ asset('images/books/' . $daily->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $daily->author }}<br>
                                    {{ $daily->genre }}</p>
                                @foreach ($daily->user->addressUser as $address)
                                    @if ($address->default_address)
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $address->address }}
                                        </p>
                                    @endif
                                @endforeach
                                @foreach ($daily->cart as $cart)
                                    @if ($cart->user_id == session('id') && $cart->product_id == $daily->id)
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0 text-success">Added to cart</span>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">₱{{ $daily->price }}</span>
                                    <div class="button-container">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle add-button"
                                                onclick="stopPropagation(event)" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/addtocart/{{ $daily->id }}"
                                                        onclick="stopPropagation(event)"><i class="fa fa-cart-plus"
                                                            aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                        Cart</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                            $featuredAmount++;

                            if ($featuredAmount == 10) {
                                break;
                            }
                        @endphp
                    @endif --}}
                @endforeach
            </div>
        </div>
        <div id="recommended" class="mx-5 px-5">
            <h4 id="recommended-header">Recommended for you</h4>
            <div class="w-100mx-2 d-flex px-4 overflow-x-auto" style="height: 290px; ">
                <!-- card Recommended for you -->
                @php
                    $recommendedAmount = 0;
                @endphp
                @foreach ($post as $recommended)
                    @if (preg_match('/' . $recommended->genre . ',?/i', $user->interest))
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $recommended->id }}, {{ $recommended->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $recommended->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $recommended->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $recommended->author }}<br>
                                    {{ $recommended->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $recommended->status }}</p>
                            </div>
                        </div>
                        @php
                            $recommendedAmount++;

                            if ($recommendedAmount == 10) {
                                break;
                            }
                        @endphp
                        {{-- @if ($recommended->user->type == 'Bookseller')
                            @if ($recommended->status == 'Rent' && $recommended->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $recommended->id }}, {{ $recommended->user_id }})">
                                    <img src="{{ asset('images/books/' . $recommended->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $recommended->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $recommended->author }}<br>
                                            {{ $recommended->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $recommended->user->address }}</p>
                                        @foreach ($recommended->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $recommended->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $recommended->security_deposit }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $recommended->id }}"
                                                                onclick="stopPropagation(event)"><i
                                                                    class="fa fa-cart-plus" aria-hidden="true"
                                                                    style="margin-right: 7px"></i>Add to
                                                                Cart</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $recommendedAmount++;

                                    if ($recommendedAmount == 10) {
                                        break;
                                    }
                                @endphp
                            @elseif ($recommended->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $recommended->id }}, {{ $recommended->user_id }})">
                                    <img src="{{ asset('images/books/' . $recommended->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $recommended->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $recommended->author }}<br>
                                            {{ $recommended->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $recommended->user->address }}</p>
                                        @foreach ($recommended->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $recommended->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $recommended->price }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $recommended->id }}"
                                                                onclick="stopPropagation(event)"><i
                                                                    class="fa fa-cart-plus" aria-hidden="true"
                                                                    style="margin-right: 7px"></i>Add to
                                                                Cart</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $recommendedAmount++;

                                    if ($recommendedAmount == 10) {
                                        break;
                                    }
                                @endphp
                            @endif
                        @elseif ($recommended->status == 'Exchange' && $recommended->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $recommended->id }}, {{ $recommended->user_id }})">
                                <img src="{{ asset('images/books/' . $recommended->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">{{ $recommended->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $recommended->author }}<br>
                                        {{ $recommended->genre }}</p>
                                    @foreach ($recommended->user->addressUser as $address)
                                        @if ($address->default_address)
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->address }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($recommended->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $recommended->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">For Exchange</span>
                                    </div>
                                </div>
                            </div>
                            @php
                                $recommendedAmount++;

                                if ($recommendedAmount == 10) {
                                    break;
                                }
                            @endphp
                        @elseif ($recommended->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $recommended->id }}, {{ $recommended->user_id }})">
                                <img src="{{ asset('images/books/' . $recommended->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">{{ $recommended->title }}
                                    </p>
                                    <p class="card-text mt-0 mb-0">{{ $recommended->author }}<br>
                                        {{ $recommended->genre }}</p>
                                    @foreach ($recommended->user->addressUser as $address)
                                        @if ($address->default_address)
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->address }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($recommended->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $recommended->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $recommended->price }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $recommended->id }}"
                                                            onclick="stopPropagation(event)"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to
                                                            Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $recommendedAmount++;

                                if ($recommendedAmount == 10) {
                                    break;
                                }
                            @endphp
                        @endif --}}
                    @endif
                @endforeach
            </div>
        </div>
        <div id="for_sale" class="mx-5 px-5">
            <h4 id="for-sale-header">Online Reading</h4>
            <div class="w-100mx-2 d-flex px-4 overflow-x-auto" style="height: 290px; ">
                <!-- card For Sale -->
                @php
                    $loopAmount = 0;
                @endphp
                @foreach ($post->shuffle() as $onlineReading)
                    @if ($onlineReading->status == 'Online Reading')
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $onlineReading->id }}, {{ $onlineReading->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $onlineReading->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $onlineReading->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $onlineReading->author }}<br>
                                    {{ $onlineReading->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $onlineReading->status }}</p>
                            </div>
                        </div>
                        @php
                            $loopAmount++;

                            if ($loopAmount == 10) {
                                break;
                            }
                        @endphp
                    @endif
                    {{-- @if ($sale->status == 'Sale' && $sale->stock > 0)
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $sale->id }}, {{ $sale->user_id }})">
                            <img src="{{ asset('images/books/' . $sale->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $sale->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $sale->author }}<br>
                                    {{ $sale->genre }}</p>
                                @if ($sale->user->type == 'Bookseller')
                                    <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                            aria-hidden="true"></i>{{ $sale->user->address }}
                                    </p>
                                @else
                                    @foreach ($sale->user->addressUser as $address)
                                        @if ($address->default_address)
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->address }}
                                            </p>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($sale->cart->count() >= 0)
                                    @foreach ($sale->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $sale->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $sale->price }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $sale->id }}"
                                                            onclick="stopPropagation(event)"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to
                                                            Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        @php
                            $loopAmount++;

                            if ($loopAmount == 10) {
                                break;
                            }
                        @endphp
                    @endif --}}
                @endforeach

            </div>
        </div>
        <div id="for_exchange" class="mx-5 px-5">
            <h4 id="for-exchange-header">For Exchange</h4>
            <div class="w-100mx-2 d-flex px-4 overflow-x-auto" style="height: 290px; ">
                <!-- card For Exchange -->
                @php
                    $exchangeAmount = 0;
                @endphp
                @foreach ($post->shuffle() as $exchange)
                    @if ($exchange->status == 'Digital Exchange')
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $exchange->id }}, {{ $exchange->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $exchange->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $exchange->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $exchange->author }}<br>
                                    {{ $exchange->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $exchange->status }}</p>
                            </div>
                        </div>
                    @endif
                    {{-- @if ($exchange->status == 'Exchange' && $exchange->stock > 0)
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $exchange->id }}, {{ $exchange->user_id }})">
                            <img src="{{ asset('images/books/' . $exchange->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $exchange->title }}
                                </p>
                                <p class="card-text mt-0 mb-0">{{ $exchange->author }}<br>
                                    {{ $exchange->genre }}</p>
                                @foreach ($exchange->user->addressUser as $address)
                                    @if ($address->default_address)
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $address->address }}
                                        </p>
                                    @endif
                                @endforeach
                                @if ($exchange->cart->count() >= 0)
                                    @foreach ($exchange->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $exchange->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">For Exchange</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                        @php
                            $exchangeAmount++;

                            if ($exchangeAmount == 10) {
                                break;
                            }
                        @endphp
                    @endif --}}
                @endforeach
            </div>
        </div>

        <!-- DAILY DISCOVERY CONTENT -->
        <div id="daily-discovery-content" class="daily-discovery-content mt-3 w-100">
            <h4 class="text-center daily_discovery_text mx-5 pb-2">DAILY DISCOVER</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($post->shuffle() as $daily)
                    @if (!preg_match('/' . $daily->genre . ',?/i', $user->interest))
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $daily->back_cover) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $daily->author }}<br>
                                    {{ $daily->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $daily->status }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <!-- FEATURED CONTENT -->
        <div id="featured-content" class="daily-discovery-content mt-3 w-100">
            <h4 class="text-center daily_discovery_text mx-5 pb-2">NEW LISTINGS</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($post->sortByDesc('created_at') as $daily)
                    <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                        onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                        <img src="{{ asset('images/book_cover/' . $daily->back_cover) }}" class="img mx-auto p-2"
                            alt="..." width="130px" height="150px">
                        <div class="card-body py-0">
                            <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                            <p class="card-text mt-0 mb-0">{{ $daily->author }}<br>
                                {{ $daily->genre }}</p>
                            <p class="fw-bold" style="color: #E55B13;">{{ $daily->status }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- RECOMMENDED FOR YOU CONTENT -->
        <div id="recommended-content" class="daily-discovery-content mt-3 w-100">
            <h4 class="text-center daily_discovery_text mx-5 pb-2">RECOMMENDED FOR YOU</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($post as $recommended)
                    @if (preg_match('/' . $recommended->genre . ',?/i', $user->interest))
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $recommended->id }}, {{ $recommended->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $recommended->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $recommended->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $recommended->author }}<br>
                                    {{ $recommended->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $recommended->status }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <!-- FOR SALE CONTENT -->
        <div id="for-sale-content" class="daily-discovery-content mt-3 w-100">
            <h4 class="text-center daily_discovery_text mx-5 pb-2">ONLINE READING</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($post->shuffle() as $onlineReading)
                    @if ($onlineReading->status == 'Online Reading')
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $onlineReading->id }}, {{ $onlineReading->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $onlineReading->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $onlineReading->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $onlineReading->author }}<br>
                                    {{ $onlineReading->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $onlineReading->status }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <!-- FOR EXCHANGE CONTENT -->
        <div id="for-exchange-content" class="daily-discovery-content mt-3 w-100">
            <h4 class="text-center daily_discovery_text mx-5 pb-2">FOR EXCHANGE</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($post->shuffle() as $exchange)
                    @if ($exchange->status == 'Digital Exchange')
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $exchange->id }}, {{ $exchange->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $exchange->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $exchange->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $exchange->author }}<br>
                                    {{ $exchange->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $exchange->status }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>

        {{-- Notification Toast --}}
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
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

        {{-- Map Marker Toast --}}
        {{-- <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="mapToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="../assets/Book_Logo.png" class="rouxunded me-2" alt="...">
                    <strong class="me-auto"></strong>                    
                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
                <div class="toast-body fw-bold text-success px-0 py-2">
                    <div class="w-100 px-3 d-flex ">
                        <img id="map-toast-img" class="img rounded-4" src="/assets/osama.png" alt="profile" style="width: 60px">
                        <div class="border mx-3 w-100">
                            <h5 id="map-toast-name" class="fw-bold py-0 mt-0 mb-0" style="color: #003060">Osama Velasco</h5>
                            <p id="map-toast-address" class="text-secondary py-0 mt-0">Address</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
</div>

{{-- Nearby Listings Modal --}}
<div class="modal fade" id="nearby_seller_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel" style="color: #E55B13;">Find Nearby
                    Listings</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <select class="form-select" id="circle-radius" aria-label="Floating label select example">
                        <option value="1">1 Kilometre</option>
                        <option value="2">2 Kilometre</option>
                        <option value="5">5 Kilometre</option>
                        <option value="10">10 Kilometre</option>
                        <option value="20">20 Kilometre</option>
                        <option value="40">40 Kilometre</option>
                        <option value="50">50 Kilometre</option>
                        <option value="60">60 Kilometre</option>
                        <option value="70">70 Kilometre</option>
                        <option value="80">80 Kilometre</option>
                        <option value="90">90 Kilometre</option>
                        <option value="100">100 Kilometre</option>
                        <option value="120">120 Kilometre</option>
                        <option value="130">130 Kilometre</option>
                    </select>
                    <label class="fw-bold" for="circle-radius">Radius</label>
                </div>
                <div class=" d-flex justify-content-end flex-row">
                    <label for="current-location">Current Location:</label>
                    <div class="form-check form-switch mb-2 ms-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="current-location">
                    </div>
                </div>
                <div class="border rounded">
                    {{-- <gmp-map class="mx-auto" center="11.240029883135003, 125.00268827609003" zoom="16" map-id="DEMO_MAP_ID">
                        <gmp-advanced-marker position="11.240029883135003, 125.00268827609003" title="Second location"></gmp-advanced-marker>
                    </gmp-map> --}}
                    <div id="map" style="height: 400px"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="nearbylisting-apply-btn" class="btn btn-outline-primary">Apply</button>
            </div>
        </div>
    </div>
</div>

{{-- Nearby Seller Modal --}}
<div class="modal fade" id="nearby_user_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel" style="color: #E55B13;">Find Nearby
                    Users</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <select class="form-select" id="user-circle-radius" aria-label="Floating label select example">
                        <option value="1">1 Kilometre</option>
                        <option value="2">2 Kilometre</option>
                        <option value="5">5 Kilometre</option>
                        <option value="10">10 Kilometre</option>
                        <option value="20">20 Kilometre</option>
                        <option value="40">40 Kilometre</option>
                        <option value="50">50 Kilometre</option>
                        <option value="60">60 Kilometre</option>
                        <option value="70">70 Kilometre</option>
                        <option value="80">80 Kilometre</option>
                        <option value="90">90 Kilometre</option>
                        <option value="100">100 Kilometre</option>
                        <option value="120">120 Kilometre</option>
                        <option value="130">130 Kilometre</option>
                    </select>
                    <label class="fw-bold" for="circle-radius">Radius</label>
                </div>
                <div class="d-flex justify-content-end flex-row">
                    <label for="current-user-location">Current Location:</label>
                    <div class="form-check form-switch mb-2 ms-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="current-user-location">
                    </div>
                </div>
                <div class="border rounded">
                    {{-- <gmp-map class="mx-auto" center="11.240029883135003, 125.00268827609003" zoom="16" map-id="DEMO_MAP_ID">
                        <gmp-advanced-marker position="11.240029883135003, 125.00268827609003" title="Second location"></gmp-advanced-marker>
                    </gmp-map> --}}
                    <div id="users-map" style="height: 400px"></div>
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
<script>
    window.embeddedChatbotConfig = {
        chatbotId: "XDQ-VKWvQDxvk6o6YOZkL",
        domain: "www.chatbase.co"
    }
</script>
<script src="https://www.chatbase.co/embed.min.js" chatbotId="XDQ-VKWvQDxvk6o6YOZkL" domain="www.chatbase.co" defer>
</script>


<script>
    // Proximity script

    let map;
    let book_ids = [];
    let coordinates = {
        lat: 0,
        lng: 0
    };

    function drawCircle(map, coordinates, proximity) {
        var circle = new google.maps.Circle({
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0,
            map: map,
            center: coordinates,
            radius: proximity * 1000
        });
    }


    const successCallback = (position) => {
        console.log(position.coords.latitude + ', ' + position.coords.latitude);
        coordinates.lat = position.coords.latitude;
        coordinates.lng = position.coords.latitude;

        map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: coordinates.lat,
                lng: coordinates.lng
            },
            zoom: 13
        });

        drawCircle(map, {
            lat: coordinates.lat,
            lng: coordinates.lng
        }, document.getElementById('circle-radius').value);

        getNearbyListings();
        // gmp_map.setAttribute('center', position.coords.latitude + ', ' + position.coords.longitude);

        // var pinCurrentLocation = document.createElement('gmp-advanced-marker');
        // pinCurrentLocation.setAttribute('position', position.coords.latitude + ', ' + position.coords.longitude);
        // pinCurrentLocation.setAttribute('title', 'Current Location');        
        // gmp_map.appendChild(pinCurrentLocation);

    };

    const nearbyUserSuccessCallback = (position) => {
        coordinates.lat = position.coords.latitude;
        coordinates.lng = position.coords.latitude;

        map = new google.maps.Map(document.getElementById('users-map'), {
            center: {
                lat: coordinates.lat,
                lng: coordinates.lng
            },
            zoom: 13
        });

        drawCircle(map, {
            lat: coordinates.lat,
            lng: coordinates.lng
        }, document.getElementById('user-circle-radius').value);

        getNearbyUsers();
    }

    const errorCallback = (error) => {
        console.log(error);
    };

    const options = {
        enableHighAccuracy: true,
        timeout: 10000,
    };

    function calculateDistance(lat1, lon1, lat2, lon2) {
        const R = 6371; // Radius of the Earth in kilometers
        const dLat = (lat2 - lat1) * Math.PI / 180;
        const dLon = (lon2 - lon1) * Math.PI / 180;
        const a =
            Math.sin(dLat / 2) * Math.sin(dLat / 2) +
            Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
            Math.sin(dLon / 2) * Math.sin(dLon / 2);
        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        const distance = R * c; // Distance in kilometers
        return distance;
    }

    // 
    // const mapMarkerToast = bootstrap.Toast.getOrCreateInstance(document.getElementById('mapToast'));
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(document.getElementById('liveToast'));
    @if (session('message'))
        toastBootstrap.show()
    @endif

    const nearby_seller_modal = new bootstrap.Modal('#nearby_seller_modal', {
        keyboard: false
    });

    const nearby_user_modal = new bootstrap.Modal('#nearby_user_modal', {
        keyboard: false
    });

    // Nearby seller Button
    // document.querySelector('.nearby-seller-btn').addEventListener('click', () => {
    //     // alert('test nearby seller btn');
    //     nearby_seller_modal.show();
    //     fetch('/getuseraddress', {
    //             method: 'GET'
    //         })
    //         .then(response => response.json())
    //         .then(result => {
    //             // console.log(result);
    //             result.address_user.forEach(address => {
    //                 if (address.default_address) {
    //                     var {
    //                         latitude,
    //                         longitude
    //                     } = address;

    //                     if (document.getElementById('current-location').checked) {
    //                         console.log('test');
    //                         navigator.geolocation.getCurrentPosition(successCallback, errorCallback,
    //                             options);
    //                     } else {
    //                         coordinates.lat = parseFloat(latitude);
    //                         coordinates.lng = parseFloat(longitude);
    //                         map = new google.maps.Map(document.getElementById('map'), {
    //                             center: {
    //                                 lat: coordinates.lat,
    //                                 lng: coordinates.lng
    //                             },
    //                             zoom: 13
    //                         });

    //                         drawCircle(map, {
    //                             lat: coordinates.lat,
    //                             lng: coordinates.lng
    //                         }, document.getElementById('circle-radius').value);
    //                     }
    //                 }
    //             })
    //             getNearbyListings();
    //         })
    //         .catch(error => console.error(error));
    // });

    // // Nearby User Button
    // document.querySelector('.nearby-user-btn').addEventListener('click', () => {
    //     nearby_user_modal.show();
    //     fetch('/getuseraddress', {
    //             method: 'GET'
    //         })
    //         .then(response => response.json())
    //         .then(result => {
    //             // console.log(result);
    //             result.address_user.forEach(address => {
    //                 if (address.default_address) {
    //                     var {
    //                         latitude,
    //                         longitude
    //                     } = address;

    //                     if (document.getElementById('current-user-location').checked) {
    //                         navigator.geolocation.getCurrentPosition(nearbyUserSuccessCallback,
    //                             errorCallback, options);
    //                     } else {
    //                         coordinates.lat = parseFloat(latitude);
    //                         coordinates.lng = parseFloat(longitude);

    //                         map = new google.maps.Map(document.getElementById('users-map'), {
    //                             center: {
    //                                 lat: coordinates.lat,
    //                                 lng: coordinates.lng
    //                             },
    //                             zoom: 13
    //                         });

    //                         drawCircle(map, {
    //                             lat: coordinates.lat,
    //                             lng: coordinates.lng
    //                         }, document.getElementById('user-circle-radius').value);

    //                         getNearbyUsers();
    //                     }
    //                 }
    //             });
    //         })
    //         .catch(error => console.error(error));
    // });

    function getNearbyListings() {
        book_ids = [];
        var {
            lat,
            lng
        } = coordinates;

        fetch('/getnearbybooks', {
                method: 'GET'
            })
            .then(response => response.json())
            .then(result => {
                console.log({{ json_encode(session('id')) }});
                result.forEach(address => {
                    if (address.user_id != {{ json_encode(session('id')) }} && address.default_address) {
                        var {
                            longitude,
                            latitude,
                            name,
                            address,
                            user
                        } = address;

                        if (calculateDistance(lat, lng, parseFloat(latitude), parseFloat(longitude)) <=
                            document.getElementById('circle-radius').value) {
                            user.books.forEach(book => {
                                book_ids.push(book.id);
                            })
                        }
                    }
                });
                console.log(book_ids);
            })
            .catch(error => console.error(error));
    }

    function getNearbyUsers() {
        var {
            lat,
            lng
        } = coordinates;

        fetch('/getnearbybooks', {
                method: 'GET'
            })
            .then(response => response.json())
            .then(result => {
                result.forEach(address => {
                    if (address.user_id != {{ json_encode(session('id')) }}) {
                        if (address.default_address) {
                            var {
                                latitude,
                                longitude,
                                address,
                                // name,
                                user_id,
                                user
                            } = address;

                            if (calculateDistance(lat, lng, parseFloat(latitude), parseFloat(longitude)) <=
                                document.getElementById('user-circle-radius').value) {
                                var marker = new google.maps.Marker({
                                    position: {
                                        lat: parseFloat(latitude),
                                        lng: parseFloat(longitude)
                                    },
                                    map: map,
                                    // title: 'Click to open profile',
                                    id: user_id,
                                    name: `${user.first_name} ${user.last_name}`,
                                    address: address,
                                    img_url: user.profile_photo
                                });

                                const contentString = `<div class="d-flex">
                                    <img id="map-toast-img" class="img rounded-4" src="/images/profile_photos/${marker.img_url}" alt="profile pic" style="width: 60px">
                                        <div class="mx-3 w-100 mb-2">
                                            <h5 id="map-toast-name" class="fw-bold py-0 mt-0 mb-0" style="color: #003060">${marker.name}</h5>
                                            <p id="map-toast-address" class="text-secondary fw-bold py-0 mt-0">${marker.address}</p>
                                        </div>
                                        <span class="fw-bold position-absolute bottom-0 end-0 mx-2 mb-1" style="color: #E55B13;">Click to Open Profile</span>
                                    </div>`;

                                var infoWindow = new google.maps.InfoWindow({
                                    content: contentString,
                                    ariaLabel: address
                                })

                                marker.addListener('click', () => {
                                    // console.log(marker.id);
                                    window.location.href = `/userlistings/${marker.id}`;
                                });

                                marker.addListener('mouseover', () => {
                                    infoWindow.open({
                                        anchor: marker,
                                        map
                                    });
                                });

                                marker.addListener('mouseout', () => {
                                    infoWindow.close();
                                })


                            } else {
                                console.log('Outside the proximity');
                            }
                        }
                    }
                })
            })
            .catch(error => console.error(error));
    }

    // Nearby Listing Current Location Toggle
    document.getElementById('current-location').addEventListener('change', () => {
        if (document.getElementById('current-location').checked) {
            navigator.geolocation.getCurrentPosition(successCallback, errorCallback, options);
        } else {
            fetch('/getuseraddress', {
                    method: 'GET'
                })
                .then(response => response.json())
                .then(result => {
                    // console.log(result);
                    result.address_user.forEach(address => {
                        if (address.default_address) {
                            var {
                                latitude,
                                longitude
                            } = address;

                            if (document.getElementById('current-location').checked) {
                                console.log('test');
                                navigator.geolocation.getCurrentPosition(successCallback,
                                    errorCallback,
                                    options);
                            } else {
                                coordinates.lat = parseFloat(latitude);
                                coordinates.lng = parseFloat(longitude);
                                map = new google.maps.Map(document.getElementById('map'), {
                                    center: {
                                        lat: coordinates.lat,
                                        lng: coordinates.lng
                                    },
                                    zoom: 13
                                });

                                drawCircle(map, {
                                    lat: coordinates.lat,
                                    lng: coordinates.lng
                                }, document.getElementById('circle-radius').value);
                            }
                        }
                    })
                    getNearbyListings();
                })
                .catch(error => console.error(error));
        }
    });

    // Nearby User's Current Location Toggle
    document.getElementById('current-user-location').addEventListener('change', () => {
        if (document.getElementById('current-user-location').checked) {
            navigator.geolocation.getCurrentPosition(nearbyUserSuccessCallback, errorCallback, options);
        } else {
            fetch('/getuseraddress', {
                    method: 'GET'
                })
                .then(response => response.json())
                .then(result => {
                    // console.log(result);
                    result.address_user.forEach(address => {
                        if (address.default_address) {
                            var {
                                latitude,
                                longitude
                            } = address;

                            if (document.getElementById('current-user-location').checked) {
                                navigator.geolocation.getCurrentPosition(successCallback,
                                    errorCallback,
                                    options);
                            } else {
                                coordinates.lat = parseFloat(latitude);
                                coordinates.lng = parseFloat(longitude);
                                map = new google.maps.Map(document.getElementById('users-map'), {
                                    center: {
                                        lat: coordinates.lat,
                                        lng: coordinates.lng
                                    },
                                    zoom: 13
                                });

                                drawCircle(map, {
                                    lat: coordinates.lat,
                                    lng: coordinates.lng
                                }, document.getElementById('user-circle-radius').value);
                            }
                        }
                    })
                    getNearbyUsers();
                })
                .catch(error => console.error(error));
        }
    })

    document.getElementById('circle-radius').addEventListener('change', () => {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: coordinates.lat,
                lng: coordinates.lng
            },
            zoom: 13
        });


        drawCircle(map, {
            lat: coordinates.lat,
            lng: coordinates.lng
        }, document.getElementById('circle-radius').value);

        getNearbyListings();
    });

    // Fnd Nearby Users Circle Radius
    document.getElementById('user-circle-radius').addEventListener('change', () => {
        map = new google.maps.Map(document.getElementById('users-map'), {
            center: {
                lat: coordinates.lat,
                lng: coordinates.lng
            },
            zoom: 13
        });

        drawCircle(map, {
            lat: coordinates.lat,
            lng: coordinates.lng
        }, document.getElementById('user-circle-radius').value);

        getNearbyUsers();
    });

    // Apply Btn
    document.getElementById('nearbylisting-apply-btn').addEventListener('click', () => {
        fetch('/getnearbylistings', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(book_ids)
            })
            // .then(response => response.json())
            .then(result => {
                if (result.status == 200) {
                    window.location.href = '/redirectnearby';
                    // console.log('test');
                }
                console.log(result);
            })
            .catch(error => console.error(error));
    });


    // End prox




    function stopPropagation() {
        event.stopPropagation();
    }
    // search script
    var search = document.getElementById('search_input');
    var searchContainer = document.getElementById('searches');
    if (search.value.trim().length < 1) {
        searchContainer.style.display = 'none'
    }
    search.addEventListener('keydown', (event) => {
        if (event.key === 'Enter' || event.keyCode === 13) {
            window.location.href = '/searchitem/' + search.value;
        }
    });
    search.addEventListener('input', () => {
        if (search.value.trim().length > 1) {
            const requestOptions = {
                method: 'GET',
            };
            fetch('/search/' + search.value.trim(), requestOptions)
                .then(response => response.json())
                .then(result => {
                    searchContainer.style.display = 'inline';
                    searchContainer.innerHTML = '';
                    // console.log(result);
                    // var loopCount = 0;

                    result.forEach(data => {
                        console.log(data);
                        // if (data.stock > 0) {
                        const suggestionElement = document
                            .createElement('div');
                        const searchedImage = document.createElement(
                            'img');
                        const searchedContent = document.createElement(
                            'div');
                        const titleText = document.createElement('p');
                        const authorText = document.createElement('p');
                        // suggestionElement.textContent = data.title;
                        suggestionElement.id = "searched-item";
                        suggestionElement.className = 'row px-2';
                        searchedImage.src = '/images/book_cover/' + data
                            .back_cover;
                        searchedImage.className = 'col-3 px-0 bg-light';
                        searchedContent.className = 'col border';
                        searchedContent.id = 'textContent';
                        titleText.className = 'm-0 fw-bold';
                        titleText.id = 'searched-title';
                        titleText.textContent = data.title;
                        authorText.id = 'searched-author';
                        authorText.textContent = data.author;
                        suggestionElement.addEventListener('click',
                            () => {
                                window.location.href = "/product/" +
                                    data.id;
                                searchContainer.innerHTML = '';
                            });
                        searchContainer.appendChild(suggestionElement);
                        suggestionElement.appendChild(searchedImage);
                        suggestionElement.appendChild(searchedContent);
                        searchedContent.appendChild(titleText);
                        searchedContent.appendChild(authorText);

                        // loopCount++;
                        // if (loopCount === 3) {
                        //     breakLoop = true;
                        //     return false;
                        // }
                        // }
                    });
                })
                .catch(error => console.log('error', error));
        } else {
            searchContainer.style.display = 'none'
            searchContainer.innerHTML = '';
        }
    });
    // clicked post
    function clickedPost(id, user_id) {
        window.location.href = "/product/" + id;
    };
    // tooltip
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(
        tooltipTriggerEl))
    var sidebar_width = document.getElementById("sidebar").offsetWidth;
    var content_width = document.getElementById("content");
    // window.addEventListener("resize", function () {
    //     content_width.style.marginLeft = sidebar_width + "px";
    // });
    // window.addEventListener("load", function() {
    //     content_width.style.paddingLeft = sidebar_width + "px";
    //     // this.alert(sidebar_width + "px");
    // });
    var home_sidebar = document.getElementById("home-side-btn");
    var wishlist_sidebar = document.getElementById("wishlist-side-btn");
    var my_list = document.getElementById("myList-side-btn");
    // home_sidebar.addEventListener("click", function() {
    //     my_list.style.backgroundColor = "#003060";
    //     home_sidebar.style.backgroundColor = "#2D6092"
    //     iframe.src = "./homepage-content.php";
    // });
    // wishlist_sidebar.addEventListener("click", function() {
    //     iframe.src = "./wishList.php";
    // });
    // my_list.addEventListener("click", function() {
    //     document.getElementById("home-side-btn").style.backgroundColor = "#003060";
    //     my_list.style.backgroundColor = "#2D6092";
    //     iframe.src = "./myList.php";
    // });
    var daily_discover_anchor = document.getElementById("daily-discover-anchor");
    var featured_anchor = document.getElementById("featured-anchor");
    var recommended_anchor = document.getElementById("recommended-anchor");
    var near_you_anchor = document.getElementById("near_you-anchor");
    var for_sale_anchor = document.getElementById("for_sale-anchor");
    var for_exchange_anchor = document.getElementById("for_exchange-anchor")
    var for_rent_anchor = document.getElementById("for_rent-anchor");
    var iframe = document.getElementById("content-frame");
    // partial templates
    var daily_discover_cards = document.getElementById("daily-discover");
    var featured_cards = document.getElementById("featured");
    var recommended_cards = document.getElementById("recommended");
    // var near_you_cards = document.getElementById("near_you");
    var for_sale_cards = document.getElementById("for_sale");
    var for_exchange_cards = document.getElementById("for_exchange");
    // var for_rent_cards = document.getElementById("for_rent");
    var daily_discover_btn = document.getElementById("daily-discover-header");
    var featured_btn = document.getElementById("featured-header");
    var recommended_btn = document.getElementById("recommended-header");
    // var near_you_btn = document.getElementById("near-you-header");
    var for_sale_btn = document.getElementById("for-sale-header");
    var for_exchange_btn = document.getElementById("for-exchange-header");
    // var for_rent_btn = document.getElementById("for-rent-header");
    daily_discover_btn.addEventListener("click", function() {
        // alert("bitch");
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        // near_you_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        // for_rent_cards.style.display = "none";
        document.getElementById("daily-discovery-content").style.display = "table";
    });
    featured_btn.addEventListener("click", function() {
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        // near_you_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        // for_rent_cards.style.display = "none";
        document.getElementById("featured-content").style.display = "table";
    });
    recommended_btn.addEventListener("click", function() {
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        // near_you_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        // for_rent_cards.style.display = "none";
        document.getElementById("recommended-content").style.display = "table";
    });
    // near_you_btn.addEventListener("click", function() {
    //     daily_discover_cards.style.display = "none";
    //     featured_cards.style.display = "none";
    //     recommended_cards.style.display = "none";
    // near_you_cards.style.display = "none";
    //     for_sale_cards.style.display = "none";
    //     for_exchange_cards.style.display = "none";
    // for_rent_cards.style.display = "none";
    //     document.getElementById("near-you-content").style.display = "table";
    // });
    for_sale_btn.addEventListener("click", function() {
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        // near_you_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        // for_rent_cards.style.display = "none";
        document.getElementById("for-sale-content").style.display = "table";
    });
    for_exchange_btn.addEventListener("click", function() {
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        // near_you_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        // for_rent_cards.style.display = "none";
        document.getElementById("for-exchange-content").style.display = "table";
    });
    // for_rent_btn.addEventListener("click", function() {
    //     daily_discover_cards.style.display = "none";
    //     featured_cards.style.display = "none";
    //     recommended_cards.style.display = "none";
    //     // near_you_cards.style.display = "none";
    //     for_sale_cards.style.display = "none";
    //     for_exchange_cards.style.display = "none";
    // for_rent_cards.style.display = "none";
    //     document.getElementById("for-rent-content").style.display = "table";
    // });
</script>
{{-- <script src="{{ asset('/js/app-homepage.js') }}"></script> --}}
