<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\DB;
use App\User;

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
        $utiliateur = new User();

        if ($request->hasFile('image')) {
            $fileext=$request->file('image')->getClientOriginalName();
            $filename=pathinfo($fileext,PATHINFO_FILENAME);
            $ext=$request->file('image')->getClientOriginalExtension();
            $FileNameStore=$filename.'_'.time().'.'.$ext;
            $path=$request->file('image')->storeAs('public/img',$FileNameStore);
        }

        $utiliateur->adresse=$request->adrs;
        $utiliateur->email=$request->email;
        $utiliateur->password=Hash::make($request->mdp);
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=  auth()->user()->id; 
        $pass=Auth::user()->password;
        $old=$request->mdp;
        $new=$request->newmdp;
        $conf=$request->cnfnewmdp;
  
        if(!($new)||!($conf)||!($old))
        {
            return back()->with('danger','Il ya des quqelque champ est vide'); die;
        }
  
        if((Hash::check($old,$pass))){
                if($new===$conf)
                {
                    $hpass=Hash::make($new);
                    DB::table('users')
                    ->where('id','=',$id)
                    ->update(['email' =>$request->email,'adresse' => $request->adresse,'password' => $hpass,'nom'=> $request->nom, 'prenom'=> $request->prenom,'tel'=>$request->tel]);
                    return back()->with('success','modification avec succés');
                }
                else
                {
                    return back()->with('danger','confirmation mot de pass incorrect'); 
                    
                }
        }
        else {
            return back()->with('danger','ancien mot de passe est incorrect'); 
        }
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
    public function loginuser(Request $request)
    {
        $email=$request->email;
        $pass=$request->mdp;
        if (Auth::attempt(['email' => $email, 'password' => $pass])){
            return redirect(route('home'));
        }
        else{
            return redirect('log-in')->with('error','email ou mot de passe incorrect !');
        }
    }
    public function logout () {
        
        auth()->logout();
       
        return view('accueil');
    }

    public function showedit(){

       $id=  auth()->user()->id; 
       $user= User::where('id', '=', $id)->get();
       
        return view('utilisateur.edit',compact('user'));
    }
}
