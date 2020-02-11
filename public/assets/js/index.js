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
}

function showBidBar(button) {
    var status = 0;
    var attribute = '<br>'+
    '<form action="" method="post">'+
    '<input type="number" placeholder="insert your bid value" class="input input-primary fullwidth d-block mt-1">'+
    '<button class="bt bt-primary-reverse mr-2 c-pointer mt-1">Submit Bidding</button>'+
    '<div class="hr-attribute d-flex fullwidth j-space-beetween mt-2 mb-2"><hr>or<hr></div>'+
    '</form>'+
    '<button class="bt bt-primary-reverse mr-2 c-pointer mt-1 mb-5 fullwidth">Buy for Rp. 200.000</button>'

    if(status == 0) {
        $(button).fadeOut(500).remove();
        $( ".show-div-bid" ).append(attribute).hide().fadeIn(500);
    }
}

function showChangeImg(attr, image) {
    $('.showProductImage').attr('src','assets/img/product/'+image);
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

function showHistori(attr, status) {
    $('.a-active').removeClass('a-active');
    $(attr).addClass('a-active');
    $('.profile-show-profile').hide();

    if (status == 'terjual') {
        $('.show-barang-terbeli').hide();
        $('.show-barang-terjual').fadeIn(500);
    } else if (status == 'terbeli') {
        $('.show-barang-terbeli').fadeIn(500);
        $('.show-barang-terjual').hide();
    }
}

function auth(status) {
    $('.auth-form').hide().fadeIn(400);
    if (status == 'signup') {
        $('input[type=email]').fadeIn(400);
        $('button[type=submit').html('DAFTAR');
        $('button[type=button').html('MASUK');
        $('button[type=button').attr('onclick','auth("login")');
        $('.attr-added').find('p').html('sudah terdaftar?').fadeIn(400);
    } else if (status == 'login') {
        $('input[type=email]').hide();
        $('button[type=submit').html('MASUK');
        $('button[type=button').html('DAFTAR BARU');
        $('button[type=button').attr('onclick','auth("signup")');
        $('.attr-added').find('p').html('atau buat akun baru').fadeIn(400);
    }
}

function closeModal() {
    $('.modal').fadeOut(400).hide();
}