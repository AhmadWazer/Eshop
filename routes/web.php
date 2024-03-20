<?php

use Illuminate\Support\Facades\Route;
//fontend controller
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\Shop_GridController;
use App\Http\Controllers\Frontend\Blog_Single_SidebarController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\LoginController;
//product controller
use App\Http\Controllers\Frontend\FProductController;
use App\Http\Controllers\Frontend\FproductDetailsController;
//backend controller
use App\Http\Controllers\backend\FeatureCollectionController;
use App\Http\Controllers\backend\Homepage_headerController;
use App\Http\Controllers\backend\TrendingItemsController;
use App\Http\Controllers\backend\OnSaleController;
use App\Http\Controllers\backend\DealofdayController;
use App\Http\Controllers\backend\MiddlebanerController;
use App\Http\Controllers\backend\BestsellerController;
use App\Http\Controllers\backend\TopviewedController;
use App\Http\Controllers\backend\BlogController;
//customers controllers
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\OrderdetailsController;
//shop-grid
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\SubcategoryController;
use App\Http\Controllers\backend\ProductController;
//cart
use App\Http\Controllers\CProductController;
use App\Http\Controllers\CcartController;

use App\Http\Controllers\backend\AjaxController;

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
//frontend route
Route::get('/',[HomeController::class,'index']);
Route::get('/login',[LoginController::class,'index']);
// Route::get('/cart',[CartController::class,'index']);
//cartList
//cart route
Route::get('/cartp', [CartController::class, 'index'])->name('cart.list');
Route::post('/cartp', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
//cate
Route::get('/checkout',[CheckoutController::class,'index']);
Route::post('/checkout/save',[CheckoutController::class,'save']);

Route::get('get-all-session', function()
{
    $session = sesssion()->all();
    dd($session);
});

Route::get('/contact',[ContactController::class,'index']);
Route::get('/shop_grid',[Shop_GridController::class,'index']);
Route::get('/blog_single',[Blog_Single_SidebarController::class,'index']);

Route::get('/fproduct',[FProductController::class,'index']);
Route::get('/productDetails/{id}',[FproductDetailsController::class,'index'])->name('product.details');
//frontend route


//backend route
//Home Page Header
Route::get('/homepage_header',[Homepage_headerController::class,'index']);
Route::post('/homepage_header',[Homepage_headerController::class,'savehomepage_header']);
Route::get('/homepage_header/view',[Homepage_headerController::class,'viewhomepage_header']);
Route::get('/delete/{id}',[Homepage_headerController::class,'delete']);
Route::get('/edithomepage_header/{id}',[Homepage_headerController::class,'edit']);
Route::post('/update',[Homepage_headerController::class,'update']);

//Featured Collection
Route::get('/featuredcollection',[FeatureCollectionController::class,'index']);
Route::post('/addfeatured_collection',[FeatureCollectionController::class,'savefeatured_collection']);
Route::get('/featuredcollection/view',[FeatureCollectionController::class,'viewfeatured_collection']);
Route::get('/editfeaturedcollection/{id}',[FeatureCollectionController::class,'edit']);
Route::post('/updatefc',[FeatureCollectionController::class,'update']);
Route::get('/deletefeaturedcollection/{id}',[FeatureCollectionController::class,'delete']);

//Trending Items
Route::get('/addtrendingItem',[TrendingItemsController::class,'index']);
Route::post('/addtrendingItem/save',[TrendingItemsController::class,'save']);
Route::get('/addtrendingItem/view',[TrendingItemsController::class,'view']);
Route::get('/edittrendingItem/{id}',[TrendingItemsController::class,'edit']);
Route::get('/deleteT/{id}',[TrendingItemsController::class,'delete']);
Route::post('/updateT',[TrendingItemsController::class,'update']);

//On Sale
Route::get('/addonsale',[OnSaleController::class,'index']);
Route::post('/addonsale/save',[OnSaleController::class,'save']);
Route::get('/addonsale/view',[OnSaleController::class,'view']);
Route::get('/editonsale/{id}',[OnSaleController::class,'edit']);
Route::get('/deleteS/{id}',[OnSaleController::class,'delete']);
Route::post('/updateS',[OnSaleController::class,'update']);

//Deal Of Day
Route::get('/adddealofday',[DealofdayController::class,'index']);
Route::post('/adddealofday/save',[DealofdayController::class,'save']);
Route::get('/adddealofday/view',[DealofdayController::class,'view']);
Route::get('/editdealofday/{id}',[DealofdayController::class,'edit']);
Route::post('/updateD',[DealofdayController::class,'update']);
Route::get('/deleteD/{id}',[DealofdayController::class,'delete']);

//Middle banner  
Route::get('/addmiddlebaner',[MiddlebanerController::class,'index']);
Route::post('/addmiddlebaner/save',[MiddlebanerController::class,'save']);
Route::get('/addmiddlebaner/view',[MiddlebanerController::class,'view']);
Route::get('/deletemiddle/{id}',[MiddlebanerController::class,'delete']);


//Best Seller
Route::get('/addbestseller',[BestsellerController::class,'index']);
Route::post('/addbestseller/save',[BestsellerController::class,'save']);
Route::get('/addbestseller/view',[BestsellerController::class,'view']);
Route::get('/deletetseller/{id}',[BestsellerController::class,'delete']);

//Top viewed
Route::get('/addtopviewed',[TopviewedController::class,'index']);
Route::post('/addtopviewed/save',[TopviewedController::class,'save']);
Route::get('/addtopviewed/view',[TopviewedController::class,'view']);
Route::get('/deletetop/{id}',[TopviewedController::class,'delete']);


//Blog
Route::get('/addblog',[BlogController::class,'index']);
Route::post('/addblog/save',[BlogController::class,'save']);
Route::get('/addblog/view',[BlogController::class,'view']);
Route::get('/deleteblog/{id}',[BlogController::class,'delete']);

//Shop_grid
//brand
Route::get('/addbrand',[BrandController::class,'index']);
Route::post('/addbrand/save',[BrandController::class,'save']);
Route::get('/brand',[BrandController::class,'view']);
Route::get('/deletebrand/{id}',[BrandController::class,'delete']);
Route::get('/editbrand/{id}',[BrandController::class,'edit']);
Route::post('/updatebrand',[BrandController::class,'update']);
//Category
Route::get('/addcategory',[CategoryController::class,'index']);
Route::post('/addcategory/save',[CategoryController::class,'save']);
Route::get('/category',[CategoryController::class,'view']);
Route::get('/deletecategory/{id}',[CategoryController::class,'delete']);
Route::get('/editcategory/{id}',[CategoryController::class,'edit']);
Route::post('/updatecategory',[CategoryController::class,'update']);
//Subcategory
Route::get('/addsubcategory',[SubcategoryController::class,'index']);
Route::post('/addsubcategory/save',[SubcategoryController::class,'save']);
Route::get('/subcategory',[SubcategoryController::class,'view']);
Route::get('/deletecate/{id}',[SubcategoryController::class,'delete']);
Route::get('/editcate/{id}',[SubcategoryController::class,'edit']);
Route::post('/updatesubcate',[SubcategoryController::class,'update']);
//product
Route::get('/addproduct',[ProductController::class,'index']);
Route::post('/addproduct/save',[ProductController::class,'save']);
Route::get('/product',[ProductController::class,'view']);
Route::get('/deleteproduct/{id}',[ProductController::class,'delete']);
Route::get('/editproduct/{id}',[ProductController::class,'edit']);
Route::post('/update',[ProductController::class,'update']);

Route::get('/getSubcategories',[ProductController::class,'getSubcategories'])->name('get.subcategories');

Route::get('/customer',[CustomerController::class,'index']);
Route::get('/customer',[CustomerController::class,'view']);

Route::get('/orderdetail',[OrderdetailsController::class,'index']);
Route::get('/orderdetail/{id}',[OrderdetailsController::class,'view']);
//backend route
//cartList
//cart route
// Route::get('/c', [CProductController::class, 'productList'])->name('products.list');
// Route::get('/cartp', [CartController::class, 'index'])->name('cart.list');
// Route::post('/cartp', [CartController::class, 'addToCart'])->name('cart.store');
// Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
// Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
// Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
// //cate