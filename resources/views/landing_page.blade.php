@include('partials.__header', [
'title' => 'BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/style.css',
'aos_link' => '/aos-master/dist/aos.css',
])

<div class="container-fluid p-0">
    <!-- NAV -->
    <nav class="navbar navbar-expand-lg shadow bg-light fixed-top" data-aos="fade-down" data-aos-duration="1000">
        <div class="container-fluid mx-3">
            <a class="navbar-brand" href="/"><img src="./assets/Book_Logo.png" alt="Logo" width="130" class="img"
                    data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2 px-3">
                        <a class="nav-link fs-7" aria-current="page" href="#home" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Home">Home</a>
                    </li>
                    <li class="nav-item mx-2 px-3">
                        <a class="nav-link fs-7" href="#howItWorks" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            data-bs-title="How it Works">How it Works</a>
                    </li>
                    <li class="nav-item mx-2 px-3">
                        <a class="nav-link fs-7" href="#hints" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            data-bs-title="Hints">Resources</a>
                    </li>
                    <li class="nav-item mx-2 px-3">
                        <a class="nav-link fs-7" href="#aboutUs" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            data-bs-title="About Us">About Us</a>
                    </li>
                    <div class="d-flex">
                        <a id="login-btn" href="/login" class="btn" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            data-bs-title="Login">Login</a>
                    </div>
                </ul>
            </div>

        </div>
    </nav>

    <!-- HOME -->
    <div id="home" class="container-fluid offset">
        <div class="row align-items-center">
            <div id="landing-title" class="col mx-3" data-aos="fade-right" data-aos-duration="2000">
                <h1 class="mx-2">Uncover New Stories, Trade Used Pages</h1>
                <a id="signup-btn" href="/role" class="btn px-5 w-75 py-2 ms-2" data-bs-toggle="tooltip"
                    data-bs-placement="top" data-bs-title="Sign Up">Sign Up</a>
            </div>
            <div class="col mx-3 d-flex justify-content-center landing-gif">
                <img class="img" src="./assets/Reading-book.gif" alt="Image" data-aos="fade-left"
                    data-aos-duration="3000">
            </div>
        </div>

        {{-- <div id="daily-discover" class="mx-5 px-5">
            <h4 id="daily-discover-header">Daily Discover</h4>
            <div id="content-cards" class="w-100 mx-2 d-flex px-4 overflow-x-auto" style="height: 330px; ">
                @php
                    $dailyAmount = 0;
                @endphp
                @foreach ($post->shuffle() as $daily)
                    @if (!preg_match('/' . $daily->genre . ',?/i', $user->interest))
                        @if ($daily->user->type == 'Bookseller')
                            @if ($daily->status == 'Rent' && $daily->stock > 0)
                                <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
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
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        <div id="featured" class="mx-5 px-5">
            <h4 id="featured-header">New Listings</h4>
            <div class="w-100mx-2 d-flex px-4 overflow-x-auto" style="height: 330px; ">
                @php
                    $featuredAmount = 0;
                @endphp
                @foreach ($post->sortByDesc('created_at') as $daily)
                    @if ($daily->user->type == 'Bookseller')
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
                    @endif
                @endforeach
            </div>
        </div>
        <div id="for_sale" class="mx-5 px-5">
            <h4 id="for-sale-header">Online Reading</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 330px; ">
                @php
                    $loopAmount = 0;
                @endphp
                @foreach ($post->shuffle() as $sale)
                    @if ($sale->status == 'Sale' && $sale->stock > 0)
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
                    @endif
                @endforeach

            </div>
        </div>
        <div id="for_exchange" class="mx-5 px-5">
            <h4 id="for-exchange-header">For Exchange</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 330px; ">
                @php
                    $exchangeAmount = 0;
                @endphp
                @foreach ($post->shuffle() as $exchange)
                    @if ($exchange->status == 'Exchange' && $exchange->stock > 0)
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
                    @endif
                @endforeach
            </div>
        </div>
    </div> --}}

    <!-- HOW IT WORKS -->
    <div id="howItWorks" class="container-fluid px-0 pt-5 min-vh-100 offset">
        <h1 id="howItWorks-head" class="mx-auto text-center w-25 mt-5 pb-2" data-aos="fade-up" data-aos-duration="1000">
            How it works</h1>

        <!-- EXCHANGE Instructions -->
        <div class="row justify-content-center mt-5" data-aos="fade-right" data-aos-duration="1500">
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">1</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Users need to register on the website, creating an account. Once registered, users can list the books they have available for exchange. This involves providing details like the book's title, author, condition, and any other relevant information.">Registration
                            and Listing</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">2</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Users can browse through the listed books on the platform to find titles they are interested in. When a user finds a book they want, they can express interest in acquiring it.">Browsing
                            and Selection</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">3</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="The users involved in a potential exchange can communicate through the platform to negotiate terms, such as shipping arrangements or additional conditions. Once both parties agree on the terms, they confirm the exchange.">Negotiation
                            and
                            Confirmation</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">4</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Users package and ship the books to each other. It's common for users to cover their own shipping costs.">Shipping
                            and Handling</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">5</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Upon receiving the book, the user checks its condition to ensure it matches the description provided by the sender. Users confirm the completion of the exchange on the platform, providing feedback or ratings for each other.">Receiving
                            and Confirmation</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">6</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="After the exchange is complete, users may leave feedback and ratings for each other. This helps build trust within the community and provides valuable information for future exchanges.">Feedback
                            and Ratings</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- HINTS -->
        <div id="hints" class="container-fluid offset px-0 pt-4">
            <h1 id="hints-head" class="mx-auto text-center w-25 mt-5 pb-2" data-aos="fade-up" data-aos-duration="2000">
                Resources</h1>

            <div id="carouselExampleIndicators" class="carousel slide mt-5" data-aos="fade-right"
                data-aos-duration="2500">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex flex-row justify-content-center">
                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">Master Sales Negotiation with These 7
                                        Amazing Techniques </h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">September 06, 2023</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        Negotiation is a discussion between two parties to come up with a mutually
                                        beneficial agreement.
                                        In sales, this discussion is between buyers and sellers. Negotiation is an
                                        important sales skill as it is a part of most deals.
                                        Let’s look at sales negotiation techniques to help you build rapport with the
                                        client. </p>
                                    <a id="hints-btn" href="https://www.leadsquared.com/learn/sales/sales-negotiation/"
                                        class="btn">Continue Reading</a>
                                </div>

                            </div>
                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">Book Packaging, Easy, Safe &
                                        Inexpensive</h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">February 03, 2008</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        What are your odds of being content with the
                                        book packaging that shows up in the mail from books you’ve ordered online?
                                        Imagine trying to compare textbooks with a finely bound classic first edition.
                                        That’s the range of packaging I’ve had arrive at my door. My odds of being
                                        pleased after opening a package seem to running around fifty percent.</p>
                                    <a id="hints-btn" href="https://bookshopblog.com/how-to-package-books-for-shipping/"
                                        class="btn">Continue Reading</a>
                                </div>
                            </div>

                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">Book Marketing 101: Price </h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">October 25, 2023</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        How much should your book cost?
                                        Your answer is critical to your book’s success and your author career.
                                        Most authors simply price their books like the authors around them. But I want
                                        you to make informed pricing decisions to understand the why behind book
                                        pricing.
                                        In this article, we’ll discuss the second P of the five Ps of marketing.</p>
                                    <a id="hints-btn" href="https://www.authormedia.com/book-marketing-101-price/"
                                        class="btn">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex flex-row justify-content-center">
                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">How to Ship Books: Tips and Best
                                        Practices for Shipping Books</h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">August 04, 2023</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        Shipping books may seem like a straightforward process, but ensuring that they
                                        arrive safely and in optimal condition requires careful planning and execution.
                                        Shipping books multiple books can be heavy and since they are made of paper,
                                        they are more susceptible to damage when not packed properly. Whether you’re an
                                        avid reader, a book collector, or a bookseller, understanding the best practices
                                        for shipping books is essential.</p>
                                    <a id="hints-btn"
                                        href="https://goshippo.com/blog/how-to-ship-books-tips-and-best-practices-for-shipping-books"
                                        class="btn">Continue Reading</a>
                                </div>

                            </div>
                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">Best Negotiation Books: A Negotiation
                                        Reading List</h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">January 18, 2024</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        Negotiation books that will get you to “yes” in any personal or business
                                        negotiation.
                                        Whether you’re facing negotiations with colleagues, customers, or family
                                        members, the following negotiation books from experts at PON offer new
                                        perspectives on common negotiating dilemmas. Among the best books on
                                        negotiation, they’ll help you reach better deals, form stronger relationships,
                                        and effectively address conflict.</p>
                                    <a id="hints-btn"
                                        href="https://www.pon.harvard.edu/daily/negotiation-training-daily/negotiation-books-a-negotiation-reading-list/"
                                        class="btn">Continue Reading</a>
                                </div>
                            </div>

                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">Competitive Pricing Strategy:
                                        Benefits, Examples, Strategies</h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">October 12, 2023</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        Setting the right wholesale vs. retail price for your products or services can
                                        make all the difference.
                                        Competitive pricing is a dynamic pricing strategy that empowers business owners
                                        to establish the selling price of their products or services by closely
                                        examining the prices set by their competitors. This approach serves as a
                                        valuable compass, particularly for newcomers in the market, enabling them to
                                        gauge the pricing sweet spot for their offerings.</p>
                                    <a id="hints-btn" href="https://www.bluecart.com/blog/competitive-pricing-strategy"
                                        class="btn">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex flex-row justify-content-center">
                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">How Book Pricing is a Powerful
                                        Strategy to sell more books</h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">May 09, 2019</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        Finding the pricing sweet spot for your book is really an exercise in
                                        psychology. As such some trial and error is necessary.
                                        This means you’ll have to stay on top of your sales numbers, and make
                                        adjustments as soon as you see sales waning.
                                        The price point implies value,
                                        without requiring a serious investment. In fact, I often recommend this range to
                                        newer authors looking to expand their potential buyer market.</p>
                                    <a id="hints-btn"
                                        href="https://indiereader.com/2019/05/how-book-pricing-is-a-powerful-strategy-to-sell-more-books/"
                                        class="btn">Continue Reading</a>
                                </div>

                            </div>
                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">11 Best Negotiation Books to Read in
                                        2024</h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">January 04, 2022</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        Negotiation books are guides that teach compromise and persuasion skills. These
                                        works cover topics such as empathizing with the opponent, appealing to the other
                                        party’s interests, and regulating emotions. The purpose of these books is to
                                        help negotiations go more smoothly and help professionals achieve more favorable
                                        deals. These works are a subset of business books and sales books.</p>
                                    <a id="hints-btn" href="https://teambuilding.com/blog/negotiation-books"
                                        class="btn">Continue Reading</a>
                                </div>
                            </div>

                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">How to Market a Book: 7 Tips for
                                        Strategic Pricing</h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">May 02, 2023</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        Pricing your book can be a daunting task and authors don’t realize how much this
                                        factors into how to market a book correctly.
                                        Pricing is the cornerstone of good book marketing. Yes, you want to make sure
                                        that you’re earning enough money to cover your costs and make a profit, but you
                                        also don’t want to price your book so high that it turns readers away. That’s
                                        where strategic pricing comes in.</p>
                                    <a id="hints-btn" href="https://amarketingexpert.com/2023/05/02/how-to-market-a-book-7-tips-for-strategic-pricing/" class="btn">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-indicators position-relative mt-3">
                    <button id="indicator" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"
                        style="border-radius: 50%; height: 15px; width: 15px;"></button>
                    <button id="indicator" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="1" class="" aria-label="Slide 2"
                        style="border-radius: 50%; height: 15px; width: 15px;"></button>
                    <button id="indicator" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="2" class="" aria-label="Slide 3"
                        style="border-radius: 50%; height: 15px; width: 15px;"></button>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- ABOUT US -->
        <div id="aboutUs" class="container-fluid px-0 min-vh-100 pt-4">
            <h1 id="aboutUs-head" class="mx-auto text-center w-25 mt-5 pb-2" data-aos="fade-up"
                data-aos-duration="2000">About Us</h1>
            <p class="px-5 mt-4 fs-7 text-center" data-aos="fade-right" data-aos-duration="3000">Welcome to <span
                    style="color: #E55B13;">Book</span>Redux – an online platform where students and book
                enthusiasts
                come together to ignite their love for learning, sharing, and connecting. Our goal is to empower you
                to
                trade your books seamlessly, all while nurturing a vibrant community that
                celebrates
                the joy of reading.</p>

            <div class="row text-center px-5 mt-5">
                <div id="mission-vission" class="col mx-4 p-4 rounded-4" data-aos="zoom-in-up" data-aos-duration="2000">
                    <h3>Mission Statement</h3>
                    <p style="text-align: justify;">&emsp;Our mission is to build a lively online book trading
                        connecting students and book lovers, making it easy to trade books.
                        We're all about creating a community that values accessible, affordable, and sustainable
                        reading. Our goal is to empower individuals in their quest for knowledge, personal
                        development,
                        and the joy of reading by facilitating book sharing and reuse.</p>
                </div>
                <div id="mission-vission" class="col mx-4 p-4 rounded-4" data-aos="zoom-in-up" data-aos-duration="2500">
                    <h3>Vision Statement</h3>
                    <p style="text-align: justify;">&emsp;Our vision is to transform how students and book lovers
                        access used books. We want to be the top choice for affordable literary resources, creating
                        a
                        global community of passionate readers. With technology and shared enthusiasm, we aim to
                        reshape
                        knowledge sharing, fostering a sustainable and inclusive reading community.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js'
])


    {{-- Landing Page (index.php) --}}
