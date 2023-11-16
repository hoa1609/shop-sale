@extends('layout')
@section('content')

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                <li><a href="">Trang chủ</a></li>
                <li class="active">Giỏ hàng</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">

                <?php 
                $content =Cart::content();
                ?>
                
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Sản phẩm</td>
                            <td class="description"></td>
                            <td class="price">Giá </td>
                            <td class="quantity">Số lượng</td>
                            <td class="total">Tổng tiền</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($content as $v_content)
                            <tr>
                                <td class="cart_product">
                                    <a href=""><img src="{{ asset('upload/product/' . $v_content->  options -> image ) }}" alt="" width="70px"></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href="">{{$v_content-> name}}</a></h4>
                                    <p>Web ID: 1089772</p>
                                </td>
                                <td class="cart_price">
                                    <p>{{$v_content-> price}} VND</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">

                                    <form action="{{route('update-cart-quantity')}}" method="POST">
                                        @csrf
                                        <input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content-> qty}}" >
                                        <input type="hidden" value="{{$v_content-> rowId}}" name="rowId_cart" class="form-control">
                                        <input type="submit" value="cập nhật" name="update_qty" class="btn-sm btn btn-default">
                                    </form>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">
                                        <?php
                                            $subtotal = $v_content-> price * $v_content-> qty;
                                            echo $subtotal .' VND';
                                            $tax = $subtotal * 2 /100;
                                        ?>
                                    </p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="{{route('delete-to-cart', $v_content-> rowId)}}">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section> 
    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
            </div>
            <div class="row">
                
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Tổng tiền <span>{{Cart::subtotal(0).' '.'VND'}}</span></li>
                            <li>Thuế<span>{{Cart::tax()}}</span></li>
                            <li>Phí vận chuyển <span>Free</span></li>
                            <li>Thành tiền <span> {{Cart::total(0)}} VND</span></li>
                        </ul>
                        
                        <?php 
								$customer_id = Session::get('customer_id');
								if($customer_id != null){
									?>
									<a class="btn btn-default check_out" href="{{ route('checkout')}}">Thanh toán</a>

								<?php
								}else {
									?>
									<a class="btn btn-default check_out" href="{{ route('login-checkout')}}">Thanh toán</a>
								<?php
								      }
								?>


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
