<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BestsellerModel;

class BestsellerController extends Controller
{
    public function index()
    {
        return view('backend.addbestseller');
    }
    public function save(Request $request)
    {
        $title = $request->subtitle;
        $price = $request->price;
        
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('images/', $image);
        
        $upload = new BestsellerModel;
        $upload->B_subtitle = $title;
        $upload->B_image = $image;
        $upload->price = $price;
       
        $upload->save();

        return redirect()->back();
    }
    public function view(Request $request)
    {
        $Bitem = BestsellerModel::get();
        
        return view('backend.viewbestseller',['Bitem' => $Bitem]);
    }
    public function delete($id)
    {
        $seller = BestsellerModel::find($id);
        $seller->delete($id);
        return redirect()->back();
    }
}
