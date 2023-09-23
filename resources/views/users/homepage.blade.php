@include('partials.__header', [
    'title' => 'Home | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/homepage-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | BookRedux</title>
    <link rel="icon" href="{{ asset('/assets/Book_Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('/bootstrap/bootstrap.min.css') }}">    
</head> --}}

{{-- <body> --}}
    <div id="body-container" class="container-fluid px-0">
        {{-- <div class="row mx-0"> --}}
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
                    <div class="my-1 w-100">
                        <a class="mx-2" id="daily-discover-anchor" href="#daily-discover">Daily Discover</a>
                        <a class="mx-2" id="featured-anchor" href="#featured">Featured</a>
                        <a class="mx-2" id="recommended-anchor" href="#recommended">Recommended for you</a>
                        <a class="mx-2" id="check_this_out-anchor" href="#check_this_out">Check this out</a>
                        <a class="mx-2" id="for_sale-anchor" href="#for_sale">For sale</a>
                        <a class="mx-2" id="for_exchange-anchor" href="#for_exchange">For exchange</a>
                        <a class="mx-2" id="for_rent-anchor" href="#for_rent">For rent</a>
                        {{-- <a class="mx-2" id="for_rent-anchor" href="#for_rent">{{$firstName}}</a> --}}
                    </div>
                </ul>
                <div id="daily-discover" class="mx-2 px-3">
                    <h4 id="daily-discover-header">Daily Discover</h4>
                    <div id="content-cards" class="w-100 mx-2 d-flex px-4 overflow-x-auto" style="height: 300px; ">
                        <!-- card -->
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png"
                                                alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="featured" class="mx-2 px-3">
                    <h4 id="featured-header">Featured</h4>
                    <div class="w-100mx-2 d-flex px-4 overflow-x-auto" style="height: 300px; ">
                        <!-- card -->
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="recommended" class="mx-2 px-3">
                    <h4 id="recommended-header">Recommended for you</h4>
                    <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                        <!-- card -->
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="check_this_out" class="mx-2 px-3">
                    <h4 id="check-this-out-header">Check this out</h4>
                    <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                        <!-- card -->
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="for_sale" class="mx-2 px-3">
                    <h4 id="for-sale-header">For Sale</h4>
                    <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                        <!-- card -->
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="for_exchange" class="mx-2 px-3">
                    <h4 id="for-exchange-header">For Exchange</h4>
                    <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                        <!-- card -->
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="for_rent" class="mx-2 mb-4 px-3">
                    <h4 id="for-rent-header">For Rent</h4>
                    <div class="w-100mx-2 d-flex overflow-x-auto" style="height: 300px; ">
                        <!-- card -->
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DAILY DISCOVERY CONTENT -->
                <div id="daily-discovery-content" class="daily-discovery-content mt-3 w-100">
                    <h4 class="text-center daily_discovery_text mx-5 pb-2">DAILY DISCOVER</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FEATURED CONTEMT -->
                <div id="featured-content" class="daily-discovery-content mt-3 w-100">
                    <h4 class="text-center daily_discovery_text mx-5 pb-2">FEATURED</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RECOMMENDED FOR YOU CONTENT -->
                <div id="recommended-content" class="daily-discovery-content mt-3 w-100">
                    <h4 class="text-center daily_discovery_text mx-5 pb-2">RECOMMENDE FOR YOU</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CHECK THIS OUT CONTENT -->
                <div id="check-this-content" class="daily-discovery-content mt-3 w-100">
                    <h4 class="text-center daily_discovery_text mx-5 pb-2">CHEK THIS OUT</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FOR SALE CONTENT -->
                <div id="for-sale-content" class="daily-discovery-content mt-3 w-100">
                    <h4 class="text-center daily_discovery_text mx-5 pb-2">FOR SALE</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FOR EXCHANGE CONTENT -->
                <div id="for-exchange-content" class="daily-discovery-content mt-3 w-100">
                    <h4 class="text-center daily_discovery_text mx-5 pb-2">FOR EXCHANGE</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FOR RENT -->
                <div id="for-rent-content" class="daily-discovery-content mt-3 w-100">
                    <h4 class="text-center daily_discovery_text mx-5 pb-2">FOR RENT</h4>
                    <div class="row justify-content-center mx-5 mb-4">
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-3 m-2 shadow" style="width: 200px;">
                            <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                    Self Help</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <span class="fw-bold p-0">P100.00</span>
                                    <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                src="../assets/like-icon.png" alt="like"></button>
                                        <button
                                            class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center"
                                            data-bs-toggle="dropdown" aria-expanded="false"><img
                                                src="../assets/add.png" alt="add"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                            <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="container-fluid"> -->
                {{-- <div class="d-flex h-100 w-100">
                    <iframe id="content-frame" class="flex-fill w-100 border" src="./homepage-content.php"
                        frameborder="0"></iframe>
                </div> --}}
                <!-- </div> -->
            </div>
        </div>
    </div>
