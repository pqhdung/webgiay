<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'size';

    public function shoes(){
        return $this->belongsTo('App\Shoes','id_shoes','id');
    }//relaytionship 1-n Shoes - Size
}
