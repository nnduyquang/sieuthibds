<div id="menu" class="container-fluid d-none d-md-none d-lg-block shadow-lg">
    <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <a class="{{ request()->is('/') ? 'active' : '/' }}" href="{{URL::asset('/')}}">
                <img src="{{URL::asset('images/logo/logo-bds.png')}}" alt="" id="logo">
            </a>
            {!! Form::open(array('route' => 'frontend.search','method'=>'POST','name'=>'search-home-menu')) !!}
            <div id="search_box">
                <input name="input-search-text-menu" type="text" placeholder="@lang('content.home_district_project')">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
            {!! Form::close() !!}


        </div>
        <div id="nav-content">
            <ul>
                @foreach($listMenu as $key=>$item)
                    <li><a class="{{ request()->is($item->link()) ? 'active' : '/' }}"
                           href="{{URL::to($item->link())}}">@lang($item->title)</a></li>
                @endforeach
                <li><a class="{{ request()->is('mat-bang*') ? 'active' : '/' }}" href="{{URL::asset('mat-bang.html')}}">Apartment Floor Plan</a></li>
                {{--<li><a class="{{ request()->is('blog*') ? 'active' : '/' }}" href="{{URL::asset('blogs.html')}}">Blog</a></li>--}}
                {{--<li><a class="{{ request()->is('tuyen-dung*') ? 'active' : '/' }}" href="{{URL::asset('tuyen-dung.html')}}">Careers</a></li>--}}
                <li class="position-relative flag-overlay">

                    <div class="d-flex align-items-center position-relative">
                        <a class="li-normal" href="">@lang('content.menu_lang')</a>
                        @php
                            $locale_id=Session::get('website_language');
                        @endphp
                        @if($locale_id=='en')
                            <img
                                    src="{{URL::asset('images/icon/united-kingdom.png')}}" alt="" class="flag chon-nn">
                        @else
                            <img
                                    src="{{URL::asset('images/icon/vietnam.png')}}" alt="" class="flag chon-nn">
                        @endif
                    </div>
                    <div class="flag-content">
                        <ul>
                            <li>
                                <div class="d-flex align-items-center chon-tv">
                                    <img
                                            src="{{URL::asset('images/icon/vietnam.png')}}" alt=""
                                            class="flag pr-2">
                                    <a href="{{ route('user.change-language', ['language'=>'vi'])}}">Vietnamese</a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center chon-eng">
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
