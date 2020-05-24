<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use Validator;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(Category::get(),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name_category' => 'required|min:3',
            'id_producer'   => 'required|min:1'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()){
            return response()->json($validator->errors(),400);
        }

        $category = Category::create($request->all());

        return response()->json($category,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        if(is_null($category)){
            return response()->json(["message"=> "Khong ton tai id $id"],200);
        }
        return response()->json($category,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        if(is_null($category)){
            return response()->json(["message"=>"Khong ton tai id $id"],200);
        }
        $category->update($request->all());
    
        return response()->json($category,200);
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
        $category = Category::find($id);
        if(is_null($category)){
            return response()->json(["message"=>"Khong ton tai id $id"],200);
        }
        $category->update($request->all());
    
        return response()->json($category,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if(is_null($category)){
            return response()->json(["message" => "Khong ton tai id $id"],200);
        }
        $category->delete();
        
        return response()->json(null, 204);
    }
}
