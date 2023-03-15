<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\About;
use Intervention\Image\Facades\Image;
class AboutController extends Controller
{
    // public function add_about(){
    //     // $id = Auth::user()->id;
    //     return view('admin.about.about_add');
    // } // End Method 


    // public function store_about_details(Request $request){
    //     // dd($request->title);
    //     $validatedData = $request->validate([
    //         'title' => 'required',
    //         'short_title' => 'required',
    //         'about_image' => 'image|nullable|max:19999',
    //         'short_description'=> 'required',
    //         'long_description'=> 'required',
        
    //     ]);
    //     // dd($request->descripbtion1);
    //         if($request->hasfile('about_image'))
    //         {
    //         $file = $request->file('about_image')->getClientOriginalName();     
    //         $fileName = pathinfo($file,PATHINFO_FILENAME); 
    //         $extension = $request->file('about_image') ->getClientOriginalExtension();   
    //         $filenamestore = $fileName.'_'.time().'.'.$extension;
    //         ///upload image
    //         $path = $request->file('about_image')->storeas('public/upload/img',$filenamestore);
    //        }
    //        else {
    //            $filenamestore ='noimage.jpg';
    //        }
    //         $about= new About();
    //         $about->title = $request->input('title');
    //         $about->short_title = $request->input('short_title');
    //         $about->about_image=$filenamestore;
    //         $about->short_description=$request->input('short_description');
    //         $about->long_description=$request->input('long_description');
    //         $about->created_at = Carbon::now();
    //         $about->save();

    //         $notification = array(
    //             'message' => 'Admin Profile abouts details added Updated Successfully', 
    //             'alert-type' => 'success'
    //         );
    //         return redirect()->back()->with($notification);
    //         // return redirect()->route('admin.about.about_add')->with($notification);
    // }
    public function update_about(){
 
        $aboutpage = About::find(1);
        // $aboutpage = About::get();
        return view('admin.about.update_about_page',compact('aboutpage'));

     } // End Method 

     public function UpdateAbout(Request $request){

        $about_id = $request->id;
        $about = About::find($about_id);

        if ($request->file('about_image')) {
            $img = $about->about_image;
            unlink($img);
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(523,605)->save('upload/img/'.$name_gen);
            $save_url = 'upload/img/'.$name_gen;

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'about_image' => $save_url,

            ]); 
            $notification = array(
            'message' => 'About Page Updated with Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } else{

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,

            ]); 
            $notification = array(
            'message' => 'About Page Updated without Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

       } // end Else

    } // End Metho
      
    
}
