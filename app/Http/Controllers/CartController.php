<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function save_cart (Request $request){

        $productId = $request -> producid_hidden;
        $quantity = $request -> qty;

        $data = DB::table('tbl_product')->where('product_id',$productId)->get();
      
    }
}   
