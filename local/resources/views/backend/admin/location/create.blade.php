@extends('backend.admin.master')
@section('title-page')
    Tạo Mới Địa Điểm
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12 title-header">
        <div class="row">
            <div class="col-md-8">
                <h2>Tạo Mới Địa Điểm</h2>
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
    @if(isset($translation_id))
        {!! Form::open(array('route' => 'location.storeLocale','method'=>'POST')) !!}
    @else
        {!! Form::open(array('route' => 'location.store','method'=>'POST')) !!}
    @endif
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="wrap-create-edit">
                    @if(isset($translation_id))
                        {!! Form::hidden('translation_id', $translation_id) !!}
                        {!! Form::hidden('locale_id', $langLocale->id) !!}
                    @endif
                    <strong  class="text-title-left">Tên Địa Điểm</strong>
                    <div class="form-group">
                        {!! Form::text('name',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="wrap-create-edit">
                    <strong class="text-title-left">Trực Thuộc</strong>
                    <div class="form-group">
                        {{--{!! Form::select('parent',$dd_categorie_posts, null,array('class' => 'form-control')) !!}--}}
                        <select class="form-control" name="parent_id">
                            <option value="-1">Gốc</option>
                            @include('backend.admin.location.list-select-option-create')
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
            <div class="col-md-6">
                <div class="wrap-create-edit">
                    <strong class="text-title-right">Ngôn Ngữ</strong>
                    @if(!isset($translation_id))
                        <select class="form-control select-locale" name="locale_id">
                            @foreach($locales as $key=>$item)
                                <option data-href="{{ route('location.create',['locale_id'=>$item->id]) }}" value="{{$item->id}}" @if($locale_id==$item->id) selected @endif>{{$item->name}}</option>
                            @endforeach
                        </select>
                    @else
                        {!! Form::text('locale_id',$langLocale->name, array('placeholder' => 'Tên','class' => 'form-control','disabled'=>'disabled')) !!}
                    @endif
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
    <div class="col-md-12 form-group">
        <strong>Kích Hoạt:</strong>
        <input name="is_active" data-on="Có" data-off="Không" type="checkbox" data-toggle="toggle">
    </div>
    <div class="col-md-12" style="text-align:  center;">
        <button id="btnDanhMuc" type="submit" class="btn btn-primary">Tạo Mới Địa Điểm</button>
    </div>

    {!! Form::close() !!}
@stop