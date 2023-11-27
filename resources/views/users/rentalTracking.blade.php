@include('partials.__header', [
'title' => 'Rental Tracking Period | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/rental-tracking.css',
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

    <div id="content" class="pe-0 border content">
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    @endforeach
            </ul>
        </div>
        @endif
        <ul class="nav bg-light sticky-top head-nav shadow py-2 px-4">
            <div class="w-100 d-flex mt-1 p-0">
                <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                    aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <a href="/explore" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png" alt="Logo"></a>
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
        <div class="card table-card">
            <div class="card-datatable table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer" style="">
                    <h4 class="page-title">Rental Period Tracking</h4>
                    <table class="datatables-basic table border-top dataTable no-footer dtr-column collapsed"
                        id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1390px;">
                        <thead>
                            <tr>
                                <th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 10px;"
                                    aria-label=""></th>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1" style="width: 120px;">Status</th>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1" style="width: 120px;">End Date</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 120px;">Start Date</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 220px;">Title</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 150px;">Rental Price</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 220px;">Security Deposit</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 120px;">Duration</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 180px;">Name</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 190px;">Contact Number
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 144px;">Email
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 100px;">Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td class="control" tabindex="0" style=""></td>
                                <td class="status-text">
                                    Returned
                                </td>
                                <td>11/10/2023</td>
                                <td>10/10/2023</td>
                                <td>Harry Potter</td>
                                <td>₱100</td>
                                <td>₱200</td>
                                <td>1 Month</td>
                                <td>Jennie BlackPink</td>
                                <td>09076549802</td>
                                <td>jenjen@gmail.com</td>
                                <td>
                                    <div class="d-inline-block"><a href="javascript:;"
                                            class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown" aria-expanded="false"></a>
                                        <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                            <li><a href="javascript:;" class="dropdown-item">Returned</a>
                                            </li>
                                            <li><a href="javascript:;" class="dropdown-item">Notify User</a>
                                            </li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="javascript:;"
                                                    class="dropdown-item text-danger delete-record">Overdue</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="even">
                                <td class="control" tabindex="0" style=""></td>
                                <td class="status-text">
                                    Overdue
                                </td>
                                <td>11/10/2023</td>
                                <td>10/10/2023</td>
                                <td>Harry Potter</td>
                                <td>₱100</td>
                                <td>₱200</td>
                                <td>1 Month</td>
                                <td>Jennie BlackPink</td>
                                <td>09076549802</td>
                                <td>jenjen@gmail.com</td>
                                <td>
                                    <div class="d-inline-block"><a href="javascript:;"
                                            class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown" aria-expanded="false"></a>
                                        <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                            <li><a href="javascript:;" class="dropdown-item">Returned</a>
                                            </li>
                                            <li><a href="javascript:;" class="dropdown-item">Notify User</a>
                                            </li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="javascript:;"
                                                    class="dropdown-item text-danger delete-record">Overdue</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd">
                                <td class="control" tabindex="0" style=""></td>
                                <td class="status-text">
                                    Overdue
                                </td>
                                <td>11/10/2023</td>
                                <td>10/10/2023</td>
                                <td>Harry Potter</td>
                                <td>₱100</td>
                                <td>₱200</td>
                                <td>1 Month</td>
                                <td>Jennie BlackPink</td>
                                <td>09076549802</td>
                                <td>jenjen@gmail.com</td>
                                <td>
                                    <div class="d-inline-block"><a href="javascript:;"
                                            class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown" aria-expanded="false"></a>
                                        <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                            <li><a href="javascript:;" class="dropdown-item">Returned</a>
                                            </li>
                                            <li><a href="javascript:;" class="dropdown-item">Notify User</a>
                                            </li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="javascript:;"
                                                    class="dropdown-item text-danger delete-record">Overdue</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="even">
                                <td class="control" tabindex="0" style=""></td>
                                <td class="status-text">
                                    Overdue
                                </td>
                                <td>11/10/2023</td>
                                <td>10/10/2023</td>
                                <td>Harry Potter</td>
                                <td>₱100</td>
                                <td>₱200</td>
                                <td>1 Month</td>
                                <td>Jennie BlackPink</td>
                                <td>09076549802</td>
                                <td>jenjen@gmail.com</td>
                                <td>
                                    <div class="d-inline-block"><a href="javascript:;"
                                            class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown" aria-expanded="false"></a>
                                        <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                            <li><a href="javascript:;" class="dropdown-item">Returned</a>
                                            </li>
                                            <li><a href="javascript:;" class="dropdown-item">Notify User</a>
                                            </li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="javascript:;"
                                                    class="dropdown-item text-danger delete-record">Overdue</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd">
                                <td class="control" tabindex="0" style=""></td>
                                <td class="status-text">
                                    Returned
                                </td>
                                <td>11/10/2023</td>
                                <td>10/10/2023</td>
                                <td>Harry Potter</td>
                                <td>₱100</td>
                                <td>₱200</td>
                                <td>1 Month</td>
                                <td>Jennie BlackPink</td>
                                <td>09076549802</td>
                                <td>jenjen@gmail.com</td>
                                <td>
                                    <div class="d-inline-block"><a href="javascript:;"
                                            class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown" aria-expanded="false"></a>
                                        <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                            <li><a href="javascript:;" class="dropdown-item">Returned</a>
                                            </li>
                                            <li><a href="javascript:;" class="dropdown-item">Notify User</a>
                                            </li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="javascript:;"
                                                    class="dropdown-item text-danger delete-record">Overdue</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="even">
                                <td class="control" tabindex="0" style=""></td>
                                <td class="status-text">
                                    Returned
                                </td>
                                <td>11/10/2023</td>
                                <td>10/10/2023</td>
                                <td>Harry Potter</td>
                                <td>₱100</td>
                                <td>₱200</td>
                                <td>1 Month</td>
                                <td>Jennie BlackPink</td>
                                <td>09076549802</td>
                                <td>jenjen@gmail.com</td>
                                <td>
                                    <div class="d-inline-block"><a href="javascript:;"
                                            class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown" aria-expanded="false"></a>
                                        <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                            <li><a href="javascript:;" class="dropdown-item">Returned</a>
                                            </li>
                                            <li><a href="javascript:;" class="dropdown-item">Notify User</a>
                                            </li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="javascript:;"
                                                    class="dropdown-item text-danger delete-record">Overdue</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd">
                                <td class="control" tabindex="0" style=""></td>
                                <td class="status-text">
                                    Overdue
                                </td>
                                <td>11/10/2023</td>
                                <td>10/10/2023</td>
                                <td>Harry Potter</td>
                                <td>₱100</td>
                                <td>₱200</td>
                                <td>1 Month</td>
                                <td>Jennie BlackPink</td>
                                <td>09076549802</td>
                                <td>jenjen@gmail.com</td>
                                <td>
                                    <div class="d-inline-block"><a href="javascript:;"
                                            class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown" aria-expanded="false"></a>
                                        <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                            <li><a href="javascript:;" class="dropdown-item">Returned</a>
                                            </li>
                                            <li><a href="javascript:;" class="dropdown-item">Notify User</a>
                                            </li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="javascript:;"
                                                    class="dropdown-item text-danger delete-record">Overdue</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])