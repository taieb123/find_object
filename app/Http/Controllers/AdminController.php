<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Category;
use App\Ville;

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
      $category=Category::all();
        return view('admin/category',compact('category'));
    }

    public function ville(){
      $ville=Ville::all();
        return view('admin/ville',compact('ville'));
    }

}
