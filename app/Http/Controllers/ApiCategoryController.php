<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use Validator;

class ApiCategoryController extends Controller
{
    public function index(){
        return response()->json(Category::get(),200);
    }

    public function CategoryById($id){
        $category = Category::find($id);
        if(is_null($category)){
            return response()->json(["message"=> "Khong ton tai id $id"],200);
        }
        return response()->json($category,200);
    }

    public function SaveCategory(Request $request){
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

    public function UpdateCategory(Request $request, $id){
        $category = Category::find($id);
        if(is_null($category)){
            return response()->json(["message"=>"Khong ton tai id $id"],200);
        }
        $category->update($request->all());
    
        return response()->json($category,200);
    }

    public function DeletedCategory(Request $request, $id){
        $category = Category::find($id);
        if(is_null($category)){
            return response()->json(["message" => "Khong ton tai id $id"],200);
        }
        $category->delete();
        
        return response()->json(null, 204);
    }

}
