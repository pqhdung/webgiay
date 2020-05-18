<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class ApiCategoryController extends Controller
{
    public function index(){
        return response()->json(Category::get(),200);
    }

    public function CategoryById($id){
        return response()->json(Category::find($id),200);
    }

    public function SaveCategory(Request $request){
        $category = Category::create($request->all());

        return response()->json($category,201);
    }

    public function UpdateCategory(Request $request, Category $category){
        $category->update($request->all());
        
        return response()->json($category,200);
    }

}
