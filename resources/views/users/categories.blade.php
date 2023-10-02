@include('partials.__header', [
    'title' => 'Home | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/categories-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <div id="body-container" class="container-fluid px-0">
            <div id="sidebar" class="sidebar p-2 min-vh-100">
                <x-sidebar />
            </div>
            <div id="content" class="pe-0 border content">
                <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
                    <div class="w-100 d-flex justify-content-between mt-1 p-0">
                        <input class="border rounded-3 px-3 w-100" type="text" placeholder="Search">
                        <a href="/" class="pb-2 px-2"><img class="img" src="../assets/Book_Logo.png"
                                alt="Logo"></a>
                    </div>
                    <div class="dropdown">
                    <a class="btn dropdown-toggle drpdwn-genre" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Educational</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="educational-anchor" href="#educational">Educational</a></li>
                        <li><a class="dropdown-item" id="historical-fiction-anchor" href="#historical_fiction">Historical Fiction</a></li>
                        <li><a class="dropdown-item" id="poetry-prose-anchor" href="#poetry_prose">Poetry & Prose</a></li>
                        <li><a class="dropdown-item" id="self-help-anchor" href="#self_help">Self-Help</a></li>
                    </ul>
                    </div>
                    <div class="dropdown">
                    <a class="btn dropdown-toggle drpdwn-genre" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Romance & Saga</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="romance-saga-anchor" href="#romance_saga">Romance & Saga</a></li>
                        <li><a class="dropdown-item" id="science-fiction-anchor" href="#science_fiction">Science Fiction</a></li>
                    </ul>
                    </div>
                    <div class="dropdown">
                    <a class="btn dropdown-toggle drpdwn-genre" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Fantasy & Adventure</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="fantasy-adventure-anchor" href="#fantasy_adventure">Fantasy & Adventure</a></li>
                        <li><a class="dropdown-item" id="young-adult-anchor" href="#young_adult">Young Adult</a></li>
                    </ul>
                    </div>
                    <div class="dropdown">
                    <a class="btn dropdown-toggle drpdwn-genre" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mystery & Suspense</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="mystery-suspense-anchor" href="#mystery_suspense">Mystery & Suspense</a></li>
                        <li><a class="dropdown-item" id="crime-thriller-anchor" href="#crime_thriller">Crime & Thriller</a></li>
                        <li><a class="dropdown-item" id="horror-supernatural-anchor" href="#horror_supernatural">Horror & Supernatural</a></li>
                    </ul>
                    </div>
                    <div class="dropdown">
                    <a class="btn dropdown-toggle drpdwn-genre" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Comedy & Satire</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="comedy-satire-anchor" href="#comedy_satire">Comedy & Satire</a></li>
                        <li><a class="dropdown-item" id="nonfiction-biography-anchor" href="#nonfiction_biography">Non-Fiction & Biography</a></li>
                    </ul>
                    </div>
                </ul>
                <!--  Educational -->
                <div id="educational" class="mx-2 px-3">
                    <h4 id="educational-header">Educational</h4>
                    <div id="content-cards" class="w-100 mx-2 d-flex px-4 overflow-x-auto" style="height: 300px; ">
                        <!-- card Educational -->
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="historical_fiction" class="mx-2 px-3">
                    <h4 id="historical-fiction-header">Historical Fiction</h4>
                    <div class="w-100mx-2 d-flex px-4 overflow-x-auto" style="height: 300px; ">
                        <!-- card Historical Fiction -->
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="poetry_prose" class="mx-2 px-3">
                    <h4 id="poetry-prose-header">Poetry & Prose</h4>
                    <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                        <!-- card Poetry & Prose -->
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="self_help" class="mx-2 px-3">
                    <h4 id="self-help-header">Self-Help</h4>
                    <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                        <!-- card Self-Help -->
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="romance_saga" class="mx-2 px-3">
                    <h4 id="romance-saga-header">Romance & Saga</h4>
                    <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                        <!-- card Romance & Saga -->
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="science_fiction" class="mx-2 px-3">
                    <h4 id="science-fiction-header">Science Fiction</h4>
                    <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                        <!-- card Science Fiction -->
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="fantasy_adventure" class="mx-2 mb-4 px-3">
                    <h4 id="fantasy-adventure-header">Fantasy & Adventure</h4>
                    <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                        <!-- card Fantasy & Adventure -->
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="young_adult" class="mx-2 px-3">
                    <h4 id="young-adult-header">Young Adult</h4>
                    <div id="content-cards" class="w-100 mx-2 d-flex px-4 overflow-x-auto" style="height: 300px; ">
                        <!-- card Young Adult -->
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mystery_suspense" class="mx-2 px-3">
                    <h4 id="mystery-suspense-header">Mystery & Suspense</h4>
                    <div class="w-100mx-2 d-flex px-4 overflow-x-auto" style="height: 300px; ">
                        <!-- card Mystery & Suspense -->
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="crime_thriller" class="mx-2 px-3">
                    <h4 id="crime-thriller-header">Crime & Thriller</h4>
                    <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                        <!-- card Crime & Thriller -->
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="horror_supernatural" class="mx-2 px-3">
                    <h4 id="horror-supernatural-header">Horror & Supernatural</h4>
                    <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                        <!-- card Horror & Supernatural -->
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="comedy_satire" class="mx-2 px-3">
                    <h4 id="comedy-satire-header">Comedy & Satire</h4>
                    <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                        <!-- card Comedy & Satire-->
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="nonfiction_biography" class="mx-2 px-3">
                    <h4 id="nonfiction-biography-header">Non-Fiction & Biography</h4>
                    <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                        <!-- card Non-Fiction & Biography -->
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-1" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- EDUCATIONAL CONTENT -->
     <div id="educational-content" class="educational-content mt-3 w-100">
                    <h4 class="text-center educational_text mx-5 pb-2">EDUCATIONAL</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-container">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- HISTORICAL FICTION CONTENT -->
                <div id="historical-fiction-content" class="historical-fiction-content mt-3 w-100">
                    <h4 class="text-center historical_fiction_text mx-5 pb-2">HISTORICAL FICTION</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px;"></i></button>
                                        <button class="add-button"><i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-container">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- POETRY & PROSE CONTENT -->
                <div id="poetry-prose-content" class="poetry-prose-content mt-3 w-100">
                    <h4 class="text-center poetry_prose_text mx-5 pb-2">POETRY & PROSE</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-container">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- SELF-HELP CONTENT -->
                <div id="self-help-content" class="self-help-content mt-3 w-100">
                    <h4 class="text-center self_help_text mx-5 pb-2">SELF-HELP</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-container">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- ROMANCE & SAGA CONTENT -->
                <div id="romance-saga-content" class="romance-saga-content mt-3 w-100">
                    <h4 class="text-center romance_saga_text mx-5 pb-2">ROMANCE & SAGA</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-container">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- SCIENCE FICTION CONTENT -->
                <div id="science-fiction-content" class="science-fiction-content mt-3 w-100">
                    <h4 class="text-center science_fiction_text mx-5 pb-2">SCIENCE FICTION</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-container">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- FANTASY & ADVENTURE -->
                <div id="fantasy-adventure-content" class="fantasy-adventure-content mt-3 w-100">
                    <h4 class="text-center fantasy_adventure_text mx-5 pb-2">FANTASY & ADVENTURE</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-container">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                 <!-- YOUNG ADULT CONTENT -->
                 <div id="young-adult-content" class="young-adult-content mt-3 w-100">
                    <h4 class="text-center young_adult_text mx-5 pb-2">YOUNG ADULT</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-container">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- MYSTERY & SUSPENSE CONTENT -->
                <div id="mystery-suspense-content" class="mystery-suspense-content mt-3 w-100">
                    <h4 class="text-center mystery_suspense_text mx-5 pb-2">MYSTERY & SUSPENSE</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px;"></i></button>
                                        <button class="add-button"><i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-container">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- CRIME & THRILLER CONTENT -->
                <div id="crime-thriller-content" class="crime-thriller-content mt-3 w-100">
                    <h4 class="text-center crime_thriller_text mx-5 pb-2">CRIME & THRILLER</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-container">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- HORROR & SUPERNATURAL CONTENT -->
                <div id="horror-supernatural-content" class="horror-supernatural-content mt-3 w-100">
                    <h4 class="text-center horror_supernatural_text mx-5 pb-2">HORROR & SUPERNATURAL</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-container">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- COMEDY & SATIRE CONTENT -->
                <div id="comedy-satire-content" class="comedy-satire-content mt-3 w-100">
                    <h4 class="text-center comedy_satire_text mx-5 pb-2">COMEDY & SATIRE</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-container">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- NON-FICTION & BIOGRAPHY CONTENT -->
                <div id="nonfiction-biography-content" class="nonfiction-biography-content mt-3 w-100">
                    <h4 class="text-center nonfiction_biography_text mx-5 pb-2">NON-FICTION & BIOGRAPHY</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-1 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="button-container">
                                        <button class="like-button"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i></button>
                                        <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle add-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-container">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
    </div>
     

    @include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])

<script>
    var sidebar_width = document.getElementById("sidebar").offsetWidth;
    var content_width = document.getElementById("content");

    var home_sidebar = document.getElementById("home-side-btn");
    var wishlist_sidebar = document.getElementById("wishlist-side-btn");
    var my_list = document.getElementById("myList-side-btn");

    var educational_anchor = document.getElementById("educational-anchor");
    var historical_fiction_anchor = document.getElementById("historical-fiction-anchor");
    var poetry_prose_anchor = document.getElementById("poetry-prose-anchor");
    var self_help_anchor = document.getElementById("self-help-anchor");
    var romance_saga_anchor = document.getElementById("romance-saga-anchor");
    var science_fiction_anchor = document.getElementById("science-fiction-anchor")
    var fantasy_adventure_anchor = document.getElementById("fantasy-adventure-anchor");
    var young_adult_anchor = document.getElementById("young-adult-anchor");
    var mystery_suspense_anchor = document.getElementById("mystery-suspense-anchor");
    var crime_thriller_anchor = document.getElementById("crime-thriller-anchor");
    var horror_supernatural_anchor = document.getElementById("horror-supernatural-anchor");
    var comedy_satire_anchor = document.getElementById("comedy-satire-anchor")
    var nonfiction_biography_anchor = document.getElementById("nonfiction-biography-anchor");

    var iframe = document.getElementById("content-frame");

    // partial templates
    var educational_cards = document.getElementById("educational");
    var historical_fiction_cards = document.getElementById("historical_fiction");
    var poetry_prose_cards = document.getElementById("poetry_prose");
    var self_help_cards = document.getElementById("self_help");
    var romance_saga_cards = document.getElementById("romance_saga");
    var science_fiction_cards = document.getElementById("science_fiction");
    var fantasy_adventure_cards = document.getElementById("fantasy_adventure");
    var young_adult_cards = document.getElementById("young_adult");
    var mystery_suspense_cards = document.getElementById("mystery_suspense");
    var crime_thriller_cards = document.getElementById("crime_thriller");
    var horror_supernatural_cards = document.getElementById("horror_supernatural");
    var comedy_satire_cards = document.getElementById("comedy_satire");
    var nonfiction_biography_cards = document.getElementById("nonfiction_biography");


    var educational_btn = document.getElementById("educational-header");
    var historical_fiction_btn = document.getElementById("historical-fiction-header");
    var poetry_prose_btn = document.getElementById("poetry-prose-header");
    var self_help_btn = document.getElementById("self-help-header");
    var romance_saga_btn = document.getElementById("romance-saga-header");
    var science_fiction_btn = document.getElementById("science-fiction-header");
    var fantasy_adventure_btn = document.getElementById("fantasy-adventure-header");
    var young_adult_btn = document.getElementById("young-adult-header");
    var mystery_suspense_btn = document.getElementById("mystery-suspense-header");
    var crime_thriller_btn = document.getElementById("crime-thriller-header");
    var horror_supernatural_btn = document.getElementById("horror-supernatural-header");
    var comedy_satire_btn = document.getElementById("comedy-satire-header");
    var nonfiction_biography_btn = document.getElementById("nonfiction-biography-header");


    educational_btn.addEventListener("click", function() {
        educational_cards.style.display = "none";
        historical_fiction_cards.style.display = "none";
        poetry_prose_cards.style.display = "none";
        self_help_cards.style.display = "none";
        romance_saga_cards.style.display = "none";
        science_fiction_cards.style.display = "none";
        fantasy_adventure_cards.style.display = "none";
        young_adult_cards.style.display = "none";
        mystery_suspense_cards.style.display = "none";
        crime_thriller_cards.style.display = "none";
        horror_supernatural_cards.style.display = "none";
        comedy_satire_cards.style.display = "none";
        nonfiction_biography_cards.style.display = "none";
        document.getElementById("educational-content").style.display = "table";
    });

    historical_fiction_btn.addEventListener("click", function() {
        educational_cards.style.display = "none";
        historical_fiction_cards.style.display = "none";
        poetry_prose_cards.style.display = "none";
        self_help_cards.style.display = "none";
        romance_saga_cards.style.display = "none";
        science_fiction_cards.style.display = "none";
        fantasy_adventure_cards.style.display = "none";
        young_adult_cards.style.display = "none";
        mystery_suspense_cards.style.display = "none";
        crime_thriller_cards.style.display = "none";
        horror_supernatural_cards.style.display = "none";
        comedy_satire_cards.style.display = "none";
        nonfiction_biography_cards.style.display = "none";
        document.getElementById("historical-fiction-content").style.display = "table";
    });

    poetry_prose_btn.addEventListener("click", function() {
        educational_cards.style.display = "none";
        historical_fiction_cards.style.display = "none";
        poetry_prose_cards.style.display = "none";
        self_help_cards.style.display = "none";
        romance_saga_cards.style.display = "none";
        science_fiction_cards.style.display = "none";
        fantasy_adventure_cards.style.display = "none";
        young_adult_cards.style.display = "none";
        mystery_suspense_cards.style.display = "none";
        crime_thriller_cards.style.display = "none";
        horror_supernatural_cards.style.display = "none";
        comedy_satire_cards.style.display = "none";
        nonfiction_biography_cards.style.display = "none";
        document.getElementById("poetry-prose-content").style.display = "table";
    });

    self_help_btn.addEventListener("click", function() {
        educational_cards.style.display = "none";
        historical_fiction_cards.style.display = "none";
        poetry_prose_cards.style.display = "none";
        self_help_cards.style.display = "none";
        romance_saga_cards.style.display = "none";
        science_fiction_cards.style.display = "none";
        fantasy_adventure_cards.style.display = "none";
        young_adult_cards.style.display = "none";
        mystery_suspense_cards.style.display = "none";
        crime_thriller_cards.style.display = "none";
        horror_supernatural_cards.style.display = "none";
        comedy_satire_cards.style.display = "none";
        nonfiction_biography_cards.style.display = "none";
        document.getElementById("self-help-content").style.display = "table";
    });

    romance_saga_btn.addEventListener("click", function() {
        educational_cards.style.display = "none";
        historical_fiction_cards.style.display = "none";
        poetry_prose_cards.style.display = "none";
        self_help_cards.style.display = "none";
        romance_saga_cards.style.display = "none";
        science_fiction_cards.style.display = "none";
        fantasy_adventure_cards.style.display = "none";
        young_adult_cards.style.display = "none";
        mystery_suspense_cards.style.display = "none";
        crime_thriller_cards.style.display = "none";
        horror_supernatural_cards.style.display = "none";
        comedy_satire_cards.style.display = "none";
        nonfiction_biography_cards.style.display = "none";
        document.getElementById("romance-saga-content").style.display = "table";
    });

    science_fiction_btn.addEventListener("click", function() {
        educational_cards.style.display = "none";
        historical_fiction_cards.style.display = "none";
        poetry_prose_cards.style.display = "none";
        self_help_cards.style.display = "none";
        romance_saga_cards.style.display = "none";
        science_fiction_cards.style.display = "none";
        fantasy_adventure_cards.style.display = "none";
        young_adult_cards.style.display = "none";
        mystery_suspense_cards.style.display = "none";
        crime_thriller_cards.style.display = "none";
        horror_supernatural_cards.style.display = "none";
        comedy_satire_cards.style.display = "none";
        nonfiction_biography_cards.style.display = "none";
        document.getElementById("science-fiction-content").style.display = "table";
    });

    fantasy_adventure_btn.addEventListener("click", function() {
        educational_cards.style.display = "none";
        historical_fiction_cards.style.display = "none";
        poetry_prose_cards.style.display = "none";
        self_help_cards.style.display = "none";
        romance_saga_cards.style.display = "none";
        science_fiction_cards.style.display = "none";
        fantasy_adventure_cards.style.display = "none";
        young_adult_cards.style.display = "none";
        mystery_suspense_cards.style.display = "none";
        crime_thriller_cards.style.display = "none";
        horror_supernatural_cards.style.display = "none";
        comedy_satire_cards.style.display = "none";
        nonfiction_biography_cards.style.display = "none";
        document.getElementById("fantasy-adventure-content").style.display = "table";
    });

    young_adult_btn.addEventListener("click", function() {
        educational_cards.style.display = "none";
        historical_fiction_cards.style.display = "none";
        poetry_prose_cards.style.display = "none";
        self_help_cards.style.display = "none";
        romance_saga_cards.style.display = "none";
        science_fiction_cards.style.display = "none";
        fantasy_adventure_cards.style.display = "none";
        young_adult_cards.style.display = "none";
        mystery_suspense_cards.style.display = "none";
        crime_thriller_cards.style.display = "none";
        horror_supernatural_cards.style.display = "none";
        comedy_satire_cards.style.display = "none";
        nonfiction_biography_cards.style.display = "none";
        document.getElementById("young-adult-content").style.display = "table";
    });

    mystery_suspense_btn.addEventListener("click", function() {
        educational_cards.style.display = "none";
        historical_fiction_cards.style.display = "none";
        poetry_prose_cards.style.display = "none";
        self_help_cards.style.display = "none";
        romance_saga_cards.style.display = "none";
        science_fiction_cards.style.display = "none";
        fantasy_adventure_cards.style.display = "none";
        young_adult_cards.style.display = "none";
        mystery_suspense_cards.style.display = "none";
        crime_thriller_cards.style.display = "none";
        horror_supernatural_cards.style.display = "none";
        comedy_satire_cards.style.display = "none";
        nonfiction_biography_cards.style.display = "none";
        document.getElementById("mystery-suspense-content").style.display = "table";
    });

    crime_thriller_btn.addEventListener("click", function() {
        educational_cards.style.display = "none";
        historical_fiction_cards.style.display = "none";
        poetry_prose_cards.style.display = "none";
        self_help_cards.style.display = "none";
        romance_saga_cards.style.display = "none";
        science_fiction_cards.style.display = "none";
        fantasy_adventure_cards.style.display = "none";
        young_adult_cards.style.display = "none";
        mystery_suspense_cards.style.display = "none";
        crime_thriller_cards.style.display = "none";
        horror_supernatural_cards.style.display = "none";
        comedy_satire_cards.style.display = "none";
        nonfiction_biography_cards.style.display = "none";
        document.getElementById("crime-thriller-content").style.display = "table";
    });

    horror_supernatural_btn.addEventListener("click", function() {
        educational_cards.style.display = "none";
        historical_fiction_cards.style.display = "none";
        poetry_prose_cards.style.display = "none";
        self_help_cards.style.display = "none";
        romance_saga_cards.style.display = "none";
        science_fiction_cards.style.display = "none";
        fantasy_adventure_cards.style.display = "none";
        young_adult_cards.style.display = "none";
        mystery_suspense_cards.style.display = "none";
        crime_thriller_cards.style.display = "none";
        horror_supernatural_cards.style.display = "none";
        comedy_satire_cards.style.display = "none";
        nonfiction_biography_cards.style.display = "none";
        document.getElementById("horror-supernatural-content").style.display = "table";
    });

    comedy_satire_btn.addEventListener("click", function() {
        educational_cards.style.display = "none";
        historical_fiction_cards.style.display = "none";
        poetry_prose_cards.style.display = "none";
        self_help_cards.style.display = "none";
        romance_saga_cards.style.display = "none";
        science_fiction_cards.style.display = "none";
        fantasy_adventure_cards.style.display = "none";
        young_adult_cards.style.display = "none";
        mystery_suspense_cards.style.display = "none";
        crime_thriller_cards.style.display = "none";
        horror_supernatural_cards.style.display = "none";
        comedy_satire_cards.style.display = "none";
        nonfiction_biography_cards.style.display = "none";
        document.getElementById("comedy-satire-content").style.display = "table";
    });

    nonfiction_biography_btn.addEventListener("click", function() {
        educational_cards.style.display = "none";
        historical_fiction_cards.style.display = "none";
        poetry_prose_cards.style.display = "none";
        self_help_cards.style.display = "none";
        romance_saga_cards.style.display = "none";
        science_fiction_cards.style.display = "none";
        fantasy_adventure_cards.style.display = "none";
        young_adult_cards.style.display = "none";
        mystery_suspense_cards.style.display = "none";
        crime_thriller_cards.style.display = "none";
        horror_supernatural_cards.style.display = "none";
        comedy_satire_cards.style.display = "none";
        nonfiction_biography_cards.style.display = "none";
        document.getElementById("nonfiction-biography-content").style.display = "table";
    });

</script>