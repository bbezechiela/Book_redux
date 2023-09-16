<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/bookloopph-website-favicon-white.png">
    <link rel="stylesheet" href="./components/css/style.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->

</head>
<title>BookLoopPH</title>
</head>

<body>
    <div class="container-fluid px-0">

        <!-- NAVBAR -->
        <nav id="navbar" class="navbar navbar-expand-lg w-100 fixed-top border-bottom border-black" style="background-color: #DEA057;">
            <div class="container-fluid px-5">
                <a class="navbar-brand text-center" href="#">
                    <img id="logo" class="img-fluid" src="assets/bookloopph-website-favicon-white.png" alt="Bootstrap" width="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav container-fluid justify-content-end">
                        <a id="home" class="nav-link active text-white mx-3 fs-5" aria-current="page" href="#">Home</a>
                        <a id="how-to-use" class="nav-link text-white mx-3 fs-5" href="components/hints.php">Hints</a>
                        <a id="about-us" class="nav-link text-white mx-3 fs-5" href="./components/aboutUs.php">About Us</a>
                        <a id="about-us" class="nav-link text-white mx-3 fs-5 fw-bold" href="./components/login.php">Login</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- MAIN -->
        <main class="container-fluid px-0">

            <!-- HERO -->
            <div class="min-vh-100">
                <img id="bg-img" src="assets/index-bg.jpeg" alt="background image" class="img-fluid min-vh-100" style="filter: brightness(70%);">
                <div class="position-absolute top-50 start-50 translate-middle w-100">
                    <div id="contain-text" class=" p-3 w-100">
                        <h1 class="text-center text-light fw-bold" style="font-size: 50px;">
                            Welcome to BookLoopPH
                        </h1>
                        <p class="text-center text-light fs-3">
                            Discover a vibrant community where you can<br>
                            buy, sell, exchange, and rent your used books<br>
                            with fellow book enthusiasts
                        </p>
                        <a id="join" href="./components/signup.php" class="btn rounded-pill fs-4 fw-bold bg-light position-absolute start-0 start-50 translate-middle-x w-25 p-1 mt-2">Join</a>
                    </div>
                </div>
            </div>

            <div class="offset position-relative min-vh-100 p-3">

                <!-- HOW IT WORKS LINKS -->
                <div class="row row-cols-4 g-4 m-5">
                    <div class="col">
                        <a href="components/howitworks.php?t=selling" class="card h-100 mx-auto text-decoration-none text-center text-white border-0" style="max-width: 14rem; background-color: #8A6342;">
                            <div class="card-body">
                                <img src="assets/Shop (1) 1.png" alt="shop">
                            </div>
                            <div class="card-footer border border-light border-3 border-top border-0 ">
                                Shop <img src="assets/Next 1.png" alt="next" height="24px">
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="components/howitworks.php?t=exchange" class="card h-100 mx-auto text-decoration-none text-center text-white border-0" style="max-width: 14rem; background-color: #8A6342;">
                            <div class="card-body">
                                <img src="assets/Exchange 1.png" alt="exchange">
                            </div>
                            <div class="card-footer border border-light border-3 border-top border-0">
                                Exchange <img src="assets/Next 1.png" alt="next" height="24px">
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="components/howitworks.php?t=rent" class="card h-100 mx-auto text-decoration-none text-center text-white border-0" style="max-width: 14rem; background-color: #8A6342;">
                            <div class="card-body">
                                <img src="assets/Rent 1.png" alt="rent">
                            </div>
                            <div class="card-footer border border-light border-3 border-top border-0 ">
                                Rent <img src="assets/Next 1.png" alt="next" height="24px">
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="components/howitworks.php?t=donate" class="card h-100 mx-auto text-decoration-none text-center text-white border-0" style="max-width: 14rem; background-color: #8A6342;">
                            <div class="card-body">
                                <img src="assets/Donate 1.png" alt="donate">
                            </div>
                            <div class="card-footer border border-light border-3 border-top border-0 ">
                                Donate <img src="assets/Next 1.png" alt="next" height="24px">
                            </div>
                        </a>
                    </div>
                </div>

                <!-- ANOTHER HERO -->
                <div class="container my-5 w-100 text-center" style="color: #8A6342;">
                    <h2 class="fw-bold" style="font-size: 50px;">
                        Build Your community
                    </h2>
                    <p class="fs-3">
                        BookLoopPh is your ultimate destination for connecting book lovers and facilitating the exchange of knowledge. Whether you’re seeking a captivating novel, a rare gem, or looking to declutter your bookshelf, BookLoopPH offers a seamless platform to connect, share, and explore literary treasures.
                    </p>
                    <a href="./components/signup.php" class="btn text-decoration-none text-light rounded-pill fs-4 fw-bold w-25 p-1 mt-2" style="background-color: #8A6342;">
                        Explore more
                    </a>
                </div>

                <!-- PICTURES-OF-ENGAGEMENT -->
                <div class="container my-5">
                    <div class="d-flex justify-content-between mb-3">
                        <div style="background-color: #F8F3EF;" class="rounded rounded-4">
                            <img src="assets/111 1.png" alt="111">
                        </div>
                        <div style="background-color: #F8F3EF;" class="rounded rounded-4">
                            <img src="assets/222 1.png" alt="222">
                        </div>
                    </div>
                    <div class="d-flex justify-content-evenly px-md-5">
                        <div style="background-color: #F8F3EF;" class="rounded rounded-4">
                            <img src="assets/333 1.png" alt="333">
                        </div>
                        <div style="background-color: #F8F3EF;" class="rounded rounded-4">
                            <img src="assets/444 1.png" alt="444">
                        </div>
                        <div style="background-color: #F8F3EF;" class="rounded rounded-4">
                            <img src="assets/555 1.png" alt="555">
                        </div>
                    </div>
                </div>

                <!-- NEW ARRIVAL -->
                <div class="container my-5 d-flex flex-column gap-5">
                    <h2 class="text-center fw-bold" style="font-size: 50px; color: #8A6342">
                        New Arrival
                    </h2>
                    <div class="d-flex justify-content-evenly">
                        <a href="#" class="text-center text-decoration-none" style="color: #8A6342">
                            <img src="assets/b2 1.png" alt="b2">
                            <div class="d-grid">
                                <span class="fw-bold">Bible (Not Bubble Bath)</span>
                                <span>Young Adult</span>
                                <span class="fw-bold">P100.00</span>
                            </div>
                        </a>
                        <a href="#" class="text-center text-decoration-none" style="color: #8A6342">
                            <img src="assets/b2 1.png" alt="b2">
                            <div class="d-grid">
                                <span class="fw-bold">Bible (Not Bubble Bath)</span>
                                <span>Young Adult</span>
                                <span class="fw-bold">P100.00</span>
                            </div>
                        </a><a href="#" class="text-center text-decoration-none" style="color: #8A6342">
                            <img src="assets/b2 1.png" alt="b2">
                            <div class="d-grid">
                                <span class="fw-bold">Bible (Not Bubble Bath)</span>
                                <span>Young Adult</span>
                                <span class="fw-bold">P100.00</span>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-evenly">
                        <a href="#" class="text-center text-decoration-none" style="color: #8A6342">
                            <img src="assets/b2 1.png" alt="b2">
                            <div class="d-grid">
                                <span class="fw-bold">Bible (Not Bubble Bath)</span>
                                <span>Young Adult</span>
                                <span class="fw-bold">P100.00</span>
                            </div>
                        </a>
                        <a href="#" class="text-center text-decoration-none" style="color: #8A6342">
                            <img src="assets/b2 1.png" alt="b2">
                            <div class="d-grid">
                                <span class="fw-bold">Bible (Not Bubble Bath)</span>
                                <span>Young Adult</span>
                                <span class="fw-bold">P100.00</span>
                            </div>
                        </a><a href="#" class="text-center text-decoration-none" style="color: #8A6342">
                            <img src="assets/b2 1.png" alt="b2">
                            <div class="d-grid">
                                <span class="fw-bold">Bible (Not Bubble Bath)</span>
                                <span>Young Adult</span>
                                <span class="fw-bold">P100.00</span>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-evenly">
                        <a href="#" class="text-center text-decoration-none" style="color: #8A6342">
                            <img src="assets/b2 1.png" alt="b2">
                            <div class="d-grid">
                                <span class="fw-bold">Bible (Not Bubble Bath)</span>
                                <span>Young Adult</span>
                                <span class="fw-bold">P100.00</span>
                            </div>
                        </a>
                        <a href="#" class="text-center text-decoration-none" style="color: #8A6342">
                            <img src="assets/b2 1.png" alt="b2">
                            <div class="d-grid">
                                <span class="fw-bold">Bible (Not Bubble Bath)</span>
                                <span>Young Adult</span>
                                <span class="fw-bold">P100.00</span>
                            </div>
                        </a><a href="#" class="text-center text-decoration-none" style="color: #8A6342">
                            <img src="assets/b2 1.png" alt="b2">
                            <div class="d-grid">
                                <span class="fw-bold">Bible (Not Bubble Bath)</span>
                                <span>Young Adult</span>
                                <span class="fw-bold">P100.00</span>
                            </div>
                        </a>
                    </div>

                </div>

                <!-- CATEGORY CARDS -->
                <div class="container my-5 d-grid gap-3">
                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="card border-0 rounded-0" style="background-color: #F1F1F1;">
                                <div class="card-body">
                                    <img src="assets/Crime and Thriller 1.png" alt="crime and thriller">
                                </div>
                                <div class="card-footer d-flex flex-row align-items-center bg-transparent  border-3">
                                    <div class="flex-grow-1 d-grid">
                                        <span class="fs-4">Crime and Thriller</span>
                                        <span>Discover a dark new corner</span>
                                    </div>
                                    <a href="#" class="btn text-white" style="background-color: #8A6342;">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card border-0 rounded-0" style="background-color: #F1F1F1;">
                                <div class="card-body">
                                    <img src="assets/Crime and Thriller 1.png" alt="crime and thriller">
                                </div>
                                <div class="card-footer d-flex flex-row align-items-center bg-transparent  border-3">
                                    <div class="flex-grow-1 d-grid">
                                        <span class="fs-4">Crime and Thriller</span>
                                        <span>Discover a dark new corner</span>
                                    </div>
                                    <a href="#" class="btn text-white" style="background-color: #8A6342;">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="card border-0 rounded-0" style="background-color: #F1F1F1;">
                                <div class="card-body">
                                    <img src="assets/Crime and Thriller 1.png" alt="crime and thriller">
                                </div>
                                <div class="card-footer d-flex flex-row align-items-center bg-transparent  border-3">
                                    <div class="flex-grow-1 d-grid">
                                        <span class="fs-4">Crime and Thriller</span>
                                        <span>Discover a dark new corner</span>
                                    </div>
                                    <a href="#" class="btn text-white" style="background-color: #8A6342;">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card border-0 rounded-0" style="background-color: #F1F1F1;">
                                <div class="card-body">
                                    <img src="assets/Crime and Thriller 1.png" alt="crime and thriller">
                                </div>
                                <div class="card-footer d-flex flex-row align-items-center bg-transparent  border-3">
                                    <div class="flex-grow-1 d-grid">
                                        <span class="fs-4">Crime and Thriller</span>
                                        <span>Discover a dark new corner</span>
                                    </div>
                                    <a href="#" class="btn text-white" style="background-color: #8A6342;">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="card border-0 rounded-0" style="background-color: #F1F1F1;">
                                <div class="card-body">
                                    <img src="assets/Crime and Thriller 1.png" alt="crime and thriller">
                                </div>
                                <div class="card-footer d-flex flex-row align-items-center bg-transparent  border-3">
                                    <div class="flex-grow-1 d-grid">
                                        <span class="fs-4">Crime and Thriller</span>
                                        <span>Discover a dark new corner</span>
                                    </div>
                                    <a href="#" class="btn text-white" style="background-color: #8A6342;">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card border-0 rounded-0" style="background-color: #F1F1F1;">
                                <div class="card-body">
                                    <img src="assets/Crime and Thriller 1.png" alt="crime and thriller">
                                </div>
                                <div class="card-footer d-flex flex-row align-items-center bg-transparent  border-3">
                                    <div class="flex-grow-1 d-grid">
                                        <span class="fs-4">Crime and Thriller</span>
                                        <span>Discover a dark new corner</span>
                                    </div>
                                    <a href="#" class="btn text-white" style="background-color: #8A6342;">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </main>
    </div>
    <!-- 
    <div id="faq" class="offset position-relative min-vh-100" style="background-color: #E0D8B0;">
        <div class="position-absolute start-50 top-0 translate-middle" style="margin-top: 150px;">
            <h1 class="fw-bold fs-1">Frequently Asked Questions</h1>
        </div>
    </div>

    <div id="why_us" class="offset position-relative min-vh-100" style="background-color: #DEA057;">
        <div class="position-absolute start-50 top-0 translate-middle" style="margin-top: 150px;">
            <h1 class="fw-bold fs-1">Why Us?</h1>
        </div>
    </div>

    <div id="about_us" class="offset position-relative min-vh-100 bg-white">
        <div class="position-absolute start-50 top-0 translate-middle" style="margin-top: 150px;">
            <h1 class="fw-bold fs-1">About Us</h1>
        </div>
    </div> -->

</body>

<!-- <script src="bootstrap.min.js"></script> -->
<script src="./bootstrap/bootstrap.bundle.min.js"></script>

</html>