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
        <div id="content" class="content pt-5">
            <ul class="nav bg-light fixed-top head-nav shadow py-2 px-4">
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

        <div class="card mb-3 mt-5 book-details mx-4">
            <div class="row g-0">
                <button class="btn px-3 py-1 rounded-3 position-absolute top-0 end-0 text-white" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                    style="width: fit-content; background-color: #003060; border-color: #003060;">Rate this
                    Book</button>
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
                            <div class="d-flex justify-content-between">
                                <div>
                                    <button id="readNowBtn"
                                        onclick="readNowFunction('{{ $book->book_filename }}', '{{ $book->title }}')"
                                        data-bs-toggle="modal" class="btn cart-button" data-bs-target="#readNowModal"
                                        style="margin-bottom: 1em;">Read Now
                                    </button>
                                    <a id="saveBtn" href="/savebook/{{ $book->id }}" class="btn save-button"
                                        style="margin-bottom: 1em;"><i class="fa fa-bookmark-o" aria-hidden="true"
                                            style="margin-right: 7px;"></i>Save
                                    </a>
                                </div>
                                <div>
                                    <button type="button" class="btn text-decoration-underline"
                                        style="color: #E55B13;" onclick="reportModal.show()">Report Listing</button>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Rating Modal --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Rate this Book</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center mb-2">
                        <i id="one-star" class="fa fa-star-o fs-2 mx-2" style="cursor: pointer; color: #003060;"
                            aria-hidden="true"></i>
                        <i id="two-star" class="fa fa-star-o fs-2 mx-2" style="cursor: pointer; color: #003060;"
                            aria-hidden="true"></i>
                        <i id="three-star" class="fa fa-star-o fs-2 mx-2" style="cursor: pointer; color: #003060;"
                            aria-hidden="true"></i>
                        <i id="four-star" class="fa fa-star-o fs-2 mx-2" style="cursor: pointer; color: #003060;"
                            aria-hidden="true"></i>
                        <i id="five-star" class="fa fa-star-o fs-2 mx-2" style="cursor: pointer; color: #003060;"
                            aria-hidden="true"></i>
                    </div>
                    <textarea class="w-100 mb-2 p-3" name="" placeholder="Description" id="rate_textarea" cols="40.value";
                        rows="5"></textarea>
                    <div class="d-flex justify-content-end">
                        <button class="btn text-white" id="rate_submit_btn"
                            style="background-color: #E55B13;">Submit</button>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div> --}}
            </div>
        </div>
    </div>




    {{-- DIGITAL EXCHANGE DISPLAY DIGITAL EXCHANGE DISPLAY DIGITAL EXCHANGE DISPLAY DIGITAL EXCHANGE DISPLAY DIGITAL EXCHANGE DISPLAY --}}

    <h3 style="color: #003060; margin-top: 2em; padding-left: 4em;">Book Sharer</h3>
    <div class="container px-0 text-center seller-details">
        <div class="row align-items-center">
            <div class="col">
                <div class="d-flex align-items-center" style="width: 320px">
                    <img src="{{ $book->user->profile_photo }}" alt="lister image" class="circle-picture">
                    <div class="user-info">
                        <p>{{ $book->user->name }}</p>
                        <button onclick="redirect({{ $book->user->id }})" class="message-button"
                            data-username="Nestinenn"><i class="fa fa-envelope"
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
        <div class="container-fluid mt-5 px-0 ">
            {{-- <h2 class="text-start">Reviews</h2> --}}
            {{-- <hr class="w-50 mx-auto border-1 opacity-100 mt-1" style="border-color: #003060;"> --}}

            <div class="row flex-column px-3 gap-3 pt-3">
                @foreach ($book->review as $review)
                    <div class="d-flex p-3 rounded-4 border">
                        <div class="px-2">
                            <img src="{{ $review->user->profile_photo }}" alt="image" class="rounded-circle"
                                style="width: 50px; height: 50px;">
                        </div>
                        <div class="w-100">
                            <p class="text-start fw-bold mb-0">{{ $review->user->name }}</p>
                            <div class="d-flex justify-content-start gap-1">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $review->rate_value)
                                        <i id="one-star" class="fa fa-star" style="cursor: pointer; color: #E55B13;"
                                            aria-hidden="true"></i>
                                    @else
                                        <i id="one-star" class="fa fa-star-o"
                                            style="cursor: pointer; color: #E55B13;" aria-hidden="true"></i>
                                    @endif
                                @endfor
                            </div>
                            <div class="d-flex flex-column mt-2 pe-4">
                                @if ($review->content_accuracy)
                                    <p>Accuracy of Content: {{ $review->content_accuracy }}</p>
                                @endif
                                <p class="text-start m-0">
                                    {{ $review->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
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


        <!-- Report Modal -->
        <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="exampleModalLabel"
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
        </div> --}}
