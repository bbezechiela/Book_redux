<div class="d-flex flex-row p-3 shadow head-nav">
    <i class="border border-white rounded-circle"><img class="rounded-circle"
            src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="Profile photo" class="img" width="65"
            height="65"></i>
    <div class="d-flex flex-column ms-2 text-white">
        <span class="fw-bold">{{ session('first_name') . ' ' . session('last_name') }}</span>        
        <span class="profile-content">2.9K Followers . 500 Following</span>
        <span class="profile-content">Lives in {{ session('address') }}</span>        
    </div>
</div>

<ul class="nav">
    <a href="/home" class="btn nav-item d-flex flex-row w-100 px-5 py-0 home-side-btn">
        <i class="d-flex align-items-center"><img src="../assets/home-icon.png" alt="home icon" width="20"
                class="img"></i>
        <span class="nav-link">Home</span>
    </a>
    <a href="#" class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <i class="d-flex align-items-center"><img src="../assets/notification-icon.png" alt="home icon" width="20"
                class="img"></i>
        <span class="nav-link">Notification</span>
    </a>
    <a class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <i class="d-flex align-items-center"><img src="../assets/group_message-icon.png" alt="home icon" width="20"
                class="img"></i>
        <span class="nav-link">Messages</span>
    </a>
    <a class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <i class="d-flex align-items-center"><img src="../assets/cart-icon.png" alt="home icon" width="20"
                class="img"></i>
        <span class="nav-link">Cart</span>
    </a>
    <a class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <i class="d-flex align-items-center"><img src="../assets/book_club-icon.png" alt="home icon" width="20"
                class="img"></i>
        <span class="nav-link">Book Club</span>
    </a>
    <a class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <i class="d-flex align-items-center"><img src="../assets/book_trading-icon.png" alt="home icon" width="20"
                class="img"></i>
        <span class="nav-link">Book Trading</span>
    </a>
    <a href="/wishlist" id="wishlist-side-btn" class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <i class="d-flex align-items-center"><img src="../assets/wish_list-icon.png" alt="home icon" width="20"
                class="img"></i>
        <span class="nav-link">Wish List</span>
    </a>
    <a class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <i class="d-flex align-items-center"><img src="../assets/book_shelf-icon.png" alt="home icon" width="20"
                class="img"></i>
        <span class="nav-link">Book Shelf</span>
    </a>
    <a class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <i class="d-flex align-items-center"><img src="../assets/categories-icon.png" alt="home icon" width="20"
                class="img"></i>
        <span class="nav-link">Categories</span>
    </a>
    <a href="/mylist" class="btn nav-item d-flex flex-row w-100 px-5 py-0 myList-side-btn">
        <i class="d-flex align-items-center"><img src="../assets/my_list-icon.png" alt="home icon" width="20"
                class="img"></i>
        <span class="nav-link">My List</span>
    </a>
    <a class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <i class="d-flex align-items-center"><img src="../assets/my_likes-icon.png" alt="home icon" width="20"
                class="img"></i>
        <span class="nav-link">My Likes</span>
    </a>
    <a class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <i class="d-flex align-items-center"><img src="../assets/my_profile-icon.png" alt="home icon" width="20"
                class="img"></i>
        <span class="nav-link">My Profile</span>
    </a>
    <a href="/logout" class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <i class="d-flex align-items-center"><img src="../assets/logout.png" alt="home icon" width="20"
                class="img"></i>
        <span class="nav-link">Logout</span>
    </a>
</ul>
<script src=""></script>
