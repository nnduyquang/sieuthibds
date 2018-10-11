<div class="container-fluid" id="h_2">

    <div class="row p-2">
        <div class="col-12 text-left nav-title">
            <ul>
                <li><a href="{{URL::to('/')}}"><i class="fas fa-hotel"></i> HOME</a></li>
                @if($data['type']==1)
                    <li><a href="">{{$data['category']->name}}</a></li>
                @endif
            </ul>
        </div>
    </div>

    <div class="row p-2">
        <div class="col-12 text-left">
            @if($data['type']==1)
                <h6>@lang('content.rent_apartment_for_rent') <span
                            style="text-transform: uppercase">{{$data['category']->name}}</span></h6>
            @else
                <h6>@lang('content.rent_apartment_for_rent_no_in')</h6>
            @endif
            {{--<button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">All</button>--}}

            {{--<p class="d-lg-block d-none">Show 12 result in <span>500 Listing</span> Sort by--}}

            {{--<select>--}}
            {{--<option value="volvo">Sort Hight to Low</option>--}}
            {{--<option value="saab">Sort Low to hight</option>--}}
            {{--<option value="audi" selected>Recent post</option>--}}
            {{--</select>--}}

            {{--</p>--}}

        </div>
        @php
            if($data['type']==1){
                $list=$data['category']->products;
            }else{
            $list=$data['products'];
            }
        @endphp

        @foreach($list as $key=>$item)
            <div class="col-md-3 col-6 text-left proj-items">
                <!--Carousel-->
                <div class="position-relative">
                    <div id="owl-demo" class="owl-carousel owl-theme owl-h2" style="margin-top: 20px;">
                        <div id="owl-demo" class="owl-carousel owl-theme owl-h2"
                             style="margin-top: 20px;">
                            @php
                                $listImage=explode(';',$item->sub_image);
                                $j=0
                            @endphp
                            @foreach($listImage as $key2=>$item2)
                                {{--<div class="item">--}}
                                {{--<img  src="{{URL::asset($item3)}}"--}}
                                {{--alt="sliderimg{{$j}}">--}}
                                {{--</div>--}}
                                <div class="owl-img"
                                     style="background-image: url({{URL::asset($item2)}});">
                                </div>
                                @php
                                    $j++;
                                @endphp
                                @if($j==3)
                                    @break
                                @endif
                            @endforeach
                        </div>
                    </div>
                    @if(!is_null($item->price)&&!is_null($item->unit_id))
                        <div class="price">
                            {{$item->price}} {{$item->units->name}}
                        </div>
                    @endif
                </div>
                @if(!is_null($item->code))
                    <div><h5>HOUSE CODE {{$item->code}}</h5></div>
                @endif
                <div><a href="{{URL::to('san-pham/'.$item->path)}}">{{$item->name}}</a></div>
                <div class="thongtin d-flex align-items-center">
                    <i class="fas fa-bed"></i>
                    <p>Room</p>
                    <i class="fas fa-shower"></i>
                    <p>WC</p>
                    <i class="fas fa-map-marked-alt"></i>
                    <p>District2</p>
                </div>
                <!--Carousel-->
            </div>
        @endforeach

        {{--<div class="col-12 text-center mt-5 mb-4">--}}
        {{--<div style="width: fit-content;margin: auto">--}}
        {{--<nav aria-label="Page navigation example">--}}
        {{--<ul class="pagination">--}}
        {{--<li class="page-item"><a class="page-link" href="#">Previous</a></li>--}}
        {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
        {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
        {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
        {{--<li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
        {{--</ul>--}}
        {{--</nav>--}}
        {{--</div>--}}
        {{--</div>--}}

    </div>

</div>

