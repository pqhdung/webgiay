<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'Orders';

    public function orderDetail(){
        return $this->hasMany('App\OrderDetail','id_orders','id');
    }//relaytionship 1-n oders - order detail

    public function user(){
        return $this->belongsTo('App\User','id_user','id');
    }//relaytionship 1-n user - order

    public function saler(){
        return $this->belongsTo('App\Saler','id_saler','id');
    }//relaytionship 1-n saler - order
}
