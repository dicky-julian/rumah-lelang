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
    '<button class="bt bt-primary-reverse mr-2 c-pointer mt-1 fullwidth">Buy Now</button>'

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

function historiLelang(attr, status) {
    $('.a').removeClass('a');
    $(attr).addClass('a');

    if (status == 'terbeli') {
        $('.show-barang-terjual').hide();
        $('.show-barang-terbeli').fadeIn(500);
    } else if (status == 'terjual') {
        $('.show-barang-terbeli').hide();
        $('.show-barang-terjual').fadeIn(500);
    }
}

function barLink(attr, status) {
    $('.active').removeClass('active');
    $(attr).addClass('active');

    if (status == 'profile') {
        $('.profile-user').fadeIn(500);
        $('.histori-lelang').hide();
        $('.proses-lelang').hide();
    } else if (status == 'histori') {
        $('.profile-user').hide();
        $('.histori-lelang').fadeIn(500);
        $('.proses-lelang').hide();
    } else if (status == 'proses') {
        $('.profile-user').hide();
        $('.histori-lelang').hide();
        $('.proses-lelang').fadeIn(500);
    }
}