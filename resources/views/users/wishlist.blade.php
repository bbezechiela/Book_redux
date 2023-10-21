@include('partials.__header', [
    'title' => 'Wish List | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/wishlist-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0">
    {{-- <div class="row mx-0"> --}}
    <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start" tabindex="-1"
        aria-labelledby="offcanvasExampleLabel">
        <x-sidebar />
    </div>
    <div id="content" class="pe-0 border content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">

            <div class="w-100 d-flex mt-1 p-0">
                <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i><img src="/assets/burger.png" alt="menu"></i>
                </button>
                <a href="/" class="px-2"><img class="img mt-2 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
                <input class="rounded-3 ms-2 px-3 w-25" type="text" placeholder="Search"
                    style="border: 1px solid #003060;">
                <button type="button" class="btn p-0"><img src="/assets/search.png" alt="search" width="20"
                        style="margin-left: -50px"></button>

            </div>
            <div class="position-absolute end-0">
                <button class="btn mx-1" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    data-bs-title="Messages"><img src="./assets/message.png" alt="message" width="25"></button>
                <button class="btn mx-1" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    data-bs-title="Notification"><img src="./assets/notification.png" alt="notification"
                        width="25"></button>
                <button class="btn mx-1 p-0" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    data-bs-title="Profile"><img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}"
                        alt="notification" width="40" height="35" class="rounded-3"></button>
                <a id="logout-btn" href="/logout" class="btn ms-1 me-4 py-2 fw-bold" data-bs-toggle="tooltip"
                    data-bs-placement="bottom" data-bs-title="Logout"><img src="/assets/logout.png" width="30"
                        height="30" alt="Logout"></a>
            </div>

        </ul>
        {{-- <ul class="nav bg-light sticky-top head-nav shadow py-3 px-4">
            <div class="w-100 d-flex justify-content-between mt-1 p-0">
                <input class="border rounded-3 px-3 w-100" type="text" placeholder="Search">
                <a href="/" class="pb-2 px-2"><img class="img" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
            </div>
        </ul> --}}
        <div class="container-fluid py-0 px-4">
            <div class="row mt-3 justify-content-between">
                <div class="col-4 d-flex flex-row">
                    <h2 class="fw-bold" style="margin-right: 10px;">Wish List</h2>
                    <button class="create-btn btn px-3 py-1 ms-2 d-flex align-items-center my-auto"
                        data-bs-toggle="modal" data-bs-target="#create-modal"><i class="fa fa-plus-circle"
                            aria-hidden="true" style="margin-right: 5px;"></i>Create Album</button>
                </div>
                <!-- <div class="col-4 d-flex justify-content-end">
                    <label class="fw-bold" for="sort">Sort by</label>
                    <select class="px-3 py-1 h-75 ms-2" name="" id="sort">
                        <option value="Author (A to Z)">Author (A to Z)</option>
                        <option value="Author(Z to A)">Author(Z to A)</option>
                        <option value="Date Added(Newest)">Date Added(Newest)</option>
                        <option value="Date Added(Oldest)">Date Added(Oldest)</option>
                        <option value="Title(A to Z)">Title(A to Z)</option>
                        <option value="Title(Z to A)">Title(Z to A)</option>
                    </select>
                </div> -->
            </div>
            <div class="wishlist mx-4 mt-2 ml-7">
                <h4>Nestine Wish List <button class="settings-button" data-bs-toggle="modal"
                        data-bs-target="#settings-modal"><i class="fa fa-cog" aria-hidden="true"></i></button></h4>
                <div class="mx-3 pb-3 d-flex overflow-x-auto">
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Another WIshlist -->
            <div class="wishlist mx-4 mt-2 ml-7">
                <h4>Eubert Wish List <button class="settings-button"><i class="fa fa-cog"
                            aria-hidden="true"></i></button></h4>
                <div class="mx-3 pb-3 d-flex overflow-x-auto">
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Another WIshlist -->
            <div class="wishlist mx-4 mt-2 ml-7">
                <h4>O'sama Wish List <button class="settings-button"><i class="fa fa-cog"
                            aria-hidden="true"></i></button></h4>
                <div class="mx-3 pb-3 d-flex overflow-x-auto">
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card mx-2 shadow p-3" style="width: 9rem; flex: 0 0 auto;">
                        <img src="../assets/brown_book.png" class="card-img-top" alt="bookimage">
                        <div class="card-body p-0">
                            <p class="card-text my-0 text-center custom-bg-color text-white">Magic Falling</p>
                            <a href="" class="d-flex align-items-center">
                                See more
                                <i class="fa fa-long-arrow-right" aria-hidden="true"
                                    style="margin-left: 9px; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Create Modal -->
        <div class="modal fade" id="create-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="create-modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 header-create">Create Album</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="list-name" class="form-label">List Name</label>
                            <input type="text" class="form-control" id="list-name"
                                placeholder="Enter wish list name" style="margin-bottom: 12px; color: #003060;">
                            <label for="privacy" class="form-label">Privacy</label>
                            <div class="form-group">
                                <select class="form-control form-select" aria-label="Select privacy"
                                    style="color: #003060;">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-create">Create</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Settings Modal -->
        <div class="modal fade" id="settings-modal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="create-modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 header-settings">Nestine Wish List Settings</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="list-name" class="form-label">List Name</label>
                            <input type="text" class="form-control" id="list-name"
                                placeholder="Enter wish list name" style="margin-bottom: 12px; color: #003060;">
                            <label for="privacy" class="form-label">Privacy</label>
                            <div class="form-group">
                                <select class="form-control form-select" aria-label="Select privacy"
                                    style="color: #003060;">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-delete">Delete</button>
                        <button type="button" class="btn btn-primary btn-update">Update</button>
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
