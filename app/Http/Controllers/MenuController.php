<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
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
        $menu= Menu::latest()->paginate(6);
       return view('backend.menu.index',[
           'menu'=>$menu
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $menus=Menu::all();
        $order=Menu::latest()->first();
        return view("backend.menu.create",[
            'menus'=>$menus,
            'order'=>$order
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
        $request->validate([
            'name_uz'=>'required',
            'name_ru'=>'required',
            'name_en'=>'required',
        ]);
        $menu = new Menu();
        $menu->name_uz=$request->name_uz;
        $menu->name_ru=$request->name_ru;
        $menu->name_en=$request->name_en;
        $menu->url=$request->url;
        $menu->parent=$request->get('parent');
        $menu->position=$request->get('position');
        $menu->order_by=$request->order_by;
        $menu->save();
        return redirect()->route('menu.index');

    $menu->order_by=$request->order_by;
    $menu->save();
    return redirect()->route('menu.index');

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
