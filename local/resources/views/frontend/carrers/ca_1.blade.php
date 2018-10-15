<div class="pb-5 d-none d-block d-sm-none"></div>
<div class="container-fluid mt-2" id="ca_1">
    <img src="{{URL::asset('images/bg/WeAreHiring.png')}}" alt=""
         style="width: 100%;height: auto;margin: auto">

    <div class="container mb-3">
        <div class="row">
            <div class="col-12">
                <h4>@lang('content.tuyendung_culture')</h4>

            </div>
        </div>
    </div>

    <div class="row">
        @php
            $listImage=explode(';',$data['category']->sub_image);
        @endphp
        @if(!is_null($data['category']->sub_image))
            @foreach($listImage as $key=>$item)
                <div class="col-md-3 p-0">
                    <div style="width: 98%;margin: auto">
                        <img src="{{URL::asset($item)}}" alt="">
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <div class="container">
        <h4>
            @lang('content.tuyendung_joinus')
        </h4>
        <p>{!! $data['category']->description !!}</p>

        <div class="row mt-3 mb-3">
            @foreach($data['post'] as $key=>$item)
                <div class="col-md-6 text-center">
                    <div class="vitri-tuyendung">
                        <h5>
                            <a href="{{URL::to('tuyen-dung/'.$item->path)}}">{{$item->title}}</a>
                        </h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</div>