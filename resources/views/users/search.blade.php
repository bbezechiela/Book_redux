@include('partials.__header', [
    'title' => 'Search | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/search-style.css',
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
    <div id="content" class="content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5" src="/assets/Book_Logo.png"
                        alt="Logo"></a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    <div class="input-group mt-1" style="height: 2em;">
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
                                <li><a class="dropdown-item" href="/mypurchase">My Exchange Request</a></li>
                                <li><a class="dropdown-item" href="/addresses">Addresses</a></li>
                                {{-- <li><a class="dropdown-item" href="/changepassword">Change Password</a></li> --}}
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </ul>

        <div class="container-fuid pt-3 mx-5 px-3">
            <div class="row contents justify-content-start px-3 mt-5">
                @foreach ($items as $item)
                    @if ($item->status == 'Exchange')
                        <div class="card col-3 m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                            onclick="clickedPost({{ $item->id }}, {{ $item->user_id }})">
                            <img src="{{ asset('images/books/' . $item->book_photo) }}" class="img mx-auto p-2"
                                alt="..." width="130px" height="150px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">{{ $item->title }}</p>
                                <p class="card-text mt-0 mb-2">{{ $item->author }}<br>
                                    {{ $item->genre }}</p>
                                @foreach ($item->user->addressUser as $address)
                                    @if ($address->default_address == 'true')
                                        <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                        </p>
                                    @endif
                                @endforeach
                                <div class="card-foot price pb-3 d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">For Exchange</span>
                                </div>
                            </div>
                        @else
                            <div class="card col-3 m-1 pb-4 shadow"
                                style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $item->id }}, {{ $item->user_id }})">
                                <img src="{{ asset('images/books/' . $item->book_photo) }}" class="img mx-auto p-2"
                                    alt="..." width="130px" height="150px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">{{ $item->title }}</p>
                                    <p class="card-text mt-0 mb-2">{{ $item->author }}<br>
                                        {{ $item->genre }}</p>
                                    @foreach ($item->user->addressUser as $address)
                                        @if ($address->default_address == 'true')
                                            <p class="card-text mt-0 mb-2 location-text"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i>{{ $address->brgy_village . ', ' . $address->city_municipality }}
                                            </p>
                                        @endif
                                    @endforeach
                                    <div
                                        class="card-foot price pb-3 d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">₱{{ $item->price }}</span>
                                        <div class="button-container">
                                            {{-- <button class="like-button"><i class="fa fa-thumbs-up fa-lg"
                                                onclick="stopPropagation(event)" aria-hidden="true"
                                                style="margin-right: 8px"></i></button> --}}
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle add-button"
                                                    onclick="stopPropagation(event)" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"
                                                            onclick="stopPropagation(event)"><i
                                                                class="fa fa-cart-plus" aria-hidden="true"
                                                                style="margin-right: 7px"></i>Add to
                                                            Cart</a></li>
                                                    {{-- <li><a class="dropdown-item" href="#"
                                                        onclick="stopPropagation(event)"><i class="fa fa-list-alt"
                                                            aria-hidden="true" style="margin-right: 7px"></i>Add to
                                                        Wishlist</a></li> --}}
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
                            window.location.href = "/product/" + data.id + "/" + data
                                .user_id;
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
</script>