</body>
@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])
<script>
    var sidebar_width = document.getElementById("sidebar").offsetWidth;
    var content_width = document.getElementById("content");

    // window.addEventListener("resize", function () {
    //     content_width.style.marginLeft = sidebar_width + "px";
    // });
    // window.addEventListener("load", function() {
    //     content_width.style.paddingLeft = sidebar_width + "px";
    //     // this.alert(sidebar_width + "px");
    // });

    var home_sidebar = document.getElementById("home-side-btn");
    var wishlist_sidebar = document.getElementById("wishlist-side-btn");
    var my_list = document.getElementById("myList-side-btn");

    // home_sidebar.addEventListener("click", function() {
    //     my_list.style.backgroundColor = "#003060";
    //     home_sidebar.style.backgroundColor = "#2D6092"
    //     iframe.src = "./homepage-content.php";
    // });

    // wishlist_sidebar.addEventListener("click", function() {
    //     iframe.src = "./wishList.php";
    // });
    // my_list.addEventListener("click", function() {
    //     document.getElementById("home-side-btn").style.backgroundColor = "#003060";
    //     my_list.style.backgroundColor = "#2D6092";
    //     iframe.src = "./myList.php";
    // });

    var daily_discover_anchor = document.getElementById("daily-discover-anchor");
    var featured_anchor = document.getElementById("featured-anchor");
    var recommended_anchor = document.getElementById("recommended-anchor");
    var check_this_anchor = document.getElementById("check_this_out-anchor");
    var for_sale_anchor = document.getElementById("for_sale-anchor");
    var for_exchange_anchor = document.getElementById("for_exchange-anchor")
    var for_rent_anchor = document.getElementById("for_rent-anchor");

    var iframe = document.getElementById("content-frame");

    // partial templates
    var daily_discover_cards = document.getElementById("daily-discover");
    var featured_cards = document.getElementById("featured");
    var recommended_cards = document.getElementById("recommended");
    var check_this_out_cards = document.getElementById("check_this_out");
    var for_sale_cards = document.getElementById("for_sale");
    var for_exchange_cards = document.getElementById("for_exchange");
    var for_rent_cards = document.getElementById("for_rent");

    var daily_discover_btn = document.getElementById("daily-discover-header");
    var featured_btn = document.getElementById("featured-header");
    var recommended_btn = document.getElementById("recommended-header");
    var check_this_btn = document.getElementById("check-this-out-header");
    var for_sale_btn = document.getElementById("for-sale-header");
    var for_exchange_btn = document.getElementById("for-exchange-header");
    var for_rent_btn = document.getElementById("for-rent-header");

    daily_discover_btn.addEventListener("click", function() {
        // alert("bitch");
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        check_this_out_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        for_rent_cards.style.display = "none";
        document.getElementById("daily-discovery-content").style.display = "table";
    });

    featured_btn.addEventListener("click", function() {
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        check_this_out_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        for_rent_cards.style.display = "none";
        document.getElementById("featured-content").style.display = "table";
    });

    recommended_btn.addEventListener("click", function() {
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        check_this_out_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        for_rent_cards.style.display = "none";
        document.getElementById("recommended-content").style.display = "table";
    });

    check_this_btn.addEventListener("click", function() {
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        check_this_out_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        for_rent_cards.style.display = "none";
        document.getElementById("check-this-content").style.display = "table";
    });

    for_sale_btn.addEventListener("click", function() {
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        check_this_out_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        for_rent_cards.style.display = "none";
        document.getElementById("for-sale-content").style.display = "table";
    });

    for_exchange_btn.addEventListener("click", function() {
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        check_this_out_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        for_rent_cards.style.display = "none";
        document.getElementById("for-exchange-content").style.display = "table";
    });

    for_rent_btn.addEventListener("click", function() {
        daily_discover_cards.style.display = "none";
        featured_cards.style.display = "none";
        recommended_cards.style.display = "none";
        check_this_out_cards.style.display = "none";
        for_sale_cards.style.display = "none";
        for_exchange_cards.style.display = "none";
        for_rent_cards.style.display = "none";
        document.getElementById("for-rent-content").style.display = "table";
    });
</script>
{{-- <script src="{{ asset('/js/app-homepage.js') }}"></script> --}}


