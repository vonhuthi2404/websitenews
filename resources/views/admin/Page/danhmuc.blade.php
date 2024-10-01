@extends('admin.layout.admin_layout')
@section('admin')
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
<div class="page-body">
   <!-- Basic table card start -->
       <div class="card">
        <div class="card-header">
            <h5>Danh Mục</h5>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                    <li><i class="fa fa-window-maximize full-card"></i></li>
                    <li><i class="fa fa-minus minimize-card"></i></li>
                    <li><i class="fa fa-refresh reload-card"></i></li>
                    <li><i class="fa fa-trash close-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                                
                            <th>Tên Danh Mục</th>
                            <th>Ngày Thêm</th>
                            <th>Ngày Cập Nhật</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($dm as $item)
                            <th scope="row">{{$item->thuTu}}</th>
                            <td>{{$item->ten}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->updated_at}}</td>
                         <td>
                            <a href="{{route('capnhat_dm',['id'=>$item->id])}}" class="button">Cập nhật</a>
                         </td>

                            <td>
                                <a href="{{route('xoa_dm',['id'=>$item->id])}}" class="button">Xóa</a>
                            </td>
                        </tr>
                        @endforeach

                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Basic table card end -->
</div>
        </div>
    </div>
</div>
    @endsection