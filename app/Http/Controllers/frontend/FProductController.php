<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductModel;

class FProductController extends Controller
{
    public function index()
    {
        $product = ProductModel::all();
        // db::table('product')->get();

        return view('frontend.product')->with(compact('product'));
    }
}
