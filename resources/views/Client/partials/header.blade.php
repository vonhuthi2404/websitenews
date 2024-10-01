  <!-- Topbar Start -->
  <div class="container-fluid d-none d-lg-block">
    <div class="row align-items-center bg-dark px-lg-5">
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-sm bg-dark p-0">
                <ul class="navbar-nav ml-n2">
                    <li class="nav-item border-right border-secondary">
                        <a class="nav-link text-body small" href="#">Thứ hai, ngày 1 tháng một năm 2045
                        </a>
                    </li>
                    <li class="nav-item border-right border-secondary">
                        <a class="nav-link text-body small" href="#">Quảng cáo</a>
                    </li>
                    </li>
                 
                    <li class="nav-item">
                        @if (Auth::check())
                        <li class="nav-item border-right border-secondary">
                        <a class="nav-link text-body small" href="/login"><?=Auth::user()->name?></a>
                        </li>

                        <li class="nav-item border-right border-secondary">
                        <a class="nav-link text-body small" href="<?=Auth::logout();?>">Đăng Xuất</a>
                        </li>
                        @else
                        <a class="nav-link text-body small" href="/login">Đăng nhập</a>

                        @endif
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-3 text-right d-none d-md-block">
            <nav class="navbar navbar-expand-sm bg-dark p-0">
                <ul class="navbar-nav ml-auto mr-n2">
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-twitter"></small></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-facebook-f"></small></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-linkedin-in"></small></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-instagram"></small></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-google-plus-g"></small></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-youtube"></small></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row align-items-center bg-white py-3 px-lg-5">
        <div class="col-lg-4">
            <a href="index.html" class="navbar-brand p-0 d-none d-lg-block">
                <h1 class="m-0 display-4 text-uppercase text-info">TIN MỚI<span class="text-secondary font-weight-normal"> 24h</span></h1>
            </a>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
            <a href="https://freewebsitecode.com"><img class="img-fluid" src="{{asset('client/img/ads-728x90.png')}}" alt=""></a>
        </div>
    </div>
</div>
<!-- Topbar End -->

   <!-- Navbar Start -->
   <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
        <a href="" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-4 text-uppercase text-info">Biz<span class="text-white font-weight-normal">Tin mớizzzzzzzz</span></h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="/" class="nav-item nav-link active">Trang Chủ</a>
                @foreach ($listCate as $item)
                <a href="/danhmuc/{{$item->id}}" class="nav-item nav-link">{{$item->ten}}</a>
                @endforeach

                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="#" class="dropdown-item">National News</a>
                        <a href="#" class="dropdown-item">International News</a>
                        <a href="#" class="dropdown-item">Others News</a>
                    </div>
                </div> --}}
                <a href="contact.html" class="nav-item nav-link">Liên Hệ</a>
            </div>
            <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                <input type="text" class="form-control border-0" placeholder="Tìm Kiếm">
                <div class="input-group-append">
                    <button class="input-group-text bg-info text-dark border-0 px-3"><i
                            class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->