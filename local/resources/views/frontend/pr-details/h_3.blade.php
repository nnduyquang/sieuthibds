<div class="container-fluid" id="h_3">
    <div class="container">
        <div class="row">
            <div class="col-12 text-left mt-4">
                <h5>Similar Listings</h5>
            </div>

            <div class="col-md-12 p-4 position-relative">

                <div id="owl-project" class="owl-carousel owl-theme">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="project-items">
                            <div class="img-pro">
                                <div class="img"
                                     style="background-image:url(images/bg/ctc_masteri_pc.jpg);">
                                </div>
                                <div class="price-rent"><p>$1,450</p></div>
                            </div>
                            <div class="bottom-project">
                                <h3>HOUSE CODE H05440</h3>
                                <h6><a href="">Vinhome Central park Apartment</a></h6>

                                <div class="thongtin d-flex align-items-center">
                                    <i class="fas fa-bed"></i> <p>Room</p>
                                    <i class="fas fa-shower"></i> <p>WC</p>
                                    <i class="fas fa-map-marked-alt"></i> <p>District1</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

                <button class="btn_pre"> <i class="fas fa-chevron-circle-left"></i> </button>
                <button class="btn_next"> <i class="fas fa-chevron-circle-right"></i> </button>

            </div>

            <div class="col-12 text-center">
                <button class="view-all">VIEW ALL</button>
            </div>
        </div>
    </div>
</div>