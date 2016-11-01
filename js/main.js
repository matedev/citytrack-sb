
$(function() {
    $('#block2 .col-md-6').matchHeight();
    $('#block2 .col-sm-12').matchHeight();
    $('#block3 .img-container').matchHeight();
    $('#partner-block .img-container').matchHeight();
});

$( document ).ready(function() {
    $('.users-description').truncate({
        'maxLines': 5,
        'truncateString': '&nbsp;&#8230;',
        'showText': 'Read More', 'hideText': "Read Less", 'animate':true
    });
})


(function($) {
    $(document).ready(function() {

        $('.navbar-nav li a').on('click',function(e){
            $(this).parent().parent().find('.active').removeClass('active');
            $(this).parent().addClass('active');
        })
    });
})(jQuery);