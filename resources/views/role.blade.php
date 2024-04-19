@include('partials.__header', [
    'title' => 'Select Role | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/role-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<div class="container-fluid p-4">
    <a href="/" class="position-absolute navbar-brand" data-aos="fade-right"
        data-aos-duration="2000"><img class="img" src="../assets/Book_Logo.png" alt="Logo"></a>

    <div class="container mt-5" data-aos="zoom-in-up" data-aos-duration="2000">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3 class="fw-bold">SELECT YOUR ROLE</h3>
                    <p>Please choose a <span>role</span> for us to identify you</p>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="advisor_thumb"><img src="./assets/reader.svg" alt=""></div>
                    <a href="/rolereader" style="text-decoration: none;">
                        <div class="single_advisor_details_info">
                            <h6 class="fw-bold">Book Reader</h6>
                            <p class="designation">Ability to read books,  write, edit, delete reviews, and message with other users.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="advisor_thumb"><img src="./assets/author.svg" alt=""></div>
                    <a href="/roleauthor" style="text-decoration: none;">
                        <div class="single_advisor_details_info">
                            <h6 class="fw-bold">Book Author</h6>
                            <p class="designation">Ability to list book for online reading, messaging, read reviews, ability to list books for exchange, send exchange request to other users,</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])

<script>
    AOS.init();
</script>
