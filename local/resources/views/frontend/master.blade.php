<!DOCTYPE Html>
<Html lang="en-US" class="lang-en_US" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<meta http-equiv="content-type" content="text/Html;charset=UTF-8"/>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="@yield('keyword')">
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width">
    <meta property="og:title" content="@yield('title')"/>
    {{--<meta property="og:type" content="article" />--}}
    <meta property="og:url" content="@yield('url-og')"/>
    <meta property="og:image" content="@yield('image-og')"/>
    <meta property="og:description" content="@yield('description')"/>
    <link rel="shortcut icon" href="{{URL::asset('images/icon/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{URL::asset('images/icon/favicon.ico')}}" type="image/x-icon">
    {{--<meta property="og:site_name" content="Site Name, i.e. Moz" />--}}
    {{ Html::style('css/core.common.css') }}
    {{ Html::style('css/core.frontend.css') }}
    {{ Html::style('css/frontend.css') }}
    @yield('styles')
</head>
<body>
<header id="header">

</header>

<div id="blurrMe">
    @include('frontend.common.menu.m-menu')
    @include('frontend.common.menu.menu')
    @yield('slider')
    @yield('container')
</div>
@include('frontend.common.menu.m-sidebar')
<div class="footer">
    @include('frontend.common.footer')
</div>
{{ Html::script('js/core.common.js') }}
{{ Html::script('js/core.frontend.js') }}
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    new WOW().init();
    $(function () {
        var count = 0;
        $('.owl-h2').each(function () {
            $(this).attr('id', 'owl-demo' + count);
            $('#owl-demo' + count).owlCarousel({
                navigation: true,
                slideSpeed: 300,
                pagination: true,
                loop: true,
                // nav: false,
                singleItem: true,
                // autoPlay: 2000,
                autoHeight: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true,
                        loop: true,
                        dots: false,
                    },
                    600: {
                        items: 1,
                        nav: true,
                        loop: true,
                        dots: false,
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


    $("#a-click-filter").click(function () {

        if($("#mobile-show").css('display')=='none'){
            $("#mobile-show").css('display','block');
            $("#a-click-filter").html('Hide filter')
            }else{
            $("#mobile-show").css('display','none');
            $("#a-click-filter").html('More filter')
        }

    });

    $("#menu_click").click(function () {
        if ($("#menu-left").css('display') == 'none') {

            $("#menu-right").css('display', 'none')

            $("#menu-left").css('display', 'block')
        } else {
            $("#menu-left").css('display', 'none')

        }

    });

    $("#menu_search_click").click(function () {
        if ($("#menu-right").css('display') == 'none') {

            $("#menu-left").css('display', 'none')

            $("#menu-right").css('display', 'block')
        } else {
            $("#menu-right").css('display', 'none')
        }

    });


</script>
{{ Html::script('js/scripts.js') }}
@yield('jv-scripts')
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5bc4198e61d0b77092513d9f/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
<div class="callback d-lg-none d-md-none">
    <div class="phone_animation">
        <div class="phone_animation_circle"></div>
        <div class="phone_animation_circle_fill"></div>
        <a href="tel:0902806679" class="phone_animation_circle_fill_img"><i class="fas fa-phone"
                                                                            aria-hidden="true"></i></a>
    </div>
</div>
<div class="callback d-none d-md-block"  style="right: 286px!important;bottom: 0px;left:inherit">

    <div class="tel-no bg-success text-center" style="border-radius: 5px 5px 0px 0px;padding: 12px 10px 10px 10px">
        <a class="text-white" href="tel:0902806679">(+84) 902 806 679</a>
    </div>

</div>
{{--<div class="mess_desk_bot d-none d-md-block" style="position: fixed;bottom:40px;right: 0px;">--}}
{{--<a href="tel:0962599482" style="display: block;width: 260px;height: 56px;background: url({{URL::to('images/nenhot.png')}}) no-repeat;text-align: center;padding-top: 10px;color:#fff;font-size: 20px;font-family: 'roboto-bold'">--}}
{{--</a>--}}
{{--</div>--}}

<!-- Global site tag (gtag.js) - AdWords: 868688063 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-868688063"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-868688063');
</script>
</body>

</Html>