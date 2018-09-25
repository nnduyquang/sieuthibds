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
    @include('frontend.common.banner-title')
@stop
@section('container')

    @include('frontend.project.h_2')
    @include('frontend.project.p_1')
    @include('frontend.project.p_2')
    @include('frontend.project.p_3')
    @include('frontend.project.p_4')
    @include('frontend.project.h_3')

@stop

@section('jv-scripts')
    <script>

        $(".btn-filter").click(function(){
            if($("#more-sb").css('display')=='none'){
                $("#more-sb").css('display','block');
            }else{
                $("#more-sb").css('display','none');
            }
        });

        $("#h_top_nav").click(function() {
            $('html, body').animate({
                scrollTop: $("#p_1").offset().top
            }, 2000);
        });

        $("#h_1_nav").click(function() {
            $('html, body').animate({
                scrollTop: $("#p_2").offset().top
            }, 2000);
        });

        $("#h_2_nav").click(function() {
            $('html, body').animate({
                scrollTop: $("#p_3").offset().top
            }, 2000);
        });

        $("#h_3_nav").click(function() {
            $('html, body').animate({
                scrollTop: $("#p_4").offset().top
            }, 2000);
        });

        $(document).ready(function () {

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
        });

    </script>
@stop