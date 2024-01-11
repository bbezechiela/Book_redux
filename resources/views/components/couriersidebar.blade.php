<div class="d-flex flex-row p-3 head-nav">
    <i class="border border-white rounded-circle"><img class="rounded-circle"
            src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="Profile photo" class="img"
            width="65" height="65"></i>

    <div class="d-flex flex-column ms-2 text-white">
        {{-- <span class="fw-bold">{{ session('fullname') }}</span> --}}
        <span class="fw-bold">{{ session('first_name') . ' ' . session('last_name') }}</span>
        <span class="fw-regular">{{ session('username') }}</span>
    </div>
</div>

<ul class="nav">
    <a href="/shipment" class="btn nav-item d-flex flex-row w-100 px-5 py-0 sidebar-btn  @if (Request::is('manageShipment*')) active @endif">
        <span class="nav-link">Manage Order</span>
    </a>
    <a href="/return" class="btn nav-item d-flex flex-row w-100 px-5 py-0 sidebar-btn  @if (Request::is('manageReturn*')) active @endif" style="white-space: nowrap">
        <span class="nav-link">Manage Return</span>
    </a>
    <a href="/completedShipping" class="btn nav-item d-flex flex-row w-100 px-5 py-0 sidebar-btn  @if (Request::is('complete*')) active @endif" style="white-space: nowrap">
        <span class="nav-link">Completed</span>
    </a>
    <a href="/courierprofile" class="btn nav-item d-flex flex-row w-100 px-5 py-0 sidebar-btn  @if (Request::is('courierProfile*')) active @endif" style="white-space: nowrap">
        <span class="nav-link">Profile</span>
    </a>
    <a href="/logout" class="btn nav-item d-flex flex-row w-100 px-5 py-0 logout-side-btn" style="white-space: nowrap">
        <span class="nav-link">Logout</span>
    </a>
</ul>
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