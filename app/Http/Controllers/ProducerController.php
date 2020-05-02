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
        $shoes    = Shoes::select('id','name','product','price','images')->get();
        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }
    public function showAllNike()
    {
        $shoes = Shoes::select('id','name','product','price','images','id_category')
        ->whereBetween('id_category',[11,13])
        ->get();
        
        $producer = Producer::select('id','name_producer')
        ->get();

        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }

    public function showAllAdidas()
    {
        $shoes = Shoes::select('id','name','product','price','images','id_category')
        ->whereBetween('id_category',[14,16])
        ->get();

        $producer = Producer::select('id','name_producer')
        ->get();

        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }

    public function showAllNewBalance()
    {
        $shoes = Shoes::select('id','name','product','price','images','id_category')
        ->whereBetween('id_category',[17,18])
        ->get();

        $producer = Producer::select('id','name_producer')
        ->get();

        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }

    public function showAllConverse()
    {
        $shoes = Shoes::select('id','name','product','price','images','id_category')
        ->whereBetween('id_category',[19,21])
        ->get();

        $producer = Producer::select('id','name_producer')
        ->get();

        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }
    
    public function showAllBitis()
    {
        $shoes = Shoes::select('id','name','product','price','images','id_category')
        ->whereid_category(22)
        ->get();

        $producer = Producer::select('id','name_producer')
        ->get();

        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }
}
