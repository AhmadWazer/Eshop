<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CheckoutModel;
use App\Models\OrderdetailModel;
use App\Models\CustomerModel;
use Session;

class CheckoutController extends Controller
{
    public function index(Request $request)
    { 
        $cartItems = \Cart::getContent();
    //    dd($cartItems);
        return view('frontend.checkout',['cartItems'=>$cartItems]);
    }
    
    public function save(Request $request)
    {

        //customer data
        $uname = $request->username;
        $email = $request->email;
        $phone = $request->number;

        $upload = new CustomerModel;
        $upload->name = $uname;
        $upload->email = $email;
        $upload->phone = $phone;
        $upload->save();
        
        //order data
        $c_id = $upload->customer_id;
        $compnay = $request->company;
        $state = $request->state;
        $country = $request->country;
        $post = $request->post;
        $addres  =$request->address;
        $discount = $request->discount;
        $stotal = $request->sub;
        $gtotal = $request->total;
        
        $load = new CheckoutModel;
        $load->subtotal = $stotal;
        $load->discount = $discount;
        $load->grandtotal = $gtotal;
        $load->customer_id = $c_id;
        $load->address = $addres;
        $load->company = $compnay;
        $load->state = $state;
        $load->country = $country;
        $load->zip = $post;
        $load->save();

        //order detalis data
        $quentity = $request->quan;
        $price = $request->pri;
        $item_id = $request->id;
        $shipping =$request->ship;
        $od_id = $load->order_id;

        for ($i = 0; $i < count($item_id); $i++) {
        $save = new OrderdetailModel;
        $save->order_id = $od_id;
        $save->item_id = $item_id[$i];
        $save->quantity = $quentity[$i];
        $save->price = $price[$i];
        $save->subtotal = $stotal;

        $save->save();
        }
        \Cart::clear();
        return redirect('/fproduct');
    }
}
