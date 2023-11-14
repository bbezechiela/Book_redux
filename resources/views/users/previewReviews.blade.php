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
                <a href="/" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
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
                    <a class="nav-link custom-nav-link" href="/userlistings">Listings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/userreviews">User Reviews and Ratings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="/userwishlist">Wish List</a>
                </li>
            </ul>
        </div>
        <div class="ratings-review">
            <div class="card-body rating-details">
                <h4>User Reviews and Ratings</h4>
                <nav class="nav nav-pills flex-column flex-sm-row">
                    <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;"
                        aria-current="page" href="#">Sold Rating</a>
                    <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                        href="#">Exchange
                        Rating</a>
                    <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                        href="#">Bought
                        Rating</a>
                </nav>
            </div>
            <div class="container text-center review-rating-details">
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
                            <a href="#" class="btn active d-block rate-button" role="button"
                                data-bs-toggle="button" aria-pressed="true"
                                style="background-color: #003060; border-color: #003060;">All
                                <span>(10)</span></a>
                            <a href="#" class="btn d-block rate-button" role="button"
                                data-bs-toggle="button">3 Star
                                <span>(20)</span></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ratings">
                            <a href="#" class="btn d-block rate-button" role="button"
                                data-bs-toggle="button" aria-pressed="true">5 Star <span>(100)</span></a>
                            <a href="#" class="btn d-block rate-button" role="button"
                                data-bs-toggle="button">2 Star
                                <span>(20)</span></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ratings">
                            <a href="#" class="btn d-block rate-button" role="button"
                                data-bs-toggle="button" aria-pressed="true">4 star <span>(10)</span></a>
                            <a href="#" class="btn d-block rate-button" role="button"
                                data-bs-toggle="button">1 Star
                                <span>(59)</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center customer-ratings">
            <div class="row align-items-center">
                <div class="d-flex align-items-center">
                    <img src="/assets/nestine.png" alt="seller image" class="customer-picture">
                    <div class="customer-ratings-info">
                        <p>N******nnn <a href="" data-bs-toggle="modal"
                                data-bs-target="#report">Report</a></p>
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
                                    <img src="/assets/bubble_bath.png" alt="Image 2" class="d-inline square-picture">
                                    <img src="/assets/bubble_bath.png" alt="Image 3"
                                        class="d-inline square-picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center customer-ratings">
            <div class="row align-items-center">
                <div class="d-flex align-items-center">
                    <img src="/assets/nestine.png" alt="seller image" class="customer-picture">
                    <div class="customer-ratings-info">
                        <p>N******nnn <a href="#" data-bs-toggle="modal"
                                data-bs-target="#report">Report</a></p>
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
                                    <img src="/assets/bubble_bath.png" alt="Image 2" class="d-inline square-picture">
                                    <img src="/assets/bubble_bath.png" alt="Image 3"
                                        class="d-inline square-picture">
                                </div>
                            </div>
                        </div>
                    </div>
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