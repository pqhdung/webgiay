<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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
        $shoes3    = Shoes::select('id','name','product','price','images')->orderBy('id','desc')->offset(6)->take(3)->get();
        return view('PublicPage.SubPage.contents',['producer'=>$producer,'shoes'=>$shoes,'shoes2'=>$shoes2,'shoes3'=>$shoes3]);
    }

    public function getAllShoes(){
        $producer = Producer::select('id','name_producer')->get();
        $shoes    = Shoes::select('id','name','product','price','images')->orderBy('id','desc')->get();
        $title = "All Shoes";
        $titleProduct = $title;
        return view('PublicPage.SubShowAll.producer',['producer'=>$producer,'shoes'=>$shoes, 'title'=> $title,'titleProduct'=>$titleProduct]);
    }

    public function getCategory($id, $name){
        // $shoes = Shoes::where('id_category',"$id")->get();
        // dd($shoes);
        $producer = Producer::select('id','name_producer')
        ->get();
        $category = Category::find($id);
        $shoes = $category->shoes;
        $titleProduct = $category->Producer->name_producer;
        $title = str_replace("-"," ", $name);
        return view('PublicPage.SubShowAll.producer', ['producer'=>$producer,'shoes'=>$shoes, 'title'=> $title,'titleProduct'=>$titleProduct]);
    }

    public function getProducer($id, $name){
        $producerShoes = Producer::find($id);
        // $cate = $producerShoes->category;
        // dd($cate);
        $titleProduct = str_replace("-"," ", $name);

        $producer = Producer::select('id','name_producer')
        ->get(); //trả về cho show menu
        return view('PublicPage.SubShowAll.product2', ['producer'=>$producer,'producerShoes'=>$producerShoes,'titleProduct'=>$titleProduct]);
    }

    public function getProductDetail($id,$name){

        $producer = Producer::select('id','name_producer')
        ->get(); //trả về cho show menu

        $title = str_replace("-"," ",$name);

        $shoes = Shoes::find($id);
        
        $allShoes = Shoes::where('name','=',$shoes->name)->orderBy('id')->get();

        return view('PublicPage.SubShowAll.productShoes',['producer'=>$producer,'title'=> $title,'shoes'=>$shoes, 'allShoes'=>$allShoes]);
    }

    

}
