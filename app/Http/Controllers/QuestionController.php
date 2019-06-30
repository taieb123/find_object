<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Barryvdh\Debugbar\DataCollector\QueryCollector;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $req){
        $quest= new Question(); 
        $quest->question =$req->quest;
        $quest->id_obj  = $req->obj;
        $quest->id_category  = $req->categorie;
        
        $quest->save();
        return back()->with('success','Ajouter avec success');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = DB::table('reponse')
            ->where('id_que', '=', $id)
            ->count();
        $count1 = DB::table('annonce')
            ->where('id_question0', '=', $id)
            ->orWhere('id_question1', '=', $id)
            ->orWhere('id_question2', '=', $id)
            ->count();
        if ($count == 0 && $count1 == 0) {
            DB::table('question')
                ->where('id_quest', '=', $id)
                ->delete();
            return back()->with('success', 'supprimer avec success');
        } else {
            return back()->with('error', 'impossible de supprimer');
        }
    }
}
