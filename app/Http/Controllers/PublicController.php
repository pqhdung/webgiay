<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Producer;
use App\Category;
use App\Shoes;


class PublicController extends Controller
{
    public function index()
    {
        $producer = Producer::select('id','name_producer')->get();
        $shoes    = Shoes::select('id','name','product','price','images')->orderBy('id','desc')->offset(0)->take(4)->get();
        $shoes2    = Shoes::select('id','name','product','price','images')->orderBy('id','desc')->offset(4)->take(2)->get();
        $shoes3    = Shoes::select('id','name','product','price','images')->orderBy('id','desc')->offset(6)->take(6)->get();
        return view('PublicPage.SubPage.contents',['producer'=>$producer,'shoes'=>$shoes,'shoes2'=>$shoes2,'shoes3'=>$shoes3]);
    }

    public function getAllShoes(){
        $producer = Producer::select('id','name_producer')->get();
        $shoes    = Shoes::select('id','name','product','price','images')->inRandomOrder()->get();
        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }
}
