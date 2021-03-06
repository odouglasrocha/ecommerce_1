<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\User\CartPageController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\StripeController;
use App\Http\Controllers\User\CashController;
use App\Http\Controllers\User\AllUserController;
use App\Http\Controllers\User\ReviewController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\ShippingAreaController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ReturnController;
use App\Http\Controllers\Backend\SiteSettingController;
use App\Http\Controllers\Backend\AdminUserController;
use App\Http\Controllers\Frontend\HomeBlogController;
use App\Models\User;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});






Route::middleware(['auth:admin'])->group(function () {

    Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
        return view('admin.index'); })->name('dashboard')->middleware('auth:admin');

    // ADmin Routes
    
    Route::get('/admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');
    Route::get('/admin/profile/edit', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');
    Route::post('/admin/profile/store', [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminProfileController::class, 'AdminChangePass'])->name('admin.change.password');
    Route::post('/update/change/password', [AdminProfileController::class, 'AdminUpdateChangePass'])->name('update.change.password');
    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
    });

// Admin Brand All Routes
Route::prefix('brand')->group(function(){
    Route::get('/view', [BrandController::class, 'BrandView'])->name('all.brand');
    Route::post('/store', [BrandController::class, 'BrandStore'])->name('brand.store');
    Route::get('/edit/{id}', [BrandController::class, 'BrandEdit'])->name('brand.edit');
    Route::post('/update', [BrandController::class, 'BrandUpdate'])->name('brand.update');
    Route::get('/delete/{id}', [BrandController::class, 'BrandDelete'])->name('brand.delete');
});

// Admin Category All Routes
Route::prefix('category')->group(function(){
    Route::get('/view', [CategoryController::class, 'CategoryView'])->name('all.category');
    Route::post('/store', [CategoryController::class, 'CategoryStore'])->name('category.store');
    Route::get('/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category.edit');
    Route::post('/update', [CategoryController::class, 'CategoryUpdate'])->name('category.update');
    Route::get('/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category.delete');


// Admin SubCategory All Routes

    Route::get('sub/view', [SubCategoryController::class, 'SubCategoryView'])->name('all.subcategory');
    Route::post('sub/store', [SubCategoryController::class, 'SubCategoryStore'])->name('subcategory.store');
    Route::get('sub/edit/{id}', [SubCategoryController::class, 'SubCategoryEdit'])->name('subcategory.edit');
    Route::post('sub/update', [SubCategoryController::class, 'SubCategoryUpdate'])->name('subcategory.update');
    Route::get('sub/delete/{id}', [SubCategoryController::class, 'SubCategoryDelete'])->name('subcategory.delete');


//Admin SubSubCategory All Routes
    Route::get('/sub/sub/view', [SubCategoryController::class, 'SubSubCategoryView'])->name('all.subsubcategory'); 
    Route::get('/subcategory/ajax/{category_id}', [SubCategoryController::class, 'GetSubCategory']); 
    Route::get('/sub-subcategory/ajax/{subcategory_id}', [SubCategoryController::class, 'GetSubSubCategory']); 
    Route::post('sub/sub/store', [SubCategoryController::class, 'SubSubCategoryStore'])->name('subsubcategory.store');
    Route::get('sub/sub/edit/{id}', [SubCategoryController::class, 'SubSubCategoryEdit'])->name('subsubcategory.edit');
    Route::post('sub/update', [SubCategoryController::class, 'SubSubCategoryUpdate'])->name('subsubcategory.update');
    Route::get('sub/sub/delete/{id}', [SubCategoryController::class, 'SUbSubCategoryDelete'])->name('subsubcategory.delete');

});

