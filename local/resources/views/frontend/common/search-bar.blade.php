<div class="container-fluid border-bottom d-lg-block d-md-block d-none" id="search_bar">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-between">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-2 p-0">
                        <div class=" items">
                            <select>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="vw">VW</option>
                                <option value="audi" selected>2+1 Offices</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-2 p-0">
                        <div class="items">
                            <select>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="vw">VW</option>
                                <option value="audi" selected>Select Project</option>
                            </select>
                        </div>
                    </div>
                    {{--<div class="col-2 position-relative">--}}
                    {{--<div class=" items"><p><i class="fas fa-bed"></i> +</p>--}}
                    {{--<div class="items-content">--}}
                    {{--<ul>--}}
                    {{--<li><a href="">All properties</a></li>--}}
                    {{--<li><a href="">2+1 (office)</a></li>--}}
                    {{--<li><a href="">Duplex</a></li>--}}
                    {{--<li><a href="">Apartment</a></li>--}}
                    {{--<li><a href="">Officetel</a></li>--}}
                    {{--<li><a href="">Other</a></li>--}}
                    {{--<li><a href="">Penthouse</a></li>--}}
                    {{--<li><a href="">Shophouse</a></li>--}}
                    {{--<li><a href="">Villa</a></li>--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--</div>--}}
                    <div class="col-2 p-0">
                        <div class=" items bed">
                            <select>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="vw">VW</option>
                                <option value="audi" selected>Any bed</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-2 p-0">
                        <div class=" items bath">
                            <select>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="vw">VW</option>
                                <option value="audi" selected>Any bath</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-2 p-0">
                        <div class=" items min">
                            <select>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="vw">VW</option>
                                <option value="audi" selected>$ 100</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-2 p-0">
                        <div class=" items max">
                            <select>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="vw">VW</option>
                                <option value="audi" selected>$ 500</option>
                            </select>
                        </div>
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




