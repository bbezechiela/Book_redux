@include('partials.__header', [
'title' => 'User Reviews and Ratings | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/singleProduct-style.css',
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
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="/myprofile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="/mypurchase">My Purchase</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="/addresses">Addresses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="/changepassword">Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/reviewsandratings">User Reviews and
                        Ratings</a>
                </li>
            </ul>
        </ul>
        <div class="reviews-container">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">User Reviews and Ratings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link" href="#">My Reviews</a>
                </li>
        </div>
        <div class="ratings-review">
            <div class="card-body rating-details-review">
                <nav class="nav nav-pills flex-column flex-sm-row">
                    <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;"
                        aria-current="page" href="#">Sold Rating</a>
                    <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                        href="#">Exchange
                        Rating</a>
                    <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                        href="#">Rented
                        Rating</a>
                    <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                        href="#">Bought
                        Rating</a>
                    <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                        href="#">Lent
                        Rating</a>
                </nav>
            </div>
            <div class="container text-center review-rating-details">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="rating-info">
                                <h4>4.9</h4>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ratings">
                            <a href="#" class="btn btn-primary active d-block rate-button" role="button"
                                data-bs-toggle="button" aria-pressed="true"
                                style="background-color: #003060; border-color: #003060;">All
                                <span>(10)</span></a>
                            <a href="#" class="btn btn-primary d-block rate-button" role="button"
                                data-bs-toggle="button">3 Star
                                <span>(20)</span></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ratings">
                            <a href="#" class="btn btn-primary d-block rate-button" role="button"
                                data-bs-toggle="button" aria-pressed="true">5 Star <span>(100)</span></a>
                            <a href="#" class="btn btn-primary d-block rate-button" role="button"
                                data-bs-toggle="button">2 Star
                                <span>(20)</span></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ratings">
                            <a href="#" class="btn btn-primary d-block rate-button" role="button"
                                data-bs-toggle="button" aria-pressed="true">4 star <span>(10)</span></a>
                            <a href="#" class="btn btn-primary d-block rate-button" role="button"
                                data-bs-toggle="button">1 Star
                                <span>(59)</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center customer-ratings">
            <div class="row align-items-center">
                <div class="d-flex align-items-center">
                    <img src="../assets/nestine.png" alt="seller image" class="customer-picture">
                    <div class="customer-ratings-info">
                        <p>N******nnn <a href="" data-bs-toggle="modal" data-bs-target="#report">Report</a></p>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <p style="font-weight: bold;">Exchange</p>
                        <p>22/07/2023 <span>11.03</span></p>
                        <p>Condition: <span>10/10</span></p>
                        <p>Accuracy of Description: <span>10/10</span></p>
                        <p>Interaction: <span>10/10</span></p>
                        <p>Nice book. Good job Exchanger!</p>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <img src="../assets/bubble_bath.png" alt="Image 1" class="d-inline square-picture">
                                    <img src="../assets/b2 1.png" alt="Image 2" class="d-inline square-picture">
                                    <img src="../assets/bubble_bath.png" alt="Image 3" class="d-inline square-picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center customer-ratings">
            <div class="row align-items-center">
                <div class="d-flex align-items-center">
                    <img src="../assets/nestine.png" alt="seller image" class="customer-picture">
                    <div class="customer-ratings-info">
                        <p>N******nnn <a href="#" data-bs-toggle="modal" data-bs-target="#report">Report</a></p>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <p style="font-weight: bold;">Exchange</p>
                        <p>22/07/2023 <span>11.03</span></p>
                        <p>Condition: <span>10/10</span></p>
                        <p>Accuracy of Description: <span>10/10</span></p>
                        <p>Interaction: <span>10/10</span></p>
                        <p>Nice book. Good job Exchanger!</p>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <img src="../assets/bubble_bath.png" alt="Image 1" class="d-inline square-picture">
                                    <img src="../assets/b2 1.png" alt="Image 2" class="d-inline square-picture">
                                    <img src="../assets/bubble_bath.png" alt="Image 3" class="d-inline square-picture">
                                </div>
                            </div>
                        </div>
                    </div>
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