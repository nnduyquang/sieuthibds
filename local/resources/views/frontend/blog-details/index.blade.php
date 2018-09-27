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
    @include('frontend.blog.banner-project')
@stop
@section('container')
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                @include('frontend.blog-details.lp_1')
            </div>

            <div class="col-md-4">
                @include('frontend.blog-details.pr_1')
                {{--@include('frontend.pr-details.pr_2')--}}
            </div>
        </div>

    </div>
    {{--@include('frontend.project.p_4')--}}
    {{--@include('frontend.pr-details.h_3')--}}
@stop

@section('jv-scripts')
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
@stop