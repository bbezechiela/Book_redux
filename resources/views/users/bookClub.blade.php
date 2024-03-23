@include('partials.__header', [
'title' => 'Book Club | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/bookclub-style.css',
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
    <div id="sidebarClub" class="sidebarClub p-2 min-vh-100 shadow">
        <x-sidebarClub />
    </div>
    <div id="content" class="content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
                {{-- <ul class="nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/bookclub">My Wall</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/sellingclub">Book Selling Club</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/exchangeclub">Book Exchange Club</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/rentingclub">Book Renting Club</a>
                    </li>
                </ul> --}}
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    {{-- <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <input class="form-control rounded-3" type="text" placeholder="Search">
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
                                <li><a class="dropdown-item" href="/mypurchase">My Purchase</a></li>
                                <li><a class="dropdown-item" href="/addresses">Addresses</a></li>
                                {{-- <li><a class="dropdown-item" href="/changepassword">Change Password</a></li> --}}
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </ul>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">

                <!-- display posts -->
                    <div id="postOuterContainer"></div>

                </div>
                <!-- Daily Discover Card -->
                <div id="daily-discover" class="col-lg-4">
                    <div class="card mt-5 mb-3 custom-sticky-card card-sidebar">
                        <div class="card-header sticky-top">
                            <div class="d-flex justify-content-between">
                                <h5 id="daily-discover-header" class="mb-0">Daily Discover</h5>
                                {{-- <small>See All<i class="fa fa-arrow-right" aria-hidden="true"></i></small> --}}
                            </div>
                        </div>
                        @foreach ($post->shuffle() as $daily)
                        <div class="card-body" onclick="clickedPost({{ $daily->id }}, {{ $daily->user_id }})">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/books/' . $daily->book_photo) }}" alt="Book Image"
                                    class="rounded me-3" width="80" height="80">
                                <div>
                                    <h6 id="book-title" class="mb-0">{{ $daily->title }}</h6>
                                    <p class="mb-0">For {{ $daily->status }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // current user id for like and comment usage
        const current_user_id = "{{ session('id'); }}"
        const csrf_token = "{{ csrf_token(); }}";
    </script>
    <script src="{{ asset('js/book_club_mywall.js') }}"></script>
</div>

<!-- Report Modal -->
<div class="modal fade" id="report" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:#003060;">Select a
                    Reason</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-check">
                    <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                        Nudity
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                        Violence
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                        Offensive or potentially offensive post
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                        Harrassment
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                        Suicide or self-injury
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                        False information
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                        Spam
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                        Hate speech
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                        Involves a child
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                        Terrorism
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                        Others
                    </label>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label report-input"
                        style="color:#003060;">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1"
                        placeholder="Please further elaborate on your selected reason" rows="7"
                        style="color:#003060;"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn report-button">Report</button>
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
    var daily_discover_cards = document.getElementById("daily-discover");
    var daily_discover_btn = document.getElementById("daily-discover-header");
    daily_discover_btn.addEventListener("click", function() {
        // alert("bitch");
        daily_discover_cards.style.display = "none";
    });
</script>