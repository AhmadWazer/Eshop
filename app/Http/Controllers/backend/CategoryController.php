<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use DB;

class CategoryController extends Controller
{
    public function index()
    {
        return view('backend.addcategory');
    }
    public function save(Request $request)
    {
        $name = $request->name;
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('images', $image);

        $load = new CategoryModel;
        $load->ctgry_name = $name;
        $load->ctgry_image = $image;
    
        $load->save();
        return redirect()->back();
    }
    public function view(Request $request)
    {
        $citem = CategoryModel::get();
        return view('backend.viewcategory',['citem'=> $citem]);
    }
    public function delete($id)
    {
        $brand = CategoryModel::find($id);
        $brand->delete($id);
        return redirect('category');
    }
    public function edit($id)
    {
        $data = db::table('category')
        ->where('category.ctgry_id',$id)
        ->first();
        return view('backend.editcategory',['data'=>$data]);
    }
    public function update(Request $request)
    {
    
        $name = $request->name;

        if ($request->hasFile('image')) {
        $file = $request->file('image');
        $image = $file->getClientOriginalName();
        } else {
                return redirect()->back();
        }
        
        $id = $request->id;


        $upload = CategoryModel::find($id);
        $upload->ctgry_name = $name;
        $upload->ctgry_image = $image;

        $upload->save();
        return redirect('/category');

    }
}
