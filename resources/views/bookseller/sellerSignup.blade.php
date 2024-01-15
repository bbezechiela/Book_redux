@include('partials.__header', [
    'title' => 'Seller Sign Up | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])
<div class="container-fluid p-4">
    <a href="/sellerboard" class="position-absolute mx-4 my-1 navbar-brand pb-3 px-2" data-aos="fade-right"
        data-aos-duration="2000"><img class="img" src="../assets/Book_Logo.png" alt="Logo"></a>
    <h1 id="create-acct" class="text-center fw-bold mx-auto w-50 pb-1" data-aos="fade-down" data-aos-duration="1500">
        Create Account</h1>
    <form id="form" action="/registerseller" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container px-0 rounded rounded-2 shadow fillup-form signup-form" data-aos="zoom-in-right"
            data-aos-duration="1500">
            <div class="row justify-content-center align-items-center" style="margin-top: 2em;">
                <div class="col-12 col-md-3 px-5">
                    <img class="img mx-auto d-block rounded-circle border" id="img-icon" src="../assets/user.png"
                        alt="upload_profile" width="100" height="100">
                    <input type="file" class="d-none" accept="image/*" id="profileUpload" name="profile_photo"
                        required>
                    <label for="profileUpload" class="btn w-100 w-50 mx-auto mt-3 py-0 px-0 upload-btn">Upload
                        Profile</label>
                    <input type="text" name="type" value="Bookseller" hidden>
                </div>
            </div>
            <div class="row px-3 py-3 mx-3">
                <div class="col mx-2 d-flex fillup-form  justify-content-center flex-column w-50">
                    <div class="form-outline mt-4">
                        <input type="text" id="ownerName" name="owner_name" class="form-control" required />
                        <label class="form-label" for="ownerName">Bookstore Owner Name</label>
                    </div>
                    <div class="form-outline mt-4">
                        <input type="email" id="email" name="email" class="form-control" required />
                        <label class="form-label" for="email">Email</label>
                    </div>
                    <div class="form-outline mt-4">
                        <input type="text" id="address" name="address" class="form-control" required />                        
                        <label class="form-label" for="address">Registered Business Address</label>
                        {{-- <div class="px-3 py-1 position-absolute" style="background-color: rgb(255, 240, 240)">sample</div> --}}
                    </div>
                    <div class="form-outline mt-4">
                        <input type="text" id="registration_number" name="registration_number" class="form-control"
                            required />
                        <label class="form-label" for="registration_number">Registration Number</label>
                    </div>
                    <div class="form-outline mt-4">
                        <input type="text" id="username" name="username" class="form-control" required />
                        <label class="form-label" for="username">Username</label>
                    </div>

                    <div class="mx-1 mt-3 d-flex justify-content-start">
                        <span class="username-text">
                            Username Already Exist. Please try another username.
                        </span>
                    </div>
                </div>
                <div class="col mx-2 d-flex fillup-form  justify-content-center flex-column w-50">
                    <div class="form-outline mt-4">
                        <input type="text" id="business_name" name="business_name" class="form-control" required />
                        <label class="form-label" for="business_name">Business Name</label>
                    </div>
                    <div class="form-outline mt-4">
                        <input type="text" id="phoneNumber" name="phone_number" class="form-control" required />
                        <label class="form-label" for="phoneNumber">Contact Number</label>
                    </div>
                    <div class="form-outline mt-4">
                        <input type="text" id="date_registered" name="date_registered" class="form-control"
                            onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required />
                        <label class="form-label" for="date_registered">Date Registered</label>
                    </div>
                    <div class="form-outline mt-4">
                        <input class="form-control" type="file" id="permit" name="permit" accept="image/*"
                            multiple />
                        <label for="permit" class="form-label">Business Permit</label>
                    </div>
                    <div class="form-outline mt-4">
                        <input type="password" id="password" name="password" class="form-control" required />
                        <label class="form-label" for="password">Password</label>
                    </div>
                    <div class="mx-1 mt-3 d-flex justify-content-start">
                        <span class="text-secondary" style="white-space: nowrap;">
                            Tip: Use upper and lowercase, numbers, and symbols for strong passwords.
                            <label type="checkbox" id="show-password"><span id="pass-tip"></span></label>
                        </span>
                        {{-- <input type="checkbox" id="show-password" class="ms-2">
                        <label for="show-password" style="white-space: nowrap; margin-left: 8px;">Show Password<span
                                id="pass-tip"></span></label> --}}
                    </div>
                </div>
            </div>

            <div class="mx-3 text-center px-4 py-2 mt-4">
                <button type="submit" id="sign-up" class="sign-up-btn btn mx-auto w-25 h-25 fw-bold">Sign
                    Up</button>
                <p class="mt-2 text-black text-center">Already have an account? <a href="./login">Click
                        here!</a></p>
            </div>
        </div>
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

    document.addEventListener("DOMContentLoaded", function() {
        const formInputs = document.querySelectorAll(".form-control");
        formInputs.forEach(function(input) {
            input.addEventListener("focus", function() {
                const label = input.nextElementSibling;
                label.style.top = "-20px";
                label.style.fontSize = "12px";
                label.style.color = "#555";
            });
            input.addEventListener("blur", function() {
                if (input.value === "") {
                    const label = input.nextElementSibling;
                    label.style.top = ".4em";
                    label.style.fontSize = "";
                    label.style.color = "#003060";
                }
            });
        });
    });

    document.getElementById('address').addEventListener('input', () => {
        fetch("https://api.geoapify.com/v1/geocode/autocomplete?text=" + document.getElementById('address').value + "&apiKey=071399a5ce1a4ecc90e9d3070dd7fb1e", {
            method: 'GET'
        })
            .then(response => response.json())
            .then(result => {
                // console.log(result);
                result.features.forEach(suggestion => {
                    console.log(suggestion.properties.city);
                });
            })
            .catch(error => console.error(error));
    });
</script>

</html>
