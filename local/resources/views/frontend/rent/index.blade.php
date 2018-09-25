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
    @include('frontend.common.search-bar')
    @include('frontend.common.mobile-bar')
@stop
@section('container')

    @include('frontend.rent.h_2')

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


    </script>
@stop