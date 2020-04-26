<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Producer;
use App\Category;
use App\Shoes;


class PublicController extends Controller
{
    public function index()
    {
        $producer = Producer::select('id','name_producer')->get();
        $shoes    = Shoes::select('id','name','product','price','images')->get();
        return view('PublicPage.SubPage.contents',['producer'=>$producer,'shoes'=>$shoes]);
    }

}
