<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemCon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=Item::all();
        return response()->json(['code'=>201, 'message'=>'successfully fetched', 'data'=>$list]);
    }
    
    public function store(Request $request)
    {
        $validator= Validator::make($request->all(),[
            'name'=>'required',
            'price'=>'required',
            'oum'=>'required'
        ]);
        if($validator->fails()){
                return response()->json(['code'=>422, 'errors'=>$validator->errors()],422);
        }
        $data=$request->all();
        return response()->json(['code'=>201,'message'=>'succesfull inserted', 'data'=>$data]);
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }
}
