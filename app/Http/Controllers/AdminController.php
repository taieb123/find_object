<?php

namespace App\Http\Controllers;

use App\Category;
use App\Objet;
use App\Region;
use App\User;
use App\Ville;
use App\Question;
use Illuminate\Support\Facades\DB;

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

    public function listuser()
    {
        $user = User::all();
        return view('admin/listuser', compact('user'));
    }

    public function category()
    {
        $category = Category::all();
        return view('admin/category', compact('category'));
    }

    public function ville()
    {
        $ville = Ville::all();
        return view('admin/ville', compact('ville'));
    }

    public function objet()
    {
        $category = Category::all();
        $objet = DB::table('objet')
            ->join('category', 'objet.id_category', '=', 'category.id_cat')
            ->select('category.*', 'objet.*')
            ->get();
        return view('admin/ob   ject', compact('category', 'objet'));
    }

    public function region()
    {
        $ville = Ville::all();
        $region = Region::all();
        return view('admin/region', compact('ville', 'region'));
    }

    public function question()
    {
        $category = Category::all();
        $object = Objet::all();
        $questions = DB::table('question')
            ->join('category', 'question.id_category', '=', 'category.id_cat')
            ->join('objet', 'question.id_obj', '=', 'objet.id_objet')
            ->select('category.*', 'question.*', 'objet.*')
            ->get();
        return view('admin/question', compact('object', 'category','questions'));
    }

    public function reponse()
    {
        $question = Question::all();
        $reponses = DB::table('reponse')
            ->join('question', 'reponse.id_que', '=', 'question.id_quest')
            ->select('reponse.*', 'question.*')
            ->get();
        return view('admin/reponse', compact('question','reponses'));
    }

}
