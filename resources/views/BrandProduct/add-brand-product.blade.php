@extends('admin-layout')                                      {{-- @extends('admin-layout') in folder View |admin-layout.blade.php   --}}
@section('content')

<div class="row wrapper1 border-bottom white-bg page-heading">  
    <div class="col-lg-10">
        <h3>Quản lí hiệu sản phẩm</h3>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Dashhboard</a>
            </li>
            <li class="active">
                <strong>Thêm hiệu sản phẩm</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
    </div>
</div>
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{ route('save-brand-product')}}" method="POST">
                         @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên hiệu sản phẩm</label>
                            <input 
                                    type="text" 
                                    name="brand_product_name"
                                    class="form-control" 
                                    id="exampleInputEmail1" 
                                    placeholder="Nhập tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả hiệu sản phẩm</label>
                            <textarea      style="resize: none" rows="12"

                                    class="form-control"
                                    name="brand_product_desc"
                                    placeholder="Nhập mô tả" >
                        </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Hiển thị</label>
                            <select name="brand_product_status" class="form-group input-sm m-bot15" >
                                <option value="0">Hiển thị</option>
                                <option value="1">Ẩn</option>
                            </select>
                        </div>
                
                        <button type="submit" name="add_brand_product" class="btn btn-info">
                            Thêm hiệu sản phẩm
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
