<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function add_product () {
        $cate_product = DB::table('tbl_cate_product')->orderBy('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderBy('brand_id','desc')->get();

        return view('product.add-product')->with('cate_product', $cate_product)->with('brand_product',$brand_product);
    }
    
    public function all_product () {    
       $all_product = DB::table('tbl_product')
       ->join('tbl_cate_product','tbl_cate_product.category_id','=','tbl_product.category_id')
       ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
       ->orderBy('tbl_product.product_id','desc') ->get();

       $manager_product = view('product.all-product') ->with('all_product',$all_product);
       return view('admin-layout')->with('product.all-product', $manager_product);
    }

    public function save_product(Request $request) {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['product_status'] = $request->product_status;
    
        $get_image = $request->file('product_image');
        if ($get_image) {
            $get_name_image = $get_image ->getClientOriginalName();
            $name_image =current(explode('.',$get_name_image));
            $new_image = $name_image.Str::random(5) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('upload/product', $new_image); // Lưu hình ảnh vào thư mục upload/product
            $data['product_image'] = $new_image;
    
            DB::table('tbl_product')->insert($data);
            return redirect()->route('add-product')->with('success', 'Thêm ảnh thành công thành công.');
        }
        $data['product_image'] = '';
        DB::table('tbl_product')->insert($data);
        return redirect()->route('add-product')->with('success', 'Thêm sản phẩm thành công.');
    }

    public function unactive_product ($pro_id) {
        DB::table('tbl_product') ->where('product_id', $pro_id) ->update(['product_status'=>1]);
        return redirect() ->route('all-product') ->with('error', 'Ẩn thành công.');}
    public function active_product ($pro_id) {
        DB::table('tbl_product') ->where('product_id', $pro_id) ->update(['product_status'=>0]);
        return redirect() ->route('all-product') ->with('success', 'Kích hoạt thành công.');}



    public function edit_product_form($pro_id) {
        $cate_product = DB::table('tbl_cate_product')->orderBy('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderBy('brand_id','desc')->get();
        $edit_product = DB::table('tbl_product')->where('product_id', $pro_id)->first();

        return view('product.edit-product', compact('edit_product', 'cate_product', 'brand_product'));
    }
    
    public function update_product(Request $request, $pro_id) {
        $data = array(
            'product_name' => $request->input('product_name'),
            'product_price' => $request->input('product_price'),
            'product_desc' => $request->input('product_desc'),
            'product_content' => $request->input('product_content'),
            'category_id' => $request->input('product_cate'),
            'brand_id' => $request->input('product_brand'),
            'product_status' => $request->input('product_status'),
        );
    
        $get_image = $request->file('product_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . Str::random(5) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('upload/product', $new_image); 
            $data['product_image'] = $new_image;

            DB::table('tbl_product')->where('product_id', $pro_id)->update($data);
            return redirect()->route('all-product')->with('success', 'Cập nhật sản phẩm thành công.');
        }
        DB::table('tbl_product')->update($data);
        return redirect()->route('all-product')->with('success', 'Cập nhật sản phẩm thành công.');
    }
    
    
    public function delete_product($pro_id) {
        DB::table('tbl_product')->where('product_id', $pro_id)->delete();
        return redirect()->route('all-product')->with('success', 'Danh mục đã được xóa thành công.');
    }
    
}
