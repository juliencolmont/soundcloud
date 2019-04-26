<?php

namespace App\Http\Controllers;

use App\User;
use App\Chanson;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MonControleur extends Controller
{
    public function index() {
        $chansons = Chanson::all();
        return view("index", ['chansons'=>$chansons]);
    }
    public function nouvelle(){
        return view("nouvelle");
    }
    public function create (Request $request){
       // print_r($_FILES);
       // die(1);
        if($request->hasFile('chanson') && $request->file('chanson')->isValid()){
            $c = new Chanson();
            $c->nom = $request->input('nom');
            $c->style = $request->input('style');
            $c->utilisateur_id = Auth::id();

            $c->fichier = $request->file('chanson')->store("public/chansons/".Auth::id());
            $c->fichier = str_replace("public/","storage/",$c->fichier);
            $c->save();
        }
        return redirect("/");
    }
    public function utilisateur($id){
        $utilisateur = User::find($id);

        if($utilisateur==false){
            abort(404);
        }
        return view('utilisateur',["utilisateur" => $utilisateur]);
     }
     public function suivi($id){
        $utilisateur = User::find($id);

        if($utilisateur==false){
            abort(403);
        }
        Auth::user()->jeLesSuit()->toggle($id);
        return back();
     }
     public function recherche($s){
        $users = User::whereRaw("name LIKE CONCAT(?,'%')",[$s])->get();
        $chansons = Chanson::whereRaw("nom LIKE CONCAT('%',?,'%')",[$s])->get();

        return view("recherche", ['utilisateurs' => $users, 'chansons' => $chansons]);
        
     }
     public function testajax(){
         return redirect('/recherche/ut');
     }
}
