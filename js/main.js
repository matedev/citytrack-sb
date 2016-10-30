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
});


  function initMap() {
    var uta = {lat: 61.493736, lng: 23.778643};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: uta,
      disableDefaultUI: true
    });
    var marker = new google.maps.Marker({
      position: uta,
      icon: 'img/logo.png',
      map: map
    });
  }