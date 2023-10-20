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
                    <strong>Cập nhật sản phẩm</strong>
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
                        <form role="form" action="{{ route('update-product',$edit_product->product_id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                        <input 
                                        type="text" 
                                        name="product_name"
                                        class="form-control" 
                                        id="exampleInputEmail1" 
                                        value="{{ $edit_product ->product_name }}"
                                        >
                            </div>

                            <div class="form-group">
                                <label for="">Giá sản phẩm</label>
                                      <input 
                                        type="text" 
                                        name="product_price"
                                        class="form-control" 
                                        id="exampleInputEmail1" 
                                        value="{{ $edit_product ->product_price }}"
                                        >
                            </div>

                            <div class="form-group">
                                <label for="">Hình ảnh sản phẩm</label>
                                        <input 
                                        type="file" 
                                        name="product_image"
                                        class="form-control" 
                                        id="exampleInputEmail1"
                                        >
                                        <img src="{{ asset('upload/product/' . $edit_product->product_image) }}" alt="error" width="100px" height="100px">
                            </div>

                            <div class="form-group">
                                <label for="">Mô tả sản phẩm</label>
                                        <textarea style="resize: none" rows="8"

                                        class="form-control"
                                        name="product_desc"
                                        value="{{ $edit_product ->product_desc}}"
                                        >
                            </textarea>

                            <div class="form-group">
                                <label for="">Nội dung sản phẩm</label>
                                        <textarea   style="resize: none" rows="8"

                                        class="form-control"
                                        name="product_content"
                                        value="{{ $edit_product ->product_content}}"
                                         >
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Danh mục sản phẩm</label>
                                <select name="product_cate" class="form-group input-sm m-bot15">
                                    @foreach ($cate_product as $key => $cate)
                                    @if ($cate -> category_id == $edit_product-> category_id)
                                        <option selected value="{{$cate-> category_id}}">  {{$cate-> category_name}}</option>
                                        @else
                                        <option value="{{ $cate-> category_id }}">{{ $cate-> category_name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Thương hiệu sản phẩm</label>
                                <select name="product_brand" class="form-group input-sm m-bot15">
                                    @foreach ($brand_product as $key => $brand)
                                        @if ($brand -> brand_id == $edit_product-> brand_id)
                                            <option selected value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                                        @else
                                        <option value="{{ $brand-> brand_id }}">{{ $brand-> brand_name }}</option>
                                        @endif
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
                                Cập nhật sản phẩm
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
@endsection
