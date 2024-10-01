@extends('client.Layout.master_layout')
@section('name')

<div class="container-fluid">
    <div class="container">
        <div class="row">
<div class="col-lg-8">
    <div class="row">
        <div class="col-12">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">{{$idLT->ten}}</h4>
                <a class="text-secondary font-weight-medium text-decoration-none" href="">Tất Cả</a>
            </div>
        </div>
        @foreach ($data as $item)
            
      
        <div class="col-lg-6">
            <div class="position-relative mb-3">
                <img class="img-fluid w-100" src="{{asset('user/'.$item->urlHinh)}}" style="object-fit: cover;">
                <div class="bg-white border border-top-0 p-4">
                    <div class="mb-2">
                        <a class="text-body" href=""><small>{{$item->created_at}}</small></a>
                    </div>
                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="{{route('cttin',['id'=>$item->id])}}">{{$item->tieuDe}}</a>
                    <p class="m-0">{{$item->tomTat}}</p>
                </div>
                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                    {{-- <div class="d-flex align-items-center">
                        <img class="rounded-circle mr-2" src="{{asset('client/img/user.jpg')}}" width="25" height="25" alt="">
                        <small>Thịnh đẹp trai</small>
                    </div> --}}
                    <div class="d-flex align-items-center">
                        <small class="ml-3"><i class="far fa-eye mr-2"></i>{{$item->xem}}</small>
                        {{-- <small class="ml-3"><i class="far fa-comment mr-2"></i>số người bình luận</small> --}}
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
</div>
        </div>
    </div>
</div>
@endsection