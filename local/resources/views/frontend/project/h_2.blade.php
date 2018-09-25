<style>
</style>


<div class="container-fluid" id="h_2">
    <div class="container">
        <div class="row p-2">
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
                        <li><a class="nav-r" id="h_1_nav" href="#p_2">
                                <p>Overview</p>
                            </a></li>
                        <li><a class="nav-r" id="h_2_nav" href="#p_3">
                                <p>Facilities</p>
                            </a></li>
                        <li><a class="nav-r" id="h_3_nav" href="#p_4">
                                <p>Location</p>
                            </a></li>
                        <li><a class="nav-r" id="h_4_nav" href="#h_4">
                                <p>Listing</p>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-12 text-left">

                <h6>Feature Listings In Masteri Thao Dien</h6>
                {{--<button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">All</button>--}}

                {{--<p class="d-lg-block d-none">Show 12 result in <span>500 Listing</span> Sort by--}}

                {{--<select>--}}
                {{--<option value="volvo">Sort Hight to Low</option>--}}
                {{--<option value="saab">Sort Low to hight</option>--}}
                {{--<option value="audi" selected>Recent post</option>--}}
                {{--</select>--}}

                {{--</p>--}}

            </div>

            @for ($i = 0; $i < 8; $i++)
                <div class="col-md-3 col-6 text-left proj-items">
                    <!--Carousel-->
                    <div class="position-relative">
                        <div id="owl-demo" class="owl-carousel owl-theme owl-h2" style="margin-top: 20px;">
                            @for ($j = 0; $j < 3; $j++)
                                <div class="item">
                                    <img src="{{URL::asset('https://img.hoozing.com/400/Property/137301/636723093484606517_Done-5.jpg')}}"
                                         alt="sliderimg{{$j}}">
                                </div>
                            @endfor
                        </div>

                        <div class="price">
                            $2000
                        </div>
                    </div>

                    <div><h5>HOUSE CODE H126341</h5></div>
                    <div><a href="{{URL::asset('project-details.html')}}">Sophisticated 3 bedroom apartment in Masteri Thao Dien</a></div>
                    <div class="thongtin d-flex align-items-center">
                        <i class="fas fa-bed"></i>
                        <p>Room</p>
                        <i class="fas fa-shower"></i>
                        <p>WC</p>
                        <i class="fas fa-map-marked-alt"></i>
                        <p>District1</p>
                    </div>
                    <!--Carousel-->
                </div>
            @endfor

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
</div>

