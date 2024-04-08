@include('partials.__header', [
'title' => 'Materials | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/materials.css',
'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 shadow">
        <x-sidebar />
    </div>
    <div id="content" class="pe-0 content" style="max-height: 50%">
        <ul class="nav bg-light sticky-top head-nav shadow py-4 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                <a href="/explore" id="logo" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png"
                    alt="Logo"></a>
            </div>
            <div class='position-absolute end-50'>
                <div id='upload'>Upload</div>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <div class="position-relevant">
                            <input id="search_input" class="form-control rounded-3" type="text" placeholder="Search">
                            <div id="searches" class="position-absolute border bg-light w-100 p-2"
                                style="cursor: pointer;">
                            </div>
                        </div>
                    </div>
                    <ul class="nav py-profile justify-content-end">
                        <li class="nav-item dropdown">
                            <a href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                class="nav-link dropdown-toggle avatar" aria-expanded="false" title="profile">
                                <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}"
                                    alt="notification" width="35" height="35" class="rounded-5"
                                    style="margin-right: 2em;">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/myprofile">Profile</a></li>
                                <li><a class="dropdown-item" href="/mypurchase">My Purchase</a></li>
                                <li><a class="dropdown-item" href="/addresses">Addresses</a></li>
                                <li><a class="dropdown-item" href="/changepassword">Change Password</a></li>
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </ul>

        <div id="mainOuterContainer">
            <div>
                <div id="">
                    <div id='newlyAddedContainer' class='materialSectionContainer'>
                        <div class='sectionText'>Newly Added Materials</div>
                        <div id='newlyAddedMaterials' class='materialOuterContainer'></div>
                    </div>
                    <div id='mathAndScienceContainer' class='materialSectionContainer'>
                        <div class='sectionText'>Popular in Math and Sciences</div>
                        <div id='mathAndScienceMaterials' class='materialOuterContainer'></div>
                    </div>
                    <div id='techAndEngineeringContainer' class='materialSectionContainer'>
                        <div class='sectionText'>Popular in Technology and Engineering</div>
                        <div id='techAndEngineeringMaterials' class='materialOuterContainer'></div>
                    </div>
                    <div id='historyContainer' class='materialSectionContainer'>
                        <div class='sectionText'>Popular in History</div>
                        <div id='historyMaterials' class='materialOuterContainer'></div>
                    </div>
                </div>    

                <div id='overlayContainer' style='visibility: hidden;'>
                    <form id='formOuterContainer' method='post'> 
                        <div id='fileUpperContainer'>
                            <label id='labell' for="file">Select Document To Upload</label>
                            <input id="file" type="file" style="display: none;">
                        </div>
                        <div id='formInnerContainer'>
                            <label for="title">Title*</label>
                            <input id="title" type="text">
    
                            <label for="category">Category*</label>
                            <select name="category" id="category">
                                <option value="default">Select a category</option>
                                <option value="math">Math</option>
                                <option value="history">History</option>
                                <option value="work">Work stuff</option>
                            </select>
    
                            <label for="description">Description*</label>
                            <textarea name="description" id="description" cols="25" rows="7"></textarea>
                        </div>
                        <div id='formCtaContainer'>
                            <button id='clearBtn' type="button">Clear</button>
                            <button id='publish' type="submit">Publish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const current_user_id = "{{ session('id') }}";
    const csrf_token = "{{ csrf_token(); }}";
</script>
<script src="{{ asset('/js/materials.js'); }}"></script>
@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])
