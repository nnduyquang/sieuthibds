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
    <style>
        h1 {
            font-size: 32px;
            padding: 0px 0px 20px 0px;
            font-weight: bold;
            width: fit-content;
            margin: auto;
        }

        h4 {
            font-size: 30px;
            padding: 20px 0px;
            font-weight: bold;
        }
    </style>
@stop
@section('slider')
    @include('frontend.ground.banner-project')
@stop
@section('container')

    <div class="container-fluid" id="h_2">
        <div class="container">
            <div class="row">
                <div class="col-12 text-left nav-title">
                    <ul>
                        <li><a href=""><i class="fas fa-hotel"></i> HOME</a></li>
                        <li><a href="">HO CHI MINH</a></li>
                        <li><a href="">MASTERI THAO DIEN</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>


    <div class="container">

        <div class="row">
            @php
                $locale_id=Session::get('website_language');
            @endphp
            @if($locale_id=='vi')
                <div class="col-md-12 vi_VN">

                    <h1>MẶT BẰNG CĂN HỘ MASTERI THẢO ĐIỀN</h1>


                    <H6 class="mb-3">MẶT BẰNG TỔNG MASTERI THẢO ĐIỀN</H6>

                    <P class="mb-3">Mặt bằng căn hộ được thiết kế thông thoáng và hợp lý với 04 loại căn hộ diện tích
                        khác
                        nhau.</P>

                    <ul class="ml-4 mb-3">
                        <li>1 phòng ngủ / 45m² – 52m²</li>
                        <li>2 phòng ngủ / 59m² – 70m²</li>
                        <li>2 phòng ngủ / 71m² – 72m²</li>
                        <li>3 phòng ngủ / 86m² – 90m²</li>
                    </ul>

                    <h4>Mặt bằng tầng Tòa 1</h4>
                    <div class="" style="width: fit-content;margin: auto;text-align: center">
                        <img src="{{URL::asset('images/ground/mat-bang-T1.png')}}" alt=""
                             style="width: 80%;margin: auto">
                    </div>
                    <h4>Mặt bằng tầng Tòa 2</h4>
                    <div class="" style="width: fit-content;margin: auto;text-align: center">
                        <img src="{{URL::asset('images/ground/mat-bang-T2.png')}}" alt=""
                             style="width: 80%;margin: auto">
                    </div>
                    <h4>Mặt bằng tầng Tòa 3</h4>
                    <div class="" style="width: fit-content;margin: auto;text-align: center">
                        <img src="{{URL::asset('images/ground/mat-bang-T3.jpg')}}" alt=""
                             style="width: 90%;margin: auto">
                    </div>
                    <h4>Mặt bằng tầng Tòa 4</h4>
                    <div class="" style="width: fit-content;margin: auto;text-align: center">
                        <img src="{{URL::asset('images/ground/mat-bang-T4.png')}}" alt=""
                             style="width: 90%;margin: auto">
                    </div>

                    <div class="text-center">
                        <h4>Quý khách xin liện hệ Phòng Kinh Doanh <br>
                            Hotline: 0902 806 679</h4>
                    </div>

                </div>
            @else
                <div class="col-md-12 us_US">


                    <h1>FURNISHED BY MASTERI THAO DIEN APARTMENT</h1>


                    <H6 class="mb-3">EVERY MASTERI THAO FILLED</H6>

                    <P class="mb-3">The flat is designed with ventilation and reasonable with 04 different types of apartments.</P>

                    <ul class="ml-4 mb-3">
                        <li>1 bedroom / 45m² - 52m²</li>
                        <li>2 bedrooms / 59m² - 70m²</li>
                        <li>2 bedrooms / 71m² - 72m²</li>
                        <li>3 bedrooms / 86m² - 90m²</li>
                    </ul>

                    <h4>Tower T1</h4>
                    <div class="" style="width: fit-content;margin: auto;text-align: center">
                        <img src="{{URL::asset('images/ground/mat-bang-T1.png')}}" alt=""
                             style="width: 80%;margin: auto">
                    </div>
                    <h4>Tower T2</h4>
                    <div class="" style="width: fit-content;margin: auto;text-align: center">
                        <img src="{{URL::asset('images/ground/mat-bang-T2.png')}}" alt=""
                             style="width: 80%;margin: auto">
                    </div>
                    <h4>Tower T3</h4>
                    <div class="" style="width: fit-content;margin: auto;text-align: center">
                        <img src="{{URL::asset('images/ground/mat-bang-T3.jpg')}}" alt=""
                             style="width: 90%;margin: auto">
                    </div>
                    <h4>Tower T4</h4>
                    <div class="" style="width: fit-content;margin: auto;text-align: center">
                        <img src="{{URL::asset('images/ground/mat-bang-T4.png')}}" alt=""
                             style="width: 90%;margin: auto">
                    </div>

                    <div class="text-center">
                        <h4>Please Contact Business Department
                            <br>
                            Hotline: 0902 806 679</h4>
                    </div>

                </div>
            @endif

            {{--<div class="col-md-4">--}}
            {{--@include('frontend.list-project.pr_1')--}}
            {{--@include('frontend.pr-details.pr_2')--}}
            {{--</div>--}}
        </div>

    </div>
    {{--@include('frontend.project.p_4')--}}
    {{--@include('frontend.pr-details.h_3')--}}
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

    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
@stop