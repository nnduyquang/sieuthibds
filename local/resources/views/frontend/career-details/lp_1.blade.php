<div id="lp_1">

    <div class="row mb-4">
        <div class="col-12 text-left nav-title">
            <ul>
                <li><a href=""><i class="fas fa-hotel"></i> HOME</a></li>
                <li><a href="">CAREERS</a></li>
                <li><a href="">{{$data['tuyendung']->title}}</a></li>
            </ul>
        </div>
    </div>

    <div class="row">

        <img src="" alt="">

        <div class="col-md-12 blogs">
            <img src="{{URL::to($data['tuyendung']->image)}}"
                 alt="">
            {!! $data['tuyendung']->content !!}

        </div>
    </div>

    {{--<div class="row">--}}
        {{--<div class="col-12">--}}
            {{--<div class="border-bottom border-dark mb-4">--}}
                {{--<h6>DON'T MISS THESE</h6>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--@for ($i = 0; $i < 4; $i++)--}}
        {{--<div class="row border-bottom mb-4 pb-4">--}}


            {{--<div class="col-md-6">--}}
                {{--<img src="http://blog.hoozing.com/wp-content/uploads/2018/09/DSC01121-585x390.jpg"--}}
                     {{--alt="">--}}
            {{--</div>--}}
            {{--<div class="col-md-6 blogs mb-3">--}}
                {{--<a href=""><h4>‘It took us 1 day to sign the contract with Hoozing’</h4></a>--}}
                {{--<p class="d-post">by <a href="">Hoozing </a>September 24, 2018</p>--}}
                {{--<p>In this video, hear from Sofie Willemann Nielsen, Simone Borkner and Jonas Natapong Kuna--}}
                    {{--Mogensen,--}}
                    {{--about--}}
                    {{--their experiences in finding an accommodation in Vietnam and how Hoozing helped them.</p>--}}
            {{--</div>--}}


        {{--</div>--}}
    {{--@endfor--}}

</div>