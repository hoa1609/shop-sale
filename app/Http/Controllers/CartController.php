<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function save_cart (Request $request){
        $productId = $request -> producid_hidden;
        $quantity = $request -> qty;
        $product_info = DB::table('tbl_product')->where('product_id',$productId)->first();
     
        $data['id'] = $product_info->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['options']['image'] = $product_info->product_image;
        Cart::add($data);
        // Cart::destroy();
        return redirect() ->route('show-cart');
    }

    public function show_cart(){
        $cate_product = DB::table('tbl_cate_product')->where('category_status', '0')->orderBy('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '0')->orderBy('brand_id','desc')->get();

        return view('Pages.cart.show-cart')->with('category',$cate_product)->with('brand',$brand_product);
    }

    public function delete_cart($rowId){
        Cart::remove($rowId);
        return redirect() ->route('show-cart');
    }

    public function update_cart_quantity(Request $request){
        $rowId = $request -> rowId_cart;
        $qty = $request -> cart_quantity;
        Cart::update($rowId,$qty);
        return redirect() ->route('show-cart');

    }
}   