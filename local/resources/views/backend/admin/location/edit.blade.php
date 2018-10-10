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
            <div class="col-md-6">
                <div class="wrap-create-edit">
                    <strong class="text-title-right">Ngôn Ngữ</strong>
                    @php
                        $localesPost=$translation->locations()->get();
                        $insertLangArray = array();
                    @endphp
                    @if(count($localesPost)!=count($locales))
                        <select class="form-control select-locale" name="locale_id">
                            @foreach($locales as $key=>$item)
                                @foreach($localesPost as $key2=>$item2)

                                    @if($item->id==$item2->locale_id)
                                        <option data-href="{{ route('location.edit',['id'=>$item2->id,'locale_id'=>$item2->locale_id]) }} "
                                                data-post-id="{{$item2->id}}" value="{{$item->id}}"
                                                @if($location->locale_id==$item->id) selected @endif>{{$item->name}}</option>
                                    @endif
                                @endforeach
                            @endforeach
                            @foreach($locales as $key=>$item)
                                @if(!in_array($item->id,$localesPost->pluck('locale_id')->toArray()))
                                    @php
                                        array_push($insertLangArray, $item);
                                    @endphp
                                @endif
                            @endforeach
                        </select>
                    @else
                        <select class="form-control select-locale" name="locale_id">
                            @foreach($locales as $key=>$item)
                                @foreach($localesPost as $key2=>$item2)
                                    @if($item->id==$item2->locale_id)
                                        <option data-href="{{ route('location.edit',['id'=>$item2->id,'locale_id'=>$item2->locale_id]) }}"
                                                data-post-id="{{$item2->id}}" value="{{$item->id}}"
                                                @if($location->locale_id==$item->id) selected @endif>{{$item->name}}</option>
                                    @endif
                                @endforeach
                            @endforeach
                        </select>

                    @endif
                    <div class="group-more-lang">
                        @foreach($insertLangArray as $key=>$item)
                            <a href="{{ route('location.createLocale',['translation_id'=>$location->translation_id,'locale_id'=>$item->id]) }}">Thêm
                                Ngôn Ngữ {{$item->name}}</a><br>
                        @endforeach
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
