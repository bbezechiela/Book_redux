@include('partials.__header', [
    'title' => 'My Likes | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/likes-style.css',
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
                            <a href="/" class="pb-2 px-2"><img class="img" src="../assets/Book_Logo.png" alt="Logo"></a>
                        </div>
                    </ul>
                    <div id="likes" class="mx-2 px-3">
                    <h4 id="likes-header">My Likes</h4>
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
                </div>
                    
    </div>

@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])
