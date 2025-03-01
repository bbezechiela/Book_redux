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
    <div id="content" class="border content">
        <ul class="nav bg-light sticky-top head-nav shadow py-4 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5"
                        src="../assets/Book_Logo.png" alt="Logo"></a>
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
                        <ul class="nav py-profile justify-content-end" style="margin-left: 2em">
                            <li class="nav-item dropdown">
                                <a href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                    class="nav-link dropdown-toggle avatar" aria-expanded="false" title="profile">
                                    <img src="{{ session('image') }}"
                                        alt="notification" width="35" height="35" class="rounded-5"
                                        style="margin-right: 2em;">
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/myprofile">Profile</a></li>
                                    <li><a class="dropdown-item" href="/mypurchase">My Purchase</a></li>
                                    <li><a class="dropdown-item" href="/addresses">Addresses</a></li>
                                    {{-- <li><a class="dropdown-item" href="/changepassword">Change Password</a></li> --}}
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
            <div id="content-cards" class="w-100 mx-2 d-flex px-4 overflow-x-auto" style="height: 290px; ">
                <!-- card Educational -->
                @php
                    $educCount = 0;
                @endphp
                @foreach ($book as $educational)
                    @if (preg_match('/Educational/i', $educational->genre))
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $educational->id }}, {{ $educational->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $educational->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $educational->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $educational->author }}<br>
                                    {{ $educational->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $educational->status }}</p>
                            </div>
                        </div>
                        @php
                            $educCount++;

                            if ($educCount == 10) {
                                break;
                            }
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
        <div id="historical_fiction" class="mx-5 px-5">
            <h4 id="historical-fiction-header">Historical Fiction</h4>
            <div class="w-100mx-2 d-flex px-4 overflow-x-auto" style="height: 290px; ">
                <!-- card Historical Fiction -->
                @php
                    $historic = 0;
                @endphp
                @foreach ($book as $historical_fiction)
                    @if (preg_match('/Historical Fiction/i', $historical_fiction->genre))
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $historical_fiction->id }}, {{ $historical_fiction->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $historical_fiction->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $historical_fiction->title }}
                                </p>
                                <p class="card-text mt-0 mb-0">{{ $historical_fiction->author }}<br>
                                    {{ $historical_fiction->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $historical_fiction->status }}</p>
                            </div>
                        </div>
                        @php
                            $historic++;

                            if ($historic == 10) {
                                break;
                            }
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
        <div id="poetry_prose" class="mx-5 px-5">
            <h4 id="poetry-prose-header">Poetry & Prose</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 290px; ">
                <!-- card Poetry & Prose -->
                @php
                    $poetry = 0;
                @endphp
                @foreach ($book as $poetry_prose)
                    @if (preg_match('/Poetry & Prose/i', $poetry_prose->genre))
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $poetry_prose->id }}, {{ $poetry_prose->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $poetry_prose->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $poetry_prose->title }}
                                </p>
                                <p class="card-text mt-0 mb-0">{{ $poetry_prose->author }}<br>
                                    {{ $poetry_prose->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $poetry_prose->status }}</p>
                            </div>
                        </div>
                        @php
                            $poetry++;

                            if ($poetry == 10) {
                                break;
                            }
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
        <div id="self_help" class="mx-5 px-5">
            <h4 id="self-help-header">Self-Help</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 290px; ">
                <!-- card Self-Help -->
                @php
                    $self = 0;
                @endphp
                @foreach ($book as $self_help)
                    @if (preg_match('/Self-Help/i', $self_help->genre))
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $self_help->id }}, {{ $self_help->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $self_help->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $self_help->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $self_help->author }}<br>
                                    {{ $self_help->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $self_help->status }}</p>
                            </div>
                        </div>
                        @php
                            $self++;

                            if ($self == 10) {
                                break;
                            }
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
        <div id="romance_saga" class="mx-5 px-5">
            <h4 id="romance-saga-header">Romance & Saga</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 290px; ">
                <!-- card Romance & Saga -->
                @php
                    $romance = 0;
                @endphp
                @foreach ($book as $romance_saga)
                    @if (preg_match('/Romance & Saga/i', $romance_saga->genre))
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $romance_saga->id }}, {{ $romance_saga->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $romance_saga->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $romance_saga->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $romance_saga->author }}<br>
                                    {{ $romance_saga->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $romance_saga->status }}</p>
                            </div>
                        </div>
                        @php
                            $romance++;

                            if ($romance == 10) {
                                break;
                            }
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
        <div id="science_fiction" class="mx-5 px-5">
            <h4 id="science-fiction-header">Science Fiction</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 290px; ">
                <!-- card Science Fiction -->
                @php
                    $science = 0;
                @endphp
                @foreach ($book as $science_fiction)
                    @if (preg_match('/Science Fiction/i', $science_fiction->genre))
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $science_fiction->id }}, {{ $science_fiction->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $science_fiction->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $science_fiction->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $science_fiction->author }}<br>
                                    {{ $science_fiction->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $science_fiction->status }}</p>
                            </div>
                        </div>
                        @php
                            $science++;

                            if ($science == 10) {
                                break;
                            }
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
        <div id="fantasy_adventure" class="mx-5 px-5">
            <h4 id="fantasy-adventure-header">Fantasy & Adventure</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 290px; ">
                <!-- card Fantasy & Adventure -->
                @php
                    $fantasy = 0;
                @endphp
                @foreach ($book as $fantasy_adventure)
                    @if (preg_match('/Fantasy & Adventure/i', $fantasy_adventure->genre))
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $fantasy_adventure->id }}, {{ $fantasy_adventure->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $fantasy_adventure->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $fantasy_adventure->title }}
                                </p>
                                <p class="card-text mt-0 mb-0">{{ $fantasy_adventure->author }}<br>
                                    {{ $fantasy_adventure->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $fantasy_adventure->status }}</p>
                            </div>
                        </div>
                        @php
                            $fantasy++;

                            if ($fantasy == 10) {
                                break;
                            }
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
        <div id="young_adult" class="mx-5 px-5">
            <h4 id="young-adult-header">Young Adult</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 290px; ">
                <!-- card Young Adult -->
                @php
                    $young = 0;
                @endphp
                @foreach ($book as $young_adult)
                    @if (preg_match('/Young Adult/i', $young_adult->genre))
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $young_adult->id }}, {{ $young_adult->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $young_adult->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $young_adult->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $young_adult->author }}<br>
                                    {{ $young_adult->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $young_adult->status }}</p>
                            </div>
                        </div>
                        @php
                            $young++;

                            if ($young == 10) {
                                break;
                            }
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
        <div id="mystery_suspense" class="mx-5 px-5">
            <h4 id="mystery-suspense-header">Mystery & Suspense</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 290px; ">
                <!-- card Mystery & Suspense -->
                @php
                    $mystery = 0;
                @endphp
                @foreach ($book as $mystery_suspense)
                    @if (preg_match('/Mystery & Suspense/i', $mystery_suspense->genre))
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $mystery_suspense->id }}, {{ $mystery_suspense->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $mystery_suspense->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $mystery_suspense->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $mystery_suspense->author }}<br>
                                    {{ $mystery_suspense->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $mystery_suspense->status }}</p>
                            </div>
                        </div>
                        @php
                            $mystery++;

                            if ($mystery == 10) {
                                break;
                            }
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>



        <div id="crime_thriller" class="mx-5 px-5">
            <h4 id="crime-thriller-header">Crime & Thriller</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 290px; ">
                <!-- card Crime & Thriller -->
                @php
                    $crime = 0;
                @endphp
                @foreach ($book as $crime_thriller)
                    @if (preg_match('/Crime & Thriller/i', $crime_thriller->genre))
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $crime_thriller->id }}, {{ $crime_thriller->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $crime_thriller->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $crime_thriller->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $crime_thriller->author }}<br>
                                    {{ $crime_thriller->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $crime_thriller->status }}</p>
                            </div>
                        </div>
                        @php
                            $crime++;

                            if ($crime == 10) {
                                break;
                            }
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
        <div id="horror_supernatural" class="mx-5 px-5">
            <h4 id="horror-supernatural-header">Horror & Supernatural</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 290px; ">
                <!-- card Horror & Supernatural -->
                @php
                    $horror = 0;
                @endphp
                @foreach ($book as $horror_supernatural)
                    @if (preg_match('/Horror & Supernatural/i', $horror_supernatural->genre))
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $horror_supernatural->id }}, {{ $horror_supernatural->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $horror_supernatural->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $horror_supernatural->title }}
                                </p>
                                <p class="card-text mt-0 mb-0">{{ $horror_supernatural->author }}<br>
                                    {{ $horror_supernatural->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $horror_supernatural->status }}</p>
                            </div>
                        </div>
                        @php
                            $horror++;

                            if ($horror == 10) {
                                break;
                            }
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
        <div id="comedy_satire" class="mx-5 px-5">
            <h4 id="comedy-satire-header">Comedy & Satire</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 290px; ">
                <!-- card Comedy & Satire-->
                @php
                    $comedy = 0;
                @endphp
                @foreach ($book as $comedy_satire)
                    @if (preg_match('/Comedy & Satire/i', $comedy_satire->genre))
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $comedy_satire->id }}, {{ $comedy_satire->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $comedy_satire->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $comedy_satire->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $comedy_satire->author }}<br>
                                    {{ $comedy_satire->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $comedy_satire->status }}</p>
                            </div>
                        </div>
                        @php
                            $comedy++;

                            if ($comedy == 10) {
                                break;
                            }
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
        <div id="nonfiction_biography" class="mx-5 px-5">
            <h4 id="nonfiction-biography-header">Non-Fiction & Biography</h4>
            <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 290px; ">
                <!-- card Non-Fiction & Biography -->
                @php
                    $nonfiction = 0;
                @endphp
                @foreach ($book as $nonfiction_biography)
                    @if (preg_match('/Non-Fiction & Biography/i', $nonfiction_biography->genre))
                        <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $nonfiction_biography->id }}, {{ $nonfiction_biography->user_id }})">
                            <img src="{{ asset('images/book_cover/' . $nonfiction_biography->back_cover) }}"
                                class="img mx-auto p-2" alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $nonfiction_biography->title }}</p>
                                <p class="card-text mt-0 mb-0">{{ $nonfiction_biography->author }}<br>
                                    {{ $nonfiction_biography->genre }}</p>
                                <p class="fw-bold" style="color: #E55B13;">{{ $nonfiction_biography->status }}</p>
                            </div>
                        </div>
                        @php
                            $nonfiction++;

                            if ($nonfiction == 10) {
                                break;
                            }
                        @endphp
                    @endif
                @endforeach
            </div>
        </div>
        <!-- EDUCATIONAL CONTENT -->
        <div id="educational-content" class="educational-content mt-3 w-100">
            <h4 class="text-center educational_text mx-5 pb-2">EDUCATIONAL</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($book as $educational)
                    @if (preg_match('/Educational/i', $educational->genre))
                        @if ($educational->user->type == 'Bookseller')
                            @if ($educational->status == 'Rent' && $educational->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $educational->id }}, {{ $educational->user_id }})">
                                    <img src="{{ asset('images/books/' . $educational->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $educational->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $educational->author }}<br>
                                            {{ $educational->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $educational->user->address }}</p>
                                        @foreach ($educational->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $educational->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $educational->security_deposit }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $educational->id }}"
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
                            @elseif ($educational->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $educational->id }}, {{ $educational->user_id }})">
                                    <img src="{{ asset('images/books/' . $educational->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $educational->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $educational->author }}<br>
                                            {{ $educational->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $educational->user->address }}</p>
                                        @foreach ($educational->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $educational->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $educational->price }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $educational->id }}"
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
                            @endif
                        @elseif ($educational->status == 'Exchange' && $educational->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $educational->id }}, {{ $educational->user_id }})">
                                <img src="{{ asset('images/books/' . $educational->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">{{ $educational->title }}
                                    </p>
                                    <p class="card-text mt-0 mb-0">{{ $educational->author }}<br>
                                        {{ $educational->genre }}</p>
                                    @foreach ($educational->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($educational->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $educational->id)
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
                        @elseif ($educational->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $educational->id }}, {{ $educational->user_id }})">
                                <img src="{{ asset('images/books/' . $educational->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">{{ $educational->title }}
                                    </p>
                                    <p class="card-text mt-0 mb-0">{{ $educational->author }}<br>
                                        {{ $educational->genre }}</p>
                                    @foreach ($educational->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($educational->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $educational->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $educational->price }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $educational->id }}"
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
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        <!-- HISTORICAL FICTION CONTENT -->
        <div id="historical-fiction-content" class="historical-fiction-content mt-3 w-100">
            <h4 class="text-center historical_fiction_text mx-5 pb-2">HISTORICAL FICTION</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($book as $historical_fiction)
                    @if (preg_match('/Historical Fiction/i', $historical_fiction->genre))
                        @if ($historical_fiction->user->type == 'Bookseller')
                            @if ($historical_fiction->status == 'Rent' && $historical_fiction->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $historical_fiction->id }}, {{ $historical_fiction->user_id }})">
                                    <img src="{{ asset('images/books/' . $historical_fiction->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $historical_fiction->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $historical_fiction->author }}<br>
                                            {{ $historical_fiction->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $historical_fiction->user->address }}</p>
                                        @foreach ($historical_fiction->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $historical_fiction->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span
                                                class="fw-bold p-0">₱{{ $historical_fiction->security_deposit }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $historical_fiction->id }}"
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
                            @elseif ($historical_fiction->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $historical_fiction->id }}, {{ $historical_fiction->user_id }})">
                                    <img src="{{ asset('images/books/' . $historical_fiction->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $historical_fiction->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $historical_fiction->author }}<br>
                                            {{ $historical_fiction->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $historical_fiction->user->address }}</p>
                                        @foreach ($historical_fiction->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $historical_fiction->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $historical_fiction->price }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $historical_fiction->id }}"
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
                            @endif
                        @elseif ($historical_fiction->status == 'Exchange' && $historical_fiction->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $historical_fiction->id }}, {{ $historical_fiction->user_id }})">
                                <img src="{{ asset('images/books/' . $historical_fiction->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $historical_fiction->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $historical_fiction->author }}<br>
                                        {{ $historical_fiction->genre }}</p>
                                    @foreach ($historical_fiction->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($historical_fiction->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $historical_fiction->id)
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
                        @elseif ($historical_fiction->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $historical_fiction->id }}, {{ $historical_fiction->user_id }})">
                                <img src="{{ asset('images/books/' . $historical_fiction->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $historical_fiction->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $historical_fiction->author }}<br>
                                        {{ $historical_fiction->genre }}</p>
                                    @foreach ($historical_fiction->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($historical_fiction->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $historical_fiction->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $historical_fiction->price }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $historical_fiction->id }}"
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
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        <!-- POETRY & PROSE CONTENT -->
        <div id="poetry-prose-content" class="poetry-prose-content mt-3 w-100">
            <h4 class="text-center poetry_prose_text mx-5 pb-2">POETRY & PROSE</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($book as $poetry_prose)
                    @if (preg_match('/Poetry & Prose/i', $poetry_prose->genre))
                        @if ($poetry_prose->user->type == 'Bookseller')
                            @if ($poetry_prose->status == 'Rent' && $poetry_prose->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $poetry_prose->id }}, {{ $poetry_prose->user_id }})">
                                    <img src="{{ asset('images/books/' . $poetry_prose->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $poetry_prose->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $poetry_prose->author }}<br>
                                            {{ $poetry_prose->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $poetry_prose->user->address }}</p>
                                        @foreach ($poetry_prose->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $poetry_prose->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $poetry_prose->security_deposit }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $poetry_prose->id }}"
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
                            @elseif ($poetry_prose->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $poetry_prose->id }}, {{ $poetry_prose->user_id }})">
                                    <img src="{{ asset('images/books/' . $poetry_prose->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $poetry_prose->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $poetry_prose->author }}<br>
                                            {{ $poetry_prose->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $poetry_prose->user->address }}</p>
                                        @foreach ($poetry_prose->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $poetry_prose->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $poetry_prose->price }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $poetry_prose->id }}"
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
                            @endif
                        @elseif ($poetry_prose->status == 'Exchange' && $poetry_prose->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $poetry_prose->id }}, {{ $poetry_prose->user_id }})">
                                <img src="{{ asset('images/books/' . $poetry_prose->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $poetry_prose->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $poetry_prose->author }}<br>
                                        {{ $poetry_prose->genre }}</p>
                                    @foreach ($poetry_prose->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($poetry_prose->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $poetry_prose->id)
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
                        @elseif ($poetry_prose->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $poetry_prose->id }}, {{ $poetry_prose->user_id }})">
                                <img src="{{ asset('images/books/' . $poetry_prose->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $poetry_prose->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $poetry_prose->author }}<br>
                                        {{ $poetry_prose->genre }}</p>
                                    @foreach ($poetry_prose->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($poetry_prose->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $poetry_prose->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $poetry_prose->price }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $poetry_prose->id }}"
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
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        <!-- SELF-HELP CONTENT -->
        <div id="self-help-content" class="self-help-content mt-3 w-100">
            <h4 class="text-center self_help_text mx-5 pb-2">SELF-HELP</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($book as $self_help)
                    @if (preg_match('/Self-Help/i', $self_help->genre))
                        @if ($self_help->user->type == 'Bookseller')
                            @if ($self_help->status == 'Rent' && $self_help->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $self_help->id }}, {{ $self_help->user_id }})">
                                    <img src="{{ asset('images/books/' . $self_help->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $self_help->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $self_help->author }}<br>
                                            {{ $self_help->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $self_help->user->address }}</p>
                                        @foreach ($self_help->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $self_help->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $self_help->security_deposit }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $self_help->id }}"
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
                            @elseif ($self_help->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $self_help->id }}, {{ $self_help->user_id }})">
                                    <img src="{{ asset('images/books/' . $self_help->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $self_help->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $self_help->author }}<br>
                                            {{ $self_help->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $self_help->user->address }}</p>
                                        @foreach ($self_help->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $self_help->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $self_help->price }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $self_help->id }}"
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
                            @endif
                        @elseif ($self_help->status == 'Exchange' && $self_help->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $self_help->id }}, {{ $self_help->user_id }})">
                                <img src="{{ asset('images/books/' . $self_help->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $self_help->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $self_help->author }}<br>
                                        {{ $self_help->genre }}</p>
                                    @foreach ($self_help->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($self_help->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $self_help->id)
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
                        @elseif ($self_help->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $self_help->id }}, {{ $self_help->user_id }})">
                                <img src="{{ asset('images/books/' . $self_help->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $self_help->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $self_help->author }}<br>
                                        {{ $self_help->genre }}</p>
                                    @foreach ($self_help->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($self_help->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $self_help->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $self_help->price }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $self_help->id }}"
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
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        <!-- ROMANCE & SAGA CONTENT -->
        <div id="romance-saga-content" class="romance-saga-content mt-3 w-100">
            <h4 class="text-center romance_saga_text mx-5 pb-2">ROMANCE & SAGA</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($book as $romance_saga)
                    @if (preg_match('/Romance & Saga/i', $romance_saga->genre))
                        @if ($romance_saga->user->type == 'Bookseller')
                            @if ($romance_saga->status == 'Rent' && $romance_saga->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $romance_saga->id }}, {{ $romance_saga->user_id }})">
                                    <img src="{{ asset('images/books/' . $romance_saga->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $romance_saga->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $romance_saga->author }}<br>
                                            {{ $romance_saga->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $romance_saga->user->address }}</p>
                                        @foreach ($romance_saga->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $romance_saga->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $romance_saga->security_deposit }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $romance_saga->id }}"
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
                            @elseif ($romance_saga->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $romance_saga->id }}, {{ $romance_saga->user_id }})">
                                    <img src="{{ asset('images/books/' . $romance_saga->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $romance_saga->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $romance_saga->author }}<br>
                                            {{ $romance_saga->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $romance_saga->user->address }}</p>
                                        @foreach ($romance_saga->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $romance_saga->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $romance_saga->price }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $romance_saga->id }}"
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
                            @endif
                        @elseif ($romance_saga->status == 'Exchange' && $romance_saga->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $romance_saga->id }}, {{ $romance_saga->user_id }})">
                                <img src="{{ asset('images/books/' . $romance_saga->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $romance_saga->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $romance_saga->author }}<br>
                                        {{ $romance_saga->genre }}</p>
                                    @foreach ($romance_saga->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($romance_saga->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $romance_saga->id)
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
                        @elseif ($romance_saga->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $romance_saga->id }}, {{ $romance_saga->user_id }})">
                                <img src="{{ asset('images/books/' . $romance_saga->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $romance_saga->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $romance_saga->author }}<br>
                                        {{ $romance_saga->genre }}</p>
                                    @foreach ($romance_saga->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($romance_saga->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $romance_saga->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $romance_saga->price }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $romance_saga->id }}"
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
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        <!-- SCIENCE FICTION CONTENT -->
        <div id="science-fiction-content" class="science-fiction-content mt-3 w-100">
            <h4 class="text-center science_fiction_text mx-5 pb-2">SCIENCE FICTION</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($book as $science_fiction)
                    @if (preg_match('/Science Fiction/i', $science_fiction->genre))
                        @if ($science_fiction->user->type == 'Bookseller')
                            @if ($science_fiction->status == 'Rent' && $science_fiction->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $science_fiction->id }}, {{ $science_fiction->user_id }})">
                                    <img src="{{ asset('images/books/' . $science_fiction->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $science_fiction->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $science_fiction->author }}<br>
                                            {{ $science_fiction->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $science_fiction->user->address }}</p>
                                        @foreach ($science_fiction->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $science_fiction->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span
                                                class="fw-bold p-0">₱{{ $science_fiction->security_deposit }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $science_fiction->id }}"
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
                            @elseif ($science_fiction->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $science_fiction->id }}, {{ $science_fiction->user_id }})">
                                    <img src="{{ asset('images/books/' . $science_fiction->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $science_fiction->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $science_fiction->author }}<br>
                                            {{ $science_fiction->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $science_fiction->user->address }}</p>
                                        @foreach ($science_fiction->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $science_fiction->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $science_fiction->price }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $science_fiction->id }}"
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
                            @endif
                        @elseif ($science_fiction->status == 'Exchange' && $science_fiction->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $science_fiction->id }}, {{ $science_fiction->user_id }})">
                                <img src="{{ asset('images/books/' . $science_fiction->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $science_fiction->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $science_fiction->author }}<br>
                                        {{ $science_fiction->genre }}</p>
                                    @foreach ($science_fiction->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($science_fiction->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $science_fiction->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div
                                        class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">For Exchange</span>
                                    </div>
                                </div>
                            </div>
                        @elseif ($science_fiction->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $science_fiction->id }}, {{ $science_fiction->user_id }})">
                                <img src="{{ asset('images/books/' . $science_fiction->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $science_fiction->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $science_fiction->author }}<br>
                                        {{ $science_fiction->genre }}</p>
                                    @foreach ($science_fiction->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($science_fiction->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $science_fiction->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div
                                        class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $science_fiction->price }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $science_fiction->id }}"
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
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        <!-- FANTASY & ADVENTURE -->
        <div id="fantasy-adventure-content" class="fantasy-adventure-content mt-3 w-100">
            <h4 class="text-center fantasy_adventure_text mx-5 pb-2">FANTASY & ADVENTURE</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($book as $fantasy_adventure)
                    @if (preg_match('/Fantasy & Adventure/i', $fantasy_adventure->genre))
                        @if ($fantasy_adventure->user->type == 'Bookseller')
                            @if ($fantasy_adventure->status == 'Rent' && $fantasy_adventure->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $fantasy_adventure->id }}, {{ $fantasy_adventure->user_id }})">
                                    <img src="{{ asset('images/books/' . $fantasy_adventure->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $fantasy_adventure->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $fantasy_adventure->author }}<br>
                                            {{ $fantasy_adventure->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $fantasy_adventure->user->address }}</p>
                                        @foreach ($fantasy_adventure->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $fantasy_adventure->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span
                                                class="fw-bold p-0">₱{{ $fantasy_adventure->security_deposit }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $fantasy_adventure->id }}"
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
                            @elseif ($fantasy_adventure->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $fantasy_adventure->id }}, {{ $fantasy_adventure->user_id }})">
                                    <img src="{{ asset('images/books/' . $fantasy_adventure->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $fantasy_adventure->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $fantasy_adventure->author }}<br>
                                            {{ $fantasy_adventure->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $fantasy_adventure->user->address }}</p>
                                        @foreach ($fantasy_adventure->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $fantasy_adventure->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $fantasy_adventure->price }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $fantasy_adventure->id }}"
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
                            @endif
                        @elseif ($fantasy_adventure->status == 'Exchange' && $fantasy_adventure->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $fantasy_adventure->id }}, {{ $fantasy_adventure->user_id }})">
                                <img src="{{ asset('images/books/' . $fantasy_adventure->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $fantasy_adventure->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $fantasy_adventure->author }}<br>
                                        {{ $fantasy_adventure->genre }}</p>
                                    @foreach ($fantasy_adventure->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($fantasy_adventure->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $fantasy_adventure->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div
                                        class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">For Exchange</span>
                                    </div>
                                </div>
                            </div>
                        @elseif ($fantasy_adventure->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $fantasy_adventure->id }}, {{ $fantasy_adventure->user_id }})">
                                <img src="{{ asset('images/books/' . $fantasy_adventure->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $fantasy_adventure->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $fantasy_adventure->author }}<br>
                                        {{ $fantasy_adventure->genre }}</p>
                                    @foreach ($fantasy_adventure->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($fantasy_adventure->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $fantasy_adventure->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div
                                        class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $fantasy_adventure->price }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $fantasy_adventure->id }}"
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
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        <!-- YOUNG ADULT CONTENT -->
        <div id="young-adult-content" class="young-adult-content mt-3 w-100">
            <h4 class="text-center young_adult_text mx-5 pb-2">YOUNG ADULT</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($book as $young_adult)
                    @if (preg_match('/Young Adult/i', $young_adult->genre))
                        @if ($young_adult->user->type == 'Bookseller')
                            @if ($young_adult->status == 'Rent' && $young_adult->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $young_adult->id }}, {{ $young_adult->user_id }})">
                                    <img src="{{ asset('images/books/' . $young_adult->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $young_adult->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $young_adult->author }}<br>
                                            {{ $young_adult->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $young_adult->user->address }}</p>
                                        @foreach ($young_adult->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $young_adult->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $young_adult->security_deposit }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $young_adult->id }}"
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
                            @elseif ($young_adult->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $young_adult->id }}, {{ $young_adult->user_id }})">
                                    <img src="{{ asset('images/books/' . $young_adult->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $young_adult->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $young_adult->author }}<br>
                                            {{ $young_adult->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $young_adult->user->address }}</p>
                                        @foreach ($young_adult->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $young_adult->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $young_adult->price }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $young_adult->id }}"
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
                            @endif
                        @elseif ($young_adult->status == 'Exchange' && $young_adult->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $young_adult->id }}, {{ $young_adult->user_id }})">
                                <img src="{{ asset('images/books/' . $young_adult->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $young_adult->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $young_adult->author }}<br>
                                        {{ $young_adult->genre }}</p>
                                    @foreach ($young_adult->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($young_adult->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $young_adult->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div
                                        class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">For Exchange</span>
                                    </div>
                                </div>
                            </div>
                        @elseif ($young_adult->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $young_adult->id }}, {{ $young_adult->user_id }})">
                                <img src="{{ asset('images/books/' . $young_adult->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $young_adult->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $young_adult->author }}<br>
                                        {{ $young_adult->genre }}</p>
                                    @foreach ($young_adult->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($young_adult->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $young_adult->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div
                                        class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $young_adult->price }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $young_adult->id }}"
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
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        <!-- MYSTERY & SUSPENSE CONTENT -->
        <div id="mystery-suspense-content" class="mystery-suspense-content mt-3 w-100">
            <h4 class="text-center mystery_suspense_text mx-5 pb-2">MYSTERY & SUSPENSE</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($book as $mystery_suspense)
                    @if (preg_match('/Mystery & Suspense/i', $mystery_suspense->genre))
                        @if ($mystery_suspense->user->type == 'Bookseller')
                            @if ($mystery_suspense->status == 'Rent' && $mystery_suspense->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $mystery_suspense->id }}, {{ $mystery_suspense->user_id }})">
                                    <img src="{{ asset('images/books/' . $mystery_suspense->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $mystery_suspense->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $mystery_suspense->author }}<br>
                                            {{ $mystery_suspense->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $mystery_suspense->user->address }}</p>
                                        @foreach ($mystery_suspense->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $mystery_suspense->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span
                                                class="fw-bold p-0">₱{{ $mystery_suspense->security_deposit }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $mystery_suspense->id }}"
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
                            @elseif ($mystery_suspense->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $mystery_suspense->id }}, {{ $mystery_suspense->user_id }})">
                                    <img src="{{ asset('images/books/' . $mystery_suspense->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $mystery_suspense->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $mystery_suspense->author }}<br>
                                            {{ $mystery_suspense->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $mystery_suspense->user->address }}</p>
                                        @foreach ($mystery_suspense->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $mystery_suspense->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $mystery_suspense->price }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $mystery_suspense->id }}"
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
                            @endif
                        @elseif ($mystery_suspense->status == 'Exchange' && $mystery_suspense->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $mystery_suspense->id }}, {{ $mystery_suspense->user_id }})">
                                <img src="{{ asset('images/books/' . $mystery_suspense->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $mystery_suspense->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $mystery_suspense->author }}<br>
                                        {{ $mystery_suspense->genre }}</p>
                                    @foreach ($mystery_suspense->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($mystery_suspense->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $mystery_suspense->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div
                                        class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">For Exchange</span>
                                    </div>
                                </div>
                            </div>
                        @elseif ($mystery_suspense->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $mystery_suspense->id }}, {{ $mystery_suspense->user_id }})">
                                <img src="{{ asset('images/books/' . $mystery_suspense->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $mystery_suspense->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $mystery_suspense->author }}<br>
                                        {{ $mystery_suspense->genre }}</p>
                                    @foreach ($mystery_suspense->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($mystery_suspense->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $mystery_suspense->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div
                                        class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $mystery_suspense->price }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $mystery_suspense->id }}"
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
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        <!-- CRIME & THRILLER CONTENT -->
        <div id="crime-thriller-content" class="crime-thriller-content mt-3 w-100">
            <h4 class="text-center crime_thriller_text mx-5 pb-2">CRIME & THRILLER</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($book as $crime_thriller)
                    @if (preg_match('/Crime & Thriller/i', $crime_thriller->genre))
                        @if ($crime_thriller->user->type == 'Bookseller')
                            @if ($crime_thriller->status == 'Rent' && $crime_thriller->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $crime_thriller->id }}, {{ $crime_thriller->user_id }})">
                                    <img src="{{ asset('images/books/' . $crime_thriller->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $crime_thriller->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $crime_thriller->author }}<br>
                                            {{ $crime_thriller->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $crime_thriller->user->address }}</p>
                                        @foreach ($crime_thriller->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $crime_thriller->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span
                                                class="fw-bold p-0">₱{{ $crime_thriller->security_deposit }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $crime_thriller->id }}"
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
                            @elseif ($crime_thriller->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $crime_thriller->id }}, {{ $crime_thriller->user_id }})">
                                    <img src="{{ asset('images/books/' . $crime_thriller->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $crime_thriller->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $crime_thriller->author }}<br>
                                            {{ $crime_thriller->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $crime_thriller->user->address }}</p>
                                        @foreach ($crime_thriller->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $crime_thriller->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $crime_thriller->price }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $crime_thriller->id }}"
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
                            @endif
                        @elseif ($crime_thriller->status == 'Exchange' && $crime_thriller->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $crime_thriller->id }}, {{ $crime_thriller->user_id }})">
                                <img src="{{ asset('images/books/' . $crime_thriller->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $crime_thriller->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $crime_thriller->author }}<br>
                                        {{ $crime_thriller->genre }}</p>
                                    @foreach ($crime_thriller->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($crime_thriller->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $crime_thriller->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div
                                        class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">For Exchange</span>
                                    </div>
                                </div>
                            </div>
                        @elseif ($crime_thriller->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $crime_thriller->id }}, {{ $crime_thriller->user_id }})">
                                <img src="{{ asset('images/books/' . $crime_thriller->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $crime_thriller->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $crime_thriller->author }}<br>
                                        {{ $crime_thriller->genre }}</p>
                                    @foreach ($crime_thriller->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($crime_thriller->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $crime_thriller->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div
                                        class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $crime_thriller->price }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $crime_thriller->id }}"
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
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        <!-- HORROR & SUPERNATURAL CONTENT -->
        <div id="horror-supernatural-content" class="horror-supernatural-content mt-3 w-100">
            <h4 class="text-center horror_supernatural_text mx-5 pb-2">HORROR & SUPERNATURAL</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($book as $horror_supernatural)
                    @if (preg_match('/Horror & Supernatural/i', $horror_supernatural->genre))
                        @if ($horror_supernatural->user->type == 'Bookseller')
                            @if ($horror_supernatural->status == 'Rent' && $horror_supernatural->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $horror_supernatural->id }}, {{ $horror_supernatural->user_id }})">
                                    <img src="{{ asset('images/books/' . $horror_supernatural->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $horror_supernatural->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $horror_supernatural->author }}<br>
                                            {{ $horror_supernatural->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $horror_supernatural->user->address }}</p>
                                        @foreach ($horror_supernatural->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $horror_supernatural->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span
                                                class="fw-bold p-0">₱{{ $horror_supernatural->security_deposit }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $horror_supernatural->id }}"
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
                            @elseif ($horror_supernatural->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $horror_supernatural->id }}, {{ $horror_supernatural->user_id }})">
                                    <img src="{{ asset('images/books/' . $horror_supernatural->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $horror_supernatural->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $horror_supernatural->author }}<br>
                                            {{ $horror_supernatural->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $horror_supernatural->user->address }}</p>
                                        @foreach ($horror_supernatural->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $horror_supernatural->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $horror_supernatural->price }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $horror_supernatural->id }}"
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
                            @endif
                        @elseif ($horror_supernatural->status == 'Exchange' && $horror_supernatural->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $horror_supernatural->id }}, {{ $horror_supernatural->user_id }})">
                                <img src="{{ asset('images/books/' . $horror_supernatural->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $horror_supernatural->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $horror_supernatural->author }}<br>
                                        {{ $horror_supernatural->genre }}</p>
                                    @foreach ($horror_supernatural->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($horror_supernatural->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $horror_supernatural->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div
                                        class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">For Exchange</span>
                                    </div>
                                </div>
                            </div>
                        @elseif ($horror_supernatural->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $horror_supernatural->id }}, {{ $horror_supernatural->user_id }})">
                                <img src="{{ asset('images/books/' . $horror_supernatural->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $horror_supernatural->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $horror_supernatural->author }}<br>
                                        {{ $horror_supernatural->genre }}</p>
                                    @foreach ($horror_supernatural->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($horror_supernatural->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $horror_supernatural->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div
                                        class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $horror_supernatural->price }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $horror_supernatural->id }}"
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
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        <!-- COMEDY & SATIRE CONTENT -->
        <div id="comedy-satire-content" class="comedy-satire-content mt-3 w-100">
            <h4 class="text-center comedy_satire_text mx-5 pb-2">COMEDY & SATIRE</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($book as $comedy_satire)
                    @if (preg_match('/Comedy & Satire/i', $comedy_satire->genre))
                        @if ($comedy_satire->user->type == 'Bookseller')
                            @if ($comedy_satire->status == 'Rent' && $comedy_satire->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $comedy_satire->id }}, {{ $comedy_satire->user_id }})">
                                    <img src="{{ asset('images/books/' . $comedy_satire->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $comedy_satire->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $comedy_satire->author }}<br>
                                            {{ $comedy_satire->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $comedy_satire->user->address }}</p>
                                        @foreach ($comedy_satire->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $comedy_satire->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $comedy_satire->security_deposit }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $comedy_satire->id }}"
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
                                    $comedy++;

                                    if ($comedy == 10) {
                                        break;
                                    }
                                @endphp
                            @elseif ($comedy_satire->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $comedy_satire->id }}, {{ $comedy_satire->user_id }})">
                                    <img src="{{ asset('images/books/' . $comedy_satire->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $comedy_satire->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $comedy_satire->author }}<br>
                                            {{ $comedy_satire->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $comedy_satire->user->address }}</p>
                                        @foreach ($comedy_satire->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $comedy_satire->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $comedy_satire->price }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $comedy_satire->id }}"
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
                            @endif
                            @php
                                $comedy++;

                                if ($comedy == 10) {
                                    break;
                                }
                            @endphp
                        @elseif ($comedy_satire->status == 'Exchange' && $comedy_satire->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $comedy_satire->id }}, {{ $comedy_satire->user_id }})">
                                <img src="{{ asset('images/books/' . $comedy_satire->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $comedy_satire->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $comedy_satire->author }}<br>
                                        {{ $comedy_satire->genre }}</p>
                                    @foreach ($comedy_satire->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($comedy_satire->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $comedy_satire->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div
                                        class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">For Exchange</span>
                                    </div>
                                </div>
                            </div>
                            @php
                                $comedy++;

                                if ($comedy == 10) {
                                    break;
                                }
                            @endphp
                        @elseif ($comedy_satire->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $comedy_satire->id }}, {{ $comedy_satire->user_id }})">
                                <img src="{{ asset('images/books/' . $comedy_satire->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $comedy_satire->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $comedy_satire->author }}<br>
                                        {{ $comedy_satire->genre }}</p>
                                    @foreach ($comedy_satire->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($comedy_satire->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $comedy_satire->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div
                                        class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $comedy_satire->price }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $comedy_satire->id }}"
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
                                $comedy++;

                                if ($comedy == 10) {
                                    break;
                                }
                            @endphp
                        @endif
                    @endif
                @endforeach
                {{-- <div class="pagination-container">
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
        <!-- NON-FICTION & BIOGRAPHY CONTENT -->
        <div id="nonfiction-biography-content" class="nonfiction-biography-content mt-3 w-100">
            <h4 class="text-center nonfiction_biography_text mx-5 pb-2">NON-FICTION & BIOGRAPHY</h4>
            <div class="row justify-content-center mx-5 mb-4">
                @foreach ($book as $nonfiction_biography)
                    @if (preg_match('/Non-Fiction & Biography/i', $nonfiction_biography->genre))
                        @if ($nonfiction_biography->user->type == 'Bookseller')
                            @if ($nonfiction_biography->status == 'Rent' && $nonfiction_biography->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $nonfiction_biography->id }}, {{ $nonfiction_biography->user_id }})">
                                    <img src="{{ asset('images/books/' . $nonfiction_biography->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $nonfiction_biography->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $nonfiction_biography->author }}<br>
                                            {{ $nonfiction_biography->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $nonfiction_biography->user->address }}
                                        </p>
                                        @foreach ($nonfiction_biography->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $nonfiction_biography->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span
                                                class="fw-bold p-0">₱{{ $nonfiction_biography->security_deposit }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $nonfiction_biography->id }}"
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
                            @elseif ($nonfiction_biography->stock > 0)
                                <div class="card m-1 pb-4 shadow"
                                    style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                    onclick="clickedPost({{ $nonfiction_biography->id }}, {{ $nonfiction_biography->user_id }})">
                                    <img src="{{ asset('images/books/' . $nonfiction_biography->book_photo) }}"
                                        class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                    <div class="card-body py-0">
                                        <p id="book-title" class="card-title mb-0 fw-bold">
                                            {{ $nonfiction_biography->title }}
                                        </p>
                                        <p class="card-text mt-0 mb-0">{{ $nonfiction_biography->author }}<br>
                                            {{ $nonfiction_biography->genre }}</p>
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $nonfiction_biography->user->address }}
                                        </p>
                                        @foreach ($nonfiction_biography->cart as $cart)
                                            @if ($cart->user_id == session('id') && $cart->product_id == $nonfiction_biography->id)
                                                <div
                                                    class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                    <span class="fw-bold p-0 text-success">Added to cart</span>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div
                                            class="card-foot price d-flex justify-content-between align-items-center p-0">
                                            <span class="fw-bold p-0">₱{{ $nonfiction_biography->price }}</span>
                                            <div class="button-container">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle add-button"
                                                        onclick="stopPropagation(event)" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="/addtocart/{{ $nonfiction_biography->id }}"
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
                            @endif
                        @elseif ($nonfiction_biography->status == 'Exchange' && $nonfiction_biography->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $nonfiction_biography->id }}, {{ $nonfiction_biography->user_id }})">
                                <img src="{{ asset('images/books/' . $nonfiction_biography->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $nonfiction_biography->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $nonfiction_biography->author }}<br>
                                        {{ $nonfiction_biography->genre }}</p>
                                    @foreach ($nonfiction_biography->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($nonfiction_biography->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $nonfiction_biography->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div
                                        class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">For Exchange</span>
                                    </div>
                                </div>
                            </div>
                        @elseif ($nonfiction_biography->stock > 0)
                            <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $nonfiction_biography->id }}, {{ $nonfiction_biography->user_id }})">
                                <img src="{{ asset('images/books/' . $nonfiction_biography->book_photo) }}"
                                    class="img mx-auto p-2" alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">
                                        {{ $nonfiction_biography->title }}</p>
                                    <p class="card-text mt-0 mb-0">{{ $nonfiction_biography->author }}<br>
                                        {{ $nonfiction_biography->genre }}</p>
                                    @foreach ($nonfiction_biography->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($nonfiction_biography->cart as $cart)
                                        @if ($cart->user_id == session('id') && $cart->product_id == $nonfiction_biography->id)
                                            <div
                                                class="card-foot price d-flex justify-content-between align-items-center p-0">
                                                <span class="fw-bold p-0 text-success">Added to cart</span>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div
                                        class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $nonfiction_biography->price }}</span>
                                        <div class="button-container">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="/addtocart/{{ $nonfiction_biography->id }}"
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
                        @endif
                    @endif
                @endforeach

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
    </script>
