<div id="lp_1">
    <h5>LOOKING FOR PROJECTS</h5>
    <div class="search-project">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Project search">
    </div>

    @for ($i = 0; $i < 12; $i++)
        <div class="pro-items d-flex align-items-center">
            <a href="{{URL::asset('projects-info.html')}}">
                <div class="pro-img"
                     style="background-image:url({{URL::asset('images/bg/ctc_masteri_pc.jpg')}});">
                </div>
            </a>
            <div class="ml-4 text-left">
                <h4><a href="{{URL::asset('projects-info.html')}}">MASTERI THAO DIEN TP.HCM THAO DIEN TPHCM </a></h4>
                <p><i class="fas fa-map-marked-alt"></i> 132/135 Nguyễn Hữu Cảnh, Phường 22, Quận Bình Thạnh</p>
            </div>
        </div>
    @endfor

    <div class="d-flex justify-content-center mt-5">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
    </div>
</div>