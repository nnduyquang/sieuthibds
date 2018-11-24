var plugins = {
    menuSideBar: $('.sidebar'),
    slider: $('#slider'),
    owlCarouselHH2: $('.hh2')
};

function setinfo(clinfo,valinfo,clcontent){
    var input='<input name="'+clinfo+'" type="hidden" value="'+valinfo+'">'+valinfo;
    $('.'+clinfo).html(input);
    $('.'+clcontent+' .select-content').css({'opacity':0,'z-index':0});
    $('.'+clcontent+' .select-content ul').css('display','none');

}


$('.select-box-bed').mousemove(function () {
    // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
    // $('.select-box-bed .select-content ul').css('display','block');
    $(this).children('.select-content').css({'opacity':1,'z-index':11});
    $(this).children('.select-content').children(' ul').css('display','block');
});
$('.select-box-bed').mouseout(function () {
    // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
    // $('.select-box-bed .select-content ul').css('display','block');
    $(this).children('.select-content').css({'opacity':0,'z-index':1});
    $(this).children('.select-content').children(' ul').css('display','none');
});

$('.select-box-bath').mousemove(function () {
    // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
    // $('.select-box-bed .select-content ul').css('display','block');
    $(this).children('.select-content').css({'opacity':1,'z-index':11});
    $(this).children('.select-content').children(' ul').css('display','block');
});
$('.select-box-bath').mouseout(function () {
    // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
    // $('.select-box-bed .select-content ul').css('display','block');
    $(this).children('.select-content').css({'opacity':0,'z-index':1});
    $(this).children('.select-content').children(' ul').css('display','none');
});
$('.select-box-min').mousemove(function () {
    // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
    // $('.select-box-bed .select-content ul').css('display','block');
    $(this).children('.select-content').css({'opacity':1,'z-index':11});
    $(this).children('.select-content').children(' ul').css('display','block');
});
$('.select-box-min').mouseout(function () {
    // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
    // $('.select-box-bed .select-content ul').css('display','block');
    $(this).children('.select-content').css({'opacity':0,'z-index':1});
    $(this).children('.select-content').children(' ul').css('display','none');
});
$('.select-box-max').mousemove(function () {
    // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
    // $('.select-box-bed .select-content ul').css('display','block');
    $(this).children('.select-content').css({'opacity':1,'z-index':11});
    $(this).children('.select-content').children(' ul').css('display','block');
});
$('.select-box-max').mouseout(function () {
    // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
    // $('.select-box-bed .select-content ul').css('display','block');
    $(this).children('.select-content').css({'opacity':0,'z-index':1});
    $(this).children('.select-content').children(' ul').css('display','none');
});

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
            lazyLoad: true,
            items: 1,
            autoplay: true,
            smartSpeed: 1500,
            nav: true,
            dots: true,
            loop: true,
        });
    }

    if (plugins.slider.length) {
        runSlider();
    }
    if (plugins.owlCarouselHH2.length) {
        runOwlCarouselHH2();
    }
    $('form[name=search-home]').submit(function (e) {
        var input_text = $('input[name=input-search-text]').val();
        var select_project = $('select[name=select-project]').val();
        var num_bed = $('input[name=bed-count]').val();
        var num_bath = $('input[name=bath-count]').val();
        if (input_text == '' && select_project == '-1'&& num_bed == '-1' && num_bath == '-1') {
            e.preventDefault();
        }
    });
    $('form[name=search-home-menu]').submit(function (e) {
        var input_text = $('input[name=input-search-text-menu]').val();
        var select_project = $('select[name=select-project]').val();
        alert(num_bed);
        if (input_text == '' && select_project == '-1') {
            e.preventDefault();
        }
    });
    $('input[name=input-search-text-menu]').bind("enterKey", function (e) {
        var input_text = $('input[name=input-search-text-menu]').val();
        if (input_text == '') {
            e.preventDefault();
        }
    });
    $('input[name=input-search-text-menu]').keyup(function (e) {
        if (e.keyCode == 13) {
            $(this).trigger("enterKey");
        }
    });


});