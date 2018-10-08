@extends('backend.admin.master')
@section('title-page')
    Cập Nhật Chuyên Mục Bài Viết
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12 title-header">
        <div class="row">
            <div class="col-md-8">
                <h2>Cập Nhật Địa Điểm</h2>
            </div>
            <div class="col-md-4 text-right">
                <a class="btn btn-primary" href="{{ route('location.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Úi!</strong> Hình Như Có Gì Đó Sai Sai.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($location,array('route' => ['location.update',$location->id],'method'=>'PATCH','style'=>'width:100%')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="wrap-create-edit">
                    <strong  class="text-title-left">Tên Địa Điểm</strong>
                    <div class="form-group">
                        {!! Form::text('name',$location->name, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="wrap-create-edit">
                    <strong class="text-title-left">Trực Thuộc</strong>
                    <div class="form-group">
                        {{--{!! Form::select('parent',$dd_categorie_posts, null,array('class' => 'form-control')) !!}--}}
                        <select class="form-control" name="parent_id">
                            <option value="-1">Gốc</option>
                            @include('backend.admin.location.list-select-option-edit')
                        </select>
                    </div>
                </div>
                <div class="wrap-create-edit">
                    <strong  class="text-title-left">Thứ Tự</strong>
                    <div class="form-group">
                        {!! Form::text('order',null, array('placeholder' => 'Thứ Tự','class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
            {{--<div class="col-md-6">--}}
            {{--<div class="form-group">--}}
            {{--<strong>Hình Đại Diện: </strong>--}}
            {{--{!! Form::text('image', null, array('class' => 'form-control','id'=>'pathImage')) !!}--}}
            {{--<br>--}}
            {{--{!! Form::button('Tìm', array('id' => 'btnBrowseImage','class'=>'btn btn-primary')) !!}--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
            {{--{{ Html::image('','',array('id'=>'showHinh','class'=>'show-image'))}}--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    <hr>
    <div id="seo-part" class="col-md-12 p-0">
        <h3>SEO</h3>
        <div class="content">
            <div class="show-pattern">
                <span class="title">{{$location->seos->seo_title}}</span>
                <span class="link">{{URL::to('/')}}/{{$location->path}}</span>
                <span class="description">{{$location->seos->seo_description}}</span>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Từ khóa cần SEO</strong>
                    {!! Form::text('seo_keywords',$location->seos->seo_keywords, array('placeholder' => 'keywords cách nhau dấu phẩy','class' => 'form-control')) !!}
                    <ul class="error-notice">
                    </ul>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <strong>Tiêu Đề (title):</strong>
                {!! Form::text('seo_title',$location->seos->seo_title, array('placeholder' => 'Tên','class' => 'form-control')) !!}
            </div>
            <div class="col-md-12 form-group">
                <strong>Mô Tả (description):</strong>
                {!! Form::textarea('seo_description',$location->seos->seo_description,array('placeholder' => '','id'=>'seo-description-post','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group">
        <strong>Kích Hoạt:</strong>
        <input {{$location->is_active==1?'checked':''}} name="is_active" data-on="Có"
               data-off="Không"
               type="checkbox" data-toggle="toggle">
    </div>
    <div class="col-md-12" style="text-align:  center;">
        <button id="btnDanhMuc" type="submit" class="btn btn-primary">Cập Nhật Địa Điểm</button>
    </div>
    {!! Form::close() !!}
@stop
