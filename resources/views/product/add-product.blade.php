@extends('admin-layout')                                      {{-- @extends('admin-layout') in folder View |admin-layout.blade.php   --}}
@section('content')

    <div class="row wrapper1 border-bottom white-bg page-heading">  
        <div class="col-lg-10">
            <h3>Quản lí sản phẩm</h3>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Dashhboard</a>
                </li>
                <li class="active">
                    <strong>Thêm sản phẩm</strong>
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
                        <form role="form" action="{{ route('save-product')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                        <input 
                                        type="text" 
                                        name="product_name"
                                        class="form-control" 
                                        id="exampleInputEmail1" 
                                        placeholder="Nhập tên sản phẩm">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá sản phẩm</label>
                                      <input 
                                        type="text" 
                                        name="product_price"
                                        class="form-control" 
                                        id="exampleInputEmail1" 
                                        placeholder="Nhập tên sản phẩm">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                        <input 
                                        type="file" 
                                        name="product_image"
                                        class="form-control" 
                                        id="exampleInputEmail1" 
                                        >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                        <textarea style="resize: none" rows="8"

                                        class="form-control"
                                        name="product_desc"
                                        placeholder="Nhập mô tả sản phẩm" >
                            </textarea>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                        <textarea   style="resize: none" rows="8"

                                        class="form-control"
                                        name="product_content"
                                        placeholder="Nhập nội dung sản phẩm" >
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Danh mục sản phẩm</label>
                                <select name="product_cate" class="form-group input-sm m-bot15">

                                    @foreach ($cate_product as $key => $cate)
                                        <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Thương hiệu sản phẩm</label>
                                <select name="product_brand" class="form-group input-sm m-bot15">
                                    @foreach ($brand_product as $key => $brand)
                                        <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Hiển thị</label>
                                <select name="product_status" class="form-group input-sm m-bot15" >
                                    <option value="0">Hiển thị</option>
                                    <option value="1">Ẩn</option>
                                </select>
                            </div>
                    
                            <button type="submit" name="tategory_product" class="btn btn-info">
                                Thêm sản phẩm
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
@endsection
