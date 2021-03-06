<div class="row d-lg-block d-md-block d-sm-none d-none" id="pr_1">

    <div class="col-12">
        <div class="border p-4 text-center pt-5 pb-5 position-relative">
            @if(!is_null($data['product']->price)&&!is_null($data['product']->unit_id))
                <h5>{{$data['product']->price}} <span>{{$data['product']->units->name}}</span></h5>
            @endif
            {{--<p class="status">Rented <i class="fas fa-fingerprint"></i></p>--}}

            <textarea name="" id="" cols="30" rows="5" placeholder="Enter your message"></textarea>

            <button>@lang('content.pj_request_similar_listing')</button>

            <div class="mt-3"><a href=""><i class="fas fa-share-alt-square"></i> Share</a></div>
            <div class="img-cover">
                <img src="{{URL::to('images/logo/logo-bds.png')}}" alt="">
            </div>
        </div>
    </div>

    <div class="col-12 p-3 r-relate">
        <div class="">
            <h5>@lang('content.pj_detail_view_project_info')</h5>
        </div>

        @foreach($data['project'] as $key=>$item)
            <div class="d-flex  border align-items-center">
                <a href="{{URL::to('du-an/'.$item->path)}}">
                    <div class="img"
                         style="background-image:url({{URL::to($item->image)}});">
                    </div>
                </a>
                <div class="pl-3">
                    <a href="{{URL::to('du-an/'.$item->path)}}">
                        <h4>{{$item->name}}</h4>
                    </a>
                </div>
            </div>

        @endforeach
    </div>

    {{--<div class="col-12 p-3 r-relate">--}}
        {{--<div class="">--}}
            {{--<h5>VIEW NEIBOURHOOD</h5>--}}
        {{--</div>--}}
        {{--<a href="">--}}
            {{--<div class="d-flex border align-items-center">--}}
                {{--<a href="">--}}
                    {{--<div class="img"--}}
                         {{--style="background-image:url(https://www.hoozing.com/assets/images/dummy/img-1.jpg);">--}}
                    {{--</div>--}}
                {{--</a>--}}
                {{--<div class="pl-3">--}}
                    {{--<a href="">--}}
                        {{--<h4>Vinhomes Central Park</h4>--}}
                    {{--</a>--}}
                    {{--<p>Summary: Located on Nguyen Huu Canh, the major ...</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</a>--}}

    {{--</div>--}}

</div>


