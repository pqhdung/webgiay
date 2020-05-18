<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;
use Auth;
use App\User;

class AdminLoginController extends Controller
{
    public function getLogin()
    {
        if (Auth::check()) {
            // nếu đăng nhập thàng công thì 
            return redirect('/');
        // return view('AdminPage.SubAdmin.trangchu');

        } else {
            return view('AdminPage.SubAdmin.login-page');
        }

    }

    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function postLogin(LoginRequest $request)
    {
        $login = [
            'email' => $request->txtEmail,
            'password' => $request->txtPassword,
            'level' => 1,
            'status' => 1
        ];
        if (Auth::attempt($login)) {
            return redirect('admins');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }

    /**
     * action admincp/logout
     * @return RedirectResponse
     */
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('getLogin');
    }
}
