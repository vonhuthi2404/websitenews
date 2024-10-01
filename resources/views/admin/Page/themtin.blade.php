@extends('admin.layout.admin_layout')
@section('admin')

            <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">

                        <!-- Page body start -->
                        <div class="page-body">
                            
                          
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Basic Form Inputs card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Thêm Tin</h5>
                                        </div>
                                        <div class="card-block">
                                            <form action="/themtin" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tiêu Đề</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="tieuDe" class="form-control" placeholder="Nhập tiêu đề của tin">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tóm Tắt</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="tomTat" class="form-control" placeholder="Nhập tóm tắt của tin">
                                                    </div>
                                                </div>
                                              
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Loại Tin</label>
                                                    <div class="col-sm-10">
                                                        
                                                        <select name="idLT" class="form-control">
                                                            @foreach ($dslt as $item)
                                                            <option value="{{$item->id}}" >{{$item->ten}}</option>
 
                                                            @endforeach
                                                         
                                                            
                                                         </select>
                                                    </div>
                                                </div>



                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Chọn Ảnh</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" name="Hinh" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nội Dung </label>
                                                    <div class="col-sm-10">
                                                        <textarea rows="5" cols="5" class="form-control" name="noiDung" placeholder="Nhập nội dung"></textarea>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary waves-effect" type="submit" data-type="inverse" data-from="top" data-align="center" data-icon="fa fa-comments">Thêm Tin</button>


                                                {{-- <div class="pcoded-inner-content">
                                                    <div class="main-body">
                                                        <div class="page-wrapper">
                                                            <!-- Page body start -->
                                                            <div class="page-body button-page">
                                                                <div class="row">
                                                                    <!-- bootstrap modal start -->
                                                                    <div class="col-sm-12">
                                                                        <!-- Notification card start -->
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h5>Notifications</h5>
                                                                            </div>
                                                                            <div class="card-block">
                                                                                <div class="col-sm-12">
                                                                                    <div class="sub-title">Notification Alert</div>
                                                                                    <p>Notification color : <code> data-type="inverse"</code> Notification position : <code> data-align="left" </code></p>
                                                                                    <ul class="notifications">
                                                                                <li>
                                                                                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="top" data-align="center" data-icon="fa fa-comments">Top Center</button>
                                                                                </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}

                                            </form>
                                          


                                        </div>
                                    </div>
                                    <!-- Basic Form Inputs card end -->
                                </div>
                            </div>
                        </div>
                        <!-- Page body end -->
                    </div>
                </div>
                <!-- Main-body end -->
                <div id="styleSelector">

                </div>
            </div>

@endsection