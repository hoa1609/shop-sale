@extends('admin-layout')                                      {{-- @extends('admin-layout') in folder View |admin-layout.blade.php   --}}
@section('content')

<div class="row wrapper1 border-bottom white-bg page-heading">  
    <div class="col-lg-10">
        <h3>Quản lí danh mục</h3>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Dashhboard</a>
            </li>
            <li class="active">
                <strong>Thêm danh mục</strong>
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
                    <form role="form" action="{{ route('save-category-product')}}" method="POST">
                         @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input 
                                    type="text" 
                                    name="category_product_name"
                                    class="form-control" 
                                    id="exampleInputEmail1" 
                                    placeholder="Nhập tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea      style="resize: none" rows="8"

                                    class="form-control"
                                    name="category_product_desc"
                                    placeholder="Nhập mô tả" >
                        </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Hiển thị</label>
                            <select name="category_product_status" class="form-group input-sm m-bot15" >
                                <option value="0">Hiển thị</option>
                                <option value="1">Ẩn</option>
                            </select>
                        </div>
                
                        <button type="submit" name="add_tategory_product" class="btn btn-info">
                            Thêm danh mục
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
