<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeatureCollectionModel;
use DB;
class FeatureCollectionController extends Controller
{
    public function index()
    {
        return view('backend.addfeatured_collection');
    }
    public function savefeatured_collection(Request $request)
    {
        $title = $request->title;
        $subtitle = $request->subtitle;
        $headertext = $request->headertext;
        
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('images/', $image);
        
        $upload = new FeatureCollectionModel;
        $upload->title = $title;
        $upload->sub_title = $subtitle;
        $upload->image = $image;
        $upload->btn_text = $headertext;
       
        $upload->save();

        return redirect()->back();
    }
    
    public function viewfeatured_collection(Request $request)
    {
        $collectionpage = FeatureCollectionModel::get();
        
        return view('backend.Featured_collection',['collectionpage' => $collectionpage]);
       
    }
    public function edit($id)
    {
        $data = FeatureCollectionModel::find($id);
        return view('backend.editfeaturedcollection',['data'=>$data]);
    }
    public function update(Request $request)
    {
        $title = $request->title;
        $subtitle = $request->subtitle;
        $btn_txt = $request->btn_txt;
        $id = $request->id;

        //$fcId = $request->FC_id;
        $update = FeatureCollectionModel::find($id);
        
        $update->title = $title;
        $update->sub_title = $subtitle;
        $update->btn_text = $btn_txt;
       
        $update->save();
        
        return redirect('featuredcollection/view');
    }

    public function delete($id)
    {
        $data = FeatureCollectionModel::find($id);
        $data->delete($id);
        return redirect('featuredcollection/view');
    }
}
