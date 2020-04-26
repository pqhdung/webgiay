<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';

    public function shoes(){
        return $this->belongsTo('App\Shoes','id_shoes','id');
    }//relaytionship 1-n Shoes - image
}
