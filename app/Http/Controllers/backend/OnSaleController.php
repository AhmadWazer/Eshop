<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\create_OnSaleModel;

class OnSaleController extends Controller
{
    public function index()
    {
        return view('backend.addonSale');
    }
    public function save(Request $request)
    {
        $title = $request->subtitle;
        $price = $request->price;
        
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('images/', $image);
        
        $upload = new create_OnSaleModel;
        $upload->sub_title = $title;
        $upload->image = $image;
        $upload->price = $price;
       
        $upload->save();

        return redirect()->back();
    }
    public function view(Request $request)
    {
        $Sitem = create_OnSaleModel::get();
        
        return view('backend.viewonsale',['Sitem' => $Sitem]);
    }
    public function edit($id)
    {
        $data = create_OnSaleModel::find($id);
        return view('backend.editonsale',['data'=>$data]);
    }
    public function update(Request $request)
    {
        $title = $request->subtitle;
        $price = $request->price;
        $id = $request->id;

        $update = create_OnSaleModel::find($id);
        
        $update->sub_title = $title;
        $update->price = $price;
       
        $update->save();
        
        return redirect('addonsale/view');
    }
    public function delete($id)
    {
        $data = create_OnSaleModel::find($id);
        $data->delete($id);
        return redirect('addonsale/view');
    }
}
