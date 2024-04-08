<div class="d-flex flex-row p-3 shadow head-nav">
    <i class="border border-white rounded-circle"><img class="rounded-circle"
            src="{{ session('image') }}" alt="Profile photo" class="img"
            width="65" height="65"></i>

    <div class="d-flex flex-column ms-2 text-white">
        <span class="fw-bold">{{ session('name') }}</span>
        <span>{{ session('email') }}</span>
        {{-- <span class="profile-content"><a href="/followers" class="text-white text-decoration-none">2.9K Followers . </a><a href="/following" class="text-white text-decoration-none">500 Following</a></span> --}}
    </div>
    {{-- <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
        data-bs-dismiss="offcanvas" aria-label="Close"></button> --}}
</div>

<ul class="nav">
    {{-- <a href="/userdashboard" class="btn nav-item d-flex flex-row w-100 px-5 py-0 userdashboard-side-btn">
        <i class="fa fa-home d-flex align-items-center" style="color: #fff;" aria-hidden="true"></i>
        <span class="nav-link">Home</span>
    </a> --}}
    <a href="/explore" class="btn nav-item d-flex flex-row w-100 px-5 py-0 explore-side-btn">
        <i class="fa fa-compass d-flex align-items-center" style="color: #fff;" aria-hidden="true"></i>
        <span class="nav-link">Explore</span>
    </a>
    {{-- <a href="/cart" class="btn nav-item d-flex flex-row w-100 px-5 py-0 cart-side-btn">
        <i class="fa fa-shopping-cart d-flex align-items-center" style="color: #fff;" aria-hidden="true"></i>
        <span class="nav-link">Cart</span>
    </a> --}}
    <a href="/messageses" class="btn nav-item d-flex flex-row w-100 px-5 py-0 messages-side-btn">
        <i class="fa fa-envelope-o d-flex align-items-center" style="color: #fff;" aria-hidden="true"></i>
        <span class="nav-link">Messages</span>
    </a>
    <a href="/sellingclub" class="btn nav-item d-flex flex-row w-100 px-5 py-0 bookclub-side-btn">
        <i class="fa fa-users d-flex align-items-center" style="color: #fff;" aria-hidden="true"></i>
        <span class="nav-link">Book Club</span>
    </a>
    {{-- <a href="#" class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <i class="d-flex align-items-center"><img src="/assets/book_trading-icon.png" alt="home icon" width="20"
                class="img"></i>
        <span class="nav-link">Interactive Trading</span>
    </a> --}}
    {{-- <a href="/wishlist" id="wishlist-side-btn" class="btn nav-item d-flex flex-row w-100 px-5 py-0 wishlist-side-btn">
        <i class="fa fa-list-alt d-flex align-items-center" style="color: #fff;" aria-hidden="true"></i>
        <span class="nav-link">Wish List</span>
    </a> --}}
    {{-- <a href="#" class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <i class="d-flex align-items-center"><img src="/assets/book_shelf-icon.png" alt="home icon" width="20"
                class="img"></i>
        <span class="nav-link">Book Shelf</span>
    </a> --}}
    {{-- <a href="/categories" class="btn nav-item d-flex flex-row w-100 px-5 py-0 categories-side-btn">
        <i class="fa fa-object-group d-flex align-items-center" style="color: #fff;" aria-hidden="true"></i>
        <span class="nav-link">Genres</span>
    </a> --}}
    <a href="/mylist" class="btn nav-item d-flex flex-row w-100 px-5 py-0 mylist-side-btn">
        <i class="fa fa-list-ul d-flex align-items-center" style="color: #fff;" aria-hidden="true"></i>
        <span class="nav-link">My List</span>
    </a>
    {{-- <a href="/mylikes" class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <i class="fa fa-thumbs-up d-flex align-items-center" style="color: #fff;" aria-hidden="true"></i>
        <span class="nav-link">My Likes</span>
    </a> --}}
    {{-- <a href="/feedback" class="btn nav-item d-flex flex-row w-100 px-5 py-0 feedback-side-btn">
        <i class="fa fa-comments d-flex align-items-center" style="color: #fff;" aria-hidden="true"></i>
        <span class="nav-link">System Feedback</span>
    </a> --}}
    <a href="/logout" class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <i class="fa fa-sign-out d-flex align-items-center" style="color: #fff;" aria-hidden="true"></i>
        <span class="nav-link">Logout</span>
    </a>
</ul>
{{-- <script src=""></script> --}}