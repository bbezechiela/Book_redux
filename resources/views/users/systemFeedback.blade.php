@include('partials.__header', [
'title' => 'Survey | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/feedback-style.css',
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
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    {{-- <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <input class="form-control rounded-3 search-field" type="text" placeholder="Search">
                    </div> --}}
                    {{-- <a href="/messages"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a>
                    <a href="/notification"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a> --}}
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
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </ul>
        <div class="mx-0 mx-sm-auto">
            <div class="d-flex justify-content-center align-items-center vh-100">
                <div class="card w-75">
                    <div class="card-header">
                        <h5 class="card-title text-white mt-2">System Feedback</h5>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fa fa-file-text-o fa-4x mb-3" aria-hidden="true"></i>
                            <p>
                                <strong>Your opinion matters</strong>
                            </p>
                            <p>
                                Have some ideas how to improve the system?
                                <strong>Give us your feedback.</strong>
                            </p>
                        </div>
                        <hr />
                        <form class="px-4" action="">
                            <p class="text-center"><strong>Your rating:</strong></p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="rating" id="very_good" />
                                <label class="form-check-label" for="very_good">
                                    Very good
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="rating" id="good" />
                                <label class="form-check-label" for="good">
                                    Good
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="rating" id="medicore" />
                                <label class="form-check-label" for="medicore">
                                    Medicore
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="rating" id="bad" />
                                <label class="form-check-label" for="bad">
                                    Bad
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="rating" id="verybad" />
                                <label class="form-check-label" for="verybad">
                                    Very bad
                                </label>
                            </div>

                            <p class="text-center"><strong>What could we improve?</strong></p>
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="feedback" rows="4"
                                    placeholder="Write your feedback here..."></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button type="button" class="btn btn-submit">Submit</button>
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