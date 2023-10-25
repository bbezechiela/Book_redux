@include('partials.__header', [
'title' => 'Address | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/deliveryAddress-style.css',
'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 offcanvas offcanvas-start" tabindex="-1"
        aria-labelledby="offcanvasExampleLabel">
        <x-sidebar />
    </div>
    <div id="sidebarProfile" class="sidebarProfile p-2 min-vh-100 shadow">
        <x-sidebarProfile/>
    </div>
    <div id="content" class="border content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <a href="/" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                        alt="Logo"></a>
                {{-- <ul class="nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/myprofile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link" href="/mypurchase">My Purchase</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/addresses">Addresses</a>
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
                    <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <input class="form-control rounded-3 search-field" type="text" placeholder="Search">
                    </div>
                    <a href="/messages"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a>
                    <a href="/notification"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a>
                    <a href="/myprofile"><button class="btn mx-1 p-0" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Profile">
                            <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="notification"
                                width="35" height="35" class="rounded-5" style="margin-right: 2em;">
                        </button></a>
                </div>
            </div>
        </ul>
        <div class="address-container">
            <div class="header">
                <h4>Address</h4>
                <p>Manage your addresses</p>
            </div>
            <button class="btn btn-primary add-button" data-bs-toggle="modal" data-bs-target="#add-address"><i
                    class="fa fa-plus" aria-hidden="true"></i>Add new address</button>
            <div class="del-address-container">
                <div class="address-details">
                    <p>Nestine Nicole Navarro <span>09054173103</span></p>
                    <p>Peerless Village, Bagacay, Tacloban City, <span>6500</span></p>
                    <p class="default-txt">Default</p>
                </div>
                <div class="button-container">
                    <button class="edit-button" data-bs-toggle="modal" data-bs-target="#edit-address"><a
                            href="#">Edit</a></button>
                    <button class="delete-button"><a href="#">Delete</a></button>
                </div>
            </div>
        </div>

        <!-- Add Address Modal -->
        <div class="modal fade" id="add-address" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New Address</h1>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullname" placeholder="Fullname"
                                style="margin-bottom: 20px; color: #003060;">
                            <label for="contact-number" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="contact-number" placeholder="Contact Number"
                                style="margin-bottom: 20px; color: #003060;">
                            <label for="address" class="form-label">Province, City, Barangay</label>
                            <div class="form-group">
                                <select class="form-control form-select" aria-label="Select Address" placeholder=""
                                    style="color: #003060; margin-bottom: 20px;">
                                    <option value="public">To be continue</option>
                                    <option value="private">To be continue</option>
                                </select>
                            </div>
                            <label for="postal-code" class="form-label">Postal Code</label>
                            <input type="text" class="form-control" id="postal-code" placeholder="Postal Code"
                                style="margin-bottom: 20px; color: #003060;">
                            <label for="street" class="form-label">Street Name, Building, House No.</label>
                            <input type="text" class="form-control" id="street"
                                placeholder="Street Name, Building, House No."
                                style="margin-bottom: 50px; color: #003060;">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input default-address" type="checkbox" value=""
                                id="default-address">
                            <label class="form-check-label" for="default-address"
                                style="margin-bottom: 50px; color: #E55B13; margin-left: 8px;">
                                Set as default address
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-button"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary save-button">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Address Modal -->
        <div class="modal fade" id="edit-address" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Address</h1>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullname" placeholder="Fullname"
                                style="margin-bottom: 20px; color: #003060;">
                            <label for="contact-number" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="contact-number" placeholder="Contact Number"
                                style="margin-bottom: 20px; color: #003060;">
                            <label for="address" class="form-label">Province, City, Barangay</label>
                            <div class="form-group">
                                <select class="form-control form-select" aria-label="Select Address" placeholder=""
                                    style="color: #003060; margin-bottom: 20px;">
                                    <option value="public">To be continue</option>
                                    <option value="private">To be continue</option>
                                </select>
                            </div>
                            <label for="postal-code" class="form-label">Postal Code</label>
                            <input type="text" class="form-control" id="postal-code" placeholder="Postal Code"
                                style="margin-bottom: 20px; color: #003060;">
                            <label for="street" class="form-label">Street Name, Building, House No.</label>
                            <input type="text" class="form-control" id="street"
                                placeholder="Street Name, Building, House No."
                                style="margin-bottom: 50px; color: #003060;">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input default-address" type="checkbox" value=""
                                id="default-address">
                            <label class="form-check-label" for="default-address"
                                style="margin-bottom: 50px; color: #E55B13; margin-left: 8px;">
                                Set as default address
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-button"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary save-button">Update</button>
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