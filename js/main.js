$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top-70
                }, 1000);
                return false;
            }
        }
    });
});

$(function() {
    $('#block2 .col-md-6').matchHeight();
    $('#block2 .col-sm-12').matchHeight();
    $('#block3 .img-container').matchHeight();
    $('#partner-block .img-container').matchHeight();
});
