@extends('frontend.master')
@section('title')
    Siêu thị bất động sản
@stop
@section('description')
    Siêu thị bất động sản
@stop
@section('keyword')

@stop
@section('url-og')

@stop
@section('image-og')

@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('slider')
    @include('frontend.common.slider')
@stop
@section('container')
    {{--@include('frontend.home.h_1')--}}
    @include('frontend.home.h_2')
    @include('frontend.home.h_3')
    @include('frontend.common.map')
@stop

@section('jv-scripts')
    <script>

        // function setinfo(clinfo,valinfo,clcontent){
        //     var input='<input name="'+clinfo+'" type="hidden" value="'+valinfo+'">'+valinfo;
        //     $('.'+clinfo).html(input);
        //     $('.'+clcontent+' .select-content').css({'opacity':0,'z-index':0});
        //     $('.'+clcontent+' .select-content ul').css('display','none');
        //
        // }
        //
        //
        // $('.select-box-bed').mousemove(function () {
        //     // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
        //     // $('.select-box-bed .select-content ul').css('display','block');
        //     $(this).children('.select-content').css({'opacity':1,'z-index':11});
        //     $(this).children('.select-content').children(' ul').css('display','block');
        // });
        // $('.select-box-bed').mouseout(function () {
        //     // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
        //     // $('.select-box-bed .select-content ul').css('display','block');
        //     $(this).children('.select-content').css({'opacity':0,'z-index':1});
        //     $(this).children('.select-content').children(' ul').css('display','none');
        // });
        //
        // $('.select-box-bath').mousemove(function () {
        //     // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
        //     // $('.select-box-bed .select-content ul').css('display','block');
        //     $(this).children('.select-content').css({'opacity':1,'z-index':11});
        //     $(this).children('.select-content').children(' ul').css('display','block');
        // });
        // $('.select-box-bath').mouseout(function () {
        //     // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
        //     // $('.select-box-bed .select-content ul').css('display','block');
        //     $(this).children('.select-content').css({'opacity':0,'z-index':1});
        //     $(this).children('.select-content').children(' ul').css('display','none');
        // });
        // $('.select-box-min').mousemove(function () {
        //     // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
        //     // $('.select-box-bed .select-content ul').css('display','block');
        //     $(this).children('.select-content').css({'opacity':1,'z-index':11});
        //     $(this).children('.select-content').children(' ul').css('display','block');
        // });
        // $('.select-box-min').mouseout(function () {
        //     // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
        //     // $('.select-box-bed .select-content ul').css('display','block');
        //     $(this).children('.select-content').css({'opacity':0,'z-index':1});
        //     $(this).children('.select-content').children(' ul').css('display','none');
        // });
        // $('.select-box-max').mousemove(function () {
        //     // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
        //     // $('.select-box-bed .select-content ul').css('display','block');
        //     $(this).children('.select-content').css({'opacity':1,'z-index':11});
        //     $(this).children('.select-content').children(' ul').css('display','block');
        // });
        // $('.select-box-max').mouseout(function () {
        //     // $('.select-box-bed .select-content').css({'opacity':1,'z-index':11});
        //     // $('.select-box-bed .select-content ul').css('display','block');
        //     $(this).children('.select-content').css({'opacity':0,'z-index':1});
        //     $(this).children('.select-content').children(' ul').css('display','none');
        // });



        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();

        $(function () {
            var count = 0;
            $('.owl-h2').each(function () {
                $(this).attr('id', 'owl-demo' + count);
                $('#owl-demo' + count).owlCarousel({
                    navigation: true,
                    slideSpeed: 300,
                    pagination: true,
                    loop: true,
                    nav: false,
                    dots: true,
                    singleItem: true,
                    // autoPlay: 2000,
                    autoHeight: true,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true,
                            loop: true
                        },
                        600: {
                            items: 1,
                            nav: true,
                            loop: true
                        },
                        1000: {
                            items: 1,
                            nav: true,
                            loop: true
                        }
                    }
                });


                count++;
            });
        });

        $(document).ready(function () {

            $('#owl-h1').owlCarousel({
                loop: true,
                margin: 10,
                nav:false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });

            $('#owl-project').owlCarousel({
                loop: true,
                margin: 10,
                nav:false,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            var owl = $('#owl-project');
            // owl.owlCarousel();
// Go to the next item
            $('.btn_next').click(function() {
                owl.trigger('next.owl.carousel');
            })
// Go to the previous item
            $('.btn_pre').click(function() {
                // With optional speed parameter
                // Parameters has to be in square bracket '[]'
                owl.trigger('prev.owl.carousel', [300]);
            })

            $('#owl-slider').owlCarousel({
                loop: true,
                margin: 10,
                nav:false,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
        });
    </script>
@stop