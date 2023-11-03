@extends('layout')
@section('content')

@foreach ($details_product as $key =>$value)
        <div class="product-details">
            <div class="col-sm-5">
                <div class="view-product">
                    <img src="{{asset('/upload/product/' .$value-> product_image)}}" alt="" />
                    <h3>ZOOM</h3>
                </div>
                <div id="similar-product" class="carousel slide" data-ride="carousel">
                    
                        <div class="carousel-inner">
                            <div class="item active">
                            <a href=""><img src="{{asset('front-end/img/similar1.jpg')}}" alt=""></a>
                            <a href=""><img src="{{asset('front-end/img/similar2.jpg')}}" alt=""></a>
                            <a href=""><img src="{{asset('front-end/img/similar3.jpg')}}" alt=""></a>
                            </div>
                        </div>
                    <!-- Controls -->
                    <a class="left item-control" href="#similar-product" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right item-control" href="#similar-product" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
            <div class="col-sm-7">
                <div class="product-information"><!--/product-information-->
                    <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                    <h2>{{$value -> product_name}}</h2>
                    <p>Mã ID: {{$value -> product_id}}</p>
                    <img src="images/product-details/rating.png" alt="" />

                    <form action="{{ route('save-cart')}}" method="POST">
                        @csrf
                        <span>
                            <span>${{$value -> product_price}}</span>
                            <label>Số lượng</label>
                            <input type="number" name="qty" value="1" min="1" oninput="this.value = Math.abs(this.value)" /> <br>
                            <input type="hidden" name="producid_hidden" value="{{$value -> product_id}}">
                            <button type="submit" class="btn btn-fefault cart">
                                <i class="fa fa-shopping-cart"></i>
                                Thêm giỏ hàng
                            </button>
                        </span>
                    </form>
                    
                    <p><b>Tình trạng:</b> Còn hàng</p>
                    <p><b>Điều kiện:</b> Mới</p>
                    <p><b>Thương hiệu:</b> {{$value -> brand_name   }}</p>
                    <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                </div>
            </div>
        </div>
@endforeach

<div class="category-tab shop-details-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li ><a href="#details" data-toggle="tab">Mô tả </a></li>
            <li><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>
            <li class="active"><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade " id="details" >
            <p>{!! $value -> product_content !!}</p>
        </div>
        
        <div class="tab-pane fade" id="companyprofile" >
            <p>{!! $value -> product_desc  !!}</p>
        </div>
        
        <div class="tab-pane fade active in" id="reviews" >
            <div class="col-sm-12">
                <ul>
                    <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                    <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                    <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                </ul>
                <style type="text/css">
                    .style-comment {
                        border: 1px solid #ddd;
                        border-radius: 5px;
                        background-color: #e0e0e0;
                    }
                </style>


            {{-- <p> sửa đoạn này e với</p> --}}
            <form >
                @csrf
                <input type="hidden" name="comment_product_id" class="comment_product_id" value="{{ $value-> product_id}}">
                <div id="comment_show"></div>
                <p></p>
            </form>



                <p><b>Viết đánh giá</b></p>
                <form action="">
                    <span>
                        <input type="text" style="border-radius: 3px" 
                        class="comment_name"
                        placeholder="Nhập tên bạn"/>
                    </span>

                    <textarea style="border-radius: 3px"
                        name="comment" 
                        class="comment_content" 
                        placeholder="Nhập nội dung bình luận">
                    </textarea>
                    <b>Đánh giá: </b> <img src="images/product-details/rating.png" alt="" />
                    <button type="button" class="btn btn-default pull-right send-comment">
                        Gửi bình luận
                    </button>
                    <div id="notify_commnet"></div>
                </form>

            </div>
        </div>
        
    </div>
</div><!--/category-tab-->

<div class="recommended_items"><!--recommended_items-->
    <h2 class="title text-center">sản phẩm liên quan</h2>
    
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">	

            @foreach ($relate as $key =>$lienquan)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{asset('upload/product/' .$lienquan-> product_image)}}" alt="error" />
                                <h2>$ {{$lienquan -> product_price}}</h2>
                                <p>{{$lienquan -> product_name}}</p>
                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
        		
    </div>
</div><!--/recommended_items-->

@endsection
