@extends('admin-layout')                        {{-- @extends('admin-layout') in folder View |admin-layout.blade.php   --}}
@section('content')

    <div class="row wrapper1 border-bottom white-bg page-heading">  
        <div class="col-lg-10">
            <h3>Quản lí người dùng</h3>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Dashhboard</a>
                </li>
                <li class="active">
                    <strong>Chỉnh sửa người dùng</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
        </div>
    </div>

    <div class="col-lg-7">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Chỉnh sửa người dùng <small>   Hãy cập nhật thông tin dưới đây</small></h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-12 b-r">
                        <form action="{{ route('user.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Tên</label>
                                <input type="text" 
                                        name="name" 
                                        class="form-control" 
                                        placeholder="Nhập tên...." 
                                        value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" 
                                        name="phone" 
                                        class="form-control" 
                                        placeholder="Nhập sdt...." 
                                        value="{{ $user->phone }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" 
                                        name="email" 
                                        class="form-control" 
                                        placeholder="Nhập email...." 
                                        value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" 
                                        name="address" 
                                        class="form-control" 
                                        placeholder="Nhập địa chỉ...." 
                                        value="{{ $user->address }}">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" 
                                        name="password" 
                                        class="form-control" 
                                        placeholder="Nhập pass....">
                                </div>
                            <div>
                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
                                    <strong>Cập nhật thông tin</strong>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
