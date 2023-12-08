@include('partials.__header', [
    'title' => 'Delivered | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/myPurchase-style.css',
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
    </div>
    <div id="sidebarProfile" class="sidebarProfile p-2 min-vh-100 shadow">
        <x-sidebarProfile />
    </div> --}}
    <div id="content" class="content">
        <ul class="nav bg-light sticky-top head-nav shadow py-4 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                {{-- <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button> --}}
                <a href="/" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
                {{-- <ul class="nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/myprofile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/mypurchase">My Purchase</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/addresses">Addresses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/changepassword">Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/reviewsandratings">User Reviews and Ratings</a>
                    </li>
                </ul> --}}
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
                    <a href="/myprofile"><button class="btn mx-1 p-0" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Profile">
                            <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="notification"
                                width="35" height="35" class="rounded-5" style="margin-right: 2em;">
                        </button></a>
                </div>
            </div>
        </ul>
        <div class="purchase-container">
            <div class="header">
                <h4>My Purchase</h4>
                <p>View and track your purchase item</p>
            </div>
            <div class="card-body nav-details">
                <nav class="nav nav-pills flex-column flex-sm-row">
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/booksrented">Books Rented</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/mypurchase">To Purchase</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        style="background-color: #003060;" aria-current="page" href="/toreceive">To
                        Receive</a>
                    <a class="flex-sm-fill text-sm-center nav-link" style="background-color: #003060;"
                        aria-current="page" href="/delivered-mypurchase">Delivered</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/dropped-mypurchase">Dropped</a>
                    <a class="flex-sm-fill text-sm-center nav-link nav-custom-nav-link" style="text-align: center;"
                        href="/refund-mypurchase">Refund</a>
                </nav>
            </div>
        </div>
        @foreach ($orders as $order)
            @if ($order->item->order_status == 'received' && $order->item->order->user_id == session('id'))
                <div class="order-cart">
                    <div class="name-cart d-flex justify-content-between">
                        <div>
                            <a class="seller-name"
                                href="#"><span>{{ $order->user->first_name . ' ' . $order->user->last_name }}</span></a>
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
                                    <p class="mb-0 fw-bold interaction-type">{{ $order->status }}</p>
                                    <p class="payment-mode">{{ $order->item->order->payment_method }}</p>
                                </div>
                            </div>
                            <div class="right-section">
                                <div class="book-price">
                                    <p class="product-price">{{ $order->price }}</p>
                                    <p class="text-total">Total Payment:<span
                                            class="product-total">₱{{ $order->price }}</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="order-details">
                            <div class="order-message">
                                @if (isset($order->item->ratedItem))
                                    <button type="button" class="post-btn-delivered" data-bs-toggle="modal"
                                        data-bs-target="#rate-review"
                                        onclick="editRating({{ $order->item->ratedItem->id }}, {{ $order->item->id }})">Edit
                                        Rating and
                                        Review</button>
                                @else
                                    <button type="button" class="post-btn-delivered" data-bs-toggle="modal"
                                        data-bs-target="#rate-review"
                                        onclick="ratingReview({{ $order->user->id }}, '{{ $order->status }}', {{ $order->item->id }})">Post
                                        Rating and Review</button>
                                @endif

                            </div>
                            <div class="button-group">
                                <button type="button" class="btn btn-sm contact-button">Contact Seller</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        <!-- Rate and Review Modal -->
        <div class="modal fade" id="rate-review" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: #003060;">Rate and Review
                            Seller</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="customer-details">
                                    <img id="user_img" src="../assets/nestine.png" alt="seller image"
                                        class="circle-picture">
                                    <div class="name-interaction">
                                        <p id="user_name">Nestine Nicole Navarro</p>
                                        <span id="interaction-type" class="fw-bold interaction-drpdwn">Interaction
                                            Type</span>
                                        {{-- <div class="dropdown interaction-drpdwn">
                                            <button class="btn dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Interaction Type
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><button class="dropdown-item" type="button">Sale</button></li>
                                                <li><button class="dropdown-item" type="button">Exchange</button>
                                                </li>
                                                <li><button class="dropdown-item" type="button">Lent</button></li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 d-flex m-0 justify-content-end">
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
                            </div>
                            <div class="review-details">
                                <span id="item-id" hidden></span>
                                <p>Accuracy of Condition:
                                    {{-- <span>10/10</span> --}}
                                    <select class="btn" name="" id="condition-accuracy">
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
                                <p>Accuracy of Description:
                                    {{-- <span>10/10</span> --}}
                                    <select class="btn" name="" id="condition-description">
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
                                <p>Interaction:
                                    {{-- <span>10/10</span> --}}
                                    <select class="btn" name="" id="interaction">
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
                                        <input id="first-img" type="file" accept="image/*" class="d-none">
                                        <label for="first-img"><i id="first-plus" class="fa fa-plus"
                                                aria-hidden="true" style="cursor: pointer;"><img src=""
                                                    id="one-image" class="fa fa-plus" alt=""></i></label>
                                    </div>
                                    <div class="image-holder">
                                        <input id="second-img" type="file" accept="image/*" class="d-none">
                                        <label for="second-img"><i id="second-plus" class="fa fa-plus"
                                                aria-hidden="true" style="cursor: pointer;"><img src=""
                                                    id="two-image" class="fa fa-plus" alt=""></i></label>
                                    </div>
                                    <div class="image-holder">
                                        <input id="third-img" type="file" accept="image/*" class="d-none">
                                        <label for="third-img"><i id="three-plus" class="fa fa-plus"
                                                aria-hidden="true" style="cursor: pointer;"><img src=""
                                                    id="three-image" class="fa fa-plus" alt=""></i></label>
                                    </div>
                                    <div class="image-holder">
                                        <input id="fourth-img" type="file" accept="image/*" class="d-none">
                                        <label for="fourth-img"><i id="four-plus" class="fa fa-plus"
                                                aria-hidden="true" style="cursor: pointer;"><img src=""
                                                    id="four-image" class="fa fa-plus" alt=""></i></label>
                                    </div>
                                    <div class="image-holder">
                                        <input id="fifth-img" type="file" accept="image/*" class="d-none">
                                        <label for="fifth-img"><i id="five-plus" class="fa fa-plus"
                                                aria-hidden="true" style="cursor: pointer;"><img src=""
                                                    id="five-image" class="fa fa-plus" alt=""></i></label>
                                    </div>
                                </div>
                                </p>
                                <div class="col-4 d-flex justify-content-between show-text">
                                    <p>Show username on your rating/review</p>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="user-switch" value="true">
                                    </div>
                                </div>
                                <p class="username-text">Your username will be shown as <span
                                        id="username">necxs</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" id="submit-btn" class="btn submit-button">Submit</button>
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

<script>
    var rate_val = 0;

    var one_S = document.getElementById('one-star');
    var two_S = document.getElementById('two-star');
    var three_S = document.getElementById('three-star');
    var four_S = document.getElementById('four-star');
    var five_S = document.getElementById('five-star');

    var first_img = document.getElementById('first-img');
    var second_img = document.getElementById('second-img');
    var third_img = document.getElementById('third-img');
    var fourth_img = document.getElementById('fourth-img');
    var fifth_img = document.getElementById('fifth-img');

    var submit_btn = document.getElementById('submit-btn');
    var accu_cond = document.getElementById('condition-accuracy');
    var accu_desc = document.getElementById('condition-description');
    var interaction = document.getElementById('interaction');
    var description = document.getElementById('description');
    var check_username = document.getElementById('user-switch');

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

    function ratingReview(user_id, type, item_id) {

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


        const request = {
            method: 'GET'
        };

        fetch('/getuser/' + user_id, request)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                document.getElementById('user_img').src = 'images/profile_photos/' + data.profile_photo;
                document.getElementById('user_name').textContent = data.first_name + ' ' + data.last_name;
                document.getElementById('username').textContent = data.username;
                document.getElementById('interaction-type').textContent = type;
                document.getElementById('item-id').textContent = item_id;
            })
            .catch(error => console.log(error));

        submit_btn.id = 'submit-btn';
        document.getElementById('submit-btn').textContent = 'Submit';

        document.getElementById('submit-btn').addEventListener('click', () => {
            submit();
        });            
    }

    function editRating(id, item_id) {
        var review_id = 0;

        const request = {
            method: 'GET'
        };

        fetch('/getrating/' + id, request)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                review_id = data.id;
                star(parseInt(data.rate_value));
                rate_val = data.rate_value;
                document.getElementById('user_img').src = 'images/profile_photos/' + data.item.book.user
                    .profile_photo;
                document.getElementById('user_name').textContent = data.item.book.user.first_name + ' ' + data
                    .item
                    .book.user.last_name;
                document.getElementById('username').textContent = data.item.book.user.username;
                document.getElementById('interaction-type').textContent = data.item.book.status;
                document.getElementById('item-id').textContent = item_id;
                accu_cond.value = data.condition_accuracy;
                accu_desc.value = data.description_accuracy;
                interaction.value = data.interaction;
                description.value = data.description;        

                if (data.first_img != undefined) {
                    document.getElementById('one-image').src = '/images/rate_images/' + data.first_img;
                    document.getElementById('first-plus').className = 'fa p-0';
                    document.getElementById('one-image').style.width = '60px';
                    document.getElementById('one-image').style.height = '60px';
                }

                if (data.second_img != undefined) {
                    document.getElementById('two-image').src = '/images/rate_images/' + data.second_img;
                    document.getElementById('second-plus').className = 'fa p-0';
                    document.getElementById('two-image').style.width = '60px';
                    document.getElementById('two-image').style.height = '60px';
                }

                if (data.third_img != undefined) {
                    document.getElementById('three-image').src = '/images/rate_images/' + data.third_img;
                    document.getElementById('three-plus').className = 'fa p-0';
                    document.getElementById('three-image').style.width = '60px';
                    document.getElementById('three-image').style.height = '60px';
                }

                if (data.fourth_img != undefined) {
                    document.getElementById('four-image').src = '/images/rate_images/' + data.fourth_img;
                    document.getElementById('four-plus').className = 'fa p-0';
                    document.getElementById('four-image').style.width = '60px';
                    document.getElementById('four-image').style.height = '60px';
                }

                if (data.fifth_img != undefined) {
                    document.getElementById('five-image').src = '/images/rate_images/' + data.fifth_img;
                    document.getElementById('five-plus').className = 'fa p-0';
                    document.getElementById('five-image').style.width = '60px';
                    document.getElementById('five-image').style.height = '60px';
                    alert(data.description_accuracy)
                }
            })
            .catch(err => console.log(err));

        submit_btn.id = 'edit-btn';
        document.getElementById('edit-btn').textContent = 'Edit';

        // if (document.getElementById('edit-btn')) {

        document.getElementById('edit-btn').addEventListener('click', () => {
            edit(review_id);
            // alert('edit btn');
        });
        // }

    }


    function star(rate) {
        if (rate == 1) {
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

    function submit() {
        var formData = new FormData();
        formData.append('item_id', document.getElementById('item-id').textContent);
        formData.append('user_id', {{ session('id') }});
        formData.append('rate_value', rate_val);
        formData.append('condition_accuracy', accu_cond.value);
        formData.append('description_accuracy', accu_desc.value);
        formData.append('interaction', interaction.value);
        formData.append('description', description.value);
        formData.append('display_username', check_username.checked);

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

        // console.log(formData);
        fetch('/ratepost', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    // 'Content-type': 'application/json'
                },
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                window.location.reload();
            })
            .catch(error => console.log(error));
    }

    function edit(id) {
        var formData = new FormData();
        formData.append('item_id', document.getElementById('item-id').textContent);
        formData.append('user_id', {{ session('id') }});
        formData.append('rate_value', rate_val);
        formData.append('condition_accuracy', accu_cond.value);
        formData.append('description_accuracy', accu_desc.value);
        formData.append('interaction', interaction.value);
        formData.append('description', description.value);
        formData.append('display_username', check_username.checked);

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

        // console.log(formData);
        fetch('/updaterate/' + id, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    // 'Content-type': 'application/json'
                },
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                window.location.reload();
            })
            .catch(error => console.log(error));
    }
    // });
</script>
