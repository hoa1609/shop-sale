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
                        <strong>Quản lí sản phẩm</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
       
       <div class="table-agile-info">
            <div class="panel panel-default">
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                <select class="input-sm form-control w-sm inline v-middle">
                    <option value="0">Hành động hàng loạt</option>
                    <option value="1">Xóa đã chọn</option>
                    <option value="2">Chỉnh sửa hàng loạt</option>
                    <option value="3">Xuất PDF</option>
                </select>
                <button class="btn btn-sm btn-default">Áp dụng</button>                
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Nhập từ cần tìm...">
                    <span class="input-group-btn">
                    <button class="btn btn-primary mb0 btn-sm" type="button">Tìm kiếm</button>
                    </span>
                </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                    <th style="width:20px;">
                        <label class="i-checks m-b-none">
                        <input type="checkbox"><i></i>
                        </label>
                    </th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Hình ảnh</th>
                    <th>Danh mục</th>
                    <th>Thương hiệu</th>
                    <th class="text-center">Hiển thị</th>
                    <th class="text-center"> Thao tác</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($all_product as $key =>$_pro )
                        <tr>
                            <td>
                                <label class="i-checks m-b-none">
                                    <input type="checkbox" name="post[]"><i></i>
                                </label>
                            </td>

                                <td>{{ $_pro -> product_name }}</td>
                                <td>{{ $_pro -> product_price }}</td>
                                <td>
                                    <img src="{{ asset('upload/product/' . $_pro-> product_image) }}" width="100px" height="100px">
                                </td>
                                <td>{{ $_pro -> category_name }}</td>
                                <td>{{ $_pro -> brand_name }}</td>

                            <td class="text-center">
                                <span class="text-ellipsis">

                                        <?php
                                            if ($_pro ->product_status == 0){
                                                ?>
                                                <a href="{{ route('unactive-product',$_pro ->product_id)}}"> 
                                                    <input type="checkbox" class="js-switch" checked /> 
                                                </a>
                                                <?php
                                            }else {
                                                ?>
                                                <a href="{{ route('active-product',$_pro ->product_id)}}"> 
                                                    <input type="checkbox" class="js-switch_2" checked />
                                                </a>
                                                <?php
                                            }
                                        ?>
                                </span>
                            </td>
                            <td  class="text-center">
                                    <a href="{{route('edit-product-form', $_pro ->product_id )}}" class="btn btn-success" style="zoom: .65"> 
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('delete-product', $_pro->product_id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </form>
                                    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">


                
                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm">Hiển thị 20-30 trên 50 mục</small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">                
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                    <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
                </div>
            </footer>
            </div>
    </div>

@endsection