// Admin Products All Routes
Route::prefix('product')->group(function(){
    Route::get('/add', [ProductController::class, 'AddProduct'])->name('add-product');
    Route::post('/store', [ProductController::class, 'StoreProduct'])->name('product-store');
    Route::get('/manage', [ProductController::class, 'ManageProduct'])->name('manage-product');
    Route::get('/edit/{id}', [ProductController::class, 'EditProduct'])->name('product.edit');
    Route::post('/data/update', [ProductController::class, 'UpdateProductData'])->name('product-update');
    Route::post('/image/update', [ProductController::class, 'MultiImgUpdate'])->name('update-product-image');
    Route::post('/thumbnil/update', [ProductController::class, 'ThumbnilImgUpdate'])->name('update-product-thumbnil');
    Route::get('/multiimg/delete/{id}', [ProductController::class, 'MultiImgDelete'])->name('product.multiimg.delete');
    Route::get('/active/{id}', [ProductController::class, 'ProductInActive'])->name('product.inactive');
    Route::get('/inactive/{id}', [ProductController::class, 'ProductActive'])->name('product.active');
    Route::get('/delete/{id}', [ProductController::class, 'ProductDelete'])->name('product.delete');
});


// Admin Slider All Routes
Route::prefix('slider')->group(function(){
    Route::get('/view', [SliderController::class, 'SliderView'])->name('manage-slider');
    Route::post('/store', [SliderController::class, 'SliderStore'])->name('slider.store');
    Route::get('/edit/{id}', [SliderController::class, 'SliderEdit'])->name('slider.edit');
    Route::post('/update', [SliderController::class, 'SliderUpdate'])->name('slider.update');
    Route::get('/delete/{id}', [SliderController::class, 'SliderDelete'])->name('slider.delete');
    Route::get('/active/{id}', [SliderController::class, 'SliderInActive'])->name('slider.inactive');
    Route::get('/inactive/{id}', [SliderController::class, 'SliderActive'])->name('slider.active');
});
    

// User Routes
Route::get('/', [IndexController::class, 'Index']);
Route::get('/user/profile', [IndexController::class, 'UserProfile'])->name('user.profile');
Route::post('/user/profile', [IndexController::class, 'UserProfile'])->name('user.profile');
Route::post('/user/profile/store', [IndexController::class, 'UserProfileStore'])->name('user.profile.store');
Route::get('/user/change/password', [IndexController::class, 'UserChangePass'])->name('change.password');
Route::post('/user/password/update', [IndexController::class, 'UserPassUpdate'])->name('user.password.update');
Route::get('/user/logout', [IndexController::class, 'UserLogout'])->name('user.logout');


Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    $id=Auth::user()->id;
    $user=User::find($id);
    return view('dashboard',compact('user'));
})->name('dashboard');




////////////////Frontend All Routes////////////////
///////////////MultiLanguage Routes////////
Route::get('/language/english', [LanguageController::class, 'English'])->name('english.language');
Route::get('/language/hindi', [LanguageController::class, 'Hindi'])->name('hindi.language');

///////////////Frontend Product Detail Routes////////
Route::get('/product/details/{id}/{slug}', [IndexController::class, 'ProductDetails']);
// Frontend Product Tags Page
Route::get('/product/tag/{tag}', [IndexController::class, 'TagWiseProduct']);

// Frontend Subcategory Wise Data
Route::get('/subcategory/product/{subcat_id}/{slug}', [IndexController::class, 'SubCatWiseProduct']);

// Frontend SubSubcategory Wise Data
Route::get('/subsubcategory/product/{subsubcat_id}/{slug}', [IndexController::class, 'SubSubCatWiseProduct']);


// Frontend Product View modal ajax Data
Route::get('/product/view/modal/{id}', [IndexController::class, 'ProductView_ajax']);


// Add To Cart Data
Route::post('/cart/data/store/{id}', [CartController::class, 'AddToCart']);


// Add To MiniCart 
Route::get('/product/mini/cart/', [CartController::class, 'AddMiniCart']);

// Delete Product from MiniCart 
Route::get('/minicart/product-delete/{rowId}', [CartController::class, 'DelMiniCart']);

// Add to Wishlist
Route::post('/add-to-wishlist/{product_id}', [CartController::class, 'AddToWishlist']);



