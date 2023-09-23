@include('partials.__header', [
    'title' => 'Sign Up | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])
<div class="container-fluid p-4">
    <a href="/" class="position-absolute mx-4 my-1 navbar-brand pb-3 px-2" data-aos="fade-right"
        data-aos-duration="2000"><img class="img" src="../assets/Book_Logo.png" alt="Logo"></a>
    <h1 id="create-acct" class="text-center fw-bold mx-auto w-50 pb-1" data-aos="fade-down" data-aos-duration="1500">
        Create Account</h1>
    <form id="form" action="/register" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container px-0 rounded rounded-2 shadow fillup-form signup-form" data-aos="zoom-in-right"
            data-aos-duration="1500">
            <!-- <div class="orange-design"></div> -->
            <div class="row px-3 py-3 mx-3 border-bottom border-2">
                <div class="col-3 d-flex align-items-center flex-column px-5 py-3">
                    <!-- <p class="text-center fw-bold fs-6">Upload Profile Photo</p> -->
                    <img class="img mx-auto rounded-circle border" id="img-icon" src="../assets/accounts.png"
                        alt="upload_profile" width="120" height="120">
                    <input type="file" class="d-none" accept="*/image" id="profileUpload" name="profile_photo"
                        required>
                    <label for="profileUpload" class="btn w-100 w-50 mx-auto mt-3 py-0 px-0 upload-btn">Upload
                        Profile</label>
                </div>
                <div class="col mx-2 d-flex justify-content-center flex-column w-50">
                    <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2" id="firstName" name="first_name" type="text"
                            placeholder="First Name" required>
                    </div>
                    <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2" id="email" name="email" type="email"
                            placeholder="Email" required>
                    </div>
                    <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2" id="address" name="address" type="text"
                            placeholder="Address" required>
                    </div>
                    <div class="mx-1 d-flex justify-content-center">
                        <select class="w-100 mt-4 fs-6 px-2" name="gender" id="gender" required>
                            <option value="" disabled selected>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col mx-2 d-flex justify-content-center flex-column w-50">
                    <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2" id="lastName" name="last_name" type="text"
                            placeholder="Last Name" required>
                    </div>
                    <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2" id="phoneNumber" name="phone_number" type="text"
                            placeholder="Phone Number" required>
                    </div>
                    <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2" id="birthday" name="birthday" type="text"
                            placeholder="Birthday" onfocus="(this.type='date')"
                            onblur="if(this.value==''){this.type='text'}" required>
                    </div>
                    <div class="mx-1 d-flex justify-content-center">
                        <input class="w-100 mt-3 fs-6 px-2" id="age" name="age" type="number"
                            placeholder="Age" required>
                    </div>
                </div>
            </div>
            <div class="row px-3 py-3 mx-3">
                <div class="col-4 px-5 py-2 fillup-form border-end border-2">
                    <input class="w-100 fs-6 mb-3 px-2" id="username" name="username" type="text"
                        placeholder="Username" required>
                    <input class="w-100 fs-6 mb-2 px-2" id="password" name="password" type="password"
                        placeholder="Password" required>
                    <span id="pass-tip"></span><br>
                    <input type="checkbox" id="show-password" class="ms-2 mb-3">
                    <label for="show-password">Show Password</label> <br>
                    <span class="text-secondary">
                        Tip: Use upper and lowercase, numbers, and symbols for strong passwords.
                    </span>
                </div>
                <div class="col container-fluid px-4 py-2">
                    <p class="fw-bold">Kindly select genres that you are interested</p>
                    <div class="row px-3">
                        <div class="col-4">
                            <input type="checkbox" name="interest[]" id="educational" value="Educational">
                            <label for="educational">Educational</label><br>
                            <input type="checkbox" name="interest[]" id="romance" value="Romance & Saga">
                            <label for="romance">Romance & Saga</label><br>
                            <input type="checkbox" name="interest[]" id="fantasy" value="Fantasy & Adventure">
                            <label for="fantasy">Fantasy & Adventure</label><br>
                            <input type="checkbox" name="interest[]" id="science" value="Science Fiction">
                            <label for="science">Science Fiction</label><br>
                            <input type="checkbox" name="interest[]" id="history" value="Historical Fiction">
                            <label for="history">Historical Fiction</label>
                        </div>
                        <div class="col">
                            <input type="checkbox" name="interest[]" id="mystery" value="Mystery & Suspense">
                            <label for="mystery">Mystery & Suspense</label><br>
                            <input type="checkbox" name="interest[]" id="youngAdult" value="Young Adult">
                            <label for="youngAdult">Young Adult</label><br>
                            <input type="checkbox" name="interest[]" id="non-fiction"
                                value="Non-Fiction & Biography">
                            <label for="non-fiction">Non-Fiction & Biography</label><br>
                            <input type="checkbox" name="interest[]" id="horror" value="Horror & Supernatural">
                            <label for="horror">Horror & Supernatural</label><br>
                            <input type="checkbox" name="interest[]" id="comedy" value="Comedy & Satire">
                            <label for="comedy">Comedy & Satire</label>
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="interest[]" id="poetry" value="Poetry & Prose">
                            <label for="poetry">Poetry & Prose</label><br>
                            <input type="checkbox" name="interest[]" id="self-help" value="Self-Help">
                            <label for="self-help">Self-Help</label><br>
                            <input type="checkbox" name="interest[]" id="crime" value="Crime & Thriller">
                            <label for="crime">Crime & Thriller</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-3 text-center px-4 py-2">
                <button type="submit" id="sign-up" class="sign-up-btn btn mx-auto w-25 h-25 fw-bold">Sign
                    Up</button>
                <p class="mt-2 text-black text-center">Already have an account? <a href="./login">Click
                        here!</a></p>
            </div>
        </div>
        <!-- <div class="" data-aos="zoom-in-right" data-aos-duration="1500">
                    <p class="mt-2 text-black text-center">Already have an account? <a href="./login.php">Click here!</a></p>
                </div> -->
    </form>
</div>
</body>
@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])
<script>
    AOS.init();

    var uploaded_image = document.getElementById("profileUpload");
    var show_password = document.getElementById("show-password");
    var boolValue = 0;

    var pass = document.getElementById("password");
    var submit_btn = document.getElementById("sign-up");

    uploaded_image.addEventListener("change", function() {
        var image = document.getElementById("img-icon");
        image.src = URL.createObjectURL(event.target.files[0]);
    });

    show_password.addEventListener("change", function() {
        if (boolValue == 0) {
            document.getElementById("password").setAttribute('type', 'text');
            boolValue = 1;
        } else {
            document.getElementById("password").setAttribute('type', 'password');
            boolValue = 0;
        }
    });

    pass.addEventListener("input", function() {
        var tip = document.getElementById("pass-tip");
        var tip_color = ["#ff0000", "#ff8b00", "#fff300", "#00ff17", "#ff00e0"];
        var labels = ["Very Weak", "Weak", "Moderate", "Strong", "Very Strong"];

        var strength = 0;

        if (pass.value.match(/[a-z]+/)) {
            strength += 1;
        }
        if (pass.value.match(/[A-Z]+/)) {
            strength += 1;
        }
        if (pass.value.match(/[0-9]+/)) {
            strength += 1;
        }
        if (pass.value.match(/[!@#$%^&*]+/)) {
            strength += 1;
        }
        if (pass.value.length >= 8) {
            strength += 1;
        }

        tip.style.color = tip_color[strength - 1];
        tip.className += "ms-2 mb-3 fw-bold"
        tip.textContent = labels[strength - 1];
    });
</script>

</html>
