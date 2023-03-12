<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class FrontController extends Controller
{
    public function HomeMain(){
        return view('home.index');
    }
    public function about_me() {
        $abouts = About::find(1);
        return view('home.pages.about', compact('abouts'));
    }
    
    public function services(){
        return view('home.pages.services');
    }
    public function protfolio(){
        return view('home.pages.portfolio');
    }
    public function blog(){
        return view('home.pages.blog');
    }
    public function contact_us(){
        return view('home.pages.contact_us');
    }
}
