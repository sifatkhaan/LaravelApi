<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class serviceController extends Controller
{
    
    public function index()
    {
        $list = Service::all();
        return response()->json(['message'=>'data fetched successfully','data'=>$list]);
        // dd($list);
    }

   
    public function create()
    {
        //
    }
   
    public function store(Request $request)
    {
       $validator= Validator::make($request->all(), [
            'name'=>'required',
            'category'=>'required',
            'price'=>'required|numeric',
            
        ]);
        if ($validator->fails()) {
            return response()->json(["code"=>422,'errors' => $validator->errors()], 422);
        }
        $data = $request->all();
        Service::create($data);
            return response()->json(["code"=>201, "message"=>"insert Successfull", 'data'=>$data], 201);
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
