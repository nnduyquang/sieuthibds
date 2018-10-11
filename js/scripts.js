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
    $('form[name=search-home]').submit(function (e) {
        var input_text=$('input[name=input-search-text]').val();
        var select_project = $('select[name=select-project]').val();
        if (input_text == '' && select_project == '-1') {
            e.preventDefault();
        }
    });
    $('form[name=search-home-menu]').submit(function (e) {
        var input_text=$('input[name=input-search-text-menu]').val();
        var select_project = $('select[name=select-project]').val();
        if (input_text == '' && select_project == '-1') {
            e.preventDefault();
        }
    });
    $('input[name=input-search-text-menu]').bind("enterKey",function(e){
        var input_text=$('input[name=input-search-text-menu]').val();
        if (input_text == '') {
            e.preventDefault();
        }
    });
    $('input[name=input-search-text-menu]').keyup(function(e){
        if(e.keyCode == 13)
        {
            $(this).trigger("enterKey");
        }
    });

});