@include('partials.__header', [
    'title' => 'Sign Up | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])
<div class="container-fluid p-4">
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
    <a href="/" class="position-absolute mx-4 my-1 navbar-brand pb-3 px-2" data-aos="fade-right"
        data-aos-duration="2000"><img class="img" src="../assets/Book_Logo.png" alt="Logo"></a>
    <h1 id="create-acct" class="text-center fw-bold mx-auto w-50 pb-1" data-aos="fade-down" data-aos-duration="1500">
        Create Account</h1>
    <form id="form" action="/register" method="post" enctype="multipart/form-data">
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
                    <input type="text" name="type" value="General User" hidden>
                </div>
            </div>
            <div class="row px-3 py-3 mx-3">
                <div class="col mx-2 d-flex fillup-form  justify-content-center flex-column w-50">
                    <div class="form-outline mt-4">
                        <input type="text" id="firstName" name="first_name" class="form-control" required />
                        <label class="form-label" for="firstName">First Name</label>
                    </div>
                    <div class="form-outline mt-4">
                        <input type="email" id="email" name="email" class="form-control" required />
                        <label class="form-label" for="email">Email</label>
                    </div>
                    <div class="form-outline mt-4">
                        <select class="form-control" name="gender" id="gender" required>
                            <option value="" disabled selected></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <label class="form-label" for="gender">Gender</label>
                    </div>
                    <div class="form-outline mt-4">
                        <input type="text" id="username" name="username" class="form-control" required />
                        <label class="form-label" for="username">Username</label>
                    </div>

                    <div class="mx-1 mt-3 d-flex justify-content-start">
                        {{-- <span class="username-text">
                            Username Already Exist. Please try another username.
                        </span> --}}
                        <p id="response-message" class="text-danger fw-bold"></p>
                    </div>
                </div>
                <div class="col mx-2 d-flex fillup-form  justify-content-center flex-column w-50">
                    <div class="form-outline mt-4">
                        <input type="text" id="lastName" name="last_name" class="form-control" required />
                        <label class="form-label" for="lastName">Last Name</label>
                    </div>
                    <div class="form-outline mt-4">
                        <input type="text" id="phoneNumber" name="phone_number" class="form-control" required />
                        <label class="form-label" for="phoneNumber">Contact Number</label>
                    </div>
                    <div class="form-outline mt-4">
                        <input type="text" id="birthday" name="birthday" class="form-control"
                            onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required />
                        <label class="form-label" for="birthday">Birthday</label>
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

                        {{-- <label for="show-password" style="white-space: nowrap; margin-left: 8px;">Show Password<span
                                id="pass-tip"></span></label>  --}}

                    </div>
                </div>
            </div>


            <div class="mx-3 text-center px-4 py-2 mt-4">
                {{-- @if (isset($message)) --}}
                
                {{-- @endif --}}
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
    var username = document.getElementById('username');

    username.addEventListener('input', () => {

        if (username.value.length > 1) {
            console.log(username.value);
            const requestOptions = {
                method: 'GET',
            };
            fetch('/checkusername/' + username.value, requestOptions)
                .then(response => response.json())
                .then(result => {
                    console.log(result);
                    if (result.message == 'not exist') {
                        document.getElementById('response-message').textContent = '';
                    } else {
                        document.getElementById('response-message').textContent = username.value + ' ' + result.message;
                    }
                })
                .catch(error => console.log(error));
        }
    });

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
</script>

</html>
