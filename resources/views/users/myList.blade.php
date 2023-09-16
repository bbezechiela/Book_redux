<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My List | BookRedux</title>
    <link rel="icon" href="{{ asset('/assets/Book_Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('/bootstrap/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('/css/homepage-style.css') }}"> --}}
</head>

<style>
    /* Sidebar */
    :root {
        --sidebar_width: 320px;
    }

    .sidebar {
        position: fixed;
        background-color: #003060;
        color: #fff;
        width: var(--sidebar_width);
    }

    .profile-content {
        font-size: smaller;
    }

    #home-side-btn {
        background-color: #2D6092;
    }

    .nav-link:hover {
        color: #fff;
    }

    .nav-item:hover {
        background-color: #2D6092;
    }

    .nav-link {
        color: #fff;
        font-size: 15px;
    }

    #content {
        padding-left: var(--sidebar_width);
    }

    /* My List */
    input,
    select,
    .modal,
    textarea {
        color: #003060;
    }

    #exchange,
    #rent {
        display: none;
    }

    .book-status {
        background-color: #E55B13;
        color: white;
    }

    .book-status:hover {
        background-color: white;
        border: 1px solid #E55B13;
        color: #E55B13;
    }

    .order {
        color: #003060;
    }

    .create-btn {
        border: 1px solid #E55B13;
        color: #E55B13;
    }

    .create-btn:hover {
        background-color: #E55B13;
        color: white;
    }

    .contents,
    .card-body,
    .card-foot {
        color: #003060;
    }

    .edit-book {
        color: #E55B13;
        cursor: pointer;
    }

    input,
    select,
    textarea,
    button {
        border: 1px solid #003060;
    }
</style>

