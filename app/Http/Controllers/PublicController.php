<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Producer;
use App\Category;

class PublicController extends Controller
{
    public function index()
    {
        $producer = Producer::select('id','name_producer')->get();
        // $cate     = Category::select('id','name_category')->get();
        return view('PublicPage.SubPage.contents',['producer'=>$producer]);
    }

}
