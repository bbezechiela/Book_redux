<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | BookRedux</title>
    <link rel="icon" href="{{ asset('/assets/Book_Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/aos-master/dist/aos.css') }}">
</head>

<body>
    <div class="container-fluid px-0 py-3 d-flex min-vh-100">
        <a href="/" class="position-absolute mx-4 my-1 navbar-brand pb-3 px-2" data-aos="fade-right"
            data-aos-duration="2000"><img class="img" src="../assets/Book_Logo.png" alt="Logo"></a>
        <div class="mx-auto login-orange px-5 align-self-center py-2 rounded-3 shadow fillup-form" data-aos="zoom-in-up"
            data-aos-duration="2000" style="width: 503px;">
            <h2 class="fw-bold text-center mb-5">Log In</h2>
            <form action="login.php" method="post">
                <input class="w-100 fs-5 mb-3 px-2" id="username" name="username" type="text"
                    placeholder="Username">
                <input class="w-100 fs-5 px-2" id="password" name="password" type="password" placeholder="Password">
                <input type="checkbox" id="show-password" class="ms-2">
                <label for="show-password">Show Password</label> <br>
                <button class="btn mt-3 w-100 sign-up-btn mb-3 fw-bold" type="submit">Log in</button>
            </form>
            <p class="mt-5 text-center">Don't have an account? <a href="/signup">Click here!</a></p>
        </div>
    </div>
</body>
<script src="/bootstrap/bootstrap.bundle.min.js"></script>
<script src="/aos-master/dist/aos.js"></script>
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

</html>
