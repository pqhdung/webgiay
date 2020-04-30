<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Producer;
use App\Category;
use App\Shoes;
use App\Colors;
use App\Size;

class DashboardController extends Controller
{
    public function getIndex(){
        return view('AdminPage.SubAdmin.trangchu');
        // return "dashboard";
    }

    public function AddShoes()
    {
        $colors = Colors::all();
        $category = Category::all();
        $size = Size::all();
        return view('AdminPage.SubAdmin.addshoes', compact('colors','category','size'));
    }

    public function postAddShoes()
    {
        $this->validate($this->request,
        [
            'name'             =>'required',
        ],
        [
            'name.required'    =>'Bạn chưa nhập tên.',
        ]);
        $this->validate($this->request,
        [
            'description'             =>'required',
        ],
        [
            'description.required'    =>'Bạn chưa nhập mô tả.',
        ]);
        $this->validate($this->request,
        [
            'category'             =>'required',
        ],
        [
            'category.required'    =>'Bạn chưa chọn loại giày.',
        ]);
        $this->validate($this->request,
        [
            'size'             =>'required',
        ],
        [
            'size.required'    =>'Bạn chưa chưa chọn size.',
        ]);
        $this->validate($this->request,
        [
            'color'             =>'required',
        ],
        [
            'color.required'    =>'Bạn chưa chưa chọn color.',
        ]);
        $this->validate($this->request,
        [
            'sex'             =>'required',
        ],
        [
            'sex.required'    =>'Bạn chưa chon giới tính.',
        ]);
        $this->validate($this->request,
        [
            'images'             =>'required|image|mimes:jpeg,jpg,bmp,png,gif|max:3000',
        ],
        [
            'images.required'    =>'Bạn chưa chọn hình.',
        ]);
        $this->validate($this->request,
        [
            'price'             =>'required',
        ],
        [
            'price.required'    =>'Bạn chưa nhập giá bán.',
        ]);
        
        $shoes = new Shoes;
        if($this->request->hasFile('images'))
        {
            $file= $this->request->file('images');
            $name= $file->getClientOriginalName();
            $subImage=Str::random(4)."_".$name;
            $file->move('upload',$subImage);
            $shoes->images              = $subImage;
        }else{
            $shoes->images              = "";
        }

        $shoes->name                    = $this->request->name;
        $shoes->status                  = "1";
        $shoes->product                 = $this->request->description;
        $shoes->id_category             = $this->request->category;
        $shoes->id_color                = $this->request->color;
        $shoes->id_size                 = $this->request->size;
        $shoes->sex                     = $this->request->sex;
        $shoes->price                   = $this->request->price;
        $shoes->save();


        return redirect('/admins')->with('mess','Thêm thành công.');
    }
}