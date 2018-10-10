<div class="row d-lg-block d-md-block d-sm-none d-none" id="pr_1">

    <div class="col-12 p-3 r-relate">
        <div class="">
            <h5>TOP 10 PROJECT</h5>
        </div>
        @foreach($data['categories'] as $key=>$item)
            <div class="d-flex  border align-items-center mb-3">
                <a href="">
                <div class="img"
                     style="background-image:url({{URL::to($item->image)}});">
                </div>
                </a>
                <div class="pl-3">
                    <a href="">
                    <h4>{{$item->name}}</h4>
                    </a>
                    {{--<p>Summary: Located on Nguyen Huu Canh, the major ...</p>--}}
                </div>
            </div>
        @endforeach

    </div>

    {{--<div class="col-12 p-3 r-relate">--}}
        {{--<div class="">--}}
            {{--<h5>VIEW PROJECT INFO</h5>--}}
        {{--</div>--}}
        {{--<a href="">--}}
            {{--<div class="d-flex border align-items-center">--}}
                {{--<a href=""><div class="img"--}}
                     {{--style="background-image:url(https://www.hoozing.com/assets/images/dummy/img-1.jpg);">--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--<div  class="pl-3">--}}
                    {{--<a href="">--}}
                        {{--<h4>Vinhomes Central Park</h4>--}}
                    {{--</a>--}}
                    {{--<p>Summary: Located on Nguyen Huu Canh, the major ...</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</a>--}}

    {{--</div>--}}

    <div class="col-12 text-center ">

        <h6>FANPAGE FACEBOOK</h6>

        <div class="fb-page" data-href="https://www.facebook.com/sieuthicanho.net/" data-tabs="timeline" data-height="280px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/sieuthicanho.net/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sieuthicanho.net/">Siêu Thị Căn Hộ -  Apartments For Rent Masteri Thao Dien</a></blockquote></div>

    </div>

</div>



