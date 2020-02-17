window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        $("#index-navbar").css('boxShadow', '0 4px 6px -1px rgba(0,0,0,0.07)')
    } else {
        $("#index-navbar").css('boxShadow', 'none')
    }
}

function typeActivate(attr) {
    $('.product-container').remove();
    $('.h3-xhsdbz').remove();
    $('.hr-xhsdbz').remove();
    $('.container-flex').find('h3:first').html('Lelang '+ $(attr).html());
    $('.type-active').removeClass('type-active');
    $(attr).addClass('type-active');

    var kategori = $(attr).html();
    $.ajax({
        url: 'getLelangByKategori/'+kategori,
        method: 'get',
        dataType: 'json',
        success: function(response) {
            $('#show-lelang').empty();
            if(response['data'].length > 0) {
                $.each(response['data'], function(d_key, data) {
                    $('#show-lelang').append(
                        "<div class='product d-flex mb-4'>"+
                        "<a class='product-info' href='/lelang/"+data['id']+"'>"+
                        "<h3 class='mt-1 mb-1'>"+data['nama_lelang']+"</h3>"+
                        "<h4 class='mt-1 mb-1 text-thin'>Start Bidding Rp."+data['start_bid']+"</h4>"+
                        "<h4 class='color-pale text-thin mt-1'>Jakarta Raya</h4>"+
                        "</a>"+
                        "<div class='product-img-container'>"+
                        "<div class='product-img background-setup float-right' style='background-image: url(/assets/img/product/"+data['nama_lelang'].replace(/\s/g, "")+"/"+response['data_foto'][d_key]+")'></div>"+
                        "</div>"+
                        "</div>"
                    )
                });
            } else {
                $('#show-lelang').append(
                    '<div class="show-empty-data text-center">'+
                    '<img class="mt-6" src="assets/img/index/empty_data.png" alt="" width="300">'+
                    '<h3 class="mt-4 mb-6 font-neue">Tidak ada barang sedang dijual</h3>'+
                    '</div>'
                )
            }
        }
    });
}

function showBidBar(button, buy_now) {
    var status = 0;
    var attribute =
    '<input name="bid_value" type="number" placeholder="insert your bid value" class="input input-primary fullwidth d-block mt-1">'+
    '<button type="submit" class="bt bt-primary-reverse mr-2 c-pointer mt-1" name="bid_now">Submit Bidding</button>'+
    '<div class="hr-attribute d-flex fullwidth j-space-beetween mt-2 mb-2"><hr>or<hr></div>'+
    '<button type="submit" class="bt bt-primary-reverse mr-2 c-pointer mt-1 mb-5 fullwidth" name="buy_now">Buy for Rp.'+buy_now+'</button>'

    if(status == 0) {
        $(button).fadeOut(500).remove();
        $( ".show-div-bid" ).append(attribute).hide().fadeIn(500);
    }
}

function showChangeImg(attr, image) {
    $('.showProductImage').attr('src','../../assets/img/product/'+image);
    $('.active').removeClass('active');
    $(attr).addClass('active');
}

function showProfile() {
    $('.active').removeClass('active');
    $('.profile-show-profile').fadeIn(500);
    $('.profile-show-history').hide();
    $('.profile-show-lelang').hide();
}

function profileBar(attr, status) {
    $('.active').removeClass('active');
    $(attr).addClass('active');
    $('.profile-show-profile').hide();

    if (status == 'histori') {
        $('.profile-show-history').fadeIn(500);
        $('.profile-show-lelang').hide();
        $('.profile-show-profile').hide();
    } else if (status == 'lelang') {
        $('.profile-show-history').hide();
        $('.profile-show-lelang').fadeIn(500);
    }
}

function showHistori(status) {
    $('.'+status).addClass('a-active');
    $('.profile-show-profile').hide();

    if (status == 'terjual') {
        $('.terbeli').removeClass('a-active');
        $('.show-barang-terbeli').hide();
        $('.show-barang-terjual').fadeIn(500);
    } else if (status == 'terbeli') {
        $('.terjual').removeClass('a-active');
        $('.show-barang-terbeli').fadeIn(500);
        $('.show-barang-terjual').hide();
    }
}

function auth(status) {
    $('.auth-form').hide().fadeIn(400);
    $('.alert').remove();
    if (status == 'signup') {
        $('form').attr('action','/in');
        $('input[type=text]').fadeIn(400);
        $('button[type=submit').html('DAFTAR').attr('name','submit_signup');
        $('button[type=button').html('MASUK');
        $('button[type=button').attr('onclick','auth("login")');
        $('.attr-added').find('p').html('sudah terdaftar?').fadeIn(400);
    } else if (status == 'login') {
        $('form').attr('action','/in');
        $('input[type=text]').hide();
        $('button[type=submit').html('MASUK').attr('name','submit_login');
        $('button[type=button').html('DAFTAR BARU');
        $('button[type=button').attr('onclick','auth("signup")');
        $('.attr-added').find('p').html('atau buat akun baru').fadeIn(400);
    }
}

function closeModal() {
    $('.modal').fadeOut(400).hide();
}