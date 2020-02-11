<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rumah Lelang</title>
    <link rel="shortcut icon" href="assets/img/index/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/index.js"></script>
    <script src="assets/js/jquery.min.js"></script>
</head>
<body id="in" class="d-flex">
    <div class="auth-form d-flex">
        <form action="">
            <h1 class="d-flex text-thin align-i-center mt-0 mb-5"><img src="assets/img/index/logo.png" alt="" class="mr-1" width="35" height="35"> rumahlelang</h1>
            <input type="text" class="in-input" placeholder="Username or Email">
            <input type="email" class="in-input mt-2" placeholder="Email Address" style="display: none">
            <input type="password" class="in-input mt-2" placeholder="Your Password">
            <button type="submit" class="bt bt-primary-reverse fullwidth mt-2 c-pointer">MASUK</button>
            <div class="d-flex j-space-beetween mt-5 mb-5 attr-added">
                <hr style="width: 25%"><p class="m-1">atau buat akun baru</p><hr style="width: 25%">
            </div>
            <button type="button" class="bt bt-primary-reverse fullwidth c-pointer" onclick="auth('signup')">DAFTAR BARU</button>
        </form>
    </div>
    <div class="auth-banner background-setup"></div>
</body>
</html>