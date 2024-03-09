@include('partials.__header', [
    'title' => 'Login | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<div class="container-fluid px-0 py-3 d-flex min-vh-100">
    <a href="/" class="position-absolute mx-4 my-1 navbar-brand pb-3 px-2" data-aos="fade-right"
        data-aos-duration="2000"><img class="img" src="../assets/Book_Logo.png" alt="Logo"></a>
    <div class="mx-auto login-orange px-5 align-self-center py-2 rounded-3 shadow fillup-form " data-aos="zoom-in-up"
        data-aos-duration="2000" style="width: 503px;">
        <h2 class="fw-bold text-center mb-5">Log In</h2>
        <form action="/loginprocess" method="post">
            @csrf
            <div class="form-outline mt-4">
                <input type="text" id="username" name="username" class="form-control"/>
                <label class="form-label" for="username">Username</label>
            </div>
            <div class="form-outline mt-4">
                <input type="password" id="password" name="password" class="form-control"/>
                <label class="form-label" for="password">Password</label>
            </div>
            {{-- <input type="checkbox" id="show-password" class="ms-2">
            <label for="show-password">Show Password</label> <br> --}}
            @if (isset($message))
                <p class="text-danger text-center fw-bold mt-3">{{$message}}</p>
            @endif
            <button class="btn mt-3 w-100 sign-up-btn mb-3 fw-bold mt-5" type="submit">Log in</button>
        </form>
        <p class="mt-5 text-center">Don't have an account? <a href="/role">Click here!</a></p>
    </div>
</div>
</body>
@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])
<script>
    AOS.init();

    var password_input = document.getElementById("password");
    var show_password = document.getElementById("show-password");
    var boolValue = 0;

    show_password.addEventListener("change", function() {
        if (boolValue == 0) {
            document.getElementById("password").setAttribute('type', 'text');
            boolValue = 1;
        } else {
            document.getElementById("password").setAttribute('type', 'password');
            boolValue = 0;
        }
    });
</script>

<script>
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