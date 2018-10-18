@extends('backend.admin.master')
@section('title-page')
    Tạo Mới Sản Phẩm
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12 title-header">
        <div class="row">
            <div class="col-md-8">
                <h2>Tạo Mới Bất Động Sản</h2>
            </div>
            <div class="col-md-4 text-right">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
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
        {!! Form::open(array('route' => 'product.storeLocale','method'=>'POST')) !!}
    @else
        {!! Form::open(array('route' => 'product.store','method'=>'POST')) !!}
    @endif
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="wrap-create-edit">
                    @if(isset($translation_id))
                        {!! Form::hidden('translation_id', $translation_id) !!}
                        {!! Form::hidden('locale_id', $langLocale->id) !!}
                    @endif
                    <strong class="text-title-left">Tên Sản Phẩm</strong>
                    <div class="form-group">
                        {!! Form::text('name',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="wrap-create-edit">
                    <strong class="text-title-left">Mô Tả Ngắn</strong>
                    <div class="form-group">
                        {!! Form::textarea('description',null,array('placeholder' => '','id'=>'description-page','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="wrap-create-edit">
                    <strong class="text-title-right">Ngôn Ngữ</strong>
                    @if(!isset($translation_id))
                        <select class="form-control select-locale" name="locale_id">
                            @foreach($locales as $key=>$item)
                                <option data-href="{{ route('product.create',['locale_id'=>$item->id]) }}"
                                        value="{{$item->id}}"
                                        @if($locale_id==$item->id) selected @endif>{{$item->name}}</option>
                            @endforeach
                        </select>
                    @else
                        {!! Form::text('locale_id',$langLocale->name, array('placeholder' => 'Tên','class' => 'form-control','disabled'=>'disabled')) !!}
                    @endif
                </div>
                <div class="wrap-create-edit">
                    <strong class="text-title-right">Hình Đại Diện </strong>
                    <div class="form-group">
                        {!! Form::text('image', null, array('class' => 'form-control','id'=>'pathImage')) !!}
                        <br>
                        {!! Form::button('Tìm', array('id' => 'btnBrowseImage','class'=>'btn btn-primary')) !!}
                    </div>
                    <div class="form-group">
                        {{ Html::image('','',array('id'=>'showHinh','class'=>'show-image'))}}
                    </div>
                </div>
                <div class="wrap-create-edit">
                    <strong class="text-title-right">Thêm Hình Sản Phẩm </strong>
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::button('Thêm', array('id' => 'btnBrowseMore','class'=>'btn btn-primary')) !!}
                        </div>
                        <div class="form-group">
                            <div id="add-image" class="row">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-create-edit">
                    <strong class="text-title-right">Mã Sản Phẩm </strong>
                    <div class="form-group">
                        {!! Form::text('code',null, array('placeholder' => 'code','class' => 'form-control')) !!}
                    </div>

                </div>
                <div class="wrap-create-edit">
                    <strong class="text-title-right">Dự Án</strong>
                    <div class="category-info">
                        @include('backend.admin.product.list-select-option-create')
                    </div>
                </div>
                <div class="wrap-create-edit">
                    <strong class="text-title-right">Địa Điểm</strong>
                    <div class="form-group">
                        <select name="select-city" class="form-control">
                            <option value="-1">Chọn Tỉnh/Thành Phố</option>
                            @foreach($cities as $key=>$item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="select-district" class="form-control">
                            <option value="-1" selected>Chọn Quận/Huyện</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="select-ward" class="form-control">
                            <option value="-1" selected>Chọn Phường/Xã</option>
                        </select>
                    </div>

                </div>
                <div class="wrap-create-edit">
                    <strong class="text-title-right">Loại Bất Động Sản</strong>
                    <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio" value="1" name="is_rent" checked>Cần Bán
                        </label>
                        <label class="radio-inline">
                            <input type="radio" value="0" name="is_rent">Cho Thuê
                        </label>
                    </div>
                </div>
                <div class="wrap-create-edit">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Giá: </strong>
                                {!! Form::text('price',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>ĐVT: </strong>
                                <select name="select-unit" class="form-control">
                                    <option value="-1">Chọn Đơn Vị Tính</option>
                                    @foreach($units as $key=>$item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Diện Tích(m2): </strong>
                                {!! Form::text('area',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Số Phòng Ngủ </strong>
                                {!! Form::text('num_bed',null, array('placeholder' => 'Số Phòng','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Số Phòng Tắm </strong>
                                {!! Form::text('num_bath',null, array('placeholder' => 'Số Phòng','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Số Người ở Tối Đa </strong>
                                {!! Form::text('num_member',null, array('placeholder' => 'Số Phòng','class' => 'form-control')) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 p-0">
            <div class="wrap-create-edit">
                <strong class="text-title-left">Chọn Cơ Sở Vật Chất</strong>
                <div class="row">
                    @foreach($facilities as $key=>$item)
                        <div class="col-md-3">
                            <div class="facility-info">
                                <label class="check-container">
                                    {{$item->name}}
                                    {{ Form::checkbox('list_facility_id[]', $item->id, false, array('class' => '')) }}
                                    <span class="check-mark"></span>
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-12 p-0">
            <div class="wrap-create-edit">
                <strong class="text-title-left">Bản Đồ</strong>
                {!! Form::textarea('map',null,array('placeholder' => '','id'=>'','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
            </div>
            <div class="show-map">

            </div>
        </div>
        <div class="wrap-create-edit">
            <strong class="text-title-left">Mô Tả Sản Phẩm</strong>
            <div class="col-md-12 p-0">
                {!! Form::textarea('content',null,array('placeholder' => '','id'=>'content-page','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
            </div>
        </div>
        <hr>
        <div id="seo-part" class="col-md-12 p-0">
            <h3>SEO</h3>
            <div class="content">
                <div class="show-pattern">
                    <span class="title">Quick Brown Fox and The Lazy Dog - Demo Site</span>
                    <span class="link">example.com/the-quick-brown-fox</span>
                    <span class="description">The story of quick brown fox and the lazy dog. An all time classic children's fairy tale that is helping people with typography and web design.</span>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Từ khóa cần SEO</strong>
                        {!! Form::text('seo_keywords',null, array('placeholder' => 'keywords cách nhau dấu phẩy','class' => 'form-control')) !!}
                        <ul class="error-notice">
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <strong>Tiêu Đề (title):</strong>
                    {!! Form::text('seo_title',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                </div>
                <div class="col-md-12 form-group">
                    <strong>Mô Tả (description):</strong>
                    {!! Form::textarea('seo_description',null,array('placeholder' => '','id'=>'seo-description-post','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                </div>
            </div>
            <h3>Mạng Xã Hội</h3>
            <div class="content">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Chọn hình đại diện hiển thị MXH: </strong>
                        {!! Form::text('seo-image', null, array('class' => 'form-control','id'=>'pathImageMXH')) !!}
                        <br>
                        {!! Form::button('Tìm', array('id' => 'btnBrowseImageMXH','class'=>'btn btn-primary')) !!}
                    </div>
                    <div class="form-group">
                        {{ Html::image('','',array('id'=>'showHinhMXH','class'=>'show-image'))}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 form-group">
            <strong>Kích Hoạt:</strong>
            <input name="is_active" data-on="Có" data-off="Không" type="checkbox" data-toggle="toggle">
        </div>
        <div class="col-md-12" style="text-align:  center;">
            <button id="btnDanhMuc" type="submit" class="btn btn-primary">Tạo Mới Sản Phẩm</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop