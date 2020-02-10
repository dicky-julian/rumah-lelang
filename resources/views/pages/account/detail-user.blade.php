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
<body id="profile-user">
    <div id="profile-navbar">
        <div id="logo" class="d-i-flex align-i-center">
            <img src="assets/img/index/logo-white.png" alt="" width="30">
            <a href="/" class="ml-1 color-white">rumahlelang</a>
        </div>
    </div>

    <div id="profile-container" class="d-flex mt-4">
        <div class="profile-sidebar text-center h-fit-content">
            <div class="profile">
                <img src="assets/img/index/profile.png" alt="" class="d-none">
                <h4 class="font-neue mt-1 mb-1">Dicky Julian Pratama</h4>
                <h5 class="mt-1 text-thin">julian18.ech@gmail.com</h5>
                <h5 class="d-none">
                    Designed with dropped shoulders, this oversized sweatshirt is made from mid-weight Japanese nylon that has a slightly iridescent finish in the right light.
                </h5>
            </div>
            <div class="bar-link">
                <div class="bt bt-square text-bold c-pointer active" onclick="barLink(this, 'profile')">Profil</div>
                <div class="bt bt-square text-bold c-pointer" onclick="barLink(this, 'histori')">Histori Lelang</div>
                <div class="bt bt-square text-bold c-pointer" onclick="barLink(this, 'proses')">Proses Lelang</div>
                <div class="bt color-primary c-pointer" style="background: #fff;">Logout</div>
            </div>
        </div>

        <div class="profile-content p-5">
            <!-- PROFILE -->
            <div class="profile-user">
                <h1 class="m-0 font-neue">Setelan Profil</h1>
            </div>
            <!-- HISTORI LELANG -->
            <div class="histori-lelang" style="display: none">
                <h1 class="m-0 font-neue">Histori Lelang</h1>
                <div class="tabs mt-4">
                    <div class="navigation d-flex text-bold">
                        <div class="link mr-3 pb-05 c-pointer a" onclick="historiLelang(this, 'terbeli')">Barang Terbeli</div>
                        <div class="link pb-05 c-pointer" onclick="historiLelang(this, 'terjual')">Barang Terjual</div>
                    </div>
                    <hr>
                    <!-- show-barang-terbeli -->
                    <div class="show-barang-terbeli d-block">
                        <div class="product d-flex mb-3">
                            <div class="product-img-container">
                                <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                            </div>
                            <a class="product-info" href="">
                                <h3 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h3>
                                <h4 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h4>
                                <h4 class="color-pale text-thin mt-1">Jakarta Raya</h4>
                            </a>
                        </div>
                        <div class="product d-flex mb-3">
                            <div class="product-img-container">
                                <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                            </div>
                            <a class="product-info" href="">
                                <h3 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h3>
                                <h4 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h4>
                                <h4 class="color-pale text-thin mt-1">Jakarta Raya</h4>
                            </a>
                        </div>
                    </div>

                    <!-- show-barang-terjual -->
                    <div class="show-barang-terjual d-none">
                        <div class="product d-flex mb-3">
                            <div class="product-img-container">
                                <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                            </div>
                            <a class="product-info" href="">
                                <h3 class="mt-1 mb-1">kintil</h3>
                                <h4 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h4>
                                <h4 class="color-pale text-thin mt-1">Jakarta Raya</h4>
                            </a>
                        </div>
                        <div class="product d-flex mb-3">
                            <div class="product-img-container">
                                <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                            </div>
                            <a class="product-info" href="">
                                <h3 class="mt-1 mb-1">kintil</h3>
                                <h4 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h4>
                                <h4 class="color-pale text-thin mt-1">Jakarta Raya</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PROSES LELANG -->
            <div class="proses-lelang" style="display: none">
                <h1 class="m-0 font-neue">Proses Pelelangan</h1>
            </div>
        </div>
    </div>
</body>
</html>