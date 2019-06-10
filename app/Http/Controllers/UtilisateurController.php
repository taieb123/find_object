<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\DB;
use App\Utilisateur;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('utilisateur.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $utiliateur = new Utilisateur();

        if ($request->hasFile('image')) {
            $fileext=$request->file('image')->getClientOriginalName();
            $filename=pathinfo($fileext,PATHINFO_FILENAME);
            $ext=$request->file('image')->getClientOriginalExtension();
            $FileNameStore=$filename.'_'.time().'.'.$ext;
            $path=$request->file('image')->storeAs('public/img',$FileNameStore);
            
        }

        $utiliateur->adresse=$request->adrs;
        $utiliateur->email=$request->email;
        $utiliateur->mdp=Hash::make($request->mdp);
        $utiliateur->image=$path;
        $utiliateur->nom=$request->nom;
        $utiliateur->prenom=$request->prenom;
        $utiliateur->pseudo=$request->pseudo;
        $utiliateur->sexe=$request->sexe;
        $utiliateur->tel=$request->tel;

        $utiliateur->save();
        return back();
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
        //
    }

 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
   // echo('ogin');
    }
}
