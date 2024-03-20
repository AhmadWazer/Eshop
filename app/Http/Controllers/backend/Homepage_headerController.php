<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePage_headerModel;


class Homepage_headerController extends Controller
{
    public function index()
    {
        return view('backend.homepage_header');
    }
    public function savehomepage_header(Request $request)
    {
        $title = $request->title;

        $subtitle = $request->subtitle;

        $message = $request->message;

        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('images/', $image);

        $headertext = $request->headertext;

        $headerlink = $request->headerlink;
        
        $upload = new HomePage_headerModel;
        $upload->header_tittle = $title;
        $upload->header_Subtittle = $subtitle;
        $upload->header_description = $message;
        $upload->header_image = $image;
        $upload->header_btn_text = $headertext;
        $upload->header_btn_link = $headerlink;
        //dd($upload);
        $upload->save();

        return redirect()->back();
        
    }
    
    public function viewhomepage_header(Request $request)
    {
        $headerpage = HomePage_headerModel::get();
        return view('backend.viewhomepage_header',['headerpage' => $headerpage]);
    }

    public function delete($id)
    {

        $data = HomePage_headerModel::find($id);
        $data->delete($id);
        return redirect('homepage_header/view');
    }

    public function edit($id)
    {
        $data = HomePage_headerModel::find($id);
        return view('backend.edithomepage_header',['data'=>$data]);
    }
    public function update(Request $request)
    {

        $title = $request->title;
        $subtitle = $request->subtitle;
        $message = $request->message;
        $headertext = $request->headertext;
        $headerlink = $request->headerlink;
                   // return $request->input();
                   $data = HomePage_headerModel::find($request->id);
            
                   $data->header_tittle = $title;
                   $data->header_Subtittle = $subtitle;
                   $data->header_description = $message;
                //    $data->header_image = $image;
                   $data->header_btn_text = $headertext;
                   $data->header_btn_link = $headerlink;
                   
                   $data->save();
                   return redirect('homepage_header/view');
    }
}
