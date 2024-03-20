<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class OrderdetailsController extends Controller
{
    public function index()
    {
        return view('backend.orderdetails');
    }
    public function view($id)
    {
        $data = DB::table('order_details')
        ->join('product','product.product_id','=', 'order_details.item_id')
        ->join('order','order.order_id','=', 'order_details.order_id')
        ->where('order_details.order_id',$id)
        ->get();

        return view('backend.orderdetails',['data' => $data]);
    }
}
