@extends('index')

@section('body')
<div id="app">
    <div id="product-detail">
        <div class="product-img h-fit-content">
            <img src="../../assets/img/product/<?php echo str_replace(' ', '', $data['nama_lelang']).'/'.$data_foto[0]?>" alt="" class="showProductImage">
        </div>
        <div class="detail-product">
            @if(\Session::has('alert-fail-lelang'))
                <div class="alert alert-danger mb-2">
                    <img src="../../assets/img/index/icon/danger.png" alt="">{{Session::get('alert-fail-lelang')}}
                </div>
            @endif
            @if(\Session::has('alert-success-lelang'))
                <div class="alert alert-success mb-2">
                    <img src="../../assets/img/index/icon/success.png" alt="">{{Session::get('alert-success-lelang')}}
                </div>
            @endif
            {{-- nama lelang --}}
            <input type="hidden" id="hidden-id" value="{{$data['id']}}">
            <input type="hidden" id="hidden-timestamp" value="{{$timeout}}">
            <h1 class="font-neue mt-1 mb-2">{{$data['nama_lelang']}}</h1>
            {{-- timer --}}
            <div class="d-flex timing align-i-center mb-3">
                <div id="show-hari"></div><label>:</label>
                <div id="show-jam"></div><label>:</label>
                <div id="show-menit"></div>
            </div>
            {{-- harga --}}
            <div class="show-price">
                @if($data['status'] < 2)
                <div class="font-neue bt bt-primary-reverse w-fit-content">
                    @if($data['bid_now'] != null)
                    bid saat ini Rp.{{$data['bid_now']}}
                    @else
                    dilelang pada Rp.{{$data['start_bid']}}
                    @endif
                </div>
                <div class="font-neue bt bt-primary-reverse w-fit-content ml-1">min bid Rp.{{$data['min_bid']}}</div>
                @else
                <div class="font-neue bt bt-danger-reverse w-fit-content">Lelang telah ditutup</div>
                @endif
            </div>
            {{-- deskripsi lelang --}}
            <p class="show-description mt-2">
                {{$data['deskripsi_lelang']}}
            </p>
            {{-- show gambar (max-3) --}}
            <div class="product-img-list d-flex j-space-beetween mt-2 mb-1">
                @foreach (unserialize($data['foto_lelang']) as $foto_lelang)
                    <div class="img-list c-pointer" style="background-image: url('../../assets/img/product/<?php echo str_replace(' ', '', $data['nama_lelang'])."/".$foto_lelang ?>')" onclick="showChangeImg(this, '<?php echo str_replace(' ', '', $data['nama_lelang'])."/".$foto_lelang ?>')"></div>
                @endforeach

            @if($data['status'] < 2)
            </div>
                <form action="/take_lelang/{{$data['id']}}" method="post" class="show-div-bid mt-3">
                    {{ csrf_field() }}
                </form>
            <button class="bt bt-primary fullwidth mt-2 mb-5 c-pointer text-bold" style="transition: .1s; font-size: 15px" onclick="showBidBar(this, {{$data['buy_now']}})">Bid</button>
            @endif
        </div>
    </div>
</div>

<script>
    var timeout = $('#hidden-timestamp').val();

    var x = setInterval(function() {
        var now = new Date().getTime() / 1000;
        var diff = timeout - now;

        var days = Math.floor(diff / 86400);
        var hours = Math.floor((diff % 86400) / 3600);
        var minutes = Math.floor((diff % 3600) / 60);

        $('#show-hari').html(days);
        $('#show-jam').html(hours);
        $('#show-menit').html(minutes);
        
        if (diff < 0) {
            clearInterval(x);
            $('.timing')
                .removeClass('timing')
                .empty()
                .append('<div class="alert alert-danger fullwidth"><img src="{{asset('assets/img/index/icon/danger.png')}}" alt="">Waktu lelang telah habis</div>');
            $('button').hide();

            changeStatus();

            function changeStatus() {
                var id_lelang = $('#hidden-id').val();

                $.ajax({
                    url: '/changeStatus',
                    type: 'post',
                    data: {
                        _token: "{{ csrf_token() }}",
                        id_lelang: id_lelang,
                    },
                    success: function(response){
                    }
                })
            }
        }
    }, 1000);
</script>
@endsection