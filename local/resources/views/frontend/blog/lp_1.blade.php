<div id="lp_1">

    <div class="row">

        <div class="col-12">
            <div class="border-bottom border-dark mb-4">
                <h6>BLOGS</h6>
            </div>
        </div>

        <div class="col-md-6 blogs">
            <img src="http://blog.hoozing.com/wp-content/uploads/2018/09/mid-autumn-festival-vietnam-585x390.jpg"
                 alt="">
            <a href="{{URL::asset('blogs-details.html')}}"><h4>Mid-autumn Festival Activities in Vietnam</h4></a>
            <p class="d-post">by <a href="">Hoozing </a>September 24, 2018</p>
            <p>In this video, hear from Sofie Willemann Nielsen, Simone Borkner and Jonas Natapong Kuna Mogensen, about
                their experiences in finding an accommodation in Vietnam and how Hoozing helped them.</p>
        </div>

        <div class="col-md-6 blogs">
            @for ($i = 0; $i < 4; $i++)
                <div class="d-flex mb-4">
                    <div class="img-blog mr-2"
                         style="background-image:url({{URL::asset('http://blog.hoozing.com/wp-content/uploads/2018/08/Riding-Motorbike-Through-Vietnam-585x390.jpg')}});">
                    </div>
                    <div>
                        <a href="{{URL::asset('blogs-details.html')}}"><h4>Mid-autumn Festival Activities in Vietnam</h4></a>
                        <p class="d-post"><a href="">September 24, 2018</a></p>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="border-bottom border-dark mb-4">
                <h6>DON'T MISS THESE</h6>
            </div>
        </div>
    </div>

    @for ($i = 0; $i < 4; $i++)
        <div class="row border-bottom mb-4 pb-4">


            <div class="col-md-6">
                <img src="http://blog.hoozing.com/wp-content/uploads/2018/09/DSC01121-585x390.jpg"
                     alt="">
            </div>
            <div class="col-md-6 blogs mb-3">
                <a href="{{URL::asset('blogs-details.html')}}"><h4>‘It took us 1 day to sign the contract with Hoozing’</h4></a>
                <p class="d-post">by <a href="">Hoozing </a>September 24, 2018</p>
                <p>In this video, hear from Sofie Willemann Nielsen, Simone Borkner and Jonas Natapong Kuna
                    Mogensen,
                    about
                    their experiences in finding an accommodation in Vietnam and how Hoozing helped them.</p>
            </div>


        </div>
    @endfor

</div>