<script>
    AOS.init();
    var daily_discover_anchor = document.getElementById("daily-discover-anchor");
    var featured_anchor = document.getElementById("featured-anchor");
    var for_sale_anchor = document.getElementById("for_sale-anchor");
    var for_exchange_anchor = document.getElementById("for_exchange-anchor")
    var iframe = document.getElementById("content-frame");
    // partial templates
    var daily_discover_cards = document.getElementById("daily-discover");
    var featured_cards = document.getElementById("featured");
    var for_sale_cards = document.getElementById("for_sale");
    var for_exchange_cards = document.getElementById("for_exchange");
    var daily_discover_btn = document.getElementById("daily-discover-header");
    var featured_btn = document.getElementById("featured-header");
    var for_sale_btn = document.getElementById("for-sale-header");
    var for_exchange_btn = document.getElementById("for-exchange-header");
    daily_discover_btn.addEventListener("click", function() {
        // alert("bitch");
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        // near_you_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        for_rent_cards.style.display = "none";
        document.getElementById("daily-discovery-content").style.display = "table";
    });
    featured_btn.addEventListener("click", function() {
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        // near_you_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        for_rent_cards.style.display = "none";
        document.getElementById("featured-content").style.display = "table";
    });
    for_sale_btn.addEventListener("click", function() {
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        // near_you_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        for_rent_cards.style.display = "none";
        document.getElementById("for-sale-content").style.display = "table";
    });
    for_exchange_btn.addEventListener("click", function() {
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        // near_you_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        for_rent_cards.style.display = "none";
        document.getElementById("for-exchange-content").style.display = "table";
    });
</script>