<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BrandModel;
use DB;

class BrandController extends Controller
{

    public function index()
    {
        return view('backend.addbrand');
    }
    public function save(Request $request)
    {
        $name = $request->name;
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('images/', $image);

        $save = new BrandModel;
        $save->brand_name = $name;
        $save->brand_image = $image;
        $save->save();

        return redirect()->back();
    }
    public function view(Request $request)
    {
        $Bitem = BrandModel::get();
        
        return view('backend.viewbrand',['Bitem' => $Bitem]);
    }
    public function delete($id)
    {
        $brand = BrandModel::find($id);
        $brand->delete($id);
        return redirect('brand');
    }
    public function edit($id)
    {
        $brand = db::table('brand')
        ->where('brand.brand_id',$id)
        ->first();

        return view('backend.editbrand',['brand'=>$brand]);
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        if($request->hasfile('image')){
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
        }else{
            return redirect()->back();
        }
        $upload = BrandModel::find($id);
        $upload->brand_name = $name;
        $upload->brand_image = $image;

        $upload->save();
        return redirect('/brand');
    }
    
}
