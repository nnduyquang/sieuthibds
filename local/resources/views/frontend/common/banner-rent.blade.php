<div class="container-fluid" id="banner_rent"
     style="background-image:url({{URL::asset($data['product']->image)}});">
    <div class="bg-cover">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-end">
                    {{--<button>VIEW PHOTOS</button>--}}
                </div>
            </div>
        </div>
    </div>

    <div id="price">
        @if(!is_null($data['product']->price)&&!is_null($data['product']->unit_id))
            <p>{{$data['product']->price}} <span>{{$data['product']->units->name}}</span></p>
        @endif
    </div>
</div>
