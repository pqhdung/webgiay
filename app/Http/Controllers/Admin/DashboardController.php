<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Producer;
use App\Category;
use App\Shoes;

class DashboardController extends Controller
{
    public function getIndex(){
        return view('AdminPage.SubAdmin.trangchu');
        // return "dashboard";
    }
}