<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    public $timestamps = false;

    protected  $fillable = [
        'name_category',
        'id_producer'
    ];

    public function producer(){
        return $this->belongsTo('App\Producer','id_producer','id');
    } //relationship 1-n producer - category

    public function shoes(){
        return $this->hasMany('App\Shoes','id_category','id');
    } //relaytionship 1-n Category - Shoes
}
