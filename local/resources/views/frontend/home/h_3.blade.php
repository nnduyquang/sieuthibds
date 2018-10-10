<div class="container-fluid" id="h_3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5>Featured Projects</h5>
            </div>

            <div class="col-md-12 p-4 position-relative">

                <div id="owl-project" class="owl-carousel owl-theme">
                    @foreach($data['featuredProject'] as $key=>$item)
                        <div class="project-items border">
                            <div class="img-pro">
                                <div class="img"
                                     style="background-image:url({{URL::to($item->image)}}">
                                </div>
                            </div>
                            <div class="p-4">
                                <h4>{{$item->name}}</h4>
                                {{--<span>159 XA LỘ HÀ NỘI, THẢO ĐIỀN, QUẬN 2 - 40 FLOOR</span>--}}
                                <p>{!! $item->description !!}</p>

                                <div class="mt-3 mb-3">
                                    <a href=""><i class="fas fa-long-arrow-alt-right pr-1"></i> VIEW MORE</a>
                                    <a href=""><i class="far fa-building pr-1"></i>SEE LIST</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="btn_pre"> <i class="fas fa-chevron-circle-left"></i> </button>
                <button class="btn_next"> <i class="fas fa-chevron-circle-right"></i> </button>

            </div>

            <div class="col-12 text-center">
                <button class="view-all"><a class="text-white" href="{{URL::asset('projects.html')}}">VIEW ALL</a></button>
            </div>
        </div>
    </div>
</div>