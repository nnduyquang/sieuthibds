<style>
    #owl-slider .slider-items {
        width: 100%;
        height: 100%;
    }

    #owl-slider .slider-items img {
        width: 100%;
        height: 100%;
    }
</style>
<div class="container-fluid p-0" id="top_slider">
    <div style="">
        <div id="slider2" style="background-image:url({{URL::asset('images/bg/ctc_masteri_pc.jpg')}});">
            {{--slider--}}
            {{--<div class="slider2-items"--}}
            {{--style="background-image:url({{URL::asset('images/bg/ctc_masteri_pc.jpg')}});">--}}
            {{--</div>--}}

            {{--End slider--}}

            <div id="filter_box">

                <div>
                    <h4>@lang('content.home_slider_title')</h4>
                </div>
                <ul class="d-lg-block d-none">
                    <li>
                        <h5 class="">@lang('content.home_popular_areas')</h5>
                    </li>
                    @foreach($data['featuredProperties'] as $key=>$item)
                        <li><a href="#">
                                {{$item->name}}
                            </a></li>
                    @endforeach
                    {{--<li><a href="">--}}
                    {{--District 3--}}
                    {{--</a></li>--}}
                    {{--<li><a href="">--}}
                    {{--District 5--}}
                    {{--</a></li>--}}
                    {{--<li><a href="">--}}
                    {{--Bình Thạnh--}}
                    {{--</a></li>--}}
                </ul>

                {!! Form::open(array('route' => 'frontend.search','method'=>'POST','name'=>'search-home')) !!}
                <div class="content">
                    <div class="row">
                        <div class="col-md-6 mb-2 p-lg-1">
                            <div class="district-project">
                                <input name="input-search-text" type="text"
                                       placeholder="@lang('content.home_district_project')">
                            </div>
                        </div>
                        <div class="col-md-3 p-lg-1">
                            <select name="select-type" style="padding-left: 8px!important;">
                                <option value="0">@lang('content.home_search_for_rent')</option>
                                <option value="1">@lang('content.home_search_for_sell')</option>
                                <option value="-1" selected>@lang('content.home_search_rent_sell')</option>
                            </select>
                        </div>
                        <div class="col-md-3 p-lg-1">
                            <select name="select-project" style="padding-left: 8px!important;">
                                @foreach( $data['featuredProject'] as $key=>$item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                                <option value="-1" selected>@lang('content.home_all_project')</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="content mb-3" id="mobile-show">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">

                                <div class="col-md-3 col-6  mb-3  p-lg-1 pl-3 pr-3 pt-0 pb-0">
                                    <div class="select-box select-box-bed text-left align-items-center">
                                        <span class="bed-count">@lang('content.home_any_bed')</span>
                                        <div class="select-content">
                                            <ul>
                                                <li onclick="setinfo('bed-count',this.value,'select-box-bed')"
                                                    value="-1">Any bed
                                                </li>
                                                <li onclick="setinfo('bed-count',this.value,'select-box-bed')"
                                                    value="1">1
                                                </li>
                                                <li onclick="setinfo('bed-count',this.value,'select-box-bed')"
                                                    value="2">2
                                                </li>
                                                <li onclick="setinfo('bed-count',this.value,'select-box-bed')"
                                                    value="3">3
                                                </li>
                                                <li onclick="setinfo('bed-count',this.value,'select-box-bed')"
                                                    value="4">4
                                                </li>
                                                <li onclick="setinfo('bed-count',this.value,'select-box-bed')"
                                                    value="5">5
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-3 col-6  mb-3  p-lg-1 pl-3 pr-3 pt-0 pb-0">
                                    <div class="select-box select-box-bath text-left align-items-center">
                                        <span class="bath-count">@lang('content.home_any_bath')</span>
                                        <div class="select-content">
                                            <ul>
                                                <li onclick="setinfo('bath-count',this.value,'select-box-bath')"
                                                    value="-1">Any Bath
                                                </li>
                                                <li onclick="setinfo('bath-count',this.value,'select-box-bath')"
                                                    value="1">1
                                                </li>
                                                <li onclick="setinfo('bath-count',this.value,'select-box-bath')"
                                                    value="2">2
                                                </li>
                                                <li onclick="setinfo('bath-count',this.value,'select-box-bath')"
                                                    value="3">3
                                                </li>
                                                <li onclick="setinfo('bath-count',this.value,'select-box-bath')"
                                                    value="4">4
                                                </li>
                                                <li onclick="setinfo('bath-count',this.value,'select-box-bath')"
                                                    value="5">5
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-3 col-6  mb-3  p-lg-1 pl-3 pr-3 pt-0 pb-0">
                                    <div class="select-box select-box-min text-left align-items-center">
                                        <span class="min-price align-items-center">100</span>
                                        <div class="select-content">
                                            <ul>
                                                <li onclick="setinfo('min-price',this.value,'select-box-min')"
                                                    value="100">400
                                                </li>
                                                <li onclick="setinfo('min-price',this.value,'select-box-min')"
                                                    value="200">500
                                                </li>
                                                <li onclick="setinfo('min-price',this.value,'select-box-min')"
                                                    value="300">600
                                                </li>
                                                <li onclick="setinfo('min-price',this.value,'select-box-min')"
                                                    value="400">700
                                                </li>
                                                <li onclick="setinfo('min-price',this.value,'select-box-min')"
                                                    value="500">800
                                                </li>
                                                <li onclick="setinfo('min-price',this.value,'select-box-min')"
                                                    value="500">900
                                                </li>
                                                <li onclick="setinfo('min-price',this.value,'select-box-min')"
                                                    value="500">1000
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-6  mb-3 p-lg-1 pl-3 pr-3 pt-0 pb-0">
                                    <div class="select-box select-box-max text-left align-items-center">
                                        <span class="max-price align-items-center">1000</span>
                                        <div class="select-content">
                                            <ul>
                                                <li onclick="setinfo('max-price',this.value,'select-box-max')"
                                                    value="1000">900
                                                </li>
                                                <li onclick="setinfo('max-price',this.value,'select-box-max')"
                                                    value="1000">1000
                                                </li>
                                                <li onclick="setinfo('max-price',this.value,'select-box-max')"
                                                    value="2000">2000
                                                </li>
                                                <li onclick="setinfo('max-price',this.value,'select-box-max')"
                                                    value="3000">3000
                                                </li>
                                                <li onclick="setinfo('max-price',this.value,'select-box-max')"
                                                    value="4000">4000
                                                </li>
                                                <li onclick="setinfo('max-price',this.value,'select-box-max')"
                                                    value="5000">5000
                                                </li>
                                                <li onclick="setinfo('max-price',this.value,'select-box-max')"
                                                    value="1000">6000
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="content d-lg-none d-block">
                    <div class="row">
                        <div class="col-12 mt-2 mb-2 text-right">
                            <a href="javascript:void(0)" id="a-click-filter">More filter</a>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <button type="submit">@lang('content.home_search')</button>
                </div>
                {!! Form::close() !!}


            </div>
        </div>
    </div>

</div>

<div id="slider_under" class="d-lg-block d-none">
    <ul>
        <li><p><i class="fas fa-trophy"></i> @lang('content.home_verified')</p></li>
        <li><p><i class="fab fa-squarespace"></i> @lang('content.home_easy')</p></li>
        <li><p><i class="fas fa-coffee"></i> @lang('content.home_relax')</p></li>
    </ul>
</div>

