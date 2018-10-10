<div id="menu" class="container-fluid d-none d-md-none d-lg-block shadow-lg">
    <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <a class="{{ request()->is('/') ? 'active' : '/' }}" href="{{URL::asset('/')}}">
                <img src="{{URL::asset('images/logo/logo-bds.png')}}" alt="" id="logo">
            </a>
            <div id="search_box">
                <input type="text" placeholder="District or Project">
                <button><i class="fas fa-search"></i></button>
            </div>
        </div>
        <div id="nav-content">
            <ul>
                @foreach($listMenu as $key=>$item)
                <li><a class="{{ request()->is($item->link()) ? 'active' : '/' }}" href="{{URL::to($item->link())}}">@lang($item->title)</a></li>
                @endforeach
                {{--<li><a class="{{ request()->is('project*') ? 'active' : '/' }}" href="{{URL::asset('projects.html')}}">Project</a></li>--}}
                {{--<li><a class="{{ request()->is('blog*') ? 'active' : '/' }}" href="{{URL::asset('blogs.html')}}">Blog</a></li>--}}
                {{--<li><a class="{{ request()->is('tuyen-dung*') ? 'active' : '/' }}" href="{{URL::asset('tuyen-dung.html')}}">Careers</a></li>--}}
                <li class="position-relative flag-overlay">

                    <div class="d-flex align-items-center position-relative">
                        <a class="li-normal" href="">Ngôn Ngữ</a> <img
                                src="{{URL::asset('images/icon/united-kingdom.png')}}" alt="" class="flag">
                    </div>
                    <div class="flag-content">
                        <ul>
                            <li>
                                <div class="d-flex align-items-center">
                                    <img
                                            src="{{URL::asset('images/icon/vietnam.png')}}" alt=""
                                            class="flag pr-2">
                                    <a href="{{ route('user.change-language', ['language'=>'vi'])}}">Vietnamese</a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <img
                                            src="{{URL::asset('images/icon/united-kingdom.png')}}" alt=""
                                            class="flag pr-2">
                                    <a href="{{ route('user.change-language', ['language'=>'en']) }}">English</a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
