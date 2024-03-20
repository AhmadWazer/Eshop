<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Shop_GridController extends Controller
{
    public function index()
    {
        $data = db::table('category')->get();
        $brand = db::table('brand')->get();
        $product = db::table('product')->get();

        return view('frontend.shop-grid')->with(compact('data','brand','product'));
    }
}
