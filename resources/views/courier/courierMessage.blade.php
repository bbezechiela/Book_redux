@include('partials.__header', [
'title' => 'Manage Shipment | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/shipment-style.css',
'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0 body">
    <div id="content" class="pe-0 border content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4 top-nav">
            <div class="w-100 d-flex mt-1 p-1">
                <p class="text-admin">Courier</p>
                <a href="/shipment"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        data-bs-title="Home">
                        <i class="fa fa-area-chart" aria-hidden="true"
                            style="font-size: 20px; margin-right: 20px;  color: #003060;">
                            Manage Order</i>
                    </button></a>
                <a href="/return"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        data-bs-title="Return">
                        <i class="fa fa-refresh" aria-hidden="true" style="font-size: 20px; color: #003060;"> Manage
                            Return</i>
                    </button></a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    <a href="/couriermessage"><button class="btn mx-1 mt-1 selected-style" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px;"></i>
                        </button></a>
                    {{-- <a href="/couriernotification"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
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
                                <li><a class="dropdown-item" href="/courierprofile">Profile</a></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </ul>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" id="chat3" style="border-radius: 5px;">
                        <div class="card-body">
                            <div class="row min-vh-100">
                                <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
                                    <div class="p-3">
                                        <div class="input-group rounded mb-3">
                                            <input type="search" class="form-control rounded" placeholder="Search"
                                                aria-label="Search" aria-describedby="search-addon" />
                                            <span class="input-group-text border-0" id="search-addon">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="your-scrollable-element overflow-y-auto">
                                            <ul class="list-unstyled mb-0">
                                                <li class="p-2 border-bottom">
                                                    <a href="#!"
                                                        class="d-flex justify-content-between text-decoration-none">
                                                        <div class="d-flex flex-row">
                                                            <div class="side-img">
                                                                <img src="../assets/nestine.png" alt="user_img"
                                                                    class="d-flex align-self-center me-3 with-border">
                                                                <span class="badge bg-success badge-dot"></span>
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="fw-bold mb-0 name-msg">Marie Horwitz</p>
                                                                <p class="small text-muted">Hello, Are you there?
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="pt-1">
                                                            <p class="small text-muted mb-1">Just now</p>
                                                            <span
                                                                class="badge bg-danger rounded-pill float-end">3</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="p-2 border-bottom">
                                                    <a href="#!"
                                                        class="d-flex justify-content-between text-decoration-none">
                                                        <div class="d-flex flex-row">
                                                            <div class="side-img">
                                                                <img src="../assets/Eubert.png" alt="user_img"
                                                                    class="d-flex align-self-center me-3 with-border">
                                                                <span class="badge bg-success badge-dot"></span>
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="fw-bold mb-0 name-msg">Alexa Chung</p>
                                                                <p class="small text-muted">Lorem ipsum dolor sit.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="pt-1">
                                                            <p class="small text-muted mb-1">5 mins ago</p>
                                                            <span
                                                                class="badge bg-danger rounded-pill float-end">2</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="p-2">
                                                    <a href="#!"
                                                        class="d-flex justify-content-between text-decoration-none">
                                                        <div class="d-flex flex-row">
                                                            <div class="side-img">
                                                                <img src="../assets/osama.png" alt="user_img"
                                                                    class="d-flex align-self-center me-3 with-border">
                                                                <span class="badge bg-success badge-dot"></span>
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="fw-bold mb-0 name-msg">Ben Smith</p>
                                                                <p class="small text-muted">Lorem ipsum dolor sit.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="pt-1">
                                                            <p class="small text-muted mb-1">Yesterday</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="p-2 border-bottom">
                                                    <a href="#!"
                                                        class="d-flex justify-content-between text-decoration-none">
                                                        <div class="d-flex flex-row">
                                                            <div class="side-img">
                                                                <img src="../assets/nestine.png" alt="user_img"
                                                                    class="d-flex align-self-center me-3 with-border">
                                                                <span class="badge bg-success badge-dot"></span>
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="fw-bold mb-0 name-msg">Danny McChain</p>
                                                                <p class="small text-muted">Lorem ipsum dolor sit.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="pt-1">
                                                            <p class="small text-muted mb-1">Yesterday</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="p-2 border-bottom">
                                                    <a href="#!"
                                                        class="d-flex justify-content-between text-decoration-none">
                                                        <div class="d-flex flex-row">
                                                            <div class="side-img">
                                                                <img src="../assets/Eubert.png" alt="user_img"
                                                                    class="d-flex align-self-center me-3 with-border">
                                                                <span class="badge bg-success badge-dot"></span>
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="fw-bold mb-0 name-msg">Kate Moss</p>
                                                                <p class="small text-muted">Lorem ipsum dolor sit.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="pt-1">
                                                            <p class="small text-muted mb-1">Yesterday</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="p-2">
                                                    <a href="#!"
                                                        class="d-flex justify-content-between text-decoration-none">
                                                        <div class="d-flex flex-row">
                                                            <div class="side-img">
                                                                <img src="../assets/osama.png" alt="user_img"
                                                                    class="d-flex align-self-center me-3 with-border">
                                                                <span class="badge bg-success badge-dot"></span>
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="fw-bold mb-0 name-msg">Ben Smith</p>
                                                                <p class="small text-muted">Lorem ipsum dolor sit.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="pt-1">
                                                            <p class="small text-muted mb-1">Yesterday</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="p-2 border-bottom">
                                                    <a href="#!"
                                                        class="d-flex justify-content-between text-decoration-none">
                                                        <div class="d-flex flex-row">
                                                            <div class="side-img">
                                                                <img src="../assets/nestine.png" alt="user_img"
                                                                    class="d-flex align-self-center me-3 with-border">
                                                                <span class="badge bg-success badge-dot"></span>
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="fw-bold mb-0 name-msg">Marie Horwitz</p>
                                                                <p class="small text-muted">Hello, Are you there?
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="pt-1">
                                                            <p class="small text-muted mb-1">Just now</p>
                                                            <span
                                                                class="badge bg-danger rounded-pill float-end">3</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="p-2 border-bottom">
                                                    <a href="#!"
                                                        class="d-flex justify-content-between text-decoration-none">
                                                        <div class="d-flex flex-row">
                                                            <div class="side-img">
                                                                <img src="../assets/Eubert.png" alt="user_img"
                                                                    class="d-flex align-self-center me-3 with-border">
                                                                <span class="badge bg-success badge-dot"></span>
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="fw-bold mb-0 name-msg">Kate Moss</p>
                                                                <p class="small text-muted">Lorem ipsum dolor sit.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="pt-1">
                                                            <p class="small text-muted mb-1">Yesterday</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="p-2">
                                                    <a href="#!"
                                                        class="d-flex justify-content-between text-decoration-none">
                                                        <div class="d-flex flex-row">
                                                            <div class="side-img">
                                                                <img src="../assets/osama.png" alt="user_img"
                                                                    class="d-flex align-self-center me-3 with-border">
                                                                <span class="badge bg-success badge-dot"></span>
                                                            </div>
                                                            <div class="pt-1">
                                                                <p class="fw-bold mb-0 name-msg">Ben Smith</p>
                                                                <p class="small text-muted">Lorem ipsum dolor sit.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="pt-1">
                                                            <p class="small text-muted mb-1">Yesterday</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-7 col-xl-8">
                                    <div class="chat-about position-sticky top-0">

                                        <h6 class="m-b-0">Kate Moss<button type="button" class="btn menu-btn">
                                            </button>
                                        </h6>
                                    </div>
                                    <div class="pt-3 pe-3 your-scrollable-element overflow-auto"
                                        style="position: relative;">
                                        <div class="d-flex flex-row justify-content-start body-img">
                                            <img src="../assets/Eubert.png" alt="user_img"
                                                style="width: 45px; height: 100%;">
                                            <div>
                                                <p class="small p-2 ms-3 mb-1 rounded-3"
                                                    style="background-color: #fff; border: 1px solid #E55B13;">Lorem
                                                    ipsum
                                                    dolor
                                                    sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                    incididunt ut labore et
                                                    dolore
                                                    magna aliqua.</p>
                                                <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM |
                                                    Aug 13</p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row justify-content-end body-img">
                                            <div>
                                                <p class="small p-2 me-3 mb-1 rounded-3 custom-message">Ut
                                                    enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat.</p>
                                                <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13
                                                </p>
                                            </div>
                                            <img src="../assets/osama.png" alt="user_img">
                                        </div>

                                        <div class="d-flex flex-row justify-content-start body-img">
                                            <img src="../assets/Eubert.png" alt="user_img"
                                                style="width: 45px; height: 100%;">
                                            <div>
                                                <p class="small p-2 ms-3 mb-1 rounded-3"
                                                    style="background-color: #fff; border: 1px solid #E55B13;">Duis
                                                    aute
                                                    irure
                                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                                    fugiat nulla pariatur.
                                                </p>
                                                <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM |
                                                    Aug 13</p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row justify-content-end body-img">
                                            <div>
                                                <p class="small p-2 me-3 mb-1 rounded-3 custom-message">
                                                    Excepteur sint occaecat
                                                    cupidatat
                                                    non proident, sunt in culpa qui officia deserunt mollit anim id
                                                    est laborum.</p>
                                                <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13
                                                </p>
                                            </div>
                                            <img src="../assets/osama.png" alt="user_img">
                                        </div>
                                        <div class="d-flex flex-row justify-content-start body-img">
                                            <img src="../assets/Eubert.png" alt="user_img"
                                                style="width: 45px; height: 100%;">
                                            <div>
                                                <p class="small p-2 ms-3 mb-1 rounded-3"
                                                    style="background-color: #fff; border: 1px solid #E55B13;">Lorem
                                                    ipsum
                                                    dolor
                                                    sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                    incididunt ut labore et
                                                    dolore
                                                    magna aliqua.</p>
                                                <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM |
                                                    Aug 13</p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row justify-content-end body-img">
                                            <div>
                                                <p class="small p-2 me-3 mb-1 rounded-3 custom-message">Ut
                                                    enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat.</p>
                                                <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13
                                                </p>
                                            </div>
                                            <img src="../assets/osama.png" alt="user_img">
                                        </div>
                                        <div class="d-flex flex-row justify-content-start body-img">
                                            <img src="../assets/Eubert.png" alt="user_img"
                                                style="width: 45px; height: 100%;">
                                            <div>
                                                <p class="small p-2 ms-3 mb-1 rounded-3"
                                                    style="background-color: #fff; border: 1px solid #E55B13;">Lorem
                                                    ipsum
                                                    dolor
                                                    sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                    incididunt ut labore et
                                                    dolore
                                                    magna aliqua.</p>
                                                <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM |
                                                    Aug 13</p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row justify-content-end body-img">
                                            <div>
                                                <p class="small p-2 me-3 mb-1 rounded-3 custom-message">Ut
                                                    enim ad minim veniam,
                                                    quis
                                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat.</p>
                                                <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13
                                                </p>
                                            </div>
                                            <img src="../assets/osama.png" alt="user_img">
                                        </div>
                                    </div>
                                    <div
                                        class="text-muted d-flex justify-content-start align-items-center pe-3 pt-3 mt-2 body-img">
                                        <img src="../assets/osama.png" alt="user_img"
                                            style="width: 40px; height: 100%; margin-right: 8px;">
                                        <input type="textarea" class="form-control form-control-lg"
                                            id="exampleFormControlInput2" style="font-size: 13px;"
                                            placeholder="Type message">
                                        <a class="ms-1 text-muted" href="#!"><i class="fa fa-paperclip"
                                                aria-hidden="true"></i></a>
                                        <a class="ms-3" href="#!"><i class="fa fa-paper-plane"
                                                aria-hidden="true"></i></a>
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