// ////////////////////////--------User Must Login----------//////////////////////////////
Route::group(['prefix'=>'user','middleware'=>['user','auth'],'namespace'=>'User'],function(){

        // wishlist page
        Route::get('/wishlist', [WishlistController::class, 'ViewWishList'])->name('wishlist');
        Route::get('/get-wishlist-product', [WishlistController::class, 'GetWishListProduct']);
        Route::get('/wishlist-delete/{id}', [WishlistController::class, 'DeleteWishListProduct']);
        Route::post('/stripe/order', [StripeController::class, 'StripeOrder'])->name('stripe.order');
        Route::post('/cash/order', [CashController::class, 'CashOrder'])->name('cash.order');
        
        Route::get('/my/orders', [AllUserController::class, 'MyOrder'])->name('my.orders');
        Route::get('/order-details/{order_id}', [AllUserController::class, 'OrderDetails']);
        Route::get('/invoice_download/{order_id}', [AllUserController::class, 'InvoiceDownload']);
        Route::post('/return/order/{order_id}', [AllUserController::class, 'ReturnOrder'])->name('return.order');
        Route::get('/return/orders/list', [AllUserController::class, 'ReturnOrdersList'])->name('return.orders.list');
        Route::get('/canceled/orders', [AllUserController::class, 'CanceledOrders'])->name('canceled.orders');

        ///////Order Tracking Route //////
        Route::get('/order/track', [AllUserController::class, 'OrderTracking'])->name('order.tracking');
});


// Cart Page
Route::get('/cart', [CartPageController::class, 'MyCart'])->name('cart');
Route::get('/user/get-cart-product', [CartPageController::class, 'GetCartProduct']);
Route::get('/user/cart-delete/{rowId}', [CartPageController::class, 'DeleteCartProduct']);
Route::get('/cart-increment/{rowId}', [CartPageController::class, 'CartIncrement']);
Route::get('/cart-decrement/{rowId}', [CartPageController::class, 'CartDecrement']);


// Admin Coupon All Routes
Route::prefix('coupons')->group(function(){
    Route::get('/view', [CouponController::class, 'CouponView'])->name('manage-coupon');
    Route::post('/store', [CouponController::class, 'CouponStore'])->name('coupon.store');
    Route::get('/edit/{id}', [CouponController::class, 'CouponEdit'])->name('coupon.edit');
    Route::post('/update', [CouponController::class, 'CouponUpdate'])->name('coupon.update');
    Route::get('/delete/{id}', [CouponController::class, 'CouponDelete'])->name('coupon.delete');    
});

// Admin Shipping All Routes
Route::prefix('shipping')->group(function(){
    // Admin Division Routes
    Route::get('/division/view', [ShippingAreaController::class, 'DivisionView'])->name('manage-division');
    Route::post('/division/store', [ShippingAreaController::class, 'DivisionStore'])->name('division.store');
    Route::get('/division/edit/{id}', [ShippingAreaController::class, 'DivisionEdit'])->name('division.edit');
    Route::post('/division/update', [ShippingAreaController::class, 'DivisionUpdate'])->name('division.update');
    Route::get('/division/delete/{id}', [ShippingAreaController::class, 'DivisionDelete'])->name('division.delete');    
    // Admin district routes
    Route::get('/district/view', [ShippingAreaController::class, 'DistrictView'])->name('manage-district');
    Route::post('/district/store', [ShippingAreaController::class, 'DistrictStore'])->name('district.store');
    Route::get('/district/edit/{id}', [ShippingAreaController::class, 'DistrictEdit'])->name('district.edit');
    Route::post('/district/update', [ShippingAreaController::class, 'DistrictUpdate'])->name('district.update');
    Route::get('/district/delete/{id}', [ShippingAreaController::class, 'DistrictDelete'])->name('district.delete');    
     // Admin state routes
     Route::get('/state/view', [ShippingAreaController::class, 'StateView'])->name('manage-state');
     Route::post('/state/store', [ShippingAreaController::class, 'StateStore'])->name('state.store');
     Route::get('/state/edit/{id}', [ShippingAreaController::class, 'StateEdit'])->name('state.edit');
     Route::post('/state/update/{id}', [ShippingAreaController::class, 'StateUpdate'])->name('state.update');
     Route::get('/state/delete/{id}', [ShippingAreaController::class, 'StateDelete'])->name('state.delete');    
});

// Frontend Apply Coupon
Route::post('/apply-coupon', [CartController::class, 'ApplyCoupon']);   

