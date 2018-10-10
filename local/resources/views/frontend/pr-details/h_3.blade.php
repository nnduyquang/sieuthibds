<div class="container-fluid" id="h_3">
    <div class="container">
        <div class="row">
            <div class="col-12 text-left mt-4">
                <h5>Similar Listings</h5>
            </div>

            <div class="col-md-12 p-4 position-relative">

                <div id="owl-project" class="owl-carousel owl-theme">
                    @foreach($data['other'] as $key=>$item)
                        <div class="project-items">
                            <div class="img-pro">
                                <div class="img"
                                     style="background-image:url({{URL::to($item->image)}});">
                                </div>
                                @if(!is_null($item->price)&&!is_null($item->unit_id))
                                    <div class="price-rent"><p>{{$item->price}}{{$item->units()->name}}</p></div>
                                @endif
                            </div>
                            <div class="bottom-project">
                                @if(!is_null($item->code))
                                <h3>HOUSE CODE H05440</h3>
                                @endif
                                <h6><a href="{{URL::to('du-an/'.$item->path)}}">{{$item->name}}</a></h6>

                                <div class="thongtin d-flex align-items-center">
                                    <i class="fas fa-bed"></i>
                                    <p>Room</p>
                                    <i class="fas fa-shower"></i>
                                    <p>WC</p>
                                    <i class="fas fa-map-marked-alt"></i>
                                    <p>District1</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="btn_pre"><i class="fas fa-chevron-circle-left"></i></button>
                <button class="btn_next"><i class="fas fa-chevron-circle-right"></i></button>

            </div>

            <div class="col-12 text-center">
                <button class="view-all">VIEW ALL</button>
            </div>
        </div>
    </div>
</div>