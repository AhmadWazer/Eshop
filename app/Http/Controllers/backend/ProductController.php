<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\SubcategoryModel;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $brand = BrandModel::get();
        $category = CategoryModel::get();
        $subcateg = SubcategoryModel::get();
        return view('backend.addproduct',['brand'=>$brand, 'category'=>$category, 'subcateg'=>$subcateg]);
    }
    public function save(Request $request)
    {
        $name = $request->name;
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('images/', $image);
        $price = $request->price;
        $brand = $request->bid;
        $category= $request->cid;
        $subcateg= $request->scid;
        $disc = $request->dec;

        $load = new ProductModel;
        $load->product_name = $name;
        $load->product_price = $price;
        $load->product_image = $image;
        $load->brand_id =  $brand;
        $load->ctgry_id = $category;
        $load->subc_id = $subcateg;
        $load->description = $disc;

        $load->save();
         return redirect()->back();
    }
    public function view(Request $request)
    {
        // $product = ProductModel::select('product.*','brand.brand_name','category.ctgry_name','subcategory.subc_name')
        // ->join('brand','brand.brand_id', '=', 'product.brand_id')
        // ->join('category','category.ctgry_id', '=', 'product.ctgry_id')
        // ->join('subcategory', 'subcategory.ctgry_id', '=', 'product.ctgry_id') // Join based on the category_id
        // ->get();
        // dd($product);
        $query = DB::table('product')
        ->join('brand','brand.brand_id','=', 'product.brand_id')
        ->join('subcategory','subcategory.subc_id','=','product.subc_id')
        ->join('category','category.ctgry_id',"=",'product.ctgry_id')
        ->get();
        return view('backend.viewproduct',['product'=>$query]);
    }
    public function delete($id)
    {
        $data = ProductModel::find($id);

        $data->delete($id);
        return redirect()->back();
    }
     public function edit($id)
     {
        $brand = BrandModel::get();
        $category = CategoryModel::get();
       

        $data = db::table('product')
        ->join('brand','brand.brand_id','=','product.brand_id')
        ->join('category', 'category.ctgry_id', '=', 'product.ctgry_id')
        ->where('product.product_id',$id)
        ->first();
        
        return view('backend.editproduct',['data'=>$data, 'brand'=>$brand,'category'=>$category]);
     }
    public function update(Request $request)
    {
        $name = $request->name;
        $price = $request->price;

        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $image = $file->getClientOriginalName();
        //     } else {
        //             return redirect()->back();
        //     }

        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('images/', $image); 
        $brand = $request->brand;
        $catgry = $request->cate;
        $disc = $request->dec;
        $id = $request->id;

        $upload = ProductModel::find($id);
        $upload->product_name = $name;
        $upload->product_price = $price;
        $upload->product_image = $image;
        $upload->description = $disc;
        $upload->brand_id = $brand;
        $upload->ctgry_id = $catgry;
       
        $upload->save();

        return redirect('/product');
    }
    
    public function getSubcategories(Request $request)
    {
        $categor_id = $request->ctgry_id;
        // return $categor_id;
        $subcategry = SubcategoryModel::where('ctgry_id',$categor_id)->get();
        return response()->json($subcategry);
    }
    
    
}