// Frontend  Coupon CAlculation
Route::get('/coupon-calculation', [CartController::class, 'CouponCalculation']);  

// Frontend  Coupon Remove
Route::get('/coupon-remove', [CartController::class, 'CouponRemove']);  

// Frontend  Checkout 
Route::get('/checkout', [CartController::class, 'CheckoutCreate'])->name('checkout');  

// Frontend  Checkout district ajax dropdown 
Route::get('/district-get/ajax/{division_id}', [CheckoutController::class, 'DistrictGetAjax']);  

// Frontend  Checkout state ajax dropdown 
Route::get('/state-get/ajax/{district_id}', [CheckoutController::class, 'StateGetAjax']);

// Frontend  Checkout store
Route::post('/checkout/store', [CheckoutController::class, 'CheckoutStore'])->name('checkout.store');


// Admin Orders All Routes
Route::prefix('orders')->group(function(){
    Route::get('/pending/orders', [OrderController::class, 'PendingOrders'])->name('pending-orders');
    Route::get('/pending/orders/details/{order_id}', [OrderController::class, 'PendingOrdersDetails'])->name('pending.orders.details');
    Route::get('/confirmed/orders', [OrderController::class, 'ConfirmedOrders'])->name('confirmed-orders');
    Route::get('/processing/orders', [OrderController::class, 'ProcessingOrders'])->name('processing-orders');
    Route::get('/picked/orders', [OrderController::class, 'PickedOrders'])->name('picked-orders');
    Route::get('/shipped/orders', [OrderController::class, 'ShippedOrders'])->name('shipped-orders');
    Route::get('/delivered/orders', [OrderController::class, 'DeliveredOrders'])->name('delivered-orders');
    Route::get('/canceled/orders', [OrderController::class, 'CanceledOrders'])->name('canceled-orders');
    // Change or update status
    Route::get('/pending/confirm/{order_id}', [OrderController::class, 'PendingConfirm'])->name('pending-confirm');
    Route::get('/confirm/processing/{order_id}', [OrderController::class, 'ConfirmToProcessing'])->name('confirm-processing');
    Route::get('/processing/picked/{order_id}', [OrderController::class, 'ProcessingToPicked'])->name('processing-picked');
    Route::get('/picked/shipped/{order_id}', [OrderController::class, 'PickedToShipped'])->name('picked-shipped');
    Route::get('/shipped/delivered/{order_id}', [OrderController::class, 'ShippedToDeliver'])->name('shipped-delivered');
    // Route::get('/canceled/{order_id}', [OrderController::class, 'CancelOrder'])->name('cancel');
  
    Route::get('/invoice/download/{order_id}', [OrderController::class, 'AdminInvoiceDownload'])->name('invoice.download');
});

// Admin Reports All Routes
Route::prefix('reports')->group(function(){
    Route::get('/view', [ReportController::class, 'AllReports'])->name('all-reports');
    Route::post('/search/by/date', [ReportController::class, 'ReportByDate'])->name('search-by-date');
    Route::post('/search/by/month', [ReportController::class, 'ReportByMonth'])->name('search-by-month');
    Route::post('/search/by/year', [ReportController::class, 'ReportByYear'])->name('search-by-year');
    
});

// Admin All User Routes
Route::prefix('allusers')->group(function(){
    Route::get('/view', [AdminProfileController::class, 'AllUsers'])->name('all-users');

    
});

// Admin Blog Routes
Route::prefix('blog')->group(function(){
    Route::get('/category', [BlogController::class, 'BlogCategory'])->name('blog.category');
    Route::post('/store', [BlogController::class, 'BlogCategoryStore'])->name('blog_category.store');
    Route::get('/category/edit/{id}', [BlogController::class, 'BlogCategoryEdit'])->name('blog_category.edit');
    Route::post('/update', [BlogController::class, 'BlogCategoryUpdate'])->name('blog_category.update');
    Route::get('/delete/{id}', [BlogController::class, 'BlogCategoryDelete'])->name('blog_category.delete');

    // Admin view blog 
    Route::get('/view/post', [BlogController::class, 'ViewBlogPost'])->name('view.blog_post');
    Route::get('/add/post', [BlogController::class, 'AddBlogPost'])->name('add.blog_post');
    Route::post('/post/store', [BlogController::class, 'StoreBlogPost'])->name('blog-store');
    Route::get('/post/edit/{id}', [BlogController::class, 'BlogPostEdit'])->name('blog_post.edit');
    Route::get('/post/delete/{id}', [BlogController::class, 'BlogPostDelete'])->name('blog_post.delete');
    
});

