<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\protfolio;
use Carbon\Carbon;
use Image;

class ProtfolioController extends Controller
{
    public function add_new_protfolio(){
        return view('admin.protfolio.protfolio_add');
    }

    public function store_project(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'short_title' => 'required',
            'describtion' => 'required',
            'protfolio_image' => 'image|nullable'
        ]);
       if ($request->input('title')) {
        if ($request->file('protfolio_image')) {
            $image = $request->file('protfolio_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
    
            Image::make($image)->resize(700,870)->save('upload/protfolio/'.$name_gen);
            $save_url = 'upload/protfolio/'.$name_gen;
        }
         else {
            $save_url ='noimage.jpg';
        }

       $protfolio = new protfolio;
       $protfolio->title = $request->input('title');
       $protfolio->short_title = $request->input('short_title');
       $protfolio->describtion = $request->input('describtion');
       $protfolio->protfolio_image=$save_url;
       $protfolio->created_at = Carbon::now();
   
       $protfolio->save();

       $notification = array(
        'message' => 'project added with Image Successfully', 
        'alert-type' => 'success'
       );

         return redirect()->back()->with($notification);
          
       } 
       else {
        return redirect()->back()->with('status1');
       }
    }

    public function view_project_list(){
        $projects = protfolio::get()->all();
        return view('admin.protfolio.protfolio_view',compact('projects'));
    }


    public function delete_project($id){
        $project = protfolio::findorfail($id);
        $img = $project->protfolio_image;
        unlink($img);
        $project->delete();
        $notification = array(
            'message' => 'project deleted', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function update_project_page($id){
         $protfolio = protfolio::findOrFail($id);
        return view('admin.protfolio.protfolio_edit',compact('protfolio'));
    }



    public function UpdatePortfolio(Request $request){

        $id = $request->id;
        $project = protfolio::findorfail($id);
        
        if ($request->file('protfolio_image')) {
            $img = $project->protfolio_image;
            unlink($img);
            $image = $request->file('protfolio_image');
           
            @unlink(public_path('upload/protfolio/'.$project->protfolio_image));

            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(1020,519)->save('upload/protfolio/'.$name_gen);
            $save_url = 'upload/protfolio/'.$name_gen;

            protfolio::findOrFail($id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'describtion' => $request->describtion,
                'protfolio_image' => $save_url,

            ]); 
            $notification = array(
            'message' => 'Portfolio Updated with Image Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);

        }
        else{

            protfolio::findOrFail($id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'describtion' => $request->describtion,
                 

            ]); 
            $notification = array(
            'message' => 'Portfolio Updated without Image Successfully', 
            'alert-type' => 'success'
        );
    }
    
       return redirect()->back()->with($notification);

        } // end Else
    

    
}
