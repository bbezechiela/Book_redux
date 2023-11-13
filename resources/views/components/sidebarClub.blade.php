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
    <a href="/bookclub" class="btn nav-item d-flex flex-row w-100 px-5 py-0 sidebar-btn @if(Request::is('bookclub*')) active @endif" data-blade="bookClub">
        <span class="nav-link">My Wall</span>
    </a>
    <a href="/sellingclub" class="btn nav-item d-flex flex-row w-100 px-5 py-0 sidebar-btn @if(Request::is('sellingclub*')) active @endif" data-blade="bookSellingClub">
        <span class="nav-link">Book Selling Club</span>
    </a>
    <a href="/exchangeclub" class="btn nav-item d-flex flex-row w-100 px-5 py-0 sidebar-btn @if(Request::is('exchangeclub*')) active @endif" data-blade="bookExchangeClub">
        <span class="nav-link">Book Exchange Club</span>
    </a>
    <a href="/rentingclub" class="btn nav-item d-flex flex-row w-100 px-5 py-0 sidebar-btn @if(Request::is('rentingclub*')) active @endif" data-blade="bookRentingClub">
        <span class="nav-link">Book Renting Club</span>
    </a>
</ul>

<script>
$(document).ready(function () {
    $('.sidebar-btn').removeClass('active');

    $('.sidebar-btn').each(function() {
        if ($(this).attr('href') == window.location.pathname) {
            $(this).addClass('active');
        }
    });
});
</script>