<body>
    <div id="body-container" class="container-fluid px-0">
        {{-- <div class="row mx-0"> --}}
        <div id="sidebar" class="sidebar p-2 min-vh-100">
            <x-sidebar />
        </div>
        <div id="content" class="pe-0 border content">
            <ul class="nav bg-light sticky-top head-nav shadow py-3 px-4">
                <div class="w-100 d-flex justify-content-between mt-1 p-0">
                    <input class="border rounded-3 px-3 w-100" type="text" placeholder="Search">
                    <a href="/" class="pb-2 px-2"><img class="img" src="../assets/Book_Logo.png"
                            alt="Logo"></a>
                </div>
            </ul>
            <div class="container-fuid pt-3 px-3">
                <div class="row border mx-2 mt-3 p-3 shadow rounded">
                    <div class="col d-flex align-items-center">
                        <p class="fs-3 order mx-auto fw-bold m-0">Order Status</p>
                    </div>
                    <div class="btn book-status col-2 ms-1 rounded rounded-4 py-2">
                        <p class="my-0 text-center fw-bold fs-3">0</p>
                        <p class="my-0 text-center fs-6">To ship</p>
                    </div>
                    <div class="btn book-status col-2 mx-2 rounded rounded-4 py-2">
                        <p class="my-0 text-center fw-bold fs-3">0</p>
                        <p class="my-0 text-center fs-6">Completed</p>
                    </div>
                    <div class="btn book-status col-2 mx-2 rounded rounded-4 py-2">
                        <p class="my-0 text-center fw-bold fs-3">0</p>
                        <p class="my-0 text-center fs-6">Cancelled</p>
                    </div>
                    <div class="btn book-status col-2 me-1 rounded rounded-4 py-2">
                        <p class="my-0 text-center fw-bold fs-3">0</p>
                        <p class="my-0 text-center fs-6">Return</p>
                    </div>
                </div>
                <!-- My List contents -->
                <div class="row contents px-3 mt-4">
                    <div class="row justify-content-between mx-auto">
                        <div class="col-4 d-flex flex-row">
                            <h3 class="fw-bold">My List</h3>
                            <button class="create-btn btn px-3 ms-2 d-flex align-items-center h-75"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create listing</button>
                        </div>
                        <div class="col-4 d-flex justify-content-end align-items-center">
                            <label class="fw-bold" for="sort">Sort by</label>
                            <select class="px-3 py-1 h-75 ms-2" name="" id="sort">
                                <option value="Sale">Sale</option>
                                <option value="Exchange">Exchange</option>
                                <option value="Rent">Rent</option>
                            </select>
                        </div>
                        <div class="row justify-content-center mb-5">
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                    width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <a class="fw-bold p-0 edit-book">Edit</a>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button
                                                class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                    src="../assets/like-icon.png" alt="like"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px"
                                    height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <a class="fw-bold p-0 edit-book">Edit</a>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button
                                                class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                    src="../assets/like-icon.png" alt="like"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                    width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <a class="fw-bold p-0 edit-book">Edit</a>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button
                                                class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                    src="../assets/like-icon.png" alt="like"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                    width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <a class="fw-bold p-0 edit-book">Edit</a>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button
                                                class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                    src="../assets/like-icon.png" alt="like"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                    width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <a class="fw-bold p-0 edit-book">Edit</a>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button
                                                class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                    src="../assets/like-icon.png" alt="like"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                    width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <a class="fw-bold p-0 edit-book">Edit</a>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button
                                                class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                    src="../assets/like-icon.png" alt="like"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..."
                                    width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <a class="fw-bold p-0 edit-book">Edit</a>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button
                                                class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                    src="../assets/like-icon.png" alt="like"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..."
                                    width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <a class="fw-bold p-0 edit-book">Edit</a>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button
                                                class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img
                                                    src="../assets/like-icon.png" alt="like"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add listing for </h1>
                            <select name="" class="btn mx-2 fw-bold px-0" id="modal-category">
                                <option value="Sale">Sale</option>
                                <option value="Exchange">Exchange</option>
                                <option value="Rent">Rent</option>
                            </select>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <!-- sale -->
                        <div id="sale" class="modal-body container-fluid px-5">
                            <div class="row">
                                <div class="col-5 me-1 px-0 border mb-2 rounded">
                                    <input type="file" id="image" class="d-none">
                                    <label for="image" class="position-relative w-100 h-100"
                                        style="cursor: pointer;"><img src="../assets/image.png" alt="image"
                                            class="img-fluid w-100 position-absolute top-50 start-50 translate-middle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            data-bs-title="Upload Image"></label>

                                </div>
                                <div class="col">
                                    <select name="" id="" class="w-100 mb-2 px-3 bg-light rounded">
                                        <option value="">Genre</option>
                                    </select>
                                    <input type="text" id="price" class="w-100 mb-2 px-3 rounded"
                                        placeholder="Price">
                                    <!-- <input type="text" id="edition-exchange" class="w-100 mb-2 px-3 rounded" placeholder="Edition"> -->
                                    <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Shipping Fee">
                                    <select name="" id="" class="w-100 mb-2 px-3 bg-light rounded">
                                        <option value="">Condition</option>
                                    </select>
                                    <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Language">
                                </div>
                                <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Title">
                                <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Author">
                                <input type="text" id="edition-sale" class="w-100 mb-2 px-3 rounded"
                                    placeholder="Edition">
                                <!-- <textarea name="" id="exchange-preferences" class="px-3 rounded mb-2" cols="30" rows="4"
                                    placeholder="Exchange Preferences"></textarea> -->
                                <textarea name="" id="" class="px-3 rounded" cols="30" rows="4"
                                    placeholder="Description"></textarea>
                            </div>
                        </div>

                        <!-- exchange -->
                        <div id="exchange" class="modal-body container-fluid px-5">
                            <div class="row">
                                <div class="col-5 me-1 border px-0 mb-2 rounded">
                                    <input type="file" id="image" class="d-none">
                                    <label for="image" class="position-relative w-100 h-100"
                                        style="cursor: pointer;"><img src="../assets/image.png" alt="image"
                                            class="img-fluid w-100 position-absolute top-50 start-50 translate-middle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            data-bs-title="Upload Image"></label>

                                </div>
                                <div class="col">
                                    <select name="" id="" class="w-100 mb-2 px-3 bg-light rounded">
                                        <option value="">Genre</option>
                                    </select>
                                    <!-- <input type="text" id="price" class="w-100 mb-2 px-3 rounded" placeholder="Price"> -->
                                    <input type="text" id="edition-exchange" class="w-100 mb-2 px-3 rounded"
                                        placeholder="Edition">
                                    <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Shipping Fee">
                                    <select name="" id="" class="w-100 mb-2 px-3 bg-light rounded">
                                        <option value="">Condition</option>
                                    </select>
                                    <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Language">
                                </div>
                                <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Title">
                                <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Author">
                                <!-- <input type="text" id="edition-sale" class="w-100 mb-2 px-3 rounded" placeholder="Edition"> -->
                                <textarea name="" id="exchange-preferences" class="px-3 rounded mb-2" cols="30" rows="4"
                                    placeholder="Exchange Preferences"></textarea>
                                <textarea name="" id="" class="px-3 rounded" cols="30" rows="4"
                                    placeholder="Description"></textarea>
                            </div>
                        </div>

                        <!-- rent -->
                        <div id="rent" class="modal-body container-fluid px-5">
                            <div class="row">
                                <div class="col-5 px-0 me-1 border mb-2 rounded">
                                    <input type="file" id="image" class="d-none">
                                    <label for="image" class="position-relative w-100 h-100"
                                        style="cursor: pointer;"><img src="../assets/image.png" alt="image"
                                            class="img-fluid w-100 position-absolute top-50 start-50 translate-middle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            data-bs-title="Upload Image"></label>

                                </div>
                                <div class="col">
                                    <select name="" id="" class="w-100 mb-2 px-3 bg-light rounded">
                                        <option value="">Genre</option>
                                    </select>
                                    <!-- <input type="text" id="price" class="w-100 mb-2 px-3 rounded" placeholder="Price"> -->
                                    <input type="text" id="" class="w-100 mb-2 px-3 rounded"
                                        placeholder="Condition">
                                    <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Shipping Fee">
                                    <input type="text" id="" class="w-100 mb-2 px-3 rounded"
                                        placeholder="Rental Price">
                                    <!-- <select name="" id="" class="w-100 mb-2 px-3 bg-light rounded">
                                            <option value="">Condition</option>
                                        </select> -->
                                    <input type="text" class="w-100 mb-2 px-3 rounded"
                                        placeholder="Security Deposit">
                                </div>
                                <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Title">
                                <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Author">
                                <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Edition">
                                <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Language">
                                <input type="text" class="w-100 mb-2 px-3 rounded" placeholder="Rental Duration">
                                <!-- <input type="text" id="edition-sale" class="w-100 mb-2 px-3 rounded" placeholder="Edition"> -->
                                <textarea name="" id="exchange-preferences" class="px-3 rounded mb-2" cols="30" rows="4"
                                    placeholder="Rental Terms and Condition"></textarea>
                                <textarea name="" id="" class="px-3 rounded" cols="30" rows="4"
                                    placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                            <button type="button" class="btn mx-auto w-25 text-white rounded-3"
                                style="background-color: #E55B13;">List</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container-fluid"> -->
            {{-- <div class="d-flex h-100 w-100">
                    <iframe id="content-frame" class="flex-fill w-100 border" src="./homepage-content.php"
                        frameborder="0"></iframe>
                </div> --}}
            <!-- </div> -->
        </div>
    </div>
    </div>
</body>
<script src="{{ asset('/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    var list_category = document.getElementById("modal-category");

    list_category.addEventListener("change", function() {
        // console.log(String(list_category.value));
        if (list_category.value == "Sale") {
            document.getElementById("sale").style.display = "flex";
            document.getElementById("exchange").style.display = "none";
            document.getElementById("rent").style.display = "none";
        } else if (list_category.value == "Exchange") {
            document.getElementById("sale").style.display = "none";
            document.getElementById("exchange").style.display = "flex";
            document.getElementById("rent").style.display = "none";
        } else if (list_category.value == "Rent") {
            document.getElementById("sale").style.display = "none";
            document.getElementById("exchange").style.display = "none";
            document.getElementById("rent").style.display = "flex";
        }
    })
</script>
{{-- <script src="{{ asset('/js/app-homepage.js') }}"></script> --}}

</html>