// Frontend Blog
Route::get('/blog', [HomeBlogController::class, 'AddBlogPost'])->name('home.blog');
Route::get('/blog/details/{id}', [HomeBlogController::class, 'BlogPostDetail'])->name('blog.details');
Route::get('blog/category/post/{category_id}', [HomeBlogController::class, 'HomeBlogPostCategory']);


// Admin Setting Routes
Route::prefix('setting')->group(function(){
    Route::get('/setting', [SiteSettingController::class, 'SiteSetting'])->name('site.setting');
    Route::post('site/setting/update', [SiteSettingController::class, 'SiteSettingUpdate'])->name('update.setting');
    Route::get('seo/setting', [SiteSettingController::class, 'SeoSetting'])->name('seo.setting');
    Route::post('seo/setting/update', [SiteSettingController::class, 'SeoSettingUpdate'])->name('update.seo_setting');
    
});

// Admin Return Order Routes
Route::prefix('return')->group(function(){
    Route::get('/admin/request', [ReturnController::class, 'ReturnRequest'])->name('return.request');
    Route::get('/admin/return/approve/{order_id}', [ReturnController::class, 'ReturnRequestApprove'])->name('return.approve');
    Route::get('/admin/all/request', [ReturnController::class, 'ReturnAllRequest'])->name('all.request');

    
});

// Frontend Product Review 
    Route::post('/review/store', [ReviewController::class, 'ReviewStore'])->name('review.store');
// Admin Manage Review Routes
Route::prefix('review')->group(function(){
    Route::get('/pending', [ReviewController::class, 'PendingReview'])->name('pending.review');
    Route::get('/publish', [ReviewController::class, 'PublishReview'])->name('publish.review');
    Route::get('/admin/approve/{id}', [ReviewController::class, 'ReviewApprove'])->name('review.approve');
    Route::get('/delete/{id}', [ReviewController::class, 'DeleteReview'])->name('delete.review');

    
});

// Frontend Blog Review 
Route::post('/blog-review/store', [ReviewController::class, 'BlogReviewStore'])->name('blog_review.store');
// Admin Manage Blog Review Routes
Route::prefix('blog_review')->group(function(){
    Route::get('/pending', [ReviewController::class, 'BlogPendingReview'])->name('blog_pending.review');
    Route::get('/publish', [ReviewController::class, 'BlogPublishReview'])->name('blog_publish.review');
    Route::get('/admin/approve/{id}', [ReviewController::class, 'BlogReviewApprove'])->name('blog_review.approve');
    Route::get('/delete/{id}', [ReviewController::class, 'BlogDeleteReview'])->name('delete.blog_review');

    
});

// Admin Manage Stock Routes
Route::prefix('stock')->group(function(){
    Route::get('/product', [ProductController::class, 'ProductStock'])->name('product-stock');
    
});


// Admin User Role Routes
Route::prefix('adminuserrole')->group(function(){
    Route::get('/all', [AdminUserController::class, 'AllAdminRole'])->name('all-admin-user');
    Route::get('/add', [AdminUserController::class, 'AddAdminRole'])->name('add-admin');
    Route::post('/store', [AdminUserController::class, 'StoreAdminRole'])->name('admin-user-store');
    Route::get('/edit/{id}', [AdminUserController::class, 'EditAdminRole'])->name('edit.admin.user');
    Route::post('/update', [AdminUserController::class, 'UpdateAdminRole'])->name('admin.user.update');
    Route::get('/delete/{id}', [AdminUserController::class, 'DeleteAdminRole'])->name('delete.admin.user');

    
});

// //////////Product Search Route
Route::post('/product/search', [IndexController::class, 'ProductSearch'])->name('product.search');
Route::post('search-product', [IndexController::class, 'ProductAdvanceSearch']);