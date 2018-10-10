@extends('backend.admin.master')
@section('title-page')
    Quản Lý Sản Phẩm
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12 title-header">
        <div class="row">
            <div class="col-md-8">
                <h2>Quản Lý Bất Động Sản</h2>
                @permission(('product-create'))
                <a class="btn btn-success" href="{{ route('product.create',['locale_id'=>1]) }}"> Tạo Mới </a>
                @endpermission
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="wrap-index">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div id="ulti-bar" class="col-md-12">
                        <div class="row">
                            <div class="ulti-edit" class="col-md-2">
                                <ul class="ulti-head">
                                    <li><a href="">Chỉnh Sửa</a>
                                        <ul class="ulti-head-dropdown">
                                            <li><a class="ulti-copy" href="#">Sao Chép</a></li>
                                            {!! Form::open(array('route' => 'product.paste','method'=>'POST','id'=>'formPaste')) !!}
                                            {{ Form::hidden('listID') }}
                                            <li><a class="ulti-paste" href="#">Dán</a></li>
                                            {!! Form::close() !!}
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    {!! Form::open(array('route' => 'product.search','method'=>'POST','id'=>'formSearchProduct')) !!}
                    <div class="input-group">
                        {!! Form::text('txtSearch',null, array('class' => 'form-control','id'=>'txtSearch')) !!}
                        <span class="input-group-btn">
                    {!! Form::submit('Tìm Kiếm', ['class' => 'btn btn-info']) !!}
                        </span>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        @if(!empty($keywords))
            <div id="showKeySearch" class="col-md-12">
                <div class="wrap-search">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>{{$keywords}} <a
                            href="{{ route('product.search') }}">X</a>
                </div>
            </div>
            {{ Form::hidden('hdKeyword', $keywords) }}
        @endif


        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>TT</th>
                    <th></th>
                    <th>Tên Sản Phẩm</th>
                    <th>
                        <div class="wrap-image">
                            @foreach($locales as $key=>$item)
                                {{ Html::image($item->icon,'',array('id'=>'','class'=>'image-flag'))}}
                            @endforeach
                        </div>
                    </th>
                    <th>Code</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>Diện Tích</th>
                    <th>Loại Sản Phẩm</th>
                    <th>Người Đăng</th>
                    <th>Ngày Đăng</th>
                    <th>Ngày Cập Nhật</th>
                    <th>Tình Trạng</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($products as $key => $data)
                    <td>{{ ++$i }}</td>
                    <td>{{Form::checkbox('id[]',$data->id)}}</td>
                    <td>{{ $data->products()->first()->name }}</td>
                    <td>
                        <div class="group-locale">
                            @php
                                $localesPost=$data->products()->get();
                            @endphp
                            @foreach($locales as $key=>$item)
                                @if(in_array($item->id,$localesPost->pluck('locale_id')->toArray()))
                                    @foreach($localesPost as $key2=>$item2)
                                        @if($item2->locale_id==$item->id)
                                            <a href="{{ route('product.edit',['id'=>$item2->id,'locale_id'=>$item2->locale_id]) }}"><i class="far fa-check-square"
                                                                                             style="color: green"></i>

                                                @endif
                                                @endforeach
                                                @else
                                                    <a href="{{ route('product.createLocale',['translation_id'=>$data->products()->first()->translation_id,'locale_id'=>$item->id]) }}"><i class="fas fa-plus"></i></a>
                                        @endif
                                    @endforeach
                        </div>
                    </td>
                    <td>{{ $data->products()->first()->code }}</td>
                    <td>{{Html::image($data->products()->first()->image,'',array('class'=>'product-img'))}}</td>
                    <td>
                        @if(!is_null($data->products()->first()->unit_id))
                            {{$data->products()->first()->price}} {{$data->products()->first()->units()->first()->name}}
                        @else
                            Không xác định
                        @endif
                    </td>
                    <td>
                        @if(!is_null($data->products()->first()->area))
                            {{$data->products()->first()->area}} m2
                        @else
                            Không xác định
                        @endif

                    </td>
                    @php
                        $arrayCategoryItem=$data->products()->first()->categoryitems(CATEGORY_PRODUCT)->get();
                    @endphp
                    <td>{{$arrayCategoryItem->implode('name',',')}}</td>
                    <td>{{ $data->products()->first()->users->name }}</td>
                    <td>{{ $data->products()->first()->created_at }}</td>
                    <td>{{ $data->products()->first()->updated_at }}</td>
                    <td>{{$data->products()->first()->is_active}}</td>
                    <td>
                        @permission(('product-edit'))
                        <a class="btn btn-primary" href="{{ route('product.edit',['id'=>$data->products()->first()->id,'locale_id'=>$data->products()->first()->locale_id]) }}">Cập Nhật</a>
                        @endpermission
                        @permission(('product-delete'))
                        {!! Form::open(['method' => 'DELETE','route' => ['product.destroy', $data->products()->first()->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        @endpermission
                    </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    {{--{!! $data->products()->first()->links() !!}--}}
    </div>
@stop