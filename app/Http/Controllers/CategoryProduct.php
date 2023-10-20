<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryProduct extends Controller
{
    public function add_category_product () {
        return view('cateProduct.add-category-product');
    }
    
    public function all_category_product () {
       $all_category_product = DB::table('tbl_cate_product') ->get();
       $manager_category_product = view('cateProduct.all-category-product') ->with('all_category_product',$all_category_product);
       return view('admin-layout')->with('cateProduct.all-category-product', $manager_category_product);
    }

    public function save_category_product (Request $request) {
        $data = array();
        $data ['category_name'] = $request -> category_product_name;
        $data ['category_desc'] = $request -> category_product_desc;
        $data ['category_status'] = $request -> category_product_status;

        DB::table('tbl_cate_product') ->insert($data);
        return redirect()->route('add-category-product') ->with('success', 'Thêm danh mục thành công.');
    }

    public function unactive_category_product ($cate_pro_id) {
        DB::table('tbl_cate_product') ->where('category_id', $cate_pro_id) ->update(['category_status'=>1]);
        return redirect() ->route('all-category-product') ->with('error', 'Ẩn thành công.');
    }
    public function active_category_product ($cate_pro_id) {
        DB::table('tbl_cate_product') ->where('category_id', $cate_pro_id) ->update(['category_status'=>0]);
        return redirect() ->route('all-category-product') ->with('success', 'KÍch hoạt thành công.');
    }

    public function edit_category_product_form($cate_pro_id) {
        $edit_category_product = DB::table('tbl_cate_product')->where('category_id', $cate_pro_id)->first();

        return view('cateProduct.edit-category-product', compact('edit_category_product'));
    }
    
    public function update_category_product(Request $request, $cate_pro_id) {
        $data = array(
            'category_name' => $request->input('category_product_name'),
            'category_desc' => $request->input('category_product_desc')
        );

        DB::table('tbl_cate_product')->where('category_id', $cate_pro_id)->update($data);
        return redirect()->route('all-category-product')->with('success', 'Danh mục đã được cập nhật thành công.');
    }

    public function delete_category_product($cate_pro_id) {
        DB::table('tbl_cate_product')->where('category_id', $cate_pro_id)->delete();
        return redirect()->route('all-category-product')->with('success', 'Danh mục đã được xóa thành công.');
    }
    
    

}
