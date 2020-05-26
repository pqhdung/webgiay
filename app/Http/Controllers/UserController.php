<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Producer;
use App\User;
use App\Http\Requests\LoginRequest;
use Auth;
class UserController extends Controller
{
    public function index()
    {
        $producer = Producer::select('id','name_producer')->get();
        
        return view('PublicPage.SubShowAll.login',['producer'=>$producer]);
    }
    public function postUserRegister()
    {
        
        $this->validate($this->request,
        [
            'firstname'             => 'required',
        ],
        [
            'firstname.required'    => 'Bạn chưa nhập tên.',
        ]);
        $this->validate($this->request,
        [
            'lastname'             => 'required',
        ],
        [
            'lastname.required'    => 'Bạn chưa nhập họ.',
        ]);
        $this->validate($this->request,
        [
            'email'             => 'required',
        ],
        [
            'email.required'    => 'Bạn chưa nhập email.',
        ]);
        $this->validate($this->request,
        [
            'phone'             => 'required',
        ],
        [
            'phone.required'    => 'Bạn chưa nhập số điện thoại.',
        ]);
        $this->validate($this->request,
        [
            'password'             => 'required',
        ],
        [
            'password.required'    => 'Bạn chưa nhập mật khẩu.',
        ]);
        $this->validate($this->request,
        [
            'confirmpassword'             => 'required',
        ],
        [
            'confirmpassword.required'    => 'Bạn chưa nhập mật khẩu 2.',
        ]);
        
            

        $user = new User;
        $user->name = $this->request->lastname;
        $user->email = $this->request->email;
        $user->password = Hash::make($this->request->password);
        $user ->level = "3";
        $user ->status = "1";
        $user ->save();
        return redirect('/login')->with('message','Đăng ký thành công.');
    }
    public function userpostLogin()
    {
        $login = [
            'email' => $this ->request->email,
            'password' => $this ->request->password,
            'level' => 3,
            'status' => 1
        ];
        
        if (Auth::attempt($login)) {
            return redirect()->back()->with('status','Đăng nhập thành công');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }

    public function getLogout() {
		Auth::logout();
		return redirect('login');
	}
}
