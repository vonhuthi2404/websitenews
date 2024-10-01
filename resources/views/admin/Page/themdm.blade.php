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
                                            <h5>Thêm Loại Tin</h5>
                                        </div>
                                        <div class="card-block">
                                            <form action="/admin1/danhmuc/them" method="POST">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tên Loại Tin</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="ten" class="form-control" placeholder="Nhập tên loại tin">
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary waves-effect" type="submit" data-type="inverse" data-from="top" data-align="center" data-icon="fa fa-comments">Thêm Loại Tin Mới</button>


                                           
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