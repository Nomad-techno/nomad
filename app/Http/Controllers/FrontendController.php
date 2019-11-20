<?php

namespace App\Http\Controllers;

use App\DynamicField;
use App\Partners;
use App\Post;
use App\Settings;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $try_for_free = Settings::where('key','try_for_free')->where('status',1)->first();
        $service_secured = Settings::where('key','service_secured')->where('status',1)->first();
        $service_design = Settings::where('key','service_design')->where('status',1)->first();
        $service_volunteer = Settings::where('key','service_volunteer')->where('status',1)->first();
        $one_number = Settings::where('key','one_number')->where('status',1)->first();
        $two_number = Settings::where('key','two_number')->where('status',1)->first();
        $standart = DynamicField::all();
        $partners=Partners::get();
        $post= Post::where('status',1)->where('banner',1)->get();

        return view('frontend.index',[
            'try_for_free'=>$try_for_free,
            'service_secured'=>$service_secured,
            'service_design'=>$service_design,
            'service_volunteer'=>$service_volunteer,
            'one_number'=>$one_number,
            'two_number'=>$two_number,
            'partners'=>$partners,
            'post'=>$post,
            'standart'=>$standart
        ]);
    }
    public function features()
    {
        $try_for_free = Settings::where('key','try_for_free')->where('status',1)->first();
        $service_secured = Settings::where('key','service_secured')->where('status',1)->first();
        $service_design = Settings::where('key','service_design')->where('status',1)->first();
        $service_volunteer = Settings::where('key','service_volunteer')->where('status',1)->first();
        $one_number = Settings::where('key','one_number')->where('status',1)->first();
        $two_number = Settings::where('key','two_number')->where('status',1)->first();
        $partners=Partners::get();
        $post= Post::where('status',1)->where('banner',1)->get();
        return view('frontend.features',[
            'try_for_free'=>$try_for_free,
            'service_secured'=>$service_secured,
            'service_design'=>$service_design,
            'service_volunteer'=>$service_volunteer,
            'one_number'=>$one_number,
            'two_number'=>$two_number,
            'partners'=>$partners,
            'post'=>$post,
        ]);
    }
    public function pricing(){
        $standart = DynamicField::all();
        return view('frontend.pricing',[
            'standart'=>$standart
        ]);
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
