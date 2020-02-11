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
    {{-- Sidebar --}}
    <div id="profile-sidebar" >
        <div id="logo" class="d-i-flex align-i-center">
            <img src="assets/img/index/logo.png" alt="" width="25">
            <a href="/" class="ml-1 color-primary">rumahlelang</a>
        </div>

        {{-- profile bar --}}
        <div class="profile mt-5 text-center">
            <img class="img-profile" src="assets/img/index/profile.png" alt="">
            <h4 class="font-neue mt-1 mb-1">Dicky Julian</h4>
            <h5 class="mt-1 text-thin">julian18.ech@gmail.com</h5>
            <button class="bt bt-primary-reverse d-flex fullwidth c-pointer text-left align-i-center" onclick="showProfile()">
                <img src="assets/img/index/icon/user-white.png" alt="" width="23" height="23" class="mr-1">Edit Profile
            </button>
        </div>

        {{-- link bar --}}
        <div class="link-bar mt-3">
            <button class="link active d-flex fullwidth c-pointer text-left align-i-center mb-1" onclick="profileBar(this, 'histori')">
                <img src="assets/img/index/icon/history-black.png" alt="" width="15" height="15" class="mr-2">Histori
            </button>
            <button class="link d-flex fullwidth c-pointer text-left align-i-center mb-1" onclick="profileBar(this, 'lelang')">
                <img src="assets/img/index/icon/sell-black.png" alt="" width="15" height="15" class="mr-2">Lelang Barang
            </button>
        </div>
    </div>

    {{-- Content --}}

    {{-- Profile --}}
    <div id="profile-content" class="w-webkit-fill">
        {{-- Profile --}}
        <div class="profile-show-profile" style="display: none">
            <h2 class="text-thin mt-0 mb-1">Hallo!!! Dicky Julian</h2>
            <h4 class="color-pale mt-1 text-thin">
                Sempurnakan tampilan profilmu, buatlah orang semakin percaya tentang sisi profesionalmu.
            </h4>

            <form action="">
                {{-- Username --}}
                <label class="input-label mt-5 m-1 font-neue">Username</label>
                <input type="text" class="input-cst" placeholder="Your Username" value="Dicky Julian">
                
                {{-- Email --}}
                <label class="input-label mt-4 m-1 font-neue">Email Address</label>
                <input type="email" class="input-cst" placeholder="Your Email Address" value="julian18.ech@gmail.com">

                {{-- Password --}}
                <label class="input-label mt-4 m-1 font-neue">Password</label>
                <input type="password" class="input-cst" placeholder="Your Password" value="akusukakamu">

                {{-- Profile Photo --}}
                <label class="input-label mt-4 m-1 font-neue">Foto Profil</label>
                <input type="file" name="file" id="file" class="inputfile"/>
                <div class="upload-file d-flex j-space-beetween">
                    <label for="file" class="d-block w-fit-content bt bt-primary-reverse c-pointer text-center">Choose a file</label>
                    <div id="show-filename-profile" class="input-cst ml-2">julian-profile.png</div>
                </div>
                <script>
                    var input = document.getElementById( 'file' );
                    var infoArea = document.getElementById( 'show-filename-profile' );

                    input.addEventListener( 'change', showFileName );
                    function showFileName( event ) {
                        var input = event.srcElement;
                        var fileName = input.files[0].name;
                        infoArea.textContent = fileName;
                    }
                </script>

                <button class="input-cst bt-primary-reverse c-pointer fullwidth mt-4" type="submit" style="width: calc(100% + 2.5em)">Submit</button>
            </form>
        </div>

        {{-- Histori Lelang --}}
        <div class="profile-show-history">
            <h2 class="text-thin m-0">Histori Lelang</h2>
            <h4 class="color-pale mt-1 text-thin">Lihat semua riwayat aktivitas lelangmu</h4>
            
            {{-- tabs --}}
            <div class="tabs mt-5">
                <div class="navigation">
                    <a class="a-active" onclick="showHistori(this, 'terjual')">Barang Terjual</a>
                    <a onclick="showHistori(this, 'terbeli')">Barang Terbeli</a>
                </div>
                {{-- content --}}

                {{-- barang terbeli --}}
                <div class="show-barang-terbeli d-block mt-3" style="display: none">
                    <div class="product d-flex mb-1 p-2">
                        <div class="product-img-container">
                            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                        </div>
                        <a class="product-info" href="">
                            <h4 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h4>
                            <h5 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h5>
                            <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                        </a>
                    </div>

                    <div class="product d-flex mb-1 p-2">
                        <div class="product-img-container">
                            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                        </div>
                        <a class="product-info" href="">
                            <h4 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h4>
                            <h5 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h5>
                            <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                        </a>
                    </div>

                    <div class="product d-flex mb-1 p-2">
                        <div class="product-img-container">
                            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                        </div>
                        <a class="product-info" href="">
                            <h4 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h4>
                            <h5 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h5>
                            <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                        </a>
                    </div>
                </div>

                {{-- barang terjual --}}
                <div class="show-barang-terjual d-block mt-3">
                    <div class="product d-flex mb-1 p-2">
                        <div class="product-img-container">
                            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                        </div>
                        <a class="product-info" href="">
                            <h4 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h4>
                            <h5 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h5>
                            <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                        </a>
                    </div>
                    
                    <div class="product d-flex mb-1 p-2">
                        <div class="product-img-container">
                            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                        </div>
                        <a class="product-info" href="">
                            <h4 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h4>
                            <h5 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h5>
                            <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                        </a>
                    </div>

                    <div class="product d-flex mb-1 p-2">
                        <div class="product-img-container">
                            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                        </div>
                        <a class="product-info" href="">
                            <h4 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h4>
                            <h5 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h5>
                            <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                        </a>
                    </div>

                    <div class="product d-flex mb-1 p-2">
                        <div class="product-img-container">
                            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                        </div>
                        <a class="product-info" href="">
                            <h4 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h4>
                            <h5 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h5>
                            <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                        </a>
                    </div>

                    <div class="product d-flex mb-1 p-2">
                        <div class="product-img-container">
                            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                        </div>
                        <a class="product-info" href="">
                            <h4 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h4>
                            <h5 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h5>
                            <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                        </a>
                    </div>

                    <div class="product d-flex mb-1 p-2">
                        <div class="product-img-container">
                            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                        </div>
                        <a class="product-info" href="">
                            <h4 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h4>
                            <h5 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h5>
                            <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                        </a>
                    </div>

                    <div class="product d-flex mb-1 p-2">
                        <div class="product-img-container">
                            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                        </div>
                        <a class="product-info" href="">
                            <h4 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h4>
                            <h5 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h5>
                            <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                        </a>
                    </div>

                    <div class="product d-flex mb-1 p-2">
                        <div class="product-img-container">
                            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                        </div>
                        <a class="product-info" href="">
                            <h4 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h4>
                            <h5 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h5>
                            <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Lelang Barang --}}
        <div class="profile-show-lelang" style="display: none">
            <h2 class="text-thin m-0">Barang dalam Lelang</h2>
            <h4 class="color-pale mt-1 text-thin">Kontrol semua barang yang kamu lelang</h4>
            
            {{-- tabs --}}
            <div class="tabs mt-5">
                <div class="navigation">
                    <a class="b-active" onclick="showHistori(this, 'terjual')">Barang Dibeli</a>
                    <a onclick="showHistori(this, 'terbeli')">Barang Dijual</a>
                </div>
                {{-- content --}}

                {{-- barang terbeli --}}
                <div class="show-barang-terbeli d-block mt-3" style="display: none">
                    <div class="product d-flex mb-1 p-2">
                        <div class="product-img-container">
                            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                        </div>
                        <a class="product-info" href="">
                            <h4 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h4>
                            <h5 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h5>
                            <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                        </a>
                    </div>

                    <div class="product d-flex mb-1 p-2">
                        <div class="product-img-container">
                            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                        </div>
                        <a class="product-info" href="">
                            <h4 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h4>
                            <h5 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h5>
                            <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                        </a>
                    </div>

                    <div class="product d-flex mb-1 p-2">
                        <div class="product-img-container">
                            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                        </div>
                        <a class="product-info" href="">
                            <h4 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h4>
                            <h5 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h5>
                            <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                        </a>
                    </div>
                    
                </div>

                {{-- barang terjual --}}
                <div class="show-barang-terjual d-block mt-3">
                    <div class="product d-flex mb-1 p-2">
                        <div class="product-img-container">
                            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                        </div>
                        <a class="product-info" href="">
                            <h4 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h4>
                            <h5 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h5>
                            <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                        </a>
                    </div>
                    
                    <div class="product d-flex mb-1 p-2">
                        <div class="product-img-container">
                            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                        </div>
                        <a class="product-info" href="">
                            <h4 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h4>
                            <h5 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h5>
                            <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                        </a>
                    </div>

                    <div class="product d-flex mb-1 p-2">
                        <div class="product-img-container">
                            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
                        </div>
                        <a class="product-info" href="">
                            <h4 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h4>
                            <h5 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h5>
                            <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>