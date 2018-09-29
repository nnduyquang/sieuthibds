<style>
    #owl-slider .slider-items{
        width: 100%;
        height: 100%;
    }

    #owl-slider .slider-items img{
        width: 100%;
        height: 100%;
    }
</style>
<div class="container-fluid p-0" id="top_slider">
    <div style="">
        <div id="slider2">
            {{--slider--}}
            <div class="slider2-items"
                 style="background-image:url({{URL::asset('https://www.hoozing.com/assets/images/dummy/home1.jpg')}});">
            </div>

            {{--End slider--}}

            <div id="filter_box">
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
                            <div class="col-md-8 mb-3">
                                <input type="text" placeholder="District and Project">
                            </div>
                            <div class="col-md-4">
                                <select>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="vw">VW</option>
                                    <option value="audi" selected>All Properties</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="content mb-5" id="mobile-show">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-3 col-6  mb-3">
                                        <select>
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="vw">VW</option>
                                            <option value="audi" selected> <i class="fab fa-algolia"></i> Room</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-6  mb-3">
                                        <select>
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="vw">VW</option>
                                            <option value="audi" selected>All Properties</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-6  mb-3">
                                        <select>
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="vw">VW</option>
                                            <option value="audi" selected>All Properties</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-6  mb-3">
                                        <select>
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="vw">VW</option>
                                            <option value="audi" selected>All Properties</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-none d-lg-block">
                                <select>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="vw">VW</option>
                                    <option value="audi" selected>Require Amenities</option>
                                </select>
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
                        <button>SEARCH</button>
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

