<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubcategoryModel;
use App\Models\CategoryModel;
use DB;

class SubcategoryController extends Controller
{

    public function index()
    {
        $category = CategoryModel::get();
        return view('backend.addsubcategory', ['category' => $category]);
    }
    public function view(Request $request)
    {
        $subitem = SubcategoryModel::select('subcategory.*','category.ctgry_name')
        ->join('category','category.ctgry_id', '=' , 'subcategory.ctgry_id')
        ->get();
        return view('backend.viewsubcategory',['subitem' => $subitem]);
    }
    public function save(Request $request)
    {
        $name = $request->name;
        $subid =$request->cid;

        $load = new SubcategoryModel;
        $load->subc_name = $name;
        $load->ctgry_id = $subid;
       
        $load->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        $data = SubcategoryModel::find($id);

        $data->delete($id);
        return redirect()->back();
    }
    public function edit($id)
    {
        $category = CategoryModel::get();
        $data = db::table('subcategory')
        ->join('category', 'category.ctgry_id', '=', 'subcategory.ctgry_id')
        ->where('subcategory.subc_id',$id)
        ->first();
        
        return view('backend.editsubcate',['data'=>$data,'category'=>$category]);
    }
    public function update(Request $request)
    {
        $sub = $request->name;
        $cate = $request->categ;
        $id = $request->id;
        $upload = SubcategoryModel::find($id);
        $upload->subc_name = $sub;
        $upload->ctgry_id = $cate;
        $upload->save();
        return redirect('/subcategory');
    }
}
