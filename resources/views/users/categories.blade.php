@include('partials.__header', [
'title' => 'Categories | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/categories-style.css',
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
    <div id="content" class="border content">
        <ul class="nav bg-light sticky-top head-nav shadow py-4 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                {{-- <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button> --}}
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
                <div class="dropdown">
                    <a class="btn dropdown-toggle drpdwn-genre" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Educational</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="educational-anchor" href="#educational">Educational</a></li>
                        <li><a class="dropdown-item" id="historical-fiction-anchor"
                                href="#historical_fiction">Historical
                                Fiction</a></li>
                        <li><a class="dropdown-item" id="poetry-prose-anchor" href="#poetry_prose">Poetry & Prose</a>
                        </li>
                        <li><a class="dropdown-item" id="self-help-anchor" href="#self_help">Self-Help</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="btn dropdown-toggle drpdwn-genre" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Romance & Saga</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="romance-saga-anchor" href="#romance_saga">Romance & Saga</a>
                        </li>
                        <li><a class="dropdown-item" id="science-fiction-anchor" href="#science_fiction">Science
                                Fiction</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="btn dropdown-toggle drpdwn-genre" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Fantasy & Adventure</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="fantasy-adventure-anchor" href="#fantasy_adventure">Fantasy &
                                Adventure</a></li>
                        <li><a class="dropdown-item" id="young-adult-anchor" href="#young_adult">Young Adult</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="btn dropdown-toggle drpdwn-genre" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Mystery & Suspense</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="mystery-suspense-anchor" href="#mystery_suspense">Mystery &
                                Suspense</a></li>
                        <li><a class="dropdown-item" id="crime-thriller-anchor" href="#crime_thriller">Crime &
                                Thriller</a>
                        </li>
                        <li><a class="dropdown-item" id="horror-supernatural-anchor" href="#horror_supernatural">Horror
                                &
                                Supernatural</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="btn dropdown-toggle drpdwn-genre" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Comedy & Satire</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="comedy-satire-anchor" href="#comedy_satire">Comedy & Satire</a>
                        </li>
                        <li><a class="dropdown-item" id="nonfiction-biography-anchor"
                                href="#nonfiction_biography">Non-Fiction & Biography</a></li>
                    </ul>
                </div>
                <div class="position-absolute end-0">
                    <div class="d-flex">
                        <div class="input-group mt-0" style="height: 2em">
                            <span class="input-group-text">
                                <i class="fa fa-search"></i>
                            </span>
                            <div class="position-relevant">
                                <input id="search_input" class="form-control rounded-3" type="text"
                                    placeholder="Search">
                                <div id="searches" class="position-absolute border bg-light w-100 p-2"
                                    style="cursor: pointer;">
                                </div>
                            </div>
                        </div>
                        {{-- <a href="/messages"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" data-bs-title="Messages">
                                <i class="fa fa-envelope-o" aria-hidden="true"
                                    style="font-size: 20px; color: #003060;"></i>
                            </button></a>
                        <a href="/notification"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" data-bs-title="Notification">
                                <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                            </button></a> --}}
                        <ul class="nav py-profile justify-content-end" style="margin-left: 2em">
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
                                    <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and
                                            Ratings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
        </ul>
        <!--  Educational -->
        <div id="educational" class="mx-5 px-5">
            <h4 id="educational-header">Educational</h4>
            <div id="content-cards" class="w-100 mx-2 d-flex px-4 overflow-x-auto" style="height: 330px; ">
                <!-- card Educational -->
                @foreach ($book as $educational)
                @if (preg_match('/Educational/i', $educational->genre))
                @if ($educational->status == 'Exchange' && $educational->unit == 'Available' &&
                !empty($educational->genre))
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $educational->book_photo) }}" class="img mx-auto p-2" alt="..."
                        width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $educational->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $educational->author }} <br>
                            {{ $educational->genre }}</p>
                        @foreach ($educational->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-start align-items-center p-0">
                            <span class="fw-bold p-0">For Exchange</span>
                            {{-- <span class="fw-bold p-0">P100.00</span> --}}
                            {{-- <div class="button-container"> --}}
                            {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                        style="margin-right: 8px"></i></button> --}}
                            {{-- <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Cart</a>
                                                    </li> --}}
                            {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
                            {{-- </ul>
                                            </div>
                                        </div> --}}
                        </div>
                    </div>
                </div>
                @elseif (!empty($educational->genre) && $educational->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $educational->book_photo) }}" class="img mx-auto p-2" alt="..."
                        width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $educational->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $educational->author }}<br>
                            {{ $educational->genre }}</p>
                        @foreach ($educational->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">₱{{ $educational->price }}</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                        style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
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
        <div id="historical_fiction" class="mx-5 px-5">
            <h4 id="historical-fiction-header">Historical Fiction</h4>
            <div class="w-100mx-2 d-flex px-4 overflow-x-auto" style="height: 330px; ">
                <!-- card Historical Fiction -->
                @foreach ($book as $historical_fiction)
                @if (preg_match('/Historical Fiction/i', $historical_fiction->genre))
                @if ($historical_fiction->status == 'Exchange' && $historical_fiction->unit == 'Available' &&
                !empty($historical_fiction->genre))
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $historical_fiction->book_photo) }}" class="img mx-auto p-2"
                        alt="..." width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">
                            {{ $historical_fiction->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $historical_fiction->author }}<br>
                            {{ $historical_fiction->genre }}</p>
                        @foreach ($historical_fiction->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-start align-items-center p-0">
                            <span class="fw-bold p-0">For Exchange</span>
                            {{-- <span class="fw-bold p-0">P100.00</span> --}}
                            {{-- <div class="button-container"> --}}
                            {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                            {{-- <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Cart</a>
                                                    </li> --}}
                            {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
                            {{-- </ul>
                                            </div>
                                        </div> --}}
                        </div>
                    </div>
                </div>
                @elseif (!empty($historical_fiction->genre) && $historical_fiction->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $historical_fiction->book_photo) }}" class="img mx-auto p-2"
                        alt="..." width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">
                            {{ $historical_fiction->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $historical_fiction->author }}<br>
                            {{ $historical_fiction->genre }}</p>
                        @foreach ($historical_fiction->user->addressUser as $address)
                        @if ($historical_fiction->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">₱{{ $historical_fiction->price }}</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <h1>No books available</h1>
                @endif
                @endif
                @endforeach
            </div>
        </div>
        <div id="poetry_prose" class="mx-5 px-5">
            <h4 id="poetry-prose-header">Poetry & Prose</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 330px; ">
                <!-- card Poetry & Prose -->
                @foreach ($book as $poetry_prose)
                @if (preg_match('/Poetry & Prose/i', $poetry_prose->genre))
                @if ($poetry_prose->status == 'Exchange' && $poetry_prose->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $poetry_prose->book_photo) }}" class="img mx-auto p-2" alt="..."
                        width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $poetry_prose->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $poetry_prose->author }}<br>
                            {{ $poetry_prose->genre }}</p>
                        @foreach ($poetry_prose->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-start align-items-center p-0">
                            <span class="fw-bold p-0">For Exchange</span>
                            {{-- <span class="fw-bold p-0">P100.00</span> --}}
                            {{-- <div class="button-container"> --}}
                            {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                            {{-- <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Cart</a>
                                                    </li> --}}
                            {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
                            {{-- </ul>
                                            </div>
                                        </div> --}}
                        </div>
                    </div>
                </div>
                @elseif ($poetry_prose->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $poetry_prose->book_photo) }}" class="img mx-auto p-2" alt="..."
                        width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $poetry_prose->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $poetry_prose->author }}<br>
                            {{ $poetry_prose->genre }}</p>
                        @foreach ($poetry_prose->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">₱{{ $poetry_prose->price }}</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
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
        <div id="self_help" class="mx-5 px-5">
            <h4 id="self-help-header">Self-Help</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 330px; ">
                <!-- card Self-Help -->
                @foreach ($book as $self_help)
                @if (preg_match('/Self-Help/i', $self_help->genre))
                @if ($self_help->status == 'Exchange' && $self_help->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $self_help->book_photo) }}" class="img mx-auto p-2" alt="..."
                        width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $self_help->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $self_help->author }}<br>
                            {{ $self_help->genre }}</p>
                        @foreach ($self_help->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-start align-items-center p-0">
                            <span class="fw-bold p-0">For Exchange</span>
                            {{-- <span class="fw-bold p-0">P100.00</span> --}}
                            {{-- <div class="button-container"> --}}
                            {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                            {{-- <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Cart</a>
                                                    </li> --}}
                            {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
                            {{-- </ul>
                                            </div>
                                        </div> --}}
                        </div>
                    </div>
                </div>
                @elseif ($self_help->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $self_help->book_photo) }}" class="img mx-auto p-2" alt="..."
                        width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $self_help->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $self_help->author }}<br>
                            {{ $self_help->genre }}</p>
                        @foreach ($self_help->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">₱{{ $self_help->price }}</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
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
        <div id="romance_saga" class="mx-5 px-5">
            <h4 id="romance-saga-header">Romance & Saga</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 330px; ">
                <!-- card Romance & Saga -->
                @foreach ($book as $romance_saga)
                @if (preg_match('/Romance & Saga/i', $romance_saga->genre))
                @if ($romance_saga->status == 'Exchange' && $romance_saga->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $romance_saga->book_photo) }}" class="img mx-auto p-2" alt="..."
                        width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $romance_saga->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $romance_saga->author }}<br>
                            {{ $romance_saga->genre }}</p>
                        @foreach ($romance_saga->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-start align-items-center p-0">
                            <span class="fw-bold p-0">For Exchange</span>
                            {{-- <span class="fw-bold p-0">P100.00</span> --}}
                            {{-- <div class="button-container"> --}}
                            {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                            {{-- <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Cart</a>
                                                    </li> --}}
                            {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
                            {{-- </ul>
                                            </div>
                                        </div> --}}
                        </div>
                    </div>
                </div>
                @elseif ($romance_saga->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $romance_saga->book_photo) }}" class="img mx-auto p-2" alt="..."
                        width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $romance_saga->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $romance_saga->author }}<br>
                            {{ $romance_saga->genre }}</p>
                        @foreach ($romance_saga->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">₱{{ $romance_saga->price }}</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
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
        <div id="science_fiction" class="mx-5 px-5">
            <h4 id="science-fiction-header">Science Fiction</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 330px; ">
                <!-- card Science Fiction -->
                @foreach ($book as $science_fiction)
                @if (preg_match('/Science Fiction/i', $science_fiction->genre))
                @if ($science_fiction->status == 'Exchange' && $science_fiction->unit == 'Available')
                <div class="card m-1  pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $science_fiction->book_photo) }}" class="img mx-auto p-2" alt="..."
                        width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $science_fiction->title }}
                        </p>
                        <p class="card-text mt-0 mb-0">{{ $science_fiction->author }}<br>
                            {{ $science_fiction->genre }}</p>
                        @foreach ($science_fiction->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-start align-items-center p-0">
                            <span class="fw-bold p-0">For Exchange</span>
                            {{-- <span class="fw-bold p-0">P100.00</span> --}}
                            {{-- <div class="button-container"> --}}
                            {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                            {{-- <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Cart</a>
                                                    </li> --}}
                            {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
                            {{-- </ul>
                                            </div>
                                        </div> --}}
                        </div>
                    </div>
                </div>
                @elseif ($science_fiction->unit == 'Available')
                <div class="card m-1  pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $science_fiction->book_photo) }}" class="img mx-auto p-2" alt="..."
                        width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $science_fiction->title }}
                        </p>
                        <p class="card-text mt-0 mb-0">{{ $science_fiction->author }}<br>
                            {{ $science_fiction->genre }}</p>
                        @foreach ($science_fiction->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">₱{{ $science_fiction->price }}</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
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
        <div id="fantasy_adventure" class="mx-5 px-5">
            <h4 id="fantasy-adventure-header">Fantasy & Adventure</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 330px; ">
                <!-- card Fantasy & Adventure -->
                @foreach ($book as $fantasy_adventure)
                @if (preg_match('/Fantasy & Adventure/i', $fantasy_adventure->genre))
                @if ($fantasy_adventure->status == 'Exchange' && $fantasy_adventure->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $fantasy_adventure->book_photo) }}" class="img mx-auto p-2"
                        alt="..." width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">
                            {{ $fantasy_adventure->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $fantasy_adventure->author }}<br>
                            {{ $fantasy_adventure->genre }}</p>
                        @foreach ($fantasy_adventure->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-start align-items-center p-0">
                            <span class="fw-bold p-0">For Exchange</span>
                            {{-- <span class="fw-bold p-0">P100.00</span> --}}
                            {{-- <div class="button-container"> --}}
                            {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                            {{-- <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Cart</a>
                                                    </li> --}}
                            {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
                            {{-- </ul>
                                            </div>
                                        </div> --}}
                        </div>
                    </div>
                </div>
                @elseif ($fantasy_adventure->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $fantasy_adventure->book_photo) }}" class="img mx-auto p-2"
                        alt="..." width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">
                            {{ $fantasy_adventure->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $fantasy_adventure->author }}<br>
                            {{ $fantasy_adventure->genre }}</p>
                        @foreach ($fantasy_adventure->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">₱{{ $fantasy_adventure->price }}</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
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
        <div id="young_adult" class="mx-5 px-5">
            <h4 id="young-adult-header">Young Adult</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 330px; ">
                <!-- card Young Adult -->
                @foreach ($book as $young_adult)
                @if (preg_match('/Young Adult/i', $young_adult->genre))
                @if ($young_adult->status == 'Exchange' && $young_adult->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $young_adult->book_photo) }}" class="img mx-auto p-2" alt="..."
                        width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $young_adult->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $young_adult->author }}<br>
                            {{ $young_adult->genre }}</p>
                        @foreach ($young_adult->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-start align-items-center p-0">
                            <span class="fw-bold p-0">For Exchange</span>
                            {{-- <span class="fw-bold p-0">P100.00</span> --}}
                            {{-- <div class="button-container"> --}}
                            {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                            {{-- <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Cart</a>
                                                    </li> --}}
                            {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
                            {{-- </ul>
                                            </div>
                                        </div> --}}
                        </div>
                    </div>
                </div>
                @elseif ($young_adult->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $young_adult->book_photo) }}" class="img mx-auto p-2" alt="..."
                        width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $young_adult->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $young_adult->author }}<br>
                            {{ $young_adult->genre }}</p>
                        @foreach ($young_adult->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">₱{{ $young_adult->price }}</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
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
        <div id="crime_thriller" class="mx-5 px-5">
            <h4 id="crime-thriller-header">Crime & Thriller</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 330px; ">
                <!-- card Crime & Thriller -->
                @foreach ($book as $crime_thriller)
                @if (preg_match('/Crime & Thriller/i', $crime_thriller->genre))
                @if ($crime_thriller->status == 'Exchange' && $crime_thriller->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $crime_thriller->book_photo) }}" class="img mx-auto p-2" alt="..."
                        width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $crime_thriller->title }}
                        </p>
                        <p class="card-text mt-0 mb-0">{{ $crime_thriller->author }}<br>
                            {{ $crime_thriller->genre }}</p>
                        @foreach ($crime_thriller->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-start align-items-center p-0">
                            <span class="fw-bold p-0">For Exchange</span>
                            {{-- <span class="fw-bold p-0">P100.00</span> --}}
                            {{-- <div class="button-container"> --}}
                            {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                            {{-- <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Cart</a>
                                                    </li> --}}
                            {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
                            {{-- </ul>
                                            </div>
                                        </div> --}}
                        </div>
                    </div>
                </div>
                @elseif ($crime_thriller->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $crime_thriller->book_photo) }}" class="img mx-auto p-2" alt="..."
                        width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $crime_thriller->title }}
                        </p>
                        <p class="card-text mt-0 mb-0">{{ $crime_thriller->author }}<br>
                            {{ $crime_thriller->genre }}</p>
                        @foreach ($crime_thriller->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">₱{{ $crime_thriller->price }}</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
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
        <div id="horror_supernatural" class="mx-5 px-5">
            <h4 id="horror-supernatural-header">Horror & Supernatural</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 330px; ">
                <!-- card Horror & Supernatural -->
                @foreach ($book as $horror_supernatural)
                @if (preg_match('/Horror & Supernatural/i', $horror_supernatural->genre))
                @if ($horror_supernatural->status == 'Exchange' && $horror_supernatural->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $horror_supernatural->book_photo) }}" class="img mx-auto p-2"
                        alt="..." width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">
                            {{ $horror_supernatural->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $horror_supernatural->author }}<br>
                            {{ $horror_supernatural->genre }}</p>
                        @foreach ($horror_supernatural->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-start align-items-center p-0">
                            <span class="fw-bold p-0">For Exchange</span>
                            {{-- <span class="fw-bold p-0">P100.00</span> --}}
                            {{-- <div class="button-container"> --}}
                            {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                            {{-- <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Cart</a>
                                                    </li> --}}
                            {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
                            {{-- </ul>
                                            </div>
                                        </div> --}}
                        </div>
                    </div>
                </div>
                @elseif ($horror_supernatural->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $horror_supernatural->book_photo) }}" class="img mx-auto p-2"
                        alt="..." width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">
                            {{ $horror_supernatural->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $horror_supernatural->author }}<br>
                            {{ $horror_supernatural->genre }}</p>
                        @foreach ($horror_supernatural->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">₱{{ $horror_supernatural->price }}</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
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
        <div id="comedy_satire" class="mx-5 px-5">
            <h4 id="comedy-satire-header">Comedy & Satire</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 330px; ">
                <!-- card Comedy & Satire-->
                @foreach ($book as $comedy_satire)
                @if (preg_match('/Comedy & Satire/i', $comedy_satire->genre))
                @if ($comedy_satire->status == 'Exchange' && $comedy_satire->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $comedy_satire->book_photo) }}" class="img mx-auto p-2" alt="..."
                        width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $comedy_satire->title }}
                        </p>
                        <p class="card-text mt-0 mb-0">{{ $comedy_satire->author }}<br>
                            {{ $comedy_satire->genre }}</p>
                        @foreach ($comedy_satire->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-start align-items-center p-0">
                            <span class="fw-bold p-0">For Exchange</span>
                            {{-- <span class="fw-bold p-0">P100.00</span> --}}
                            {{-- <div class="button-container"> --}}
                            {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                            {{-- <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Cart</a>
                                                    </li> --}}
                            {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
                            {{-- </ul>
                                            </div>
                                        </div> --}}
                        </div>
                    </div>
                </div>
                @elseif ($comedy_satire->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $comedy_satire->book_photo) }}" class="img mx-auto p-2" alt="..."
                        width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">{{ $comedy_satire->title }}
                        </p>
                        <p class="card-text mt-0 mb-0">{{ $comedy_satire->author }}<br>
                            {{ $comedy_satire->genre }}</p>
                        @foreach ($comedy_satire->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">₱{{ $comedy_satire->price }}</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
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
        <div id="nonfiction_biography" class="mx-5 px-5">
            <h4 id="nonfiction-biography-header">Non-Fiction & Biography</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 330px; ">
                <!-- card Non-Fiction & Biography -->
                @foreach ($book as $nonfiction_biography)
                @if (preg_match('/Non-Fiction & Biography/i', $nonfiction_biography->genre))
                @if ($nonfiction_biography->status == 'Exchange' && $nonfiction_biography->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $nonfiction_biography->book_photo) }}" class="img mx-auto p-2"
                        alt="..." width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">
                            {{ $nonfiction_biography->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $nonfiction_biography->author }}<br>
                            {{ $nonfiction_biography->genre }}</p>
                        @foreach ($nonfiction_biography->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-start align-items-center p-0">
                            <span class="fw-bold p-0">For Exchange</span>
                            {{-- <span class="fw-bold p-0">P100.00</span> --}}
                            {{-- <div class="button-container"> --}}
                            {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                            {{-- <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Cart</a>
                                                    </li> --}}
                            {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
                            {{-- </ul>
                                            </div>
                                        </div> --}}
                        </div>
                    </div>
                </div>
                @elseif ($nonfiction_biography->unit == 'Available')
                <div class="card m-1 pb-4" style="width: 200px; flex: 0 0 auto; cursor: pointer;">
                    <img src="{{ asset('images/books/' . $nonfiction_biography->book_photo) }}" class="img mx-auto p-2"
                        alt="..." width="130px" height="150px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">
                            {{ $nonfiction_biography->title }}</p>
                        <p class="card-text mt-0 mb-0">{{ $nonfiction_biography->author }}<br>
                            {{ $nonfiction_biography->genre }}</p>
                        @foreach ($nonfiction_biography->user->addressUser as $address)
                        @if ($address->default_address == 'true')
                        <p class="card-text mt-0 mb-2 location-text" style="white-space: nowrap;"><i
                                class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                        </p>
                        @endif
                        @endforeach
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">₱{{ $nonfiction_biography->price }}</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                    style="margin-right: 8px"></i></button> --}}
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle add-button" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus"
                                                    aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                        </li>
                                        {{-- <li><a class="dropdown-item" href="#"><i
                                                                class="fa fa-list-alt" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to Wishlist</a>
                                                    </li> --}}
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
        <!-- EDUCATIONAL CONTENT -->
        <div id="educational-content" class="educational-content mt-3 w-100">
            <h4 class="text-center educational_text mx-5 pb-2">EDUCATIONAL</h4>
            <div class="row justify-content-center mx-5 mb-4">
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
        </div>
        <!-- HISTORICAL FICTION CONTENT -->
        <div id="historical-fiction-content" class="historical-fiction-content mt-3 w-100">
            <h4 class="text-center historical_fiction_text mx-5 pb-2">HISTORICAL FICTION</h4>
            <div class="row justify-content-center mx-5 mb-4">
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="btns d-flex flex-row mb-2 dropdown">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px;"></i></button> --}}
                                <button class="add-button"><i class="fa fa-plus-circle fa-lg"
                                        aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                    <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                </ul>
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
        </div>
        <!-- POETRY & PROSE CONTENT -->
        <div id="poetry-prose-content" class="poetry-prose-content mt-3 w-100">
            <h4 class="text-center poetry_prose_text mx-5 pb-2">POETRY & PROSE</h4>
            <div class="row justify-content-center mx-5 mb-4">
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
        </div>
        <!-- SELF-HELP CONTENT -->
        <div id="self-help-content" class="self-help-content mt-3 w-100">
            <h4 class="text-center self_help_text mx-5 pb-2">SELF-HELP</h4>
            <div class="row justify-content-center mx-5 mb-4">
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
        </div>
        <!-- ROMANCE & SAGA CONTENT -->
        <div id="romance-saga-content" class="romance-saga-content mt-3 w-100">
            <h4 class="text-center romance_saga_text mx-5 pb-2">ROMANCE & SAGA</h4>
            <div class="row justify-content-center mx-5 mb-4">
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
        </div>
        <!-- SCIENCE FICTION CONTENT -->
        <div id="science-fiction-content" class="science-fiction-content mt-3 w-100">
            <h4 class="text-center science_fiction_text mx-5 pb-2">SCIENCE FICTION</h4>
            <div class="row justify-content-center mx-5 mb-4">
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
        </div>
        <!-- FANTASY & ADVENTURE -->
        <div id="fantasy-adventure-content" class="fantasy-adventure-content mt-3 w-100">
            <h4 class="text-center fantasy_adventure_text mx-5 pb-2">FANTASY & ADVENTURE</h4>
            <div class="row justify-content-center mx-5 mb-4">
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
        </div>
        <!-- YOUNG ADULT CONTENT -->
        <div id="young-adult-content" class="young-adult-content mt-3 w-100">
            <h4 class="text-center young_adult_text mx-5 pb-2">YOUNG ADULT</h4>
            <div class="row justify-content-center mx-5 mb-4">
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
        </div>
        <!-- MYSTERY & SUSPENSE CONTENT -->
        <div id="mystery-suspense-content" class="mystery-suspense-content mt-3 w-100">
            <h4 class="text-center mystery_suspense_text mx-5 pb-2">MYSTERY & SUSPENSE</h4>
            <div class="row justify-content-center mx-5 mb-4">
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="btns d-flex flex-row mb-2 dropdown">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px;"></i></button> --}}
                                <button class="add-button"><i class="fa fa-plus-circle fa-lg"
                                        aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                    <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                </ul>
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
        </div>
        <!-- CRIME & THRILLER CONTENT -->
        <div id="crime-thriller-content" class="crime-thriller-content mt-3 w-100">
            <h4 class="text-center crime_thriller_text mx-5 pb-2">CRIME & THRILLER</h4>
            <div class="row justify-content-center mx-5 mb-4">
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
        </div>
        <!-- HORROR & SUPERNATURAL CONTENT -->
        <div id="horror-supernatural-content" class="horror-supernatural-content mt-3 w-100">
            <h4 class="text-center horror_supernatural_text mx-5 pb-2">HORROR & SUPERNATURAL</h4>
            <div class="row justify-content-center mx-5 mb-4">
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
        </div>
        <!-- COMEDY & SATIRE CONTENT -->
        <div id="comedy-satire-content" class="comedy-satire-content mt-3 w-100">
            <h4 class="text-center comedy_satire_text mx-5 pb-2">COMEDY & SATIRE</h4>
            <div class="row justify-content-center mx-5 mb-4">
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
        </div>
        <!-- NON-FICTION & BIOGRAPHY CONTENT -->
        <div id="nonfiction-biography-content" class="nonfiction-biography-content mt-3 w-100">
            <h4 class="text-center nonfiction_biography_text mx-5 pb-2">NON-FICTION & BIOGRAPHY</h4>
            <div class="row justify-content-center mx-5 mb-4">
                <div class="card col-3 m-1 shadow" style="width: 200px;">
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
                    <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                    <div class="card-body py-0">
                        <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                        <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                            Self Help</p>
                        <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                            <span class="fw-bold p-0">P100.00</span>
                            <div class="button-container">
                                {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                        style="margin-right: 8px"></i></button> --}}
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
        </div>
    </div>

    @include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
    ])

    <script>
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
                            console.log(data);
                            if (data.unit == 'Available') {
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
                                    window.location.href = "/product/" + data.id + "/" +
                                        data
                                        .user_id;
                                    searchContainer.innerHTML = '';
                                });
                                searchContainer.appendChild(suggestionElement);
                                suggestionElement.appendChild(searchedImage);
                                suggestionElement.appendChild(searchedContent);
                                searchedContent.appendChild(titleText);
                                searchedContent.appendChild(authorText);
                            }
                        });
                    })
                    .catch(error => console.log('error', error));
            } else {
                searchContainer.style.display = 'none'
                searchContainer.innerHTML = '';
            }
        });
        var sidebar_width = document.getElementById("sidebar").offsetWidth;
        var content_width = document.getElementById("content");
        var home_sidebar = document.getElementById("home-side-btn");
        var wishlist_sidebar = document.getElementById("wishlist-side-btn");
        var my_list = document.getElementById("myList-side-btn");
        var educational_anchor = document.getElementById("educational-anchor");
        var historical_fiction_anchor = document.getElementById("historical-fiction-anchor");
        var poetry_prose_anchor = document.getElementById("poetry-prose-anchor");
        var self_help_anchor = document.getElementById("self-help-anchor");
        var romance_saga_anchor = document.getElementById("romance-saga-anchor");
        var science_fiction_anchor = document.getElementById("science-fiction-anchor")
        var fantasy_adventure_anchor = document.getElementById("fantasy-adventure-anchor");
        var young_adult_anchor = document.getElementById("young-adult-anchor");
        var mystery_suspense_anchor = document.getElementById("mystery-suspense-anchor");
        var crime_thriller_anchor = document.getElementById("crime-thriller-anchor");
        var horror_supernatural_anchor = document.getElementById("horror-supernatural-anchor");
        var comedy_satire_anchor = document.getElementById("comedy-satire-anchor")
        var nonfiction_biography_anchor = document.getElementById("nonfiction-biography-anchor");
        var iframe = document.getElementById("content-frame");
        // partial templates
        var educational_cards = document.getElementById("educational");
        var historical_fiction_cards = document.getElementById("historical_fiction");
        var poetry_prose_cards = document.getElementById("poetry_prose");
        var self_help_cards = document.getElementById("self_help");
        var romance_saga_cards = document.getElementById("romance_saga");
        var science_fiction_cards = document.getElementById("science_fiction");
        var fantasy_adventure_cards = document.getElementById("fantasy_adventure");
        var young_adult_cards = document.getElementById("young_adult");
        var mystery_suspense_cards = document.getElementById("mystery_suspense");
        var crime_thriller_cards = document.getElementById("crime_thriller");
        var horror_supernatural_cards = document.getElementById("horror_supernatural");
        var comedy_satire_cards = document.getElementById("comedy_satire");
        var nonfiction_biography_cards = document.getElementById("nonfiction_biography");
        var educational_btn = document.getElementById("educational-header");
        var historical_fiction_btn = document.getElementById("historical-fiction-header");
        var poetry_prose_btn = document.getElementById("poetry-prose-header");
        var self_help_btn = document.getElementById("self-help-header");
        var romance_saga_btn = document.getElementById("romance-saga-header");
        var science_fiction_btn = document.getElementById("science-fiction-header");
        var fantasy_adventure_btn = document.getElementById("fantasy-adventure-header");
        var young_adult_btn = document.getElementById("young-adult-header");
        var mystery_suspense_btn = document.getElementById("mystery-suspense-header");
        var crime_thriller_btn = document.getElementById("crime-thriller-header");
        var horror_supernatural_btn = document.getElementById("horror-supernatural-header");
        var comedy_satire_btn = document.getElementById("comedy-satire-header");
        var nonfiction_biography_btn = document.getElementById("nonfiction-biography-header");
        educational_btn.addEventListener("click", function() {
            educational_cards.style.display = "none";
            historical_fiction_cards.style.display = "none";
            poetry_prose_cards.style.display = "none";
            self_help_cards.style.display = "none";
            romance_saga_cards.style.display = "none";
            science_fiction_cards.style.display = "none";
            fantasy_adventure_cards.style.display = "none";
            young_adult_cards.style.display = "none";
            mystery_suspense_cards.style.display = "none";
            crime_thriller_cards.style.display = "none";
            horror_supernatural_cards.style.display = "none";
            comedy_satire_cards.style.display = "none";
            nonfiction_biography_cards.style.display = "none";
            document.getElementById("educational-content").style.display = "table";
        });
        historical_fiction_btn.addEventListener("click", function() {
            educational_cards.style.display = "none";
            historical_fiction_cards.style.display = "none";
            poetry_prose_cards.style.display = "none";
            self_help_cards.style.display = "none";
            romance_saga_cards.style.display = "none";
            science_fiction_cards.style.display = "none";
            fantasy_adventure_cards.style.display = "none";
            young_adult_cards.style.display = "none";
            mystery_suspense_cards.style.display = "none";
            crime_thriller_cards.style.display = "none";
            horror_supernatural_cards.style.display = "none";
            comedy_satire_cards.style.display = "none";
            nonfiction_biography_cards.style.display = "none";
            document.getElementById("historical-fiction-content").style.display = "table";
        });
        poetry_prose_btn.addEventListener("click", function() {
            educational_cards.style.display = "none";
            historical_fiction_cards.style.display = "none";
            poetry_prose_cards.style.display = "none";
            self_help_cards.style.display = "none";
            romance_saga_cards.style.display = "none";
            science_fiction_cards.style.display = "none";
            fantasy_adventure_cards.style.display = "none";
            young_adult_cards.style.display = "none";
            mystery_suspense_cards.style.display = "none";
            crime_thriller_cards.style.display = "none";
            horror_supernatural_cards.style.display = "none";
            comedy_satire_cards.style.display = "none";
            nonfiction_biography_cards.style.display = "none";
            document.getElementById("poetry-prose-content").style.display = "table";
        });
        self_help_btn.addEventListener("click", function() {
            educational_cards.style.display = "none";
            historical_fiction_cards.style.display = "none";
            poetry_prose_cards.style.display = "none";
            self_help_cards.style.display = "none";
            romance_saga_cards.style.display = "none";
            science_fiction_cards.style.display = "none";
            fantasy_adventure_cards.style.display = "none";
            young_adult_cards.style.display = "none";
            mystery_suspense_cards.style.display = "none";
            crime_thriller_cards.style.display = "none";
            horror_supernatural_cards.style.display = "none";
            comedy_satire_cards.style.display = "none";
            nonfiction_biography_cards.style.display = "none";
            document.getElementById("self-help-content").style.display = "table";
        });
        romance_saga_btn.addEventListener("click", function() {
            educational_cards.style.display = "none";
            historical_fiction_cards.style.display = "none";
            poetry_prose_cards.style.display = "none";
            self_help_cards.style.display = "none";
            romance_saga_cards.style.display = "none";
            science_fiction_cards.style.display = "none";
            fantasy_adventure_cards.style.display = "none";
            young_adult_cards.style.display = "none";
            mystery_suspense_cards.style.display = "none";
            crime_thriller_cards.style.display = "none";
            horror_supernatural_cards.style.display = "none";
            comedy_satire_cards.style.display = "none";
            nonfiction_biography_cards.style.display = "none";
            document.getElementById("romance-saga-content").style.display = "table";
        });
        science_fiction_btn.addEventListener("click", function() {
            educational_cards.style.display = "none";
            historical_fiction_cards.style.display = "none";
            poetry_prose_cards.style.display = "none";
            self_help_cards.style.display = "none";
            romance_saga_cards.style.display = "none";
            science_fiction_cards.style.display = "none";
            fantasy_adventure_cards.style.display = "none";
            young_adult_cards.style.display = "none";
            mystery_suspense_cards.style.display = "none";
            crime_thriller_cards.style.display = "none";
            horror_supernatural_cards.style.display = "none";
            comedy_satire_cards.style.display = "none";
            nonfiction_biography_cards.style.display = "none";
            document.getElementById("science-fiction-content").style.display = "table";
        });
        fantasy_adventure_btn.addEventListener("click", function() {
            educational_cards.style.display = "none";
            historical_fiction_cards.style.display = "none";
            poetry_prose_cards.style.display = "none";
            self_help_cards.style.display = "none";
            romance_saga_cards.style.display = "none";
            science_fiction_cards.style.display = "none";
            fantasy_adventure_cards.style.display = "none";
            young_adult_cards.style.display = "none";
            mystery_suspense_cards.style.display = "none";
            crime_thriller_cards.style.display = "none";
            horror_supernatural_cards.style.display = "none";
            comedy_satire_cards.style.display = "none";
            nonfiction_biography_cards.style.display = "none";
            document.getElementById("fantasy-adventure-content").style.display = "table";
        });
        young_adult_btn.addEventListener("click", function() {
            educational_cards.style.display = "none";
            historical_fiction_cards.style.display = "none";
            poetry_prose_cards.style.display = "none";
            self_help_cards.style.display = "none";
            romance_saga_cards.style.display = "none";
            science_fiction_cards.style.display = "none";
            fantasy_adventure_cards.style.display = "none";
            young_adult_cards.style.display = "none";
            mystery_suspense_cards.style.display = "none";
            crime_thriller_cards.style.display = "none";
            horror_supernatural_cards.style.display = "none";
            comedy_satire_cards.style.display = "none";
            nonfiction_biography_cards.style.display = "none";
            document.getElementById("young-adult-content").style.display = "table";
        });
        mystery_suspense_btn.addEventListener("click", function() {
            educational_cards.style.display = "none";
            historical_fiction_cards.style.display = "none";
            poetry_prose_cards.style.display = "none";
            self_help_cards.style.display = "none";
            romance_saga_cards.style.display = "none";
            science_fiction_cards.style.display = "none";
            fantasy_adventure_cards.style.display = "none";
            young_adult_cards.style.display = "none";
            mystery_suspense_cards.style.display = "none";
            crime_thriller_cards.style.display = "none";
            horror_supernatural_cards.style.display = "none";
            comedy_satire_cards.style.display = "none";
            nonfiction_biography_cards.style.display = "none";
            document.getElementById("mystery-suspense-content").style.display = "table";
        });
        crime_thriller_btn.addEventListener("click", function() {
            educational_cards.style.display = "none";
            historical_fiction_cards.style.display = "none";
            poetry_prose_cards.style.display = "none";
            self_help_cards.style.display = "none";
            romance_saga_cards.style.display = "none";
            science_fiction_cards.style.display = "none";
            fantasy_adventure_cards.style.display = "none";
            young_adult_cards.style.display = "none";
            mystery_suspense_cards.style.display = "none";
            crime_thriller_cards.style.display = "none";
            horror_supernatural_cards.style.display = "none";
            comedy_satire_cards.style.display = "none";
            nonfiction_biography_cards.style.display = "none";
            document.getElementById("crime-thriller-content").style.display = "table";
        });
        horror_supernatural_btn.addEventListener("click", function() {
            educational_cards.style.display = "none";
            historical_fiction_cards.style.display = "none";
            poetry_prose_cards.style.display = "none";
            self_help_cards.style.display = "none";
            romance_saga_cards.style.display = "none";
            science_fiction_cards.style.display = "none";
            fantasy_adventure_cards.style.display = "none";
            young_adult_cards.style.display = "none";
            mystery_suspense_cards.style.display = "none";
            crime_thriller_cards.style.display = "none";
            horror_supernatural_cards.style.display = "none";
            comedy_satire_cards.style.display = "none";
            nonfiction_biography_cards.style.display = "none";
            document.getElementById("horror-supernatural-content").style.display = "table";
        });
        comedy_satire_btn.addEventListener("click", function() {
            educational_cards.style.display = "none";
            historical_fiction_cards.style.display = "none";
            poetry_prose_cards.style.display = "none";
            self_help_cards.style.display = "none";
            romance_saga_cards.style.display = "none";
            science_fiction_cards.style.display = "none";
            fantasy_adventure_cards.style.display = "none";
            young_adult_cards.style.display = "none";
            mystery_suspense_cards.style.display = "none";
            crime_thriller_cards.style.display = "none";
            horror_supernatural_cards.style.display = "none";
            comedy_satire_cards.style.display = "none";
            nonfiction_biography_cards.style.display = "none";
            document.getElementById("comedy-satire-content").style.display = "table";
        });
        nonfiction_biography_btn.addEventListener("click", function() {
            educational_cards.style.display = "none";
            historical_fiction_cards.style.display = "none";
            poetry_prose_cards.style.display = "none";
            self_help_cards.style.display = "none";
            romance_saga_cards.style.display = "none";
            science_fiction_cards.style.display = "none";
            fantasy_adventure_cards.style.display = "none";
            young_adult_cards.style.display = "none";
            mystery_suspense_cards.style.display = "none";
            crime_thriller_cards.style.display = "none";
            horror_supernatural_cards.style.display = "none";
            comedy_satire_cards.style.display = "none";
            nonfiction_biography_cards.style.display = "none";
            document.getElementById("nonfiction-biography-content").style.display = "table";
        });
    </script>