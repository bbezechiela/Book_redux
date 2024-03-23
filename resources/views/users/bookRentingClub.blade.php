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
                        <a class="nav-link custom-nav-link" href="/bookclub">My Wall</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/sellingclub">Book Selling Club</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/exchangeclub">Book Exchange Club</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/rentingclub">Book Renting Club</a>
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
                    <div class="card mb-3 card-cover">
                        <div class="card-header renting-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center card-dets">
                                    <div class="header-image"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6>Book Renting Club<i class="btn fa fa-pencil-square-o" aria-hidden="true"
                                        data-bs-toggle="modal" data-bs-target="#createpost"></i></h6>
                                <input class="form-control rounded-3 search-club" type="text" placeholder="Search"
                                    style="height: 2em">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <ul class="nav nav-underline">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page"
                                            href="/rentingClub">Discussion</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link custom-nav-link" href="/eventsrentingclub">Events</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link custom-nav-link" href="/membersrentingclub">Members</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- post outer container, ma container ini in post inner container -->
                    <div id="postOuterContainer"></div>

                </div>

                <!-- For Rent Card -->
                <div id="for_rent" class="col-lg-4">
                    <div class="card mt-5 mb-3 custom-sticky-card card-sidebar">
                        <div class="card-header sticky-top">
                            <div class="d-flex justify-content-between">
                                <h5 id="for-rent-header" class="mb-0 daily_discovery_text">For Rent</h5>
                                {{-- <small>See All<i class="fa fa-arrow-right" aria-hidden="true"></i></small> --}}
                            </div>
                        </div>
                        @foreach ($post->shuffle() as $rent)
                        <div class="card-body" onclick="clickedPost({{ $rent->id }}, {{ $rent->user_id }})">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/books/' . $rent->book_photo) }}" alt="Book Image"
                                    class="rounded me-3" width="80" height="80">
                                <div>
                                    <h6 class="mb-0">{{ $rent->title }}</h6>
                                    <p class="mb-0">For {{ $rent->status }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Create Post Modal -->
        <div class="modal fade" id="createpost" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: #003060">Create Post</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <textarea class="form-control border" id="exampleTextarea" rows="5"
                                placeholder="Write something here..."></textarea>
                        </div>
                        <div class="image-container">
                            <label id='first_img_holder' for="first_img" class="imageLabels image-holder">
                                +
                                <!-- <i class="fa fa-plus" aria-hidden="true"></i> -->
                            </label>
                            <input id='first_img' type='file'></input>
                            <label id='second_img_holder' for="second_img" class="imageLabels image-holder">
                                +
                            </label>
                            <input id='second_img' type='file'></input>
                            <label id='third_img_holder' for="third_img" class='imageLabels image-holder'>
                                +
                            </label>
                            <input id='third_img' type='file'></input>
                            <label id='fourth_img_holder' for="fourth_img" class='imageLabels image-holder'>
                                +
                            </label>
                            <input id='fourth_img' type='file'></input>
                            <label id='fifth_img_holder' for="fifth_img" class="imageLabels image-holder">
                                +
                            </label>
                            <input id='fifth_img' type='file'></input>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id='create-post' type="button" class="btn post-btn">Post</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const current_bookClub_name = 'Book Renting Club';
        const current_user_id = "{{ session('id') }}";
        const csrf_token = "{{ csrf_token(); }}";
    </script>
    <script src="{{ asset('js/book_club_posts.js'); }}"></script>
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
    var first_img = document.getElementById('first-img');
    var second_img = document.getElementById('second-img');
    var third_img = document.getElementById('third-img');
    var fourth_img = document.getElementById('fourth-img');
    var fifth_img = document.getElementById('fifth-img');
    var post_btn = document.getElementById('post-btn');
    var clubname = document.getElementById('clubname');
    var caption = document.getElementById('caption-text');
    first_img.addEventListener('change', () => {
        var img = document.getElementById('one-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('first-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });
    second_img.addEventListener('change', () => {
        var img = document.getElementById('two-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('second-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });
    third_img.addEventListener('change', () => {
        var img = document.getElementById('three-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('three-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });
    fourth_img.addEventListener('change', () => {
        var img = document.getElementById('four-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('four-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });
    fifth_img.addEventListener('change', () => {
        var img = document.getElementById('five-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('five-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });

    function post(user_id) {
        first_img.value = '';
        second_img.value = '';
        third_img.value = '';
        fourth_img.value = '';
        fifth_img.value = '';
        document.getElementById('one-image').src = '';
        document.getElementById('two-image').src = '';
        document.getElementById('three-image').src = '';
        document.getElementById('four-image').src = '';
        document.getElementById('five-image').src = '';
        document.getElementById('one-image').style.width = '0px';
        document.getElementById('two-image').style.width = '0px';
        document.getElementById('three-image').style.width = '0px';
        document.getElementById('four-image').style.width = '0px';
        document.getElementById('five-image').style.width = '0px';
        document.getElementById('one-image').style.height = '0px';
        document.getElementById('two-image').style.height = '0px';
        document.getElementById('three-image').style.height = '0px';
        document.getElementById('four-image').style.height = '0px';
        document.getElementById('five-image').style.height = '0px';
        const request = {
            method: 'GET'
        };
        fetch('/getuser/' + user_id, request)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                document.getElementById('user_img').src = 'images/profile_photos/' + data.profile_photo;
                document.getElementById('user_name').textContent = data.first_name + ' ' + data.last_name;
            })
            .catch(error => console.log(error));
        post_btn.id = 'post-btn';
        document.getElementById('post-btn').textContent = 'Post';
        document.getElementById('post-btn').addEventListener('click', () => {
            post();
        });
    }

    function post() {
        var formData = new FormData();
        formData.append('user_id', {
            {
                session('id')
            }
        });
        formData.append('clubname', clubname.value);
        formData.append('caption', caption.value);
        if (first_img.files.length > 0) {
            formData.append('first_img', first_img.files[0]);
        }
        if (second_img.files.length > 0) {
            formData.append('second_img', second_img.files[0]);
        }
        if (third_img.files.length > 0) {
            formData.append('third_img', third_img.files[0]);
        }
        if (fourth_img.files.length > 0) {
            formData.append('fourth_img', fourth_img.files[0]);
        }
        if (fifth_img.files.length > 0) {
            formData.append('fifth_img', fifth_img.files[0]);
        }
        // console.log(formData);
        fetch('/ratepost', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    // 'Content-type': 'application/json'
                },
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                window.location.reload();
            })
            .catch(error => console.log(error));
    }
</script>

<script>
    function clickedPost(id, user_id) {
        window.location.href = "/product/" + id + "/" + user_id;
    };
    var for_rent_cards = document.getElementById("for_rent");
    var for_rent_btn = document.getElementById("for-rent-header");
    // for_rent_btn.addEventListener("click", function() {
    //     for_rent_cards.style.display = "none";
    // });
</script>