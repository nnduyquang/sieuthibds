@extends('backend.admin.master')
@section('title-page')
    Tạo Mới Bài Viết
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12 title-header">
        <div class="row">
            <div class="col-md-8">
                <h2>Tạo Mới Đơn Vị Tính
                    @if(isset($translation_id))
                        Bạn Đang Thêm Ngôn Ngữ {{$langLocale->name}}
                    @endif
                </h2>
            </div>
            <div class="col-md-4 text-right">
                <a class="btn btn-primary" href="{{ route('unit.index') }}"> Back</a>
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
        {!! Form::open(array('route' => 'unit.storeLocale','method'=>'POST')) !!}
    @else
        {!! Form::open(array('route' => 'unit.store','method'=>'POST')) !!}
    @endif
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="wrap-create-edit">
                    @if(isset($translation_id))
                        {!! Form::hidden('translation_id', $translation_id) !!}
                        {!! Form::hidden('locale_id', $langLocale->id) !!}
                    @endif

                    <strong class="text-title-left">Tên Đơn Vị Tính</strong>
                    <div class="form-group">
                        {!! Form::text('name',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="wrap-create-edit">
                    <strong class="text-title-right">Ngôn Ngữ</strong>
                    @if(!isset($translation_id))
                        <select class="form-control" name="locale_id">
                            @foreach($locales as $key=>$item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    @else
                        {!! Form::text('locale_id',$langLocale->name, array('placeholder' => 'Tên','class' => 'form-control','disabled'=>'disabled')) !!}
                    @endif
                </div>
                {{--<div class="wrap-create-edit">--}}
                {{--<strong class="text-title-right">Icon</strong>--}}
                {{--<div class="form-group">--}}
                {{--{!! Form::text('icon',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}--}}
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
            <button id="btnDanhMuc" type="submit" class="btn btn-primary">Tạo Mới Đơn Vị Tính</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop