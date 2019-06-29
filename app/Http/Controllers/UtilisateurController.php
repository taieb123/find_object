<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;
use App\User;
use App\Category;
use App\Objet;
use App\Ville;
use App\Region;
use App\Question;


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

    public function loginview()
    {
        return view('utilisateur.loginuser');
    }


    public function lost()
    {
    $category= Category::all();
    $object= Objet::all();
    $ville = Ville::all();
    $region=Region::all();
    $quest = Question::all();
    return view('utilisateur.lost' , compact('category','object','ville','region','quest'));
    }

    public function found()
    {
    $category= Category::all();
    $object= Objet::all();
    $ville = Ville::all();
    $region=Region::all();
    $quest = Question::all();
    return view('utilisateur.found' , compact('category','object','ville','region','quest'));
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

        $count=  DB::table('users')
            ->where('pseudo','=',$request->pseudo)
            ->count();

        if($count != 0){
            return back()->with('danger','pseudo deja exist');
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',

        ]);

        if ($validator->fails()) {

            return  back()->with('danger', 'email exist deja');
        }

        $count=  DB::table('users')
            ->where('tel','=',$request->tel)
            ->count();

        if($count != 0){
            return back()->with('danger','numero de telephone deja exist');
        }



        $utiliateur = new User();
        if ($request->hasFile('image')) {
            $fileext = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileext, PATHINFO_FILENAME);
            $ext = $request->file('image')->getClientOriginalExtension();
            $FileNameStore = $filename . '_' . time() . '.' . $ext;
            $path = $request->file('image')->storeAs('users', $FileNameStore);
            $utiliateur->image = $path;
        } elseif (strlen($request->mdp) < 8) {

            return back()->with('danger', 'le mot de passe doit etre 8 char au minimum');
        } elseif (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return back()->with('danger', 'email incorrect');
        } else {

            $utiliateur->adresse = $request->adrs;
            $utiliateur->email = $request->email;
            $utiliateur->password = Hash::make($request->mdp);
            $utiliateur->nom = $request->nom;
            $utiliateur->prenom = $request->prenom;
            $utiliateur->pseudo = $request->pseudo;
            $utiliateur->sexe = $request->sexe;
            $utiliateur->tel = $request->tel;

            $utiliateur->save();
            return back()->with('success','compte cree avec success');;
        }
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
           $type= auth()->user()->type;
           if($type =="admin")
           {
            
            return redirect(route('admin'));
           }
           else{
            return redirect(route('home'));
           }
            
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
