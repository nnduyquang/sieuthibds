<div class="container-fluid" id="h_3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5>@lang('content.project_related_project')</h5>
            </div>

            <div class="col-md-12 p-4 position-relative">

                <div id="owl-project" class="owl-carousel owl-theme">
                    @foreach($data['other'] as $key=>$item)
                        <div class="project-items border">
                            <div class="img-pro">
                                <div class="img"
                                     style="background-image:url({{URL::to($item->image)}});">
                                </div>
                            </div>
                            <div class="p-4">
                                <h4>{{$item->name}}</h4>
                                {{--<span>159 XA LỘ HÀ NỘI, THẢO ĐIỀN, QUẬN 2 - 40 FLOOR</span>--}}
                                <p>{!! $item->description !!}</p>

                                <div class="mt-3 mb-3">
                                    <a href="{{URL::to('du-an/'.$item->path)}}"><i class="fas fa-long-arrow-alt-right pr-1"></i> @lang('content.home_view_more')</a>
                                    <a href="{{URL::to('danh-sach-san-pham/'.$item->path)}}"><i class="far fa-building pr-1"></i>@lang('content.home_see_list')</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="btn_pre"> <i class="fas fa-chevron-circle-left"></i> </button>
                <button class="btn_next"> <i class="fas fa-chevron-circle-right"></i> </button>

            </div>

            <div class="col-12 text-center">
                <button class="view-all">@lang('content.home_view_all')</button>
            </div>
        </div>
    </div>
</div>