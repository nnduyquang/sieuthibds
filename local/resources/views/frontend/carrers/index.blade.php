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
    {{--@include('frontend.common.slider')--}}
@stop
@section('container')

    @include('frontend.carrers.ca_1')
    @include('frontend.carrers.ca_2')

@stop

@section('jv-scripts')
    <script>

        $(document).ready(function () {


            $('#owl-agent').owlCarousel({
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

            var owl = $('#owl-agent');
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