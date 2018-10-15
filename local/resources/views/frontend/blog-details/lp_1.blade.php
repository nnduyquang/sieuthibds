<div id="lp_1">

    <div class="row mb-4">
        <div class="col-12 text-left nav-title">
            <ul>
                <li><a href=""><i class="fas fa-hotel"></i> HOME</a></li>
                <li><a href="{{URL::to('tin-tuc')}}">BLOGS</a></li>
                <li><a href="#">{{$data['tintuc']->title}}</a></li>
            </ul>
        </div>
    </div>

    <div class="row">

        <img src="" alt="">

        <div class="col-md-12 blogs">
            <img src="{{URL::to($data['tintuc']->image)}}"
                 alt="">
            <a href="#"><h4>{{$data['tintuc']->title}}</h4></a>
            {{--<p class="d-post">by <a href="">Hoozing </a>September 24, 2018</p>--}}
            {!! $data['tintuc']->content !!}

        </div>
    </div>
    @if(count($data['other'])!=0)
        <div class="row">
            <div class="col-12">
                <div class="border-bottom border-dark mb-4">
                    <h6>@lang('content.blog_dont_miss_there')</h6>
                </div>
            </div>
        </div>

        @foreach($data['other'] as $key=>$item)
            <div class="row border-bottom mb-4 pb-4">


                <div class="col-md-6">
                    <img src="{{URL::to($item->image)}}"
                         alt="">
                </div>
                <div class="col-md-6 blogs mb-3">
                    <a href="{{URL::to('tin-tuc/'.$item->path)}}"><h4>{{$item->title}}</h4></a>
                    {{--<p class="d-post">by <a href="">Hoozing </a>September 24, 2018</p>--}}
                    <p>{!! $item->description !!}</p>
                </div>


            </div>
        @endforeach
    @endif
</div>