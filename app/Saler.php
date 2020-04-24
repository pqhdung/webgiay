<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saler extends Model
{
    protected $table = 'Saler';

    public function orders(){
        return $this->hasMany('App\Orders','id_saler','id');
    }//relaytionship 1-n saler - order
}
