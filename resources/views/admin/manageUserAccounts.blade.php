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
                <h2>Manage Users</h2>
            </div>
            <section class="section dashboard">
                <div class="row">
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card users-card">
                            <div class="card-body">
                                <h5 class="card-title">Total Users</h5>
                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                    </div>
                                    <div class="ps-3">
                                        @php
                                            $userCount = 0;

                                            foreach ($users as $count) {
                                                if ($count->type == ('Reader' || 'Author')) {
                                                    $userCount++;
                                                }
                                            }
                                        @endphp
                                        <h6>{{ $userCount }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card table-card" style="margin-left: 1em;">
                        <div class="card-datatable table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"
                                style="">
                                {{-- <div class="row">
                                    <div class="col-sm-12 col-md-4">
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
                                                entries
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 dataTables_length">
                                        <label>Filter
                                            <div class="form-group">
                                                <select name="status" class="form-select status">
                                                    <option value="option1">All</option>
                                                    <option value="option2">New Users</option>
                                                </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex justify-content-center justify-content-md-start">
                                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                        <label>Search:<input type="search" class="form-control search-table"
                                                placeholder="" aria-controls="DataTables_Table_0"></label>
                                    </div>
                                </div> --}}
                                <table
                                    class="datatables-basic table border-top dataTable no-footer dtr-column collapsed"
                                    id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info"
                                    style="width: 1390px;">
                                    <thead>
                                        <tr>
                                            <th class="control sorting_disabled" rowspan="1" colspan="1"
                                                style="width: 0px;" aria-label=""></th>
                                            <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all"
                                                rowspan="1" colspan="1" style="width: 18px;" data-col="1"
                                                aria-label="">
                                                <input type="checkbox" class="form-check-input" hidden>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 120px;">Profile Picture</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 120px;">User Type</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 180px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 120px;">Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 108px;">UID
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 120px;">Interest</th>

                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 120px;">Account Created
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" style="width: 144px;">Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            @if ($user->type == ('Reader' || 'Author'))
                                                <tr class="odd">
                                                    <td class="control" tabindex="0" style=""></td>
                                                    <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                            class="dt-checkboxes form-check-input" hidden></td>
                                                    <td>
                                                        <div
                                                            class="d-flex justify-content-start align-items-center book-image">
                                                            <div class="d-flex flex-column"><img
                                                                    class="img mt-1 me-5 rounded-circle"
                                                                    src="{{ $user->profile_photo }}" alt="Logo">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $user->type }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->uid }}</td>
                                                    <td>{{ $user->interest }}</td>
                                                    <td>{{ $user->created_at }}</td>
                                                    <td>                                                       
                                                        <div class="dropdown">
                                                            <button class="btn dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                
                                                            </button>
                                                            <ul class="dropdown-menu">                                                               
                                                                <li><a class="dropdown-item" href="/deleteaccount/{{ $user->id }}">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>                                
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
