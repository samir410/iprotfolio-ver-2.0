<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function massage(Request $request){
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'budget' => $request->budget,
            'massage' => $request->massage,
            'created_at' => Carbon::now()
        ]);
        $notification = array(
            'message' => 'message sent', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function massage_read(){
        $contacts = Contact::latest()->get();
        return view('admin.contact.contact_massage',compact('contacts'));
    }   

    public function delete_massage($id){
        $massage = Contact::findorfail($id);
        $massage->delete();
        $notification = array(
            'message' => 'message deleted', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    
}
