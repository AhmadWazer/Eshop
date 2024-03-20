<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\create_DealofdayModel;

class DealofdayController extends Controller
{
    public function index()
    {
        return view('backend.adddealofday');
    }
    public function save(Request $request)
    {
        $title = $request->title;
        $subtitle = $request->subtitle;
        $desc = $request->desc;
        $price =$request->price;
        
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('images/', $image);
        
        $upload = new create_DealofdayModel;
        $upload->title = $title;
        $upload->sub_title = $subtitle;
        $upload->image = $image;
        $upload->description = $desc;
        $upload->price = $price;
       
        $upload->save();

        return redirect()->back();
    }
    public function view(Request $request)
    {
        $dealpage = create_DealofdayModel::get();
        
        return view('backend.viewdealofday',['dealpage' => $dealpage]);
       
    }
    public function edit($id)
    {
        $data = create_DealofdayModel::find($id);
        return view('backend.editdealofday',['data'=>$data]);
    }
    public function update(Request $request)
    {
        $title = $request->title;
        $subtitle = $request->subtitle;
        $desc = $request->desc;
        $price =$request->price;
        $id = $request->id;
        $update = create_DealofdayModel::find($id);
        
        $update->title = $title;
        $update->sub_title = $subtitle;
        $update->description = $desc;
        $update->price = $price;
       
        $update->save();
        
        return redirect('/adddealofday/view');
    }
    public function delete($id)
    {
        $data = create_DealofdayModel::find($id);
        $data->delete($id);
        return redirect('adddealofday/view');
    }
}
