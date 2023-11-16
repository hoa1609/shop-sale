<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller{

    public function login_checkout(){
        $cate_product = DB::table('tbl_cate_product')->where('category_status', '0')->orderBy('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '0')->orderBy('brand_id','desc')->get();

        return view('checkout.login-checkout')->with('category',$cate_product)->with('brand',$brand_product);
    }
    public function add_customer(Request $request){
        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['customer_password'] = md5($request->customer_password);

        $customer_id = DB::table('tbl_customer')->insertGetId($data);
        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$request->customer_name);
        
        return redirect()-> route('checkout');
    }
    public function checkout(){
        $cate_product = DB::table('tbl_cate_product')->where('category_status', '0')->orderBy('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '0')->orderBy('brand_id','desc')->get();

        return view('checkout.checkout')->with('category',$cate_product)->with('brand',$brand_product);
    }




    //SAVE CHECKOUT SHIPPING INFORMATION
    public function save_checkout_customer(Request $request){
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_note'] = $request->shipping_note;
        $data['shipping_address'] = $request->shipping_address;

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);
        Session::put('shipping_id',$shipping_id);
        
        return redirect()-> route('paymen');
    }

    public function paymen(){

    }

    public function logout_checkout(Request $request){

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()-> route('login-checkout');
    }

    //authtication login
    public function login(Request $request){
        $email = $request ->email_account;
        $password = md5($request ->password_account);
        $result = DB::table('tbl_customer')->where('customer_email',$email)->where('customer_password',$password)->first();

        if($result){
            Session::put('customer_id',$result->customer_id);
            return redirect()-> route('checkout');
        }else{
            return redirect()-> route('login-checkout');

        }

    }
}   
