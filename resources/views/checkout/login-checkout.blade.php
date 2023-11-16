@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
            <div class="login-form"><!--login form-->
                <h2>Đăng nhập</h2>
                <form action="{{ route('login')}}">
                    @csrf
                    <input type="text" 
                            name="email_account" 
                            placeholder="Email" 
                            />
                    <input type="password" 
                            name="password_account" 
                            placeholder="Mật khẩu" 
                    />
                    <span>
                        <input type="checkbox" class="checkbox"> 
                      giữ khi đăng nhập 
                    </span>
                    <button type="submit" class="btn btn-default">đăng nhập</button>
                </form>
            </div><!--/login form-->
        </div>
        <div class="col-sm-1">
            <h2 class="or">OR</h2>
        </div>
        <div class="col-sm-4">
            <div class="signup-form"><!--sign up form-->
                <h2>Đăng kí</h2>
                <form action="{{ route('add-customer')}}" method="POST">
                    @csrf
                    <input type="text" name="customer_name" placeholder="tên"/>
                    <input type="email" name="customer_email" placeholder="email"/>
                    <input type="password" name="customer_password" placeholder="Mật khẩu"/>
                    <button type="submit" class="btn btn-default">đăng kí</button>
                </form>
            </div><!--/sign up form-->
        </div>
    </div>
</div>
@endsection
