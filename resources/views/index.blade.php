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
            <form action="" class="d-flex">
                <input type="text" class="input-search mr-2 pl-2" style="border-radius: 5px; border: 1px solid #000; display: none" placeholder="find your thing">
            </form>
            <img src="assets/img/index/icon/search.png" alt="" class="i-search mr-2 align-s-center c-pointer" onclick="showSearchBar()">
            <a href="/in"><button class="bt bt-primary mr-2 c-pointer">Masuk</button></a>
            <div id="profile-picture">
                <img class="profile c-pointer" src="assets/img/index/profile.png" alt="">
                <div class="show-modal-tools" style="display: none">
                    <a href="/id_user" class="mb-2 d-block">Profil</a>
                    <a class="mb-2 d-block c-pointer" onclick="showLelangModal()">Buat Lelang</a>
                    <hr>
                    <a href="" class="mt-2 d-block">Keluar</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- modal --}}
    <div class="modal" style="display: none">
        <div class="fade"></div>
        <div class="modal-card modal-post-lelang h-fit-content" style="display: none">
            <div class="modal-nav d-flex">
                <label for="">Tambah Lelang</label>
            </div>
            <form action="" autocomplete="off">
                <div class="modal-content">
                    {{-- nama barang --}}
                    <input type="text" class="input-box" placeholder="Nama barang">

                    {{-- kategori --}}
                    <input list="select-kategori" name="kategori" class="input-box c-pointer" placeholder="Kategori">
                    <datalist id="select-kategori">
                        <option value="Internet Explorer">
                        <option value="Firefox">
                        <option value="Chrome">
                        <option value="Opera">
                        <option value="Safari">
                    </datalist>

                    {{-- deskripsi barang --}}
                    <textarea class="input-box" placeholder="Deskripsi Barang" style="height: auto; grid-row: 2 / span 2"></textarea>

                    {{-- harga --}}
                    <div class="input-time">
                        <label class="d-block" style="font-size: 13px; margin: 8px 5px 5px">Harga Barang</label>
                        <div class="d-flex j-space-beetween">
                            <input type="text" class="input-box" placeholder="start">
                            <input type="text" class="input-box" placeholder="min">
                            <input type="text" class="input-box" placeholder="buy now">
                        </div>
                    </div>

                    {{-- timer --}}
                    <div class="input-time">
                        <label class="d-block" style="font-size: 13px; margin: 8px 5px 5px">Durasi Lelang</label>
                        <div class="d-flex j-space-beetween">
                            <input type="text" class="input-box" placeholder="hari">
                            <input type="text" class="input-box" placeholder="jam">
                            <input type="text" class="input-box" placeholder="detik">
                        </div>
                    </div>
                    <input type="file" name="file" id="file" class="inputfile"/>
                    <div class="d-flex mt-2">
                        <label for="file" class="input-file c-pointer text-center w-fit-content">Pilih foto barang</label>
                        <div class="d-flex ml-2 align-i-center" style="font-size: 15px">3 foto terpilih</div>
                    </div>
                </div>
                

                <div class="button-group d-flex">
                    <button type="button" class="bt bt-primary c-pointer" onclick="closeModal()">Kembali</button>
                    <button type="button" class="bt bt-primary c-pointer ml-1 d-a" style="width: 150px">Hapus semua</button>
                    <div class="w-webkit-fill">
                        <button class="bt bt-primary-reverse c-pointer float-right" type="submit">Buat Lelang</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
    {{-- script --}}
    <script>
        $(function() {
            var status = '';
            $('#profile-picture').on("click", function() {
                if (status == '' || status == 0) {
                    $('.show-modal-tools').show();
                    status = 1;
                } else if (status == 1) {
                    $('.show-modal-tools').hide();
                    status = 0;
                }
            }
            );
        });

        function showSearchBar() {
            $(".input-search").fadeToggle(400);
        }

        function showLelangModal() {
            $('.modal').show();
            $('.modal').find('.modal-card').fadeIn(400);
        }
        
    </script>
    @yield('body')
</body>
</html>