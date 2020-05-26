<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Producer;
use App\Category;
use App\Shoes;
use App\Cart;
use App\User;
use App\Orders;
use App\OrderDetail;
use Auth;

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

    public function getUpdatetocart(Request $req, $id, $Qty){
        $shoes = Shoes::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->update($id, $Qty);
        $req->session()->put('cart',$cart);
        echo 1;
        //return redirect('gio-hang');
    }

    public function checkoutIndex()
    {
        $producer = Producer::select('id','name_producer')->get();

        return view('PublicPage.SubShowAll.checkout',['producer'=>$producer]);
    }
    public function yourOrder()
    {
        $oldCart = Session('cart');
        $cart = new Cart($oldCart);
        $producer = Producer::select('id','name_producer')->get();
        return view('PublicPage.SubShowAll.checkout')->with([
            'cart'=>Session::get('cart'),
            'product_cart'=>$cart->items,
            'totalPrice'=>$cart->totalPrice,
            'totalQty'=>$cart->totalQty,
            'producer'=>$producer
            ]);
    }
    public function checkoutForm()
    {
        $this->validate($this->request,
        [
            'billingfirstname'             => 'required',
        ],
        [
            'billingfirstname.required'    => 'Bạn chưa nhập tên.',
        ]);
        $this->validate($this->request,
        [
            'billinglastname'             => 'required',
        ],
        [
            'billinglastname.required'    => 'Bạn chưa nhập họ.',
        ]);
        $this->validate($this->request,
        [
            'billingaddress'             => 'required',
        ],
        [
            'billingaddress.required'    => 'Bạn chưa nhập đia chỉ.',
        ]);
        $this->validate($this->request,
        [
            'billingemail'             => 'required',
        ],
        [
            'billingemail.required'    => 'Bạn chưa nhập email.',
        ]);
        $this->validate($this->request,
        [
            'billingphone'             => 'required',
        ],
        [
            'billingphone.required'    => 'Bạn chưa nhập số điện thoại.',
        ]);
        
        if(Auth::check())
        {
            $iduser = Auth::user()->id;
            $user = User::find($iduser);
            $phone = "0";//trong table user k có trường này =));
            $name = $user->name;
        }else{
            $iduser = "0";
            $phone = $this->request->billingphone;
            $name = $this->request->billingfirstname;
        }
        
        
        $orders = new Orders;
        $orders ->id_user = $iduser;
        $orders ->phone = $phone;
        $orders ->name = $name;
        $orders ->note = "Mình thích hộp giày đẹp";
        $orders ->address = $this->request->billingaddress;
        $orders ->id_admin = "1";
        $orders->status = "0";
        $orders ->save();

        $oldCart = Session('cart');
        $cart = new Cart($oldCart);

        $Item = $cart ->items;
        
        foreach($Item as $value)
        {
            $orderdetail = new OrderDetail;
            $orderdetail ->id_shoes = $value['item']['id'];
            $orderdetail ->price = $value['item']['price'];
            $orderdetail ->id_orders = $orders ->id;
            $orderdetail ->save();
        }
        return redirect()->back()->with('status','Đặt hàng thành công.');
    }

}
