<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producer;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $producer = Producer::select('id','name_producer')->get();
        return view('auth.login',['producer'=>$producer]);
    }
    public function showRegisterLogin()
    {
        $producer = Producer::select('id','name_producer')->get();
        return view('auth.login',['producer'=>$producer]);
    }
}
