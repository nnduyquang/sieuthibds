@extends('backend.admin.master')
@section('title-page')
    Quản Lý Chuyên Mục
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12 title-header">
        <div class="row">
            <div class="col-md-8">
                <h2>Quản Lý Địa Điểm</h2>

                @permission(('page-create'))
                <a class="btn btn-success" href="{{ route('location.create',['locale_id'=>1]) }}"> Tạo Mới</a>
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
            <table class="table">
                <tr>
                    <th>TT</th>
                    <th>ID</th>
                    <th>Tên Địa Điểm</th>
                    <th>
                        <div class="wrap-image">
                            @foreach($locales as $key=>$item)
                                {{ Html::image($item->icon,'',array('id'=>'','class'=>'image-flag'))}}
                            @endforeach
                        </div>
                    </th>
                    <th>Ngày Đăng</th>
                    <th>Ngày Cập Nhật</th>
                    <th width="280px">Action</th>
                </tr>
                @include('backend.admin.location.list-location-index')
            </table>
        </div>
    </div>
    {{--{!! $pages->links() !!}--}}
@stop