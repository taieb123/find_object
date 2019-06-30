<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\URL;
use  Illuminate\Support\Facades\DB;
use App\Reponse;

class ReponseController extends Controller
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

        $count = DB::table('annonce')
            ->where('id_reponse0', '=', $id)
            ->orWhere('id_reponse1', '=', $id)
            ->orWhere('id_reponse2', '=', $id)
            ->count();
        if ($count == 0 ) {
            DB::table('reponse')
                ->where('id_rep', '=', $id)
                ->delete();
            return back()->with('success', 'supprimer avec success');
        } else {
            return back()->with('error', 'impossible de supprimer');
        }
    }
/**
     * Ajax return reponse a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getreponse(Request $request)
    {
       
        $states = DB::table("reponse")
                    ->where("id_que",'=',$request->idque)
                    ->pluck("id_rep","reponse");
        return response()->json($states);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $req){
        $rep= new Reponse(); 
        $rep->reponse  =$req->rep;
        $rep->id_que  =$req->quetion;
        $rep->save();
        return back()->with('success','Ajouter avec success');
    }

}
