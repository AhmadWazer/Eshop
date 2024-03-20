<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MiddlebanerModel;

class MiddlebanerController extends Controller
{
    public function index()
    {
        return view('backend.addmiddlebaner');
    }
    public function save(Request $request)
    {
        $title = $request->title;
        $subtitle = $request->subtitle;
        $btn = $request->btn;
        
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('images/', $image);
      
        $upload = new MiddlebanerModel;
        $upload->M_title = $title;
        $upload->M_subtitle = $subtitle;
        $upload->M_image = $image;
        $upload->M_btn = $btn;
       
        $upload->save();

        return redirect()->back();
    }
    public function view(Request $request)
    {
        $Sitem = MiddlebanerModel::get();
        
        return view('backend.viewmidelbaner',['Sitem' => $Sitem]);
    }
    public function delete($id)
    {
        $middle = MiddlebanerModel::find($id);
        $middle->delete($id);
        return redirect()->back();
    }
}
