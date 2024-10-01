@extends('client.Layout.master_layout')
@section('name')
  
   
    <!-- Breaking News Start -->
    <div class="container-fluid mt-5 mb-3 pt-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="section-title border-right-0 mb-0" style="width: 180px;">
                            
                            <h4 class="m-0 text-uppercase font-weight-bold">Song dep</h4>
                        </div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0"
                            style="width: calc(100% - 180px); padding-right: 100px;">
                            <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Sống đẹp, trước hết, phải sống biết thương, quan tâm, chăm sóc, gắn bó, đồng cảm, vị tha với tất những người xung quanh bạn, không phân biệt người thân hay người lạ, không phân biệt màu da, giới tính và địa vị xã hội.</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">

                        <img class="img-fluid w-100" src="{{asset('user/'.$ctt->urlHinh)}}" style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                 
                                <a class="badge badge-info text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Sống đẹp</a>

                                <a class="text-body" href=""></a>
                            </div>
                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">{{$ctt->tieuDe}}</h1>
                            <p>{{$ctt->noiDung}}</p>
                        </form>
                        </div>
                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle mr-2" src="{{asset('client/img/user.jpg')}}" width="25" height="25" alt="">
                                <span>Dương Thị Ngọc Hân</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ml-3"><i class="far fa-eye mr-2"></i>12345</span>
                                <span class="ml-3"><i class="far fa-comment mr-2"></i>123</span>
                            </div>
                        </div>
                    </div>
                    <!-- News Detail End -->

                    <!-- Comment List Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Có 3 bình luận</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <div class="media mb-4">
                                <img src="{{asset('client/img/user.jpg')}}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">Dương Thị Ngọc Hân</a> <small><i>01 Jan 2045</i></small></h6>
                                    <p>Chân thành, trung thực cả trong suy nghĩ, lời nói và hành động.</p>
                                    <button class="btn btn-sm btn-outline-secondary">Trả lời</button>
                                </div>
                            </div>
                            <div class="media">
                                <img src="{{asset('client/img/user.jpg')}}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">Dương Thị Ngọc Hân</a> <small><i>11 2 2022</i></small></h6>
                                    <p>Yêu thương và thể hiện tình yêu bằng hành động một cách chủ động. Đừng chờ đợi.</p>
                                    <button class="btn btn-sm btn-outline-secondary">Trả lời</button>
                                    <div class="media mt-4">
                                        <img src="{{asset('client/img/user.jpg')}}" alt="Image" class="img-fluid mr-3 mt-1"
                                            style="width: 45px;">
                                        <div class="media-body">
                                            <h6><a class="text-secondary font-weight-bold" href="">Dương Thị Ngọc Hân</a> <small><i>12 2 2022</i></small></h6>
                                            <p>Hay quá bạn ơi</p>
                                            <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Viết bình luận của bạn</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <form>
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Tên *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Nội dung *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Leave a comment"
                                        class="btn btn-info font-weight-semi-bold py-2 px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Comment Form End -->
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

                    <!-- Ads Start -->
                  
                    <!-- Ads End -->

                    <!-- Popular News Start -->
               
                    <!-- Popular News End -->

                  
                </div>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->

@endsection