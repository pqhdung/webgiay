<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Producer;
use App\Category;
use App\Shoes;
use App\Cart;

class CartController extends Controller
{
    public function getAddToCart(Request $req, $id){
        $shoes = Shoes::find($id);

        $color = $shoes->color;

        $size = $shoes->size;
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($shoes,$id,$color,$size);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }

    public function ShowAllCart()
    {
        $oldCart = Session('cart');
        $cart = new Cart($oldCart);
        // dd($cart);
        $producer = Producer::select('id','name_producer')->get();
        return view('PublicPage.SubShowAll.showCart')->with([
            'cart'=>Session::get('cart'),
            'product_cart'=>$cart->items,
            'totalPrice'=>$cart->totalPrice,
            'totalQty'=>$cart->totalQty,
            'producer'=>$producer
            ]);
    }
}
