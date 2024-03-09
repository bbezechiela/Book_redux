@include('partials.__header', [
'title' => 'Listing | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/userReviews-style.css',
'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0 body">
    <div id="sellersidebar" class="sellersidebar p-2 min-vh-100 shadow">
        <x-sellersidebar />
    </div>
    <div id="content" class="pe-0 content">
        <ul class="nav sticky-top head-nav shadow py-4 px-4 top-nav">
            <div class="w-100 d-flex mt-1 p-1">
                <a href="/sellerboard" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    {{-- <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <input class="form-control rounded-3 search-field" type="text" placeholder="Search">
                    </div> --}}
                    {{-- <a href="/sellermessage"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a> --}}
                    {{-- <a href="/sellernotification"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a> --}}
                    <a href="/profile"><button class="btn mx-1 p-0" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            data-bs-title="Profile">
                            <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="profile"
                                width="35" height="35" class="rounded-5" style="margin-right: 2em;">
                        </button></a>
                </div>
            </div>
        </ul>

        <div class="reviews-container">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link custom-nav-link" aria-current="page" href="/reviews">User Reviews and Ratings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/sellermyreviews">My Reviews</a>
                </li>
        </div>
        <div class="ratings-review">
            {{-- <div class="card-body rating-details-review">
                <nav class="nav nav-pills flex-column flex-sm-row">
                    <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;"
                        aria-current="page" href="#">Seller Rating</a>
                    <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                        href="#">Lessor
                        Rating</a>
                </nav>
            </div> --}}
            {{-- <div class="container text-center review-rating-details">
                <div class="row align-items-center">
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
                            <a href="#" class="btn active d-block rate-button" role="button" data-bs-toggle="button"
                                aria-pressed="true"
                                style="background-color: #003060; border-color: #003060; color: #fff;">All
                                <span>(10)</span></a>
                            <a href="#" class="btn d-block rate-button" role="button" data-bs-toggle="button">3 Star
                                <span>(20)</span></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ratings">
                            <a href="#" class="btn d-block rate-button" role="button" data-bs-toggle="button"
                                aria-pressed="true">5 Star <span>(100)</span></a>
                            <a href="#" class="btn d-block rate-button" role="button" data-bs-toggle="button">2 Star
                                <span>(20)</span></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ratings">
                            <a href="#" class="btn d-block rate-button" role="button" data-bs-toggle="button"
                                aria-pressed="true">4 star <span>(10)</span></a>
                            <a href="#" class="btn d-block rate-button" role="button" data-bs-toggle="button">1 Star
                                <span>(59)</span></a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        @php
        $loopCount = 0;
        @endphp
        @foreach ($book as $books)
        @foreach ($books->item as $items)
        @foreach ($items->ratedItem as $review)
        @if ($review->user_id == session('id'))
        <div class="container text-center customer-ratings">
            <div class="row align-items-center">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('images/profile_photos/' . $review->user->profile_photo) }}" alt="seller image"
                        class="customer-picture">
                    <div class="customer-ratings-info">
                        <p>{{ $review->user->first_name . ' ' . $review->user->last_name }}</p>
                        {{-- <p>N******nnn <a href="" data-bs-toggle="modal" data-bs-target="#report">Report</a></p> --}}
                        @if ($review->rate_value == 1)
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @elseif ($review->rate_value == 2)
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @elseif ($review->rate_value == 3)
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @elseif ($review->rate_value == 4)
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @elseif ($review->rate_value == 5)
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        @endif
                        <p style="font-weight: bold;">{{ $books->status }}</p>
                        <p>{{ $review->created_at->format('F j, Y, g:i a') }}</p>
                        <p>Condition: <span>{{ $review->condition_accuracy }}</span></p>
                        <p>Accuracy of Description: <span>{{ $review->description_accuracy }}</span></p>
                        <p>Interaction: <span>{{ $review->interaction }}</span></p>
                        <p>{{ $review->description }}</p>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    @if (isset($review->first_img))
                                    <img src="{{ asset('images/rate_images/' . $review->first_img) }}" alt="Image 1"
                                        class="d-inline square-picture">
                                    @endif
                                    @if (isset($review->second_img))
                                    <img src="{{ asset('images/rate_images/' . $review->second_img) }}" alt="Image 1"
                                        class="d-inline square-picture">
                                    @endif
                                    @if (isset($review->third_img))
                                    <img src="{{ asset('images/rate_images/' . $review->third_img) }}" alt="Image 1"
                                        class="d-inline square-picture">
                                    @endif
                                    @if (isset($review->fourth_img))
                                    <img src="{{ asset('images/rate_images/' . $review->fourth_img) }}" alt="Image 1"
                                        class="d-inline square-picture">
                                    @endif
                                    @if (isset($review->fifth_img))
                                    <img src="{{ asset('images/rate_images/' . $review->fifth_img) }}" alt="Image 1"
                                        class="d-inline square-picture">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
        $loopCount++;
        @endphp
        @endif
        @endforeach
        @endforeach
        @endforeach
        @if ($loopCount == 0)
        <div class="w-100 mt-5 d-flex justify-content-center">
            <img class="img mt-3" src="../assets/rating.png" alt="image">
        </div>
        <h1 class="mt-2 text-center fw-bold" style="color: #E55B13; font-size: 20px;">You haven't left any reviews yet
        </h1>
        @endif
    </div>

</div>
{{-- </div> --}}

@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])