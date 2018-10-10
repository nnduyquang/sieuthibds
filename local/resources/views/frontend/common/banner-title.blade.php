<div class="container-fluid" id="banner_title"
     style="background-image:url({{URL::asset($data['category']->image)}});">
    <div class="bg-cover">
        <div class="container">
            <div class="row">
            <div class="col-12 d-flex align-items-center">
                <div><h6>{{$data['category']->id}}</h6></div>
                <div>
                <h5>{{$data['category']->name}}</h5>
                {{--<p>Project status: finished</p>--}}
                {{--<p>Price Ranger: 600-1300 USD$</p>--}}
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
