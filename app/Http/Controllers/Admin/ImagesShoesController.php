<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ImageUpload;
use Illuminate\Support\Str;

use App\Image;


class ImagesShoesController extends Controller
{

    public function index($id){
 
        return View('AdminPage.SubAdmin.multi_image',compact('id'));
    }

    public function upload(){
       $this->request->validate([
          'image' => 'required'
        ]);
        $id = $this->request->id_shoes;
        if ($this->request->hasFile('image')) {
          // xử lý lưu image ảnh lên database
          foreach($this->request->file('image') as $file){
            $image = new Image;
            $image->id_shoes = $id;
            $name= $file->getClientOriginalName();
            $subImage=Str::random(4)."_".$name;
            $file->move('upload',$subImage);
            $image->url = $subImage;
            $image->detail = "";
            $image->save();
          }
        }
        return redirect()->route('all_shoes');
    }

}
