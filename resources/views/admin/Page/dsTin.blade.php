@extends('admin.layout.admin_layout')
@section('admin')
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
<div class="page-body">
<div class="container">
    <h1>DANH SÁCH TIN</h1>
       
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tiêu Đề</th>
            <th scope="col">Loại Tin</th>
            <th scope="col">Tóm Tắt</th>
            <th scope="col">Ảnh</th>
            <th scope="col"></th>
            <th scope="col"></th>


          </tr>
        </thead>
    @foreach ($data  as $i=> $tin)
        <div class="row">
                    
                 
                        <tbody>
                          <tr>
                            <th scope="row">{{++$i}}</th>
                            <td>{{$tin->tieuDe}}</td>
                            <td>{{$tin->tendm}}</td>
                            <td>{{$tin->tomTat}}</td>
                            <td>   
                                 <img class="img-fluid" src="{{asset('user').'/'.$tin->urlHinh}}" style="width: 70px;height: 70px;object-fit: cover;">
                             </td>
                            <td>
                                <a href="{{route('capnhat',['id'=>$tin->id])}}" class="button">Cập nhật</a>
                            </td>
                            <td>                
                                <a href="{{route('xoa',['id'=>$tin->id])}}" class="button">Xóa</a></div>
                            </td>

                          </tr>
                 
                        </tbody>
                        @endforeach

                      </table>
        </div>
          <hr>  

</div>
</div>
        </div>
    </div>
@endsection