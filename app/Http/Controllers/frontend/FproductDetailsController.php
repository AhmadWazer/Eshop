<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class FproductDetailsController extends Controller
{
    public function index($id)
    {
        $data = db::table('product')
        ->join('brand','brand.brand_id','=','product.brand_id')
        ->join('category','category.ctgry_id','=','product.ctgry_id')
        ->join('subcategory','subcategory.subc_id','=','product.subc_id')
        ->where('product.product_id',$id)
        ->get();
        // $brand = db::table('brand')->get();
        // $products = db::table('category')->get();
        // $subc =db::table('subcategory')->get();

        return view('frontend.productDetails')->with(compact('data'));
    }
    public function back()
    {
        return redirect()->back();
    }
}
