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
        <form action="/in" method="post">
            {{ csrf_field() }}
            <h1 class="d-flex text-thin align-i-center mt-0 mb-5"><img src="assets/img/index/logo.png" alt="" class="mr-1" width="35" height="35"> rumahlelang</h1>
            @if(\Session::has('alert-fail'))
                <div class="alert alert-danger mb-2">
                    <img src="assets/img/index/icon/danger.png" alt="">{{Session::get('alert-fail')}}
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success mb-2">
                    <img src="assets/img/index/icon/success.png" alt="">{{Session::get('alert-success')}}
                </div>
            @endif
            {{-- username --}}
            <input name="username" type="text" class="in-input" placeholder="Username" style="display: none">
            {{-- email --}}
            <input name="email" type="email" class="in-input mt-2" placeholder="Email Address" required>
            {{-- password --}}
            <input name="password" type="password" class="in-input mt-2" placeholder="Your Password" required>

            <button type="submit" class="bt bt-primary-reverse fullwidth mt-2 c-pointer" name="submit_login">MASUK</button>
            <div class="d-flex j-space-beetween mt-5 mb-5 attr-added">
                <hr style="width: 25%"><p class="m-1">atau buat akun baru</p><hr style="width: 25%">
            </div>
            {{-- register button will show signup side --}}
            <button type="button" class="bt bt-primary-reverse fullwidth c-pointer" onclick="auth('signup')">DAFTAR BARU</button>
        </form>
    </div>
    <div class="auth-banner background-setup"></div>
</body>
</html>