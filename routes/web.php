<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;


/*  HOME */
Route::get('trang-chu', [HomeController::class,'index']);                                                
Route::get('/', [HomeController::class,'index']);       



/*  DANH MỤC TRANG CHỦ SẢN PHAM */
Route::get('danh-muc-san-pham/{category_id}', [CategoryProduct::class,'show_category_home'])->name('danh-muc-san-pham');                                                
Route::get('thuong-hieu-san-pham/{brand_id}', [BrandController::class,'show_brand_home'])->name('thuong-hieu-san-pham');                                                
Route::get('chi-tiet-san-pham/{product_id}', [ProductController::class,'details_product'])->name('chi-tiet-san-pham');                                                



/*  CATEGORY PRODUCT  */
Route::get('add-category-product', [CategoryProduct::class,'add_category_product'])->name('add-category-product');                                                
Route::get('all-category-product', [CategoryProduct::class,'all_category_product'])->name('all-category-product');                                               
Route::post('save-category-product', [CategoryProduct::class,'save_category_product'])->name('save-category-product');                                          
Route::get('edit-category-product/{cate_pro_id}', [CategoryProduct::class, 'edit_category_product_form'])->name('edit-category-product-form');
Route::post('update-category-product/{cate_pro_id}', [CategoryProduct::class, 'update_category_product'])->name('update-category-product');
Route::delete('delete-category-product/{cate_pro_id}', [CategoryProduct::class, 'delete_category_product'])->name('delete-category-product');
Route::get('unactive-category-product/{cate_pro_id}', [CategoryProduct::class,'unactive_category_product'])->name('unactive-category-product');                                        
Route::get('active-category-product/{cate_pro_id}', [CategoryProduct::class,'active_category_product'])->name('active-category-product');                                            



/*  BRAND PRODUCT  */
Route::prefix('brand-product')->group(function () {
    Route::get('add', [BrandController::class, 'add_brand_product'])->name('add-brand-product');
    Route::get('all', [BrandController::class, 'all_brand_product'])->name('all-brand-product');
    Route::post('save', [BrandController::class, 'save_brand_product'])->name('save-brand-product');
    Route::get('edit/{brand_pro_id}', [BrandController::class, 'edit_brand_product_form'])->name('edit-brand-product-form');
    Route::post('update/{brand_pro_id}', [BrandController::class, 'update_brand_product'])->name('update-brand-product');
    Route::delete('delete/{brand_pro_id}', [BrandController::class, 'delete_brand_product'])->name('delete-brand-product');
    Route::get('unactive/{brand_pro_id}', [BrandController::class, 'unactive_brand_product'])->name('unactive-brand-product');
    Route::get('active/{brand_pro_id}', [BrandController::class, 'active_brand_product'])->name('active-brand-product');
});



/* PRODUCT  */
Route::group(['prefix' => 'products'], function () {
    Route::get('add-product', [ProductController::class, 'add_product'])->name('add-product');
    Route::get('all-product', [ProductController::class, 'all_product'])->name('all-product');
    Route::post('save-product', [ProductController::class, 'save_product'])->name('save-product');
    Route::get('edit-product/{pro_id}', [ProductController::class, 'edit_product_form'])->name('edit-product-form');
    Route::post('update-product/{pro_id}', [ProductController::class, 'update_product'])->name('update-product');
    Route::delete('delete-product/{pro_id}', [ProductController::class, 'delete_product'])->name('delete-product');
    Route::get('unactive-product/{pro_id}', [ProductController::class, 'unactive_product'])->name('unactive-product');
    Route::get('active-product/{pro_id}', [ProductController::class, 'active_product'])->name('active-product');
    // gửi bình luận
    Route::get('list-comment', [ProductController::class, 'list_comment'])->name('list_comment');

    Route::post('load_comment', [ProductController::class, 'load_comment'])->name('load_comment');
    Route::post('send_comment', [ProductController::class, 'send_comment'])->name('send_comment');
}); 




/*  CART  */
Route::post('save-cart', [CartController::class, 'save_cart'])->name('save-cart');










/*  USER  */
Route::group(['prefix' =>'user'], function () { 
    Route::get('user-admin-login', [UserController::class,'index'])->name('user.index');                                         //name user.index để lấy route kết nối khi click
    Route::post('them-user', [UserController::class, 'addUsers'])->name('addUser');                                            // xử lí thêm user 
    Route::get('edit-user/{id}', [UserController::class,'editUser'])->name('user.edit');                                      //đưa dữ liệu ra để edit(lấy $id, $user)
    Route::put('update-user/{id}', [UserController::class, 'updateUser'])->name('user.update');                              //edit
    Route::delete('delete-user/{id}', [UserController::class, 'destroy'])->name('user.delete');                             //xoá
    Route::get('them-nguoi-dung', function () {                                                               
            return view('user.moreUser');
            })->name('moreUser');    
});
  

/* ADMIN LOGIN */
Route::get('admin', [AdminController::class, 'index'])->name('auth.admin');                                         //login 
Route::get('dashboard', [AdminController::class, 'show_dashboard'])->name('auth.dashboard');                        // page index quan li
Route::post('admin-dashboard', [AdminController::class, 'dashboard'])->name('auth.login');                   // xử lí input email và pass login  + Requests/authRequest.php
Route::get('logout', [AdminController::class, 'logout'])->name('logout');     
