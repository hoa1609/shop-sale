@extends('layout')
@section('content')

<div class="container">
    <div class="register-req">
        <p>Vui lòng đăng nhập để dễ dàng thanh toán sản phẩm!</p>
    </div><!--/register-req-->

    <div class="shopper-informations">
        <div class="row">
            <div class="col-sm-12">
                <div class="shopper-info">
                    <p>Thông tin vận chuyển</p>
                    <form action="{{ route('save-checkout-customer')}}" method="POST">
                        @csrf
                        <input type="text"  name="shipping_name" placeholder="Nhập tên">
                        <input type="text" name="shipping_email" placeholder="Nhập email">
                        <input type="text"  name="shipping_phone" placeholder="Nhập sdt">
                        <input type="text"  name="shipping_address" placeholder="nhap dia chi">
                        <textarea           name="shipping_note"  placeholder="Ghi lai ghi chu" rows="16"></textarea>
                        <input type="submit" value="gui" name="send_order" class="btn btn-primary btn-sm">
                    </form>
                </div>
            </div>
           
            <div class="col-sm-4">
                <div class="order-message">
                    <p>Ghi chú gửi hàng</p>
                </div>	
            </div>					
        </div>
    </div>
   

   
    <div class="payment-options">
            <span>
                <label><input type="checkbox"> Direct Bank Transfer</label>
            </span>
            <span>
                <label><input type="checkbox"> Check Payment</label>
            </span>
            <span>
                <label><input type="checkbox"> Paypal</label>
            </span>
        </div>
</div>

@endsection
