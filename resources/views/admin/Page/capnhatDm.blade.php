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
                                            <h5>Cập Nhật Loại Tin</h5>
                                        </div>
                                        <div class="card-block">
                                            <form action="" method="POST">
                                                @method('put')
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nhập Tên Loại Tin Mới</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="ten" class="form-control" placeholder="{{$dslt->ten}}">

                                                        
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary waves-effect" type="submit" data-type="inverse" data-from="top" data-align="center" data-icon="fa fa-comments">Cập Nhật</button>
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