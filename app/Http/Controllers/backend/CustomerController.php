<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CheckoutModel;
use App\Models\CustomerModel;
use DB;

class CustomerController extends Controller
{
    public function index()
    {

        return view('backend.customer');
    }
    public function view(Request $request)
    {
        // $oitem = CheckoutModel::get();
        // $citem = CustomerModel::get();
        $oitem = DB::table('order')
        ->join('customer','customer.customer_id','=', 'order.customer_id')
        ->get();

        return view('backend.customer',['oitem'=>$oitem]);
    }
}
