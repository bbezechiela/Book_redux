<div class="d-flex flex-row p-3 head-nav">
    <i class="border border-white rounded-circle"><img class="rounded-circle"
            src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="Profile photo" class="img"
            width="65" height="65"></i>

    <div class="d-flex flex-column ms-2 text-white">
        <span class="fw-bold">{{ session('business_name') }}</span>
        <span class="fw-regular">{{ session('owner_name') }}</span>
    </div>
</div>

<ul class="nav">
    <a href="/sellerboard" class="btn nav-item d-flex flex-row w-100 px-5 py-0 dashboard-side-btn" data-blade="dashboard">
        <i class="fa fa-tachometer d-flex align-items-center" aria-hidden="true"></i>
        <span class="nav-link">Dashboard</span>
    </a>
    <a href="/listings" class="btn nav-item d-flex flex-row w-100 px-5 py-0 listing-side-btn" data-blade="manageListing" style="white-space: nowrap">
        <i class="fa fa-list-ul d-flex align-items-center" aria-hidden="true"></i>
        <span class="nav-link">My Listings</span>
    </a>
    <a href="/reviews" class="btn nav-item d-flex flex-row w-100 px-5 py-0 reviews-side-btn" data-blade="manageSellingClub" style="white-space: nowrap">
        <i class="fa fa-star-half-o d-flex align-items-center" aria-hidden="true"></i>
        <span class="nav-link">User Reviews and Rating</span>
    </a>
    <a href="/systemfeedback" class="btn nav-item d-flex flex-row w-100 px-5 py-0 feedback-side-btn" data-blade="manageExchangeClub" style="white-space: nowrap">
        <i class="fa fa-comments d-flex align-items-center" aria-hidden="true"></i>
        <span class="nav-link">System Feedback</span>
    </a>
    <a href="/logout" class="btn nav-item d-flex flex-row w-100 px-5 py-0 logout-side-btn">
        <i class="fa fa-sign-out d-flex align-items-center" aria-hidden="true"></i>
        <span class="nav-link">Logout</span>
    </a>
</ul>
