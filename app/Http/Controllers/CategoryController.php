<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producer;
use App\Category;
use App\Shoes;

class CategoryController extends Controller
{
    public function showCategoryNikeJordan()
    {
        $shoes = Shoes::select('id','name','product','price','images','id_category')
        ->whereid_category(11)
        ->get();
        
        $producer = Producer::select('id','name_producer')
        ->get();

        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }

    public function showCategoryNikeAir()
    {
        $shoes = Shoes::select('id','name','product','price','images','id_category')
        ->whereid_category(12)
        ->get();
        
        $producer = Producer::select('id','name_producer')
        ->get();

        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }

    public function showCategoryNikeRunning()
    {
        $shoes = Shoes::select('id','name','product','price','images','id_category')
        ->whereid_category(13)
        ->get();
        
        $producer = Producer::select('id','name_producer')
        ->get();

        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }

    public function showCategoryAdidasUltraboost()
    {
        $shoes = Shoes::select('id','name','product','price','images','id_category')
        ->whereid_category(14)
        ->get();
        
        $producer = Producer::select('id','name_producer')
        ->get();

        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }

    public function showCategoryAdidasNMD()
    {
        $shoes = Shoes::select('id','name','product','price','images','id_category')
        ->whereid_category(15)
        ->get();
        
        $producer = Producer::select('id','name_producer')
        ->get();

        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }

    public function showCategoryAdidasStanSmith()
    {
        $shoes = Shoes::select('id','name','product','price','images','id_category')
        ->whereid_category(16)
        ->get();
        
        $producer = Producer::select('id','name_producer')
        ->get();

        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }

    public function showCategoryNewBalanceRunning()
    {
        $shoes = Shoes::select('id','name','product','price','images','id_category')
        ->whereid_category(17)
        ->get();
        
        $producer = Producer::select('id','name_producer')
        ->get();

        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }

    public function showCategoryNewBalanceWalking()
    {
        $shoes = Shoes::select('id','name','product','price','images','id_category')
        ->whereid_category(18)
        ->get();
        
        $producer = Producer::select('id','name_producer')
        ->get();

        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }

    public function showCategoryConverseClassic()
    {
        $shoes = Shoes::select('id','name','product','price','images','id_category')
        ->whereid_category(19)
        ->get();
        
        $producer = Producer::select('id','name_producer')
        ->get();

        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }

    public function showCategoryConverseChuck70s()
    {
        $shoes = Shoes::select('id','name','product','price','images','id_category')
        ->whereid_category(20)
        ->get();
        
        $producer = Producer::select('id','name_producer')
        ->get();

        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }

    public function showCategoryConverseAllStar()
    {
        $shoes = Shoes::select('id','name','product','price','images','id_category')
        ->whereid_category(21)
        ->get();
        
        $producer = Producer::select('id','name_producer')
        ->get();

        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }

    public function showCategoryBitisHunter()
    {
        $shoes = Shoes::select('id','name','product','price','images','id_category')
        ->whereid_category(22)
        ->get();
        
        $producer = Producer::select('id','name_producer')
        ->get();

        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes]);
    }   


}
