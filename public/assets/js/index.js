window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        $("#index-navbar").css('boxShadow','0 4px 6px -1px rgba(0,0,0,0.07)')
    } else {
        $("#index-navbar").css('boxShadow','none')
    }
}