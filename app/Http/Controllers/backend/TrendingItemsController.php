<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrendingItemsModel;

class TrendingItemsController extends Controller
{
    public function index()
    {
        return view('backend.addTrendingItems');
    }
    public function save(Request $request)
    {
        $subtitle = $request->subtitle;
        $price = $request->price;
        
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('images/', $image);
        
        $upload = new TrendingItemsModel;
        $upload->sub_title = $subtitle;
        $upload->image = $image;
        $upload->price = $price;
       
        $upload->save();

        return redirect()->back();
    }
    public function view(Request $request)
    {
        $Titem = TrendingItemsModel::get();
        
        return view('backend.viewTrendingItems',['Titem' => $Titem]);
    }
    public function edit($id)
    {
        $data = TrendingItemsModel::find($id);
        return view('backend.editTrendingItems',['data'=>$data]);
    }
    public function update(Request $request)
    {
        $subtitle = $request->subtitle;
        $price = $request->price;
        $id = $request->id;

        $update = TrendingItemsModel::find($id);
        
        $update->sub_title = $subtitle;
        $update->price = $price;
       
        $update->save();
        
        return redirect('addtrendingItem/view');
    }
    public function delete($id)
    {
        $data = TrendingItemsModel::find($id);
        $data->delete($id);
        return redirect('addtrendingItem/view');
    }
}
