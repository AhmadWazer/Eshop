<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CreateTopviewedModel;

class TopviewedController extends Controller
{
    public function index()
    {
        return view('backend.addtopviewed');
    }
    public function save(Request $request)
    {
        $title = $request->subtitle;
        $price = $request->price;
        
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('images/', $image);
        
        $upload = new createTopviewedModel;
        $upload->T_subtitle = $title;
        $upload->T_image = $image;
        $upload->T_price = $price;
       
        $upload->save();

        return redirect()->back();
    }
    public function view(Request $request)
    {
        $Titem = createTopviewedModel::get();
        
        return view('backend.viewtopviewed',['Titem' => $Titem]);
    }
    public function delete($id)
    {
        $top = createTopviewedModel::find($id);
        $top->delete($id);
        return redirect()->back();
    }
}
