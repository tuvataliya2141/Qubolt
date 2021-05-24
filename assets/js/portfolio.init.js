// Magnific Popup
$('.mfp-image').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    mainClass: 'mfp-fade',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1]
    }
});

//Portfolio filter
$(document).ready(function() {
    var $container = $('.projects-wrapper');
    var $filter = $('#pills-tab');
    var stab = $filter.find('a').attr('href');
    $container.isotope({
        filter: '*',
        layoutMode: 'masonry',
        animationOptions: {
            duration: 750,
            easing: 'linear'
        }
    });
    $filter.find('a').click(function() {
        var selector = $(this).attr('data-filter');       
        var ftab = $(this).attr('href');               
        $filter.find('a').removeClass('active');       
        $(this).addClass('active');
        $(".tab_port").removeClass('show active');
        $(ftab).addClass('show active');
        $container.isotope({
            filter: selector,
            animationOptions: {
                animationDuration: 750,
                easing: 'linear',
                queue: false,
            }
        });
        return false;
    });
});