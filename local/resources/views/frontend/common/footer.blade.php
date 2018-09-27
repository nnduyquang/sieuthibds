{{--<div class="footer-top-gradient"></div>--}}

<div class="container-fluid shadow-lg border-top" id="footer" style="background-image:url({{URL::asset('images/bg/HyperSo.jpg')}});">

    <div class="container" id="info">
        <div class="row">
            <div class="col-md-3 mb-3">
                <h5>Stay Connected</h5>
                <p>Join over 3000 people who receive rental advice and best property deals</p>
                <div class="subc-email d-flex align-items-center">
                    <input type="text" placeholder="Your Email">
                    <button><i class="far fa-envelope"></i></button>
                </div>
                <div class="sc-nw">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <h5>Company</h5>

                <ul>
                    <li><a href="javascript:void(0)"><h4>Apartment Mart Real estate Co.Ltd</h4></a></li>
                    <li><a href="javascript:void(0)"><h4>Address :</h4> <p>159 Ha Noi hight way St, Thao Dien ward, District 2, Ho Chi Minh City</p></a></li>
                    <li><a href="javascript:void(0)"><h4>MST:</h4> 0315074213</a></li>
                    <li><a href="javascript:void(0)"><h4>Hotline:</h4> 0902 806 679</a></li>

                </ul>

            </div>
            <div class="col-md-3 mb-3" id="project">
                <h5>Project</h5>
                <ul>
                    <li><a href="">
                            Masteri Thao Dien
                        </a>
                    </li>
                    <li><a href="">
                            Vinhomes Central Park
                        </a>
                    </li>
                    <li><a href="">
                            Scenic Valley
                        </a>
                    </li>
                    <li><a href="">
                            Saigon Pearl
                        </a>
                    </li>
                    <li><a href="">
                            Tropic Garden
                        </a>
                    </li>
                    <li><a href="">
                            Sunrise City
                        </a>
                    </li>
                    <li><a href="">
                            Estella
                        </a>
                    </li>
                    <li><a href="">
                            The Manor
                        </a>
                    </li>

                    <button>View All</button>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Support</h5>

                <ul>
                    <li><a href="">
                            Contact Us
                        </a>
                    </li>
                    <li><a href="">
                            What is verified account
                        </a>
                    </li>
                    <li><a href="">
                            What is verified listing
                        </a>
                    </li>
                    <li><a href="">
                            Quy chế hoạt động
                        </a>
                    </li>
                    <li><a href="">
                            Các câu hỏi thường gặp
                        </a>
                    </li>
                    <li><a href="">
                            Điều khoản thỏa thuận
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="container d-lg-block d-none" id="quick_link">
        <div class="row">
            <div class="col-md-12">
                <h5>QUICK LINKS</h5>
            </div>
            <div class="col-md-12" id="content">
                <ul>

                    @for ($i = 0; $i < 16; $i++)

                        <li>
                            <a href="">
                                Apartment for rent in district 5 1231232132131321
                            </a>
                        </li>

                    @endfor

                </ul>
            </div>
        </div>
    </div>

    <div id="copyright" class="container text-center">
        <div class="row">

            <div class="col-md-12">
                <p>Copyright © Smartlinks All Right Reserved</p>
            </div>

        </div>
    </div>
</div>


