<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
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
        $category=Category::latest()->paginate(3);
        return view('backend.category.index',[
            'category'=>$category,
            'is_active' => 'category',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_uz'=>'required',
            'name_ru'=>'required',
            'name_en'=>'required',
            'status'=>'required',
        ]);
        $category = new Category();
        $category->name_uz= $request->name_uz;
        $category->name_ru= $request->name_ru;
        $category->name_en= $request->name_en;
        $category->status=$request->get('status');
        $category->save();
        return redirect()->route('category.index');
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
    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('backend.category.edit',[
            'category'=>$category,
            'categories'=>$categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name_uz'=>'required',
            'name_ru'=>'required',
            'name_en'=>'required',
            'status'=>'required',
        ]);
        $category->name_uz= $request->name_uz;
        $category->name_ru= $request->name_ru;
        $category->name_en= $request->name_en;
        $category->status=$request->get('status');
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }
}
