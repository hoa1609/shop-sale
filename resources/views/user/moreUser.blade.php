@extends('admin-layout')                   {{-- @extends('admin-layout') in folder View |admin-layout.blade.php   --}}
@section('content')

    <div class="row wrapper1 border-bottom white-bg page-heading">  
        <div class="col-lg-10">
            <h3>Quản lí người dùng</h3>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Dashhboard</a>
                </li>
                <li class="active">
                    <strong>Thêm người dùng</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
        </div>
    </div>

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Thêm mới người dùng <small>   Bạn hãy nhập thông tin phía dưới để trở thành viên</small></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-12 b-r">

                        <form action="them-user" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label>Tên</label> 
                                    <input 
                                        type="text" 
                                        name="name"
                                        class="form-control"
                                        placeholder="Nhập tên....">
                                </div>
                                <div class="text">
                                    <label>Số điện thoại</label> 
                                    <input 
                                        type="text" 
                                        name="phone"
                                        class="form-control"
                                        placeholder="Nhập sdt....">
                                </div>
                                <div class="form-group">
                                    <label>Email</label> 
                                    <input 
                                        type="text" 
                                        name="email"
                                        class="form-control"
                                        placeholder="Nhập email....">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label> 
                                    <input 
                                        type="text" 
                                        name="address"
                                        class="form-control"
                                        placeholder="Nhập địa chỉ....">
                                </div>

                                <div class="form-group">
                                    <label>Password</label> 
                                    <input 
                                        type="text" 
                                        name="password"
                                        class="form-control"
                                        placeholder="Nhập pass...."
                                        >
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Lưu thông tin</strong></button>
                                </div>
                       </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
@endsection
    