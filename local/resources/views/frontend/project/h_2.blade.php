<style>
</style>


<div class="container-fluid" id="h_2">
    <div class="container p-0">
        <div class="row">
            <div class="col-12 text-left nav-title">
                <ul>
                    <li><a href=""><i class="fas fa-hotel"></i> HOME</a></li>
                    <li><a href="">HO CHI MINH</a></li>
                    <li><a href="">DISTRICT 2</a></li>
                </ul>
            </div>
        </div>


        <div class="row">
            <div class="col-12 text-left m-2">
                <div id="nav">
                    <ul>
                        <li><a class="nav-r active" id="h_top_nav" href="#p_1">
                                <p>Description</p>
                            </a>
                        </li>
                        {{--<li><a class="nav-r" id="h_1_nav" href="#p_2">--}}
                                {{--<p>Overview</p>--}}
                            {{--</a></li>--}}
                        <li><a class="nav-r" id="h_2_nav" href="#p_3">
                                <p>Facilities</p>
                            </a></li>
                        {{--<li><a class="nav-r" id="h_3_nav" href="#p_4">--}}
                                {{--<p>Location</p>--}}
                            {{--</a></li>--}}
                        <li><a class="nav-r" id="h_4_nav" href="#h_4">
                                <p>Listing</p>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-left">

                <h6>@lang('content.project_feature_listings_in') {{$data['category']->name}}</h6>

            </div>

            @foreach($data['category']->products as $key=>$item)
                <div class="col-md-3 col-6 text-left proj-items">
                    <!--Carousel-->
                    <div class="position-relative">

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


        </div>
    </div>
</div>

