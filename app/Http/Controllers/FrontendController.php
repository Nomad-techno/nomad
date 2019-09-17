<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function features()
    {
        return view('frontend.features');
    }
    public function pricing(){
        return view('frontend.pricing');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function SingleBlog()
    {
        return view('frontend.single_blog');
    }
    public function elements(){
        return view('frontend.elements');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
