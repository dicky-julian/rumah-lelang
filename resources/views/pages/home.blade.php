@extends('index')

@section('body')
<div id="app">
    {{-- show category --}}
    <div id="type-thing" class="text-center mt-3">
        <div class="d-i-block">
            <a href="/" class="p-2 type-active">All</a>
        </div>
        @foreach ($kategori as $k)
        <div class="d-i-block">
            <a class="p-2 c-pointer" onclick="typeActivate(this)">{{$k['kategori']}}</a>
        </div>
        @endforeach
    </div>

    {{-- show barang order by paling banyak ditawar --}}
    <hr class="mt-3 mb-4 hr-xhsdbz">
    <h3 class="title-content h3-xhsdbz">Pelelangan Terbaru</h3>
    <div class="product-container d-flex">
        @if(count($data) > 3)
        @for($i=0; $i<4; $i++)
        <a class="product p-1 text-center c-pointer" href="/lelang/{{$data[$i]['id']}}">
            <div class="product-img background-setup" style="background: url(assets/img/product/{{str_replace(' ', '', $data[$i]['nama_lelang'])}}/{{$data_foto[$i]}})"></div>
            <h3 class="mb-1">{{$data[$i]['nama_lelang']}}</h3>
            <h4 class="mt-1 text-thin">Start Bidding Rp.{{$data[$i]['start_bid']}}</h4>
        </a>
        @endfor
        @endif
    </div>

    {{-- show barang paling banyak dicari - berdasarkan pencarian terbanyak --}}
    <div class="d-flex container-flex">
        <div class="product-list">
        <h3 class="title-content mt-5">Mungkin Anda Butuhkan</h3>
        <hr>
            <div id="show-lelang">
                @for($i=0; $i<count($data); $i++)
                <div class="product d-flex mb-4">
                    <a class="product-info" href="/lelang/{{$data[$i]['id']}}">
                        <h3 class="mt-1 mb-1">{{$data[$i]['nama_lelang']}}</h3>
                        <h4 class="mt-1 mb-1 text-thin">Start Bidding Rp.{{$data[$i]['start_bid']}}</h4>
                        <h4 class="color-pale text-thin mt-1">Jakarta Raya</h4>
                    </a>
                    <div class="product-img-container">
                        <div class="product-img background-setup float-right" style="background: url(assets/img/product/{{str_replace(' ', '', $data[$i]['nama_lelang'])}}/{{$data_foto[$i]}})"></div>
                    </div>
                </div>
                @endfor
            </div>
            {{-- jika on click akan merubah query limit menjadi lebih banyak --}}
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