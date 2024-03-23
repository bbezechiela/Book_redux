<div class="d-flex flex-row p-3 head-nav text-white">
    <i class="border border-white rounded-circle"><img class="rounded-circle"
            src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="Profile photo" class="img"
            width="65" height="65"></i>

    <div class="d-flex flex-column ms-2">
        <span class="fw-bold">{{ session('first_name') . ' ' . session('last_name') }}</span>
        <span class="profile-content"><a href="/followers" class="text-decoration-none text-white">2.9K Followers .</a><a href="/following" class="text-decoration-none text-white">500 Following</a></span>        
    </div>
</div>
<ul class="nav">
    <a href="/myprofile" class="btn nav-item d-flex flex-row w-100 px-5 py-0 profile-side-btn">
        <span class="nav-link">Profile</span>
    </a>
    <a href="/mypurchase" class="btn nav-item d-flex flex-row w-100 px-5 py-0 purchase-side-btn">
        <span class="nav-link">My Purchase</span>
    </a>
    <a href="/addresses" class="btn nav-item d-flex flex-row w-100 px-5 py-0 addresses-side-btn">
        <span class="nav-link">Addresses</span>
    </a>
    {{-- <a href="/changepassword" class="btn nav-item d-flex flex-row w-100 px-5 py-0 password-side-btn">
        <span class="nav-link">Change Password</span>
    </a> --}}
    <a href="/reviewsandratings" class="btn nav-item d-flex flex-row w-100 px-5 py-0 reviews-side-btn">
        <span class="nav-link">User Reviews and Ratings</span>
    </a>
</ul>