<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller{

    public function index() {
        $cate_product = DB::table('tbl_cate_product')->where('category_status', '0')->orderBy('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '0')->orderBy('brand_id','desc')->get();

        $all_product = DB::table('tbl_product')->where('product_status','0')->orderBy('product_id','desc')->limit(10)->get();
        return view('Pages.Home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product);
    }

    //SEARCH
    public function search(Request $request){
        $keyword = $request ->keyword_submit;

        $cate_product = DB::table('tbl_cate_product')->where('category_status', '0')->orderBy('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '0')->orderBy('brand_id','desc')->get();

        return view('Pages.Home')->with('category',$cate_product)->with('brand',$brand_product);

    }
}
