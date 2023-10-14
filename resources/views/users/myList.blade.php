@include('partials.__header', [
    'title' => 'My List | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/mylist-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

{{-- <body> --}}
<div id="body-container" class="container-fluid px-0">
    {{-- <div class="row mx-0"> --}}
    <div id="sidebar" class="sidebar p-2 min-vh-100">
        <x-sidebar />
    </div>

    <div id="content" class="pe-0 border content">
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
        <ul class="nav bg-light sticky-top head-nav shadow py-3 px-4">
            <div class="w-100 d-flex justify-content-between mt-1 p-0">
                <input class="border rounded-3 px-3 w-100" type="text" placeholder="Search">
                <a href="/" class="pb-2 px-2"><img class="img" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
            </div>
        </ul>
        <div class="container-fuid pt-3 px-3">
            <div class="row border mx-2 mt-3 p-3 shadow rounded">
                <div class="col d-flex align-items-center">
                    <p class="fs-3 order mx-auto fw-bold m-0">Order Status</p>
                </div>

                <a href="/orders" class="btn book-status col-2 ms-1 rounded rounded-4 py-2">
                    <p class="my-0 text-center fw-bold fs-3">0</p>
                    <p class="my-0 text-center fs-6">Orders</p>
                </a>

                <a class="btn book-status col-2 mx-2 rounded rounded-4 py-2">
                    <p class="my-0 text-center fw-bold fs-3">0</p>
                    <p class="my-0 text-center fs-6">Completed</p>
                </a>

                <a class="btn book-status col-2 mx-2 rounded rounded-4 py-2">
                    <p class="my-0 text-center fw-bold fs-3">0</p>
                    <p class="my-0 text-center fs-6">Cancelled</p>
                </a>

                <a class="btn book-status col-2 me-1 rounded rounded-4 py-2">
                    <p class="my-0 text-center fw-bold fs-3">0</p>
                    <p class="my-0 text-center fs-6">Return</p>
                </a>

            </div>
            <!-- My List contents -->
            <div class="row contents px-3 mt-4">
                <div class="row justify-content-between mx-auto">
                    <div class="col-4 d-flex flex-row">
                        <h3 class="fw-bold">My List</h3>
                        <button id="create-listing" class="create-btn btn px-3 ms-2 d-flex align-items-center h-75"><i
                                class="fa fa-plus-circle" aria-hidden="true" style="margin-right: 5px;"></i>Create
                            listing</button>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        {{-- <form action="#"> --}}
                        <label class="fw-bold" for="sort">Sort by</label>
                        <select class="px-3 py-1 h-75 ms-2 rounded" name="" id="sort">
                            <option selected disabled>{{ $status }}</option>
                            <option value="All">All</option>
                            <option value="Sale">Sale</option>
                            <option value="Exchange">Exchange</option>
                            <option value="Rent">Rent</option>
                        </select>
                        {{-- </form> --}}
                    </div>
                    <div class="row justify-content-center mb-5">

                        @foreach ($books as $book)
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <span id="status_{{ $book->id }}" hidden>{{ $book->status }}</span>
                                <span id="user_{{ $book->id }}" hidden>{{ $book->post_user }}</span>
                                <span id="edition_{{ $book->id }}" hidden>{{ $book->edition }}</span>
                                <span id="condition_{{ $book->id }}" hidden>{{ $book->condition }}</span>
                                <span id="description_{{ $book->id }}" hidden>{{ $book->description }}</span>
                                <span id="language_{{ $book->id }}" hidden>{{ $book->language }}</span>
                                <span id="weight_{{ $book->id }}" hidden>{{ $book->weight }}</span>
                                <span id="width_{{ $book->id }}" hidden>{{ $book->width }}</span>
                                <span id="height_{{ $book->id }}" hidden>{{ $book->height }}</span>
                                <span id="length_{{ $book->id }}" hidden>{{ $book->length }}</span>
                                <span id="courier_{{ $book->id }}" hidden>{{ $book->courier }}</span>
                                <span id="price_{{ $book->id }}" hidden>{{ $book->price }}</span>

                                <span id="exchange_preferences_{{ $book->id }}"
                                    hidden>{{ $book->exchange_preferences }}</span>

                                <span id="rental_duration_{{ $book->id }}"
                                    hidden>{{ $book->rental_duration }}</span>
                                <span id="rental_terms_and_condition_{{ $book->id }}"
                                    hidden>{{ $book->rental_terms_and_condition }}</span>
                                <span id="security_deposit_{{ $book->id }}"
                                    hidden>{{ $book->security_deposit }}</span>

                                <img id="photo_{{ $book->id }}" data-filename="{{ $book->book_photo }}"
                                    src="{{ asset('images/books/' . $book->book_photo) }}" class="img mx-auto p-2"
                                    alt="{{ $book->book_photo }}" width="180px" height="180px">
                                <div class="card-body py-0">
                                    <p id="title_{{ $book->id }}" class="card-title mb-0 fw-bold">
                                        {{ $book->title }}</p>
                                    <p id="author_{{ $book->id }}" class="card-text mt-0 mb-2">{{ $book->author }}
                                    </p>
                                    <p id="genre_{{ $book->id }}" class="card-text mt-0 mb-2"> {{ $book->genre }}
                                    </p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <a class="fw-bold p-0 edit-book"
                                            onclick="itemClicked('{{ $book->id }}')">Edit</a>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button
                                                class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                    src="../assets/like-icon.png" alt="like"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        {{-- create listing --}}
        <div class="modal fade" id="createListingModal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add listing for </h1>
                        <select name="" class="btn mx-2 fw-bold px-0 interaction-type" id="modal-category">
                            <option value="Sale">Sale</option>
                            <option value="Sale">Sale</option>
                            <option value="Exchange">Exchange</option>
                            <option value="Rent">Rent</option>
                        </select>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <!-- sale -->
                    <div id="sale">
                        <form id="sale-form" action="/mylist/salepost" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body container-fluid px-5">

                                <div class="row">
                                    <div class="col-5 me-1 px-0 border mb-2 rounded">
                                        <input type="text" name="post_user"
                                            value="{{ session('first_name') . ' ' . session('last_name') }}" hidden>
                                        <input type="text" name="weight" id="sale-weight" hidden>
                                        <input type="text" name="width" id="sale-width" hidden>
                                        <input type="text" name="height" id="sale-height" hidden>
                                        <input type="text" name="length" id="sale-length" hidden>
                                        <input type="text" name="courier" id="sale-courier" hidden>

                                        <input type="file" name="book_photo" id="sale-image" accept="image/*"
                                            hidden>
                                        <label for="sale-image" class="position-relative w-100 h-100"
                                            style="cursor: pointer;">
                                            <img id="sale-book-image" src="../assets/image.png" alt="image"
                                                class="img-fluid position-absolute top-50 start-50 translate-middle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-title="Click to Upload Image" width="170" height="170">
                                        </label>

                                    </div>

                                    <div class="col">
                                        <select name="genre" id="" class="form-control form-select"
                                            style="margin-bottom: 12px; color: #003060;">
                                            <option>Genre</option>
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
                                        {{-- <input type="text" class="form-control" id="list-name" placeholder="Enter wish list name" style="margin-bottom: 12px; color: #003060;"> --}}
                                        <input type="text" name="price" id="price" class="form-control"
                                            id="list-name" placeholder="Price"
                                            style="margin-bottom: 12px; color: #003060;">
                                        <button type="button" id="sale-shipping-fee-btn" class="form-control"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Click to open shipping form"
                                            style="text-align: justify; margin-bottom: 12px;">
                                            Shipping Fee
                                        </button>
                                        <select name="condition" id="" class="form-control form-select"
                                            style="margin-bottom: 12px; color: #003060;">
                                            <option>Condition</option>
                                            <option value="Old">Old</option>
                                            <option value="Fairly new">Fairly new</option>
                                            <option value="New">New</option>
                                        </select>
                                        <select name="language" class="form-control form-select" id=""
                                            style="margin-bottom: 12px; color: #003060;">
                                            <option>Language</option>
                                            <option value="English" selected>English</option>
                                        </select>
                                    </div>
                                    <input type="text" name="title" class="form-control" placeholder="Title"
                                        style="margin-bottom: 12px; color: #003060;">
                                    <input type="text" name="author" class="form-control" placeholder="Author"
                                        style="margin-bottom: 12px; color: #003060;">
                                    <input type="text" name="edition" id="edition-sale" class="form-control"
                                        placeholder="Edition" style="margin-bottom: 12px; color: #003060;">
                                    <textarea name="description" id="description" class="form-control" cols="30" rows="4"
                                        placeholder="Description" style="margin-bottom: 12px; color: #003060;"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="submit" class="btn mx-auto w-25 text-white rounded-3"
                                    style="background-color: #E55B13;">List</button>
                            </div>
                        </form>
                    </div>

                    <!-- exchange -->
                    <div id="exchange" class="modal-body container-fluid px-5">
                        <form id="exchange-form" action="/mylist/exchangepost" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-5 me-1 border px-0 mb-2 rounded">
                                    <input type="text" name="post_user"
                                        value="{{ session('first_name') . ' ' . session('last_name') }}" hidden>
                                    <input type="text" name="weight" id="exchange-weight" hidden>
                                    <input type="text" name="width" id="exchange-width" hidden>
                                    <input type="text" name="height" id="exchange-height" hidden>
                                    <input type="text" name="length" id="exchange-length" hidden>
                                    <input type="text" name="courier" id="exchange-courier" hidden>

                                    <input type="file" name="book_photo" id="exchange-image" class="d-none">
                                    <label for="exchange-image" class="position-relative w-100 h-100"
                                        style="cursor: pointer;">
                                        <img id="exchange-book-image" src="../assets/image.png" alt="image"
                                            class="img-fluid position-absolute top-50 start-50 translate-middle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            data-bs-title="Click to Upload Image" width="170" height="170">
                                    </label>

                                </div>
                                <div class="col">
                                    <select name="genre" id="" class="form-control form-select"
                                        style="margin-bottom: 12px; color: #003060;">
                                        <option>Genre</option>
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
                                    <input type="text" name="edition" id="edition-exchange" class="form-control"
                                        placeholder="Edition" style="margin-bottom: 12px; color: #003060;">
                                    <button type="button" id="exchange-shipping-fee-btn" class="form-control"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Click to open shipping form"
                                        style="text-align: justify; margin-bottom: 12px;">
                                        Shipping Fee
                                    </button>
                                    <select name="condition" id="" class="form-control form-select"
                                        style="margin-bottom: 12px; color: #003060;">
                                        <option>Condition</option>
                                        <option value="Old">Old</option>
                                        <option value="Fairly new">Fairly new</option>
                                        <option value="New">New</option>
                                    </select>
                                    <select name="language" class="form-control form-select" id=""
                                        style="margin-bottom: 12px; color: #003060;">
                                        <option>Language</option>
                                        <option value="English" selected>English</option>
                                    </select>
                                </div>
                                <input type="text" name="title" class="form-control" placeholder="Title"
                                    style="margin-bottom: 12px; color: #003060;">
                                <input type="text" name="author" class="form-control" placeholder="Author"
                                    style="margin-bottom: 12px; color: #003060;">
                                <textarea name="exchange_preferences" id="exchange-preferences" class="form-control" cols="30" rows="4"
                                    placeholder="Exchange Preferences" style="margin-bottom: 12px; color: #003060;"></textarea>
                                <textarea name="description" id="description" class="form-control" cols="30" rows="4"
                                    placeholder="Description" style="margin-bottom: 12px; color: #003060;"></textarea>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="submit" class="btn mx-auto w-25 text-white rounded-3"
                                    style="background-color: #E55B13;">List</button>
                            </div>
                        </form>
                    </div>

                    <!-- rent -->
                    <div id="rent">
                        <form id="rent-form" action="/mylist/rentpost" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body container-fluid px-5">
                                <div class="row">
                                    <div class="col-5 px-0 me-1 border mb-2 rounded">
                                        <input type="text" name="post_user"
                                            value="{{ session('first_name') . ' ' . session('last_name') }}" hidden>
                                        <input type="text" name="weight" id="rent-weight" hidden>
                                        <input type="text" name="width" id="rent-width" hidden>
                                        <input type="text" name="height" id="rent-height" hidden>
                                        <input type="text" name="length" id="rent-length" hidden>
                                        <input type="text" name="courier" id="rent-courier" hidden>

                                        <input type="file" name="book_photo" id="rent-image" class="d-none">
                                        <label for="rent-image" class="position-relative w-100 h-100"
                                            style="cursor: pointer;">
                                            <img id="rent-book-image" src="../assets/image.png" alt="image"
                                                class="img-fluid position-absolute top-50 start-50 translate-middle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-title="Click to Upload Image" width="170" height="170">
                                        </label>

                                    </div>
                                    <div class="col">
                                        <select name="genre" id="" class="form-control form-select"
                                            style="margin-bottom: 12px; color: #003060;">
                                            <option>Genre</option>
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
                                        <select name="condition" id="" class="form-control form-select"
                                            style="margin-bottom: 12px; color: #003060;">
                                            <option>Condition</option>
                                            <option value="Old">Old</option>
                                            <option value="Fairly new">Fairly new</option>
                                            <option value="New">New</option>
                                        </select>
                                        <button type="button" id="rent-shipping-fee-btn" class="form-control"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Click to open shipping form"
                                            style="text-align: justify; margin-bottom: 12px;">
                                            Shipping Fee
                                        </button>
                                        <input type="text" name="price" id="rental-price" class="form-control"
                                            placeholder="Rental Price" style="margin-bottom: 12px; color: #003060;">
                                        <input type="text" name="security_deposit" class="form-control"
                                            placeholder="Security Deposit"
                                            style="margin-bottom: 12px; color: #003060;">
                                    </div>
                                    <input type="text" name="title" class="form-control" placeholder="Title"
                                        style="margin-bottom: 12px; color: #003060;">
                                    <input type="text" name="author" class="form-control" placeholder="Author"
                                        style="margin-bottom: 12px; color: #003060;">
                                    <input type="text" name="edition" class="form-control" placeholder="Edition"
                                        style="margin-bottom: 12px; color: #003060;">
                                    <select name="language" class="form-control form-select" id=""
                                        style="margin-bottom: 12px; color: #003060;">
                                        <option>Language</option>
                                        <option value="English" selected>English</option>
                                    </select>
                                    <input type="text" name="rental_duration" class="form-control"
                                        placeholder="Rental Duration" style="margin-bottom: 12px; color: #003060;">
                                    <textarea name="rental_terms_and_condition" id="exchange-preferences" class="form-control" cols="30"
                                        rows="4" placeholder="Rental Terms and Condition" style="margin-bottom: 12px; color: #003060;"></textarea>
                                    <textarea name="description" id="" class="form-control" cols="30" rows="4"
                                        placeholder="Description" style="margin-bottom: 12px; color: #003060;"></textarea>
                                </div>

                            </div>
                            <div class="modal-footer border-0">
                                <button type="submit" id="submit" class="btn mx-auto w-25 text-white rounded-3"
                                    style="background-color: #E55B13;">List</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- update listing modal --}}
        <div class="modal fade" id="updateListingModal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Listing</h1>

                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <select name="" class="btn mx-5 fw-bold px-0" id="edit-modal-category"
                        style="background-color: #EDF8FF;">
                        <option value="Sale">Sale</option>
                        <option value="Sale">Sale</option>
                        <option value="Exchange">Exchange</option>
                        <option value="Rent">Rent</option>
                    </select>
                    <input type="text" id="edit-book-id" hidden>
                    <!-- sale -->
                    <div id="edit-sale-div">
                        <form id="edit-sale-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body container-fluid px-5">

                                <div class="row">
                                    <div class="col-5 me-1 px-0 border mb-2 rounded">
                                        <input type="text" name="post_user"
                                            value="{{ session('first_name') . ' ' . session('last_name') }}" hidden>
                                        <input type="text" name="weight" id="edit-sale-weight" hidden>
                                        <input type="text" name="width" id="edit-sale-width" hidden>
                                        <input type="text" name="height" id="edit-sale-height" hidden>
                                        <input type="text" name="length" id="edit-sale-length" hidden>
                                        <input type="text" name="courier" id="edit-sale-courier" hidden>

                                        <input type="file" name="book_photo" id="edit-sale-image"
                                            accept="image/*" hidden>
                                        <label for="edit-sale-image" class="position-relative w-100 h-100"
                                            style="cursor: pointer;">
                                            <img id="edit-sale-book-image" src="../assets/image.png" alt="image"
                                                class="img-fluid position-absolute top-50 start-50 translate-middle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-title="Click to Upload Image" width="170" height="170">
                                        </label>

                                    </div>
                                    <div class="col">
                                        <select name="genre" id="edit-sale-genre"
                                            class="w-100 mb-2 px-3 bg-light rounded">
                                            <option>Genre</option>
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
                                        <input type="text" name="price" id="edit-sale-price"
                                            class="w-100 mb-2 px-3 rounded" placeholder="Price">
                                        <button type="button" id="edit-sale-shipping-fee-btn"
                                            class="btn w-100 mb-2 px-3 rounded shipping-btn text-start py-0"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Click to open shipping form">
                                            Shipping Fee
                                        </button>
                                        <select name="condition" id="edit-sale-condition"
                                            class="w-100 mb-2 px-3 bg-light rounded">
                                            <option>Condition</option>
                                            <option value="Old">Old</option>
                                            <option value="Fairly new">Fairly new</option>
                                            <option value="New">New</option>
                                        </select>
                                        <select name="language" class="w-100 mb-2 px-3 bg-light rounded"
                                            id="edit-sale-language">
                                            <option>Language</option>
                                            <option value="English" selected>English</option>
                                        </select>
                                    </div>
                                    <input type="text" id="edit-sale-title" name="title"
                                        class="w-100 mb-2 px-3 rounded" placeholder="Title">
                                    <input type="text" id="edit-sale-author" name="author"
                                        class="w-100 mb-2 px-3 rounded" placeholder="Author">
                                    <input type="text" id="edit-sale-edition" name="edition" id="edition-sale"
                                        class="w-100 mb-2 px-3 rounded" placeholder="Edition">
                                    <textarea name="description" id="edit-sale-description" class="px-3 rounded" cols="30" rows="4"
                                        placeholder="Description"></textarea>
                                </div>

                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" id="sale-update" class="btn mx-auto w-25 text-white rounded-3"
                                    style="background-color: #E55B13;">Update</button>
                                <button type="button" id="sale-delete" class="btn mx-auto w-25 bg-light rounded-3"
                                    style="color: #E55B13; border: 1px solid #E55B13;">Delete</button>
                            </div>
                        </form>
                    </div>

                    <!-- exchange -->
                    <div id="edit-exchange-div" class="modal-body container-fluid px-5">
                        <form id="exchange-form" action="/mylist/exchangepost" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-5 me-1 border px-0 mb-2 rounded">
                                    <input type="text" name="post_user"
                                        value="{{ session('first_name') . ' ' . session('last_name') }}" hidden>
                                    <input type="text" name="weight" id="edit-exchange-weight" hidden>
                                    <input type="text" name="width" id="edit-exchange-width" hidden>
                                    <input type="text" name="height" id="edit-exchange-height" hidden>
                                    <input type="text" name="length" id="edit-exchange-length" hidden>
                                    <input type="text" name="courier" id="edit-exchange-courier" hidden>

                                    <input type="file" name="book_photo" id="edit-exchange-image" class="d-none">
                                    <label for="edit-exchange-image" class="position-relative w-100 h-100"
                                        style="cursor: pointer;">
                                        <img id="edit-exchange-book-image" src="../assets/image.png" alt="image"
                                            class="img-fluid position-absolute top-50 start-50 translate-middle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            data-bs-title="Click to Upload Image" width="170" height="170">
                                    </label>

                                </div>
                                <div class="col">
                                    <select name="genre" id="edit-exchange-genre"
                                        class="w-100 mb-2 px-3 bg-light rounded">
                                        <option>Genre</option>
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
                                    <input type="text" name="edition" id="edit-exchange-edition"
                                        class="w-100 mb-2 px-3 rounded" placeholder="Edition">
                                    <button type="button" id="edit-exchange-shipping-fee-btn"
                                        class="btn w-100 mb-2 px-3 rounded shipping-btn text-start py-0"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Click to open shipping form">
                                        Shipping Fee
                                    </button>
                                    <select name="condition" id="edit-exchange-condition"
                                        class="w-100 mb-2 px-3 bg-light rounded">
                                        <option>Condition</option>
                                        <option value="Old">Old</option>
                                        <option value="Fairly new">Fairly new</option>
                                        <option value="New">New</option>
                                    </select>
                                    <select name="language" class="w-100 mb-2 px-3 bg-light rounded"
                                        id="edit-exchange-language">
                                        <option>Language</option>
                                        <option value="English" selected>English</option>
                                    </select>
                                </div>
                                <input type="text" id="edit-exchange-title" name="title"
                                    class="w-100 mb-2 px-3 rounded" placeholder="Title">
                                <input type="text" id="edit-exchange-author" name="author"
                                    class="w-100 mb-2 px-3 rounded" placeholder="Author">
                                <textarea name="exchange_preferences" id="edit-exchange-preferences" class="px-3 rounded mb-2" cols="30"
                                    rows="4" placeholder="Exchange Preferences"></textarea>
                                <textarea name="description" id="edit-exchange-description" class="px-3 rounded" cols="30" rows="4"
                                    placeholder="Description"></textarea>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" id="update" class="btn mx-auto w-25 text-white rounded-3"
                                    style="background-color: #E55B13;">Update</button>
                                <button type="button" id="delete" class="btn mx-auto w-25 bg-light rounded-3"
                                    style="color: #E55B13; border: 1px solid #E55B13;">Delete</button>
                            </div>
                        </form>
                    </div>

                    <!-- rent -->
                    <div id="edit-rent-div">
                        <form id="rent-form" action="/mylist/rentpost" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body container-fluid px-5">
                                <div class="row">
                                    <div class="col-5 px-0 me-1 border mb-2 rounded">
                                        <input type="text" name="post_user"
                                            value="{{ session('first_name') . ' ' . session('last_name') }}" hidden>
                                        <input type="text" name="weight" id="edit-rent-weight" hidden>
                                        <input type="text" name="width" id="edit-rent-width" hidden>
                                        <input type="text" name="height" id="edit-rent-height" hidden>
                                        <input type="text" name="length" id="edit-rent-length" hidden>
                                        <input type="text" name="courier" id="edit-rent-courier" hidden>

                                        <input type="file" name="book_photo" id="edit-rent-image" class="d-none">
                                        <label for="edit-rent-image" class="position-relative w-100 h-100"
                                            style="cursor: pointer;">
                                            <img id="edit-rent-book-image" src="../assets/image.png" alt="image"
                                                class="img-fluid position-absolute top-50 start-50 translate-middle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-title="Click to Upload Image" width="170" height="170">
                                        </label>

                                    </div>
                                    <div class="col">
                                        <select name="genre" id="edit-rent-genre"
                                            class="w-100 mb-2 px-3 bg-light rounded">
                                            <option>Genre</option>
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
                                        <select name="condition" id="edit-rent-condition"
                                            class="w-100 mb-2 px-3 bg-light rounded">
                                            <option>Condition</option>
                                            <option value="Old">Old</option>
                                            <option value="Fairly new">Fairly new</option>
                                            <option value="New">New</option>
                                        </select>
                                        <button type="button" id="edit-rent-shipping-fee-btn"
                                            class="btn w-100 mb-2 px-3 rounded shipping-btn text-start py-0"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Click to open shipping form">
                                            Shipping Fee
                                        </button>
                                        <input type="text" name="price" id="edit-rent-rental-price"
                                            class="w-100 mb-2 px-3 rounded" placeholder="Rental Price">
                                        <input type="text" name="security_deposit" id="edit-rent-security-deposit"
                                            class="w-100 mb-2 px-3 rounded" placeholder="Security Deposit">
                                    </div>
                                    <input type="text" name="title" id="edit-rent-title"
                                        class="w-100 mb-2 px-3 rounded" placeholder="Title">
                                    <input type="text" name="author" id="edit-rent-author"
                                        class="w-100 mb-2 px-3 rounded" placeholder="Author">
                                    <input type="text" name="edition" id="edit-rent-edition"
                                        class="w-100 mb-2 px-3 rounded" placeholder="Edition">
                                    <select name="language" class="w-100 mb-2 px-3 bg-light rounded"
                                        id="edit-rent-language">
                                        <option>Language</option>
                                        <option value="English" selected>English</option>
                                    </select>
                                    <input type="text" name="rental_duration" id="edit-rent-rental-duration"
                                        class="w-100 mb-2 px-3 rounded" placeholder="Rental Duration">
                                    <textarea name="rental_terms_and_condition" id="edit-rent-rental-terms-and-condition" class="px-3 rounded mb-2"
                                        cols="30" rows="4" placeholder="Rental Terms and Condition"></textarea>
                                    <textarea name="description" id="edit-rent-description" class="px-3 rounded" cols="30" rows="4"
                                        placeholder="Description"></textarea>
                                </div>

                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" id="update" class="btn mx-auto w-25 text-white rounded-3"
                                    style="background-color: #E55B13;">Update</button>
                                <button type="button" id="delete" class="btn mx-auto w-25 bg-light rounded-3"
                                    style="color: #E55B13; border: 1px solid #E55B13;">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- shipping fee --}}
        <div class="modal fade" id="shipping-fee" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button id="back-shipping" class="btn text-decoration-none"><img src="assets/left_arrow.png"
                                alt="back"></button>
                        <h3 class="modal-title fs-6" id="staticBackdropLabel">Shipping Fee</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-2 px-4">
                        <span class="m-0 p-0" style="color: #737679; text-align: justify; font-size: 15px">Please fill
                            in dimensions accurately. Inaccurate or missing dimensions may result in additional shipping
                            fee or failed delivery.</span>
                        <input type="number" name="weight" id="weight"
                            class="w-50 mt-3 ms-2 mb-3 px-3 py-1 fs-6 rounded" placeholder="Weight (kg)"><br>

                        <label class="fw-bold" for="size">Packaging Size</label><br>
                        <input id="width" name="width" type="number"
                            class="w-50 ms-2 mt-1 mb-2 px-3 py-1 fs-6 rounded" placeholder="Width (cm)"><br>
                        <input id="height" name="height" type="number"
                            class="w-50 ms-2 mb-2 px-3 py-1 fs-6 rounded" placeholder="Height (cm)"><br>
                        <input id="length" name="length" type="number"
                            class="w-50 ms-2 mb-3 px-3 py-1 fs-6 rounded" placeholder="Length (cm)"><br>

                        <label class="fw-bold" for="courier">Please Select Courier</label><br>
                        <input id="jrs" class="ms-2" name="courier" type="radio" value="JRS Express">
                        <label for="jrs">JRS Express</label><br>
                        <input id="jt" class="ms-2" name="courier" type="radio" value="J&T Express">
                        <label for="jt">J&T Express</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="shipping-save-btn" class="btn mx-auto w-25 text-white rounded-3"
                            style="background-color: #E55B13;">Save</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- edit shipping fee --}}
        <div class="modal fade" id="edit-shipping-fee" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button id="edit-back-shipping" class="btn text-decoration-none"><img
                                src="assets/left_arrow.png" alt="back"></button>
                        <h3 class="modal-title fs-6" id="staticBackdropLabel">Shipping Fee</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-2 px-4">
                        <span class="m-0 p-0" style="color: #737679; text-align: justify; font-size: 15px">Please fill
                            in dimensions accurately. Inaccurate or missing dimensions may result in additional shipping
                            fee or failed delivery.</span>
                        <input type="number" name="weight" id="edit-weight"
                            class="w-50 mt-3 ms-2 mb-3 px-3 py-1 fs-6 rounded" placeholder="Weight (kg)"><br>

                        <label class="fw-bold" for="size">Packaging Size</label><br>
                        <input id="edit-width" name="width" type="number"
                            class="w-50 ms-2 mt-1 mb-2 px-3 py-1 fs-6 rounded" placeholder="Width (cm)"><br>
                        <input id="edit-height" name="height" type="number"
                            class="w-50 ms-2 mb-2 px-3 py-1 fs-6 rounded" placeholder="Height (cm)"><br>
                        <input id="edit-length" name="length" type="number"
                            class="w-50 ms-2 mb-3 px-3 py-1 fs-6 rounded" placeholder="Length (cm)"><br>

                        <label class="fw-bold" for="courier">Please Select Courier</label><br>
                        <input id="edit-jrs" class="ms-2" name="courier" type="radio" value="JRS Express">
                        <label for="edit-jrs">JRS Express</label><br>
                        <input id="edit-jt" class="ms-2" name="courier" type="radio" value="J&T Express">
                        <label for="edit-jt">J&T Express</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="shipping-save-btn" class="btn mx-auto w-25 text-white rounded-3"
                            style="background-color: #E55B13;">Save</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
{{-- </div> --}}

