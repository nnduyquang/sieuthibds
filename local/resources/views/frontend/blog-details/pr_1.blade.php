<div class="row d-lg-block d-md-block d-sm-none d-none mb-5" id="pr_1">

    <div class="col-12 p-3 r-relate">

        {{--<h6>POPULAR POSTS</h6>--}}

        {{--<div class="top-1 mb-4 pb-4 border-bottom">--}}
            {{--<img src="http://blog.hoozing.com/wp-content/uploads/2016/06/saveliy-bobov-535623-unsplash-1-862x575-1-585x390.jpg"--}}
                 {{--alt="">--}}
            {{--<a href=""><h4>Where is the largest Korea Town in HCM City?</h4></a>--}}
            {{--<p>March 20, 2018</p>--}}
        {{--</div>--}}
        @foreach($data['allProject'] as $key=>$item)
            <div class="d-flex pb-3 border-bottom align-items-center mb-3">
                <a href="{{URL::to('du-an/'.$item->path)}}">
                    <div class="img"
                         style="background-image:url({{URL::to($item->image)}});">
                    </div>
                </a>
                <div class="pl-3">
                    <a href="{{URL::to('du-an/'.$item->path)}}">
                        <h4>{{$item->name}}</h4>
                    </a>
                </div>
            </div>
        @endforeach

    </div>

    <div class="col-12 text-center ">

        <h6>FANPAGE FACEBOOK</h6>

        <div class="fb-page" data-href="https://www.facebook.com/sieuthicanho.net/" data-tabs="timeline" data-height="280px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/sieuthicanho.net/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sieuthicanho.net/">Siêu Thị Căn Hộ -  Apartments For Rent Masteri Thao Dien</a></blockquote></div>

    </div>


</div>


