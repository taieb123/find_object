<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Annonce;
use App\User;
use App\Category;
use App\Objet;
use App\Ville;
use App\Region;
use App\Question;
use App\Reponse;

class AnnonceController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $category= Category::all();
        $object= Objet::all();
        $ville = Ville::all();
        $region=Region::all();
        $ann = DB::table('annonce')
            ->join('region', 'annonce.id_region_ann', '=', 'region.id_reg')
            ->join('ville', 'region.idville', '=', 'ville.id_ville')
            ->select('annonce.*', 'region.*', 'ville.*')
            ->get();
        return view('annonce.search', compact('category','object','ville','region','quest','ann'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mesAnnonce()
    {
        $id_user =  auth()->user()->id;
        $ann = DB::table('annonce')->where('id_user_ann',$id_user)->get();
        return view('annonce.listannonce', compact('ann'));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $req)
    {
        $ann= new Annonce();
        $id_user =  auth()->user()->id;
        
        if ($req->hasFile('image')) {
            $fileext=$req->file('image')->getClientOriginalName();
            $filename=pathinfo($fileext,PATHINFO_FILENAME);
            $ext=$req->file('image')->getClientOriginalExtension();
            $FileNameStore=$filename.'_'.time().'.'.$ext;
            $path=$req->file('image')->storeAs('annonce',$FileNameStore);
            $ann->image  = $path;
        }
        
        $ann->dateaction = $req->date;
        $ann->description  = $req->desc;
        $ann->etat  = 'found';
        $ann->nom  = $req->nom;
        $ann->lattitude  = $req->lat;
        $ann->longitude  = $req->lng;
        $ann->id_user_ann  = $id_user;
        $ann->id_region_ann  = $req->reg;
        $ann->id_object  = $req->obj;
   
       // $id = DB::getPdo()->lastInsertId();
        for($i =0; $i<=2;$i++){
            $ann->id_reponse.$i  = $req->input('reponse-'.$i);
            $ann->id_question.$i  =  $req->input('question-'.$i);
        }
        
        $ann->save();
        return back()->with('success','instionn ajouter avec success'); 
    }


     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *  * @return \Illuminate\Http\Response
     */
    public function searchobj(Request $req)
    {
        $obj= $req->object;
        $cat= $req->category;
        $ville=$req->ville;
        $region=$req->ville;
        
       
        if($obj != "please choose" && $cat != "please choose" ){
         
            $ann = DB::table('annonce')
            ->join('region', 'annonce.id_region_ann', '=', 'region.id_reg')
            ->join('ville', 'region.idville', '=', 'ville.id_ville')
            ->join('objet', 'annonce.id_object', '=', 'objet.id_objet')
            ->select('annonce.*', 'region.*', 'ville.*','objet.*')
            ->where('annonce.id_object', '=', $obj)
            ->where('objet.id_category', '=', $cat)
            ->get();
        $category= Category::all();
        $object= Objet::all();
        $ville = Ville::all();
        $region=Region::all();
       return view('annonce.search',compact('category','object','ville','region','quest','ann'));
        }
        else if($cat != "please choose"){
           
            $ann = DB::table('annonce')
            ->join('region', 'annonce.id_region_ann', '=', 'region.id_reg')
            ->join('ville', 'region.idville', '=', 'ville.id_ville')
            ->join('objet', 'annonce.id_object', '=', 'objet.id_objet')
            ->select('annonce.*', 'region.*', 'ville.*','objet.*')
            ->where('objet.id_category', '=', $cat)
            ->get();
            $category= Category::all();
            $object= Objet::all();
            $ville = Ville::all();
            $region=Region::all();
            return view('annonce.search',compact('category','object','ville','region','quest','ann'));
        }
        
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *  * @return \Illuminate\Http\Response
     */
    public function searchplace(Request $req)
    {
        $ville=$req->ville;
        $region=$req->ville;
        
        
    if($ville != "please choose"){
        
          $ann = DB::table('annonce')
          ->join('region', 'annonce.id_region_ann', '=', 'region.id_reg')
          ->join('ville', 'region.idville', '=', 'ville.id_ville')
          ->join('objet', 'annonce.id_object', '=', 'objet.id_objet')
          ->select('annonce.*', 'region.*', 'ville.*','objet.*')
          ->where('ville.id_ville', '=', $ville)
          ->get();
          $category= Category::all();
          $object= Objet::all();
          $ville = Ville::all();
          $region=Region::all();
          return view('annonce.search',compact('category','object','ville','region','quest','ann'));
      }else if($ville != "please choose" && $region != "please choose"){
        
          $ann = DB::table('annonce')
          ->join('region', 'annonce.id_region_ann', '=', 'region.id_reg')
          ->join('ville', 'region.idville', '=', 'ville.id_ville')
          ->join('objet', 'annonce.id_object', '=', 'objet.id_objet')
          ->select('annonce.*', 'region.*', 'ville.*','objet.*')
          ->where('annonce.id_region_ann', '=', $region)
          ->where('ville.id_ville', '=', $ville)
          ->get();
          $category= Category::all();
          $object= Objet::all();
          $ville = Ville::all();
          $region=Region::all();
          return view('annonce.search',compact('category','object','ville','region','quest','ann'));
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function  detail($id)
    {
        $ann = DB::table('annonce')
        ->join('region', 'annonce.id_region_ann', '=', 'region.id_reg')
        ->join('ville', 'region.idville', '=', 'ville.id_ville')
        ->join('objet', 'annonce.id_object', '=', 'objet.id_objet')
        ->select('annonce.*', 'region.*', 'ville.*','objet.*')
        ->where('annonce.id_annonce', '=', $id)
        ->get();

        $rep = DB::table('reponse')
        ->join('question', 'reponse.id_que', '=', 'question.id_quest')
        ->select('reponse.*', 'question.*')
        ->where('reponse.id_ann', '=', $id)
        ->get();
    
        return view('annonce.detail',compact('ann','rep'));
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
        $count=  DB::table('signaler')
        ->where('id_ann','=',$id)
        ->count();
        $count1=  DB::table('notifiation')
        ->where('id_ann_notif','=',$id)
        ->count();
        $count2=  DB::table('reponse')
        ->where('id_ann','=',$id)
        ->count();
       
        
        if($count == 0 && $count1 == 0 && $count2 == 0){
           DB::table('annonce')
           ->where('id_annonce','=',$id)
           ->delete();
           return back()->with('success','supprimer avec success');
        }
        else{
           return back()->with('error','impossible de supprimer');
        }
    }
}
