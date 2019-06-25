<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Category;
use App\Ville;
use App\Objet;
use App\Region;

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

    public function objet(){
        $category=Category::all();
        $objet= Objet::all();
          return view('admin/object',compact('category','objet'));
    }

    public function region(){
        $ville=Ville::all();
        $region= Region::all();
          return view('admin/region',compact('ville','region'));
    }

    public function question(){

      $category=Category::all();
      $object= Objet::all();
        return view('admin/question',compact('object','category'));
  }





}
