@extends('index')

@section('body')
<div id="app">
    <div id="type-thing" class="text-center mt-3">
        <div class="d-i-block">
            <a href="/" class="p-2 type-active">All</a>
        </div>
        <div class="d-i-block">
            <a href="#?type=bangunan" class="p-2" onclick="typeActivate(this)">Bangunan</a>
        </div>
        <div class="d-i-block">
            <a href="#?type=mesin" class="p-2" onclick="typeActivate(this)">Mesin</a>
        </div>
        <div class="d-i-block">
            <a href="#?type=perhiasan" class="p-2" onclick="typeActivate(this)">Perhiasan</a>
        </div>
        <div class="d-i-block">
            <a href="#?type=koleksi" class="p-2" onclick="typeActivate(this)">Koleksi</a>
        </div>
        <div class="d-i-block">
            <a href="#?type=kawat" class="p-2" onclick="typeActivate(this)">Kawat</a>
        </div>
        <div class="d-i-block">
            <a href="#?type=balung" class="p-2" onclick="typeActivate(this)">Balung</a>
        </div>
    </div>

    <hr class="mt-3 mb-4 hr-xhsdbz">
    <h3 class="title-content h3-xhsdbz">Paling Banyak Dicari</h3>
    <div class="product-container d-flex">
        <a class="product p-1 text-center c-pointer">
            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
            <h3 class="mb-1">JBL flip 6 - 2019</h3>
            <h4 class="mt-1 text-thin">Start Bidding IDR 200.000</h4>
        </a>
        <a class="product p-1 text-center c-pointer">
            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
            <h3 class="mb-1">JBL flip 6 - 2019</h3>
            <h4 class="mt-1 text-thin">Start Bidding IDR 200.000</h4>
        </a>
        <a class="product p-1 text-center c-pointer">
            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
            <h3 class="mb-1">JBL flip 6 - 2019</h3>
            <h4 class="mt-1 text-thin">Start Bidding IDR 200.000</h4>
        </a>
        <a class="product p-1 text-center c-pointer">
            <div class="product-img background-setup" style="background: url(assets/img/product/jbl.png)"></div>
            <h3 class="mb-1">JBL flip 6 - 2019</h3>
            <h4 class="mt-1 text-thin">Start Bidding IDR 200.000</h4>
        </a>
    </div>

    
    <div class="d-flex container-flex">
        <div class="product-list">
        <h3 class="title-content mt-5">Mungkin Anda Butuhkan</h3>
        <hr>
        <div class="product d-flex mb-4">
                <a class="product-info" href="">
                    <h3 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h3>
                    <h4 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h4>
                    <h4 class="color-pale text-thin mt-1">Jakarta Raya</h4>
                </a>
                <div class="product-img-container">
                    <div class="product-img background-setup float-right" style="background: url(assets/img/product/jbl.png)"></div>
                </div>
            </div>
            <div class="product d-flex mb-4">
                <a class="product-info" href="">
                    <h3 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h3>
                    <h4 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h4>
                    <h4 class="color-pale text-thin mt-1">Jakarta Raya</h4>
                </a>
                <div class="product-img-container">
                    <div class="product-img background-setup float-right" style="background: url(assets/img/product/jbl.png)"></div>
                </div>
            </div>
            <div class="product d-flex mb-4">
                <a class="product-info" href="">
                    <h3 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h3>
                    <h4 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h4>
                    <h4 class="color-pale text-thin mt-1">Jakarta Raya</h4>
                </a>
                <div class="product-img-container">
                    <div class="product-img background-setup float-right" style="background: url(assets/img/product/jbl.png)"></div>
                </div>
            </div>
            <div class="product d-flex mb-4">
                <a class="product-info" href="">
                    <h3 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h3>
                    <h4 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h4>
                    <h4 class="color-pale text-thin mt-1">Jakarta Raya</h4>
                </a>
                <div class="product-img-container">
                    <div class="product-img background-setup float-right" style="background: url(assets/img/product/jbl.png)"></div>
                </div>
            </div>
            <div class="product d-flex mb-4">
                <a class="product-info" href="">
                    <h3 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h3>
                    <h4 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h4>
                    <h4 class="color-pale text-thin mt-1">Jakarta Raya</h4>
                </a>
                <div class="product-img-container">
                    <div class="product-img background-setup float-right" style="background: url(assets/img/product/jbl.png)"></div>
                </div>
            </div>
            <div class="product d-flex mb-4">
                <a class="product-info" href="">
                    <h3 class="mt-1 mb-1">JBL BT565BTNC - Headphone over-ear dengan noise cacelling</h3>
                    <h4 class="mt-1 mb-1 text-thin">Start Bidding IDR 200.000</h4>
                    <h4 class="color-pale text-thin mt-1">Jakarta Raya</h4>
                </a>
                <div class="product-img-container">
                    <div class="product-img background-setup float-right" style="background: url(assets/img/product/jbl.png)"></div>
                </div>
            </div>
            <button class="bt-medium fullwidth bt-primary c-pointer mb-4">Lihat Lebih Banyak</button>
        </div>

        <div id="add-new">
            <div class="add-new content">
                <div class="find-by-kategori pl-4">
                    <h3 class="title-content mt-5 text-center">Telusuri dengan Kategori</h3>
                    <hr>
                    <div class="tag-list mt-4">
                        <a href="" class="tag m-05">
                            <div class="color-primary">#</div>techno
                        </a> 
                        <a href="" class="tag m-05">
                            <div class="color-primary">#</div>technology
                        </a> 
                        <a href="" class="tag m-05">
                            <div class="color-primary">#</div>techno
                        </a> 
                        <a href="" class="tag m-05">
                            <div class="color-primary">#</div>technology
                        </a> 
                        <a href="" class="tag m-05">
                            <div class="color-primary">#</div>techno
                        </a> 
                        <a href="" class="tag m-05">
                            <div class="color-primary">#</div>technology
                        </a> 
                        <a href="" class="tag m-05">
                            <div class="color-primary">#</div>techno
                        </a> 
                        <a href="" class="tag m-05">
                            <div class="color-primary">#</div>techno
                        </a> 
                        <a href="" class="tag m-05">
                            <div class="color-primary">#</div>techno
                        </a> 
                        <a href="" class="tag m-05">
                            <div class="color-primary">#</div>techno
                        </a> 
                        <a href="" class="tag m-05">
                            <div class="color-primary">#</div>techno
                        </a> 
                    </div>
                </div>
            </div>
        </div>

    </div>
    

</div>
@endsection