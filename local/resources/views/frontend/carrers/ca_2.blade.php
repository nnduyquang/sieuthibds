<div class="container-fluid" id="ca_2">
        <div class="row">
            <div class="col-md-12 p-0 position-relative">

                <div id="owl-agent" class="owl-carousel owl-theme">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="project-items text-center text-white bg-primary">

                            <div class="p-4">
                                <i class="fas fa-quote-left"></i>
                                <br>
                                {{--<h4>MASTERI THAO DIEN</h4>--}}

                                <p class="wow fadeInUp">Thao Dien - An ideal place for many Expats choosing to settle down in one of the
                                    outstanding apartments in Ho Chi Minh City. Also, in the center of Th...</p>
                                <span>Andy Nguyen</span>
                                {{--<div class="mt-3 mb-3">--}}

                                {{--</div>--}}

                                <div class="img-pro mt-3 mb-3">
                                    <img src="{{URL::asset('images/icon/employee-laptops.jpg')}}" alt="" style="width: 68px;height: 68px;border-radius: 50%;margin: auto">
                                </div>

                            </div>

                        </div>
                    @endfor
                </div>

                <div class="btn-nav">
                <button class="btn_pre"> <i class="fas fa-angle-left"></i> </button>
                <button class="btn_next"> <i class="fas fa-angle-right"></i> </button>
                </div>

            </div>
        </div>

</div>