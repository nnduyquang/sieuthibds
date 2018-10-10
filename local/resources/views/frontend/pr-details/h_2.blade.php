<style>
</style>


<div class="container-fluid" id="h_2">
    <div class="row p-2">
        <div class="col-12 text-left nav-title">
            <ul>
                <li><a href=""><i class="fas fa-hotel"></i> HOME</a></li>
                <li><a href="">HO CHI MINH</a></li>
                <li><a href="">DISTRICT 2</a></li>
            </ul>
        </div>
    </div>


    <div class="row mt-2">
        <div class="col-12 text-left pb-3">
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
    <div class="row mt-3" id="pr-info">
        <div class="col-12 text-left">

            <h6>{{ $data['product']->name}}</h6>

        </div>

        <div class="col-12 d-flex justify-content-between">
            <a href="" class=""><p class="text-left"><i class="fas fa-map-marker-alt pr-2"></i> Binh Thanh District, Ho
                    Chi Minh</p></a>
            @if(!is_null($data['product']->code))
                <div class="r-housecode">
                    <div class="inner">
                        <h6>{{$data['product']->code}}</h6>
                        <p>HOUSE CODE</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

