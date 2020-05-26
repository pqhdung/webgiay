<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';

    public function shoes(){
        return $this->belongsTo('App\Shoes','id_shoes','id');
    }//relaytionship 1-n Shoes - order detail

    public function orders(){
        return $this->belongsTo('App\Orders','id_orders','id');
    }//relaytionship 1-n order - order detail
    public $timestamps = false;
}
