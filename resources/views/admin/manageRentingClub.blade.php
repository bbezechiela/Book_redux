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
    <div id="content" class="pe-0 border content">
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4 top-nav">
            <div class="w-100 d-flex mt-1 p-1">
                <p class="text-admin">Admin</p>
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
                            <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="profile"
                                width="35" height="35" class="rounded-5" style="margin-right: 2em;">
                        </button></a>
                </div>
            </div>
        </ul>
        <main id="main-page" class="main-page">
            <div class="pagetitle">
                <h2>Manage Book Renting Club</h2>
            </div>
            <section class="section dashboard">
                <div class="row">
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card reported-card">
                            <div class="filter view-reports">
                                <a class="icon" href="/reportedrentpost">View Reported Posts <i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Total Reported Post</h5>
                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>3,264</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card table-card" style="margin-left: 1em;">
                        <div class="card-datatable table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"
                                style="">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="DataTables_Table_0_length">
                                            <label>Show
                                                <select name="DataTables_Table_0_length"
                                                    aria-controls="DataTables_Table_0" class="form-select drop-table">
                                                    <option value="7">7</option>
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="75">75</option>
                                                    <option value="100">100</option>
                                                </select>
                                                entries</label>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control search-table"
                                                    placeholder="" aria-controls="DataTables_Table_0">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <table
                                    class="datatables-basic table border-top dataTable no-footer dtr-column collapsed"
                                    id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info"
                                    style="width: 1390px;">
                                    <thead>
                                        <tr>
                                            <th class="control sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 0px;" aria-label=""></th>
                                            <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all"
                                                rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label="">
                                                <input type="checkbox" class="form-check-input"></th>
                                                <th class="sorting sorting_asc" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                style="width: 180px;">Posted by</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 100px;">Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 100px;">Time</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 220px;">Caption</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 100px;">Image</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 100px;">Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td class="control" tabindex="0" style=""></td>
                                            <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                    class="dt-checkboxes form-check-input"></td>
                                            <td class="sorting_1">
                                                Jennie Belle
                                            </td>
                                            <td>11/10/2023</td>
                                            <td>10:20</td>
                                            <td>Can you help me guys pick another book to read?</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center book-image">
                                                    <div class="d-flex flex-column"><img class="img mt-1 me-5"
                                                            src="../assets/b1.jpg" alt="Logo">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-inline-block"><a href="javascript:;"
                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown" aria-expanded="false"></a>
                                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                                        <li><a href="javascript:;" class="dropdown-item">Details</a>
                                                        </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li><a href="javascript:;"
                                                                class="dropdown-item text-danger delete-record">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="control" tabindex="0" style=""></td>
                                            <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                    class="dt-checkboxes form-check-input"></td>
                                            <td class="sorting_1">
                                                Jennie Belle
                                            </td>
                                            <td>11/10/2023</td>
                                            <td>10:20</td>
                                            <td>Can you help me guys pick another book to read?</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center book-image">
                                                    <div class="d-flex flex-column"><img class="img mt-1 me-5"
                                                            src="../assets/b1.jpg" alt="Logo">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-inline-block"><a href="javascript:;"
                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown" aria-expanded="false"></a>
                                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                                        <li><a href="javascript:;" class="dropdown-item">Details</a>
                                                        </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li><a href="javascript:;"
                                                                class="dropdown-item text-danger delete-record">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="control" tabindex="0" style=""></td>
                                            <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                    class="dt-checkboxes form-check-input"></td>
                                            <td class="sorting_1">
                                                Jennie Belle
                                            </td>
                                            <td>11/10/2023</td>
                                            <td>10:20</td>
                                            <td>Can you help me guys pick another book to read?</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center book-image">
                                                    <div class="d-flex flex-column"><img class="img mt-1 me-5"
                                                            src="../assets/b1.jpg" alt="Logo">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-inline-block"><a href="javascript:;"
                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown" aria-expanded="false"></a>
                                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                                        <li><a href="javascript:;" class="dropdown-item">Details</a>
                                                        </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li><a href="javascript:;"
                                                                class="dropdown-item text-danger delete-record">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="control" tabindex="0" style=""></td>
                                            <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                    class="dt-checkboxes form-check-input"></td>
                                            <td class="sorting_1">
                                                Jennie Belle
                                            </td>
                                            <td>11/10/2023</td>
                                            <td>10:20</td>
                                            <td>Can you help me guys pick another book to read?</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center book-image">
                                                    <div class="d-flex flex-column"><img class="img mt-1 me-5"
                                                            src="../assets/b1.jpg" alt="Logo">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-inline-block"><a href="javascript:;"
                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown" aria-expanded="false"></a>
                                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                                        <li><a href="javascript:;" class="dropdown-item">Details</a>
                                                        </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li><a href="javascript:;"
                                                                class="dropdown-item text-danger delete-record">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="control" tabindex="0" style=""></td>
                                            <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                    class="dt-checkboxes form-check-input"></td>
                                            <td class="sorting_1">
                                                Jennie Belle
                                            </td>
                                            <td>11/10/2023</td>
                                            <td>10:20</td>
                                            <td>Can you help me guys pick another book to read?</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center book-image">
                                                    <div class="d-flex flex-column"><img class="img mt-1 me-5"
                                                            src="../assets/b1.jpg" alt="Logo">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-inline-block"><a href="javascript:;"
                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown" aria-expanded="false"></a>
                                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                                        <li><a href="javascript:;" class="dropdown-item">Details</a>
                                                        </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li><a href="javascript:;"
                                                                class="dropdown-item text-danger delete-record">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="control" tabindex="0" style=""></td>
                                            <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                    class="dt-checkboxes form-check-input"></td>
                                            <td class="sorting_1">
                                                Jennie Belle
                                            </td>
                                            <td>11/10/2023</td>
                                            <td>10:20</td>
                                            <td>Can you help me guys pick another book to read?</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center book-image">
                                                    <div class="d-flex flex-column"><img class="img mt-1 me-5"
                                                            src="../assets/b1.jpg" alt="Logo">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-inline-block"><a href="javascript:;"
                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown" aria-expanded="false"></a>
                                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                                        <li><a href="javascript:;" class="dropdown-item">Details</a>
                                                        </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li><a href="javascript:;"
                                                                class="dropdown-item text-danger delete-record">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="control" tabindex="0" style=""></td>
                                            <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                    class="dt-checkboxes form-check-input"></td>
                                            <td class="sorting_1">
                                                Jennie Belle
                                            </td>
                                            <td>11/10/2023</td>
                                            <td>10:20</td>
                                            <td>Can you help me guys pick another book to read?</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center book-image">
                                                    <div class="d-flex flex-column"><img class="img mt-1 me-5"
                                                            src="../assets/b1.jpg" alt="Logo">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-inline-block"><a href="javascript:;"
                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown" aria-expanded="false"></a>
                                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                                        <li><a href="javascript:;" class="dropdown-item">Details</a>
                                                        </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li><a href="javascript:;"
                                                                class="dropdown-item text-danger delete-record">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                            aria-live="polite">Showing 1 to 7 of 100
                                            entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="DataTables_Table_0_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="DataTables_Table_0_previous"><a
                                                        aria-controls="DataTables_Table_0" aria-disabled="true"
                                                        role="link" data-dt-idx="previous" tabindex="0"
                                                        class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active active-page">
                                                    <a href="#" aria-controls="DataTables_Table_0" role="link"
                                                        aria-current="page" data-dt-idx="0" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="DataTables_Table_0" role="link" data-dt-idx="1"
                                                        tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="DataTables_Table_0" role="link" data-dt-idx="2"
                                                        tabindex="0" class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="DataTables_Table_0" role="link" data-dt-idx="3"
                                                        tabindex="0" class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="DataTables_Table_0" role="link" data-dt-idx="4"
                                                        tabindex="0" class="page-link">5</a></li>
                                                <li class="paginate_button page-item disabled"
                                                    id="DataTables_Table_0_ellipsis"><a
                                                        aria-controls="DataTables_Table_0" aria-disabled="true"
                                                        role="link" data-dt-idx="ellipsis" tabindex="0"
                                                        class="page-link">…</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="DataTables_Table_0" role="link" data-dt-idx="14"
                                                        tabindex="0" class="page-link">15</a></li>
                                                <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                                    <a href="#" aria-controls="DataTables_Table_0" role="link"
                                                        data-dt-idx="next" tabindex="0" class="page-link">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>

@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])