<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Producer;
use App\Category;
use App\Shoes;
use App\Cart;
use App\Colors;
use App\Size;


class CartController extends Controller
{
    public function getAddToCart(Request $req, $id){
        $shoes = Shoes::find($id);
        $c = Colors::find($shoes->id_color);
        // dd($c);
        $color = $c->name_color;
        $s  = Size::find($shoes->id_size);
        $size = $s->size;
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
