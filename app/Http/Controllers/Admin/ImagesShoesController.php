<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ImageUpload;

use App\Image;


class ImagesShoesController extends Controller
{

    public function index($id){
 
        return View('AdminPage.SubAdmin.multi_image',compact('id'));
    }

    public function upload(){
        // use ImageUpload; //Using our created Trait to access inside trait method

       $this->request->validate([
          'image' => 'required'
        ]);
        dd($this->request->image);
        if ($request->hasFile('image')) {
        foreach($request->file('image ') as $file){
          $filePath = $this->UserImageUpload($file); //passing parameter to our trait method one after another using foreach loop
            Image::create([
              'image' => $filePath,
            ]);
          }
         Toastr::success('Image uploaded successfully :)','Success');
        }
        return redirect()->back();
    }

}
