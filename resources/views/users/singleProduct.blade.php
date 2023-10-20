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

      <div class="card mb-3 mx-auto book-details">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../assets/yellow_book.png" class="img-fluid rounded-start" alt="product" width="300px"
              height="564px">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Change your World Through Prayer <a href="" data-bs-toggle="modal"
                  data-bs-target="#report">Report</a></h5>
              <h6 class="card-title"><span style="color: #E55B13; font-weight: bold;">₱100.00 </span> <span>| For Sale
                  |</span> <span>Self-Help</span></h6>
              <p class="card-text">
                Shipping From <span style="font-weight: bold;">Tacloban to</span>
                <span class="inline-dropdown">
                  <button class="btn dropdown-toggle places-button" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Catbalogan
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Sample 1</a></li>
                    <li><a class="dropdown-item" href="#">Sample 2</a></li>
                    <li><a class="dropdown-item" href="#">Sample 3</a></li>
                  </ul>
                </span>
              </p>
              <p class="card-text">Shipping Fee <span style="font-weight: bold;">₱0</span></p>
              <p class="card-text">Author: <span>Ben Rowling</span></p>
              <p class="card-text">Edition: <span>1st Edition</span></p>
              <p class="card-text">Language: <span>English</span></p>
              <p class="card-text">Condition: <span>Like New</span></p>
              <p class="card-text">Product Description: <span>One of the most inspiring and impactful books ever
                  written, The 7 Habits of Highly Effective People has captivated readers for nearly three decades.
                </span></p>
              <p class="card-text"><small class="text-body-secondary">Tacloban City, Eastern Visayas</small></p>
              <a href="#" class="btn btn-primary total-likes"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                  style="margin-right: 7px"></i>100</a>
              <a href="#" class="btn btn-primary cart-button"><i class="fa fa-cart-plus" aria-hidden="true"
                  style="margin-right: 7px"></i>Add to Cart</a>
              <a href="#" class="btn btn-primary wishlist-button"><i class="fa fa-list-alt" aria-hidden="true"
                  style="margin-right: 7px"></i>Add to Wishlist</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container text-center seller-details">
        <div class="row align-items-center">
          <div class="col">
            <div class="d-flex align-items-center">
              {{-- <div class="circle-picture"></div> --}}
              <img src="../assets/nestine.png" alt="seller image" class="circle-picture">
              <div class="user-info">
                <p>Nestine Nicole Navarro</p>
                <p>2K followers . 400 following</p>
                <p>Lives in Tacloban city</p>
                <button class="message-button"><i class="fa fa-envelope" aria-hidden="true"></i>Message</button>
                <button class="view-profile-button"><i class="fa fa-eye" aria-hidden="true"></i>View Profile</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="ratings">
              <p>Ratings <span class="rate">100</span></p>
              <p>Books Bought <span class="bought">20</span></p>
              <p>Books Lent <span class="lent">120</span></p>
            </div>
          </div>
          <div class="col">
            <div class="ratings">
              <p>Books Sold <span class="sold">203</span></p>
              <p>Books Exchanged <span class="exchange">59</span></p>
              <p>Books Rented <span class="rent">9</span></p>
            </div>
          </div>
        </div>
      </div>

      <div class="ratings-review">
        <div class="card-body rating-details">
          <h5 class="card-title">User Ratings and Reviews</h5>
          <nav class="nav nav-pills flex-column flex-sm-row">
            <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;" aria-current="page"
              href="#">Sold Rating</a>
            <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
              href="#">Exchange
              Rating</a>
            <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;" href="#">Rented
              Rating</a>
            <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;" href="#">Bought
              Rating</a>
            <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;" href="#">Lent
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
                <a href="#" class="btn btn-primary active d-block rate-button" role="button" data-bs-toggle="button"
                  aria-pressed="true" style="background-color: #003060; border-color: #003060;">All
                  <span>(10)</span></a>
                <a href="#" class="btn btn-primary d-block rate-button" role="button" data-bs-toggle="button">3 Star
                  <span>(20)</span></a>
              </div>
            </div>
            <div class="col">
              <div class="ratings">
                <a href="#" class="btn btn-primary d-block rate-button" role="button" data-bs-toggle="button"
                  aria-pressed="true">5 Star <span>(100)</span></a>
                <a href="#" class="btn btn-primary d-block rate-button" role="button" data-bs-toggle="button">2 Star
                  <span>(20)</span></a>
              </div>
            </div>
            <div class="col">
              <div class="ratings">
                <a href="#" class="btn btn-primary d-block rate-button" role="button" data-bs-toggle="button"
                  aria-pressed="true">4 star <span>(10)</span></a>
                <a href="#" class="btn btn-primary d-block rate-button" role="button" data-bs-toggle="button">1 Star
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

    {{-- <div class="row">
                        <div class="col-md-3">
                            <div class="card img-card" style="width: 20rem;">
                            <img src="../assets/yellow_book.png" class="card-img-top" alt="product"  width="100px" height="364px">
                            <div class="card-body text-center">
                                <a href="#" class="btn btn-primary total-likes"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="margin-right: 8px"></i>100</a>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card w-80 book-details">
                            <div class="card-body">
                                <h5 class="card-title">Change your World Through Prayer <a href="">Report</a></h5>
                                <h6 class="card-title"><span style="color: #E55B13; font-weight: bold;">₱100.00 </span> <span>| For Sale |</span> <span>Self-Help</span></h6>
                                <p class="card-text">
                                    Shipping From <span style="font-weight: bold;">Tacloban to</span>
                                    <span class="inline-dropdown">
                                      <button class="btn dropdown-toggle places-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Catbalogan
                                      </button>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Sample 1</a></li>
                                        <li><a class="dropdown-item" href="#">Sample 2</a></li>
                                        <li><a class="dropdown-item" href="#">Sample 3</a></li>
                                      </ul>
                                    </span>
                                  </p>
                                <p class="card-text">Shipping Fee <span style="font-weight: bold;">₱0</span></p>
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
                        </div> --}}

  </div>
  </div>

  <!-- Report Modal -->
  <div class="modal fade" id="report" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:#003060;">Select a Reason</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-check">
            <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
              Counterfeit and copyright
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
              Prohibited item
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
              Offensive or potentially offensive item
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault" style="color:#003060;">
              Fraudulent listing
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input check-report" type="checkbox" value="" id="flexCheckDefault">
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
          <button type="button" class="btn btn-primary report-button">Report</button>
        </div>
      </div>
    </div>
  </div>
</body>

@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])