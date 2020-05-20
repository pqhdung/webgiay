<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';
    protected $guarded = [];

    public function shoes(){
        return $this->belongsTo('App\Shoes','id_shoes','id');
    }//relaytionship 1-n Shoes - image
    
    // public function up()
    // {
    //     Schema::create('images', function (Blueprint $table) {
    //         $table->bigIncrements('id');
    //         $table->string('image');
    //         $table->timestamps();
    //     });
    // }
    // public function down()
    // {
    //     Schema::dropIfExists('users');
    // }
}
