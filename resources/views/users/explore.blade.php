@include('partials.__header', [
    'title' => 'Explore | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/explore-style.css',
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
                <a class="mx-2 mt-2 tabs" id="daily-discover-anchor" href="#daily-discover">Daily Discover</a>
                <a class="mx-2 mt-2 tabs" id="featured-anchor" href="#featured">Featured</a>
                <a class="mx-2 mt-2 tabs" id="recommended-anchor" href="#recommended">Recommended for you</a>
                {{-- <a class="mx-2 mt-2 tabs" id="near_you-anchor" href="#near_you">Near you</a> --}}
                <a class="mx-2 mt-2 tabs" id="for_sale-anchor" href="#for_sale">For sale</a>
                <a class="mx-2 mt-2 tabs" id="for_exchange-anchor" href="#for_exchange">For exchange</a>
                <a class="mx-2 mt-2 tabs" id="for_rent-anchor" href="#for_rent">For rent</a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <div class="position-relevant">
                            <input id="search_input" class="form-control rounded-3" type="text" placeholder="Search">
                            <div id="searches" class="position-absolute border bg-light w-100 p-2" style="cursor: pointer;">                                
                            </div>
                        </div>
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
        <div id="daily-discover" class="mx-5 px-5">
            <h4 id="daily-discover-header">Daily Discover</h4>
            <div id="content-cards" class="w-100 mx-2 d-flex px-4 overflow-x-auto" style="height: 300px; ">
                <!-- card Daily Discover -->
                @foreach ($post->shuffle() as $daily)
                    @if ($daily->status == 'Exchange' && $daily->unit == 'Available')
                        <div class="card m-1 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                            <img src="{{ asset('images/books/' . $daily->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                <p class="card-text mt-0 mb-2">{{ $daily->author }}<br>
                                    {{ $daily->genre }}</p>
                                <div class="card-foot price d-flex justify-content-end align-items-center p-0">
                                    {{-- <span class="fw-bold p-0">P{{ $daily->price }}</span> --}}
                                    <div class="button-container">
                                        {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" onclick="stopPropagation(event)"
                                                aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle add-button" onclick="stopPropagation(event)"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i 
                                                            class="fa fa-cart-plus" aria-hidden="true"
                                                            style="margin-right: 7px"></i>Add to
                                                        Cart</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i class="fa fa-list-alt"
                                                            aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                        Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif ($daily->unit == 'Available')
                        <div class="card m-1 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                            <img src="{{ asset('images/books/' . $daily->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                <p class="card-text mt-0 mb-2">{{ $daily->author }}<br>
                                    {{ $daily->genre }}</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">₱{{ $daily->price }}</span>
                                    <div class="button-container">
                                        {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" onclick="stopPropagation(event)"
                                                aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle add-button" onclick="stopPropagation(event)"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/addtocart/{{ $daily->id }}" onclick="stopPropagation(event)"><i 
                                                            class="fa fa-cart-plus" aria-hidden="true"
                                                            style="margin-right: 7px"></i>Add to
                                                        Cart</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i class="fa fa-list-alt"
                                                            aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                        Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div id="featured" class="mx-5 px-5">
            <h4 id="featured-header">Featured</h4>
            <div class="w-100mx-2 d-flex px-4 overflow-x-auto" style="height: 300px; ">
                <!-- card Featured -->
                @foreach ($post->sortByDesc('created_at') as $daily)
                    @if ($daily->status == 'Exchange' && $daily->unit == 'Available')
                        <div class="card m-1 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                            <img src="{{ asset('images/books/' . $daily->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                <p class="card-text mt-0 mb-2">{{ $daily->author }}<br>
                                    {{ $daily->genre }}</p>
                                <div class="card-foot price d-flex justify-content-end align-items-center p-0">
                                    {{-- <span class="fw-bold p-0">P{{ $daily->price }}</span> --}}
                                    <div class="button-container">
                                        {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" onclick="stopPropagation(event)"
                                                aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle add-button" onclick="stopPropagation(event)"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i 
                                                            class="fa fa-cart-plus" aria-hidden="true"
                                                            style="margin-right: 7px"></i>Add to
                                                        Cart</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i class="fa fa-list-alt"
                                                            aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                        Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif ($daily->unit == 'Available')
                        <div class="card m-1 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                            <img src="{{ asset('images/books/' . $daily->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                <p class="card-text mt-0 mb-2">{{ $daily->author }}<br>
                                    {{ $daily->genre }}</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">₱{{ $daily->price }}</span>
                                    <div class="button-container">
                                        {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" onclick="stopPropagation(event)"
                                                aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle add-button" onclick="stopPropagation(event)"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i 
                                                            class="fa fa-cart-plus" aria-hidden="true"
                                                            style="margin-right: 7px"></i>Add to
                                                        Cart</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i class="fa fa-list-alt"
                                                            aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                        Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div id="recommended" class="mx-5 px-5">
            <h4 id="recommended-header">Recommended for you</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                <!-- card Recommended for you -->
                @foreach ($post as $recommended)
                    @if (preg_match('/' . $recommended->genre . ',?/i', $user->interest))
                        @if ($recommended->status == 'Exchange' && $daily->unit == 'Available')
                            <div class="card m-1 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $recommended->id }}, {{ $recommended->user_id }})">
                                <img src="{{ asset('images/books/' . $recommended->book_photo) }}"
                                    class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">{{ $recommended->title }}</p>
                                    <p class="card-text mt-0 mb-2">{{ $recommended->author }}<br>
                                        {{ $recommended->genre }}</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        {{-- <span class="fw-bold p-0">₱{{ $recommended->price }}</span> --}}
                                        <div class="button-container">
                                            {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg"
                                                    aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Cart</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to
                                                            Wishlist</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif ($daily->unit == 'Available')
                            <div class="card m-1 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $recommended->id }}, {{ $recommended->user_id }})">
                                <img src="{{ asset('images/books/' . $recommended->book_photo) }}"
                                    class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">{{ $recommended->title }}</p>
                                    <p class="card-text mt-0 mb-2">{{ $recommended->author }}<br>
                                        {{ $recommended->genre }}</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $recommended->price }}</span>
                                        <div class="button-container">
                                            {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg"
                                                    aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Cart</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to
                                                            Wishlist</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        {{-- <div id="near_you" class="mx-5 px-5">
            <h4 id="near-you-header">Near you</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                <!-- card Near You -->
                <div class="card m-1 shadow" style="width: 200px; flex: 0 0 auto;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto p-2" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">₱100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1 shadow" style="width: 200px; flex: 0 0 auto;">
                    <img src="../assets/city_limits.png" class="img mx-auto p-2" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">₱100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1 shadow" style="width: 200px; flex: 0 0 auto;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto p-2" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1 shadow" style="width: 200px; flex: 0 0 auto;">
                    <img src="../assets/city_limits.png" class="img mx-auto p-2" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1 shadow" style="width: 200px; flex: 0 0 auto;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto p-2" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1 shadow" style="width: 200px; flex: 0 0 auto;">
                    <img src="../assets/city_limits.png" class="img mx-auto p-2" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1 shadow" style="width: 200px; flex: 0 0 auto;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto p-2" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-1 shadow" style="width: 200px; flex: 0 0 auto;">
                    <img src="../assets/city_limits.png" class="img mx-auto p-2" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div id="for_sale" class="mx-5 px-5">
            <h4 id="for-sale-header">For Sale</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                <!-- card For Sale -->
                @foreach ($post->shuffle() as $sale)
                    @if ($sale->status == 'Sale' && $sale->unit == 'Available')
                        <div class="card m-1 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $sale->id }}, {{ $sale->user_id }})">
                            <img src="{{ asset('images/books/' . $sale->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $sale->title }}</p>
                                <p class="card-text mt-0 mb-2">{{ $sale->author }}<br>
                                    {{ $sale->genre }}</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">₱{{ $sale->price }}</span>
                                    <div class="button-container">
                                        {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" onclick="stopPropagation(event)"
                                                aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle add-button" onclick="stopPropagation(event)"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i 
                                                            class="fa fa-cart-plus" aria-hidden="true"
                                                            style="margin-right: 7px"></i>Add to
                                                        Cart</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i class="fa fa-list-alt"
                                                            aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                        Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
        <div id="for_exchange" class="mx-5 px-5">
            <h4 id="for-exchange-header">For Exchange</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                <!-- card For Exchange -->
                @foreach ($post->shuffle() as $exchange)
                    @if ($exchange->status == 'Exchange' && $exchange->unit == 'Available')
                        <div class="card m-1 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $exchange->id }}, {{ $exchange->user_id }})">
                            <img src="{{ asset('images/books/' . $exchange->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $exchange->title }}</p>
                                <p class="card-text mt-0 mb-2">{{ $exchange->author }}<br>
                                    {{ $exchange->genre }}</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">

                                    <div class="button-container">
                                        {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" onclick="stopPropagation(event)"
                                                aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle add-button" onclick="stopPropagation(event)"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="fa fa-cart-plus" aria-hidden="true"
                                                            style="margin-right: 7px"></i>Add to Cart</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                            aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                        Wishlist</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div id="for_rent" class="mx-5 mb-4 px-5">
            <h4 id="for-rent-header">For Rent</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                <!-- card For Rent -->
                @foreach ($post->shuffle() as $rent)
                    @if ($rent->status == 'Rent' && $rent->unit == 'Available')
                        <div class="card m-1 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $rent->id }}, {{ $rent->user_id }})">
                            <img src="{{ asset('images/books/' . $rent->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $rent->title }}</p>
                                <p class="card-text mt-0 mb-2">{{ $rent->author }}<br>
                                    {{ $rent->genre }}</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">₱{{ $rent->price }}</span>
                                    <div class="button-container">
                                        {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" onclick="stopPropagation(event)"
                                                aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle add-button" onclick="stopPropagation(event)"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="fa fa-cart-plus" aria-hidden="true"
                                                            style="margin-right: 7px"></i>Add to Cart</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i class="fa fa-list-alt"
                                                            aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                        Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <!-- DAILY DISCOVERY CONTENT -->
        <div id="daily-discovery-content" class="daily-discovery-content mt-3 w-100">
            <h4 class="text-center daily_discovery_text mx-5 pb-2">DAILY DISCOVER</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($post->shuffle() as $daily)
                    @if ($daily->status == 'Exchange' && $daily->unit == 'Available')
                        <div class="card m-1 col-3 shadow" style="width: 220px; height: 280px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                            <img src="{{ asset('images/books/' . $daily->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                <p class="card-text mt-0 mb-2">{{ $daily->author }}<br>
                                    {{ $daily->genre }}</p>
                                <div class="card-foot price d-flex justify-content-end align-items-center p-0">
                                    {{-- <span class="fw-bold p-0">P{{ $daily->price }}</span> --}}
                                    <div class="button-container">
                                        {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" onclick="stopPropagation(event)"
                                                aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle add-button" onclick="stopPropagation(event)"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i 
                                                            class="fa fa-cart-plus" aria-hidden="true"
                                                            style="margin-right: 7px"></i>Add to
                                                        Cart</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i class="fa fa-list-alt"
                                                            aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                        Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif ($daily->unit == 'Available')
                        <div class="card m-1 col-3 shadow" style="width: 220px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                            <img src="{{ asset('images/books/' . $daily->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                <p class="card-text mt-0 mb-2">{{ $daily->author }}<br>
                                    {{ $daily->genre }}</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">₱{{ $daily->price }}</span>
                                    <div class="button-container">
                                        {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" onclick="stopPropagation(event)"
                                                aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle add-button" onclick="stopPropagation(event)"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i 
                                                            class="fa fa-cart-plus" aria-hidden="true"
                                                            style="margin-right: 7px"></i>Add to
                                                        Cart</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i class="fa fa-list-alt"
                                                            aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                        Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <!-- FEATURED CONTENT -->
        <div id="featured-content" class="daily-discovery-content mt-3 w-100">
            <h4 class="text-center daily_discovery_text mx-5 pb-2">FEATURED</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($post->sortByDesc('created_at') as $daily)
                    @if ($daily->status == 'Exchange' && $daily->unit == 'Available')
                        <div class="card m-1 col-3 shadow" style="width: 220px; height: 280px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                            <img src="{{ asset('images/books/' . $daily->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                <p class="card-text mt-0 mb-2">{{ $daily->author }}<br>
                                    {{ $daily->genre }}</p>
                                <div class="card-foot price d-flex justify-content-end align-items-center p-0">
                                    {{-- <span class="fw-bold p-0">P{{ $daily->price }}</span> --}}
                                    <div class="button-container">
                                        {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" onclick="stopPropagation(event)"
                                                aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle add-button" onclick="stopPropagation(event)"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i 
                                                            class="fa fa-cart-plus" aria-hidden="true"
                                                            style="margin-right: 7px"></i>Add to
                                                        Cart</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i class="fa fa-list-alt"
                                                            aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                        Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif ($daily->unit == 'Available')
                        <div class="card m-1 col-3 shadow" style="width: 220px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                            <img src="{{ asset('images/books/' . $daily->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $daily->title }}</p>
                                <p class="card-text mt-0 mb-2">{{ $daily->author }}<br>
                                    {{ $daily->genre }}</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">₱{{ $daily->price }}</span>
                                    <div class="button-container">
                                        {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" onclick="stopPropagation(event)"
                                                aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle add-button" onclick="stopPropagation(event)"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i 
                                                            class="fa fa-cart-plus" aria-hidden="true"
                                                            style="margin-right: 7px"></i>Add to
                                                        Cart</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i class="fa fa-list-alt"
                                                            aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                        Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <!-- RECOMMENDED FOR YOU CONTENT -->
        <div id="recommended-content" class="daily-discovery-content mt-3 w-100">
            <h4 class="text-center daily_discovery_text mx-5 pb-2">RECOMMENDED FOR YOU</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($post as $recommended)
                    @if (preg_match('/' . $recommended->genre . ',?/i', $user->interest))
                        @if ($recommended->status == 'Exchange' && $daily->unit == 'Available')
                            <div class="card m-1 col-3 shadow" style="width: 220px; height: 280px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $recommended->id }}, {{ $recommended->user_id }})">
                                <img src="{{ asset('images/books/' . $recommended->book_photo) }}"
                                    class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">{{ $recommended->title }}</p>
                                    <p class="card-text mt-0 mb-2">{{ $recommended->author }}<br>
                                        {{ $recommended->genre }}</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        {{-- <span class="fw-bold p-0">₱{{ $recommended->price }}</span> --}}
                                        <div class="button-container">
                                            {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg"
                                                    aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Cart</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to
                                                            Wishlist</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif ($daily->unit == 'Available')
                            <div class="card m-1 col-3 shadow" style="width: 220px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $recommended->id }}, {{ $recommended->user_id }})">
                                <img src="{{ asset('images/books/' . $recommended->book_photo) }}"
                                    class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">{{ $recommended->title }}</p>
                                    <p class="card-text mt-0 mb-2">{{ $recommended->author }}<br>
                                        {{ $recommended->genre }}</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $recommended->price }}</span>
                                        <div class="button-container">
                                            {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg"
                                                    aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Cart</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to
                                                            Wishlist</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        {{-- <!-- NEAR YOU CONTENT -->
        <div id="near-you-content" class="daily-discovery-content mt-3 w-100">
            <h4 class="text-center daily_discovery_text mx-5 pb-2">NEAR YOU</h4>
            <div class="row justify-content-center mx-5 mb-4">
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto p-2" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto p-2" alt="..."
                        width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto p-2" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto p-2" alt="..."
                        width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto p-2" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto p-2" alt="..."
                        width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto p-2" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto p-2" alt="..."
                        width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-container">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> --}}
        <!-- FOR SALE CONTENT -->
        <div id="for-sale-content" class="daily-discovery-content mt-3 w-100">
            <h4 class="text-center daily_discovery_text mx-5 pb-2">FOR SALE</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($post as $sale)
                    @if ($sale->status == 'Sale')
                        <div class="card m-1 col-3 shadow" style="width: 220px; height: 280px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $sale->id }}, {{ $sale->user_id }})">
                            <img src="{{ asset('images/books/' . $sale->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $sale->title }}</p>
                                <p class="card-text mt-0 mb-2">{{ $sale->author }}<br>
                                    {{ $sale->genre }}</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">₱{{ $sale->price }}</span>
                                    <div class="button-container">
                                        {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" onclick="stopPropagation(event)"
                                                aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle add-button" onclick="stopPropagation(event)"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i 
                                                            class="fa fa-cart-plus" aria-hidden="true"
                                                            style="margin-right: 7px"></i>Add to
                                                        Cart</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i class="fa fa-list-alt"
                                                            aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                        Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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
                @foreach ($post as $exchange)
                    @if ($exchange->status == 'Exchange' && $daily->unit == 'Available')
                        <div class="card m-1 col-3 shadow" style="width: 220px; height: 280px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $exchange->id }}, {{ $exchange->user_id }})">
                            <img src="{{ asset('images/books/' . $exchange->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $exchange->title }}</p>
                                <p class="card-text mt-0 mb-2">{{ $exchange->author }}<br>
                                    {{ $exchange->genre }}</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">

                                    <div class="button-container">
                                        {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" onclick="stopPropagation(event)"
                                                aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle add-button" onclick="stopPropagation(event)"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="fa fa-cart-plus" aria-hidden="true"
                                                            style="margin-right: 7px"></i>Add to Cart</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                            aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                        Wishlist</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
        <!-- FOR RENT -->
        <div id="for-rent-content" class="daily-discovery-content mt-3 w-100">
            <h4 class="text-center daily_discovery_text mx-5 pb-2">FOR RENT</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($post as $rent)
                    @if ($rent->status == 'Rent')
                        <div class="card m-1 col-3 shadow" style="width: 220px; height: 280px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $rent->id }}, {{ $rent->user_id }})">
                            <img src="{{ asset('images/books/' . $rent->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $rent->title }}</p>
                                <p class="card-text mt-0 mb-2">{{ $rent->author }}<br>
                                    {{ $rent->genre }}</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">₱{{ $rent->price }}</span>
                                    <div class="button-container">
                                        {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" onclick="stopPropagation(event)"
                                                aria-hidden="true" style="margin-right: 8px"></i></button> --}}
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle add-button" onclick="stopPropagation(event)"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="fa fa-cart-plus" aria-hidden="true"
                                                            style="margin-right: 7px"></i>Add to Cart</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#" onclick="stopPropagation(event)"><i class="fa fa-list-alt"
                                                            aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                        Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                {{-- <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px"
                        height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
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
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-container">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div> --}}
            </div>
        </div>
        <!-- <div class="container-fluid"> -->
        {{-- <div class="d-flex h-100 w-100">
                    <iframe id="content-frame" class="flex-fill w-100 border" src="./homepage-content.php"
                        frameborder="0"></iframe>
                </div> --}}
        <!-- </div> -->
    </div>
</div>
</div>
</body>
@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])

<script>
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
                    result.forEach(data => {             
                        // console.log(data);
                        const suggestionElement = document.createElement('div');
                        const searchedImage = document.createElement('img');
                        const searchedContent = document.createElement('div');
                        const titleText = document.createElement('p');
                        const authorText = document.createElement('p');

                        // suggestionElement.textContent = data.title;
                        suggestionElement.id = "searched-item";
                        suggestionElement.className = 'row px-2';

                        searchedImage.src = '/images/books/' + data.book_photo;
                        searchedImage.className = 'col-3 px-0 bg-light';

                        searchedContent.className = 'col border';
                        searchedContent.id = 'textContent';

                        titleText.className = 'm-0 fw-bold';
                        titleText.id = 'searched-title';
                        titleText.textContent = data.title;

                        authorText.id = 'searched-author';
                        authorText.textContent = data.author;
                        
                        suggestionElement.addEventListener('click', () => {
                            window.location.href = "/product/" + data.id +"/" + data.user_id;
                            searchContainer.innerHTML = '';
                        });

                        searchContainer.appendChild(suggestionElement);
                        suggestionElement.appendChild(searchedImage);
                        suggestionElement.appendChild(searchedContent);
                        searchedContent.appendChild(titleText);
                        searchedContent.appendChild(authorText);                        
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
        window.location.href = "/product/" + id + "/" + user_id;
    };

    // tooltip
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
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
    var for_rent_cards = document.getElementById("for_rent");
    var daily_discover_btn = document.getElementById("daily-discover-header");
    var featured_btn = document.getElementById("featured-header");
    var recommended_btn = document.getElementById("recommended-header");
    // var near_you_btn = document.getElementById("near-you-header");
    var for_sale_btn = document.getElementById("for-sale-header");
    var for_exchange_btn = document.getElementById("for-exchange-header");
    var for_rent_btn = document.getElementById("for-rent-header");
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
    recommended_btn.addEventListener("click", function() {
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        // near_you_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        for_rent_cards.style.display = "none";
        document.getElementById("recommended-content").style.display = "table";
    });
    // near_you_btn.addEventListener("click", function() {
    //     daily_discover_cards.style.display = "none";
    //     featured_cards.style.display = "none";
    //     recommended_cards.style.display = "none";
    // near_you_cards.style.display = "none";
    //     for_sale_cards.style.display = "none";
    //     for_exchange_cards.style.display = "none";
    //     for_rent_cards.style.display = "none";
    //     document.getElementById("near-you-content").style.display = "table";
    // });
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
    for_rent_btn.addEventListener("click", function() {
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        // near_you_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        for_rent_cards.style.display = "none";
        document.getElementById("for-rent-content").style.display = "table";
    });
</script>
{{-- <script src="{{ asset('/js/app-homepage.js') }}"></script> --}}
