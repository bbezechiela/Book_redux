<div class="d-flex flex-row p-3 head-nav text-white">
    <i class="border border-white rounded-circle"><img class="rounded-circle"
            src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="Profile photo" class="img"
            width="65" height="65"></i>

    <div class="d-flex flex-column ms-2">
        <span class="fw-bold">{{ session('first_name') . ' ' . session('last_name') }}</span>
        <span class="profile-content"><a href="/followers" class="text-decoration-none text-white">2.9K Followers .</a><a href="/following" class="text-decoration-none text-white">500 Following</a></span>
        {{-- <span class="profile-content">Lives in {{ session('address') }}</span> --}}
    </div>
</div>
<ul class="nav">
    <a href="/bookclub" class="btn nav-item d-flex flex-row w-100 px-5 py-0 home-side-btn">
        <span class="nav-link">My Wall</span>
    </a>
    <a href="/sellingclub" class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <span class="nav-link">Book Selling Club</span>
    </a>
    <a href="/exchangeclub" class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <span class="nav-link">Book Exchange Club</span>
    </a>
    <a href="/rentingclub" id="wishlist-side-btn" class="btn nav-item d-flex flex-row w-100 px-5 py-0">
        <span class="nav-link">Book Renting Club</span>
    </a>
</ul>