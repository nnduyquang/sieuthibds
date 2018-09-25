<style>
    /*.owl-carousel .item img{*/
    /*width: 100%;*/
    /*height: 100%;*/
    /*position: relative;*/
    /*}*/

    /*.owl-carousel .owl-dots{*/
    /*position: absolute;*/
    /*bottom: 6px;*/
    /*left: 50%;*/
    /*transform: translateX(-50%);*/
    /*}*/

    /*.owl-theme .owl-nav{*/
    /*!*background-color: rgba(00,00,00,0.3);*!*/
    /*height: 100%;*/
    /*!*width: 100%;*!*/
    /*margin-top: 0!important;*/
    /*!*width: 30px;*!*/
    /*!*position: absolute;*!*/
    /*top: 0;*/
    /*!*padding: 0;*!*/
    /*!*margin: 0;*!*/
    /*}*/

    /*.owl-theme .owl-nav .owl-prev{*/
    /*background-color: rgba(00,00,00,0.6);*/
    /*position: absolute;*/
    /*top: 0;*/
    /*left: 0;*/
    /*!*transform: translateY(-50%);*!*/
    /*height: 100%;*/
    /*width: 30px;*/
    /*text-align: center;*/
    /*font-size: 26px;*/
    /*}*/

    /*.owl-theme .owl-nav [class*='owl-'] {*/
    /*color: #FFF;*/
    /*font-size: 24px;*/
    /*margin: 0px!important;*/
    /*padding: 4px 7px;*/
    /*background: #D6D6D6;*/
    /*display: inline-block;*/
    /*cursor: pointer;*/
    /*border-radius: 0px!important;*/
    /*opacity: 0;*/
    /*transition: .3s;*/
    /*}*/
    /*.owl-theme:hover .owl-nav [class*='owl-']{*/
    /*opacity: 1;*/
    /*background: rgba(00,00,00,0.3);*/
    /*color: #FFF;*/
    /*text-decoration: none;*/
    /*font-size: 26px;*/
    /*}*/

    /*.owl-theme .owl-nav [class*='owl-']:hover {*/

    /*}*/

    /*.owl-theme .owl-nav .owl-next{*/
    /*background-color: rgba(00,00,00,0.6);*/
    /*height: 100%;*/
    /*width: 30px;*/
    /*text-align: center;*/
    /*position: absolute;*/
    /*top: 0;*/
    /*right: 0;*/
    /*font-size: 26px;*/
    /*!*transform: translateY(-50%);*!*/

    /*}*/

    /*.owl-theme .owl-nav button:focus{*/
    /*outline: 0;*/
    /*}*/

    /*.proj-items h5{*/
    /*font-size: 12px;*/
    /*margin-top: 10px;*/
    /*margin-bottom: 10px;*/
    /*color: #1c7430;*/
    /*}*/

    /*.proj-items a{*/
    /*font-size: 15px;*/
    /*margin-top: 10px;*/
    /*margin-bottom: 10px;*/
    /*color: #1c7430;*/
    /*}*/

    /*.proj-items .thongtin{*/
    /*margin-top: 12px;*/
    /*}*/
    /*.proj-items .thongtin i{*/
    /*margin-right: 6px;*/
    /*}*/
    /*.proj-items .thongtin p{*/
    /*margin-right: 10px;*/
    /*font-size: 12px;*/
    /*}*/

    /*button.view-all{*/
    /*font-size: 14px;*/
    /*padding: 10px 20px;*/
    /*border: none;*/
    /*background-color: #1c7430;*/
    /*color: white;*/
    /*cursor: pointer;*/
    /*border-radius: 3px;*/
    /*}*/
</style>


<div class="container-fluid" id="h_2">

    <div class="row p-2">
        <div class="col-12 text-left nav-title">
            <ul>
                <li><a href=""><i class="fas fa-hotel"></i> HOME</a></li>
                <li><a href="">HO CHI MINH</a></li>
            </ul>
        </div>
    </div>

    <div class="row p-2">
        <div class="col-12 text-left">

            <h6>APARTMENT FOR RENT IN HO CHI MINH</h6>
            {{--<button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">All</button>--}}

            <p class="d-lg-block d-none">Show 12 result in <span>500 Listing</span> Sort by

                <select>
                    <option value="volvo">Sort Hight to Low</option>
                    <option value="saab">Sort Low to hight</option>
                    <option value="audi" selected>Recent post</option>
                </select>

            </p>

        </div>

        @for ($i = 0; $i < 12; $i++)
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

        <div class="col-12 text-center mt-5 mb-4">
            <div style="width: fit-content;margin: auto">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>

</div>

