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
    <div class="container">
        <div class="row">
            <div class="col-12 p-0">
                <h4>Feature Properties</h4>
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">All</button>
                    <button class="tablinks" onclick="openCity(event, 'District1')">District 1</button>
                    <button class="tablinks" onclick="openCity(event, 'District2')">District 2</button>
                    <button class="tablinks" onclick="openCity(event, 'District3')">District 3</button>
                    <button class="tablinks" onclick="openCity(event, 'District4')">District 4</button>

                    <div id="London" class="tabcontent">
                        <div class="row mt-3">
                            @for ($i = 0; $i < 8; $i++)
                            <div class="col-md-3 col-6 text-left proj-items">
                                <!--Carousel-->
                                <div id="owl-demo" class="owl-carousel owl-theme owl-h2" style="margin-top: 20px;">
                                    @for ($j = 0; $j < 3; $j++)
                                    <div class="item">
                                        <img src="{{URL::asset('https://img.hoozing.com/400/Property/137301/636723093484606517_Done-5.jpg')}}" alt="sliderimg{{$j}}">
                                    </div>
                                    @endfor
                                </div>

                                <div><h5>HOUSE CODE H126341</h5></div>
                                <div><a href="">Sophisticated 3 bedroom apartment in Masteri Thao Dien</a></div>
                                <div class="thongtin d-flex align-items-center">
                                    <i class="fas fa-bed"></i> <p>Room</p>
                                    <i class="fas fa-shower"></i> <p>WC</p>
                                    <i class="fas fa-map-marked-alt"></i> <p>District1</p>
                                </div>
                                <!--Carousel-->
                            </div>

                            @endfor

                        </div>

                        <div class="row mt-5">
                            <div class="col-md-12 text-center">
                                <button class="view-all"><a class="text-white" href="{{URL::asset('danh-sach-can-ho.html')}}">VIEW ALL</a></button>
                            </div>
                        </div>
                    </div>

                    <div id="District1" class="tabcontent">
                        <div class="row mt-3">
                            @for ($i = 0; $i < 8; $i++)
                                <div class="col-md-3 col-6 text-left proj-items">
                                    <!--Carousel-->
                                    <div id="owl-demo" class="owl-carousel owl-theme owl-h2" style="margin-top: 20px;">
                                        @for ($j = 0; $j < 3; $j++)
                                            <div class="item">
                                                <img src="{{URL::asset('https://img.hoozing.com/400/Property/137301/636723093484606517_Done-5.jpg')}}" alt="sliderimg{{$j}}">
                                            </div>
                                        @endfor
                                    </div>

                                    <div><h5>HOUSE CODE H126341</h5></div>
                                    <div><a href="">Sophisticated 3 bedroom apartment in Masteri Thao Dien</a></div>
                                    <div class="thongtin d-flex align-items-center">
                                        <i class="fas fa-bed"></i> <p>Room</p>
                                        <i class="fas fa-shower"></i> <p>WC</p>
                                        <i class="fas fa-map-marked-alt"></i> <p>District 1</p>
                                    </div>
                                    <!--Carousel-->
                                </div>

                            @endfor

                        </div>

                        <div class="row mt-5">
                            <div class="col-md-12 text-center">
                                <button class="view-all"><a class="text-white" href="{{URL::asset('danh-sach-can-ho.html')}}">VIEW ALL</a></button>
                            </div>
                        </div>
                    </div>

                    <div id="District2" class="tabcontent">
                        <h3>Tokyo</h3>
                        <p>Tokyo is the capital of Japan.</p>
                    </div>

                    <div id="District3" class="tabcontent">
                        <h3>Tokyo</h3>
                        <p>Tokyo is the capital of Japan.</p>
                    </div>

                    <div id="District4" class="tabcontent">
                        <h3>Tokyo</h3>
                        <p>Tokyo is the capital of Japan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

