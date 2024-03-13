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
    <div id="content" class="content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5"
                        src="../assets/Book_Logo.png" alt="Logo"></a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
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
                                <li><a class="dropdown-item" href="/mypurchase">My Exchange Request</a></li>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row"
                            style="background-color: #003060; height:200px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="{{ asset('images/profile_photos/' . $user->profile_photo) }}"
                                    alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                                    style="width: 150px; z-index: 1; background-color: #FFF;">
                                <button type="button" class="btn message-button" style="z-index: 1;">
                                    <i class="fa fa-envelope" aria-hidden="true"></i> Message
                                </button>
                            </div>
                            <div class="ms-3" style="margin-top: 130px;">
                                @if ($user->type == 'Bookseller')
                                    <h5>{{ $user->business_name }}</h5>
                                    <p>{{ $user->address }}</p>
                                @else
                                    <h5>{{ $user->first_name . ' ' . $user->last_name }}</h5>
                                    @foreach ($user->addressUser as $address)
                                        @if ($address->default_address)
                                            <h5>{{ $address->address }}</h5>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle ellipsis-button" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h ellipsis-icon ml-auto" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><i class="fa fa-exclamation-circle"
                                                aria-hidden="true" style="margin-right: 1px"></i>
                                            Report</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-4 text-black" style="background-color: #f8f9fa;">
                            <div class="d-flex justify-content-end text-center py-1">
                                <div>
                                    <p class="mb-1 h5" style="color: #E55B13;">{{ $user->books->count() }}</p>
                                    <p class="small text-muted mb-0">Listings</p>
                                </div>
                                <div class="px-3">
                                    <p class="mb-1 h5" style="color: #E55B13;">{{ $user->reviews->count() }}</p>
                                    <p class="small text-muted mb-0">Reviews</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="mb-2">
                                <p class="lead fw-normal mb-1" style="color: #E55B13;">Preferred genres</p>
                                <div class="p-2" style="background-color: #f8f9fa;">
                                    <p class="font-italic mb-1" style="color: #003060;">{{ $user->interest }}</p>
                                    {{-- <p class="font-italic mb-1" style="color: #003060;">History Fiction</p>
                                    <p class="font-italic mb-0" style="color: #003060;">Science Fiction</p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="p-4" style="background-color: #f8f9fa;">
                            <ul class="nav nav-underline">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="/userlistings/{{ $user->id }}">Listings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link custom-nav-link" href="/userreviews/{{ $user->id }}">User
                                        Reviews and
                                        Ratings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row justify-content-start mx-auto mb-5">                        
                        @foreach ($user->books as $book)
                            <div class="card col-3 m-1 pb-3 shadow"
                                style="width: 240px; flex: 0 0 auto; cursor: pointer;"
                                onclick="clickedPost({{ $book->id }}, {{ $book->user_id }})">
                                <img src="{{ asset('images/books/' . $book->book_photo) }}" class="img mx-auto p-2"
                                    alt="{{ $book->book_photo }}" width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p class="card-title mb-0 fw-bold">
                                        {{ $book->title }}</p>
                                    <p class="card-text mt-0 mb-0 pb-0">
                                        {{ $book->author }}</p>
                                    <p class="card-text mt-0 mb-0 pt-0">
                                        {{ $book->genre }}</p>
                                    {{-- @if ($book->stock == 0)
                                    <p class="text-danger fw-bold">Sold Out</p>
                                @else
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <a class="fw-bold p-0 edit-book"
                                            onclick="itemClicked('{{ $book->id }}')">Edit</a>
                                    </div>
                                @endif --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div id="recommended" class="col-lg-4">
                    <div class="card mt-5 mb-3 custom-sticky-card card-sidebar">
                        <div class="card-header sticky-top">
                            <div class="d-flex justify-content-between">
                                <h5 id="recommended-header" class="mb-0">Recommended For You</h5>
                            </div>
                        </div>
                        @foreach ($post->shuffle() as $recommended)
                            <div class="card-body"
                                onclick="clickedPost({{ $recommended->id }}, {{ $recommended->user_id }})">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('images/books/' . $recommended->book_photo) }}"
                                        alt="Book Image" class="rounded me-3" width="80" height="80">
                                    <div>
                                        <h6 id="book-title" class="mb-0">{{ $recommended->title }}</h6>
                                        <p class="mb-0">For {{ $recommended->status }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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

<script>
    function clickedPost(id, user_id) {
        window.location.href = "/product/" + id + "/" + user_id;
    };
    var recommended_cards = document.getElementById("recommended");
    var recommended_btn = document.getElementById("recommended-header");
    recommended_btn.addEventListener("click", function() {
        // alert("bitch");
        recommended_cards.style.display = "none";
    });
</script>
