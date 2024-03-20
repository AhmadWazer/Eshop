<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
   public function index()
   {
    $data = db::table('homepage_header')->get();
    $items = db::table('featured_collection')->get();
    $values = db::table('trending_items')->get();
    $onsale = db::table('on_sale')->get();
    $deal = db::table('dealofday')->get();
    $midel = db::table('middlebaner')->get();
    $best = db::table('bestseller')->get();
    $top = db::table('topviewed')->get();
    $blog = db::table('blog')->get();


    return view('frontend.index')->with(compact('data','items','values','onsale','deal','midel','best','top','blog'));
   }
}
