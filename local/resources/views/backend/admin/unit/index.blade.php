@extends('backend.admin.master')
@section('title-page')
    Quản Lý Bài Viết
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12 title-header">
        <div class="row">
            <div class="col-md-8">
                <h2>Quản Lý Đơn Vị Tính</h2>
            </div>
            <div class="col-md-4 text-right">
                @permission(('post-create'))
                <a class="btn btn-success" href="{{ route('unit.create') }}"> Tạo Mới Đơn Vị Tính</a>
                @endpermission
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    {!! Form::open(array('route' => 'unit.search','method'=>'POST','id'=>'formSearchPost')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                {!! Form::text('txtSearch',null, array('class' => 'form-control','id'=>'txtSearch')) !!}
            </div>
            <div class="col-md-6">
                {!! Form::button('Tìm Kiếm', array('id' => 'btnSearchPost','class'=>'btn btn-primary')) !!}
            </div>
        </div>
    </div>

    {!! Form::close() !!}
    @if(!empty($keywords))
        <div id="showKeySearch" class="col-md-12">
            <div class="row wrap-search">
                <i class="fa fa-caret-right" aria-hidden="true"></i>{{$keywords}} <a
                        href="{{ route('facility.search') }}">X</a>
            </div>
        </div>
        {{ Form::hidden('hdKeyword', $keywords) }}
    @endif
    <div class="wrap-index">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>TT</th>
                    <th>Tên Đơn Vị Tính</th>
                    <th>
                        <div class="wrap-image">
                            @foreach($locales as $key=>$item)
                                {{ Html::image($item->icon,'',array('id'=>'','class'=>'image-flag'))}}
                            @endforeach
                        </div>
                    </th>
                    {{--<th>Người Đăng</th>--}}
                    <th>Ngày Đăng</th>
                    <th>Ngày Cập Nhật</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($units as $key => $data)
                    <td>{{ ++$i }}</td>
                    <td>{{ $data->units()->first()->name }}</td>
                    <td>
                        <div class="group-locale">
                            @php
                                $localesPost=$data->units()->get();
                            @endphp
                            @foreach($locales as $key=>$item)
                                @if(in_array($item->id,$localesPost->pluck('locale_id')->toArray()))
                                    @foreach($localesPost as $key2=>$item2)
                                        @if($item2->locale_id==$item->id)
                                            <a href="{{ route('unit.edit',$item2->id) }}"><i class="far fa-check-square"
                                                                                             style="color: green"></i>

                                        @endif
                                     @endforeach
                                @else
                                    <a href="{{ route('unit.createLocale',['translation_id'=>$data->units()->first()->translation_id,'locale_id'=>$item->id]) }}"><i class="fas fa-plus"></i></a>
                                @endif
                            @endforeach
                        </div>
                    </td>
                    {{--<td>{{ $data->facilities()->first()->users->name }}</td>--}}
                    <td>{{ $data->units()->first()->created_at }}</td>
                    <td>{{ $data->units()->first()->updated_at }}</td>
                    <td>
                        @permission(('post-edit'))
                        <a class="btn btn-primary" href="{{ route('unit.edit',$data->units()->first()->id) }}">Cập
                            Nhật</a>
                        @endpermission
                        @permission(('post-delete'))
                        {!! Form::open(['method' => 'DELETE','route' => ['unit.destroy', $data->units()->first()->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                        @endpermission
                    </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    {{--{!! $pages->links() !!}--}}
@stop