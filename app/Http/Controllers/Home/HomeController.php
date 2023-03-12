<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;
use Image;

class HomeController extends Controller
{
   Public function HomeSlide(){

    $homeslide = HomeSlider::find(1);
     return view('admin.HomeSlide.home_slide',compact('homeslide'));

   }

   public function UpdateSlider(Request $request){

    $slide_id = $request->id;

    if ($request->file('home_slide')) {
        $image = $request->file('home_slide');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(636,852)->save('upload/home_slide/'.$name_gen);
        $save_url = 'upload/home_slide/'.$name_gen;

        HomeSlider::findOrFail($slide_id)->update([
            'title' => $request->title,
            'short_title' => $request->short_title,
            'video_url' => $request->video_url,
            'home_slide' => $save_url,

        ]); 
        $notification = array(
        'message' => 'Home Slide Updated with Image Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

    } else{

        HomeSlider::findOrFail($slide_id)->update([
            'title' => $request->title,
            'short_title' => $request->short_title,
            'video_url' => $request->video_url,  

        ]); 
        $notification = array(
        'message' => 'Home Slide Updated without Image Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

    } // end Else

 } // End Method 


}