@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])
<script>
    // update    
    var edit_modal = document.getElementById('edit-modal-category');

    function itemClicked(card) {
        var status = document.getElementById('status_' + card);
        var user = document.getElementById('user_' + card);
        var img = document.getElementById('photo_' + card);
        var title = document.getElementById('title_' + card);
        var author = document.getElementById('author_' + card);
        var edition = document.getElementById('edition_' + card);
        var genre = document.getElementById('genre_' + card);
        var condition = document.getElementById('condition_' + card);
        var description = document.getElementById('description_' + card);
        var language = document.getElementById('language_' + card);
        var weight = document.getElementById('weight_' + card);
        var width = document.getElementById('width_' + card);
        var height = document.getElementById('height_' + card);
        var length = document.getElementById('length_' + card);
        var courier = document.getElementById('courier_' + card);
        var price = document.getElementById('price_' + card);
        var exchange_preferences = document.getElementById('exchange_preferences_' + card);
        var rental_duration = document.getElementById('rental_duration_' + card);
        var rental_terms_and_condition = document.getElementById('rental_terms_and_condition_' + card);
        var security_deposit = document.getElementById('security_deposit_' + card);

        edit_modal.value = status.textContent;

        // alert(status.textContent);
        // alert(titleId.getAttribute('data-filename'));              

        if (edit_modal.value == 'Sale') {
            document.getElementById('edit-sale-weight').value = weight.textContent;
            document.getElementById('edit-sale-width').value = width.textContent;
            document.getElementById('edit-sale-height').value = height.textContent;
            document.getElementById('edit-sale-length').value = length.textContent;
            document.getElementById('edit-sale-courier').value = courier.textContent;

            document.getElementById('edit-book-id').value = card;
            // document.getElementById('edit-sale-image').value = img.getAttribute('data-filename');
            document.getElementById('edit-sale-book-image').src = img.src;
            document.getElementById('edit-sale-genre').value = genre.textContent.trim();
            document.getElementById('edit-sale-price').value = price.textContent.trim();
            document.getElementById('edit-sale-condition').value = condition.textContent.trim();
            document.getElementById('edit-sale-language').value = language.textContent.trim();
            document.getElementById('edit-sale-title').value = title.textContent.trim();
            document.getElementById('edit-sale-author').value = author.textContent.trim();
            document.getElementById('edit-sale-edition').value = edition.textContent.trim();
            document.getElementById('edit-sale-description').value = description.textContent.trim();

            document.getElementById('edit-weight').value = weight.textContent.trim();
            document.getElementById('edit-width').value = width.textContent.trim();
            document.getElementById('edit-height').value = height.textContent.trim();
            document.getElementById('edit-length').value = length.textContent.trim();
            if (courier.textContent == "JRS Express") {
                document.getElementById('edit-jrs').checked = true;
            } else if (courier.textContent == "J&T Express") {
                document.getElementById('edit-jt').checked = true;
            }
            // alert(img.getAttribute('data-filename'));

            document.getElementById("edit-sale-div").style.display = "flex";
            document.getElementById("edit-exchange-div").style.display = "none";
            document.getElementById("edit-rent-div").style.display = "none";
        } else if (edit_modal.value == 'Exchange') {
            document.getElementById('edit-exchange-weight').value = weight.textContent;
            document.getElementById('edit-exchange-width').value = width.textContent;
            document.getElementById('edit-exchange-height').value = height.textContent;
            document.getElementById('edit-exchange-length').value = length.textContent;
            document.getElementById('edit-exchange-courier').value = courier.textContent;

            document.getElementById('edit-book-id').value = card;
            document.getElementById('edit-exchange-book-image').src = img.src;
            document.getElementById('edit-exchange-genre').value = genre.textContent.trim();
            document.getElementById('edit-exchange-condition').value = condition.textContent.trim();
            document.getElementById('edit-exchange-language').value = language.textContent.trim();
            document.getElementById('edit-exchange-title').value = title.textContent.trim();
            document.getElementById('edit-exchange-author').value = author.textContent.trim();
            document.getElementById('edit-exchange-edition').value = edition.textContent.trim();
            document.getElementById('edit-exchange-preferences').value = exchange_preferences.textContent.trim();
            document.getElementById('edit-exchange-description').value = description.textContent.trim();

            document.getElementById('edit-weight').value = weight.textContent.trim();
            document.getElementById('edit-width').value = width.textContent.trim();
            document.getElementById('edit-height').value = height.textContent.trim();
            document.getElementById('edit-length').value = length.textContent.trim();
            if (courier.textContent == "JRS Express") {
                document.getElementById('edit-jrs').checked = true;
            } else if (courier.textContent == "J&T Express") {
                document.getElementById('edit-jt').checked = true;
            }

            document.getElementById("edit-sale-div").style.display = "none";
            document.getElementById("edit-exchange-div").style.display = "flex";
            document.getElementById("edit-rent-div").style.display = "none";
        } else if (edit_modal.value == 'Rent') {
            document.getElementById('edit-rent-weight').value = weight.textContent;
            document.getElementById('edit-rent-width').value = width.textContent;
            document.getElementById('edit-rent-height').value = height.textContent;
            document.getElementById('edit-rent-length').value = length.textContent;
            document.getElementById('edit-rent-courier').value = courier.textContent;

            document.getElementById('edit-book-id').value = card;
            document.getElementById('edit-rent-book-image').src = img.src;
            document.getElementById('edit-rent-genre').value = genre.textContent.trim();
            document.getElementById('edit-rent-condition').value = condition.textContent.trim();
            document.getElementById('edit-rent-rental-price').value = price.textContent.trim();
            document.getElementById('edit-rent-language').value = language.textContent.trim();
            document.getElementById('edit-rent-title').value = title.textContent.trim();
            document.getElementById('edit-rent-author').value = author.textContent.trim();
            document.getElementById('edit-rent-edition').value = edition.textContent.trim();
            document.getElementById('edit-rent-description').value = description.textContent.trim();
            document.getElementById('edit-rent-rental-duration').value = rental_duration.textContent;
            document.getElementById('edit-rent-rental-terms-and-condition').value = rental_terms_and_condition
                .textContent;
            document.getElementById('edit-rent-security-deposit').value = security_deposit.textContent;

            document.getElementById('edit-weight').value = weight.textContent.trim();
            document.getElementById('edit-width').value = width.textContent.trim();
            document.getElementById('edit-height').value = height.textContent.trim();
            document.getElementById('edit-length').value = length.textContent.trim();
            if (courier.textContent == "JRS Express") {
                document.getElementById('edit-jrs').checked = true;
            } else if (courier.textContent == "J&T Express") {
                document.getElementById('edit-jt').checked = true;
            }

            document.getElementById("edit-sale-div").style.display = "none";
            document.getElementById("edit-exchange-div").style.display = "none";
            document.getElementById("edit-rent-div").style.display = "flex";
        }
        updateListingModal.show();
    }

    var sale_update_btn = document.getElementById('sale-update');

    sale_update_btn.addEventListener('click', () => {
        var sale_form = document.getElementById('edit-sale-form');
        var book_id = document.getElementById('edit-book-id');

        sale_form.action = "/mylist/updateSale/" + book_id.value;
        sale_form.submit();
    })


    edit_modal.addEventListener('change', () => {
        if (edit_modal.value == 'Sale') {
            document.getElementById("edit-sale-div").style.display = "flex";
            document.getElementById("edit-exchange-div").style.display = "none";
            document.getElementById("edit-rent-div").style.display = "none";
        } else if (edit_modal.value == 'Exchange') {
            document.getElementById("edit-sale-div").style.display = "none";
            document.getElementById("edit-exchange-div").style.display = "flex";
            document.getElementById("edit-rent-div").style.display = "none";
        } else if (edit_modal.value == 'Rent') {
            document.getElementById("edit-sale-div").style.display = "none";
            document.getElementById("edit-exchange-div").style.display = "none";
            document.getElementById("edit-rent-div").style.display = "flex";
        }
    })

    // sort select    
    var sort_by = document.getElementById('sort');
    sort_by.addEventListener('change', function() {
        if (sort_by.value == "All") {
            window.location.href = "/mylist";
        } else if (sort_by.value == "Sale") {
            window.location.href = "/mylist/sale";
        } else if (sort_by.value == "Exchange") {
            window.location.href = "/mylist/exchange";
        } else if (sort_by.value == "Rent") {
            window.location.href = "/mylist/rent";
        }
    });
    // tool tips
    const SaleimageToolTip = document.getElementById('sale-book-image');
    const tooltipSaleImageShow = bootstrap.Tooltip.getOrCreateInstance(SaleimageToolTip);
    const ExchangeImageToolTip = document.getElementById('exchange-book-image');
    const tooltipExchangeImageShow = bootstrap.Tooltip.getOrCreateInstance(ExchangeImageToolTip);
    const RentImageToolTip = document.getElementById('rent-book-image');
    const tooltipRentImageShow = bootstrap.Tooltip.getOrCreateInstance(RentImageToolTip);
    const EditSaleimageToolTip = document.getElementById('edit-sale-book-image');
    const tooltipEditSaleImageShow = bootstrap.Tooltip.getOrCreateInstance(EditSaleimageToolTip);


    const SaleShippingToolTip = document.getElementById('sale-shipping-fee-btn');
    const tooltipSaleShippingShow = bootstrap.Tooltip.getOrCreateInstance(SaleShippingToolTip);
    const ExchangeShippingToolTip = document.getElementById('exchange-shipping-fee-btn');
    const tooltipExchangeShippingShow = bootstrap.Tooltip.getOrCreateInstance(ExchangeShippingToolTip);
    const RentShippingToolTip = document.getElementById('rent-shipping-fee-btn');
    const tooltipRentShippingShow = bootstrap.Tooltip.getOrCreateInstance(RentShippingToolTip); 

    const EditSaleShippingToolTip = document.getElementById('edit-sale-shipping-fee-btn');
    const tooltipEditSaleShippingShow = bootstrap.Tooltip.getOrCreateInstance(EditSaleShippingToolTip);


    // modals
    const createListingModal = new bootstrap.Modal('#createListingModal', {
        keyboard: false
    });

    const updateListingModal = new bootstrap.Modal('#updateListingModal', {
        keyboard: false
    });
    const shippingModal = new bootstrap.Modal('#shipping-fee', {
        keyboard: false
    });

    const editShippingModal = new bootstrap.Modal('#edit-shipping-fee', {
        keyboard: false
    });

    // buttons for modals
    var create_listing_btn = document.getElementById('create-listing');
    var back_btn = document.getElementById("back-shipping");
    var sale_shipping_fee_btn = document.getElementById('sale-shipping-fee-btn');
    var exchange_shipping_fee_btn = document.getElementById('exchange-shipping-fee-btn');
    var rent_shipping_fee_btn = document.getElementById('rent-shipping-fee-btn');
    var shipping_save_btn = document.getElementById('shipping-save-btn');

    var edit_back_btn = document.getElementById("edit-back-shipping");
    var edit_sale_shipping_fee_btn = document.getElementById('edit-sale-shipping-fee-btn');
    var edit_exchange_shipping_fee_btn = document.getElementById('edit-exchange-shipping-fee-btn');
    var edit_rent_shipping_fee_btn = document.getElementById('edit-rent-shipping-fee-btn');


    // shipping form inputs
    var weight = document.getElementById('weight');
    var width = document.getElementById('width');
    var height = document.getElementById('height');
    var length = document.getElementById('length');
    var jrsRadio = document.getElementById('jrs');
    var jtRadio = document.getElementById('jt');
    var courier;
    // hidden inputs for sale
    var sale_weight = document.getElementById('sale-weight');
    var sale_width = document.getElementById('sale-width');
    var sale_height = document.getElementById('sale-height');
    var sale_length = document.getElementById('sale-length');
    var sale_courier = document.getElementById('sale-courier');
    // hidden inputs for exchange
    var exchange_weight = document.getElementById('exchange-weight');
    var exchange_width = document.getElementById('exchange-width');
    var exchange_height = document.getElementById('exchange-height');
    var exchange_length = document.getElementById('exchange-length');
    var exchange_courier = document.getElementById('exchange-courier');
    // hidden inputs for rent
    var rent_weight = document.getElementById('rent-weight');
    var rent_width = document.getElementById('rent-width');
    var rent_height = document.getElementById('rent-height');
    var rent_length = document.getElementById('rent-length');
    var rent_courier = document.getElementById('rent-courier');
    create_listing_btn.addEventListener('click', function() {
        createListingModal.show();
    });
    back_btn.addEventListener("click", function() {
        shippingModal.hide();
        createListingModal.show();
    });
    sale_shipping_fee_btn.addEventListener('click', function() {
        createListingModal.hide();
        shippingModal.show();
    });
    exchange_shipping_fee_btn.addEventListener('click', function() {
        createListingModal.hide();
        shippingModal.show();
    });
    rent_shipping_fee_btn.addEventListener('click', function() {
        createListingModal.hide();
        shippingModal.show();
    });

    edit_back_btn.addEventListener('click', () => {
        editShippingModal.hide();
        updateListingModal.show();
    });

    edit_sale_shipping_fee_btn.addEventListener('click', () => {
        updateListingModal.hide();
        editShippingModal.show()
    });

    edit_exchange_shipping_fee_btn.addEventListener('click', () => {
        updateListingModal.hide();
        editShippingModal.show()
    });

    edit_rent_shipping_fee_btn.addEventListener('click', () => {
        updateListingModal.hide();
        editShippingModal.show()
    });


    var sale_form = document.getElementById('sale-form');
    var exchange_form = document.getElementById('exchange-form');
    var rent_form = document.getElementById('rent-form');
    sale_form.addEventListener('submit', function(event) {
        sale_weight.value = weight.value;
        sale_width.value = width.value;
        sale_height.value = height.value;
        sale_length.value = length.value;
        sale_courier.value = courier;
    });
    exchange_form.addEventListener('submit', function(event) {
        exchange_weight.value = weight.value;
        exchange_width.value = width.value;
        exchange_height.value = height.value;
        exchange_length.value = length.value;
        exchange_courier.value = courier;
    });
    rent_form.addEventListener('submit', function(event) {
        rent_weight.value = weight.value;
        rent_width.value = width.value;
        rent_height.value = height.value;
        rent_length.value = length.value;
        rent_courier.value = courier;
    });
    shipping_save_btn.addEventListener('click', function() {
        if (weight.value == "" || width.value == "" || height.value == "" || length.value == "") {
            alert("please complete every filleds");
        } else {
            if (jrsRadio.checked) {
                courier = jrsRadio.value;
            } else if (jtRadio.checked) {
                courier = jtRadio.value;
            } else {
                courier = null;
            }
            sale_weight.value = weight.value;
            sale_width.value = width.value;
            sale_height.value = height.value;
            sale_length.value = length.value;
            sale_courier.value = courier;
            shippingModal.hide();
            createListingModal.show();
        }
    });
    var list_category = document.getElementById("modal-category");
    list_category.addEventListener("change", function() {
        // console.log(String(list_category.value));
        if (list_category.value == "Sale") {
            document.getElementById("sale").style.display = "flex";
            document.getElementById("exchange").style.display = "none";
            document.getElementById("rent").style.display = "none";
        } else if (list_category.value == "Exchange") {
            document.getElementById("sale").style.display = "none";
            document.getElementById("exchange").style.display = "flex";
            document.getElementById("rent").style.display = "none";
        } else if (list_category.value == "Rent") {
            document.getElementById("sale").style.display = "none";
            document.getElementById("exchange").style.display = "none";
            document.getElementById("rent").style.display = "flex";
        }
    });
    // uploading image
    var sale_image_upload = document.getElementById("sale-image");
    var exchange_image_upload = document.getElementById("exchange-image");
    var rent_image_upload = document.getElementById("rent-image");
    sale_image_upload.addEventListener("change", function() {
        var image = document.getElementById("sale-book-image");
        image.src = URL.createObjectURL(event.target.files[0]);
    });
    exchange_image_upload.addEventListener("change", function() {
        var image = document.getElementById("exchange-book-image");
        image.src = URL.createObjectURL(event.target.files[0]);
    });
    rent_image_upload.addEventListener("change", function() {
        var image = document.getElementById("rent-book-image");
        image.src = URL.createObjectURL(event.target.files[0]);
    });

    // uploading edit image
    var edit_sale_image_upload = document.getElementById("edit-sale-image");
    var exchange_image_upload = document.getElementById("exchange-image");
    var rent_image_upload = document.getElementById("rent-image");

    edit_sale_image_upload.addEventListener("change", function() {
        var image = document.getElementById("edit-sale-book-image");
        image.src = URL.createObjectURL(event.target.files[0]);
    });

    exchange_image_upload.addEventListener("change", function() {
        var image = document.getElementById("exchange-book-image");
        image.src = URL.createObjectURL(event.target.files[0]);
    });

    rent_image_upload.addEventListener("change", function() {
        var image = document.getElementById("rent-book-image");
        image.src = URL.createObjectURL(event.target.files[0]);
    });
</script>
{{-- <script src="{{ asset('/js/app-homepage.js') }}"></script> --}}
