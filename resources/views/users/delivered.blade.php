@include('partials.__header', [
    'title' => 'Delivered | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/orders-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 shadow">
        <x-sidebar />
    </div>
    {{-- <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start" tabindex="-1"
        aria-labelledby="offcanvasExampleLabel">
        <x-sidebar />
    </div> --}}
    <div id="content" class="content">
        <ul class="nav bg-light sticky-top head-nav shadow py-4 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                {{-- <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button> --}}
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5"
                        src="../assets/Book_Logo.png" alt="Logo"></a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    {{-- <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <input class="form-control rounded-3 search-field" type="text" placeholder="Search">
                    </div> --}}
                    {{-- <a href="/messages"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a>
                    <a href="/notification"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a> --}}
                    <ul class="nav py-profile justify-content-end">
                        <li class="nav-item dropdown">
                            <a href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                class="nav-link dropdown-toggle avatar" aria-expanded="false" title="profile">
                                <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}"
                                    alt="notification" width="35" height="35" class="rounded-5"
                                    style="margin-right: 2em;">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/myprofile">Profile</a></li>
                                <li><a class="dropdown-item" href="/mypurchase">My Purchase</a></li>
                                <li><a class="dropdown-item" href="/addresses">Addresses</a></li>
                                <li><a class="dropdown-item" href="/changepassword">Change Password</a></li>
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </ul>
        <div class="card-body rating-details">
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/orders">Orders</a>
                <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;" aria-current="page"
                    href="/delivered">Delivered</a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/dropped">Dropped</a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav-link" style="text-align: center;"
                    href="/refund">Refund</a>
            </nav>
        </div>

        @php
            $loopCount = 0;
        @endphp
        @foreach ($orders as $order)
            @foreach ($order->item as $item)
                @if ($item->order_status == 'received')
                    <div class="order-cart">
                        <div class="name-cart d-flex justify-content-between">
                            <div>
                                <a class="seller-name"
                                    href="/userlistings"><span>{{ $item->order->user->first_name . ' ' . $item->order->user->last_name }}</span></a>
                            </div>
                            <span class="order-text me-5 mt-0">Delivered</span>
                        </div>
                        <div class="product-cart">
                            <div class="book-details">
                                <div class="left-section">
                                    <img src="{{ asset('/images/books/' . $order->book_photo) }}" alt="book"
                                        width="80px" height="110px">
                                    <div class="book-info">
                                        <p class="mb-0 book-title">{{ $order->title }}</p>
                                        <p class="mb-0 book-qty">{{ $item->qty }} Qty</p>
                                        <p class="mb-0 fw-bold interaction-type">{{ $order->status }}</p>
                                        <p class="payment-mode">{{ $item->order->payment_method }}</p>
                                    </div>
                                </div>
                                <div class="right-section">
                                    <div class="book-price">
                                        <p class="product-price">₱{{ $order->price }}</p>
                                        <p class="text-total">Shipping Fee:<span class="product-total">₱130</span> <br>
                                        <p class="text-total">Total Payment:<span
                                                class="product-total">₱{{ $order->price + 130 }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="order-details">
                                <div class="order-message">
                                    @php
                                        $loopFlag = false;
                                        $rate_id = 0;

                                        if ($item->ratedItem->count() > 0) {
                                            foreach ($item->ratedItem as $review) {
                                                if ($review->item_id == $item->id && $review->user_id == session('id') && $loopFlag == false) {
                                                    $loopFlag = true;
                                                    $rate_id = $review->id;
                                                }
                                            }
                                        }
                                    @endphp
                                    @if ($loopFlag)
                                        <button type="button" class="post-btn" data-bs-toggle="modal"
                                            data-bs-target="#rate-review" {{-- onclick="editRating({{ $review->id }}, {{ $item->id }})">Edit --}}
                                            onclick="editRating({{ $rate_id }})">Edit
                                            Rating and Review</button>
                                    @else
                                        <button type="button" class="post-btn" data-bs-toggle="modal"
                                            data-bs-target="#rate-review"
                                            onclick="ratingReview({{ $item->order->user_id }}, '{{ $item->book->status }}', {{ $item->id }})">Post
                                            Rating and Review</button>
                                    @endif
                                </div>
                                <div class="button-group">
                                    <a href="/messages" type="button" class="btn btn-sm contact-button">Contact Customer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $loopCount++;
                    @endphp
                @endif
            @endforeach
        @endforeach
        @if ($loopCount == 0)
            <div class="w-100 mt-5 d-flex justify-content-center">
                <img class="img mt-3" src="../assets/broke-empty.png" alt="image" style="width: 15%">
            </div>
            <h1 class="text-warning mt-2 text-center fw-bold">No delivered orders</h1>
        @endif

        <!-- Rate and Review Modal -->
        <div class="modal fade" id="rate-review" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Rate and Review Customer</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="customer-details">
                                    <img src="../assets/eubert.png" id="user_img" alt="seller image"
                                        class="circle-picture">
                                    <div class="name-interaction">
                                        <p id="user_name">Marc Eubert Contado</p>
                                        <div class="rate">
                                            <i id="one-star" class="fa fa-star-o" style="cursor: pointer;"
                                                aria-hidden="true"></i>
                                            <i id="two-star" class="fa fa-star-o" style="cursor: pointer;"
                                                aria-hidden="true"></i>
                                            <i id="three-star" class="fa fa-star-o" style="cursor: pointer;"
                                                aria-hidden="true"></i>
                                            <i id="four-star" class="fa fa-star-o" style="cursor: pointer;"
                                                aria-hidden="true"></i>
                                            <i id="five-star" class="fa fa-star-o" style="cursor: pointer;"
                                                aria-hidden="true"></i>
                                        </div>
                                        {{-- <div class="dropdown">
                                            <button class="btn dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Interaction Type
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><button class="dropdown-item" type="button">Bought</button></li>
                                                <li><button class="dropdown-item" type="button">Exchange</button>
                                                </li>
                                                <li><button class="dropdown-item" type="button">Rent</button></li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="review-details">
                                <span id="review_id" hidden></span>
                                <span id="item-id" hidden></span>
                                <p>Interaction:
                                    {{-- <span>10/10</span> --}}
                                    <select class="btn" name="" id="interaction" required>
                                        {{-- <option >/10</option> --}}
                                        <option value="1/10">1/10</option>
                                        <option value="2/10">2/10</option>
                                        <option value="3/10">3/10</option>
                                        <option value="4/10">4/10</option>
                                        <option value="5/10">5/10</option>
                                        <option value="6/10">6/10</option>
                                        <option value="7/10">7/10</option>
                                        <option value="8/10">8/10</option>
                                        <option value="9/10">9/10</option>
                                        <option value="10/10">10/10</option>
                                    </select>
                                </p>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description:</label>
                                    <textarea class="form-control" id="description" rows="5" placeholder="Enter your text here..."></textarea>
                                </div>
                                </p>
                                <p>Photo:
                                <div class="image-container">
                                    <div class="image-holder">
                                        <input id="first-img" type="file" accept="image/*" class="d-none"
                                            required>
                                        <label for="first-img"><i id="first-plus" class="fa fa-plus"
                                                aria-hidden="true" style="cursor: pointer;"><img src=""
                                                    id="one-image" alt=""></i></label>
                                    </div>
                                    <div class="image-holder">
                                        <input id="second-img" type="file" accept="image/*" class="d-none">
                                        <label for="second-img"><i id="second-plus" class="fa fa-plus"
                                                aria-hidden="true" style="cursor: pointer;"><img src=""
                                                    id="two-image" alt=""></i></label>
                                    </div>
                                    <div class="image-holder">
                                        <input id="third-img" type="file" accept="image/*" class="d-none">
                                        <label for="third-img"><i id="three-plus" class="fa fa-plus"
                                                aria-hidden="true" style="cursor: pointer;"><img src=""
                                                    id="three-image" alt=""></i></label>
                                    </div>
                                    <div class="image-holder">
                                        <input id="fourth-img" type="file" accept="image/*" class="d-none">
                                        <label for="fourth-img"><i id="four-plus" class="fa fa-plus"
                                                aria-hidden="true" style="cursor: pointer;"><img src=""
                                                    id="four-image" alt=""></i></label>
                                    </div>
                                    <div class="image-holder">
                                        <input id="fifth-img" type="file" accept="image/*" class="d-none">
                                        <label for="fifth-img"><i id="five-plus" class="fa fa-plus"
                                                aria-hidden="true" style="cursor: pointer;"><img src=""
                                                    id="five-image" alt=""></i></label>
                                    </div>
                                </div>
                                </p>
                                <div class="col-4 d-flex justify-content-between show-text">
                                    <p>Show username on your rating/review</p>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="username-switch">
                                    </div>
                                </div>
                                <p class="username-text">Your username will be shown as <span>necxs</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" id="submit-btn" class="btn confirm-button">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rate and Review Modal -->
        {{-- <div class="modal fade" id="rental-period" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Rental Period Tracking</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="end-date" id="end-date" class="form-control"
                            placeholder="End Date" style="margin-bottom: 12px; color: #003060;">
                        <input type="text" name="start-date" id="start-date" class="form-control"
                            placeholder="Start Date" style="margin-bottom: 12px; color: #003060;">
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="Title" style="margin-bottom: 12px; color: #003060;">
                        <input type="text" name="rental-price" id="rental-price" class="form-control"
                            placeholder="Rental Price" style="margin-bottom: 12px; color: #003060;">
                        <input type="text" name="deposit" id="deposit" class="form-control"
                            placeholder="Security Deposit" style="margin-bottom: 12px; color: #003060;">
                        <input type="text" name="duration" id="duration" class="form-control"
                            placeholder="Duration" style="margin-bottom: 12px; color: #003060;">
                        <input type="text" name="customer-name" id="customer-name" class="form-control"
                            placeholder="Name" style="margin-bottom: 12px; color: #003060;">
                        <input type="text" name="contact" id="contact" class="form-control"
                            placeholder="Contact Number" style="margin-bottom: 12px; color: #003060;">
                        <input type="text" name="email" id="email" class="form-control"
                            placeholder="Email" style="margin-bottom: 12px; color: #003060;">
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn confirm-button">Submit</button>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
</div>

@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])

<script>
    var first_img = document.getElementById('first-img');
    var second_img = document.getElementById('second-img');
    var third_img = document.getElementById('third-img');
    var fourth_img = document.getElementById('fourth-img');
    var fifth_img = document.getElementById('fifth-img');

    var one_S = document.getElementById('one-star');
    var two_S = document.getElementById('two-star');
    var three_S = document.getElementById('three-star');
    var four_S = document.getElementById('four-star');
    var five_S = document.getElementById('five-star');

    var submit_btn = document.getElementById('submit-btn');
    var description = document.getElementById('description');
    var username_radio = document.getElementById('username-switch');
    var rate_val = 0;
    var submit_btn_status = '';

    first_img.addEventListener('change', () => {
        var img = document.getElementById('one-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('first-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });

    second_img.addEventListener('change', () => {
        var img = document.getElementById('two-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('second-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });

    third_img.addEventListener('change', () => {
        var img = document.getElementById('three-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('three-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });

    fourth_img.addEventListener('change', () => {
        var img = document.getElementById('four-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('four-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });

    fifth_img.addEventListener('change', () => {
        var img = document.getElementById('five-image');
        img.src = URL.createObjectURL(event.target.files[0]);
        document.getElementById('five-plus').className = 'fa p-0';
        img.style.width = '60px';
        img.style.height = '60px';
    });


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

    function star(rate) {
        if (rate == 0) {
            one_S.className = 'fa fa-star-o';
            two_S.className = 'fa fa-star-o';
            three_S.className = 'fa fa-star-o';
            four_S.className = 'fa fa-star-o';
            five_S.className = 'fa fa-star-o';
        } else if (rate == 1) {
            one_S.className = 'fa fa-star';
            two_S.className = 'fa fa-star-o';
            three_S.className = 'fa fa-star-o';
            four_S.className = 'fa fa-star-o';
            five_S.className = 'fa fa-star-o';
        } else if (rate == 2) {
            one_S.className = 'fa fa-star';
            two_S.className = 'fa fa-star';
            three_S.className = 'fa fa-star-o';
            four_S.className = 'fa fa-star-o';
            five_S.className = 'fa fa-star-o';
        } else if (rate == 3) {
            one_S.className = 'fa fa-star';
            two_S.className = 'fa fa-star';
            three_S.className = 'fa fa-star';
            four_S.className = 'fa fa-star-o';
            five_S.className = 'fa fa-star-o';
        } else if (rate == 4) {
            one_S.className = 'fa fa-star';
            two_S.className = 'fa fa-star';
            three_S.className = 'fa fa-star';
            four_S.className = 'fa fa-star';
            five_S.className = 'fa fa-star-o';
        } else if (rate == 5) {
            one_S.className = 'fa fa-star';
            two_S.className = 'fa fa-star';
            three_S.className = 'fa fa-star';
            four_S.className = 'fa fa-star';
            five_S.className = 'fa fa-star';
        }
    }

    function editRating(id) {
        // alert(id);
        fetch('/getrating/' + id, {
                method: 'GET'
            })
            .then(response => response.json())
            .then(result => {
                console.log(result);
                document.getElementById('user_img').src = 'images/profile_photos/' + result.item.order.user.profile_photo;
                if (result.item.order.user.type == 'Bookseller') {
                    document.getElementById('user_name').textContent = result.item.order.user.business_name;
                } else {
                    document.getElementById('user_name').textContent = result.item.order.user.first_name + ' ' + result.item.order.user.last_name;
                }                
                document.getElementById('review_id').textContent = result.id;
                star(result.rate_value);
                interaction.value = result.interaction;
                description.value = result.description;

                if (result.first_img != undefined) {
                    document.getElementById('one-image').src = '/images/rate_images/' + result.first_img;
                    document.getElementById('first-plus').className = 'fa p-0';
                    document.getElementById('one-image').style.width = '60px';
                    document.getElementById('one-image').style.height = '60px';
                }

                if (result.second_img != undefined) {
                    document.getElementById('two-image').src = '/images/rate_images/' + result.second_img;
                    document.getElementById('second-plus').className = 'fa p-0';
                    document.getElementById('two-image').style.width = '60px';
                    document.getElementById('two-image').style.height = '60px';
                }

                if (result.third_img != undefined) {
                    document.getElementById('three-image').src = '/images/rate_images/' + result.third_img;
                    document.getElementById('three-plus').className = 'fa p-0';
                    document.getElementById('three-image').style.width = '60px';
                    document.getElementById('three-image').style.height = '60px';
                }

                if (result.fourth_img != undefined) {
                    document.getElementById('four-image').src = '/images/rate_images/' + result.fourth_img;
                    document.getElementById('four-plus').className = 'fa p-0';
                    document.getElementById('four-image').style.width = '60px';
                    document.getElementById('four-image').style.height = '60px';
                }

                if (result.fifth_img != undefined) {
                    document.getElementById('five-image').src = '/images/rate_images/' + result.fifth_img;
                    document.getElementById('five-plus').className = 'fa p-0';
                    document.getElementById('five-image').style.width = '60px';
                    document.getElementById('five-image').style.height = '60px';
                }
            })
            .catch(error => console.error(error));

        submit_btn.textContent = 'Edit';
        submit_btn_status = 'Edit';
        // submit_btn.id = 'edit-btn';
        // document.getElementById('edit-btn').textContent = 'Edit';
        // document.getElementById('edit-btn').href = 'google.com';
        // alert(document.getElementById('edit-btn').href);
    }

    function ratingReview(user_id, type, item_id) {
        description.value = '';
        interaction.value = '1/10';
        first_img.value = '';
        second_img.value = '';
        third_img.value = '';
        fourth_img.value = '';
        fifth_img.value = '';

        document.getElementById('one-image').src = '';
        document.getElementById('two-image').src = '';
        document.getElementById('three-image').src = '';
        document.getElementById('four-image').src = '';
        document.getElementById('five-image').src = '';

        document.getElementById('one-image').style.width = '0px';
        document.getElementById('two-image').style.width = '0px';
        document.getElementById('three-image').style.width = '0px';
        document.getElementById('four-image').style.width = '0px';
        document.getElementById('five-image').style.width = '0px';

        document.getElementById('one-image').style.height = '0px';
        document.getElementById('two-image').style.height = '0px';
        document.getElementById('three-image').style.height = '0px';
        document.getElementById('four-image').style.height = '0px';
        document.getElementById('five-image').style.height = '0px';

        document.getElementById('first-plus').className = 'fa fa-plus';
        document.getElementById('second-plus').className = 'fa fa-plus';
        document.getElementById('three-plus').className = 'fa fa-plus';
        document.getElementById('four-plus').className = 'fa fa-plus';
        document.getElementById('five-plus').className = 'fa fa-plus';
        star(0);


        const request = {
            method: 'GET'
        };

        fetch('/getuser/' + user_id, request)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                if (data.type == 'Bookseller') {
                    document.getElementById('user_img').src = 'images/profile_photos/' + data.profile_photo;
                    document.getElementById('user_name').textContent = data.business_name;
                    // document.getElementById('username').textContent = data.owner_name;
                } else {
                    document.getElementById('user_img').src = 'images/profile_photos/' + data.profile_photo;
                    document.getElementById('user_name').textContent = data.first_name + ' ' + data.last_name;
                    // document.getElementById('username').textContent = data.username;
                }

                // document.getElementById('interaction-type').textContent = type;
                document.getElementById('item-id').textContent = item_id;
            })
            .catch(error => console.error(error));

        submit_btn.textContent = 'Submit';
        submit_btn_status = 'Submit';
        // submit_btn.id = 'submit-btn';
        // document.getElementById('submit-btn').textContent = 'Submit';
        // document.getElementById('submit-btn').href = 'facebook.com';
        // alert(document.getElementById('submit-btn').href);

    }

    submit_btn.addEventListener('click', () => {
        if (submit_btn_status == 'Submit') {
            var formData = new FormData();

            formData.append('item_id', document.getElementById('item-id').textContent);
            formData.append('user_id', {{ session('id') }});
            formData.append('rate_value', rate_val);
            formData.append('interaction', interaction.value);
            formData.append('description', description.value);
            formData.append('display_username', username_radio.checked);

            if (first_img.files.length > 0) {
                formData.append('first_img', first_img.files[0]);
            }
            if (second_img.files.length > 0) {
                formData.append('second_img', second_img.files[0]);
            }
            if (third_img.files.length > 0) {
                formData.append('third_img', third_img.files[0]);
            }
            if (fourth_img.files.length > 0) {
                formData.append('fourth_img', fourth_img.files[0]);
            }
            if (fifth_img.files.length > 0) {
                formData.append('fifth_img', fifth_img.files[0]);
            }

            fetch('/sellerpostrate', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                // .then(response => response.json())
                .then(response => {
                    console.log(response);
                    setTimeout(() => {
                        window.location.reload();
                    }, 800);
                })
                .catch(error => console.error(error));
        } else if (submit_btn_status == 'Edit') {
            var editFormData = new FormData();

            editFormData.append('id', document.getElementById('review_id').textContent);
            editFormData.append('user_id', {{ session('id') }});
            editFormData.append('rate_value', rate_val);
            editFormData.append('interaction', interaction.value);
            editFormData.append('description', description.value);
            editFormData.append('display_username', username_radio.checked);

            if (first_img.files.length > 0) {
                editFormData.append('first_img', first_img.files[0]);
            }
            if (second_img.files.length > 0) {
                editFormData.append('second_img', second_img.files[0]);
            }
            if (third_img.files.length > 0) {
                editFormData.append('third_img', third_img.files[0]);
            }
            if (fourth_img.files.length > 0) {
                editFormData.append('fourth_img', fourth_img.files[0]);
            }
            if (fifth_img.files.length > 0) {
                editFormData.append('fifth_img', fifth_img.files[0]);
            }

            fetch('/sellerupdaterate', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: editFormData
                })
                .then(response => response.json())
                .then(response => {
                    console.log(response);
                    setTimeout(() => {
                        window.location.reload();
                    }, 800);
                })
                .catch(error => console.error(error));
        }

    });
</script>
