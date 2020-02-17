<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rumah Lelang</title>
    <link rel="shortcut icon" href="{{asset('assets/img/index/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <script src="{{asset('assets/js/index.js')}}"></script>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
</head>
<body>
    <nav id="index-navbar">
        <div id="logo" class="d-i-flex align-i-center">
            <img src="{{asset('assets/img/index/logo.png')}}" alt="" width="30">
            <a href="/" class="ml-1">rumahlelang</a>
        </div>

        <div id="nav-tool" class="d-flex float-right">
            <form action="" class="d-flex">
                <input type="text" class="input-search mr-2 pl-2" style="border-radius: 5px; border: 1px solid #00edaa; display: none" placeholder="find your thing">
            </form>
            <img src="{{asset('assets/img/index/icon/search.png')}}" alt="" class="i-search mr-2 align-s-center c-pointer" onclick="showSearchBar()">

            @if(session()->has('login'))
            <div id="profile-picture">
                @if ($foto_profil['foto_profil'] !== null)
                <div class="profile c-pointer background-setup" alt="" style="background: url('{{asset('assets/img/user/'.$foto_profil['foto_profil'])}}')"></div>
                @else
                <div class="profile c-pointer background-setup" alt="" style="background: url('{{asset('assets/img/index/profile.png')}}"></div>
                @endif
                <div class="show-modal-tools" style="display: none">
                    <a href="/user/{{Session::get('user')}}" class="mb-2 d-block">Profil</a>
                    <a class="mb-2 d-block c-pointer" onclick="showLelangModal()">Buat Lelang</a>
                    <hr>
                    <form action="/in" method="post">
                        {{ csrf_field() }}
                        <button type="submit" name="submit_logout" class="bt bt-primary mt-2 c-pointer d-block">Keluar</button>
                    </form>
                </div>
            </div>
            @else
            <a href="/in"><button class="bt bt-primary mr-2 c-pointer">Masuk</button></a>
            @endif
        </div>
    </nav>
    {{-- modal --}}
    <div class="modal" style="display: none">
        <div class="fade"></div>
        <div class="modal-card modal-post-lelang h-fit-content" style="display: none">
            <div class="modal-nav d-flex">
                <label for="">Tambah Lelang</label>
            </div>
            <form action="/tambah_lelang" method="post" autocomplete="off" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-content">
                    {{-- nama barang --}}
                    <input name="nama_lelang" type="text" class="input-box" placeholder="Nama barang" required>

                    {{-- kategori --}}
                    <input name="kategori" list="select-kategori" name="kategori" class="input-box c-pointer" placeholder="Kategori" required>
                    <datalist id="select-kategori">
                        @foreach ($kategori as $kategori)
                        <div class="d-i-block">
                            <option value="{{$kategori['kategori']}}">
                        </div>
                        @endforeach
                    </datalist>

                    {{-- deskripsi barang --}}
                    <textarea name="deskripsi_lelang" class="input-box" placeholder="Deskripsi Barang" style="height: auto; grid-row: 2 / span 2" required></textarea>

                    {{-- harga --}}
                    <div class="input-time">
                        <label class="d-block" style="font-size: 13px; margin: 8px 5px 5px">Harga Barang</label>
                        <div class="d-flex j-space-beetween">
                            <input type="number" class="input-box" placeholder="start" name="start_bid" required>
                            <input type="number" class="input-box" placeholder="min" name="min_bid" required>
                            <input type="number" class="input-box" placeholder="buy now" name="buy_now" required>
                        </div>
                    </div>

                    {{-- timer --}}
                    <div class="input-time">
                        <label class="d-block" style="font-size: 13px; margin: 8px 5px 5px">Durasi Lelang</label>
                        <div class="d-flex j-space-beetween">
                            <input type="number" class="input-box" placeholder="hari" name="hari">
                            <input type="number" class="input-box" placeholder="jam" name="jam">
                            <input type="number" class="input-box" placeholder="menit" name="menit" required>
                        </div>
                    </div>
                    <input type="file" id="file" class="inputfile" name="foto_lelang[]" multiple required/>
                    <div class="d-flex mt-2">
                        <label for="file" class="input-file c-pointer text-center w-fit-content">Pilih foto barang</label>
                        <div class="d-flex ml-2 align-i-center" style="font-size: 15px">3 foto terpilih</div>
                    </div>
                </div>
                

                <div class="button-group d-flex">
                    <button type="button" class="bt bt-primary c-pointer" onclick="closeModal()">Kembali</button>
                    <button type="button" class="bt bt-primary c-pointer ml-1 d-a" style="width: 150px">Hapus semua</button>
                    <div class="w-webkit-fill">
                        <button type="submit" class="bt bt-primary-reverse c-pointer float-right" name="tambah_lelang">Buat Lelang</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
    <div class="p-fixed" style="bottom: 1em; right: 1.5em; padding-right: 2em; z-index: 2">
        @if(\Session::has('alert-fail'))
        <div class="alert alert-danger p-fixed mb-2" style="bottom: 1em; right: 1.5em; padding-right: 2em; z-index: 2">
            <img src="assets/img/index/icon/danger.png" alt="">{{Session::get('alert-fail')}}
        </div>
        @endif

        @if(\Session::has('alert-success'))
        <div class="alert alert-success p-fixed mb-2" style="bottom: 1em; right: 1.5em; padding-right: 2em; z-index: 2">
            <img src="assets/img/index/icon/success.png" alt="">{{Session::get('alert-success')}}
        </div>
        @endif
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