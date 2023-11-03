<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Comment;


class ProductController extends Controller
{
    public function list_comment(){
        $comment = Comment::orderBy('comment_status','desc')->get();

        return view('comment.list-comment')->with(compact('comment'));
    }

    public function send_comment(Request $request){
        $product_id = $request->product_id;     
        $comment_name = $request->comment_name;     
        $comment_content = $request->comment_content;     
        $comment = new Comment();

        $comment->comment = $comment_content;
        $comment->comment_name = $comment_name;
        $comment->comment_product_id = $product_id;
        $comment->save();
    }

    // code get comment database
    // e đnag làm ở video33 e thấy cái code comment hay nên qua tới video145 
    public function load_comment(Request $request){
        $product_id = $request->product_id;                  // cái ni e ko pít lấy ở dâu
        $comment = Comment::where('comment_product_id', $product_id)->get();
        $output = '';
        foreach($comment as $key => $comm){
            $output .= '
            <div class="row style-comment">
                <div class="col-md-2">
                    <img width="60%" src="front-end/img/user.png" class="img img-responsive img-thumbnail" alt="">
                </div>
                <div class="col-md-10">
                    <p style="color: black;font-weight: bold"> @'.$comm->comment_name.'</p>
                    <p style="color:#363432;"> '.$comm->comment_date.'</p>
                    <p>'.$comm->comment.'</p>
                </div>
            </div>';
        }
        return $output;
    }
    // end code get comment database


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
        DB::table('tbl_product')->where('product_id', $pro_id)->update($data);
        return redirect()->route('all-product')->with('success', 'Cập nhật sản phẩm thành công.');
    }
    
    public function delete_product($pro_id) {
        DB::table('tbl_product')->where('product_id', $pro_id)->delete();
        return redirect()->route('all-product')->with('success', 'Danh mục đã được xóa thành công.');
    }



    //end admin 
    public function details_product($product_id) {
        $cate_product = DB::table('tbl_cate_product')->where('category_status', '0')->orderBy('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '0')->orderBy('brand_id','desc')->get();

        $details_product = DB::table('tbl_product')
        ->join('tbl_cate_product','tbl_cate_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('tbl_product.product_id',$product_id) ->get();

        foreach ($details_product as $key => $value) {  
            $category_id = $value -> category_id;
        }

        $related_product = DB::table('tbl_product')
        ->join('tbl_cate_product','tbl_cate_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('tbl_cate_product.category_id',$category_id)->whereNotIn('tbl_product.product_id',[$product_id]) ->get();


        return view('Pages.sanpham.show-detail')->with('category',$cate_product)
        ->with('brand',$brand_product)->with('details_product',$details_product)->with('relate',$related_product);

    }
    
}
