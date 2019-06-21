<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        return view('admin.adminhome');
    }

    public function listuser(){
        $user=User::all();
        return view('admin/listuser',compact('user'));
    }

    public function category(){
      
        return view('admin/category',compact('user'));
    }
}
