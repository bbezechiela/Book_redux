@include('partials.__header', [
    'title' => 'Product | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/singleProduct-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easyzoom@2.5.3/css/easyzoom.css" />
    <script src="https://cdn.jsdelivr.net/npm/easyzoom@2.5.3/src/easyzoom.js"></script> --}}
    <script src="https://unpkg.com/pdfjs-dist@2.9.359/build/pdf.min.js"></script>
</head>

@php
    // $requested = f
@endphp

<body>
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
                            src="/assets/Book_Logo.png" alt="Logo"></a>
                </div>
                <div class="position-absolute end-0">
                    <div class="d-flex">
                        <ul class="nav py-profile justify-content-end">
                            <li class="nav-item dropdown">
                                <a href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                    class="nav-link dropdown-toggle avatar" aria-expanded="false" title="profile">
                                    <img src="{{ session('image') }}" alt="notification" width="35" height="35"
                                        class="rounded-5" style="margin-right: 2em;">
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

        </div>

        {{-- DIGITAL EXCHANGE DISPLAY DIGITAL EXCHANGE DISPLAY DIGITAL EXCHANGE DISPLAY DIGITAL EXCHANGE DISPLAY DIGITAL EXCHANGE DISPLAY --}}

        <div class="card mb-3 book-details mx-4">
            <div class="row g-0">
                <div class="col-md-4 p-5 stretch-card">
                    <img src="{{ asset('images/book_cover/' . $book->back_cover) }}" width="100%" height="100%"
                        alt="book">
                </div>
                <div class="col-md-8">
                    <div class="card-body">

                        <h3 class="card-title">{{ $book->title }}
                            {{-- <a href="" data-bs-toggle="modal" data-bs-target="#report">Report</a> --}}
                        </h3>
                        <h5 class="card-title"><span style="color: #E55B13; font-weight: bold;"></span>
                            <span>{{ $book->status }}
                                |</span> <span>{{ $book->genre }}</span>
                        </h5>

                        <p class="card-text fw-bold">Author: <span class="fw-normal">{{ $book->author }}</span></p>
                        <p class="card-text fw-bold">Edition: <span class="fw-normal">{{ $book->edition }}</span></p>
                        <div class="d-flex justify-content-start align-items-center mb-2">
                            <div class="col-md-6 col-lg-4 col-xl-3 d-flex align-items-center">
                                <p class="m-0 fw-bold" style="color: #003060;">ISBN:
                                    <span class="fw-normal">{{ $book->isbn }}</span>
                                </p>
                            </div>
                        </div>

                        @if ($book->exchange_preferences)
                            <p class="card-tex fw-bold">Exchange Preferences:
                                <span class="fw-normal">{{ $book->exchange_preferences }}</span>
                            </p>
                        @endif

                        <p class="card-text fw-bold">Description: <span
                                class="fw-normal">{{ $book->description }}</span></p>

                        @if ($book->status == 'Digital Exchange')
                            <button data-bs-toggle="modal"
                                onclick="previewBtn('{{ $book->book_filename }}', '{{ $book->title }}')"
                                class="btn cart-button" data-bs-toggle="modal" data-bs-target="#digitalPreviewModal"
                                style="margin-bottom: 1em;">Preview
                                <i class="fa fa-eye" aria-hidden="true"
                                    style="margin-left: 8px; margin-right: 4px;"></i></button>
                            @if ($book->user_id != session('id'))
                                <button data-bs-toggle="modal" class="btn exchange-button"
                                    data-bs-target="#digital_exchange_request" style="margin-bottom: 1em;">Send Exchange
                                    Request
                                    <i class="fa fa-exchange" aria-hidden="true"
                                        style="margin-left: 8px; margin-right: 4px;"></i></button>                            
                                {{-- @foreach ($book->request as $req)
                                    @if ($req->user_id == session('id'))
                                        <p>Please Wait</p>
                                    @endif
                                @endforeach --}}
                            @endif
                        @elseif ($book->status = 'Online Reading')
                            <button id="readNowBtn"
                                onclick="readNowFunction('{{ $book->book_filename }}', '{{ $book->title }}')"
                                data-bs-toggle="modal" class="btn cart-button" data-bs-target="#readNowModal"
                                style="margin-bottom: 1em;">Read Now
                            </button>
                            {{-- <button id="saveBtn" class="btn save-button" data-bs-toggle="modal" data-bs-target="#"
                                style="margin-bottom: 1em;"><i class="fa fa-bookmark-o" aria-hidden="true"
                                    style="margin-right: 7px;"></i>Save
                            </button> --}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- DIGITAL EXCHANGE DISPLAY DIGITAL EXCHANGE DISPLAY DIGITAL EXCHANGE DISPLAY DIGITAL EXCHANGE DISPLAY DIGITAL EXCHANGE DISPLAY --}}

    <h3 style="color: #003060; margin-top: 1em; margin-left: 3em;">Book Sharer</h3>
    <div class="container text-center seller-details">
        <div class="row align-items-center">
            <div class="col">
                <div class="d-flex align-items-center" style="width: 320px">
                    <img src="{{ $book->user->profile_photo }}" alt="lister image" class="circle-picture">
                    <div class="user-info">
                        <p>{{ $book->user->name }}</p>
                        <button onclick="redirect({{ $book->user->id }})" class="message-button" data-username="Nestinenn"><i class="fa fa-envelope"
                                aria-hidden="true"></i>Message</button>
                        <a href="/userlistings/{{ $book->user->id }}"><button class="view-profile-button"><i
                                    class="fa fa-eye" aria-hidden="true"></i>Profile</button></a>
                    </div>
                </div>
            </div>
            <div class="col">
                {{-- <div class="listings">
                    <h4 style="color: #E55B13;">20 </h4>
                    <p class="card-text">Listed Books for Exchange</p>
                </div> --}}
            </div>
            <div class="col">
                {{-- <div class="listings">
                    <h4 style="color: #E55B13;">10 </h4>
                    <p class="card-text">Listed Books for Online Reading</p>
                </div> --}}
            </div>
            <div class="col">
                {{-- <div class="reviews">
                    <h4 style="color: #E55B13;">18</h4>
                    <p class="card-text">User Ratings and Reviews</p>
                </div> --}}
            </div>

        </div>

    </div>
    {{-- </div> --}}


    {{-- Digital Exchange Preview Modal --}}
    <div class="modal fade" id="digitalPreviewModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="digitalPreviewModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content h-100">
                <div class="modal-header">
                    <h1 id="digitalPreviewTitle" class="modal-title fs-5 fw-bold" style="color: #003060">Modal title
                    </h1>
                    <button id="digitalPreviewClose" type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div id="pdfPreview" class="d-flex justify-center flex-column m-5"></div>
                    <h2 class="text-center mb-5 text-danger fw-bold">Send an Exchange Request to continue reading the
                        whole document</h2>
                </div>
            </div>
        </div>
    </div>

    {{-- Read Now Modal --}}
    <div class="modal fade" id="readNowModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="readNowModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content h-100">
                <div class="modal-header">
                    <h1 id="readNowTitle" class="modal-title fs-5 fw-bold" style="color: #003060">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <iframe id="readNowFrame" frameborder="0" style="width: 100%; height: 100%;"></iframe>
                </div>
            </div>
        </div>
    </div>


    <!-- Physical Exchange Request Modal -->
    {{-- <div class="modal fade" id="exchange_request" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:#003060;">Physical Exchange
                        Request
                        Form
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault01" style="color:#003060;">Title</label>
                                <input type="text" class="form-control" id="validationDefault01"
                                    placeholder="Title" value="" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault02" style="color:#003060;">ISBN</label>
                                <input type="text" class="form-control" id="validationDefault02"
                                    placeholder="ISBN" value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault03" style="color:#003060;">Author</label>
                                <input type="text" class="form-control" id="validationDefault03"
                                    placeholder="Author" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault04" style="color:#003060;">Genre</label>
                                <select class="form-control" id="validationDefault04">
                                    <option selected>Genre</option>
                                    <option value="Educational">Educational</option>
                                    <option value="Romance & Saga">Romance & Saga</option>
                                    <option value="Fantasy & Adventure">Fantasy & Adventure</option>
                                    <option value="Science Fiction">Science Fiction</option>
                                    <option value="Historical Fiction">Historical Fiction</option>
                                    <option value="Mystery & Suspense">Mystery & Suspense</option>
                                    <option value="Young Adult">Young Adult</option>
                                    <option value="Non-Fiction & Biography">Non-Fiction & Biography</option>
                                    <option value="Horror & Supernatural">Horror & Supernatural</option>
                                    <option value="Comedy & Satire">Comedy & Satire</option>
                                    <option value="Poetry & Prose">Poetry & Prose</option>
                                    <option value="Self-Help">Self-Help</option>
                                    <option value="Crime & Thriller">Crime & Thriller</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault05" style="color:#003060;">Edition</label>
                                <input type="text" class="form-control" id="validationDefault05"
                                    placeholder="Edition" required>
                            </div>
                            <div class="col-md-6 mb-3 form-group">
                                <label for="validationDefault06" style="color:#003060;">Format</label>
                                <select class="form-control" id="validationDefault06">
                                    <option selected>Format</option>
                                    <option value="Hardback">Hardback</option>
                                    <option value="Paperback">Paperback</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault07" style="color:#003060;">Condition</label>
                                <select class="form-control" id="validationDefault07">
                                    <option selected>Condition</option>
                                    <option value="New">New</option>
                                    <option value="Like New">Like New</option>
                                    <option value="Very Good">Very Good</option>
                                    <option value="Good">Good</option>
                                    <option value="Fair">Fair</option>
                                    <option value="Poor">Poor</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault08" style="color:#003060;">Exchange Method
                                    Preference</label>
                                <select class="form-control" id="validationDefault08">
                                    <option selected>Exchange Method Preference</option>
                                    <option value="Meetup">Meetup</option>
                                    <option value="Delivery">Delivery</option>
                                </select>
                            </div>
                        </div>
                        <button type="button" id="exchange-shipping-fee-btn" class="form-control"
                            data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="Click to open shipping form"
                            style="text-align: justify; margin-bottom: 12px;">
                            Shipping Fee (DRE PA NA SHOW AN ANOTHER MODAL AHHAHA)
                        </button>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label report-input"
                                    style="color:#003060;">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                    placeholder="Describe the book's shortcomings or add other important information concerning the request"
                                    rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <p style="color:#003060;">Images of the book you want to offer
                            <div class="image-container">
                                <div class="image-holder">
                                    <input id="first-img" type="file" accept="image/*" class="d-none" required>
                                    <label for="">Front Cover</label><br>
                                    <label for="first-img"><i id="first-plus" class="fa fa-plus" aria-hidden="true"
                                            style="cursor: pointer;"><img src="" id="one-image"
                                                alt=""></i></label>
                                </div>
                                <div class="image-holder">
                                    <input id="second-img" type="file" accept="image/*" class="d-none">
                                    <label for="">Back Cover</label><br>
                                    <label for="second-img"><i id="second-plus" class="fa fa-plus"
                                            aria-hidden="true" style="cursor: pointer;"><img src=""
                                                id="two-image" alt=""></i></label>
                                </div>
                                <div class="image-holder">
                                    <input id="third-img" type="file" accept="image/*" class="d-none">
                                    <label for="">Content</label><br>
                                    <label for="third-img"><i id="three-plus" class="fa fa-plus" aria-hidden="true"
                                            style="cursor: pointer;"><img src="" id="three-image"
                                                alt=""></i></label>
                                </div>
                                <div class="image-holder">
                                    <input id="fourth-img" type="file" accept="image/*" class="d-none">
                                    <label for="">Content</label><br>
                                    <label for="fourth-img"><i id="four-plus" class="fa fa-plus" aria-hidden="true"
                                            style="cursor: pointer;"><img src="" id="four-image"
                                                alt=""></i></label>
                                </div>
                                <div class="image-holder">
                                    <input id="fifth-img" type="file" accept="image/*" class="d-none">
                                    <label for="">Content</label><br>
                                    <label for="fifth-img"><i id="five-plus" class="fa fa-plus" aria-hidden="true"
                                            style="cursor: pointer;"><img src="" id="five-image"
                                                alt=""></i></label>
                                </div>
                            </div>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button submit" class="btn report-button">Send Request</button>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Digital Exchange Request Modal -->
    <div class="modal fade" id="digital_exchange_request" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:#003060;">Digital Exchange
                        Request
                        Form
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/exchangerequest" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="user_id" value="{{ session('id') }}" hidden>
                        <input type="text" name="book_id" value="{{ $book->id }}" hidden>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault01" style="color:#003060;">Title</label>
                                <input type="text" class="form-control" id="validationDefault01"
                                    placeholder="Title" name="title" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault02" style="color:#003060;">ISBN</label>
                                <input type="text" class="form-control" id="validationDefault02"
                                    placeholder="ISBN" name="isbn" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault03" style="color:#003060;">Author</label>
                                <input type="text" class="form-control" id="validationDefault03"
                                    placeholder="Author" name="author" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault04" style="color:#003060;">Genre</label>
                                <select class="form-control" id="validationDefault04" name="genre" required>
                                    <option selected>Genre</option>
                                    <option value="Educational">Educational</option>
                                    <option value="Romance & Saga">Romance & Saga</option>
                                    <option value="Fantasy & Adventure">Fantasy & Adventure</option>
                                    <option value="Science Fiction">Science Fiction</option>
                                    <option value="Historical Fiction">Historical Fiction</option>
                                    <option value="Mystery & Suspense">Mystery & Suspense</option>
                                    <option value="Young Adult">Young Adult</option>
                                    <option value="Non-Fiction & Biography">Non-Fiction & Biography</option>
                                    <option value="Horror & Supernatural">Horror & Supernatural</option>
                                    <option value="Comedy & Satire">Comedy & Satire</option>
                                    <option value="Poetry & Prose">Poetry & Prose</option>
                                    <option value="Self-Help">Self-Help</option>
                                    <option value="Crime & Thriller">Crime & Thriller</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault05" style="color:#003060;">Edition</label>
                                <input type="text" class="form-control" id="validationDefault05"
                                    placeholder="Edition" name="edition" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="col-md-4 control-label" for="filebutton1">Book
                                    Cover</label>
                                <div class="input-file-wrapper">
                                    <input id="filebutton1" name="front_cover" accept="image/*"
                                        class="input-file form-control" type="file" style="margin-bottom: 12px;">
                                </div>
                            </div>

                            <label class="col-md-4 control-label" for="filebutton2" style="white-space: nowrap;">Book
                                File</label>
                            <div class="input-file-wrapper">
                                <input id="filebutton2" name="pdf_file" accept="application/pdf"
                                    class="input-file form-control" type="file" style="margin-bottom: 12px;">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label report-input"
                                    style="color:#003060;">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="description"
                                    placeholder="Describe the book's shortcomings or add other important information concerning the request"
                                    rows="7" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn report-button">Send Request</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- <div class="modal fade" id="exchange_request" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:#003060;">Exchange Request
                            Form
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault01">First name</label>
                                    <input type="text" class="form-control" id="validationDefault01"
                                        placeholder="First name" value="Mark" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefault02">Last name</label>
                                    <input type="text" class="form-control" id="validationDefault02"
                                        placeholder="Last name" value="Otto" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationDefaultUsername">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                        </div>
                                        <input type="text" class="form-control" id="validationDefaultUsername"
                                            placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">City</label>
                                    <input type="text" class="form-control" id="validationDefault03"
                                        placeholder="City" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault04">State</label>
                                    <input type="text" class="form-control" id="validationDefault04"
                                        placeholder="State" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault05">Zip</label>
                                    <input type="text" class="form-control" id="validationDefault05"
                                        placeholder="Zip" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="invalidCheck2" required>
                                    <label class="form-check-label" for="invalidCheck2">
                                        Agree to terms and conditions
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label report-input"
                                style="color:#003060;">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                placeholder="Please further elaborate on your selected reason" rows="7" style="color:#003060;"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn report-button">Report</button>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Report Modal -->
        <div class="modal fade" id="report" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:#003060;">Select a
                            Reason</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-check">
                            <input class="form-check-input check-report" type="checkbox" value=""
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                                Counterfeit and copyright
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input check-report" type="checkbox" value=""
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                                Prohibited item
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input check-report" type="checkbox" value=""
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                                Offensive or potentially offensive item
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input check-report" type="checkbox" value=""
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                                Fraudulent listing
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input check-report" type="checkbox" value=""
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
                                Others
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label report-input"
                                style="color:#003060;">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                placeholder="Please further elaborate on your selected reason" rows="7" style="color:#003060;"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn report-button">Report</button>
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
    document.getElementById('digitalPreviewClose').onclick = () => {
        document.getElementById('pdfPreview').innerHTML = '';
    }

    const previewBtn = (filename, title) => {
        document.getElementById('digitalPreviewTitle').textContent = title;
        var loadingTask = pdfjsLib.getDocument(`/files/books/${filename}`);
        var pdfDiv = document.getElementById('pdfPreview');
        var pageNumIsRendering = false;
        var pageNumIsPending = null;

        loadingTask.promise.then((pdf) => {
            // console.log(pdf.numPages);
            for (var pageNum = 1; pageNum <= 10; pageNum++) {
                const canvas = document.createElement('canvas');
                canvas.className = 'border border-secondary-subtle my-2';
                if (pageNum >= 6 && pageNum <= 10) {
                    canvas.style.filter = 'blur(7px)';
                }

                pdf.getPage(pageNum).then((page) => {

                    var context = canvas.getContext('2d');
                    var viewport = page.getViewport({
                        scale: 1.5,
                    });
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    var renderContext = {
                        canvasContext: context,
                        viewport: viewport
                    }

                    pdfDiv.appendChild(canvas);

                    page.render(renderContext).promise.then(() => {});
                });
            }
        });
    }

    const readNowFunction = (filename, title) => {
        try {
            document.getElementById('readNowTitle').textContent = `${title}`
            document.getElementById('readNowFrame').src = `/files/books/${filename}`;
        } catch (error) {
            console.error(error);
        }
    };

    // search script
    // var search = document.getElementById('search_input');
    // var searchContainer = document.getElementById('searches');
    // if (search.value.trim().length < 1) {
    //     searchContainer.style.display = 'none'
    // }
    // search.addEventListener('keydown', (event) => {
    //     if (event.key === 'Enter' || event.keyCode === 13) {
    //         window.location.href = '/searchitem/' + search.value;
    //     }
    // });
    // search.addEventListener('input', () => {
    //     if (search.value.trim().length > 1) {
    //         const requestOptions = {
    //             method: 'GET',
    //         };
    //         fetch('/search/' + search.value.trim(), requestOptions)
    //             .then(response => response.json())
    //             .then(result => {
    //                 searchContainer.style.display = 'inline';
    //                 searchContainer.innerHTML = '';
    //                 // console.log(result);
    //                 result.forEach(data => {
    //                     console.log(data);
    //                     if (data.unit == 'Available') {
    //                         const suggestionElement = document.createElement('div');
    //                         const searchedImage = document.createElement('img');
    //                         const searchedContent = document.createElement('div');
    //                         const titleText = document.createElement('p');
    //                         const authorText = document.createElement('p');
    //                         // suggestionElement.textContent = data.title;
    //                         suggestionElement.id = "searched-item";
    //                         suggestionElement.className = 'row px-2';
    //                         searchedImage.src = '/images/books/' + data.book_photo;
    //                         searchedImage.className = 'col-3 px-0 bg-light';
    //                         searchedContent.className = 'col border';
    //                         searchedContent.id = 'textContent';
    //                         titleText.className = 'm-0 fw-bold';
    //                         titleText.id = 'searched-title';
    //                         titleText.textContent = data.title;
    //                         authorText.id = 'searched-author';
    //                         authorText.textContent = data.author;
    //                         suggestionElement.addEventListener('click', () => {
    //                             window.location.href = "/product/" + data.id + "/" + data
    //                                 .user_id;
    //                             searchContainer.innerHTML = '';
    //                         });
    //                         searchContainer.appendChild(suggestionElement);
    //                         suggestionElement.appendChild(searchedImage);
    //                         suggestionElement.appendChild(searchedContent);
    //                         searchedContent.appendChild(titleText);
    //                         searchedContent.appendChild(authorText);
    //                     }
    //                 });
    //             })
    //             .catch(error => console.log('error', error));
    //     } else {
    //         searchContainer.style.display = 'none'
    //         searchContainer.innerHTML = '';
    //     }
    // });
</script>

<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     const messageButtons = document.querySelectorAll('.message-button');
    //     messageButtons.forEach(button => {
    //         button.addEventListener('click', function() {
    //             const username = button.dataset.username;
    //             redirectToMessaging(username);
    //         });
    //     });

    //     function redirectToMessaging(username) {
    //         const messagingUrl = `/messages/${username}`;
    //         window.location.href = messagingUrl;
    //     }
    // });
</script>

<script>
    const redirect = (id) => {
        window.location.href = `/messages/${id}`;
    }
    // var first_img = document.getElementById('first-img');
    // var second_img = document.getElementById('second-img');
    // var third_img = document.getElementById('third-img');
    // var fourth_img = document.getElementById('fourth-img');
    // var fifth_img = document.getElementById('fifth-img');
    // first_img.addEventListener('change', () => {
    //     var img = document.getElementById('one-image');
    //     img.src = URL.createObjectURL(event.target.files[0]);
    //     document.getElementById('first-plus').className = 'fa p-0';
    //     img.style.width = '60px';
    //     img.style.height = '60px';
    // });
    // second_img.addEventListener('change', () => {
    //     var img = document.getElementById('two-image');
    //     img.src = URL.createObjectURL(event.target.files[0]);
    //     document.getElementById('second-plus').className = 'fa p-0';
    //     img.style.width = '60px';
    //     img.style.height = '60px';
    // });
    // third_img.addEventListener('change', () => {
    //     var img = document.getElementById('three-image');
    //     img.src = URL.createObjectURL(event.target.files[0]);
    //     document.getElementById('three-plus').className = 'fa p-0';
    //     img.style.width = '60px';
    //     img.style.height = '60px';
    // });
    // fourth_img.addEventListener('change', () => {
    //     var img = document.getElementById('four-image');
    //     img.src = URL.createObjectURL(event.target.files[0]);
    //     document.getElementById('four-plus').className = 'fa p-0';
    //     img.style.width = '60px';
    //     img.style.height = '60px';
    // });
    // fifth_img.addEventListener('change', () => {
    //     var img = document.getElementById('five-image');
    //     img.src = URL.createObjectURL(event.target.files[0]);
    //     document.getElementById('five-plus').className = 'fa p-0';
    //     img.style.width = '60px';
    //     img.style.height = '60px';
    // });

    // function ratingReview(user_id, type, item_id) {
    //     submit_btn.disabled = false;
    //     first_img.value = '';
    //     second_img.value = '';
    //     third_img.value = '';
    //     fourth_img.value = '';
    //     fifth_img.value = '';
    //     document.getElementById('one-image').src = '';
    //     document.getElementById('two-image').src = '';
    //     document.getElementById('three-image').src = '';
    //     document.getElementById('four-image').src = '';
    //     document.getElementById('five-image').src = '';
    //     document.getElementById('one-image').style.width = '0px';
    //     document.getElementById('two-image').style.width = '0px';
    //     document.getElementById('three-image').style.width = '0px';
    //     document.getElementById('four-image').style.width = '0px';
    //     document.getElementById('five-image').style.width = '0px';
    //     document.getElementById('one-image').style.height = '0px';
    //     document.getElementById('two-image').style.height = '0px';
    //     document.getElementById('three-image').style.height = '0px';
    //     document.getElementById('four-image').style.height = '0px';
    //     document.getElementById('five-image').style.height = '0px';
    //     document.getElementById('first-plus').className = 'fa fa-plus';
    //     document.getElementById('second-plus').className = 'fa fa-plus';
    //     document.getElementById('three-plus').className = 'fa fa-plus';
    //     document.getElementById('four-plus').className = 'fa fa-plus';
    //     document.getElementById('five-plus').className = 'fa fa-plus';
    // }
</script>
