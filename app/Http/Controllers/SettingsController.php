<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;

class SettingsController extends Controller
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
        $settings = Settings::latest()->paginate(6);
         return view('backend.settings.index',[
            'settings'=>$settings,
            'is_active' => 'settings',
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting =Settings::all();
        return view('backend.settings.create',[
            'setting'=>$setting,
            'is_active' => 'settings',
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
            'key'     => 'required',
            'image' => 'image|mimes:jpg,jpeg,png|max:10240'
        ]);
        $setting = new Settings();
        $setting->key = $request->key;
        $setting->title_uz = $request->title_uz;
        $setting->title_ru = $request->title_ru;
        $setting->title_en = $request->title_en;
        $setting->value_uz = $request->value_uz;
        $setting->value_ru = $request->value_ru;
        $setting->value_en = $request->value_en;
        $setting->status = $request->get('status');
        if($request->file('image')){
            $setting->image = $request->file('image')->store('imageFolder', 'public');
        }
        $setting->save();
        return redirect()->route('settings.index')->with('message', 'Post has been created Successfully!:)');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