</body>


@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])



<script>
    const reportModal = new bootstrap.Modal('#reportModal', {
        keyboard: false
    })



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

    const redirect = (id) => {
        window.location.href = `/messages/${id}`;
    }

    var one_S = document.getElementById('one-star');
    var two_S = document.getElementById('two-star');
    var three_S = document.getElementById('three-star');
    var four_S = document.getElementById('four-star');
    var five_S = document.getElementById('five-star');
    var rate_val = 0;

    function star(rate) {
        if (rate == 0) {
            one_S.className = 'fa fa-star-o fs-2 mx-2';
            two_S.className = 'fa fa-star-o fs-2 mx-2';
            three_S.className = 'fa fa-star-o fs-2 mx-2';
            four_S.className = 'fa fa-star-o fs-2 mx-2';
            five_S.className = 'fa fa-star-o fs-2 mx-2';
        } else if (rate == 1) {
            one_S.className = 'fa fa-star fs-2 mx-2';
            two_S.className = 'fa fa-star-o fs-2 mx-2';
            three_S.className = 'fa fa-star-o fs-2 mx-2';
            four_S.className = 'fa fa-star-o fs-2 mx-2';
            five_S.className = 'fa fa-star-o fs-2 mx-2';
        } else if (rate == 2) {
            one_S.className = 'fa fa-star fs-2 mx-2';
            two_S.className = 'fa fa-star fs-2 mx-2';
            three_S.className = 'fa fa-star-o fs-2 mx-2';
            four_S.className = 'fa fa-star-o fs-2 mx-2';
            five_S.className = 'fa fa-star-o fs-2 mx-2';
        } else if (rate == 3) {
            one_S.className = 'fa fa-star fs-2 mx-2';
            two_S.className = 'fa fa-star fs-2 mx-2';
            three_S.className = 'fa fa-star fs-2 mx-2';
            four_S.className = 'fa fa-star-o fs-2 mx-2';
            five_S.className = 'fa fa-star-o fs-2 mx-2';
        } else if (rate == 4) {
            one_S.className = 'fa fa-star fs-2 mx-2';
            two_S.className = 'fa fa-star fs-2 mx-2';
            three_S.className = 'fa fa-star fs-2 mx-2';
            four_S.className = 'fa fa-star fs-2 mx-2';
            five_S.className = 'fa fa-star-o fs-2 mx-2';
        } else if (rate == 5) {
            one_S.className = 'fa fa-star fs-2 mx-2';
            two_S.className = 'fa fa-star fs-2 mx-2';
            three_S.className = 'fa fa-star fs-2 mx-2';
            four_S.className = 'fa fa-star fs-2 mx-2';
            five_S.className = 'fa fa-star fs-2 mx-2';
        }
    }

    one_S.addEventListener('click', () => {
        star(1);
        rate_val = 1;
    });
    two_S.addEventListener('click', () => {
        star(2);
        rate_val = 2;
    });
    three_S.addEventListener('click', () => {
        star(3);
        rate_val = 3;
    });
    four_S.addEventListener('click', () => {
        star(4);
        rate_val = 4;
    });
    five_S.addEventListener('click', () => {
        star(5);
        rate_val = 5;
    });

    const postReview = async (url, data) => {
        var post = await fetch(url, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data)
        });

        return await post;
    }

    document.getElementById('rate_submit_btn').onclick = () => {
        postReview('/onlinereadreview', {
                user_id: {{ session('id') }},
                book_id: {{ $book->id }},
                rate_value: rate_val,
                description: document.getElementById('rate_textarea').value
            })
            .then(res => {
                if (res.status == 200) {
                    location.reload();
                }
            })
            .catch(err => console.error(err));
    }
</script>
