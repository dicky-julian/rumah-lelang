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

function typeActivate(obj) {
    $('.product-container').remove();
    $('.h3-xhsdbz').remove();
    $('.hr-xhsdbz').remove();
    $('.container-flex').find('h3:first').html('Lelang '+ $(obj).html());
    $('.type-active').removeClass('type-active');
    $(obj).addClass('type-active');
}


function getURLParameter(url, name) {
    return (RegExp(name + '=' + '(.+?)(&|$)').exec(url) || [, null])[1];
}