@include('partials.__header', [
    'title' => 'User Reviews and Ratings | BookRedux',
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
                                {{-- <li><a class="dropdown-item" href="/changepassword">Change Password</a></li> --}}
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
                                        @if ($address->default_address = 'true')
                                            <h5>{{ $address->street_building_house . ', ' . $address->brgy_village . ', ' . $address->city_municipality . ', ' . $address->region . ' ' . $address->postal_code }}
                                            </h5>
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
                                    <a class="nav-link custom-nav-link" aria-current="page"
                                        href="/userlistings/{{ $user->id }}">Listings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="/userreviews/{{ $user->id }}">User Reviews
                                        and Ratings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="container text-center review-rating-details p-4" style="background-color: #fff;">
                        <div class="row align-items-center" style="color: #003060;">
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
                                    <a href="#" class="btn active d-block rate-button" role="button"
                                        data-bs-toggle="button" aria-pressed="true"
                                        style="background-color: #003060; border-color: #003060;  color: #fff;">All
                                        <span>(10)</span></a>
                                    <a href="#" class="btn d-block rate-button" role="button"
                                        data-bs-toggle="button">3
                                        Star
                                        <span>(20)</span></a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="ratings">
                                    <a href="#" class="btn d-block rate-button" role="button"
                                        data-bs-toggle="button" aria-pressed="true">5 Star <span>(100)</span></a>
                                    <a href="#" class="btn d-block rate-button" role="button"
                                        data-bs-toggle="button">2
                                        Star
                                        <span>(20)</span></a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="ratings">
                                    <a href="#" class="btn d-block rate-button" role="button"
                                        data-bs-toggle="button" aria-pressed="true">4 star <span>(10)</span></a>
                                    <a href="#" class="btn d-block rate-button" role="button"
                                        data-bs-toggle="button">1
                                        Star
                                        <span>(59)</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($rate as $rate)
                        @if ($rate->item->book->user_id == $user->id)
                            <div class="container text-center customer-ratings">
                                <div class="row align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('images/profile_photos/' . $rate->item->order->user->profile_photo) }}"
                                            alt="seller image" class="customer-picture">
                                        <div class="customer-ratings-info">
                                            <p>{{ $rate->item->order->user->first_name . ' ' . $rate->item->order->user->last_name }}
                                            </p>
                                            {{-- <p>N******nnn <a href="" data-bs-toggle="modal"
                                            data-bs-target="#report">Report</a></p> --}}
                                            @if ($rate->rate_value == 1)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            @elseif ($rate->rate_value == 2)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            @elseif ($rate->rate_value == 3)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            @elseif ($rate->rate_value == 4)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            @elseif ($rate->rate_value == 5)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            @endif
                                            <p style="font-weight: bold;">{{ $rate->item->book->status }}</p>
                                            <p>22/07/2023 <span>11.03</span></p>
                                            @if ($rate->condition_accuracy != null)
                                                <p>Condition: <span>{{ $rate->condition_accuracy }}</span></p>
                                                <p>Accuracy of Description:
                                                    <span>{{ $rate->description_accuracy }}</span>
                                                </p>
                                            @endif
                                            <p>Interaction: <span>{{ $rate->interaction }}</span></p>
                                            <p>{{ $rate->description }}</p>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        @if (isset($rate->first_img))
                                                            <img src="{{ asset('images/rate_images/' . $rate->first_img) }}"
                                                                alt="Image 1" class="d-inline square-picture">
                                                        @endif
                                                        @if (isset($rate->second_img))
                                                            <img src="{{ asset('images/rate_images/' . $rate->second_img) }}"
                                                                alt="Image 1" class="d-inline square-picture">
                                                        @endif
                                                        @if (isset($rate->third_img))
                                                            <img src="{{ asset('images/rate_images/' . $rate->third_img) }}"
                                                                alt="Image 1" class="d-inline square-picture">
                                                        @endif
                                                        @if (isset($rate->fourth_img))
                                                            <img src="{{ asset('images/rate_images/' . $rate->fourth_img) }}"
                                                                alt="Image 1" class="d-inline square-picture">
                                                        @endif
                                                        @if (isset($rate->fifth_img))
                                                            <img src="{{ asset('images/rate_images/' . $rate->fifth_img) }}"
                                                                alt="Image 1" class="d-inline square-picture">
                                                        @endif
                                                        {{-- <img src="/assets/bubble_bath.png" alt="Image 1"
                                                            class="d-inline square-picture">
                                                        <img src="/assets/bubble_bath.png" alt="Image 2"
                                                            class="d-inline square-picture">
                                                        <img src="/assets/bubble_bath.png" alt="Image 3"
                                                            class="d-inline square-picture"> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif ($rate->item->order->user_id == $user->id)
                            <div class="container text-center customer-ratings">
                                <div class="row align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('images/profile_photos/' . $rate->item->book->user->profile_photo) }}"
                                            alt="seller image" class="customer-picture">
                                        <div class="customer-ratings-info">
                                            <p>{{ $rate->item->book->user->first_name . ' ' . $rate->item->book->user->last_name }}
                                            </p>
                                            {{-- <p>N******nnn <a href="" data-bs-toggle="modal"
                                        data-bs-target="#report">Report</a></p> --}}
                                            @if ($rate->rate_value == 1)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            @elseif ($rate->rate_value == 2)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            @elseif ($rate->rate_value == 3)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            @elseif ($rate->rate_value == 4)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            @elseif ($rate->rate_value == 5)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            @endif
                                            <p style="font-weight: bold;">{{ $rate->item->book->status }}</p>
                                            <p>22/07/2023 <span>11.03</span></p>
                                            @if ($rate->condition_accuracy != null)
                                                <p>Condition: <span>{{ $rate->condition_accuracy }}</span></p>
                                                <p>Accuracy of Description:
                                                    <span>{{ $rate->description_accuracy }}</span>
                                                </p>
                                            @endif
                                            <p>Interaction: <span>{{ $rate->interaction }}</span></p>
                                            <p>{{ $rate->description }}</p>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        @if (isset($rate->first_img))
                                                            <img src="{{ asset('images/rate_images/' . $rate->first_img) }}"
                                                                alt="Image 1" class="d-inline square-picture">
                                                        @endif
                                                        @if (isset($rate->second_img))
                                                            <img src="{{ asset('images/rate_images/' . $rate->second_img) }}"
                                                                alt="Image 1" class="d-inline square-picture">
                                                        @endif
                                                        @if (isset($rate->third_img))
                                                            <img src="{{ asset('images/rate_images/' . $rate->third_img) }}"
                                                                alt="Image 1" class="d-inline square-picture">
                                                        @endif
                                                        @if (isset($rate->fourth_img))
                                                            <img src="{{ asset('images/rate_images/' . $rate->fourth_img) }}"
                                                                alt="Image 1" class="d-inline square-picture">
                                                        @endif
                                                        @if (isset($rate->fifth_img))
                                                            <img src="{{ asset('images/rate_images/' . $rate->fifth_img) }}"
                                                                alt="Image 1" class="d-inline square-picture">
                                                        @endif
                                                        {{-- <img src="/assets/bubble_bath.png" alt="Image 1"
                                                        class="d-inline square-picture">
                                                    <img src="/assets/bubble_bath.png" alt="Image 2"
                                                        class="d-inline square-picture">
                                                    <img src="/assets/bubble_bath.png" alt="Image 3"
                                                        class="d-inline square-picture"> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    {{-- <div class="container text-center customer-ratings">
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
                                                <img src="/assets/bubble_bath.png" alt="Image 1"
                                                    class="d-inline square-picture">
                                                <img src="/assets/bubble_bath.png" alt="Image 2"
                                                    class="d-inline square-picture">
                                                <img src="/assets/bubble_bath.png" alt="Image 3"
                                                    class="d-inline square-picture">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
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

        {{-- <div class="container text-center seller-details mx-4">
            <div class="row align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <img src="../assets/nestine.png" alt="seller image" class="circle-picture">
                        <div class="user-info">
                            <p>Nestine Nicole Navarro</p> --}}
        {{-- <p>2K followers . 400 following</p> --}}
        {{-- <p>Lives in Tacloban City</p>
                            <button class="message-button"><i class="fa fa-envelope"
                                    aria-hidden="true"></i>Message</button> --}}
        {{-- <button class="follow-button"><i class="fa fa-plus" aria-hidden="true"></i>Follow</button> --}}
        {{-- </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle ellipsis-button" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-h ellipsis-icon ml-auto" aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fa fa-exclamation-circle"
                                            aria-hidden="true" style="margin-right: 7px"></i>
                                        Report</a></li> --}}
        {{-- <li><a class="dropdown-item" href="#"><i class="fa fa-ban" aria-hidden="true"
                                            style="margin-right: 7px"></i>Block</a></li> --}}
        {{-- </ul>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="ratings">
                        <p>Liked genres:<span class="exchange">Educational, History Fiction, Science Fiction</span></p>
                    </div>
                </div> --}}
        {{-- <div class="col">
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
                </div> --}}
        {{-- </div>
        </div>
        <div class="navbar-details">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="/userlistings">Listings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/userreviews">User Reviews and Ratings</a>
                </li> --}}
        {{-- <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="/userwishlist">Wish List</a>
                </li> --}}
        {{-- </ul>
        </div>
        <div class="ratings-review">
            <div class="card-body rating-details">
                <h4>User Reviews and Ratings</h4> --}}
        {{-- <nav class="nav nav-pills flex-column flex-sm-row">
                    <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;"
                        aria-current="page" href="#">Sold Rating</a>
                    <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                        href="#">Exchange
                        Rating</a>
                    <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                        href="#">Bought
                        Rating</a>
                </nav> --}}
        {{-- </div> --}}

    </div>
</div>
@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])
