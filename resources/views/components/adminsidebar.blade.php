<div class="d-flex flex-row p-3 head-nav">
    <a href="/dashboard" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png" alt="Logo"></a>
</div>

<ul class="nav">
    <a href="/dashboard"
        class="btn nav-item d-flex flex-row w-100 px-5 py-0 sidebar-btn @if (Request::is('dashboard*')) active @endif"
        data-blade="dashboard">
        <i class="fa fa-tachometer d-flex align-items-center" aria-hidden="true"></i>
        <span class="nav-link">Dashboard</span>
    </a>
    <a href="/manageuserlisting"
        class="btn nav-item d-flex flex-row w-100 px-5 py-0 sidebar-btn @if (Request::is('manageuserlisting*')) active @endif"
        data-blade="manageListing" style="white-space: nowrap">
        <i class="fa fa-th-list d-flex align-items-center" aria-hidden="true"></i>
        <span class="nav-link">Manage User Listings</span>
    </a>
    <a href="/adminmessages"
        class="btn nav-item d-flex flex-row w-100 px-5 py-0 sidebar-btn @if(Request::is('adminMessage*')) active @endif"
        data-blade="adminMessage" style="white-space: nowrap">
        <i class="fa fa-envelope-o d-flex align-items-center" aria-hidden="true"></i>
        <span class="nav-link">Messages</span>
    </a>
    <a href="/managesellingclub"
        class="btn nav-item d-flex flex-row w-100 px-5 py-0 sidebar-btn @if(Request::is('managesellingclub*')) active @endif"
        data-blade="manageSellingClub" style="white-space: nowrap">
        <i class="fa fa-linode d-flex align-items-center" aria-hidden="true"></i>
        <span class="nav-link">Manage Book Selling Club</span>
    </a>
    <a href="/manageexchangeclub" id="wishlist-side-btn"
        class="btn nav-item d-flex flex-row w-100 px-5 py-0 sidebar-btn @if (Request::is('manageexchangeclub*')) active @endif"
        data-blade="manageExchangeClub" style="white-space: nowrap">
        <i class="fa fa-exchange d-flex align-items-center" aria-hidden="true"></i>
        <span class="nav-link">Manage Book Exchange Club</span>
    </a>
    <a href="/managerentingclub"
        class="btn nav-item d-flex flex-row w-100 px-5 py-0 sidebar-btn @if (Request::is('managerentingclub*')) active @endif"
        data-blade="manageRentingClub" style="white-space: nowrap">
        <i class="fa fa-window-restore d-flex align-items-center" aria-hidden="true"></i>
        <span class="nav-link">Manage Book Renting Club</span>
    </a>
    <a href="/manageuseraccounts"
        class="btn nav-item d-flex flex-row w-100 px-5 py-0 sidebar-btn @if (Request::is('manageuseraccounts*')) active @endif"
        data-blade="manageuserAccounts" style="white-space: nowrap">
        <i class="fa fa-users d-flex align-items-center" aria-hidden="true"></i>
        <span class="nav-link">Manage User</span>
    </a>
    <a href="/manageseller"
        class="btn nav-item d-flex flex-row w-100 px-5 py-0 sidebar-btn @if (Request::is('manageseller*')) active @endif"
        data-blade="managesellerAccounts" style="white-space: nowrap">
        <i class="fa fa-user-secret d-flex align-items-center" aria-hidden="true"></i>
        <span class="nav-link">Manage Bookseller</span>
    </a>
    {{-- <a href="/orderdetails" class="btn nav-item d-flex flex-row w-100 px-5 py-0 myList-side-btn" style="white-space: nowrap">
        <i class="fa fa-list-alt d-flex align-items-center" aria-hidden="true" style="color: #003060;"></i>
        <span class="nav-link">Order Details</span>
    </a> --}}
    {{-- <a href="/managereviews" class="btn nav-item d-flex flex-row w-100 px-5 py-0" style="white-space: nowrap">
        <i class="fa fa-star-half-o d-flex align-items-center" aria-hidden="true" style="color: #003060;"></i>
        <span class="nav-link">Manage Reviews and Rating</span>
    </a> --}}
    {{-- <a href="/managerefund"
        class="btn nav-item d-flex flex-row w-100 px-5 py-0 sidebar-btn @if (Request::is('managerefund*')) active @endif"
        data-blade="manageRefund" style="white-space: nowrap">
        <i class="fa fa-retweet d-flex align-items-center" aria-hidden="true"></i>
        <span class="nav-link">Manage Return/Refund</span>
    </a> --}}
    {{-- <a href="/manageresources" class="btn nav-item d-flex flex-row w-100 px-5 py-0" style="white-space: nowrap">
        <i class="fa fa-sticky-note d-flex align-items-center" aria-hidden="true" style="color: #003060;"></i>
        <span class="nav-link">Manage Educational Resources</span>
    </a> --}}
    <a href="/logout" class="btn nav-item d-flex flex-row w-100 px-5 py-0 logout-side-btn">
        <i class="fa fa-sign-out d-flex align-items-center" aria-hidden="true"></i>
        <span class="nav-link">Logout</span>
    </a>
</ul>
{{-- <script src=""></script> --}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('.sidebar-btn').removeClass('active');
        $('.sidebar-btn').each(function() {
            if ($(this).attr('href') == window.location.pathname) {
                $(this).addClass('active');
            }
        });
    });
</script>

