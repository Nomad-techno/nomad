<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        $post=Post::latest()->paginate(5);
        return view('backend.post.index',[
            'post'=>$post
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_id=Category::where('status',1)->get();
        return view('backend.post.create',[
            'category_id'=>$category_id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->category_id=$request->get('category_id');
        $post->status=$request->get('status');
        $post->title_uz=$request->title_uz;
        $post->title_ru=$request->title_ru;
        $post->title_en=$request->title_en;
        $post->description_uz=$request->description_uz;
        $post->description_ru=$request->description_ru;
        $post->description_en=$request->description_en;
        $post->body_uz=$request->body_uz;
        $post->body_ru=$request->body_ru;
        $post->body_en=$request->body_en;
        if ($request->banner=='on') {
            $post->banner=1;
        }
        $post->image = $request->file('image')->store('imageFolder','public');
        $post->save();
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
