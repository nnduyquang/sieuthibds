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
        <div id="slider2">
            {{--slider--}}
            <div class="slider2-items"
                 style="background-image:url({{URL::asset('images/bg/ctc_masteri_pc.jpg')}});">
            </div>

            {{--End slider--}}

            <div id="filter_box">
                <div class="position-relative">
                    <div>
                        <h4>Long-Term Rental Made Easy</h4>
                    </div>
                    <ul class="d-lg-block d-none">
                        <li>
                            <h5 class="">popular Areas:</h5>
                        </li>
                        <li><a href="">
                                District 1
                            </a></li>
                        <li><a href="">
                                District 3
                            </a></li>
                        <li><a href="">
                                District 5
                            </a></li>
                        <li><a href="">
                                Bình Thạnh
                            </a></li>
                    </ul>


                    <div class="content">
                        <div class="row">
                            <div class="col-md-8 mb-2 p-lg-1">
                                <input type="text" placeholder="District and Project">
                            </div>
                            <div class="col-md-4 p-lg-1">
                                <select style="padding-left: 8px!important;">
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="vw">VW</option>
                                    <option value="audi" selected>All Properties</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="content mb-3" id="mobile-show">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    {{--<div class="col-md-3 col-6  mb-3  p-lg-1 p-0">--}}
                                    {{--<div class="select-box text-left align-items-center">--}}
                                    {{--<i class="fas fa-bed pl-2"></i>--}}
                                    {{--<p></p>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="col-md-3 col-6 mb-2  p-lg-1 select-box2 show-bed">
                                        <select>
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="vw">VW</option>
                                            <option value="audi" selected>Any bed</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-6 mb-2  p-lg-1 select-box2 show-box">
                                        <select>
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="vw">VW</option>
                                            <option value="audi" selected>Any bath</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-6  mb-3 p-lg-1 select-box2 show-min">
                                        <select>
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="vw">VW</option>
                                            <option value="audi" selected>$100</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-6  mb-3 p-lg-1 select-box2 show-max">
                                        <select>
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="vw">VW</option>
                                            <option value="audi" selected>$5000</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="col-md-4 d-none d-lg-block p-0">--}}
                            {{--<div class="rơw">--}}
                            {{--<div class="col-12 p-lg-1 p-0 select-box2">--}}
                            {{--<select>--}}
                            {{--<option value="volvo">Volvo</option>--}}
                            {{--<option value="saab">Saab</option>--}}
                            {{--<option value="vw">VW</option>--}}
                            {{--<option value="audi" selected>Require Amenities</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
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
                        <button>SEARCH</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<div id="slider_under" class="d-lg-block d-none">
    <ul>
        <li><p><i class="fas fa-trophy"></i> Verified Listing</p></li>
        <li><p><i class="fab fa-squarespace"></i> Easy to rent</p></li>
        <li><p><i class="fas fa-coffee"></i> Relax space</p></li>
    </ul>
</div>

