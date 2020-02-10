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
<body>
    <nav id="index-navbar">
        <div id="logo" class="d-i-flex align-i-center">
            <img src="assets/img/index/logo.png" alt="" width="30">
            <a href="/" class="ml-1">rumahlelang</a>
        </div>

        <div id="nav-tool" class="d-flex float-right">
            <img src="assets/img/index/icon/search.png" alt="" class="i-search mr-2 align-s-center c-pointer">
            <button class="bt bt-primary mr-2 c-pointer">Masuk</button>
            <img class="profile c-pointer" src="assets/img/index/profile.png" alt="">
        </div>
    </nav>
    @yield('body')
</body>
</html>