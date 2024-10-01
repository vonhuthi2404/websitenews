    
    @extends('client.layout.master_layout');
        @section('name')
        <br>
        <!-- Breaking News Start -->
        {{-- <div class="container-fluid bg-dark py-3 mb-3">
            <div class="container">
                <div class="row align-items-center bg-dark">
                    <div class="col-12">
                        <div class="d-flex justify-content-between">
                            <div class="bg-info text-dark text-center font-weight-medium py-2" style="width: 170px;">Tin Nóng Hổi</div>
                            <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                                style="width: calc(100% - 170px); padding-right: 90px;">
                                <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div>
                                <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Breaking News End -->

        <!-- Main News Slider Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 px-0">
                    <div class="owl-carousel main-carousel position-relative">
                        <div class="position-relative overflow-hidden" style="height: 500px;">
                            <img class="img-fluid h-100" src="{{asset('client/img/news-800x500-1.jpg')}}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-info text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="">Việc kinh doanh
                                    </a>
                                    <a class="text-white" href="">01 tháng 8 năm 2022</a>
                                </div>
                                <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Tin được cập nhật 24/24 trên toàn cả nước...</a>
                            </div>
                        </div>
                        <div class="position-relative overflow-hidden" style="height: 500px;">
                            <img class="img-fluid h-100" src="{{asset('client/img/news-800x500-2.jpg')}}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-info text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="">Việc kinh doanh
                                    </a>
                                    <a class="text-white" href="">01 tháng 8 năm 2022</a>
                                </div>
                                <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Tin được cập nhật 24/24 trên toàn cả nước...</a>
                            </div>
                        </div>
                        <div class="position-relative overflow-hidden" style="height: 500px;">
                            <img class="img-fluid h-100" src="{{asset('client/img/news-800x500-3.jpg')}}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-info text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="">Việc kinh doanh</a>
                                    <a class="text-white" href=""> 01 tháng 8 2022</a>
                                </div>
                                <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Tin được cập nhật 24/24 trên toàn cả nước...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 px-0">
                    <div class="row mx-0">
                        <div class="col-md-6 px-0">
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                <img class="img-fluid w-100 h-100" src="{{asset('client/img/news-700x435-1.jpg')}}" style="object-fit: cover;">
                                <div class="overlay">
                                    <div class="mb-2">
                                        <a class="badge badge-info text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Sống đẹp</a>
                                        <a class="text-white" href=""><small>01 tháng 8 2022</small></a>
                                    </div>
                                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Tin được cập nhật 24/24 trên toàn cả nước...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 px-0">
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                <img class="img-fluid w-100 h-100" src="{{asset('client/img/news-700x435-2.jpg')}}" style="object-fit: cover;">
                                <div class="overlay">
                                    <div class="mb-2">
                                        <a class="badge badge-info text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Khoa Học</a>
                                        <a class="text-white" href=""><small>01 tháng 8 2022</small></a>
                                    </div>
                                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Tin được cập nhật 24/24 trên toàn cả nước...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 px-0">
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                <img class="img-fluid w-100 h-100" src="{{asset('client/img/news-700x435-3.jpg')}}" style="object-fit: cover;">
                                <div class="overlay">
                                    <div class="mb-2">
                                        <a class="badge badge-info text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Xã Hội</a>
                                        <a class="text-white" href=""><small>01 tháng 8 2022</small></a>
                                    </div>
                                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Tin được cập nhật 24/24 trên toàn cả nước...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 px-0">
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                <img class="img-fluid w-100 h-100" src="{{asset('client/img/news-700x435-4.jpg')}}"  style="object-fit: cover;">
                                <div class="overlay">
                                    <div class="mb-2">
                                        <a class="badge badge-info text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Khoa Học</a>
                                        <a class="text-white" href=""><small>01 tháng 8 2022</small></a>
                                    </div>
                                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Tin được cập nhật 24/24 trên toàn cả nước....</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News Slider End -->




        <!-- Featured News Slider Start -->
        <div class="container-fluid pt-5 mb-3">
            <div class="container">
                <div class="section-title">
                    <h4 class="m-0 text-uppercase font-weight-bold">Tin Nổi Bật</h4>
                </div>
                <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid h-100" src="{{asset('client/img/news-700x435-1.jpg')}}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-info text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Sống đẹp</a>
                                <a class="text-white" href=""><small>01 tháng 8 2022</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Tin được cập nhật 24/24 trên toàn cả nước....</a>
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid h-100" src="{{asset('client/img/news-700x435-2.jpg')}}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-info text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Khoa Học</a>
                                <a class="text-white" href=""><small>01 tháng 8 2022</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Tin được cập nhật 24/24 trên toàn cả nước....</a>
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid h-100" src="{{asset('client/img/news-700x435-3.jpg')}}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-info text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Sống đẹp</a>
                                <a class="text-white" href=""><small>01 tháng 8 2022</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Tin được cập nhật 24/24 trên toàn cả nước....</a>
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid h-100" src="{{asset('client/img/news-700x435-4.jpg')}}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-info text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Khoa Học</a>
                                <a class="text-white" href=""><small>01 tháng 8 2022</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Tin được cập nhật 24/24 trên toàn cả nước....</a>
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid h-100" src="{{asset('client/img/news-700x435-5.jpg')}}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-info text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Xã Hội</a>
                                <a class="text-white" href=""><small>01 tháng 8 2022</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Tin được cập nhật 24/24 trên toàn cả nước....</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured News Slider End -->


        <!-- News With Sidebar Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">
                                    <h4 class="m-0 text-uppercase font-weight-bold">Tin Mới Nhất</h4>
                                    <a class="text-secondary font-weight-medium text-decoration-none" href="">Tất Cả</a>
                                </div>
                            </div>
                            @foreach ($tinmoi as $item)
                                
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <img class="img-fluid w-100" src="{{asset('user/'.$item->urlHinh)}}" style="object-fit: cover;">
                                    <div class="bg-white border border-top-0 p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-info text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="">Xã Hội</a>
                                            <a class="text-body" href=""><small>{{$item->created_at}}</small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="{{route('cttin',['id'=>$item->id])}}">{{$item->tieuDe}}</a>
                                        <p class="m-0">{{$item->tomTat}}</p>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="{{asset('client/img/user.jpg')}}" width="25" height="25" alt="">
                                            <small>Thịnh đẹp trai</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                       
                       
                     
                      
                 
                         
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <!-- Social Follow Start -->
                        <div class="mb-3">
                            <div class="section-title mb-0">
                                <h4 class="m-0 text-uppercase font-weight-bold">Theo dõi chúng tôi</h4>
                            </div>
                            <div class="bg-white border border-top-0 p-3">
                                <a href="https://www.facebook.com/azy021192/" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                                    <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                    <span class="font-weight-medium">12,345 Theo dõi</span>
                                </a>
                                <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                                    <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                    <span class="font-weight-medium">12,345 Theo dõi</span>
                                </a>
                                <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                                    <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                    <span class="font-weight-medium">12,345 Kết nối</span>
                                </a>
                                <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                                    <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                    <span class="font-weight-medium">12,345 Theo dõi</span>
                                </a>
                                <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                                    <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                    <span class="font-weight-medium">12,345 Đăng kí</span>
                                </a>
                                <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                                    <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                    <span class="font-weight-medium">12,345 Theo dõi</span>
                                </a>
                            </div>
                        </div>
                        <!-- Social Follow End -->

                  
                        <!-- Ads End -->

                    
                        <!-- Popular News End -->

                        <!-- Newsletter Start -->
                        <div class="mb-3">
                            <div class="section-title mb-0">
                                <h4 class="m-0 text-uppercase font-weight-bold">Bản Tin</h4>
                            </div>
                            <div class="bg-white text-center border border-top-0 p-3">
                                <p>Thông tin sẽ được cập nhật vào lúc 7:00 hàng ngày</p>
                                <div class="input-group mb-2" style="width: 100%;">
                                    <input type="text" class="form-control form-control-lg" placeholder="Email của bạn">
                                    <div class="input-group-append">
                                        <button class="btn btn-info font-weight-bold px-3">Đăng Kí</button>
                                    </div>
                                </div>
                                <small>Hãy nhắn gửi những mong muốn của bạn cho chúng tối !!!</small>
                            </div>
                        </div>
                        <!-- Newsletter End -->

                        {{-- <!-- Tags Start -->
                        <div class="mb-3">
                            <div class="section-title mb-0">
                                <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                            </div>
                            <div class="bg-white border border-top-0 p-3">
                                <div class="d-flex flex-wrap m-n1">
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tags End --> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- News With Sidebar End -->

        @endsection