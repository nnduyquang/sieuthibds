@extends('backend.admin.master')
@section('title-page')
    Cập Nhật Bài Viết
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12 title-header">
        <div class="row">
            <div class="col-md-8">
                <h2>Cập Nhật Cơ Sở Vật Chất</h2>
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
    {!! Form::model($unit,array('route' => ['unit.update',$unit->id],'method'=>'PATCH')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="wrap-create-edit">
                    <strong class="text-title-left">Tên Đơn Vị Tính</strong>
                    <div class="form-group">
                        {!! Form::text('name',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="wrap-create-edit">
                    <strong class="text-title-right">Ngôn Ngữ</strong>
                    @php
                        $localesPost=$translation->units()->get();
                        $insertLangArray = array();
                    @endphp
                    @if(count($localesPost)!=count($locales))
                        <select class="form-control select-locale" name="locale_id">
                            @foreach($locales as $key=>$item)
                                @foreach($localesPost as $key2=>$item2)

                                    @if($item->id==$item2->locale_id)
                                        <option data-href="{{ route('unit.edit',$item2->id) }} "
                                                data-post-id="{{$item2->id}}" value="{{$item->id}}"
                                                @if($unit->locale_id==$item->id) selected @endif>{{$item->name}}</option>
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
                                        <option data-href="{{ route('unit.edit',$item2->id) }}"
                                                data-post-id="{{$item2->id}}" value="{{$item->id}}"
                                                @if($unit->locale_id==$item->id) selected @endif>{{$item->name}}</option>
                                    @endif
                                @endforeach
                            @endforeach
                        </select>

                    @endif
                    <div class="group-more-lang">
                        @foreach($insertLangArray as $key=>$item)
                            <a href="{{ route('unit.createLocale',['translation_id'=>$unit->translation_id,'locale_id'=>$item->id]) }}">Thêm
                                Ngôn Ngữ {{$item->name}}</a><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-12 form-group">
                <strong>Kích Hoạt:</strong>
                <input name="is_active" data-on="Có"
                       data-off="Không"
                       type="checkbox" data-toggle="toggle">
            </div>
            <div class="col-md-12" style="text-align:  center;">
                <button id="btnDanhMuc" type="submit" class="btn btn-primary">Cập Nhật Đơn Vị Tính</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop