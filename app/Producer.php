<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    protected $table = 'producer';

    public function category(){
        return $this->hasMany('App\Category','id_producer','id');
    } //relationship 1-n producer - category
}
