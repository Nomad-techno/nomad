<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DynamicField;
use Validator;

class DynamicFieldController extends Controller
{
   public function index()
    {
        $price =DynamicField::latest()->paginate(4);
     return view('backend.price.index',[
         'price'=>$price
     ]);
    }
    public function create()
    {

        return view('backend.price.create');
    }

    public function insert(Request $request)
    {
     if($request->ajax())
     {
      $rules = array(
       'price_category.*'  => 'required',
       'price.*'  => 'required',
       'list.*'  => 'required'
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }

      $price_category = $request->price_category;
      $price = $request->price;
      $list = $request->list;
      for($count = 0; $count < count($price_category); $count++)
      {
       $data = array(
        'price_category' => $price_category[$count],
        'price'  => $price[$count],
        'list'  => $list[$count]
       );
       $insert_data[] = $data;
      }

      DynamicField::insert($insert_data);
      return response()->json([
       'success'  => 'Data Added successfully.'
      ]);
     }
    }
}
