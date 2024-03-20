<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogModel;

class BlogController extends Controller
{
    public function index()
    {
        return view('backend.addblog');
    }
    public function save(Request $request)
    {
        $title = $request->title;
        $subtitle = $request->subtitle;
        $Dtitle = $request->dtitle;
        
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('images/', $image);
        
        $upload = new BlogModel;
        $upload->B_title = $title;
        $upload->B_subtitle = $subtitle;
        $upload->B_image = $image;
        $upload->B_Ttitle = $Dtitle;
       
        $upload->save();

        return redirect()->back();
    }
    public function view(Request $request)
    {
        $blog = BlogModel::get();
        
        return view('backend.viewblog',['blog' => $blog]);
    }
    public function delete($id)
    {
        $data = BlogModel::find($id);
        $data->delete($id);
        return redirect('addblog/view');
    }
}
