<div class="container-fluid" id="h_2">
    <div class="container">
        <div class="row">
            <div class="col-12 p-0">
                <h4>@lang('content.home_feature_properties')</h4>
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">All</button>
                    @foreach($data['featuredProperties'] as $key=>$item)
                        <button class="tablinks" onclick="openCity(event, '{{$item->id}}')">{{$item->name}}</button>
                    @endforeach
                    {{--<button class="tablinks" onclick="openCity(event, 'District2')">District 2</button>--}}
                    {{--<button class="tablinks" onclick="openCity(event, 'District3')">District 3</button>--}}
                    {{--<button class="tablinks" onclick="openCity(event, 'District4')">District 4</button>--}}

                    <div id="London" class="tabcontent">
                        <div class="row mt-3">
                            @foreach($data['featuredProperties'] as $key=>$item)
                                @foreach($item->products as $key2=>$item2)
                                    <div class="col-md-3 col-6 text-left proj-items">
                                        <!--Carousel-->
                                        <div id="owl-demo" class="owl-carousel owl-theme owl-h2"
                                             style="margin-top: 20px;">
                                            @php
                                                $listImage=explode(';',$item2->sub_image);
                                                $j=0
                                            @endphp
                                            @foreach($listImage as $key3=>$item3)
                                                {{--<div class="item">--}}
                                                    {{--<img  src="{{URL::asset($item3)}}"--}}
                                                         {{--alt="sliderimg{{$j}}">--}}
                                                {{--</div>--}}
                                                <div class="owl-img"
                                                     style="background-image: url({{URL::asset($item3)}});">
                                                </div>
                                                @php
                                                    $j++;
                                                @endphp
                                                @if($j==3)
                                                    @break
                                                @endif
                                            @endforeach
                                        </div>

                                        <div><a href="{{URL::to('san-pham/'.$item2->path)}}"><h5>{{$item2->name}}</h5>
                                            </a></div>
                                        {{--<div><a href="{{URL::asset('/project-details.html')}}">Sophisticated 3 bedroom--}}
                                        {{--apartment in Masteri Thao Dien</a></div>--}}
                                        <div class="thongtin d-flex align-items-center">
                                            <i class="fas fa-bed"></i>
                                            <p>Room</p>
                                            <i class="fas fa-shower"></i>
                                            <p>WC</p>
                                            <i class="fas fa-map-marked-alt"></i>
                                            <p>{{$item->name}}</p>
                                        </div>
                                        <!--Carousel-->
                                    </div>
                                @endforeach
                            @endforeach

                        </div>

                        <div class="row mt-5">
                            <div class="col-md-12 text-center">
                                <button class="view-all"><a class="text-white"
                                                            href="{{URL::to('danh-sach-san-pham.html')}}">@lang('content.home_view_all')</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    @foreach($data['featuredProperties'] as $key=>$item)
                        <div id="{{$item->id}}" class="tabcontent">
                            <div class="row mt-3">
                                @if(count($item->products)!=0)
                                    @foreach($item->products as $key2=>$item2)
                                        <div class="col-md-3 col-6 text-left proj-items">
                                            <!--Carousel-->
                                            <div id="owl-demo" class="owl-carousel owl-theme owl-h2"
                                                 style="margin-top: 20px;">
                                                @php
                                                    $listImage=explode(';',$item2->sub_image);
                                                $j=0
                                                @endphp
                                                @foreach($listImage as $key3=>$item3)
                                                    <div class="owl-img"
                                                         style="background-image: url({{URL::asset($item3)}});">
                                                    </div>
                                                    @php
                                                        $j++;
                                                    @endphp
                                                    @if($j==3)
                                                        @break
                                                    @endif
                                                @endforeach
                                            </div>

                                            <div><a href="{{URL::to('san-pham/'.$item2->path)}}"><h5>{{$item2->name}}</h5>
                                                </a></div>
                                            {{--<div><a href="{{URL::asset('/project-details.html')}}">Sophisticated 3--}}
                                            {{--bedroom--}}
                                            {{--apartment in Masteri Thao Dien</a></div>--}}
                                            <div class="thongtin d-flex align-items-center">
                                                <i class="fas fa-bed"></i>
                                                <p>Room</p>
                                                <i class="fas fa-shower"></i>
                                                <p>WC</p>
                                                <i class="fas fa-map-marked-alt"></i>
                                                <p>{{$item->name}}</p>
                                            </div>
                                            <!--Carousel-->
                                        </div>
                                    @endforeach
                                @endif

                            </div>

                            <div class="row mt-5">
                                <div class="col-md-12 text-center">
                                    <button class="view-all"><a class="text-white"
                                                                href="{{URL::to('danh-sach-san-pham.html')}}">@lang('content.home_view_all')</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{--<div id="District2" class="tabcontent">--}}
                    {{--<h3>Tokyo</h3>--}}
                    {{--<p>Tokyo is the capital of Japan.</p>--}}
                    {{--</div>--}}

                    {{--<div id="District3" class="tabcontent">--}}
                    {{--<h3>Tokyo</h3>--}}
                    {{--<p>Tokyo is the capital of Japan.</p>--}}
                    {{--</div>--}}

                    {{--<div id="District4" class="tabcontent">--}}
                    {{--<h3>Tokyo</h3>--}}
                    {{--<p>Tokyo is the capital of Japan.</p>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
</div>

