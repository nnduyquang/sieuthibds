{{--<style>--}}
{{--.select-box {--}}
{{--width: 100%;--}}
{{--background-color: #fff;--}}
{{--position: relative;--}}
{{--padding: 12px 0px 12px 36px !important;--}}
{{--height: 38px;--}}
{{--font-size: 14px;--}}
{{--cursor: pointer;--}}
{{--}--}}
{{--.select-box span {--}}
{{--font-size: 15px;--}}
{{--}--}}

{{--.select-content {--}}
{{--width: 100%;--}}
{{--position: absolute;--}}
{{--top: 100%;--}}
{{--left: 0;--}}
{{--background-color: #fff;--}}
{{--z-index: 1;--}}
{{--opacity: 0;--}}
{{--transition: .3s;--}}
{{--}--}}
{{--.select-content ul {--}}
{{--display: none;--}}
{{--max-height: 100px;--}}
{{--overflow-y: scroll;}--}}
{{--.select-content ul li {--}}
{{--padding: 6px 14px;--}}
{{--display: block;--}}
{{--cursor: pointer;--}}
{{--}--}}
{{--.select-content ul li:hover {--}}
{{--color: #1c7430;--}}
{{--background-color: #d9d9d9;--}}
{{--}--}}

{{--.select-box-bath {--}}
{{--}--}}
{{--.select-box-bath:before {--}}
{{--content: '\f2cd';--}}
{{--font-family: 'Font Awesome\ 5 Free' !important;--}}
{{--}--}}


{{--.select-box-min {--}}
{{--padding-left: 42px !important;--}}
{{--}--}}
{{--.select-box-min:before {--}}
{{--content: 'Min $' !important;--}}
{{--}--}}


{{--.select-box-max {--}}
{{--padding-left: 45px !important;--}}
{{--}--}}
{{--.select-box-max:before {--}}
{{--content: 'Max $' !important;--}}
{{--}--}}
{{--}--}}
{{--button {--}}
{{--padding: 15px 32px 14px 32px;--}}
{{--cursor: pointer;--}}
{{--font-size: 15px;--}}
{{--border: none;--}}
{{--background-color: #e2260d;--}}
{{--border-radius: 3px;--}}
{{--color: white;--}}
{{--}--}}
{{--</style>--}}
<div class="container-fluid border-bottom d-lg-block d-md-block d-none" id="search_bar">
    {!! Form::open(array('route' => 'frontend.search','method'=>'POST','name'=>'search-home')) !!}
    @if(request()->is('danh-sach-san-pham.html'))
        {{ Form::hidden('select-type', 0) }}
    @elseif(request()->is('bat-dong-san-ban.html'))
        {{ Form::hidden('select-type', 1) }}
    @else
        {{ Form::hidden('select-type',  $data['selectType']) }}
    @endif
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center content" id="">

            <div class="col-md-10 text-center">
                <div class="row">
                    <div class="col-md-2 col-6 p-lg-1 pl-3 pr-3 pt-0 pb-0">

                        {{--<input name="input-search-text" type="text" placeholder="@lang('content.home_district_project')">--}}
                        <select name="select-project" style="padding-left: 8px!important;">
                            @foreach( $data['featuredProject'] as $key=>$item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                            <option value="-1" selected>@lang('content.home_all_project')</option>
                        </select>

                    </div>

                    <div class="col-md-2 col-6   p-lg-1 pl-3 pr-3 pt-0 pb-0">
                        <div class="select-box select-box-bed text-left align-items-center">
                            <span class="bed-count">@lang('content.home_any_bed')</span>
                            <div class="select-content">
                                <ul>
                                    <li onclick="setinfo('bed-count',this.value,'select-box-bed')" value="-1">Any bed
                                    </li>
                                    <li onclick="setinfo('bed-count',this.value,'select-box-bed')" value="1">1</li>
                                    <li onclick="setinfo('bed-count',this.value,'select-box-bed')" value="2">2</li>
                                    <li onclick="setinfo('bed-count',this.value,'select-box-bed')" value="3">3</li>
                                    <li onclick="setinfo('bed-count',this.value,'select-box-bed')" value="4">4</li>
                                    <li onclick="setinfo('bed-count',this.value,'select-box-bed')" value="5">5</li>
                                </ul>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-2 col-6   p-lg-1 pl-3 pr-3 pt-0 pb-0">
                        <div class="select-box select-box-bath text-left align-items-center">
                            <span class="bath-count">@lang('content.home_any_bath')</span>
                            <div class="select-content">
                                <ul>
                                    <li onclick="setinfo('bath-count',this.value,'select-box-bath')" value="-1">Any
                                        Bath
                                    </li>
                                    <li onclick="setinfo('bath-count',this.value,'select-box-bath')" value="1">1</li>
                                    <li onclick="setinfo('bath-count',this.value,'select-box-bath')" value="2">2</li>
                                    <li onclick="setinfo('bath-count',this.value,'select-box-bath')" value="3">3</li>
                                    <li onclick="setinfo('bath-count',this.value,'select-box-bath')" value="4">4</li>
                                    <li onclick="setinfo('bath-count',this.value,'select-box-bath')" value="5">5</li>
                                </ul>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-2 col-6  p-lg-1 pl-3 pr-3 pt-0 pb-0">
                        <div class="select-box select-box-min text-left align-items-center">
                            <span class="min-price align-items-center">100</span>
                            <div class="select-content">
                                <ul>
                                    <li onclick="setinfo('min-price',this.value,'select-box-min')" value="100">100</li>
                                    <li onclick="setinfo('min-price',this.value,'select-box-min')" value="200">200</li>
                                    <li onclick="setinfo('min-price',this.value,'select-box-min')" value="300">300</li>
                                    <li onclick="setinfo('min-price',this.value,'select-box-min')" value="400">400</li>
                                    <li onclick="setinfo('min-price',this.value,'select-box-min')" value="500">500</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-2 col-6 p-lg-1 pl-3 pr-3 pt-0 pb-0">
                        <div class="select-box select-box-max text-left align-items-center">
                            <span class="max-price align-items-center">1000</span>
                            <div class="select-content">
                                <ul>
                                    <li onclick="setinfo('max-price',this.value,'select-box-max')" value="1000">1000
                                    </li>
                                    <li onclick="setinfo('max-price',this.value,'select-box-max')" value="2000">2000
                                    </li>
                                    <li onclick="setinfo('max-price',this.value,'select-box-max')" value="3000">3000
                                    </li>
                                    <li onclick="setinfo('max-price',this.value,'select-box-max')" value="4000">4000
                                    </li>
                                    <li onclick="setinfo('max-price',this.value,'select-box-max')" value="5000">5000
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-2 p-lg-1 pl-3 pr-3 pt-0 pb-0">
                        <button type="submit"
                                style="padding: 12px 32px 11px 32px!important;">@lang('content.home_search')</button>
                    </div>


                </div>
            </div>


            {{--<div class="col-md-4 text-right">--}}
            {{--<button class="btn-filter">--}}
            {{--MORE FILTER--}}
            {{--</button>--}}
            {{--</div>--}}
        </div>
    </div>
    {!! Form::close() !!}
</div>
<div class="container-fluid" id="more-sb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h6>Basic Fetures</h6>
            </div>
            <div class="col-md-6">
                <select>
                    <option value="volvo">Sort Hight to Low</option>
                    <option value="saab">Sort Low to hight</option>
                    <option value="audi" selected>Accommodates</option>
                </select>
            </div>
            <div class="col-md-6">
                <select>
                    <option value="volvo">Sort Hight to Low</option>
                    <option value="saab">Sort Low to hight</option>
                    <option value="audi" selected>Furnishment</option>
                </select>
            </div>

            <div class="col-md-12 mt-4">
                <h6>Required Amenities</h6>
            </div>
            <div class="col-12" id="tienich-switch">
                @for ($i = 0; $i < 5; $i++)
                    <div class="d-flex align-items-center tienich-content">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                        <p class="pl-1">TV</p>
                    </div>
                    <div class="d-flex align-items-center tienich-content">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                        <p class="pl-1">Microware</p>
                    </div>
                    <div class="d-flex align-items-center tienich-content">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                        <p class="pl-1">Air Conditioner</p>
                    </div>
                    <div class="d-flex align-items-center tienich-content">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                        <p class="pl-1">Smoke detector</p>
                    </div>
                @endfor
                <div class="d-flex align-items-center tienich-content">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                    <p class="pl-1">Smoke detector</p>
                </div>
            </div>

            <div class="col-12 d-flex align-items-center mt-3">
                <button class="btn-apply">APPLY</button>
                <a href="" class="c-filter pl-2">Clear Filters</a>
            </div>

        </div>
    </div>
</div>




