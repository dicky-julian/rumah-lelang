@extends('index')

@section('body')
<div id="app">
    <div id="product-detail">
        <div class="product-img h-fit-content">
            <img src="assets/img/product/rumah.jpg" alt="" class="showProductImage">
        </div>
        <div class="detail-product">
            {{-- timer --}}
            <div class="show-timing-out color-primary font-neue">2 Jam 16 Menit</div>
            {{-- nama lelang --}}
            <h1 class="font-neue mt-1">Tipe Rumah 21 / 24</h1>
            {{-- harga --}}
            <div class="show-price">
                <div class="font-neue bt bt-primary-reverse w-fit-content">Bidded on Rp. 100.000</div>
                <div class="font-neue bt bt-primary-reverse w-fit-content ml-1">Buy Now on Rp. 200.000</div>
            </div>
            {{-- deskripsi lelang --}}
            <p class="show-description mt-2">
                Designed with dropped shoulders, this oversized sweatshirt is made from mid-weight Japanese nylon that has a slightly iridescent finish in the right light. It’s fully lined in breathable mesh and finished with a rubber designer emblem at the back that doubles as a locker loop.
                I've always done this by cloning the item you want to fadeout, placing it directly behind the current one, changing the src attribute, then fading out the top one.
                Here's some example code that I've used before.
            </p>
            {{-- show gambar (max-3) --}}
            <div class="product-img-list d-flex j-space-beetween mt-2 mb-1">
                <div class="img-list c-pointer active" style="background: url(assets/img/product/rumah.jpg)" onclick="showChangeImg(this,'rumah.jpg')"></div>
                <div class="img-list c-pointer" style="background: url(assets/img/product/interior-rumah.jpg)" onclick="showChangeImg(this,'interior-rumah.jpg')"></div>
                <div class="img-list c-pointer" style="background: url(assets/img/product/interior-rumah-2.jpg)" onclick="showChangeImg(this,'interior-rumah-2.jpg')"></div>
            </div>
            <div class="show-div-bid">

            </div>
            <button class="bt bt-primary fullwidth mt-2 mb-5 c-pointer text-bold" style="transition: .1s; font-size: 15px" onclick="showBidBar(this)">Bid</button>
        </div>
    </div>
</div>
@endsection