@include('partials.__header', [
    'title' => 'My Profile | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/myProfile-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 shadow">
        <x-sidebar />
    </div>    
    <div id="content" class="content">
        <ul class="nav bg-light sticky-top head-nav shadow py-4 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                {{-- <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button> --}}
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5"
                        src="../assets/Book_Logo.png" alt="Logo"></a>
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
                                <li><a class="dropdown-item" href="/changepassword">Change Password</a></li>
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </ul>
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="form" action="/myprofileupdate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row px-3 py-3 mx-3">
                <div class="header">
                    <h4>My Profile</h4>
                    <p>Manage and protect your account</p>
                </div>
                <div class="col-3 d-flex align-items-center flex-column px-5 py-3">
                    <div class="profile-details">
                        <p>Change Profile Photo</p>
                    </div>
                    <img class="img mx-auto rounded-circle border" id="img-icon"
                        src="{{ asset('images/profile_photos/' . $user->profile_photo) }}" alt="upload_profile"
                        width="80" height="80">
                    <input type="file" class="d-none" accept="image/*" id="profileUpload" name="profile_photo"
                        required>
                    <label for="profileUpload" class="btn mx-auto mt-3 py-1 px-0 upload-btn">Upload</label>
                    <button type="submit" class="btn save-button"
                        onclick="document.getElementById('form').submit()">Save</button>
                </div>
                <div class="col mx-2 d-flex justify-content-center flex-column w-50">
                    <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2 form-control" id="firstName" name="first_name" type="text"
                            placeholder="First Name" style="margin-bottom: 12px; color: #003060;"
                            value="{{ $user->first_name }}" required>
                    </div>
                    <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2 form-control" id="email" name="email" type="email"
                            placeholder="Email" style="margin-bottom: 12px; color: #003060;" value="{{ $user->email }}"
                            required>
                    </div>
                    {{-- <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2 form-control" id="address" name="address"
                            type="text" placeholder="Address" style="margin-bottom: 8px; color: #003060;"
                            value="{{ $user->address }}" required>
                </div> --}}
                    <div class="mx-1 d-flex justify-content-center form-group">
                        <select class="w-100 mt-4 fs-6 px-2 form-control form-select" name="gender" id="gender"
                            style="margin-bottom: 12px; color: #003060;" required>
                            <option value="{{ $user->gender }}">{{ $user->gender }}</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col mx-2 d-flex justify-content-center flex-column w-50">
                    <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2 form-control" id="lastName" name="last_name"
                            type="text" placeholder="Last Name" style="margin-bottom: 12px; color: #003060;"
                            value="{{ $user->last_name }}" required>
                    </div>
                    <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2 form-control" id="phoneNumber" name="phone_number"
                            type="text" placeholder="Phone Number" style="margin-bottom: 12px; color: #003060;"
                            value="{{ $user->phone_number }}" required>
                    </div>
                    <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2 form-control" id="birthday" name="birthday"
                            type="text" placeholder="Birthday" value="{{ $user->birthday }}"
                            onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}"
                            style="margin-bottom: 12px; color: #003060;" required>
                    </div>
                    {{-- <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2 form-control" id="age" name="age"
                            type="number" placeholder="Age" style="margin-bottom: 12px; color: #003060;"
                            value="{{ $user->age }}" required>
            </div> --}}
                </div>
            </div>

            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="../assets/Book_Logo.png" class="rouxunded me-2" alt="...">
                        <strong class="me-auto"></strong>
                        <small>1 min ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                    @if (isset($message) && $message == 'Update successful! Your profile has been successfully updated.')
                        <div class="toast-body fw-bold text-success">
                            {{ $message }}
                        </div>
                    @elseif (isset($message))
                        <div class="toast-body fw-bold text-danger">
                            {{ $message }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="container text-center preferences-details">
                <h2>What genres are you most interested in?</h2>
                <small>Select all that apply</small>
                <div class="row px-3">
                    <div class="col-3">
                        <div class="check-button">
                            <input type="checkbox" class="btn-check btn-genre" name="interest[]" id="educational"
                                value="Educational" autocomplete="off"
                                @if (preg_match('/Educational/i', $user->interest)) checked @endif />
                            <label class="btn btn-genre" for="educational">Educational</label>
                        </div>
                        <div class="check-button">
                            <input type="checkbox" class="btn-check btn-genre" name="interest[]" id="romance"
                                value="Romance & Saga" autocomplete="off"
                                @if (preg_match('/Romance & Saga/i', $user->interest)) checked @endif />
                            <label class="btn btn-genre" for="romance">Romance & Saga</label>
                        </div>
                        <div class="check-button">
                            <input type="checkbox" class="btn-check btn-genre" name="interest[]" id="fantasy"
                                value="Fantasy & Adventure" autocomplete="off"
                                @if (preg_match('/Fantasy & Adventure/i', $user->interest)) checked @endif />
                            <label class="btn btn-genre" for="fantasy">Fantasy & Adventure</label>
                        </div>
                        <div class="check-button">
                            <input type="checkbox" class="btn-check btn-genre" name="interest[]" id="science"
                                value="Science Fiction" autocomplete="off"
                                @if (preg_match('/Science Fiction/i', $user->interest)) checked @endif />
                            <label class="btn btn-genre" for="science">Science Fiction</label>
                        </div>
                        <div class="check-button">
                            <input type="checkbox" class="btn-check btn-genre" name="interest[]" id="history"
                                value="Historical Fiction" autocomplete="off"
                                @if (preg_match('/Historical Fiction/i', $user->interest)) checked @endif />
                            <label class="btn btn-genre" for="history">Historical Fiction</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="check-button">
                            <input type="checkbox" class="btn-check btn-genre" name="interest[]" id="mystery"
                                value="Mystery & Suspense" autocomplete="off"
                                @if (preg_match('/Mystery & Suspense/i', $user->interest)) checked @endif />
                            <label class="btn btn-genre" for="mystery">Mystery & Suspense</label>
                        </div>
                        <div class="check-button">
                            <input type="checkbox" class="btn-check btn-genre" name="interest[]" id="youngAdult"
                                value="Young Adult" autocomplete="off"
                                @if (preg_match('/Young Adult/i', $user->interest)) checked @endif />
                            <label class="btn btn-genre" for="youngAdult">Young Adult</label>
                        </div>
                        <div class="check-button">
                            <input type="checkbox" class="btn-check btn-genre" name="interest[]" id="non-fiction"
                                value="Non-Fiction & Biography" autocomplete="off"
                                @if (preg_match('/Non-Fiction & Biography/i', $user->interest)) checked @endif />
                            <label class="btn btn-genre" for="non-fiction">Non-Fiction & Biography</label>
                        </div>
                        <div class="check-button">
                            <input type="checkbox" class="btn-check btn-genre" name="interest[]" id="horror"
                                value="Horror & Supernatural" autocomplete="off"
                                @if (preg_match('/Horror & Supernatural/i', $user->interest)) checked @endif />
                            <label class="btn btn-genre" for="horror">Horror & Supernatural</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="check-button">
                            <input type="checkbox" class="btn-check btn-genre" name="interest[]" id="poetry"
                                value="Poetry & Prose" autocomplete="off"
                                @if (preg_match('/Poetry & Prose/i', $user->interest)) checked @endif />
                            <label class="btn btn-genre" for="poetry">Poetry & Prose</label>
                        </div>
                        <div class="check-button">
                            <input type="checkbox" class="btn-check btn-genre" name="interest[]" id="self-help"
                                value="Self-Help" autocomplete="off"
                                @if (preg_match('/Self-Help/i', $user->interest)) checked @endif />
                            <label class="btn btn-genre" for="self-help">Self-Help</label>
                        </div>
                        <div class="check-button">
                            <input type="checkbox" class="btn-check btn-genre" name="interest[]" id="crime"
                                value="Crime & Thriller" autocomplete="off"
                                @if (preg_match('/Crime & Thriller/i', $user->interest)) checked @endif />
                            <label class="btn btn-genre" for="crime">Crime & Thriller</label>
                        </div>
                        <div class="check-button">
                            <input type="checkbox" class="btn-check btn-genre" name="interest[]" id="comedy"
                                value="Comedy & Satire" autocomplete="off"
                                @if (preg_match('/Comedy & Satire/i', $user->interest)) checked @endif />
                            <label class="btn btn-genre" for="comedy">Comedy & Satire</label>
                        </div>
                    </div>
        </form>
    </div>
</div>

{{-- <div class="container text-center seller-details">
    <div class="row align-items-center">
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
        </div> --}}
        {{-- <div class="col">
                    <div class="ratings">
                        <p>Books Lent <span class="sold">203</span></p>
                        <p>Books Rented <span class="rent">9</span></p>
                    </div>
                </div> --}}
    {{-- </div>
</div> --}}
</div>
</div>

@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
]);

<script>
    var uploaded_image = document.getElementById("profileUpload");
    uploaded_image.addEventListener("change", function() {
        var image = document.getElementById("img-icon");
        image.src = URL.createObjectURL(event.target.files[0]);
    });

    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(document.getElementById('liveToast'));

    @if (isset($message))
        toastBootstrap.show()
    @endif
</script>
