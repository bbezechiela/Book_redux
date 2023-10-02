@include('partials.__header', [
    'title' => 'Home | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/singleProduct-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="body-container" class="container-fluid px-0">
                <div id="sidebar" class="sidebar p-2 min-vh-100"><x-sidebar /></div>
                    <div id="content" class="pe-0 border content">
                        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
                            <div class="w-100 d-flex justify-content-between mt-1 p-0">
                                <input class="border rounded-3 px-3 w-100" type="text" placeholder="Search">
                                <a href="/" class="pb-2 px-2"><img class="img" src="../assets/Book_Logo.png" alt="Logo"></a>
                            </div>
                        </ul>
                        <div class="row">
                        <div class="col-md-4">
                            <div class="card img-card" style="width: 15rem;">
                            <img src="../assets/yellow_book.png" class="card-img-top" alt="product"  width="100px" height="270px">
                            <div class="card-body text-center">
                                <a href="#" class="btn btn-primary total-likes"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i>100</a>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card w-80">
                            <div class="card-body">
                                <h5 class="card-title">Change your World Through Prayer</h5>
                                <p class="card-text">P100.00| <span>For Sale|</span> <span>Self-Help</span></p>

                                <p class="card-text">Shipping from <span>Tacloban to</span>
                                <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Catbalogan
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Sample 1</a></li>
                                    <li><a class="dropdown-item" href="#">Sample 2</a></li>
                                    <li><a class="dropdown-item" href="#">Sample 3</a></li>
                                </ul>
                                </div>
                                </p>
                                <p class="card-text">Shipping Fee <span>P0</span></p>
                                <p class="card-text">Author: <span>Ben Rowling</span></p>
                                <p class="card-text">Edition: <span>1st Edition</span></p>
                                <p class="card-text">Language: <span>English</span></p>
                                <p class="card-text">Condition: <span>Like New</span></p>
                                <p class="card-text">Product Description: <span>One of the most inspiring and impactful books ever written, The 7 Habits of Highly Effective People has captivated readers for nearly three decades. </span></p>

                                <a href="#" class="btn btn-primary cart-button"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right: 7px"></i>Add to Cart</a>
                                <a href="#" class="btn btn-primary wishlist-button"><i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 7px"></i>Add to Wishlist</a>
                            </div>
                            </div>
                        </div>
                        </div>


                    </div>
    </div>
</body>


@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])