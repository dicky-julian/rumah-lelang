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
<body id="profile-user">
    {{-- Sidebar --}}
    <div id="profile-sidebar" >
        <div id="logo" class="d-i-flex align-i-center">
            <img src="{{asset('assets/img/index/logo.png')}}" alt="" width="25">
            <a href="/" class="ml-1 color-primary">rumahlelang</a>
        </div>

        {{-- profile bar --}}
        <div class="profile mt-5 text-center">
            @if ($data['user']['foto_profil'] == null)
            <img class="img-profile" src="../../assets/img/index/profile.jpg" alt="">
            @else
            <img class="img-profile" src="../../assets/img/user/{{$data['user']['foto_profil']}}" alt="">
            @endif
            <h4 class="font-neue mt-1 mb-1">{{$data['user']['username']}}</h4>
            <h5 class="mt-1 text-thin">{{$data['user']['email']}}</h5>
            <button class="bt bt-primary-reverse d-flex fullwidth c-pointer text-left align-i-center" onclick="showProfile()">
                <img src="{{asset('assets/img/index/icon/user-white.png')}}" alt="" width="23" height="23" class="mr-1">Edit Profile
            </button>
        </div>

        {{-- link bar --}}
        <div class="link-bar mt-3">
            <button class="link active d-flex fullwidth c-pointer text-left align-i-center mb-1" onclick="profileBar(this, 'histori')">
                <img src="{{asset('assets/img/index/icon/history-black.png')}}" alt="" width="15" height="15" class="mr-2">Histori
            </button>
            <button class="link d-flex fullwidth c-pointer text-left align-i-center mb-1" onclick="profileBar(this, 'lelang')">
                <img src="{{asset('assets/img/index/icon/sell-black.png')}}" alt="" width="15" height="15" class="mr-2">Lelang Barang
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

            <form action="/updateProfile/{{$data['user']['id']}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{-- Username --}}
                <label class="input-label mt-5 m-1 font-neue">Username</label>
                <input type="text" class="input-cst" placeholder="Your Username" value="{{$data['user']['username']}}" name="username">
                
                {{-- Email --}}
                <label class="input-label mt-4 m-1 font-neue">Email Address</label>
                <input type="email" class="input-cst" placeholder="Your Email Address" value="{{$data['user']['email']}}" name="email">

                {{-- Password --}}
                <label class="input-label mt-4 m-1 font-neue">Password</label>
                <input type="password" class="input-cst" placeholder="Your Password" name="password">

                {{-- Profile Photo --}}
                <label class="input-label mt-4 m-1 font-neue">Foto Profil</label>
                <input type="file" name="file" id="file" class="inputfile"/>
                <div class="upload-file d-flex j-space-beetween">
                    <label for="file" class="d-block w-fit-content bt bt-primary-reverse c-pointer text-center">Choose a file</label>
                    @if ($data['user']['foto_profil'] !== null)
                    <div id="show-filename-profile" class="input-cst ml-2">{{$data['user']['foto_profil']}}</div>
                    @else
                    <div id="show-filename-profile" class="input-cst ml-2">Tidak ada foto profil</div>
                    @endif
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

                <button class="input-cst bt-primary-reverse c-pointer fullwidth mt-4" type="submit" style="width: calc(100% + 2.5em)" name="edit_profile">Submit</button>
            </form>
        </div>

        {{-- Histori Lelang --}}
        <div class="profile-show-history">
            <h2 class="text-thin m-0">Histori Lelang</h2>
            <h4 class="color-pale mt-1 text-thin">Lihat semua riwayat aktivitas lelangmu</h4>
            
            {{-- tabs --}}
            <div class="tabs mt-5">
                <div class="navigation">
                    <a onclick="showHistori('terjual')" class="terjual a-active">Barang Terjual</a>
                    <a onclick="showHistori('terbeli')" class="terbeli">Barang Terbeli</a>
                </div>
                {{-- content --}}

                {{-- barang terbeli --}}
                <div class="show-barang-terbeli d-block mt-3" style="display: none">
                    @if($data['barang_terbeli'] == "0")
                    <div class="show-empty-data text-center">
                        <img class="mt-4" src="{{asset('assets/img/index/empty_data.png')}}" alt="">
                        <h3 class="mt-4 font-neue">Tidak ada barang sedang dijual</h3>
                    </div>
                    @else
                        @foreach ($data['barang_terbeli'] as $barang)
                            @for ($i = 0; $i < count($barang); $i++)
                            <?php $data_foto = unserialize($barang[$i]['foto_lelang']);?>
                            <div class="product d-flex mb-1 p-2">
                                <div class="product-img-container">
                                    <div class="product-img background-setup" style="background: url('../../assets/img/product/{{str_replace(' ', '', $barang[$i]['nama_lelang'])}}/{{$data_foto[0]}}')"></div>
                                </div>
                                <a class="product-info" href="/lelang/{{$barang[$i]['id']}}">
                                    <h4 class="mt-1 mb-1">{{$barang[$i]['nama_lelang']}}</h4>
                                    <h5 class="mt-1 mb-1 text-thin">Start Bidding {{$barang[$i]['start_bid']}}</h5>
                                    <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                                </a>
                            </div>
                            @endfor
                        @endforeach
                    @endif
                </div>

                {{-- barang terjual --}}
                <div class="show-barang-terjual d-block mt-3">
                    @if($data['barang_terjual'] == "0")
                    <div class="show-empty-data text-center">
                        <img class="mt-4" src="{{asset('assets/img/index/empty_data.png')}}" alt="">
                        <h3 class="mt-4 font-neue">Tidak ada barang sedang dijual</h3>
                    </div>
                    @else
                        @foreach ($data['barang_terjual'] as $barang)
                            @for ($i = 0; $i < count($barang); $i++)
                            <?php $data_foto = unserialize($barang[$i]['foto_lelang']);?>
                            <div class="product d-flex mb-1 p-2">
                                <div class="product-img-container">
                                    <div class="product-img background-setup" style="background: url('../../assets/img/product/{{str_replace(' ', '', $barang[$i]['nama_lelang'])}}/{{$data_foto[0]}}')"></div>
                                </div>
                                <a class="product-info" href="/lelang/{{$barang[$i]['id']}}">
                                    <h4 class="mt-1 mb-1">{{$barang[$i]['nama_lelang']}}</h4>
                                    <h5 class="mt-1 mb-1 text-thin">Start Bidding {{$barang[$i]['start_bid']}}</h5>
                                    <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                                </a>
                            </div>
                            @endfor
                        @endforeach
                    @endif
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
                    <a onclick="showHistori('terjual')" class="terjual a-active">Proses Jual</a>
                    <a onclick="showHistori('terbeli')" class="terbeli">Proses Beli</a>
                </div>
                {{-- content --}}

                {{-- barang dibeli --}}
                <div class="show-barang-terbeli d-block mt-3" style="display: none">
                    @if($data['barang_dibeli'] == "0")
                    <div class="show-empty-data text-center">
                        <img class="mt-4" src="{{asset('assets/img/index/empty_data.png')}}" alt="">
                        <h3 class="mt-4 font-neue">Tidak ada barang sedang dijual</h3>
                    </div>
                    @else
                    @foreach ($data['barang_dibeli'] as $d)
                            @for ($i = 0; $i < count($d); $i++)
                            <?php $data_foto = unserialize($d[$i]['foto_lelang']);?>
                            <div class="product d-flex mb-1 p-2">
                                <div class="product-img-container">
                                    <div class="product-img background-setup" style="background: url('../../assets/img/product/{{str_replace(' ', '', $d[$i]['nama_lelang'])}}/{{$data_foto[0]}}')"></div>
                                </div>
                                <a class="product-info" href="/lelang/{{$d[$i]['id']}}">
                                    <h4 class="mt-1 mb-1">{{$d[$i]['nama_lelang']}}</h4>
                                    <h5 class="mt-1 mb-1 text-thin">Start Bidding Rp.{{$d[$i]['start_bid']}}</h5>
                                    <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                                </a>
                            </div>
                            @endfor
                        @endforeach
                    @endif
                </div>

                {{-- barang dijual --}}
                <div class="show-barang-terjual d-block mt-3">
                    @if($data['barang_dijual'] == "0")
                    <div class="show-empty-data text-center">
                        <img class="mt-4" src="{{asset('assets/img/index/empty_data.png')}}" alt="">
                        <h3 class="mt-4 font-neue">Tidak ada barang sedang dijual</h3>
                    </div>
                    @else
                        @foreach ($data['barang_dijual'] as $d)
                            @for ($i = 0; $i<count($d); $i++)
                            <?php $data_foto = unserialize($d[$i]['foto_lelang']);?>
                            <div class="product d-flex mb-1 p-2">
                                <div class="product-img-container">
                                    <div class="product-img background-setup" style="background: url('../../assets/img/product/{{str_replace(' ', '', $d[$i]['nama_lelang'])}}/{{$data_foto[0]}}')"></div>
                                </div>
                                <a class="product-info" href="/lelang/{{$d[$i]['id']}}">
                                    <h4 class="mt-1 mb-1">{{$d[$i]['nama_lelang']}}</h4>
                                    <h5 class="mt-1 mb-1 text-thin">Start Bidding Rp.{{$d[$i]['start_bid']}}</h5>
                                    <h5 class="color-pale text-thin mt-1 mb-0">Jakarta Raya</h5>
                                </a>
                            </div>
                            @endfor
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>