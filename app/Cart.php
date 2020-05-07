<?php
namespace App;

class Cart{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id,$color,$size){
        $price = $item->price;
        $giohang = [
            'Color' =>$color,
            'Size'  =>$size,
            'Qty'=>0,
            'price'=> $price,
            'item'=>$item];        
        if ($this->items){
            if(array_key_exists($id, $this->items)){
                $giohang = $this->items[$id];
            }
        }
        $giohang['Qty']++;
        $giohang['price'] = $price * $giohang['Qty'];
        $this->items[$id] = $giohang;
        $this->totalQty++;
        $this->totalPrice += $price;
    }

    public function reduceByOne($id){
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['price'];
        $this->items[$id]['Qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        if($this->items[$id]['Qty'] <= 0){
            unset($this->items[$id]);
        }
    }
    
    public function removeItem($id){
        $this->totalQty -= $this->items[$id]['Qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }

    public function update($id, $Qty){
        $item = Shoes::find($id);
        $price = $item->price;
            $old_Qty = $this->items[$id]['Qty'];
            $chenhlech = $Qty - $old_Qty;
            $this->items[$id]['Qty'] = $Qty;
            $this->items[$id]['price'] = $Qty * $price;
            $this->totalQty += $chenhlech;
            $this->totalPrice += $chenhlech * $price;
    }
}