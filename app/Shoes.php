<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoes extends Model
{
    protected $table = 'shoes';

    public function category(){
        return $this->belongsTo('App\Category','id_category','id');
    } //relaytionship 1-n Category - Shoes

    public function image(){
        return $this->hasMany('App\Image','id_shoes','id');
    }//relaytionship 1-n Shoes - image

    public function oderDetail(){
        return $this->hasMany('App\OderDetail','id_shoes','id');
    }//relaytionship 1-n Shoes - order detail
}
