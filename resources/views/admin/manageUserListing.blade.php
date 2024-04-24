@include('partials.__header', [
    'title' => 'Admin Dashboard | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/dashboard-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0 body">
    <div id="adminsidebar" class="adminsidebar p-2 min-vh-100 shadow">
        <x-adminsidebar />
    </div>
    <div id="content" class="pe-0 content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4 top-nav">
            <div class="w-100 d-flex mt-1 p-1">
                <p class="text-admin">Admin</p>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    <a href="/adminprofile"><button class="btn mx-1 p-0" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Profile">
                            <img src="{{ session('image') }}" alt="profile" width="35" height="35"
                                class="rounded-5" style="margin-right: 2em;">
                        </button></a>
                </div>
            </div>
        </ul>
        <main id="main-page" class="main-page">
            <div class="pagetitle">
                <h2>Manage User Listing</h2>
            </div>
            <section class="section dashboard">
                <div class="row">
                    <div class="row">
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card listings-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Listings</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa fa-th-list" aria-hidden="true"></i>
                                        </div>
                                        <div class="ps-3">
                                            @php
                                                $totalListing = 0;
                                                foreach ($user as $index) {
                                                    $totalListing++;
                                                }
                                            @endphp
                                            <h6>{{ $totalListing }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card reported-listing-card">
                                <div class="filter view-reports">
                                    <a class="icon" href="/reportedlisting">View</a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Total Reported Listing</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa fa-flag" aria-hidden="true"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>3,264</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="sale" role="tabpanel"
                                    aria-labelledby="sale-tab">
                                    <div class="card table-card">
                                        <div class="card-datatable table-responsive">
                                            {{-- <div id="DataTables_Table_0_wrapper"
                                                class="dataTables_wrapper dt-bootstrap5 no-footer" style="">                                               

                                            </div> --}}
                                            <table
                                                class="datatables-basic table border-top dataTable no-footer dtr-column collapsed"
                                                id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info"
                                                style="width: 1390px;">
                                                <thead>
                                                    <tr>
                                                        <th class="control sorting_disabled" rowspan="1"
                                                            colspan="1" style="width: 0px;" aria-label=""></th>
                                                        <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all"
                                                            rowspan="1" colspan="1" style="width: 18px;"
                                                            data-col="1" aria-label="">
                                                            <input type="checkbox" class="form-check-input" hidden>
                                                        </th>
                                                        <th class="sorting sorting_asc" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" style="width: 100px;">Book Image</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" style="width: 80px;">Poster</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" style="width: 178px;">Book Status</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" style="width: 190px;">Book Filename</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" style="width: 190px;">ISBN #</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" style="width: 190px;">Title</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" style="width: 186px;">Author</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" style="width: 178px;">Genre</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" style="width: 130px;">Edition</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" style="width: 90px;">Description</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" style="width: 120px;">Exchange Preferences
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" style="width: 120px;">Date Created
                                                        </th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" style="width: 144px;">Actions
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($user as $book)
                                                        {{-- @if ($book->status == 'Sale' && $book->stock > 0) --}}
                                                        <tr class="odd">
                                                            <td class="control" tabindex="0" style="">
                                                            </td>
                                                            <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                                    class="dt-checkboxes form-check-input" hidden></td>
                                                            <td class="sorting_1">
                                                                <div
                                                                    class="d-flex justify-content-start align-items-center book-image">
                                                                    <div class="d-flex flex-column"><img
                                                                            class="img mt-1 me-5"
                                                                            src="{{ asset('images/book_cover/' . $book->back_cover) }}"
                                                                            alt="Logo">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>{{ $book->user->name }}</td>
                                                            <td>{{ $book->status }}</td>
                                                            <td>{{ $book->book_filename }}</td>
                                                            <td>{{ $book->isbn }}</td>
                                                            <td>{{ $book->title }}</td>
                                                            <td>{{ $book->author }}</td>
                                                            <td>{{ $book->genre }}</td>
                                                            <td>{{ $book->edition }}</td>
                                                            <td>{{ $book->description }}</td>
                                                            <td>{{ $book->exchange_preferences }}</td>
                                                            <td>{{ $book->created_at }}</td>
                                                            <td>
                                                                <div class="d-inline-block"><a href="javascript:;"
                                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"></a>
                                                                    <ul class="dropdown-menu dropdown-menu-end m-0"
                                                                        style="">
                                                                        {{-- <li><a href="/listingdetails/{{ $book->id }}"
                                                                                class="dropdown-item">Details</a>
                                                                        </li> --}}
                                                                        {{-- <div class="dropdown-divider"></div> --}}
                                                                        <li><a href="/deleteuserlisting/{{ $book->id }}"
                                                                                class="dropdown-item text-danger delete-record">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        {{-- @endif --}}
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>

<script>
    var sale_btn = document.getElementById('sale-tab');
    var exchange_btn = document.getElementById('exchange-tab');
    var rent_btn = document.getElementById('rent-tab');

    sale_btn.addEventListener('click', () => {
        sale_btn.style.backgroundColor = '#003060';
        sale_btn.style.color = '#fff';
        exchange_btn.style.backgroundColor = '#fff';
        exchange_btn.style.color = '#003060';
        rent_btn.style.backgroundColor = '#fff';
        rent_btn.style.color = '#003060';
    });

    exchange_btn.addEventListener('click', () => {
        sale_btn.style.backgroundColor = '#fff';
        sale_btn.style.color = '#003060';
        exchange_btn.style.backgroundColor = '#003060';
        exchange_btn.style.color = '#fff';
        rent_btn.style.backgroundColor = '#fff';
        rent_btn.style.color = '#003060';
    });
</script>
@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
