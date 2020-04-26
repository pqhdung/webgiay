<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Producer;
use App\Category;
use App\Shoes;


class ProducerController extends Controller
{
    public function showAllProducer()
    {
        $producer = Producer::select('id','name_producer')->get();
        $shoes    = Shoes::select('id','name','product','price')->get();
        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }
}
