var plugins = {
    menuSideBar: $('.sidebar'),
    slider: $('#slider'),
    owlCarouselHH2:$('.hh2')
};
$(document).ready(function () {
    function sidebar() {
        var trigger = $('#trigger,#close');
        trigger.on('click', function () {
            $(this).toggleClass('active');
            plugins.menuSideBar.toggleClass('closed');
            $('#blurrMe').toggleClass('blurred')
        })
        $('#wrap-container').on('click', function () {
            if ($('#blurrMe').hasClass('blurred')) {
                $('#blurrMe').toggleClass('blurred')
                plugins.menuSideBar.toggleClass('closed');
            }
        })
    }
    sidebar();
    function runSlider() {
        plugins.slider.nivoSlider({
            effect: 'fade',
            animSpeed: 500,
            pauseTime: 3000,
            pauseOnHover: true,
            controlNav: false,
        });
    }
    function runOwlCarouselHH2() {
        plugins.owlCarouselHH2.owlCarousel({
            lazyLoad:true,
            items:1,
            autoplay: true,
            smartSpeed: 1500,
            nav:true,
            dots: true,
            loop : true,
        });
    }
    if (plugins.slider.length) {
        runSlider();
    }
    if(plugins.owlCarouselHH2.length){
        runOwlCarouselHH2();
    }
});