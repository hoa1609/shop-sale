<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BrandController extends Controller
{
    public function add_brand_product () {
        return view('BrandProduct.add-brand-product');
    }
    
    public function all_brand_product () {
       $all_brand_product = DB::table('tbl_brand') ->get();
       $manager_brand_product = view('BrandProduct.all-brand-product') ->with('all_brand_product',$all_brand_product);
       return view('admin-layout')->with('BrandProduct.all-brand-product', $manager_brand_product);
    }

    public function save_brand_product (Request $request) {
        $data = array();
        $data ['brand_name'] = $request -> brand_product_name;
        $data ['brand_desc'] = $request -> brand_product_desc;
        $data ['brand_status'] = $request -> brand_product_status;

        DB::table('tbl_brand') ->insert($data);
        return redirect()->route('add-brand-product') ->with('success', 'Thêm danh mục thành công.');
    }

    public function unactive_brand_product ($band_pro_id) {
        DB::table('tbl_brand') ->where('brand_id', $band_pro_id) ->update(['brand_status'=>1]);
        return redirect() ->route('all-brand-product') ->with('error', 'Ẩn thành công.');
    }
    public function active_brand_product ($band_pro_id) {
        DB::table('tbl_brand') ->where('brand_id', $band_pro_id) ->update(['brand_status'=>0]);
        return redirect() ->route('all-brand-product') ->with('success', 'Kích hoạt thành công.');
    }

    public function edit_brand_product_form($band_pro_id) {
        $edit_brand_product = DB::table('tbl_brand')->where('brand_id', $band_pro_id)->first();

        return view('BrandProduct.edit-brand-product', compact('edit_brand_product'));
    }
    
    public function update_brand_product(Request $request, $band_pro_id) {
        $data = array(
            'brand_name' => $request->input('brand_product_name'),
            'brand_desc' => $request->input('brand_product_desc')
        );

        DB::table('tbl_brand')->where('brand_id', $band_pro_id)->update($data);
        return redirect()->route('all-brand-product')->with('success', 'Danh mục đã được cập nhật thành công.');
    }

    public function delete_brand_product($band_pro_id) {
        DB::table('tbl_brand')->where('brand_id', $band_pro_id)->delete();
        return redirect()->route('all-brand-product')->with('success', 'Danh mục đã được xóa thành công.');
    }
    
    

}
