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
                        <form role="form" action="{{ route('update-category-product', $edit_category_product->category_id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="category_product_name">Tên danh mục</label>
                                <input type="text" name="category_product_name" class="form-control" placeholder="Nhập tên danh mục" value="{{ $edit_category_product->category_name }}">
                            </div>
                            <div class="form-group">
                                <label for="category_product_desc">Mô tả danh mục</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="category_product_desc" placeholder="Nhập mô tả">{{ $edit_category_product->category_desc }}</textarea>
                            </div>
                            <button type="submit" name="update_tategory_product" class="btn btn-info">
                                Cập nhật danh mục
                            </button>
                        </form>
                    </div>
                </div>
        </section>
    </div>
@endsection
