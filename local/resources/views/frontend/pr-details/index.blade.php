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
    @include('frontend.common.banner-rent')
@stop
@section('container')
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                @include('frontend.pr-details.h_2')
                @include('frontend.pr-details.p_2')
                @include('frontend.pr-details.p_1')
                @include('frontend.pr-details.p_3')
            </div>

            <div class="col-md-4">
                @include('frontend.pr-details.pr_1')
                {{--@include('frontend.pr-details.pr_2')--}}
            </div>
        </div>

    </div>
    @include('frontend.pr-details.p_4')
    @include('frontend.pr-details.h_3')
@stop

@section('jv-scripts')
    <script>

        $(".btn-filter").click(function () {
            if ($("#more-sb").css('display') == 'none') {
                $("#more-sb").css('display', 'block');
            } else {
                $("#more-sb").css('display', 'none');
            }
        });

        $("#h_top_nav").click(function () {
            $('html, body').animate({
                scrollTop: $("#p_1").offset().top
            }, 2000);
        });

        $("#h_1_nav").click(function () {
            $('html, body').animate({
                scrollTop: $("#p_2").offset().top
            }, 2000);
        });

        $("#h_2_nav").click(function () {
            $('html, body').animate({
                scrollTop: $("#p_3").offset().top
            }, 2000);
        });

        $("#h_3_nav").click(function () {
            $('html, body').animate({
                scrollTop: $("#p_4").offset().top
            }, 2000);
        });

        $(document).ready(function () {

            $('#owl-project').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });

            var owl = $('#owl-project');
            // owl.owlCarousel();
// Go to the next item
            $('.btn_next').click(function () {
                owl.trigger('next.owl.carousel');
            })
// Go to the previous item
            $('.btn_pre').click(function () {
                // With optional speed parameter
                // Parameters has to be in square bracket '[]'
                owl.trigger('prev.owl.carousel', [300]);
            })
        });

    </script>
@stop